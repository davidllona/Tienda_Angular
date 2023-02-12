<?php



require "../librerias_php/setup_red_bean.php";

$id_pedido = $_GET["id_pedido"];


$pedido =  R::findOne('pedidos', 'id = ? ', [$id_pedido]);

$sql = "select z.nombre as nombre_zapatilla, z.descripcion, z.precio_original, z.descuento, z.calificacion, pp.cantidad 
from zapatillas as z, productopedido as pp 
where z.id = pp.id_producto and pp.id_pedido = ? order by pp.id asc ";

$productos = R::getAll($sql,[$id_pedido]);

require "ver_detalles_html.php";