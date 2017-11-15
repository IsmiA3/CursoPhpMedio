<html>
<head>
<link rel="stylesheet"
href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css">
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js"></script>
</head>
<body>
<h1>Recetas</h1>
<div class="container-fluid">
<?php 
require 'connection.php';
$consulta=mysqli_query($descriptor, "SELECT * FROM recetas");
$recetas=mysqli_fetch_all($consulta,MYSQLI_ASSOC);
?>


<table class="table table-striped table-hover">
<tr>
<th> Título </th>
<th> Descripción </th>
<th> Fecha </th>
</tr>
<?php foreach ($recetas as $receta):?>
<tr>
<td><?php echo $receta['titulo']?></td>
<td><?= $receta['descripcion']?></td>
<td><?= $receta['fecha']?></td>
</tr>
<?php endforeach;?>
</table>
</div>
</body>
</html>