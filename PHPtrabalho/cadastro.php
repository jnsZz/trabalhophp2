<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body class="bg-light">
    <nav class="navbar navbar-dark bg-secondary">
              <a href="index.php">
                <button class="btn btn-success">Login</button>
            </a>
      </nav>
    <form method="POST" action="cadastrar.php">
    <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-12 col-md-8 col-lg-6 col-xl-6">
            <div class="card shadow-2-strong" style="border-radius: 1rem;">
                <div class="card-body p-5 text-center">
                    <h2 class="text-center mb-4">Registro</h2>
        <!-- Email input -->
                        <div class="form-outline ">
                            <input type="text" name="usuario" id="form2Example1" class="form-control" placeholder="Usuario"/>
                            <label class="form-label" for="form2Example1"></label>
                        </div>
        <!--nome-->
                        
                        <div class="form-outline ">
                            <input type="text" name="nome" id="form2Example1" class="form-control" placeholder="Nome"/>
                            <label class="form-label" for="form2Example1"></label>
                        </div>
                        <div class="form-outline">
                            <input type="text" name="sobrenome" id="form2Example1" class="form-control" placeholder="Sobrenome"/>
                            <label class="form-label" for="form2Example1"></label>
                        </div> 
        <!-- Password input -->
                        <div class="form-outline mb-1">
                            <input type="password" name="senha" id="form2Example" class="form-control" placeholder="Senha " />
                            <label class="form-label" for="form2Example2" ></label>
                        </div>
        <!-- Submit button -->
                <button type="submit"class="btn btn-primary btn-block mb-4">Registrar</button>
                </div>
            </div>
        </div>
    </div>
</div>
</form>
</nav>
<div class="text-center mb-0"> 
    <p>Já tem uma conta?</p>
      <a href="index.php">
      <button class="btn btn-success">Login</button>
    </a> 
  </div>
</body>
</html>