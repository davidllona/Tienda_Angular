<?php
require("../librerias_php/setup_red_bean.php");

echo json_encode(R::getAll("select * from zapatillas"));