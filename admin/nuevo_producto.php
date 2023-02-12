
</html>
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
						<h1>Alta zapatillas</h1>
					</div>
				</div>
			</div>
			
			<div class="row grid-responsive">
				<div class="column ">
					<div class="card">
						<div class="card-block">
                            <form action="registrar_producto.php" method="post" enctype="multipart/form-data">
								<fieldset>
									<label for="nameField">Nombre</label>
									<input type="text" name="nombre">
									<label for="commentField">Descripcion</label>
									<input type="text" name="descripcion">
									<label for="nameField">Precio Original</label>
									<input type="number" name="precio_original">
                                    <label for="nameField">Descuento</label>
									<input type="number" name="descuento">
									<label for="commentField">Stock</label>
									<input type="number" name="stock">
									<label for="nameField">Calificacion</label>
									<input type="number" name="calificacion">
									<label for="nameField">Imagenes</label>
                                    <input type="file" name="portada">	
									<input type="file" name="imagen2">		
									<input type="file" name="imagen3">
									<input type="file" name="imagen4">
									<input type="file" name="imagen5">		
									<input type="submit" value="REGISTRAR ZAPATILLA">
								</fieldset>
                            </form>
						</div>
					</div>
				</div>
			</div>
			
			
			
	
	<script src="assets_admin/js/chart.min.js"></script>
	<script src="assets_admin/js/chart-data.js"></script>
	<script>
	window.onload = function () {
		var chart1 = document.getElementById("line-chart").getContext("2d");
		window.myLine = new Chart(chart1).Line(lineChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart2 = document.getElementById("bar-chart").getContext("2d");
		window.myBar = new Chart(chart2).Bar(barChartData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		scaleGridLineColor: "rgba(0,0,0,.05)",
		scaleFontColor: "#c5c7cc"
		});
		var chart4 = document.getElementById("pie-chart").getContext("2d");
		window.myPie = new Chart(chart4).Pie(pieData, {
		responsive: true,
		segmentShowStroke: false
		});
		var chart5 = document.getElementById("radar-chart").getContext("2d");
		window.myRadarChart = new Chart(chart5).Radar(radarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.05)",
		angleLineColor: "rgba(0,0,0,.2)"
		});
		var chart6 = document.getElementById("polar-area-chart").getContext("2d");
		window.myPolarAreaChart = new Chart(chart6).PolarArea(polarData, {
		responsive: true,
		scaleLineColor: "rgba(0,0,0,.2)",
		segmentShowStroke: false
		});
	};
	</script>			

</body>
</html>