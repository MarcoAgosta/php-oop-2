<?php

class Product{
    protected string $categoria;
    private int $quantita;
    public string $nome;
    private float $prezzo;
    public string $tipo;
    public string $immagine;

    function __construct($_categoria, $_quantita, $_nome, $_prezzo, $_tipo, $_immagine) {

        $this->setCategoria($_categoria);
        $this->setQuantita($_quantita);
        $this->setNome($_nome);
        $this->setPrezzo($_prezzo);
        $this->setTipo($_tipo);
        $this->setImmagine($_immagine);
    }


    public function getCategoria() {
        return $this->categoria;
    }

    public function setCategoria($categoria) {
        $this->categoria = $categoria;
    
        return $this;
    }

    public function getQuantita() {
        return $this->categoria;
    }

    public function setQuantita($quantita) {
        $this->quantita = $quantita;
    
        return $this;
    }

    public function getNome() {
        return $this->nome;
    }

    public function setNome($nome) {
        $this->nome = $nome;
    
        return $this;
    }

    public function getPrezzo() {
        return $this->prezzo;
    }

    public function setPrezzo($prezzo) {
        $this->prezzo = $prezzo;
    
        return $this;
    }

    public function getTipo() {
        return $this->tipo;
    }

    public function setTipo($tipo) {
        $this->tipo = $tipo;
    
        return $this;
    }

    public function getImmagine() {
        return $this->immagine;
    }

    public function setImmagine($immagine) {
        $this->immagine = $immagine;
    
        return $this;
    }

    public function getIcon() {

        if ($this->categoria == "Cani"){

            return '<i class="fa-solid fa-dog"></i>';

        } elseif ($this->categoria == "Gatti"){

            return '<i class="fa-solid fa-cat"></i>';

        }
    }

    public function getIconTipo() {

        if ($this->tipo == "Cibo"){

            return '<i class="fa-solid fa-bowl-food"></i>';

        } elseif ($this->tipo == "Gioco"){

            return '<i class="fa-solid fa-baseball"></i>';

        } elseif ($this->tipo == "Cuccia"){

            return '<i class="fa-solid fa-house"></i>';

        }
    }
}

?>