<?php

/**
 *
 */
class conexion
{
    public $bloque;
    public function inicializa()
    {
        $client = new MongoDB\Driver\Manager('mongodb+srv://ozamora:<PVNcPaIVqKsEQCKD>@ingsof-w6zh2.mongodb.net/test?retryWrites=true&w=majority');
        $db     = $client->test;
    }
    public function prueba()
    {
        $this->bloque = $this->inicializa();
        if ($this->bloque) {
            echo "conexion exitosa";
        } else {
            echo "Error";
        }

    }

}
$objeto = new conexion();
echo $objeto->prueba();
