<?php

include_once 'persona.php';
include_once 'dipendente.php';

$persona1= new persona('Mario','Rossi');

$persona1->dataNascita ='23/07/2000';

var_dump($persona1);

$dipendente1= new dipendente('Luigi','Bianchi');

$dipendente1->dataNascita ='05/04/1988';

$dipendente1->stipendio= 1000;

$dipendente1->ruolo= 'venditore';


$dipendente1->verificaStipendio();

    var_dump($dipendente1);




 ?>
