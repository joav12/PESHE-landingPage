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
            <p>Peshe é uma plataforma inovadora dedicada a transformar a maneira como as empresas e entidades governamentais gerenciam seus recursos e resíduos. Fundada com a visão de promover a sustentabilidade ambiental, nossa missão é conectar os setores industrial, comercial e municipal para facilitar a reutilização de materiais, reduzir o desperdício e diminuir a poluição dos rios. Utilizando tecnologia avançada, oferecemos uma ferramenta poderosa que identifica oportunidades de sinergia entre esses setores, permitindo uma gestão mais eficaz de recursos e contribuindo para a preservação do meio ambiente.<br><br>

            O Peshe foi criada por uma equipe de especialistas em tecnologia, gestão ambiental e desenvolvimento sustentável. Nosso compromisso é proporcionar soluções práticas que não só atendam às necessidades comerciais, mas que também promovam uma mudança positiva para o planeta. Nossa plataforma é um espaço onde as empresas podem colaborar, inovar e crescer juntas, enquanto fazem a sua parte para atingir os objetivos globais de desenvolvimento sustentável.</p>
        </div>
    </div>

    <!-- Nossa ambição -->
    <div id="ambicao">
        <h2>Nossa ambição</h2>

        <div class="textContainer">
            <p>Nossa Ambição
                O Peshe, aspiramos ser mais do que uma plataforma de negócios; nosso objetivo é ser um catalisador para a mudança ambiental global. Estamos empenhados em reduzir a pegada ecológica do setor empresarial, facilitando o desenvolvimento de uma economia circular que valorize o reuso e a reciclagem. Acreditamos que, ao conectar diferentes atores do mercado e otimizar o uso de recursos, podemos fazer uma diferença significativa na saúde dos nossos ecossistemas aquáticos e terrestres.<br><br>

                Nossa ambição é liderar pelo exemplo, mostrando que práticas sustentáveis não apenas protegem o meio ambiente, mas também oferecem oportunidades econômicas substanciais. Enquanto trabalhamos para expandir nossa rede e capacidades, continuamos a inovar e a aprimorar nossas ofertas para garantir que cada cliente possa encontrar e implementar soluções que reduzam custos, aumentem a eficiência e, mais importante, conservem os recursos naturais do nosso planeta.<br><br>

                Ambos os textos buscam refletir o compromisso da Peshe com a sustentabilidade e sua função em promover práticas de negócios que beneficiem o meio ambiente, alinhando-se assim com as expectativas dos stakeholders e possíveis investidores ou parceiros interessados na missão da empresa.</p>
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