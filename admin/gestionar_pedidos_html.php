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
    pedidos realizados en la tienda
</div>
<div class="menu" style="margin-left: 450px;">
<?php  
    foreach($pedidos as $pedido){
        ?>
			<h4>Pedido de: <?= $pedido["nombre"] ?></h4>
			<ul style="list-style: none">
				<li><b>Nombre:</b><?= $pedido["nombre"] ?></li>
				<li><b>Apellido:</b><?= $pedido["apellido"] ?></li>
				<li><b>Provincia:</b><?= $pedido["provincia"] ?></li>
				<li><b>Direccion de envio:</b><?= $pedido["direccion"] ?></li>
				<li><b>Telefono:</b><?= $pedido["telefono"] ?></li>
				<li><b>Observaciones:</b><?= $pedido["observaciones"] ?></li>
			</ul>
			<a a href="ver_detalles.php?id_pedido=<?= $pedido["id"] ?>"><input type="submit" value="Ver detalles"></a>
		<?php }  ?>
	</div>
    
</body>
</html>