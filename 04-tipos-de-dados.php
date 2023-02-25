<?php
print "<h1>Escalares</h1>"; 

print "<h2>string:</h2>";

$nome = "Bom dia";

var_dump($nome);

if(is_string($nome)):
    echo "é uma string";
else:
    echo "não é string";
endif;




print "<hr>";

print "<h2>inteiro:</h2>";

$idade = 24; // 24.9
 
var_dump($idade);

if(is_int($idade)):
    echo "é inteiro";
else:
    echo "não é inteiro";
endif;




print "<hr>";

print "<h2>float:</h2>";

$altura = 1.50;

var_dump($altura);

if(is_float($altura)):
    echo "é um float";
else: 
    echo "não é um float";
endif;




print "<hr>";

print "<h2>boolean:</h2>";

$adm = false;

var_dump($adm);

if(is_bool($adm)):
    echo "é um boolean";
else:
    echo "não é um boolean";
endif;




print "<hr>";

print "<h1>Compostos</h1>";

print "<h2>array:</h2>";

$carro = array("Pejot","Toyota","Fiat",5,6.8,true);

var_dump($carro);




print "<hr>";

print "<h2>object</h2>";

class Cliente {
    public $nome;
    public function atribuirNome($nome){
        $this->$nome = $nome;
    }

}

$cliente = new Cliente();
$cliente->atribuirNome("Tiago");
var_dump($cliente);

if(is_object($cliente)):
    echo "é um objeto";
else:
    echo "não é um objeto";
endif;



print "<h1>";

print "<h1>Especiais</h1>";

print "<h2>NULL</h2>";

$cidade = null;
var_dump($cidade);



print "<h1>";

print "<h2>Resource</h2>";




