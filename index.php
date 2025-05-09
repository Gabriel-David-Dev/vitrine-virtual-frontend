<?php
    session_start();
    if(!isset($_SESSION['email']) == true and (!isset($_SESSION['senha']) == true)) {
        session_unset();
    }
    else {
        $logado = $_SESSION['email'];
    }

?>

<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/index.css">
    <title>Zaya Modas</title>
</head>
<body>
    <!-- Menu -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <button class="navbar-toggler ms-auto" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item mx-auto">
                <?php if (!empty($_SESSION['logado'])): ?>
                    <?php
                        echo "<p class='nav-link' id='usuario-logado'>Logado como: $logado</p>"; 
                    ?> 
                <?php endif; ?>
              </li>
              <li class="nav-item mx-auto">
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item mx-auto">
                <?php if (empty($_SESSION['logado'])): ?>
                    <a class="nav-link" href="login.php">Login</a>
                <?php endif; ?>
              </li>
              <li class="nav-item mx-auto">
                <a class="nav-link" href="#jaquetas">Jaquetas</a>
              </li>
              <li class="nav-item mx-auto">
                <a class="nav-link" href="#blazers">Blazers</a>
              </li>
              <li class="nav-item mx-auto">
                <a class="nav-link" href="#sobretudos">Sobretudos</a>
              </li>
              <li class="nav-item mx-auto">
                <?php if (!empty($_SESSION['logado'])): ?>
                    <a class="btn btn-danger" href="../Backend/sair.php">Sair</a> 
                <?php endif; ?>
              </li>
            </ul>
          </div>
        </div>
    </nav>

    <section class="container my-4">
        <!-- Início seção de jaquetas -->
        <div class="row g-4">
            <div class="col-12 my-3">
                <h1 class="text-secondary fw-bold" id="jaquetas">JAQUETA</h1>
            </div>
            <!-- Item 1 -->
            <div class="col-6 col-md-3">
                <div>
                    <img
                        src="imagens/img-jaqueta-1.png"
                        title="Jaqueta Feminina Nylon"
                        alt="Jaqueta Feminina Nylon"
                        class="w-100 border border-1 rounded-3"
                        loading="lazy"
                    />
                </div>
                <div class="text-uppercase fw-bold">
                    <span class="text-danger">1</span> - Jaqueta Feminina Nylon
                </div>
                <div class="text-muted">Capuz Inverno</div>
                <p class="text-muted mb-1">Quentinha Impermeável Bobojaco</p>
                <div class="text-danger">
                    R$ <span class="fw-bold fs-3">109,00</span>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-6 col-md-3">
                <div>
                    <img
                        src="imagens/imagem-jaqueta-2.png"
                        title="Bobojaco Feminino Original"
                        alt="Bobojaco Feminino Original"
                        class="w-100 border border-1 rounded-3"
                        loading="lazy"
                    />
                </div>
                <div class="text-uppercase fw-bold">
                    <span class="text-danger">2</span> - Bobojaco Feminino Original
                </div>
                <div class="text-muted">Jaqueta Puffer</div>
                <p class="text-muted mb-1">Edição Limitada</p>
                <div class="text-danger">
                    R$ <span class="fw-bold fs-3">R$119,00</span>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-6 col-md-3">
                <div>
                    <img
                        src="imagens/imagem-jaqueta-3.png"
                        title="Bobojaco Feminino Original"
                        alt="Bobojaco Feminino Original"
                        class="w-100 border border-1 rounded-3"
                        loading="lazy"
                    />
                </div>
                <div class="text-uppercase fw-bold">
                    <span class="text-danger">3</span> - JAQUETA PUFFER
                </div>
                <div class="text-muted">Capuz Forrada</div>
                <p class="text-muted mb-1">Jaqueta de Inverno</p>
                <div class="text-danger">
                    R$ <span class="fw-bold fs-3">R$159,00</span>
                </div>
            </div>
        </div>
        <!-- Fim seção de jaquetas -->

        <!-- Início seção de blazers -->
        <div class="row g-4 my-4">
            <div class="col-12 my-3">
                <h1 class="text-secondary fw-bold" id="blazers">BLAZER</h1>
            </div>
            <!-- Item 1 -->
            <div class="col-6 col-md-3">
                <div>
                    <img
                        src="imagens/imagem-blazer-1.png"
                        title="Max Blazer Feminina"
                        alt="Max Blazer Feminina"
                        class="w-100 border border-1 rounded-3"
                        loading="lazy"
                    />
                </div>
                <div class="text-uppercase fw-bold">
                    <span class="text-danger">4</span> - Max Blazer Feminina
                </div>
                <div class="text-muted">Longo Alfataria</div>
                <p class="text-muted mb-1">Social Manga Longa</p>
                <div class="text-danger">
                    R$ <span class="fw-bold fs-3">58,00</span>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-6 col-md-3">
                <div>
                    <img
                        src="imagens/imagem-blazer-2.png"
                        title="Cardgan Blazer"
                        alt="Cardgan Blazer"
                        class="w-100 border border-1 rounded-3"
                        loading="lazy"
                    />
                </div>
                <div class="text-uppercase fw-bold">
                    <span class="text-danger">5</span> - Cardgan Blazer
                </div>
                <div class="text-muted">Casaco de Inverno</div>
                <p class="text-muted mb-1">Quentinho Demais</p>
                <div class="text-danger">
                    R$ <span class="fw-bold fs-3">99,90</span>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-6 col-md-3">
                <div>
                    <img
                        src="imagens/imagem-blazer-3.png"
                        title="Blazer Xadrez"
                        alt="Blazer Xadrez"
                        class="w-100 border border-1 rounded-3"
                        loading="lazy"
                    />
                </div>
                <div class="text-uppercase fw-bold">
                    <span class="text-danger">6</span> - Blazer Xadrez
                </div>
                <div class="text-muted">Casaco Botão</div>
                <p class="text-muted mb-1">Elegante e básica</p>
                <div class="text-danger">
                    R$ <span class="fw-bold fs-3">159,99</span>
                </div>
            </div>
        </div>
        <!-- Fim seção de blazers -->

        <!-- Início seção de sobretudos -->
        <div class="row g-4 my-4">
            <div class="col-12 my-3">
                <h1 class="text-secondary fw-bold" id="sobretudos">SOBRETUDO</h1>
            </div>
            <!-- Item 1 -->
            <div class="col-6 col-md-3">
                <div>
                    <img
                        src="imagens/imagem-sobretudo-1.png"
                        title="Sobretudo Médio"
                        alt="Sobretudo Médio"
                        class="w-100 border border-1 rounded-3"
                        loading="lazy"
                    />
                </div>
                <div class="text-uppercase fw-bold">
                    <span class="text-danger">7</span> - Sobretudo Médio
                </div>
                <div class="text-muted">Lã Batida</div>
                <p class="text-muted mb-1">Sofisticado/Loulou 2025</p>
                <div class="text-danger">
                    R$ <span class="fw-bold fs-3">199,99</span>
                </div>
            </div>

            <!-- Item 2 -->
            <div class="col-6 col-md-3">
                <div>
                    <img
                        src="imagens/imagem-sobretudo-2.png"
                        title="Sobretudo Poliéster"
                        alt="Sobretudo Poliéster"
                        class="w-100 border border-1 rounded-3"
                        loading="lazy"
                    />
                </div>
                <div class="text-uppercase fw-bold">
                    <span class="text-danger">8</span> - Sobretudo Poliéster
                </div>
                <div class="text-muted">Flanelado</div>
                <p class="text-muted mb-1">Para o Inverno</p>
                <div class="text-danger">
                    R$ <span class="fw-bold fs-3">69,85</span>
                </div>
            </div>

            <!-- Item 3 -->
            <div class="col-6 col-md-3">
                <div>
                    <img
                        src="imagens/imagem-sobretudo-3.png"
                        title="Sobretudo Elegante"
                        alt="Sobretudo Elegante"
                        class="w-100 border border-1 rounded-3"
                        loading="lazy"
                    />
                </div>
                <div class="text-uppercase fw-bold">
                    <span class="text-danger">9</span> - Sobretudo Elegante
                </div>
                <div class="text-muted">Com 2 Bolsos</div>
                <p class="text-muted mb-1">Elegante</p>
                <div class="text-danger">
                    R$ <span class="fw-bold fs-3">154,99</span>
                </div>
            </div>
        </div>
        <!-- Fim seção de sobretudos -->
    </section>

    <!-- Footer -->
    <footer class="bg-dark text-white text-center py-5">
        <div class="container">
          <p class="mb-0">© 2025 Gabriel David</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js" integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq" crossorigin="anonymous"></script>
</body>
</html>