<?php

session_start();
$id = $_GET["id"];


for($i = 0; $i<count($_SESSION["carrito"]);$i++){   
    if($_SESSION["carrito"][$i][0] == $id){       
        unset($_SESSION["carrito"][$i]);
    }
}


echo json_encode("ok");