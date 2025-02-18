<?php 
    include './DB/config.php';

    $sql = 'SELECT reservas.id, usuarios.nome AS usuario, espacos.nome AS espaco, reservas.horario 
            FROM reservas 
            INNER JOIN usuarios ON reservas.usuario_id = usuarios.id 
            INNER JOIN espacos ON reservas.espaco_id = espacos.id';
    
    $result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar Reservas</title>
    <link rel="stylesheet" href="./css/listar.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>

    <header class="menu">
        <nav class="nav-bar">
            <section class="first-slice">
                <a href="index.php" class="nav-logo">
                    <h1>Sistema de gerenciamento de reservas</h1>
                </a>
                <h3 class="sub-title">
                    Gerencie de forma prática reservas de espaços compartilhados
                </h3>
            </section>

            <div class="second-slice">
                <ul class="nav-list">
                    <li class="nav-item">
                        <a href="index.php" class="nav-link">Voltar ao início</a>
                    </li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="search-container">
        <input type="text" id="search" name="search" placeholder="Buscar por reserva(s)" required>
        <button type="submit" id="search-btn">Buscar</button>
    </div>

    <div class="container">
        <table class="table table-striped">
            <tr>
                <td>ID</td>
                <td>Usuário</td>
                <td>Espaço</td>
                <td>Horário</td>
                <td>Ações</td>
            </tr>

            <?php

                if($result){
                    while($linha = mysqli_fetch_assoc($result)){
                        $id = $linha['id'];
                        $usuario = $linha['usuario'];
                        $espaco = $linha['espaco'];
                        $horario = $linha['horario'];


                        echo '
                            <tr>
                                <td>'.$id.'</td>
                                <td>'.$usuario.'</td>
                                <td>'.$espaco.'</td>
                                <td>'.$horario.'</td>
                                <td>
                                    <i class="fa-solid fa-trash"></i>
                                    <a href="reservas_excluir.php?id='.$id.'" class="op-btn"> Excluir </a> 
                                </td>
                            </tr>
                            ';
                    };
                };
            ?>
        </table>
    </div>

    <div class="sing-up-btn">
        <a href="reservas_cadastrar.php" class="go-back-btn">
            <i class="fa-solid fa-plus"></i>
            <span class="btn-title">Cadastrar nova reserva</span>
        </a>
    </div>

</body>
</html>
