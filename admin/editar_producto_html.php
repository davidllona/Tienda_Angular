<!DOCTYPE html>
</body>
</html>
	<meta charset="utf-8">
	<title>Administrator Basket Shop</title>
	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,300i,400,400i,500,500i,600,600i,700" rel="stylesheet">
	<!-- Template Styles -->
	<link rel="stylesheet" href="assets_admin/css/font-awesome.min.css">
	<!-- CSS Reset -->
	<link rel="stylesheet" href="assets_admin/css/normalize.css">
	<!-- Milligram CSS minified -->
	<link rel="stylesheet" href="assets_admin/css/milligram.min.css">
	<!-- Main Styles -->
	<link rel="stylesheet" href="assets_admin/css/styles.css">
	<!-- bootstrap -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.8.1/font/bootstrap-icons.css">
</head>

<body>
	<div class="navbar">
		<div class="row">
		<div class="column column-30 col-site-title"><a href="../index.jsp" class="site-title float-left">Administación Basket Shop</a></div>
			<div class="column column-30">
				<div class="user-section"><a href="#">
					<img src="assets_admin/img/1.jpg" alt="profile photo" class="circle float-left profile-photo" width="50" height="auto">
					<div class="username">
						<h4>David Llona Martin</h4>
						<p>Administrador</p>
					</div>
				</a></div>
			</div>
		</div>
	</div>
	<div class="row">
		<div id="sidebar" class="column" style="height: 85%;overflow-y: scroll;">
            <ul>
				<li><a href="nuevo_producto.php"><img src="assets_admin/img/usuario.png" alt="" style="width: 5%;"></img> Nuevo producto</a></li>
				<li><a href="gestionar_productos.php"><img src="assets_admin/img/sneaker.png" alt="" style="width: 5%;"></img> Gestionar productos</a></li>
				<li><a href="gestionar_pedidos.php"><img src="assets_admin/img/bolsa-de-la-compra.png" alt="" style="width: 5%;"></img> Gestionar pedidos</a></li>
			</ul>
		</div>
		<section id="main-content" class="column column-offset-20">
			<div class="row grid-responsive">
				<div class="column page-heading">
					<div class="large-card">
						<h1>Editar zapatilla</h1>
					</div>
				</div>
			</div>
			
			<div class="row grid-responsive">
				<div class="column ">
					<div class="card">
						<div class="card-block">
                        <form action="guardar_producto.php?idEditar=<?=$zapatilla['id']?>" method= "post" enctype="multipart/form-data">
								<fieldset>
									<label for="nameField">Nombre</label>
									<input type="text" name="nombre" value="<?=$zapatilla['nombre']?>">
									<label for="commentField">Descripcion</label>
									<input type="text" name="descripcion" value="<?=$zapatilla['descripcion']?>">
									<label for="nameField">Precio</label>
									<input type="text" name="precio_original" value="<?=$zapatilla['precio_original']?>">
                                    <label for="nameField">Descuento</label>
									<input type="text" name="descuento" value="<?=$zapatilla['descuento']?>">
									<label for="commentField">Stock</label>
									<input type="text" name="stock" value="<?=$zapatilla['stock']?>">
									<label for="nameField">Calificacion</label>
									<input type="text" name="calificacion" value="<?=$zapatilla['calificacion']?>">
									<input type="submit" value="GUARDAR CAMBIOS"  onclick="return confirm('¿seguro?');" style="margin:0.5rem;" />
								</fieldset>
							</form>
						</div>
					</div>
				</div>
			</div>
			
			
			
			

</body>
</html>