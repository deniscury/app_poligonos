<?php
    namespace src\poligonos;

    class Quadrado{
        protected $altura;
        protected $largura;

        public function __construct()
        {
            $this->setTamanho(0.00);
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
        public function setTamanho(float $tamanho)
        {
                $this->altura = $tamanho;
                $this->largura = $tamanho;

                return $this;
        }

        /**
         * Get the value of largura
         */
        public function getLargura() : float
        {
                return $this->largura;
        }
    }
