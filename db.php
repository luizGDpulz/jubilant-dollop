<?php
$host = 'localhost';      // Endereço do servidor MySQL
$user = 'root';           // Nome de usuário do MySQL
$password = '';           // Senha do usuário do MySQL
$database = 'finance';    // Nome do banco de dados

try {
    // Conexão usando PDO
    $pdo = new PDO("mysql:host=$host;dbname=$database;charset=utf8", $user, $password);

    // Configurar o PDO para lançar exceções em caso de erros
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "Conexão com o banco de dados estabelecida com sucesso!";
} catch (PDOException $e) {
    // Em caso de erro, exibir a mensagem de erro
    die("Erro na conexão com o banco de dados: " . $e->getMessage());
}
?>