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
    <link rel="stylesheet" href="https://cdn.datatables.net/2.3.2/css/dataTables.bootstrap5.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/style.css">
    <link rel="stylesheet" href="../../../public/css/funcionario.css">
    
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <div class="container-fluid">
            <a class="navbar-brand" href="./index.php">
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
                <a class="nav-link" href="./index.php">Home</a>
            </li>
            <li>
                <li class="nav-item dropdown">
                    <a class="nav-link active dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
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
    <form class="container" action="../../controllers/cadastro.php" method="post">
        <div class="row align-items-center">
            <div class="mb-3 col-10">
                <label class="form-label">Nome completo</label>
                <input type="email" class="form-control" >
            </div>

            <div class="mb-3 col-2">
                <label class="form-label">Data de Nascimento</label>
                <input type="date" class="form-control">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-3">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf" placeholder="xxx.xxx.xxx.xx">
            </div>

            <div class="mb-3 col-3">
                <label class="form-label">RG</label>
                <input type="text" class="form-control" name="rg" placeholder="xxx.xxx.xxx.xx">
            </div>

            <div class="mb-3 col-3">
                <label class="form-label">Função</label>
                <select class="form-control" aria-label=".form-select-lg example">
                    <option selected>...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>

            <div class="mb-3 col-3">
                <label class="form-label">Salario</label>
                <input type="text" class="form-control" name="salario" value="R$ ">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-12">
                <label class="form-label">Endereço</label>
                <input type="text" class="form-control" placeholder="1234 Main St">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-12">
                <label class="form-label">Casa/Apartamento</label>
                <input type="text" class="form-control" placeholder="Apartment, studio, or floor">
            </div>
        </div>   
        <div class="row">
            <div class="mb-3 col-6">
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control">
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Estado</label>
                <select class="form-select">
                    <option selected>Escolha...</option>
                    <option>...</option>
                </select>
            </div>
            <div class="mb-3 col-2">
                <label class="form-label">CEP</label>
                <input type="text" class="form-control">
            </div>
        </div>
    </form>
</main>




<script src="https://code.jquery.com/jquery-3.7.1.js"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.js"></script>
<script src="https://cdn.datatables.net/2.3.2/js/dataTables.bootstrap5.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
<script src="../../../public/js/index.js"></script>

</body>
</html>