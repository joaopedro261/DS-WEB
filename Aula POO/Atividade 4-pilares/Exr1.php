
<?php
class Pessoa {
    protected $nome;
    protected $idade;

    public function __construct($nome, $idade) {
        $this->nome = $nome;
        $this->idade = $idade;
    }

    public function verDados() {
        echo "Nome: " . $this->nome . "<br/>";
        echo "Idade: " . $this->idade . "<br/>";
    }
}

class Funcionario extends Pessoa {
    protected $salario;

    public function __construct($nome, $idade, $salario) {
        parent::__construct($nome, $idade);
        $this->salario = $salario;
    }

    public function getSalario() {
        return $this->salario;
    }
}

class Gerente extends Funcionario {
    public function calcularSalario($bonus) {
        return $this->salario + $bonus;
    }
}

class Desenvolvedor extends Funcionario {
    public function calcularSalario($bonus) {
        return $this->salario + $bonus;
    }
}


$gerente = new Gerente("Japa", 40, 5000);
$desenvolvedor = new Desenvolvedor("Sabrina", 30, 4000);


echo "Gerente: " . $gerente->calcularSalario(1000) . "<br/>";
echo "Desenvolvedor: " . $desenvolvedor->calcularSalario(500) . "<br/>";
?>

