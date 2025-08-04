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
    <link rel="stylesheet" href="../../../../public/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../../public/css/style.css">
    <link rel="stylesheet" href="../../../../public/css/funcionario.css">
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="container-fluid">
            <a class="navbar-brand" href="../index.php">
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
                <a class="nav-link" href="../index.php">Home</a>
            </li>
            <li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Funcinario
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="../funcionario.php">Lista</a></li>
                    <li><a class="dropdown-item" href="#">Inativo</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="./cadastro/cadastroFuncionario.php">Cadastro Funcionario</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    Empresas
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="./cadastroPerido.php">Cadastro Periodo</a></li>
                    <li><a class="dropdown-item" href="./cadastroFuncao.php">Cadastro Função</a></li>
                    <li><hr class="dropdown-divider"></li>
                    <li><a class="dropdown-item" href="./cadastroEmpresa.php">Cadasto Empresa</a></li>
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
    <form class="container" action="../../controllers/cadastro.php" method="post">

        <div class="row align-items-center justify-content-center">
            <div class="mb-3 col-3">
                <h2>Cadastro Periodo</h2>
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="mb-3 col-4">
                <label class="form-label">Nome</label>
                <input type="number" class="form-control" name="ficha">
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="mb-3 col-4">
                <label class="form-label">Horario Entrada</label>
                <input type="number" class="form-control" name="matriculo">
            </div>
        </div>

        <div class="row align-items-center justify-content-center">
            <div class="mb-3 col-4">
                <label class="form-label">Horario Final</label>
                <input type="number" class="form-control" name="matriculo">
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="mb-3 col-1">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</main>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>