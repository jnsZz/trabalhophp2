<?php
// Conectar ao banco de dados
$conn = mysqli_connect('127.0.0.1', 'root', '', 'chat');
if (!$conn) {
    die("Erro ao conectar ao banco de dados: " . mysqli_connect_error());
}

// Verificar se o formulário foi submetido
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obter os dados do formulário
    $messageId = $_POST['id'];
    $newMessage = $_POST['message'];

    // Atualizar a mensagem no banco de dados
    $query = "UPDATE messages SET message = '$newMessage' WHERE id = $messageId";
    if (mysqli_query($conn, $query)) {
        echo "Mensagem atualizada com sucesso!";
    } else {
        echo "Erro ao atualizar a mensagem: " . mysqli_error($conn);
    }
} else {
    // Obter o ID da mensagem a ser editada
    $messageId = $_GET['id'];

    // Consultar a mensagem no banco de dados
    $query = "SELECT * FROM messages WHERE id = $messageId";
    $result = mysqli_query($conn, $query);
    $row = mysqli_fetch_assoc($result);
    $message = $row['message'];
    ?>
    <!DOCTYPE html>
    <html>
    <head>
        <title>Editar Mensagem</title>
    </head>
    <body>
        <h2>Editar Mensagem</h2>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php echo $messageId; ?>">
            <textarea name="message" rows="4" cols="50"><?php echo $message; ?></textarea><br>
            <input type="submit" value="Atualizar">
        </form>
    </body>
    </html>
    <?php
}

// Fechar a conexão com o banco de dados
mysqli_close($conn);
?>