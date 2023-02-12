<?php
require_once "../librerias_php/setup_red_bean.php";


$idEditar = $_GET['idEditar'];
$zapatilla = R::load('zapatillas', $idEditar);
require "editar_producto_html.php";


