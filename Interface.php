<?php
//Princípio da Segregação da Interface.

//Este princípio define que uma classe nunca deve implementar uma interface que não vá usar.



//Em um cenário fictício para criação de um game de Futebol, teremos algumas times.
// criaremos uma interface Times na qual vai ter os nomes.

interface Times
{
    public function setLocalizacao($longitude, $latitude);
    public function setAltitude($altitude);
    public function renderizar();
}

class  Real Madrid implements Times
{
    public function setLocalizacao($longitude, $latitude)
    {
        //Faz alguma coisa
    }
    
    public function setAltitude($altitude)
    {
        //Faz alguma coisa   
    }
    
    public function renderizar()
    {
        //Faz alguma coisa
    }
}