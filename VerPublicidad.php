<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrar Imagenes</title>
</head>
<body>
	<center>
		<form action="Eliminar.php" method="POST">
			<input Type="number" placeholder="numero" name="Id"/>
			<input type="submit" name="Eliminar">
		</form>
		<table border="4">
			<thead>
				<tr>
					<th colspan="5"><a href="Index.html">Nuevo</a></th>
				</tr>
				<tr>
					<th>Id</th>
					<th>Nombre</th>
					<th>Imagen</th>
					<th>URL de redireccion</th>
					<th colspan="2">Accion</th>
				</tr>
			</thead>
			<tbody>
				<?php

				echo "ingrese numero de id a eliminar"
                   
				//	$query = "SELECT * FROM Banner2";
				//	$mostrar = BannerControlador::ObtenerPublicidad();
					//while ($mostrar->fetch_assoc()) {
			/*	?>
						<tr>
							<td><?php echo $mostrar['id']; ?></td>
							<td><?php echo $mostrar['nombre']; ?></td>
							<td><img src="imagenes/" . <?php $mostrar['imagen']; ?>></td>
							<td><?php echo $mostrar['url']; ?></td>
							<th><a href="Modificar.php?id=<?php echo $row['id']; ?>">Modificar</th>
							<th><a href="Eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</th>
						</tr>
				<?php		
					}*/
				?>
			</tbody>
		</table>
	</center>

</body>
</html>