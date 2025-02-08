<?php
include './DB/config.php';

$sql_usuarios = "SELECT id, nome FROM usuarios";
$result_usuarios = mysqli_query($conn, $sql_usuarios);

$sql_espacos = "SELECT id, nome FROM espacos";
$result_espacos = mysqli_query($conn, $sql_espacos);

if(isset($_POST['cadastrar'])){
    $usuario_id = $_POST['usuario_id'];
    $espaco_id = $_POST['espaco_id'];
    $horario = $_POST['horario'];

    $sql_verificar = "SELECT * FROM reservas WHERE espaco_id = $espaco_id AND horario = '$horario'";
    $result_verificar = mysqli_query($conn, $sql_verificar);

    if(mysqli_num_rows($result_verificar) > 0){
        echo '<script> alert("Este horário já está reservado! Escolha outro.") </script>';
    } else {
        $sql = "INSERT INTO reservas (usuario_id, espaco_id, horario) VALUES ('$usuario_id', '$espaco_id', '$horario')";
        $result = mysqli_query($conn, $sql);

        if($result){
            echo '<script> alert("Reserva cadastrada com sucesso!") </script>';
        } else {
            die(mysqli_error($conn));
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de Reservas</title>
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
                <a href="reservas_listar.php" class="go-back-btn">
                    <i class="fa-solid fa-bars"></i>
                    <span class="btn-title">Listar reservas</span>
                </a>
            </div>
        </div>
        <div class="second-slice">
            <div class="form-area">
                <h2 class="form-title">
                    Cadastro de Reservas
                </h2>

                <form method="post">
                    <div class="inputs">
                        <select name="usuario_id" required>
                            <option value="">Selecione um usuário</option>
                            <?php while ($usuario = mysqli_fetch_assoc($result_usuarios)): ?>
                                <option value="<?= $usuario['id']; ?>"><?= $usuario['nome']; ?></option>
                            <?php endwhile; ?>
                        </select>

                        <select name="espaco_id" required>
                            <option value="">Selecione um espaço</option>
                            <?php while ($espaco = mysqli_fetch_assoc($result_espacos)): ?>
                                <option value="<?= $espaco['id']; ?>"><?= $espaco['nome']; ?></option>
                            <?php endwhile; ?>
                        </select>

                        <input type="datetime-local" name="horario" required>
                    </div>

                    <button type="submit" name="cadastrar" id="bot">Cadastrar Reserva</button>
                </form>
                
            </div>
        </div>
    </section>
</body>
</html>
