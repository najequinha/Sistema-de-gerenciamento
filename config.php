<?php

// Configurações de conexão com o banco de dados
$host = 'localhost';      // Servidor do banco de dados
$dbname = 'sistema_de_gerenciamento'; // Nome do banco de dados
$user = 'root';           // Usuário do banco
$password = '';           // Senha do banco (geralmente vazia no XAMPP)

// Criação da conexão com o MySQL
$conn = mysqli_connect($host, $user, $password, $dbname);

// Verificação da conexão
if (!$conn) {
    die("Falha na conexão: " . mysqli_connect_error());
}

// else {
//     echo "Conexão bem sucedida!!!!!!!!!!!!";
// }

?>

