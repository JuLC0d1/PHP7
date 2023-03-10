<?php

//  ESCOPO GLOBAL
/*
$nome = "Tayler Kuoti";

function exibeNome(){
    echo $nome;
}

exibeNome();
*/

$nome = "Tayler Kuoti";

function exibeNome(){
    global $nome;
    echo $nome;
}
exibeNome();

echo "<hr>";

////////////////////

function exibeCidade(){
    global $cidade;
    $cidade = "Roacam";
}

exibeNome();
echo $cidade;

echo "<hr>";

