<?php

    class Pokemon {

        private $nombre;
        private $habilidad_1;
        private $habilidad_2;
        private $habilidad_3;
        private $habilidad_po;
        private $vida;

        public function __construct($nombre) {
            $this->nombre = $nombre;
            $this->habilidad_1 = rand(1,100);
            $this->habilidad_2 = rand(1,100);
            $this->habilidad_3 = rand(1,100);
            $this->habilidad_po = 50;
            $this->vida = 100;
        }
        
        public function get_nombre(){
            return $this->nombre;
        }
        
        public function atacar(){
            
            $ataque = rand(1,100);
            
            if($ataque >0 && $ataque <20){
                echo "$this->nombre a conseguido un ataque tipo aire<br>";
                echo "Puntos de daño $ataque";
            }else if($ataque <=50){
                echo "$this->nombre a conseguido un ataque tipo tierra<br>";
                echo "Puntos de daño $ataque";
            }else if($ataque <=88){
                echo "$this->nombre a conseguido un ataque tipo agua<br>";
                echo "Puntos de daño $ataque";
            }else{
                echo "$this->nombre a conseguido un ataque <p class='text-danger'>CRITICO</p><br>";
                echo "Puntos de daño $ataque";
            }
            return $ataque;
        }
        
        public function perderVida($ataque){
            $this->vida -= $ataque;
        }
        
        public function get_vida(){
            return $this->vida;
        }
        
        public function habilidad_1(){
            return $this->habilidad_1;
        }
        
        public function habilidad_2(){
            return $this->habilidad_2;
        }
        
        public function habilidad_3(){
            return $this->habilidad_3;
        }
        
    }
