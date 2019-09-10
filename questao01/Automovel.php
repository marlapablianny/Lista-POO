<?php

class Automovel {

    protected $valor;
    protected $categoria;
    protected $ipi;

    public function __construct(float $valor, float $categoria) {
        $this->valor = $valor;
        $this->categoria = $categoria;
        $this->ipi = [
            '10' => ['categoria' => 'Até 1.0', 'aliquota' => 7],
            '11' => ['categoria' => 'De 1.0 até 2.0 flex','aliquota' => 11], 
            '12' => ['categoria' => 'De 1.0 até 2.0 gasolina','aliquota' => 13], 
            '13' => ['categoria' => 'Utilitários','aliquota' => 8], 
            '14' => ['categoria' => 'Caminhões','aliquota' => 5], 
        ];
    }

        public function calculoIPI() {
            return $this->valor * ($this->ipi[$this->categoria]['aliquota']/100 + 1);
    }
    

}