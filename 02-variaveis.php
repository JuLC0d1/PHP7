<?php

// meus dados:

$nome = "Juliana";
$idade = 17;
$altura = 1.50;

echo "Ola, meu nome é $nome, minha idade é $idade e minha altura é $altura <br>";

$nome = "Tiago";
$idade = 24;
$altura = 1.83;

// alterando os dados

echo "Ola, meu nome é $nome, minha idade é $idade e minha altura é $altura <br>";
print "<hr>";

$carro = "BMW";
//echo $Carro;
print $carro; 

echo "*Nota: <mark style='background-color: cadetblue;'>Variaveis</mark> : para que não de erro como dara se ficar do jeito que esta no código fonte (comentado acima), deve-se escrever de mesma forma que foi colocado na variavel, caso contrario dara erros na impreção no navegador (é claro que se tiver uma variavel de mesmo jeito que o escrito 'errado' dara certo mas se tiver um valor diferente saira com o outro valor claro!)";

// nomes validos em variaveis PHP
/*
$nome
$_meunome
$carro10
$meuNome
*/

// nomes invalidos em variaveis PHP
/*
$120942
$algo&¨%!@#
$meu carro
*/