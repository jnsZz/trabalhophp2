<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">
  <nav class="navbar navbar-dark bg-secondary">
      <a href="cadastro.php">
            <button class="btn btn-warning">Registrar</button>
          </a>
  </nav>
  <div class="container py-5 h-100">
    <div class="row d-flex justify-content-center align-items-center h-100">
      <div class="col-12 col-md-8 col-lg-6 col-xl-5">
        <div class="card shadow-2-strong" style="border-radius: 1rem;">
          <div class="card-body p-5 text-center">
                    <?php
                    if(isset($_SESSION['nao_autenticado'])):
                    ?>
                    <div class="notification is-danger">
                        <p style="color:red;">Usuário ou senha inválidos.</p>
                    </div>
                    <?php
                    endif;
                    unset($_SESSION['nao_autenticado']);
                    ?>
                    <form method="POST" action="login.php">
    <h2 class="text-center mb-4">Login</h2>
    <!-- Email input -->
            <div class="form-outline ">
              <input name="usuario" name="text" class="form-control" placeholder="Usuario"/>
              <label class="form-label" for="form2Example1"></label>
            </div>
    <!-- Password input -->
            <div class="form-outline mb-1">
              <input type="password" name="senha"  class="form-control" placeholder="Password" />
              <label class="form-label" for="form2Example2" ></label>
            </div>
    <!-- Submit button -->
          <button type="submit" class="btn btn-primary btn-block mb-4">Login</button>
        </div>
      </div>
    </div>
  </div>
</div>
</form>
<div class="text-center mb-0"> 
  <p>Ainda não faz parte ?</p>
    <a href="cadastro.php">
    <button class="btn btn-warning">Registrar</button>
  </a> 
</div>
</body>
</html>