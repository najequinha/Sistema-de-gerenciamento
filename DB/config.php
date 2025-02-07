<?php

$host = 'localhost';
$dbname = 'sistema_de_gerenciamento';
$user = 'root';
$password = '';


$conn = mysqli_connect($host, $user, $password, $dbname);

if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

else {
    echo "Conexão bem sucedida!!!!!!!!!!!!";
}

?>

