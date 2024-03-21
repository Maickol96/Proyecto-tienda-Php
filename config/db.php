<?php
//Conexion a la Base de datos

class Database{
    public static function connect(){
        $db = new mysqli('localhost', 'root', '', 'tienda_master');
        //Consulta para validar que los datos que saque de la bd sean en español incluyendo tildes y la ñ
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}