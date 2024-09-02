<?php
    namespace Projeto\projetoEstacionamento\PHP;
    require_once('Pessoa.php');
    require_once('Mensalista.php');//Conexão esteja completa
    use Projeto\projetoEstacionamento\PHP\ControllerMensalista;
    use Projeto\projetoEstacionamento\PHP\Pessoa;
    Use Projeto\projetoEstacionamento\PHP\Mensalista;
 
?>
<Doctype HTML>
    <HTML lang="PT-BR">
 
        <head>
            <meta charset="UTF-8">
        </head>
 
        <body>
            <form method="POST">
                <label>Nome: </label>
                <input type="text" id="nome" name="nome"/><br><br>
 
                <label>CPF:</label>
                <input type="text" id="cpf" name="cpf"/><br><br>
 
                <label>Telefone:</label>
                <input type="text" id="telefone" name="telefone"/><br><br>
 
                <label>Endereço:</label>
                <input type="text" id="endereco" name="endereco"/><br><br>
 
                <label>Modelo do veiculo:</label>
                <input type="text" id="veiculo" name="veiculo"/><br><br>
 
                <label>Placa do veiculo:</label>
                <input type="text" id="placa" name="placa"/><br><br>
 
                <label>Cor do veículo:</label>
                <input type="text" id="cor" name="cor"><br><br>
 
                <label>Data de pagamento:</label>
                <input type="text" id="dtPagamento" name="dtPagamento"/><br><br>
               
                <label>Valor Mensal:</label>
                <input type="number" id="valorMensal" name="valorMensal"/><br><br>
               
               
                <button>Cadastrar
                <?php
                    try{
       
                        $nome =  $_POST['nome'];
                        $cpf =  $_POST['cpf'];
                        $telefone =  $_POST['telefone'];
                        $endereco =  $_POST['endereco'];
                        $veiculo =  $_POST['veiculo'];
                        $placa =  $_POST['placa'];
                        $cor =  $_POST['cor'];
                        $dtPagamento =  $_POST['dtPagamento'];
                        $valorMensal =  $_POST['valorMensal'];
           
                        $mensalista1 = new Mensalista($nome, $cpf, $telefone, $endereco, $veiculo, $placa, $cor, $dtPagamento, $valorMensal);
                    }catch(Exception $erro){
                    echo $erro;
                    }//fim do try_catch
                ?>
                </button><br><br>
 
                <?php
                    echo $mensalista1->imprimir();
                ?>
 
            </form>
        </body>
</HTML>