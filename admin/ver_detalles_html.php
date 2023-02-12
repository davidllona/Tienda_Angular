<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<?php include("menu.php"); ?>
<div>
    Informacion del pedido:
</div>

<div class="menu" style="margin-left: 450px;">
			<ul style="list-style: none">
				<li><b>Nombre:</b><?= $pedido["nombre"] ?></li>
				<li><b>Apellido:</b><?= $pedido["apellido"] ?></li>
				<li><b>Provincia:</b><?= $pedido["provincia"] ?></li>
				<li><b>Direccion de envio:</b><?= $pedido["direccion"] ?></li>
				<li><b>Telefono:</b><?= $pedido["telefono"] ?></li>
				<li><b>Observaciones:</b><?= $pedido["observaciones"] ?></li>
	</ul>
</div>
<?php 
    foreach($productos as $p){
        ?> 
        <div class="menu" style="margin-left: 450px;">
			<ul style="list-style: none">
				<li><b>Nombre: </b><?= $p["nombre_zapatilla"] ?></li>
				<li><b>Descripcion: </b><?= $p["descripcion"] ?></li>
				<li><b>Precio original: </b><?= $p["precio_original"] ?> €</li>
				<li><b>Descuento: </b><?= $p["descuento"] ?> %</li>
				<li><b>Calificacion: </b><?= $p["calificacion"] ?></li>
	</ul>
</div>
        <?php

    }
?>

    



</body>
</html>