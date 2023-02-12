<?php
//recibir los datos del pedido y guardarlos en la tabla pedidos
//tambien guardar en la tabla productopedido cada uno de los productos del pedido

session_start();

require("../librerias_php/setup_red_bean.php");

//para recoger en forma de json lo recibido por post
$jsonInfo = json_decode(file_get_contents("php://input"));

$pedido = R::dispense("pedidos");

//los campos indicados a la izaquierda son los campos de la tabla
// y los campos de la derecha es ol ewnviado desde el servicio de angular
$pedido -> nombre = $jsonInfo->nombre;
$pedido -> apellido = $jsonInfo->apellido;
$pedido -> direccion = $jsonInfo->direccion;
$pedido -> provincia = $jsonInfo->provincia;
$pedido -> telefono = $jsonInfo->telefono;
$pedido -> email = $jsonInfo->email;
$pedido -> tarjeta = $jsonInfo->tarjeta;
$pedido -> observaciones = $jsonInfo->observaciones;


//vamos a almacenar y tambien
//los datos de la conexion de usuario
$ip = "";
if(!empty($_SERVER["HTTP_CLIENT_IP"])){
    $ip = $_SERVER["HTTP_CLIENT_IP"];
}else if(!empty($_SERVER["REMOTE_ADDR"])){

}
$pedido->ip = $ip;
//en las peticiones a servidor disponemos de una
//cadena de caracteres llamada user agent

$pedido-> useragent = $_SERVER["HTTP_USER_AGENT"];

$id_generada_pedido = R::store($pedido);

//registro de los productos del carrito asociandolos 
//a la id generada

foreach($_SESSION["carrito"] as $pc){
    $producto_pedido = R::dispense("productopedido");
    $producto_pedido->id_pedido = $id_generada_pedido;
    $producto_pedido->id_producto = $pc[0];
    $producto_pedido->cantidad = $pc[1];
    R::store($producto_pedido);

}

$_SESSION["carrito"] = array ();

echo json_encode("ok");

