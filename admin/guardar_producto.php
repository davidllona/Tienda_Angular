<?php
require_once "../librerias_php/setup_red_bean.php";

$idEditar = $_GET['idEditar'];
$zapatilla = R::load('zapatillas', $idEditar);

$zapatilla->nombre = $_POST['nombre'];
$zapatilla->descripcion = $_POST['descripcion'];
$zapatilla->precio_original = $_POST['precio_original'];
$zapatilla->descuento = $_POST['descuento'];
$zapatilla->stock = $_POST['stock'];
$zapatilla->calificacion = $_POST['calificacion'];
R::store($zapatilla);

include "editar_ok.php";