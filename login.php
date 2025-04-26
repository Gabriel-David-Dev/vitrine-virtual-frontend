<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/login.css">
    <title>Login - Zaya Modas</title>
</head>
<body>
    <div class="container my-5 base-login">
        <form action="../Backend/verifica-login.php" method="POST">
            <h1>Login</h1>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="email">Digite seu e-mail</label>
              <div class="col-sm-10">
                <input type="email" name="email" id="email" class="form-control" placeholder="Email" required>
              </div>
            </div>
            <div class="row mb-3">
              <label class="col-sm-2 col-form-label" for="senha">Digite sua senha</label>
              <div class="col-sm-10">
                <input type="password" name="senha" id="senha" class="form-control" placeholder="Senha" required>
              </div>
            </div>
            <div class="d-flex justify-content-center gap-3" >
                <button type="submit" name="entrar" id="entrar" class="btn btn-primary">Entrar</button>
                <a href="cadastro.php" class="btn btn-success" classe="botao-base">Cadastrar</a>
                <a href="index.html" class="btn btn-danger" classe="botao-base">Voltar</a>
            </div>
        </form>
    </div>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-5">
        <div class="container">
          <p class="mb-0">© 2025 Gabriel David</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>