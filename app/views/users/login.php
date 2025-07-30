<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Magnsus-Login</title>
    <link rel="stylesheet" href="../../../public/css/reset.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../../../public/css/login.css">
</head>
<body>
<form class="forme" action="../../controllers/login.php" method="post">
    <div class="mb-3">
        <label class="form-label">Nome Usuario</label>
        <input type="text" class="form-control" name="Nome_usuario">
    </div>
    <div class="mb-3">
        <label class="form-label">Senha</label>
        <input type="password" class="form-control" name="Senha_usuario">
    </div>
    <div class="mb-3 form-check">
        <input type="checkbox" class="form-check-input" >
        <label class="form-check-label">Check me out</label>
    </div>
    
    <button type="submit" class="btn btn-primary">Submit</button>

    <a class="btn btn-primary" href="../../../index.html">Voltar</a>
</form>
</body>
</html>