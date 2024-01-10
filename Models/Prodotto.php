<?php
require_once __DIR__ . "/Categoria.php";

class Prodotto {

    protected $nome;
    protected $prezzo;
    protected $quantita = 0;
    protected Categoria $categoria;

    function __construct($_nome, $_prezzo, $_quantita, Categoria $_categoria)
    {
        $this->nome = $_nome;
        $this->prezzo = $_prezzo;
        $this->quantita = $_quantita;
        $this->categoria = $_categoria;
    }

    public function setNome($nome){
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setPrezzo($prezzo){
        $this->prezzo = $prezzo;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function setQuantita($quantita){
        $this->quantita = $quantita;
    }

    public function getQuantita() {
        return $this->quantita;
    }

    public function setCategoria($categoria){
        $this->categoria = $categoria;
    }

    public function getCategoria() {
        return $this->categoria;
    }

    public function prodottoDisponibile($quantita) {
        if($this->quantita >= $quantita) {
            return true;
        } else {
            return false;
        }
    }

    public function addQuantita($quantita_to_add) {
        $this->quantita += $quantita_to_add;
    }

    public function removeQuantita($quantita_to_remove) {
        if($this->prodottoDisponibile($quantita_to_remove)) {
            $this->quantita -= $quantita_to_remove;
        } else {
            throw new Exception('Quantita non presente');
        }
    }
}
?>