<?php
    namespace Projeto\projetoEstacionamento\PHP;

    require_once('Pessoa.php');
    require_once('Funcionario.php');//Conexão esteja completa
    require_once('Gerente.php');


    use Projeto\projetoEstacionamento\PHP\ControllerFuncionario;
    use Projeto\projetoEstacionamento\PHP\Pessoa;
    use Projeto\projetoEstacionamento\PHP\Funcionario;
    use Projeto\projetoEstacionamento\PHP\Gerente;
    use Projeto\projetoEstacionamento\PHP\ControllerGerente ;
 
?>
<Doctype HTML>
    <HTML lang="PT-BR">
 
        <head>
            <meta charset="UTF-8">
        </head>
 
        <body>

        <h1>CADASTRAR NOVO FUNCIONÁRIO:</h1>



            <form method="POST">
                <label>Nome: </label>
                <input type="text" id="nome" name="nome"/><br><br>
 
                <label>Telefone:</label>
                <input type="text" id="telefone" name="telefone"/><br><br>

                <label>Cpf:</label>
                <input type="text" id="cpf" name="cpf"/><br><br>
 
                <label>Endereço:</label>
                <input type="text" id="endereco" name="endereco"/><br><br>
 
                <label>Codigo:</label>
                <input type="text" id="codigo" name="codigo"/><br><br>
 
                <label>Cargo:</label>
                <input type="text" id="cargo" name="cargo"/><br><br>
 
                <label>Salario:</label>
                <input type="text" id="salario" name="salario"><br><br>
 
                <label>Data de Nascimento:</label>
                <input type="text" id="dtnascimento" name="dtnascimento"/><br><br>
               

                <button>Cadastrar
                <?php
                    try{
       
                        $nome =  $_POST['nome'];
                        $cpf  =  $_POST['cpf'];
                        $telefone =  $_POST['telefone'];
                        $endereco =  $_POST['endereco'];
                        $codigo =  $_POST['codigo'];
                        $cargo =  $_POST['cargo'];
                        $salario =  $_POST['salario'];
                        $dtnascimento =  $_POST['dtnascimento'];
           
                        $gerente1 = new Gerente($nome,$cpf, $telefone, $endereco, $codigo, $cargo, $salario, $dtnascimento);
                    }catch(Exception $erro){
                    echo $erro;
                    }//fim do try_catch
                ?>
                </button><br><br>
 
                <?php
                    echo $Gerente1->imprimir();
                ?>
 
            </form>
        </body>
</HTML>