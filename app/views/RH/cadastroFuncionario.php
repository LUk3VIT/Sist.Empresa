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
                    <li><a class="dropdown-item" href="./cadastroFuncionario.php">Cadastro Funcionario</a></li>
                    <li><a class="dropdown-item" href="./cadastroFuncao.php">Cadastro Função</a></li>
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
        <div>
            <h2>Empresa</h2>
        </div>
        <div class="row align-items-center justify-content-between">
            <div class="mb-3 col-1">
                <label class="form-label">Ficha n:</label>
                <input type="number" class="form-control" name="ficha">
            </div>

            <div class="mb-3 col-2">
                <label class="form-label">Matriculo n:</label>
                <input type="number" class="form-control" name="matriculo">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-8">
                <label class="form-label">Rasão social</label>
                <input type="text" class="form-control" name="rasaoSocial" placeholder="xxx.xxx.xxx.xx">
            </div>

            <div class="mb-3 col-4">
                <label class="form-label">CNPJ:</label>
                <input type="text" class="form-control" name="cnpj" placeholder="xxx.xxx.xxx.xx">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-3">
                <label class="form-label">Função</label>
                <select class="form-select" name="funcao" aria-label="Default select example">
                    <option selected>...</option>
                    <!--
                    preciasa crair um cadastro de função e puxar o que tiver no banco de dados pra ca
                     -->
                </select>
            </div>
            <div class="mb-3 col-3">
                <label class="form-label">Salario</label>
                <input type="text" name="salario" class="form-control" value="R$ ">
            </div>
        </div>

        <div>
            <h2>Funcinario</h2>
        </div>

        <div class="row">
            <div class="mb-3 col-8">
                <label class="form-label">Nome Completo</label>
                <input type="text" class="form-control" name="nome">
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Grau Instrução</label>
                <select class="form-select" name="grauInstrução" aria-label="Default select example">
                    <option selected>...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>
        <div class="row">
            <div class="mb-3 col-3">
                <label class="form-label">Estado Civel</label>
                <select class="form-select" name="estadoCivel" aria-label="Default select example">
                    <option value="solteiro">Solteiro</option>
                    <option value="casado">Casadp</option>
                    <option value="divorciado">Divorciado</option>
                </select>
            </div>
            <div class="mb-3 col-3">
                <label class="form-label">E-mail</label>
                <input type="text" class="form-control" name="email">
            </div>
            <div class="mb-3 col-3">
                <label class="form-label">Celular</label>
                <input type="text" class="form-control" name="celular">
            </div>
            <div class="mb-3 col-3">
                <label class="form-label">Telefone</label>
                <input type="text" class="form-control" name="telefone">
            </div>
        </div>

        <div>
            <h2>Origem</h2>
        </div>

        <div class="row">
            <div class="mb-3 col-3">
                <label class="form-label">Data de nascimento</label>
                <input type="date" class="form-control" name="dataNascimento">
            </div>
            <div class="mb-3 col-7">
                <label class="form-label">Local Nascimento</label>
                <input type="text" class="form-control" name="localNascimento">
            </div>
            <div class="mb-3 col-2">
                <label class="form-label">UF</label>
                <input type="text" class="form-control" name="uf">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-10">
                <label class="form-label">Pai</label>
                <input type="text" class="form-control" name="pai" >
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-10">
                <label class="form-label">Mãe</label>
                <input type="text" class="form-control" name="mae" >
            </div>
        </div>

        <div>
            <h2>Info</h2>
        </div>

        <div class="row">
            <div class="mb-3 col-3">
                <label class="form-label">Imposto de renda</label>
                <input type="text" class="form-control" name="impostoRenda">
            </div>
            <div class="mb-3 col-3">
                <label class="form-label">Individual</label>
                <input type="text" class="form-control" name="individual">
            </div>
            <div class="mb-3 col-3">
                <label class="form-label">Dependente</label>
                <input type="text" class="form-control" name="dependente">
            </div>
            <div class="mb-3 col-3">
                <label class="form-label">1 Emprego</label>
                <select class="form-select" name="emprego" aria-label="Default select example">
                    <option value="sim">Sim</option>
                    <option value="nao">Não</option>
                </select>
            </div>
        </div>

        <div>
            <h2>Endereço</h2>
        </div>

        <div class="row justify-content-between">
            <div class="mb-3 col-2">
                <label class="form-label">CEP</label>
                <input type="number" class="form-control" name="cep">
            </div>
            <div class="mb-3 col-1">
                <label class="form-label">Numero</label>
                <input type="text" class="form-control" name="numero">
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-8">
                <label class="form-label">Rua</label>
                <input type="text" class="form-control" name="rua">
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Estado</label>
                <select class="form-select" aria-label="Default select example" name="estado">
                    <option selected>...</option>
                    <option value="1">One</option>
                    <option value="2">Two</option>
                    <option value="3">Three</option>
                </select>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-6">
                <label class="form-label">Cidade</label>
                <input type="text" class="form-control" name="cidade">
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Residencia</label>
                <select class="form-select" name="residencia" aria-label="Default select example">
                    <option selected>...</option>
                    <option value="casa">Casa</option>
                    <option value="apartamento">Apartamento</option>
                    <option value="condominio">Condominio</option>
                </select>
            </div>
        </div>

        <div>
            <h2>Documentos</h2>
        </div>

        <div class="row">
            <div class="mb-3 col-4">
                <label class="form-label">CPF</label>
                <input type="text" class="form-control" name="cpf">
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">RG</label>
                <input type="text" class="form-control" name="rg">
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Titulo de Eleitor</label>
                <div class="input-group mb-3">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" value="nao" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="tituloEleitor" aria-label="Text input with checkbox">
                </div>
            </div>
        </div>

        <div class="row">
            <div class="mb-3 col-4">
                <label class="form-label">Habilitação</label>
                <div class="input-group mb-3">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" value="nao" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="habilitacao" aria-label="Text input with checkbox">
                </div>
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Numero de conta</label>
                <div class="input-group mb-3">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" value="nao" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="contaBanco" aria-label="Text input with checkbox">
                </div>
            </div>
            <div class="mb-3 col-4">
                <label class="form-label">Pix</label>
                <div class="input-group mb-3">
                    <div class="input-group-text">
                        <input class="form-check-input mt-0" type="checkbox" value="nao" aria-label="Checkbox for following text input">
                    </div>
                    <input type="text" class="form-control" name="pix" aria-label="Text input with checkbox">
                </div>
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