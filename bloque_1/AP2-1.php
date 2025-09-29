<?php
class vehiculoCarrera{
    protected $marca;
    protected $modelo;
    protected $velocidad;
    protected $combustible;

    public function __construct($marca, $modelo, $velocidad, $combustible){
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->velocidad = $velocidad;
        $this->combustible = $combustible;
    }

    public function getMarca(){
        return $this->marca;
    }

    public function getModelo(){
        return $this->modelo;
    }

    public function getVelocidad(){
        return $this->velocidad;
    }

    public function getCombustible(){
        return $this->combustible;
    }

    public function setMarca($marca){
        $this->marca = $marca;
    }

    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

    public function setVelocidad($velocidad){
        $this->velocidad = $velocidad;
    }

    public function setCombustible($combustible){
        $this->combustible = $combustible;
    }


    protected function consumirCombustible($velocidad, $combustible){
        $combustibleConsumido = 100;


        if($this->velocidad > 1 && $this->velocidad < 9){
            $combustibleConsumido = $combustible-0.1;
        }
        elseif($this->velocidad > 9 && $this->velocidad < 49){
            $combustibleConsumido = $combustible-0.5;
        }
        elseif($this->velocidad > 50 && $this->velocidad < 129){
            $combustibleConsumido = $combustible-1.5;
        }
        elseif($this->velocidad > 130 && $this->velocidad < 257){
            $combustibleConsumido = $combustible-2.5;
        }
        elseif($this->velocidad > 258 && $this->velocidad < 347){
            $combustibleConsumido = $combustible-3.5;
        }

        echo "el combustible consumido: $combustibleConsumido";
    }

    public function Arrancar(){
        if($this->velocidad > 0.1){
            echo "El vehiculo ha arrancado";
        }

    }

    public function Acelerar(){
        if($this->velocidad > 0.1){
            echo "El vehiculo ha acelerado a: $this->velocidad";
        }


    }

    public function Detener(){
        if($this->velocidad > 0){
            echo "El vehiculo se ha detendido";
        }
    }

    public function MostrarEstado() {
        echo "El vehiculo es de la marca $this->marca, el modelo $this->modelo, va a $this->velocidad km/h y le queda $this->combustible de combustible.<br>";
    }


    public function __destruct(){
        echo "El vehículo {$this->marca} {$this->modelo} se ha retirado de la carrera.<br>";
    }


}

class vehiculoF1 extends vehiculoCarrera{
    private $alerones;

    public function __construct($marca, $modelo, $velocidad, $combustible, $alerones){
        parent::__construct($marca, $modelo, $velocidad, $combustible);
        $this->alerones = $alerones;
    }
    public function activarDRS() {
        if ($this->alerones) {
            $this->velocidad += 50;
            echo "$this->marca $this->modelo ha activado el DRS y a aumentado al velocidad a: $this->velocidad km/h.<br>";
        }
    }

}


class CocheElectricoF1 extends VehiculoCarrera {
    private $bateria;

    public function __construct($marca, $modelo, $velocidad, $combustible, $bateria) {
        parent::__construct($marca, $modelo, $velocidad, $combustible);
        $this->bateria = $bateria;
    }

    public function recargar() {
        $this->bateria += 20;
        echo "$this->marca $this->modelo está generando bateria. Nivel de batería actual: $this->bateria%<br>";
    }
}


$vehiculoF1 = new vehiculoF1("Aston Martin", "AMR25", 300, 100, true);
$vehiculoF1->Arrancar();
$vehiculoF1->Acelerar();
$vehiculoF1->ActivarDRS();
$vehiculoF1->MostrarEstado();
$vehiculoF1->Detener();


$cocheElectricoF1 = new CocheElectricoF1("Nissan", "Formula e", 250, 80, 90);
$cocheElectricoF1->arrancar();
$cocheElectricoF1->acelerar();
$cocheElectricoF1->recargar();
$cocheElectricoF1->mostrarEstado();
$cocheElectricoF1->detener();
