<?php 
    include './DB/config.php';

    $sql = 'SELECT * FROM usuarios';
    $result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Listar usuários</title>
    <link rel="stylesheet" href="./css/listar.css">
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

    <div class="container">
            <table class="table table-striped">
                <tr>
                    <td>id</td>
                    <td>Nome</td>
                    <td>Email</td>
                    <td>Telefone</td>
                </tr>

                <?php

                    if($result){
                        while($linha = mysqli_fetch_assoc($result)){
                            $id = $linha['id'];
                            $nome = $linha['nome'];
                            $email = $linha['email'];
                            $telefone = $linha['telefone'];


                            echo '
                                <tr>
                                    <td>'.$id.'</td>
                                    <td>'.$nome.'</td>
                                    <td>'.$email.'</td>
                                    <td>'.$telefone.'</td>
                                    <td> <a href="usuarios_editar.php?id='.$id.'"> Editar </a> </td>
                                    <td> <a href="usuarios_excluir.php?id='.$id.'"> Excluir </a> </td>
                                </tr>
                                ';
                        };
                    };

                    

                ?>
            </table>
    </div>

    <div class="sing-up-btn">
        <a href="usuarios_cadastrar.php" class="go-back-btn">
            <i class="fa-solid fa-user-plus"></i>
            <span class="btn-title">Cadastrar novo usuário</span>
        </a>
    </div>

</body>
</html>
