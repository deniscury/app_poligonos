<?php
    namespace src;

    class Poligono{
        private $forma;

        /**
         * Get the value of forma
         */
        public function getForma()
        {
                return $this->forma;
        }

        /**
         * Set the value of forma
         *
         * @return  self
         */
        public function setForma($forma)
        {
                $this->forma = $forma;
        }

        public function getArea() : float{
            return $this->getForma()->getAltura()*$this->getForma()->getLargura();
        }
    }

