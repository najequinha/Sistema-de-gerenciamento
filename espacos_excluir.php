<?php 

include './DB/config.php';

if(isset($_GET['id'])){

    $id_recebido = $_GET['id'];

    $sql = "DELETE FROM espacos WHERE id = $id_recebido";
    $result = mysqli_query($conn,$sql);

    if($result){
        header('location:espacos_listar.php');
    }else{
        echo '<script> alert("Erro ao excluir!") </script>';
    }
}

echo "CHEGOU :" .$id_recebido;