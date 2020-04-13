<?php

namespace Classes\Modelo;

class Clima {

    public $codCidade;
    public $cidade;
    public $temperatura;
    public $velocidadeVento;
    public $nascerDoSol;
    public $porDoSol;
    public $humidade;
    public $pressao;
    public $descricao;
    public $icone;

    //Converte de kelvin para celsius
    public function getTemperaturaCelsius() : float {
        return $this->temperatura - 273;
    }
    
    //Convete de kelvin para fahrenheit
    public function getTemperaturaFahrenheit() : float {
        return (($this->temperatura * 1.8) - 459.67);
    }
    public function getPordoSol() {
       return date('d/m/Y H:i', $this->porDoSol);
    }
    public function getNascerdoSol(){
         return date('H:i', $this->nascerDoSol);
    }

}

?>