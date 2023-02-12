<?php
session_start(); 
//session_destroy();//eliminar todo lo que hay en sesion
$_SESSION["favorito"] = array();
echo json_encode("ok");