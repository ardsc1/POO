<?php
require_once 'pessoa.php';
class Professor extends pessoa{
    private $especialidade;
    private $salario;

    // Construtor
    public function __construct($especialidade, $salario) {
        $this->especialidade = $especialidade;
        $this->salario = $salario;
    }

    // Métodos GET

    public function getEspecialidade() {
        return $this->especialidade;
    }

    public function getSalario() {
        return $this->salario;
    }


    public function setEspecialidade($especialidade) {
        $this->especialidade = $especialidade;
    }

    public function setSalario($salario) {
        if ($salario >= 0) {
            $this->salario = $salario;
        }
    }

    // Método para aumentar o salário
    public function receberAum($aumento) {
        if ($aumento > 0) {
            $this->salario += $aumento;
            echo "Aumento de R$ " . number_format($aumento, 2, ',', '.') . " aplicado. Novo salário: R$ " . number_format($this->salario, 2, ',', '.') . "<br>";
        } else {
            echo "O valor do aumento deve ser positivo!<br>";
        }
    }
}

?>
