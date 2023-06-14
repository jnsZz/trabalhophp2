<?php
include('verifica_login.php');
?>

<h2>Olá, 
    <?php 
    echo $_SESSION['nome'];
    echo " ". $_SESSION['sobrenome'];?>
</h2>
<h2><a href="logout.php">Sair</a></h2>