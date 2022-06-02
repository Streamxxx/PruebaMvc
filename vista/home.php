<?php
require "../config.php";
require "../modelo/conexion.php";

$db = new Conexion();
$db -> conectar();

require "layout/header.php";
require "layout/footer.php";
