<?php

include './DB/config.php';


if(isset($_POST['cadastrar'])){

    $nome = $_POST['nome'];
    $tipo = $_POST['tipo'];
    $capacidade = $_POST['capacidade'];
    $descricao = $_POST['descricao'];

    $sql = "INSERT INTO espacos(nome,tipo,capacidade,descricao) VALUES ('$nome', '$tipo', '$capacidade', '$descricao')";

    $result = mysqli_query($conn, $sql);

    if($result){
        echo '<script> alert("Cadastrado com sucesso!") </script>';
    }
    else{
        die(mysqli_error($conn));
    }
}

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <section class="single-section">
        <div class="first-slice">
            <h2 class="page-title">
                Sistema de gerenciamento de reservas
            </h2>
            <div class="nav-btns">

                <a href="index.php" class="go-back-btn">
                    <i class="fa-solid fa-angle-left"></i>
                    <span class="btn-title">Voltar</span>
                </a>
                <a href="espacos_listar.php" class="go-back-btn">
                    <i class="fa-solid fa-bars"></i>
                    <span class="btn-title">Listar espaços</span>
                </a>

            </div>
            
        </div>
        <div class="second-slice">
            <div class="form-area">
                <h2 class="form-title">
                    Cadastro de espaços
                </h2>

                <form method="post">
                    <div class="inputs">
                        <input type="text" name="nome" id="nome" placeholder="Nome" required>
                        <input type="text" name="tipo" id="tipo" placeholder="Tipo" required>
                        <input type="text" name="capacidade" id="capacidade" placeholder="Capacidade" required>
                        <input type="text" name="descricao" id="descricao" placeholder="Descrição" required>
                    </div>
                    <button type="submit" name = "cadastrar" id = "bot" value = "cadastrar">Cadastrar</button>
                </form>
                
            </div>
        </div>
    </section>
    
</body>
</html>