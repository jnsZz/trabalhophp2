<?php
// Conectar ao banco de dados
$conn = mysqli_connect('127.0.0.1', 'root', '', 'chat');
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Obter o ID da mensagem a ser removida
$messageId = $_GET['id'];

// Remover a mensagem do banco de dados
$query = "DELETE FROM messages WHERE id = $messageId";
if (mysqli_query($conn, $query)) {
    echo "Mensagem removida com sucesso!";
} else {
    echo "Erro ao remover a mensagem: " . mysqli_error($conn);
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>