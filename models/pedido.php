<?php

class Pedido{
    private $id;
    private $usuario_id;
    private $colonia;
    private $codigo_postal;
    private $direccion;
    private $costo;
    private $estado;
    private $fecha;
    private $hora;
    // Conexión a base de datos
    private $db;
    
    public function __construct(){
        $this->db = Database::connect();
    }
    function getId() {
        return $this->id;
    }

    function getUsuario_id() {
        return $this->usuario_id;
    }

    function getColonia() {
        return $this->colonia;
    }

    function getCodigo_postal() {
        return $this->codigo_postal;
    }

    function getDireccion() {
        return $this->direccion;
    }

    function getCosto() {
        return $this->costo;
    }

    function getEstado() {
        return $this->estado;
    }

    function getFecha() {
        return $this->fecha;
    }

    function getHora() {
        return $this->hora;
    }

    function setId($id) {
        $this->id = $id;
    }

    function setUsuario_id($usuario_id) {
        $this->usuario_id = $usuario_id;
    }

    function setColonia($colonia) {
        $this->colonia = $this->db->real_escape_string($colonia);
    }

    function setCodigo_postal($codigo_postal) {
        $this->codigo_postal = $this->db->real_escape_string($codigo_postal);
    }

    function setDireccion($direccion) {
        $this->direccion = $this->db->real_escape_string($direccion);
    }

    function setCosto($costo) {
        $this->costo = $costo;
    }

    function setEstado($estado) {
        $this->estado = $estado;
    }

    function setFecha($fecha) {
        $this->fecha = $fecha;
    }

    function setHora($hora) {
        $this->hora = $hora;
    }
        
    public function getAll(){
        $productos = $this->db->query("SELECT * FROM pedido ORDER BY id ASC");
        return $productos;
    }

    public function getOne(){
        $producto = $this->db->query("SELECT * FROM pedido WHERE id = {$this->getId()}");
        return $producto->fetch_object();
    }
    
    public function getOneByUser(){
        $sql = "SELECT p.id, p.costo_total FROM pedido p "
               // . "INNER JOIN linea_pedido lp ON lp.pedido_id = p.id "
                . "WHERE p.usuario_id = {$this->getUsuario_id()} ORDER BY id DESC LIMIT 1";
        
        $pedido = $this->db->query($sql);
        return $pedido->fetch_object();
    }
    
    public function getAllByUser(){
        $sql = "SELECT p.* FROM pedido p "
                . "WHERE p.usuario_id = {$this->getUsuario_id()} ORDER BY id DESC";
        
        $pedido = $this->db->query($sql);
        return $pedido;
    }
    
    public function getProductosByPedido($id) {
//        $sql = "SELECT * FROM producto WHERE id IN "
//                . "(SELECT producto_id FROM linea_pedido WHERE pedido_id={$id})";
                
        $sql = "SELECT pr.*, lp.unidades FROM producto pr "
                . "INNER JOIN linea_pedido lp ON pr.id = lp.producto_id "
                . "WHERE lp.pedido_id={$id}";
                
        $productos = $this->db->query($sql);
        return $productos;
        
    }
    
    public function save(){
        $sql = "INSERT INTO pedido VALUES(NULL, '{$this->getUsuario_id()}', '{$this->getColonia()}', {$this->getCodigo_postal()}, '{$this->getDireccion()}', {$this->getCosto()}, 'confirm', CURDATE(), CURTIME());";
        $save = $this->db->query($sql);
        /*
        echo $this->db->error;
        die();
         */
        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
    public function save_linea(){
        $sql = "SELECT LAST_INSERT_ID() as 'pedido';";
        $query = $this->db->query($sql);
        $pedido_id = $query->fetch_object()->pedido;
        
        foreach($_SESSION['carrito'] as $elemento){
            $producto = $elemento['producto'];
            
            $insert = "INSERT INTO linea_pedido VALUES (NULL, {$pedido_id}, {$producto->id}, {$elemento['unidades']})";
            $save = $this->db->query($insert);
//            var_dump($producto);
//            var_dump($insert);
//            echo $this->db->error;
//            die();
            
        }
        $result = false;
        if($save){
            $result = true;
        }
        return $result;

    }
    public function edit(){
        $sql = "UPDATE pedido SET status ='{$this->getEstado()}' ";
        $sql .= " WHERE id={$this->getId()};";
        
        $save = $this->db->query($sql);

        $result = false;
        if($save){
            $result = true;
        }
        return $result;
    }
}