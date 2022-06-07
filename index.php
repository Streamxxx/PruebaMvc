<?php
require "config.php";
$page = "index";
if(isset($_GET['page']))
    $page = $_GET['page'];
switch($page){
    case 'login':
        require "controlador/loginController.php";
        loginController::index();
        break;
    case 'loginauth':
        require "controlador/loginController.php";
        loginController::login();
        break;
    case 'logout': break;
    case 'admin': echo "Loggeado"; break;
    default: echo"<a href='".urlsite."?page=login'>LOGIN</a>"; break;
}