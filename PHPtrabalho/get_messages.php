<?php
// Conectar ao banco de dados
$conn = mysqli_connect('127.0.0.1', 'root', '', 'chat');
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Consulta para buscar as mensagens ordenadas por timestamp
$query = "SELECT * FROM messages ORDER BY timestamp ASC";
$result = mysqli_query($conn, $query);

// Exibir as mensagens formatadas
while ($row = mysqli_fetch_assoc($result)) {
    $sender = $row['sender'];
    $message = $row['message'];
    $timestamp = $row['timestamp'];
    echo "<p><strong>$sender:</strong> $message <small>($timestamp)</small></p>";
}

while ($row = mysqli_fetch_assoc($result)) {
    $messageId = $row['id'];
    $sender = $row['sender'];
    $message = $row['message'];
    $timestamp = $row['timestamp'];
    echo "<p><strong>$sender:</strong> $message <small>($timestamp)</small>";
    echo "<a href='edit_message.php?id=$messageId'>Editar</a> ";
    echo "<a href='delete_message.php?id=$messageId'>Remover</a></p>";
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>