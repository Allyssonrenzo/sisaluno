<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAC-IF BAIANO</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<style>

</style>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary">
        <div class="container">
            <a class="navbar-brand" href="index.php">SAC-IF BAIANO</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="./aluno/cadaluno.php">Cadastrar</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="./aluno/listaalunos.php">Lista</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header class="container-fluid p-5 bg-primary text-white text-center">
        <h1 class="display-4">SAC-IF BAIANO</h1>
        <p class="lead">Seja bem-vindo!</p>
    </header>

    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Realize o cadastro de alunos</h2>
                        <a href="./aluno/cadaluno.php" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Lista de alunos</h2>
                        <a href="./aluno/listaalunos.php" class="btn btn-primary">Lista</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Realize o cadastro de Professores</h2>
                        <a href="./professor/cadaprof.php" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Lista de Professores</h2>
                        <a href="./professor/listaprof.php" class="btn btn-primary">Lista</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="container mt-5">
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Realize o cadastro de Dsiciplinas</h2>
                        <a href="./disciplina/caddisciplina.php" class="btn btn-primary">Cadastrar</a>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card">
                    <div class="card-body">
                        <h2 class="card-title">Lista de Disciplinas</h2>
                        <a href="./disciplina/listadisciplinas.php" class="btn btn-primary">Lista</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <footer class="container-fluid bg-dark text-white text-center py-3 mt-5">
        <p>&copy; 2023 SAC-IF BAHIANO. Todos os direitos reservados.</p>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>