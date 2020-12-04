<?php session_start() ?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="../components/fonts/century-gothic.ttf">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
        integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="home.css">
    <title>Seja bem vindo | AnyPlace Fit</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg">
        <a class="navbar-brand" href="#"><img src="../components/img/logo.png" alt="Logo AnyPlace Fit"></a>
        <button class="navbar-toggler navbar-dark" type="button" data-toggle="collapse"
            data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
            aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav align-items-center">
                <a class="nav-link" href="../index.html">Página inicial</a>
                <a class="nav-link" href="./sobre.html">Nossa historia</a>
                <a class="nav-link" href="./cadastro.php">Entrar</a>
                <a class="nav-link" href="./admin.php" style="color: #000;">Administrar Conta</a>
            </div>
        </div>
    </nav>

   <main class="container text-center">
    
    
        <section>
            <div class="mt-3">
                <h1>Ola <span style="color: #F70;"> <?php echo $_SESSION["nome"] ?></span>, seja bem vindo a AnyPlace Fit!</h1>
                <h5>Escolha de acordo com o seu gosto e iremos te segurir os melhores professores!</h5>
            </div>
            <div class="d-flex justify-content-around opcoes mt-4">
                <div class="select">
                    <select id="modalidade" class="custom-select">
                        <option selected>Modalidade</option>
                        <option value="musc">Musculação</option>
                        <option value="cross">Crossfit</option>
                        <option value="nat">Natação</option>
                    </select>
                </div>
            </div>
            <button class=" btn btn-outline-primary btn-block container my-3 ">Confirmar seleção</button> 
        </section>

        <section class="personais">
            <div class=" d-flex justify-content-between flex-wrap">

                <a href="./contato.html"> <img src="../components/img/personal/personal-fem-1.png" alt="" id="img" class="musc masc dom nt">
                </a>
                <a href="./contato.html"> <img src="../components/img/personal/personal-masc-2.png" alt="" id="img" class="musc fem acad ma">
                </a>
                <a href="./contato.html"> <img img src="../components/img/personal/personal-masc-3.png" alt="" id="img" class="nat masc acad td"> </a>

                <a href="./contato.html"> <img src="../components/img/personal/personal-fem-1.png" alt="" class="nat fem dom nt">
                </a>
                <a href="./contato.html"> <img src="../components/img/personal/personal-masc-2.png" alt="" class="cross masc acad nt">
                </a>
                <a href="./contato.html"> <img img src="../components/img/personal/personal-masc-3.png" alt="" class="cross fem dom ma "> </a>
                </a>
                <a href="./contato.html"> <img src="../components/img/personal/personal-masc-2.png" alt="" class="musc fem acad ma">
                </a>
                <a href="./contato.html"> <img src="../components/img/personal/personal-masc-3.png" alt="" class="cross masc acad nt"> </a>
            </div>
        </section>
   
    </main>

    <footer class="rodape mt-5">
        <div class="container conteudo-rodape">
            <div class="esq">
                <h2>AnyPlace Fit</h2>
                <h6><a href="./sobre.html">Sobre a empresa</a></h6>
                <h6><a href="./sobre.html">Trabalho conosco</a></h6>
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
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script>
         function modalidade() {
            let modalidade = $("#modalidade").val();

            let = document.getElementById('img')

            if (modalidade == 'musc') {
                $(".nat").hide();
                $(".cross").hide();
                $(".masc").hide();
                $(".musc").show();
                $(".rodape").hide();
                
            } else if (modalidade == 'nat') {
                $(".cross").hide();
                $(".musc").hide();
                $(".nat").show();
                 $(".rodape").hide();
            } else if (modalidade == 'cross') {
                $(".nat").hide();
                $(".musc").hide();
                $('.cross').show();
                 $(".rodape").hide();
            } else {
                $(".nat").show();
                $(".musc").show();
                $(".cross").show();
                $(".rodape").show();
            }
        };

        $('button').click(e => {
            modalidade()
        })

        
    </script>
</body>

</html>