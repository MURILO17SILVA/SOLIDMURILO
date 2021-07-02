<?php
//Princípio da substituição de Liskov

//Uma classe derivada deve ser substituível por sua classe base.

class B 
{
    public function getNome()
    {
        echo 'Meu nome é B';
    }
}

class C extends B
{ 
    public function getNome()
    {
        echo 'Meu nome é C';
    }
}

$objeto1 = new B;
$objeto2 = new C;

function imprimeNome(A $objeto)
{
    return $objeto->getNome();
}

imprimeNome($objeto1); // Meu nome é B
imprimeNome($objeto2); // Meu nome é C