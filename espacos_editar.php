<?php 
    include './DB/config.php';

    $espaco = [];

    $id_recebido = $_GET['id'] ?? null;

    if ($id_recebido) {
        $sql = "SELECT * FROM espacos WHERE id = $id_recebido";
        $result = mysqli_query($conn, $sql);

        $espaco = mysqli_fetch_assoc($result) ?? [];
    }

    if (isset($_POST['editar'])) {
        $nome = $_POST['nome'];
        $tipo = $_POST['tipo'];
        $capacidade = $_POST['capacidade'];
        $descricao = $_POST['descricao'];

        $sql_update = "UPDATE espacos SET nome='$nome', tipo='$tipo', capacidade='$capacidade', descricao='$descricao' WHERE id = $id_recebido";
        mysqli_query($conn, $sql_update);

        header("Location: espacos_listar.php");
        exit;
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar espaço</title>
    <link rel="stylesheet" href="./css/cadastro.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
</head>
<body>
    <section class="single-section">
        <div class="first-slice">
            <h2 class="page-title">Sistema de gerenciamento de reservas</h2>
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
                <h2 class="form-title">Editar cadastro de espaços</h2>
                <form method="post">
                    <div class="inputs">
                        <input type="text" name="nome" id="nome" value="<?php echo $espaco['nome'] ?? ''; ?>" required>
                        <input type="text" name="tipo" id="tipo" value="<?php echo $espaco['tipo'] ?? ''; ?>" required>
                        <input type="text" name="capacidade" id="capacidade" value="<?php echo $espaco['capacidade'] ?? ''; ?>" required>
                        <input type="text" name="descricao" id="descricao" value="<?php echo $espaco['descricao'] ?? ''; ?>" required>
                    </div>
                    <button type="submit" name="editar" id="bot">Salvar Alterações</button>
                </form>
            </div>
        </div>
    </section>
</body>
</html>
