<?php

require_once "../librerias_php/setup_red_bean.php";

//perparo un registro para la tabla libros
$zapatilla = R::dispense("zapatillas");

$zapatilla->nombre = $_POST["nombre"];
$zapatilla->descripcion = $_POST["descripcion"];
$zapatilla->precio_original = $_POST["precio_original"];
$zapatilla->descuento = $_POST["descuento"];
$zapatilla->stock = $_POST["stock"];
$zapatilla->calificacion = $_POST["calificacion"];
$id_generada = R::store($zapatilla); /*guarda y devuelve la id generada */
/*una vez registrado el libro vamos a guardar su portada*/
//para vuardar el archivo subido, con un nombre igual a la id generada

move_uploaded_file($_FILES["portada"]["tmp_name"], "../server/imagenes/$id_generada.jpg");
move_uploaded_file($_FILES["imagen2"]["tmp_name"], "../server/imagenes/$id_generada.2.jpg");
move_uploaded_file($_FILES["imagen3"]["tmp_name"], "../server/imagenes/$id_generada.3.jpg");
move_uploaded_file($_FILES["imagen4"]["tmp_name"], "../server/imagenes/$id_generada.4.jpg");
move_uploaded_file($_FILES["imagen5"]["tmp_name"], "../server/imagenes/$id_generada.5.jpg");
include("registro_ok.php");