<!DOCTYPE html>
<html>
	<head>
		<title>Comedor | Menu</title>
		<meta charset="utf-8">
		<?php  include ('view/head.php'); ?>
	</head>
	<body>
		<?php include("view/header.html");?>
		<section style="height: 420px; background-color: #dbe1f2; padding-top: 90px">
			<div class="mui-container">
				<h4 style="text-align: center; color: blue">
					<strong> LISTA DE MENÚ DEL MES:</strong>
					<div class="mui-dropdown">
					  <button class="mui-btn mui-btn--accent" data-mui-toggle="dropdown">
					    Agosto
					    <span class="mui-caret"></span>
					  </button>
					  <ul class="mui-dropdown__menu">
					    <li><a href="#">Enero</a></li>
					    <li><a href="#">Febrero</a></li>
					    <li><a href="#">Marzo</a></li>
					    <li><a href="#">Abril</a></li>
					    <li><a href="#">Mayo</a></li>
					    <li><a href="#">Junio</a></li>
					    <li><a href="#">Julio</a></li>
					    <li><a href="#">Agosto</a></li>
					    <li><a href="#">Septiembre</a></li>
					    <li><a href="#">Octubre</a></li>
					    <li><a href="#">Noviembre</a></li>
					    <li><a href="#">Diciembre</a></li>
					  </ul>
					</div>
				</h4>
				<table class="mui-table mui-table-bordered">
					<thead >					
						<tr>
							<th class="th-cabecera">ALMUERZO</th>
							<th class="th-cabecera">LUNES</th>
							<th class="th-cabecera">MARTES</th>
							<th class="th-cabecera">MIERCOLES</th>
							<th class="th-cabecera">JUEVES</th>
							<th class="th-cabecera">VIERNES</th>
							<th class="th-cabecera">SABADO</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th class="th-lateral">SOPA</th>
							<th>Fideo</th>
							<th>Chairo</th>
							<th>Trigo</th>
							<th>Semola</th>
							<th>Hachojcha</th>
							<th>Verdura</th>
						</tr>
						<tr>
							<th class="th-lateral">SEGUNDO</th>
							<th>Paella</th>
							<th>Picante de Pollo</th>
							<th>Aji de Panza</th>
							<th>Escabeche de Pollo</th>
							<th>Aji de Papaliza</th>
							<th>Picante de Pollo</th>
						</tr>
						<tr>
							<th class="th-lateral">GUARNICION</th>
							<th>Ensalada</th>
							<th>Arroz y Pan</th>
							<th>Arroz y Yuca</th>
							<th>Arroz y Pan</th>
							<th>Arroz y Yuca</th>
							<th>Arroz y Chuño</th>
						</tr>
						<tr>
							<th class="th-lateral">ENSALDA</th>
							<th>Frejol</th>
							<th>Lecguga</th>
							<th>Repollo</th>
							<th>Papa</th>
							<th>Acelga</th>
							<th>Criolla</th>
						</tr>
						<tr>
							<th class="th-lateral">POSTRE</th>
							<th>Gelatina</th>
							<th>Budin de Frutilla</th>
							<th>Mandarina</th>
							<th>Piña</th>
							<th>Arroz con Leche</th>
							<th>Compota de Piña</th>
						</tr>
						<tr>
							<th class="th-lateral">REFRESCO</th>
							<th>Limonada</th>
							<th>Sultana</th>
							<th>Sesamo</th>
							<th>Papaya</th>
							<th>Piña</th>
							<th>Linaza</th>
						</tr>
					</tbody>
				</table>
			</div>
		</section>
		<footer class="">
			<?php include("view/footer.html");?>
		</footer>
	</body>
</html>