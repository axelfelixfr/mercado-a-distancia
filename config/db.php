<?php

class Database{
    public static function connect(){
        $db = new mysqli('localhost','administrador','administrador','mercado_a_distancia');
        $db->query("SET NAMES 'utf8'");
        return $db;
    }
}
