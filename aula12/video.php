<?php 
require_once 'acoesvideos.php';
  class Video implements AcoesVideo {
    private $titulo;
    private $avaliacao;
    private $views;
    private $curtidas;
    private $reproduzindo;

    public function __construct($titulo) {
        $this->titulo = $titulo;
        $this->avaliacao = 1;
        $this->views = 0;
        $this->curtidas = 0;
        $this->reproduzindo = false;
    }

    // Métodos da interface
    public function play() {
        $this->reproduzindo = true;
        echo "Reproduzindo o vídeo: {$this->titulo}\n";
    }

    public function pause() {
        $this->reproduzindo = false;
        echo "Vídeo pausado: {$this->titulo}\n";
    }

    public function like() {
        $this->curtidas++;
        echo "Vídeo curtido: {$this->titulo}\n";
    }

    // Getters e Setters
    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAvaliacao() {
        return $this->avaliacao;
    }

    public function setAvaliacao($avaliacao) {
        $media = ($this->avaliacao + $avaliacao) / $this->views;
        $this->avaliacao = $media;
    }

    public function getViews() {
        return $this->views;
    }

    public function setViews($views) {
        $this->views = $views;
    }

    public function getCurtidas() {
        return $this->curtidas;
    }

    public function setCurtidas($curtidas){

    }
  }
?>