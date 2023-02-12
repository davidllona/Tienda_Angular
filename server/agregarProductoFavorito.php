<?php
//recibir la id de producto y cantidad para agregar 
//al carrito del usuario actual 
session_start();//necesario para usar la sesion en php
//session_start() debe ser llamado antes de emitir 
//cualquier cosa al usuario 

//para recoger en forma de json lo recibido por post
$jsonInfo = json_decode(file_get_contents("php://input"));

//para evitar tener que trabajar con tablas para el carrito
//vamos a dar la misma funcionalidad usando la sesion

if( ! isset($_SESSION["favorito"]) ){
    $_SESSION["favorito"] = array();
}

$producto_en_favorito = false;
//en $_SESSION["carrito"] tendremos un array donde cada 
//elemento sera otro array, donde en la posicion 0 -> idproducto
//y en la posicion 1 -> cantidad

//for para recorrer los elementos en el array de $_SESSION["carrito"]
for( $i = 0; $i<count($_SESSION["favorito"]); $i++ ){
    //si encuentro un producto en el carrito cuya id sea la misma del producto
    //a agregar:
    if( $_SESSION["favorito"][$i][0] == $jsonInfo->id ){
        //producto encontrado en carrito
        $producto_en_favorito = true;
    }
}//end for
if( ! $producto_en_favorito ){
    array_push($_SESSION["favorito"],array($jsonInfo->id));
}//endif

echo json_encode("ok");


