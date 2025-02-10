<?php 
require_once 'pessoa.php';
require_once 'Publicacao.php';

class Livro implements ILivro {
    private $titulo;
    private $autor;
    private $totPaginas;
    private $pagAtual;
    private $aberto;
    private $leitor;

    public function detalhes() {
        echo "Livro:". $this->titulo. " escrito por ". $this->autor;
        echo "<br> Páginas: ". $this->totPaginas . " a atual ". $this->pagAtual;;
        echo "<br> Sendo lido por ". $this->leitor->getNome();
    }

    function __construct($titulo, $autor, $totPaginas, $leitor) {
        $this->titulo = $titulo;
        $this->autor = $autor;
        $this->totPaginas = $totPaginas;
        $this->leitor = $leitor;
        $this->pagAtual = 0;
        $this->aberto = false;
    }

    public function getTitulo() {
        return $this->titulo;
    }
    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getAutor() {
        return $this->autor;
    }
    public function setAutor($autor) {
        $this->autor = $autor;
    }

    public function getTotPaginas() {
        return $this->totPaginas;
    }
    public function setTotPaginas($totPaginas) {
        $this->totPaginas = $totPaginas;
    }

    public function getPagAtual() {
        return $this->pagAtual;
    }
    public function setPagAtual($pagAtual) {
        $this->pagAtual = $pagAtual;
    }

    public function getAberto() {
        return $this->aberto;
    }
    public function setAberto($aberto) {
        $this->aberto = $aberto;
    }

    public function getLeitor() {
        return $this->leitor;
    }
    public function setLeitor($leitor) {
        $this->leitor = $leitor;
    }

    public function abrir() {
        $this->aberto = true;
    }

    public function fechar() {
        $this->aberto = false;
    }

    public function folhear($pagina) {
        if ($this->aberto && $pagina >= 0 && $pagina <= $this->totPaginas) {
            $this->pagAtual = $pagina;
        }
    }

    public function avancarPag() {
        if ($this->aberto && $this->pagAtual < $this->totPaginas) {
            $this->pagAtual++;
        }
    }

    public function voltarPag() {
        if ($this->aberto && $this->pagAtual > 0) {
            $this->pagAtual--;
        }
    }
}
?>
