<?php
require "conexion.php";
class Login{
    private $db;

    public function __construct(){
        $this->_db =new Conexion();
    }
    public function login($username, $password){
        $this->_db ->conectar();
        $r =$this->_db->conexion->prepare("SELECT * FROM users WHERE username='".$username."' and password='".$password."' ");
        $r->execute();
        $this->_db->desconectar();
        if($r->fetch(PDO::FETCH_OBJ)){
            return true;
        }else{
            return false;
        }
    }

}