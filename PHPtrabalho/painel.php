<?php
include('verifica_login.php');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Chat</title>
    <style>
        .texto-branco-head{
            color: white;
        }
        #chatbox {
            height: 300px;
            overflow-y: scroll;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function() {
            // Função para carregar as mensagens do chat
            function loadMessages() {
                $.ajax({
                    url: 'get_messages.php',
                    type: 'GET',
                    success: function(data) {
                        $('#chatbox').html(data);
                        scrollToBottom();
                    }
                });
            }

            // Função para enviar uma nova mensagem
            $('#messageForm').submit(function(e) {
                e.preventDefault();
                var sender = $('#sender').val();
                var message = $('#message').val();
                $.ajax({
                    url: 'send_message.php',
                    type: 'POST',
                    data: {
                        sender: sender,
                        message: message
                    },
                    success: function() {
                        $('#message').val('');
                        loadMessages();
                    }
                });
            });

            // Função para rolar a caixa de chat até o final
            function scrollToBottom() {
                $('#chatbox').scrollTop($('#chatbox')[0].scrollHeight);
            }

            // Atualizar as mensagens do chat a cada 3 segundos
            setInterval(loadMessages, 3000);

            // Carregar as mensagens do chat ao carregar a página
            loadMessages();
        });
    </script>
</head>
<body>
<header>
    <nav class="navbar navbar-dark bg-secondary">
        <a href="logout.php">
            <button class="btn btn-danger">Sair</button>
        </a>
                <h2 class="texto-branco-head">Olá,
                    <?php
                    echo $_SESSION['nome'];
                    echo " ". $_SESSION['sobrenome'];
                    ?>
                </h2>
      </nav>
</header>
    <div class="text-center">
        <div class id="chatbox"></div>
    
    <form id="messageForm" method="post">
        <?php 
        echo $_SESSION['nome'];
        echo " ". $_SESSION['sobrenome'];?>
        <br>
        <input type="text" id="message" placeholder="Digite sua mensagem" required>
        <input type="submit" value="Enviar">
    </form>
    </div>
</body>
</html>