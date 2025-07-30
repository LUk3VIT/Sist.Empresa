<?php
session_start();

if (isset($_SESSION['id'])) {
    $id_user = $_SESSION['id'];
    $funcao_user = $_SESSION['funcao'];
    $nome_user = $_SESSION['nome'];
} else {
    $funcao_user = "NUll";
    $nome_user = "NULL";
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magnus - Almoxarifado</title>
    <link rel="stylesheet" href="../../../public/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/RH.css">
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">
                <img src="https://magnustrafo.com/wp-content/themes/magnus-trafo/assets/images/logo.svg" alt="Logo Magnus" width="100px">
            </a>
        </div>
    </div>

    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarNavDropdown">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
            </li class="nav-item">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Funcinario
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="./funcionario.php">Lista</a></li>
                    <li><a class="dropdown-item" href="./cadastroFuncionario.php">Cadastro</a></li>
                    <li><a class="dropdown-item" href="#">Inativo</a></li>
                </ul>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Presença</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Folha de Pagamento</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="">Vale</a>
            </li>
        </ul>
        <ul class="navbar-nav">
            <?php
                echo '
                <div class="btn-group">
                    <button class="btn btn-secondary btn-sm dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        '.$nome_user.
                    '</button>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">Perfil</a></li>
                        <li><a class="dropdown-item" href="#">Faltas</a></li>
                        <li><hr class="dropdown-divider"></li>
                        <li><a class="dropdown-item" href="app/controllers/logout.php">Logout</a></li>
                    </ul>
                </div>';
            ?>
        </ul>
    </div>
</nav>

<main class="main">
    <h1>RH</h1>
    <article class="menu">
        <div class="menu_linha">
            <div class="card_" style="width: 18rem;">
                <img src="../../../public/img/FuncionarioEquipe.png" class="card-img-top" alt="Funcionario">
                <div class="card-body">
                    <h5 class="card-title">Funcionario</h5>
                    <p class="card-text">Lista de funcionario, cadastro, atualização e inativação. faça controle e pesquisa sobre o funcionario</p>
                    <a href="./funcionario.php" class="btn btn-primary">Funcinario</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="../../../public/img/Calendario.png" class="card-img-top" alt="Calendario">
                <div class="card-body">
                    <h5 class="card-title">Presença</h5>
                    <p class="card-text">Veja os funcionario presentes e os que faltaram ao longo do mês</p>
                    <a href="#" class="btn btn-primary">Presença</a>
                </div>
            </div>
        </div>

        <div class="menu_linha">
            <div class="card_" style="width: 18rem;">
                <img src="../../../public/img/Pagamento.png" class="card-img-top" alt="Folha de Pagamento">
                <div class="card-body">
                    <h5 class="card-title">Folha de Pagamento</h5>
                    <p class="card-text">Veja o pagemento de cada funcionario e o calculo descontando falta</p>
                    <a href="#" class="btn btn-primary">Folha de Pagamento</a>
                </div>
            </div>
            <div class="card" style="width: 18rem;">
                <img src="../../../public/img/Vale.png" class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Vale</h5>
                    <p class="card-text">Consulte o valor do vale de cada funcionaio e veja se esta feito ou se ja descontou</p>
                    <a href="" class="btn btn-primary">Vale</a>
                </div>
            </div>
        </div>
    </article>
</main>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<link rel="stylesheet" href="/public/js/index.js">
</body>
</html>