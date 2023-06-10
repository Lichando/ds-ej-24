<!--Para resolver el ejercicio respetar la arquitectura propuesta en clase, y utilizar Getter y Setters

    Declarar una clase “Auto” con las siguientes propiedades: marca, modelo, version y "anio".
     Agregarle un método que imprima sus propiedades (llamado MostrarDatos).
      Luego en un archivo llamado index.php instanciar la clase Auto, completar sus propiedades,
    
-->
<?php
require_once 'modelos/auto.php';

$a = new auto();
$a->setmarca('Ford');
    
$a->setmodelo('Fiesta');
$a->setversion('SE');

$a->setanio(2018);

$a->mostrarDatos();
?>