<?php
$nome = 'Tiago Dolovon';

echo 'meu nome é $nome <br> <hr>';

print "Aspas simples são literais, sendo assim, não importa o camando que tenha colocado dentro dela, vai ser lido como texto (aparentemente tirando o HTML que ta dando certo mesmo assim). <br> <hr>";

echo 'Meu nome é '.$nome.' e minha idade é 24';

print "<br> e isso foi uma concatenação: para contatenar em PHP se coloca o '.' entre o texto que esta dentro de aspas duplas/simples, o ponto e a variavel como foi neste caso";

print "<hr>";


$Nome = "Charlys Ackerman";

print "Aspas duplas são interpretativas então pode colocar por exemplo uma variavel que esta será convertida quando for imprimir no navegador. e para colcoa uma aspas duplas em alguma palavra é de mesma forma que para colocar a aspas simples.";

echo "<br> Olá meu nome é \"$Nome\", e minha idade é \"26\" <br>";

print "como colocar uma aspas simples dentro da aspas simples: <br>";

echo 'Olá meu nome é '.$Nome.', e minha idade é \'26\'';