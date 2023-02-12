<?php


require "../librerias_php/setup_red_bean.php";


if ( isset($_GET["idBorrar"])) {
    $idBorrar = $_GET["idBorrar"];
    $sql = "delete from zapatillas where id = :id ";
    R::exec($sql,[':id' => $idBorrar]);
    echo "registro borrado correctamente";
}

//obtener las zapatillas:
$zapatillas = R::getAll("select * from zapatillas");
require "gestionar_productos_html.php";









