<?php
require_once __DIR__ . "/Prodotto.php";

class Cibo extends Prodotto {
    private $gusto;

    function __construct($_nome, $_prezzo, $_quantita, Categoria $_categoria, $_gusto)
    {
        parent::__construct($_nome, $_prezzo, $_quantita, $_categoria);
        $this->gusto = $_gusto;
    }

    public function setGusto($gusto){
        $this->gusto = $gusto;
    }

    public function getGusto() {
        return $this->gusto;
    }
}

?>