<?php
class loginModel
{
    private $connection;
    
    function __construct($connection)
    {
        $this->connection=$connection; 
    }
    
    function sqlFormSession($email,$clave)
    {
        $sql="SELECT * FROM evento.user 
              WHERE email='$email' 
              AND clave='$clave'
              ";

        $this->connection->query($sql);

        return $this->connection->fetchAll();
    }
}
?>