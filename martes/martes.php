<html>
<body>

<?php
require_once('clases.php');

$persona = new PersonaEspaña("Ismael", "Campos", "Suárez");
/*
$persona->setNombre("Ismael");
$persona->setApellido1("Campos");
$persona->setApellido2("Suarez");
*/
if (PersonaEspaña::comprobarDni('34324324')){
    $persona->setDni("09290659J");
    }

echo $persona->getNombre()."<br>";
echo $persona->getApellidos();
echo $persona->getDni()."<br>";
$persona->Hola("Antonio");

$personajohn = new PersonaUSA("John", "Smith", "Trump");
echo $personajohn->getNombre()."<br>";
echo $personajohn->getApellidos();

?>
</body>
</html>

