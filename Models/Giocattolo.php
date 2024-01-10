<?php
require_once __DIR__ . "/Prodotto.php";

class Giocattolo extends Prodotto {
    private $materiale;

    function __construct($_nome, $_prezzo, $_quantita, Categoria $_categoria, $_materiale)
    {
        parent::__construct($_nome, $_prezzo, $_quantita, $_categoria);
        $this->materiale = $_materiale;
    }

    public function setMateriale($materiale){
        $this->materiale = $materiale;
    }

    public function getMateriale() {
        return $this->materiale;
    }
}

?>