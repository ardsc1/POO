<?php

class Lutador {
    // Atributos privados
    private string $nome;
    private string $nacionalidade;
    private int $idade;
    private float $peso;
    private float $altura;
    private string $categoria;
    private int $vitorias;
    private int $derrotas;
    private int $empates;

    // Construtor
    public function __construct(string $nome, string $nacionalidade, int $idade, float $peso, float $altura, int $vitorias, int $derrotas, int $empates) {
        $this->setNome($nome);
        $this->setNacionalidade($nacionalidade);
        $this->setIdade($idade);
        $this->setPeso($peso);
        $this->setAltura($altura);
        $this->setVitorias($vitorias);
        $this->setDerrotas($derrotas);
        $this->setEmpates($empates);
    }

    // Métodos 
    public function getNome() { return $this->nome; }
    public function setNome($nome) { $this->nome = $nome; }
    
    public function getNacionalidade() { return $this->nacionalidade; }
    public function setNacionalidade($nacionalidade) { $this->nacionalidade = $nacionalidade; }
    
    public function getIdade() { return $this->idade; }
    public function setIdade($idade) { $this->idade = $idade; }
    
    public function getPeso() { return $this->peso; }
    public function setPeso($peso) { $this->peso = $peso; $this->setCategoria(); }
    
    public function getAltura() { return $this->altura; }
    public function setAltura($altura) { $this->altura = $altura; }
    
    public function getCategoria() { return $this->categoria; }
    
    public function getVitorias() { return $this->vitorias; }
    public function setVitorias($vitorias) { $this->vitorias = $vitorias; }
    
    public function getDerrotas() { return $this->derrotas; }
    public function setDerrotas($derrotas) { $this->derrotas = $derrotas; }
    
    public function getEmpates() { return $this->empates; }
    public function setEmpates($empates) { $this->empates = $empates; }

    // Método para definir a categoria com base no peso
    private function setCategoria() {
        if ($this->getPeso() < 52.2) {
            $this->categoria = "Inválido";
        } elseif ($this->getPeso() <= 70.3) {
            $this->categoria = "Leve";
        } elseif ($this->getPeso() <= 83.9) {
            $this->categoria = "Médio";
        } elseif ($this->getPeso() <= 120.2) {
            $this->categoria = "Pesado";
        } else {
            $this->categoria = "Inválido";
        }
    }

    // Métodos públicos
    public function apresentar() {
        echo "Lutador: {$this->getNome()}, Nacionalidade: {$this->getNacionalidade()}, Idade: {$this->getIdade()} anos, Altura: {$this->getAltura()}m, Peso: {$this->getPeso()}kg, Categoria: {$this->getCategoria()}, Vitórias: {$this->getVitorias()}, Derrotas: {$this->getDerrotas()}, Empates: {$this->getEmpates()}\n";
    }

    public function status() {
        echo "{$this->getNome()} é um peso {$this->getCategoria()}, com {$this->getVitorias()} vitórias, {$this->getDerrotas()} derrotas e {$this->getEmpates()} empates.\n";
    }

    public function ganharLuta() {
        $this->setVitorias($this->getVitorias() + 1);
    }

    public function perderLuta() {
      $this->setDerrotas($this->derrotas + 1);
  }
  

    public function empatarLuta() {
        $this->setEmpates($this->getEmpates() + 1);
    }
}


?>
