<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/../Traits/Peso.php";

class Cibo extends Prodotto {

    use Peso;

    private $gusto;

    function __construct($_nome, $_prezzo, $_quantita, Categoria $_categoria, $_gusto, $_peso)
    {
        parent::__construct($_nome, $_prezzo, $_quantita, $_categoria);
        $this->gusto = $_gusto;
        $this->peso = $_peso;
    }

    public function setGusto($gusto){
        $this->gusto = $gusto;
    }

    public function getGusto() {
        return $this->gusto;
    }
}

?>