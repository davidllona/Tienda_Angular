<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Basket Shop</title>
</head>
<body>
<?php include("menu.php"); ?>
    <?php
    foreach($zapatillas as $zapatilla){
        include ("gestionar_productos_elemento_html.php");
    }
    ?>
</body>
</html>