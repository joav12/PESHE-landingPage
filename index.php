<?php

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/home.css">
    <title>PESHE</title>
</head>
<body>
    <!-- Header -->
    <header class="headerContainer">
        <a href="#"><img src="./assets/img/logoModelo1.png" alt="logo" class="logo"></a>

        <div class="btnHomeContainer">
            <a href="#sobre">Sobre nós</a>
            <a href="#ambicao">Nossa ambição</a>
            <a href="#equipe">Nossa equipe</a>
            <a href="#newsletter">Newsletter</a>
        </div>
    </header>

    <!-- Bem vindo -->
    <div class="bemVindoContainer">
        <img src="./assets/img/logoModelo3.png" alt="logo" class="logo">
        <h1>Bem vindo ao site informativo da PESHE</h1>
    </div>

    <!-- Sobre nós -->
    <div id="sobre">
        <h2>Sobre nós</h2>

        <div class="textContainer">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maiores numquam eos nisi nesciunt magnam totam sequi harum, ex vel praesentium a consectetur! Iste illum placeat fuga nisi et architecto facere, incidunt eligendi molestias aut omnis recusandae nam debitis nobis id repellendus ab cupiditate exercitationem fugiat deleniti dolor voluptates veniam ducimus ea? Veritatis ea incidunt maxime delectus, laborum rerum deleniti.</p>
        </div>
    </div>

    <!-- Nossa ambição -->
    <div id="ambicao">
        <h2>Nossa ambição</h2>

        <div class="textContainer">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ad maiores numquam eos nisi nesciunt magnam totam sequi harum, ex vel praesentium a consectetur! Iste illum placeat fuga nisi et architecto facere, incidunt eligendi molestias aut omnis recusandae nam debitis nobis id repellendus ab cupiditate exercitationem fugiat deleniti dolor voluptates veniam ducimus ea? Veritatis ea incidunt maxime delectus, laborum rerum deleniti.</p>
        </div>
    </div>

    <!-- Nossa equipe -->
    <div id="equipe">
        <h2>Nossa equipe</h2>

        <div class="equipeContainer">
           <div class="pessoa">
                <img src="./assets/img/joao.jpg" alt="Joao">
                <p>João Victor Rosinhole</p>
           </div>

           <div class="pessoa">
                <img src="./assets/img/paulo.jpeg" alt="Paulo">
                <p>Paulo Shigueaki</p>
           </div>

           <div class="pessoa">
                <img src="./assets/img/gustavo.jpeg" alt="Gustavo">
                <p>Gustavo Marques</p>
           </div>
        </div>
    </div>

    <!-- Nossa newsletter -->
    <div id="newsletter">
        <h2>Newsletter</h2>

        <div class="newsletterContent">
            <p>Para receber mais informações sobre nossas pesquisas e ficar a par de todas as regiões limpas pela PESHE cadastre-se abaixo no nosso newsletter</p>

            <form action="cadastrar.php" class="formulario" method="POST">
                <div class="mb-3">
                    <label for="nome" class="form-label">Nome</label>
                    <input type="text" class="form-control" id="nome" aria-describedby="emailHelp" name="nome">
                </div>

                <div class="mb-3">
                    <label for="email" class="form-label">Seu email</label>
                    <input type="email" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                </div>

                <button type="submit" class="btn btn-primary">Cadastrar</button>
                <a href="tabelaCadastrados.php">tabela dos cadastrados</a>
            </form>
        </div>
    </div>

    <!-- Footer -->
    <footer>
        <p>Feito Por joão victor Rosinhole para a GS1</p>
    </footer>
</body>
</html>