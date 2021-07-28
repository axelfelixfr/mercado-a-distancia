<?php

class Categoria{
    private $id;
    private $nombre;
    // Conexión a base de datos
    private $db;
    
    public function __construct(){
        $this->db = Database::connect();
    }
    function getId() {
        return $this->id;
    }

    function getNombre() {
        return $this->nombre;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }
    
    public function getAll(){
        $categorias = $this->db->query("SELECT * FROM categoria ORDER BY id ASC;");
        return $categorias;
    }
    
    public function getOne(){
        $categoria = $this->db->query("SELECT * FROM categoria WHERE id={$this->getId()}");
        return $categoria->fetch_object();
    }
    
    public function save(){
        $sql = "INSERT INTO categoria VALUES(NULL, '{$this->getNombre()}');";
        $save = $this->db->query($sql);
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }


}