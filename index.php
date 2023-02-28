<?php
$dados[] = array("nome" => "Roberto", "idade" => 52, "estilo" => "Rock");
$dados[] = array("nome" => "João", "idade" => 18, "estilo" => "Sertanejo");
$dados[] = array("nome" => "Luiz", "idade" => 20, "estilo" => "Funk");
$dados[] = array("nome" => "Carlos", "idade" => 35, "estilo" => "Clássica");
$dados[] = array("nome" => "Tiago", "idade" => 27, "estilo" => "Rock");
$dados[] = array("nome" => "Jonas", "idade" => 14, "estilo" => "Eletrônica");

echo "TODOS OS DADOS CADASTRADOS<br>";
echo "<pre>";
print_r($dados);
echo "</pre>";

function compara($a, $b){
    return $a['nome'] > $b['nome'];
}

usort($dados, 'compara');

echo "TODOS OS DADOS CADASTRADOS EM ORDEM CRESCENTE<br>";
echo "<pre>";
print_r($dados);
echo "</pre>";

function gostaRock($array){
    $resultado = array();
    foreach($array as $item){
        if($item['estilo'] == 'Rock'){
            $resultado[] = $item;
        }
    }
    return $resultado;
}

$Rock = gostaRock($dados);

echo "TODOS OS DADOS DE QUEM GOSTA DE ROCK<br>";
echo "<pre>";
print_r($Rock);
echo "</pre>";

function gostaOutro($array){
    $resultado = array();
    foreach($array as $item){
        if($item['estilo'] != 'Rock'){
            $resultado[] = $item;
        }
    }
    return $resultado;
}

$Outro = gostaOutro($dados);

echo "TODOS OS DADOS DE QUEM GOSTA DE OUTROS ESTILOS<br>";
echo "<pre>";
print_r($Outro);
echo "</pre>";

$maior = $dados[0];
foreach($dados as $item){
    if($item['idade'] > $maior['idade']){
        $maior = $item;
    }
}
echo "TODOS OS DADOS DE QUEM TEM MAIOR IDADE<br>";
echo "<pre>";
print_r($maior);
echo "</pre>";

$menor = $dados[0];
foreach($dados as $item){
    if($item['idade'] < $menor['idade']){
        $menor = $item;
    }
}
echo "TODOS OS DADOS DE QUEM TEM MENOR IDADE<br>";
echo "<pre>";
print_r($menor);
echo "</pre>";

?>