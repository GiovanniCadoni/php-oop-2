<?php 
trait Peso {
    private $peso;

    public function setPeso($peso) {
        $this->peso = $peso;
    }

    public function getPeso() {
        return $this->peso . 'kg';
    }
}
?>