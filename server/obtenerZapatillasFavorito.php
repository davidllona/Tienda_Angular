<?php 
session_start();
if(isset($_SESSION["favorito"])){
    require "../librerias_php/setup_red_bean.php";
    //extraer las ids y cantidades de los productos
    //en $_SESSION["carrito"]
    $ids = array();
    $cantidades = array();
    foreach($_SESSION["favorito"] as $elemento){
        array_push($ids, $elemento[0]);
    }

    $ids_sql = implode(",",$ids);
    $sql = "select id, nombre, precio_original, descuento, calificacion from zapatillas where id in ($ids_sql)";
    $zapatillas = R::getAll($sql);
    $respuesta = array();
    //recorro los libros obtenidos de base de datos, que son los del carrito, 
    //para formar una respuesta para el cliente
    for($i = 0; $i<count($zapatillas); $i++){
        array_push( $respuesta, array( "zapatilla" => $zapatillas[$i]));
    }
    echo json_encode($respuesta);

}else{
    echo json_encode(array());
}
