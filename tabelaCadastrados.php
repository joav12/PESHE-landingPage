<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <link rel="stylesheet" href="css/geral.css">
    <link rel="stylesheet" href="css/tabela.css">
    <title>Tabela dos cadastrados</title>
</head>
<body>
    <div class="container">
        <h1>Tabela de pessoas interessadas no nosso projeto</h1>

        <?php 
            include("conexao.php");
            $sql = "SELECT id, nome, email FROM interesados";
            $seleciona = mysqli_query($conexao, $sql);
                    
            if($seleciona -> num_rows > 0){
        ?>

        <table class="table table-striped tabela">
            <tr>
                <td scope="col">id</td>
                <td scope="col">Nome</td>
                <td scope="col">email</td>
            </tr>            

            <?php while($campo= mysqli_fetch_array($seleciona)){ ?>
                <tr>
                    <td scope="row"><?=$campo["id"]?> </td>
                    <td><?=$campo["nome"]?> </td>
                    <td><?=$campo["email"]?> </td>					
                </tr>    
            <?php } ?>
        </table>

        <?php } else { ?>
            <h1 class="title titleRed"> A tabela está vazia </h1>
        <?php } ?>

        <a href="/peshe" class="btnVoltar">Voltar</a>
    </div>
</body>
</html>