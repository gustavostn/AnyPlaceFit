<?php session_start(); ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link href="../components/fonts/century-gothic.ttf">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <link rel="stylesheet" href="cadastro.css">
    <script>

    </script>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="../index.html"><img src="../../components/img/logo.png"
                alt="Logo AnyPlace Fit"></a>
        <button class="navbar-toggler navbar-light" type="button" data-toggle="collapse"
            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav align-items-center">
                <a class="nav-link" href="../index.html">Página inicial</a>
                <a class="nav-link" href="./sobre.html">Nossa historia</a>
                <a class="nav-link" href="#">Entrar</a>
            </div>
        </div>
    </nav>

    <main>
        <section class="container">
            <div class="align-login container background ">
                <form id="form-login" class="form" name="formEntrada" action="" method="POST">
                    <input class="campos" name="email_login" type="email" placeholder="Email">
                    <input class="campos" name="senha_login" type="password" placeholder="Senha">
                    <h6 class="senha"> <a href="#">Esqueceu sua senha?</a> </h6>
                    <input class="btn btn-login" type="submit" name="btn_logar" value="entrar">
                    <h6>Ou</h6>
                    <input class="btn btn-cadastro" type="button" value="cadastrar" onclick="register()">
                </form>
            </div>

            <div id="form-obrigado" style="display: none;">
                <div class="msg-obrigado">
                    <h3>Cadastro realizado com sucesso!</h3>
                </div>
            </div>

            <form id="form-register" style="display: none;" name="formRegister" action="" method="POST">
                <div class="background-cadastro form-cadastro">
                    <div class="align-cadastro">
                        <div>
                            <div class="input-cadastro">
                                <input class="campo-cadastro" type="text" name="nome-cad" id="reg_name"
                                    placeholder="Nome completo">
                            </div>
                            <div class="input-cadastro">
                                <input class="campo-cadastro" type="text" name="email-cad" id="reg_email"
                                    placeholder="Email">
                            </div>
                            <div class="input-cadastro">
                                <input class="campo-cadastro" type="text" name="email_validate" id="reg_email_validate"
                                    placeholder="Digite seu Email novamente">
                            </div>
                            <div class="input-cadastro">
                                <input class="campo-cadastro" type="password" name="senha-cad" id="reg_senha_"
                                    placeholder="Digite uma senha">
                            </div>
                            <div class="input-cadastro">
                                <input class="campo-cadastro" type="password" name="senha_validate"
                                    id="reg_senha_validate" placeholder="Digite sua senha novamente">
                            </div>
                        </div>
                        <div>
                            <div class="input-cadastro">
                                <select class="campo-cadastro" name="sexo-cad" placeholder="Sexo">
                                    <option value="M">
                                        Masculino
                                    </option>
                                    <option value="F">
                                        Feminino
                                    </option>
                                </select>
                            </div>
                            <div class="input-cadastro">
                                <select class="campo-cadastro" name="estadoCivil-cad" placeholder="Sexo">
                                    <option value="S">
                                        Solteiro
                                    </option>
                                    <option value="C">
                                        Casado
                                    </option>
                                    <option value="D">
                                        Divorciado
                                    </option>
                                    <option value="V">
                                        Viúvo
                                    </option>
                                </select>
                            </div>
                            <div class="input-cadastro">
                                <input class="campo-cadastro" type="text" name="telefone" id="reg_telefone"
                                    placeholder="Telefone">
                            </div>
                            <div class="input-cadastro">
                                <input class="campo-cadastro" type="text" name="celular-cad" id="reg_celular"
                                    placeholder="Celular">
                            </div>
                            <div class="input-cadastro">
                                <input class="campo-cadastro" type="text" name="endereco-cad" id="reg_endereco"
                                    placeholder="Endereço completo">
                            </div>
                        </div>
                    </div>
                    <div class="text-center py-3">
                        <div>
                            <span id="form_status" style="color:red;"></span>
                        </div>
                        <div>
                            <span id="error_email" style="color:red;"></span>
                        </div>
                        <div>
                            <span id="error_password" style="color:red;"></span>
                        </div>
                    </div>
                    <div class="botao-login text-center ">
                        <input class="btn confirma-cadastro" name="conf-cad" onclick="valideForm()" type="submit" value="cadastrar">
                    </div>
                    <br />
                </div>
            </form>
        </section>
    </main>

    <footer class="rodape" id="footer">
        <div class="container conteudo-rodape ">
            <div class="esq">
                <h2>AnyPlace Fit</h2>
                <h6><a href="./sobre.html">Sobre a empresa</a></h6>
                <h6><a href="#">Trabalho conosco</a></h6>
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

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha256-4+XzXVhsDmqanXGHaHvgh1gMQKX40OUvDEBTu8JcmNs=" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
        crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>

        function register() {
            $('#form-login').fadeOut(200);
            $('#form-register').fadeIn(200);
        }

        function compareEqual(val1, val2) {
            if (val1 != val2 || !val1.length && !val1.length)
                return false
            else
                return true
        }

        function validateEmail(email) {
            const re =
                /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
            return re.test(email);
        }

        function valideForm() {
            let form_status = true;
            let formArr = $('#form-register').serializeArray()
            let formSituacao = []
            $('#footer').fadeOut(200);


            for (let i = 0; i < formArr.length; i++) {
                if (!formArr[i].value) {
                    formSituacao.push(false);
                    $('#form_status').html('Ops! Todos os campos são obrigatórios.');
                } else {
                    formSituacao.push(true);
                    $('#form_status').html('');
                }
            }

            if (!compareEqual(formArr[1].value, formArr[2].value)) {
                formSituacao.push(false);
                $('#error_email').html('Os campos de e-mail devem ser iguais.');
            } else {
                formSituacao.push(true);
                $('#error_email').html('');

                if (!validateEmail(formArr[1].value)) {
                    formSituacao.push(false);
                    $('#error_email').html('Por favor, digite um e-mail válido!');
                }
            }

            if (!compareEqual(formArr[3].value, formArr[4].value)) {
                formSituacao.push(false);
                $('#error_password').html('Os campos de senha devem ser iguais.');
            } else {
                formSituacao.push(true);
                $('#error_password').html('');
            }

            for (let y = 0; y < formSituacao.length; y++) {
                if (!formSituacao[y]) {
                    form_status = false;
                }
            }

            console.log(formArr, formSituacao, form_status);
            if (form_status) {
                $('#form-register').fadeOut(200);
                $('#form-obrigado').fadeIn(200);
            }
        }

  /* 
        const button = document.querySelector('.confirma-cadastro')
        button.onclick = confirmaDados

        function confirmaDados(e) {
            if (!valideForm()) {
                e.preventDefault()
            }
        }
*/
        function loginSuccess() {
        
            setTimeout("window.location='/pages/home.php'", 10);
        }
        function loginFailed() {
            window.alert('Usuario não encontrado, por favor tente novamente')
            setTimeout("window.location='cadastro.php'", 3000);
        }
        
    
    </script>
</body>
<?php 

    $conexao = mysqli_connect("localhost", "id15015265_anyplace_user","/BPsQ+4vb5WA_Ts!");
    $banco = mysqli_select_db($conexao, "id15015265_anyplacefit");
    
    
    if(isset($_POST['btn_logar'])){
        $emailLogin = $_POST['email_login'];
        $senhaLogin = $_POST['senha_login'];
        
        $selectUser = "SELECT * FROM user_regs WHERE email='$emailLogin' AND aes_decrypt(senha, 'uam') ='$senhaLogin';";
       
        $verRegistro = mysqli_query($conexao, $selectUser);
        $statusRegistro = mysqli_num_rows($verRegistro);
        
            if($statusRegistro > 0){
                while($consultaDados = mysqli_fetch_array($verRegistro) ){
   
                    $_SESSION["id"] = $consultaDados['id'];
                    $_SESSION["nome"] = $consultaDados['nome'];
                    $_SESSION["email"] = $consultaDados['email'];
                    $_SESSION["senha"] = $consultaDados['senha'];
                    $_SESSION["sexo"] = $consultaDados['sexo'];
                    $_SESSION["estado_civil"] = $consultaDados['estado_civil'];
                    $_SESSION["celular"] = $consultaDados['celular'];
                    $_SESSION["endereco"] = $consultaDados['endereco'];
                }
                  
                    echo "<script>loginSuccess()</script>";
            }else{
                
                echo "<script>loginFailed()</script>";
            }
    }
    
    if(isset($_POST['conf-cad'])){
        
        $nomeCad = $_POST['nome-cad'];
        $emailCad = $_POST['email-cad'];
        $senhaCad = $_POST['senha-cad'];
        $sexoCad = $_POST['sexo-cad'];
        $estado_civilCad = $_POST['estadoCivil-cad'];
        $celularCad = $_POST['celular-cad'];
        $enderecoCad = $_POST['endereco-cad'];
        
        $insertCadastro = "INSERT INTO user_regs (nome, email, senha, sexo, estado_civil, celular, endereco) 
        VALUES ('$nomeCad', '$emailCad', aes_encrypt('$senhaCad','uam'), '$sexoCad', '$estado_civilCad', '$celularCad', '$enderecoCad');";
        
        $realizaInsert = mysqli_query($conexao, $insertCadastro);
        $statusInsert = ($realizaInsert) ? 'Usuario cadastrado com sucesso!' : 'Erro ao cadastrar usuario!' ;
        
            if($statusInsert > 0){
                while($consultaDados = mysqli_fetch_array($realizaInsert) ){
                        $_SESSION["id"] = $consultaDados['id'];
                        $_SESSION["nome"] = $consultaDados['nome'];
                    }
                    echo $statusInsert;
            }else{
                echo $statusInsert;
            }
       
    }
    
  
  
    
?>
</html>