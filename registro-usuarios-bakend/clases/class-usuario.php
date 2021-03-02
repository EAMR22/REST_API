<?php
// Los atributos son las cualidades de una clase.
    class Usuario{
        private $nombre;
        private $apellido;
        private $fechaNacimiento;
        private $pais;
        
        // asignar es como el metodo "set"
        /*public function asignarNombre($nombre){
            $this->nombre = $nombre;
        }

        public function asignarApellido($apellido){
            $this->apellido = $apellido;
        }
        // obtener es como el metodo "get"
        public function obtenerNombre(){
            return $this->nombre;
        }

        public function obtenerApellido(){
            return $this->apellido;
        }*/

        /**
         * Get the value of nombre
         */ 

        public function __construct($nombre, $apellido, $fechaNacimiento, $pais){
            $this->nombre = $nombre;
            $this->apellido = $apellido;
            $this->fechaNacimiento = $fechaNacimiento;
            $this->pais = $pais;
        }

        public function getNombre()
        {
                return $this->nombre;
        }

        /**
         * Set the value of nombre
         *
         * @return  self
         */ 
        public function setNombre($nombre)
        {
                $this->nombre = $nombre;

                return $this;
        }

        /**
         * Get the value of apellido
         */ 
        public function getApellido()
        {
                return $this->apellido;
        }

        /**
         * Set the value of apellido
         *
         * @return  self
         */ 
        public function setApellido($apellido)
        {
                $this->apellido = $apellido;

                return $this;
        }

        /**
         * Get the value of fechaNacimiento
         */ 
        public function getFechaNacimiento()
        {
                return $this->fechaNacimiento;
        }

        /**
         * Set the value of fechaNacimiento
         *
         * @return  self
         */ 
        public function setFechaNacimiento($fechaNacimiento)
        {
                $this->fechaNacimiento = $fechaNacimiento;

                return $this;
        }

        /**
         * Get the value of pais
         */ 
        public function getpais()
        {
                return $this->pais;
        }

        /**
         * Set the value of pais
         *
         * @return  self
         */ 
        public function setpais($pais)
        {
                $this->pais = $pais;

                return $this;
        }

        public function __toString(){
            return $this->nombre ." ".$this->apellido.
            " (".$this->fechaNacimiento.",".$this->pais.")";
        }
    }

?>