<?php

class Conexion
{

    public function get_conexion()
    {

        $user = "root";
        $pass = "";
        $host = "localhost";
        $db = "gymachine";

        return new PDO("mysql:host=$host;dbname=$db", $user, $pass);

    }

}
?>