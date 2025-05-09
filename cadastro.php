<?php

    include_once('../Backend/config-db.php');
    include_once('../Backend/viacep-api.php');

    $nome = $_POST['nome'] ?? "";
    $email = $_POST['email'] ?? "";
    $senha = $_POST['senha'] ?? "";
    $cep = $_POST['cep'] ?? "";
    $endereco = $_POST['endereco'] ?? "";
    $cidade = $_POST['cidade'] ?? "";
    $estado = $_POST['estado'] ?? "";

    if(isset($_POST['buscar_cep'])) {
      $cepDigitado = $_POST['cep'];
      $dadosEndereco = buscarEndereco($cepDigitado);

      if ($dadosEndereco === 'cep_invalido') {
          echo "<script>alert('CEP inválido.');</script>";
      } elseif (isset($dadosEndereco->erro)) {
          echo "<script>alert('CEP não encontrado.');</script>";
      } elseif ($dadosEndereco) {
          $endereco = $dadosEndereco->logradouro;
          $cidade = $dadosEndereco->localidade;
          $estado = $dadosEndereco->uf;
          $cep = $cepDigitado;
      } else {
          echo "<script>alert('Erro ao conectar com a API do ViaCEP.');</script>";
      }
    }

    if(isset($_POST['cadastrar'])) {
      $nome = $_POST['nome'];
      $email = $_POST['email'];
      $senha = $_POST['senha'];
      $cep = $_POST['cep'];
      $endereco = $_POST['endereco'];
      $cidade = $_POST['cidade'];
      $estado = $_POST['estado'];

      $result = mysqli_query(
        $conexao, 
        "INSERT INTO usuarios(nome_usuario,email_usuario,senha_usuario,cep_usuario,endereco_usuario,cidade_usuario,estado_usuario)
        VALUES ('$nome','$email','$senha','$cep','$endereco','$cidade','$estado')"
      );

      if ($result) {
        header('Location: login.php');
      }
      
    }

?>


<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="css/cadastro.css">
    <title>Cadastro - Zaya Modas</title>
</head>
<body>
<div class="container my-5 base-cadastro d-flex justify-content-cent align-items-start p-3">
        <form class="row g-3" action="cadastro.php" method="POST">
            <h1>Cadastre-se</h1>
            <div class="col-md-12">
                <label class="form-label" for="nome">Nome Completo</label>
                <input 
                  type="name"
                  name="nome"
                  id="nome"
                  class="form-control"
                  placeholder="Nome"
                  value="<?php echo $nome; ?>"
                  required
                >
            </div>
            <div class="col-md-6">
              <label class="form-label" for="email">Email</label>
              <input 
                type="email" 
                name="email" 
                id="email" 
                class="form-control" 
                placeholder="Email"
                value="<?php echo $email; ?>" 
                required
              >
            </div>
            <div class="col-md-6">
              <label class="form-label" for="senha">Senha</label>
              <input 
                type="password" 
                name="senha" 
                id="senha" 
                class="form-control" 
                placeholder="Senha" 
                value="<?php echo $senha; ?>" 
                required
              >
            </div>
            <div class="col-md-2">
              <label class="form-label" for="cep">CEP</label>
              <input 
                type="text" 
                name="cep" 
                id="cep" 
                class="form-control" 
                placeholder="CEP"
                value="<?php echo $cep; ?>"  
                required
              >
              <button type="submit" name="buscar_cep" class="btn btn-warning my-1">Buscar CEP</button>
            </div>
            <div class="col-12">
              <label class="form-label" for="endereco">Endereço</label>
              <input 
                type="text" 
                name="endereco" 
                id="endereco" 
                class="form-control" 
                placeholder="Endereço" 
                value="<?php echo $endereco; ?>" 
                required
                readonly
              >
            </div>
            <div class="col-md-6">
              <label class="form-label" for="cidade">Cidade</label>
              <input 
                type="text" 
                name="cidade" 
                id="cidade" 
                class="form-control" 
                placeholder="Cidade" 
                value="<?php echo $cidade; ?>" 
                required 
                readonly
              >
            </div>
            <div class="col-md-4">
              <label class="form-label" for="estado">Estado</label>
              <input 
                type="text" 
                name="estado" 
                id="estado" 
                class="form-control" 
                placeholder="Estado" 
                value="<?php echo $estado; ?>" 
                required 
                readonly
              >
            </div>
            <div class="col-12">
              <button type="submit" name="cadastrar" id="cadastrar" class="btn btn-success">Cadastrar</button>
              <a href="login.php" class="btn btn-danger botao-base">Voltar</a>
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