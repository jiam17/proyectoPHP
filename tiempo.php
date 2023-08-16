<?php

    interface Convertidor {
        public function convertir($valor, $desde, $hasta);
    }

    class ConversorUnidad implements Convertidor {
        protected $factorConversion = [
            'seconds' => 1,
            'minutes' => 60,
            'hours' => 3600,
            'days' => 86400
            ];

        public function convertir($valor, $desde, $hasta) {
            $deFactor = $this->factorConversion[$desde];
            $haciaFactor = $this->factorConversion[$hasta];
            $valorConvertido = ($valor * $deFactor) / $haciaFactor;
            return $valorConvertido;
        }
    }

?>