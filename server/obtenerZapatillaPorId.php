<?php
//devolver en json los libros para que el cliente los muestre
require("../librerias_php/setup_red_bean.php");

echo json_encode(R::getRow("select * from zapatillas where id = ? ", [ $_GET["id"] ] ));
