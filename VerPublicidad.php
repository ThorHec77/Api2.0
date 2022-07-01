<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Mostrar Imagenes</title>
</head>
<body>
	<center>
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
                   require $_SERVER['DOCUMENT_ROOT'] ."/ApiPublicidad2.0/utils/autoload.php"; 
				//	$query = "SELECT * FROM Banner2";
					$elementos = array(BannerControlador::ObtenerImagen());
				
					while ($row = fetch_all($elementos)) {
						printf ("%s (%s)\n", $row["Imagen"], $row["Nombre"]);
					
				?>
						<tr>
							<td><?php echo $elementos['Id']; ?></td>
							<td><?php echo $elementos['Nombre']; ?></td> 
							<td><img src="imagenes/" . <?php $row['Imagen']; ?>></td>
							<td><?php echo $elemntos['Url']; ?></td>  
							<th><a href="Modificar.php?id=<?php echo $row['id']; ?>">Modificar</th>  
							<th><a href="Eliminar.php?id=<?php echo $row['id']; ?>">Eliminar</th>   
						</tr>
				<?php		
					}
				?>
			</tbody>
		</table>
	</center>

</body>
</html>