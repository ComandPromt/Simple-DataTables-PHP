<!DOCTYPE html>

<html lang="es">

<head>
	<meta charset="UTF-8">
	<title>DataTables</title>
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/dataTables.bootstrap.min.css">
</head>

<body>

	<div class="content">
	
		<div class="row">
		
			<div style="width:94%;padding-left:5%;padding-top:2%;">
			
				<table class="table display AllDataTables row">
			
					<thead>
					
						<tr>
							<th>Cantante</th>
							<th>Canción</th>
							<th>Género</th>
						</tr>
						
					</thead>
					
					<tbody>
					
					<?php
					
						$mysqli = new mysqli('host','user', 'pass', 'bd');
						
						$mysqli->set_charset("utf8");
					
						$consulta = $mysqli->query('SELECT Cantante,Cancion,Genero FROM musica ORDER BY Id');
			
						while($fila = $consulta->fetch_row()){
							print '<tr><td>'.$fila[0].'</td>';
							print '<td>'.$fila[1].'</td>';
							print '<td>'.$fila[2].'</td></tr>';
						}
									
						$mysqli->close();
			
					?>
					
					</tbody>
				
				</table>
			
				<script src="js/jquery-3.2.1.min.js"></script>
				
				<script src="js/bootstrap.min.js"></script>
				
				<script src="js/jquery.dataTables.min.js"></script>
				
				<script src="js/dataTables.bootstrap.min.js"></script>
				
				<script>
				
					$(document).ready( function () {
						
						$('.AllDataTables').DataTable({
							
							language: {
								"sProcessing":     "Procesando...",
								"sLengthMenu":     "Mostrar _MENU_ registros",
								"sZeroRecords":    "No se encontraron resultados",
								"sEmptyTable":     "Ningún dato disponible en esta tabla",
								"sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
								"sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
								"sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
								"sInfoPostFix":    "",
								"sSearch":         "Buscar:",
								"sUrl":            "",
								"sInfoThousands":  ",",
								"sLoadingRecords": "Cargando...",
								
								"oPaginate": {
									"sFirst":    "Primero",
									"sLast":     "Último",
									"sNext":     "Siguiente",
									"sPrevious": "Anterior"
								},
								
								"oAria": {
									"sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
									"sSortDescending": ": Activar para ordenar la columna de manera descendente"
								}
								
							}
							
						});
						
					} );
					
				</script>
				
			</div>
			
		</div>
		
	</div>
	
</body>

</html>