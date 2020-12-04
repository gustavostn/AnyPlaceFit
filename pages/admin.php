<?php session_start(); ?>
<!DOCTYPE HTML>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../components/fonts/century-gothic.ttf">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="home.css">
    <title>AnyPlace Fit | Página inicial</title>

</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img src="../components/img/logo.png" alt="Logo AnyPlace Fit"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav align-items-center">
                <a class="nav-link" href="../index.html">Página inicial</a>
                <a class="nav-link" href="./sobre.html">Nossa historia</a>
                <a class="nav-link" href="./cadastro.php">Entrar</a>
            </div>
        </div>
    </nav>

   
    <main class="container text-center mt-5">
            <form name="f1" method="POST" action="" style="width: 100%; text-align: center;">
                <div class="submit">
                    <input type="submit" class="btn btn-outline-secondary" name="consultar" value="Consultar Dados" />
                    <input type="submit" class="btn btn-outline-secondary" name="alterar" value="Alterar Dado" />
                    <input type="submit" onclick="funcao1()" class="btn btn-outline-danger" name="excluir" value="Excluir Dados" />
                </div>
                
                <h6 class="text-muted my-4"> Para realizar a alteração de dado, por favor inserir o campo que deseja alterar e o novo valor.</h6>
                <div class="my-5">
                    Campo que deseja troca: <input name="campoUpdate" type="text" />
                    Novo valor: <input name="novoValor" type="text" />
                </div>
            </form>
            
            <div class="resultado">
                
        <?php
            $conexao = mysqli_connect("localhost", "id15015265_anyplace_user","/BPsQ+4vb5WA_Ts!");
            $banco = mysqli_select_db($conexao, "id15015265_anyplacefit"); //Banco que será utilizado
            

            
            if(isset($_POST['consultar'])){
            
            $id = $_SESSION['id'];
            
            $sql="SELECT * FROM user_regs WHERE id='$id'";
            $res=mysqli_query($conexao,$sql);
            
            if($res){
                while ($reg=mysqli_fetch_array($res)){
                   echo "Os dados cadastrados são: <br> ";
                   echo "<br> UserID: " .$reg['id'];
                   echo "<br> Nome: " .$reg['nome'];
                   echo "<br> Email: " .$reg['email'];
                   echo "<br> Sexo: " .$reg['sexo']. " | ";
                   echo " Estado Civil: " .$reg['estado_civil']. " | ";
                   echo " Celular: " .$reg['celular'];
                   echo "<br> Endereço: " .$reg['endereco'];
                 
                }
            }
            
        }
        
            if(isset($_POST['alterar'])){
                
                $id = $_SESSION['id'];
                $campo = $_POST['campoUpdate'];
                $novoValor = $_POST['novoValor'];
                
                $update = "UPDATE user_regs SET $campo='$novoValor' WHERE id='$id'";
                $respUpdate = mysqli_query($conexao, $update);
            }
        
            if(isset($_POST['excluir'])){
                session_destroy();
                echo "<h1> CADASTRO FOI EXCLUIDO COM SUCESSO! </h1>";
                
                $id = $_SESSION['id'];
                $delete = "DELETE FROM user_regs WHERE id='$id'";
                $respDelete = mysqli_query($conexao, $delete);
                 
                
                header('Location: ./sobre.html');
                ob_enf_fluth();
                
                
            }
        ?>
            </div>
    </main>
       
  


    <footer class="rodape fixed-bottom">
        <div class="container conteudo-rodape">
            <div class="esq">
                <h2>AnyPlace Fit</h2>
                <h6><a href="./sobre">Sobre a empresa</a></h6>
                <h6><a href="./sobre">Trabalho conosco</a></h6>
                <h6><a href="../index.html">Como funciona</a></h6>
            </div>
            <div class="dir">
                <h2 class="">Contato</h2>
                <h6>gustavo.stn@outlook.com.br</h6>
                <h6>+55 11 1234-5678</h6>
                <h6><a href="https://github.com/gustavostn/AnyPlaceFit">repositorio github</a> </h6>
            </div>
            <div class="direitos">
                <h6>@ 2020 AnyPlace Fit</h6>
            </div>
        </div>
    </footer>


    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" crossorigin="anonymous"></script>

</body>




