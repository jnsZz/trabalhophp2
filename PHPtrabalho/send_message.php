<?php
include('verifica_login.php');
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Conectar ao banco de dados
    $conn = mysqli_connect('127.0.0.1', 'root', '', 'chat');
    if (!$conn) {
        die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
    }

    // Obter os dados do formulário
    $sender = $_SESSION['nome'];
    $message = $_POST['message'];

    // Preparar a consulta para inserir a nova mensagem
    $query = "INSERT INTO messages (sender, message, timestamp) VALUES ('$sender', '$message', NOW())";

    // Executar a consulta
    if (mysqli_query($conn, $query)) {
        echo "Mensagem enviada com sucesso!";
    } else {
        echo "Erro ao enviar a mensagem: " . mysqli_error($conn);
    }

    // Fechar a conexão com o banco de dados
    mysqli_close($conn);
}
?>