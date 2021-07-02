<?php
//Princípio da Inversão de Dependência — Dependa de abstrações e não de implementações.

 //As entidades devem depender de abstrações, não de concreções. Ele afirma que o módulo de
 //alto nível não deve depender do módulo de baixo nível, mas deve depender de abstrações.

interface DBConnectionInterface
{
    public function connect();
    //Módulos de alto e baixo nível dependam da abstração proposta pela interface. 
}


class MySQLConnection implements DBConnectionInterface
{
    public function connect()
    
    }
}

class OracleConnection implements DBConnectionInterface
{
    public function connect()
    
    }
}

class PasswordReminder
{
    private $dbConnection;

    public function __construct(DBConnectionInterface $dbConnection) {
        $this->dbConnection = $dbConnection;
    }
  
    // Faz alguma coisa
}