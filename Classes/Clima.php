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
    public $acesso;

    //Converte de kelvin para celsius
    public function getTemperaturaCelsius() : float {
     
    // C = K -273.15
     $celcius = $this->temperatura - 273.15;      
     return $celcius;
   
    }
    
    //Convete de kelvin para fahrenheit
    public function getTemperaturaFahrenheit() : float {
        
          // F = K x 1.8 -459.67
        $fahrenheit = ($this->temperatura * 1.8) - 459.67;       
        return $fahrenheit;

    }

}

?>
