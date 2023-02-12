<div class="menu" style="margin-left: 530px;">
			<ul style="list-style: none">
				<img src="../server/imagenes/<?= $zapatilla["id"] ?>.jpg" height="200" width="200" alt=""/>
				<img src="../server/imagenes/<?= $zapatilla["id"] ?>.2.jpg" height="200" width="200" alt=""/>
				<img src="../server/imagenes/<?= $zapatilla["id"] ?>.3.jpg" height="200" width="200" alt=""/>
				<img src="../server/imagenes/<?= $zapatilla["id"] ?>.5.jpg" height="200" width="200" alt=""/>	
				<img src="../server/imagenes/<?= $zapatilla["id"] ?>.4.jpg" height="200" width="200" alt=""/>
							
				<li><b>Nombre:</b><?= $zapatilla["nombre"] ?></li>
				<li><b>Descripcion:</b><?= $zapatilla["descripcion"] ?></li>
				<li><b>Precio:</b><?= $zapatilla["precio_original"] ?> € </li>
				<li><b>Descuento:</b><?= $zapatilla["descuento"] ?> € </li>
				<li><b>Cantidad en stock:</b><?= $zapatilla["stock"] ?></li>
				<li><b>Calificacion:</b><?= $zapatilla["calificacion"] ?></li>
			</ul>
			<a onclick="return confirm('¿Seguro que quieres borrarlo?');" href="?idBorrar=<?=$zapatilla['id']?>"><input type="submit" value="BORRAR"></a>
			<a href="editar_producto.php?idEditar=<?=$zapatilla['id']?>"><input type="submit" value="EDITAR"></a>
		</div>