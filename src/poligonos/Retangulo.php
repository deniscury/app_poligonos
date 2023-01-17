<?php
    namespace src\poligonos;

    class Retangulo{
        protected $altura;
        protected $largura;

        public function __construct()
        {
            $this->setAltura(0.00);
            $this->setLargura(0.00);
        }

        /**
         * Get the value of altura
         */
        public function getAltura() : float
        {
                return $this->altura;
        }

        /**
         * Set the value of altura
         *
         * @return  self
         */
        public function setAltura(float $altura)
        {
                $this->altura = $altura;

                return $this;
        }

        /**
         * Get the value of largura
         */
        public function getLargura() : float
        {
                return $this->largura;
        }

        /**
         * Set the value of largura
         *
         * @return  self
         */
        public function setLargura(float $largura)
        {
                $this->largura = $largura;

                return $this;
        }
    }
