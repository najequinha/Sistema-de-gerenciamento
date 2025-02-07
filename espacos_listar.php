<?php 
// inclui a conexão com o banco
    include './DB/connect.php';

    // monta a query de consulta em SQL
    $sql = 'SELECT * FROM cliente';
    $result = mysqli_query($conn,$sql);

?>
