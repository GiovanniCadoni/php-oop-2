<?php
require_once __DIR__ . "/Prodotto.php";
require_once __DIR__ . "/../Traits/Peso.php";

class Giocattolo extends Prodotto {

    use Peso;

    private $materiale;

    function __construct($_nome, $_prezzo, $_quantita, Categoria $_categoria, $_materiale, $_peso)
    {
        parent::__construct($_nome, $_prezzo, $_quantita, $_categoria);
        $this->materiale = $_materiale;
        $this->peso = $_peso;
    }

    public function setMateriale($materiale){
        $this->materiale = $materiale;
    }

    public function getMateriale() {
        return $this->materiale;
    }
}

?>