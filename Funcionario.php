<?php
    namespace Projeto\projetoEstacionamento\PHP;
    
    require_once('Pessoa.php');



    Class Funcionario extends Pessoa{
        protected string $codigo;
        protected string $cargo;
        protected string $salario;
        protected string $setor;

        public function __construct(
            string $nome,
            string $cargo,
            string $salario,
            string $telefone,
            string $endereco,
            string $dtnascimento,
            string $codigo,
            string $cpf
        ){
            parent::__construct($nome,$telefone,$endereco,$cpf);
            $this->codigo = $codigo;
            $this->cargo  = $cargo;
            $this->salario = $salario;
            $this->dtnascimento = $dtnascimento;
        }//fim do construtor

        public function __get(string $name):mixed
        {
            return $this->name;
        }//fim dos gets

        public function __set(string $name, mixed $value):void
        {
            $this->$name = $value;
        }//fim do set

        public function imprimir():string
        {
            
            return parent::imprimir().
                   "<br>Codigo: "       .$this->codigo.
                   "<br>Cargo: "        .$this->cargo.
                   "<br>Salário: "      .$this->salario.
                   "<br>dtnascimento: " .$this->dtnascimento;
        }//fim do método



    }//fim da classe
?>