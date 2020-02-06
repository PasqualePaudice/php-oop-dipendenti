<?php

include_once 'persona.php';

class dipendente extends persona
{

    public $stipendio;
    public $ruolo;

    public function verificaStipendio(){
        if (!is_numeric($this->stipendio)) {
         throw new Exception("Non hai inserito un numero valido");
        }
        return true;
    }

}









 ?>
