<?php
class Categoria {
    private $icona;
    private $nome;

    function __construct($_icona, $_nome)
    {
        $this->icona = $_icona;
        $this->nome = $_nome;
    }

    public function setIcona($icona) {
        $this->icona = $icona;
    }

    public function getIcona() {
        return $this->icona;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    }

    public function getNome() {
        return $this->nome;
    }
}

$cani = new Categoria('fa-solid fa-dog', 'cani');
$gatti = new Categoria('fa-solid fa-cat', 'gatti');

?>