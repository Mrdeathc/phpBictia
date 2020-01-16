<?php

    class Desayuno {

        public $pan;
        public $leche;
        public $huevos;
        public $tocineta;
        public $sarten;
        public $plato;
        public $vaso;

        public function __construct($sarten, $tocineta, $huevos, $plato, $pan, $leche, $vaso){

            $this->pan = $pan;
            $this->leche = $leche;
            $this->huevos = $huevos;
            $this->tocineta = $tocineta;
            $this->sarten = $sarten;
            $this->plato = $plato;
            $this->vaso = $vaso;

        }

        public function realizar1(){

            echo "1: calentar un $this->sarten y agregar la $this->tocineta en el $this->sarten para engrasar <br> 
                  2: Añadir los $this->huevos al $this->sarten y cocinarlos junto a la $this->tocineta <br>
                  3: Sacar los $this->huevos con $this->tocineta y ponerlos en el $this->plato junto al $this->pan <br>
                  4: Servir la $this->leche en un $this->vaso y listo ya tienes tu desayuno";
        }

    }

    $desayuno = new Desayuno('sarten', 'tocineta', 'huevos', 'plato', 'pan', 'leche', 'vaso');
    $desayuno->realizar1();

?>