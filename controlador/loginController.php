<?php
session_start();
require "modelo/login.php ";
class loginController{
    public function index(){
        if(isset($_SESSION['login'])){
            header('location:'.urlsite);
        }
        require "vista/front/formlogin.php";
    }
    
    public function login(){
        $_modelo = new Login();
        $_username = trim($_POST['txtusername']);
        $_passw = password_hash(trim($_POST['txtpassword']));

        $_login = $_modelo->login($_username,$_passw);
        if($_resultado){
            $_SESSION['login'] = $_username;
            header('location:'.urlsite."?page=admin");
        }else{
            header('location:'.urlsite."?msg= No coinciden las credenciales");
        }
    }
}