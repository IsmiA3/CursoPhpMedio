<html>
<body>
<?php
require_once 'clases.php';

$persona = new PersonaEspaña("Manolito", "Primero", "Segundo");
$dni = new Dni;
$dni->setDocumento("897489423798");
$persona->setDocumento($dni);
$pasaporte = new Pasaporte();
$pasaporte->setDocumento("Pasaporte 783462876348");
$persona->setDocumento($pasaporte);

echo $persona->getApellidos()."<br>";
foreach ($persona->getDocumento() as $documento){
    echo $documento->getDocumento()."<br>";
}
echo var_dump($persona->getDocumento());
//echo $persona->getDni();
print_r($persona->getDocumento());
?>
</body>
</html>