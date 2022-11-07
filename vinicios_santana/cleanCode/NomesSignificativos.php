<?php

//$ymd = date('Y-m-d'); --dar um nome que faça sentido as variaveis
$dataAtual = date('d/m/Y');

//saber o que é essa variavel apos dias de trabalho
$d = 0;

$diasTrabalhados = 0;

//usar somente o p deixa o codigo confuso
foreach ($peoples as $p){
    echo $p->nome;
}
//usando as variaveis bem definidas
foreach ($peoples as $people){
    echo $people->nome;
}
