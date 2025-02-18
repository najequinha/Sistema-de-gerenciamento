<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index</title>
    <link rel="stylesheet" href="./css/index copy.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css" integrity="sha512-Kc323vGBEqzTmouAECnVceyQqyqdsSiqLQISBL29aUW4U/M7pSPA/gEUZQqv1cwx4OnYxTxve5UMg5GT6L4JJg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>

<section class="single-section">

    <div class="first-slice">
        <section class="page-header">
            <a href="index.php" class="nav-logo">
                <h1>Sistema de gerenciamento de reservas</h1>
            </a>
            <h3 class="sub-title">
                Gerencie de forma prática reservas de espaços compartilhados
            </h3>
        </section>
        <div class="first-container">
            <img src="./img/png group of people.png" alt="" class="single-image">
        </div>
    </div>

    <div class="second-container">
        <div class="buttons">
            <div class="button-space">
                <span class="btn-space-title">Espaços</span>
                <div class="buttons-itselves">
                    <div class="first-slice-of-btns">
                        <div class="btn-container">

                            <a href="espacos_cadastrar.php" class="button">
                                <i class="fa-solid fa-plus"></i>
                                <span class="btn-title">Cadastrar espaço(s)</span>
                            </a>
                            
                        </div>
                        <div class="btn-container">

                            <a href="espacos_listar.php" class="button">
                                <i class="fa-solid fa-list"></i>
                                <span class="btn-title">Listar espaço(s)</span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-space">
                <span class="btn-space-title">Usuários</span>
                <div class="buttons-itselves">
                    <div class="first-slice-of-btns">
                        <div class="btn-container">

                            <a href="usuarios_cadastrar.php" class="button">
                                <i class="fa-solid fa-user-plus"></i>
                                <span class="btn-title">Cadastrar usuário(s)</span>
                            </a>
                            
                        </div>
                        <div class="btn-container">

                            <a href="usuarios_listar.php" class="button">
                                <i class="fa-solid fa-users"></i>
                                <span class="btn-title">Listar usuário(s)</span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
            <div class="button-space">
                <span class="btn-space-title">Reservas</span>
                <div class="buttons-itselves">
                    <div class="first-slice-of-btns">
                        <div class="btn-container">

                            <a href="reservas_cadastrar.php" class="button">
                                <i class="fa-solid fa-calendar-plus"></i>
                                <span class="btn-title">Cadastrar reserva(s)</span>
                            </a>
                            
                        </div>
                        <div class="btn-container">

                            <a href="reservas_listar.php" class="button">
                                <i class="fa-solid fa-calendar-alt"></i>
                                <span class="btn-title">Listar reserva(s)</span>
                            </a>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</section>

</body>
</html>