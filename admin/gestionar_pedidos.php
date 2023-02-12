<?php



require "../librerias_php/setup_red_bean.php";
$sql = "select p.id, p.nombre, p.apellido, p.direccion, p.provincia, p. telefono, p.email, p.observaciones 
from pedidos as p 
order by p.id desc";


$pedidos  =R::getAll($sql);

require("gestionar_pedidos_html.php");