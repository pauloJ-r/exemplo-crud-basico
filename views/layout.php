<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Exemplo</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <div class="container" style="margin: 0 20%;">
        <header class="my-4">
            <h1 class="text-center">Sistema Acadêmico</h1>
        </header>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <a class="navbar-brand" href="index.php">Home</a>
            <div class="collapse navbar-collapse">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="alunoDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Aluno
                        </a>
                        <div class="dropdown-menu" aria-labelledby="alunoDropdown">
                            <a class="dropdown-item" href="index.php?action=create-aluno">Adicionar Aluno</a>
                            <a class="dropdown-item" href="index.php?action=list-alunos">Listar Alunos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="turmaDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Turma
                        </a>
                        <div class="dropdown-menu" aria-labelledby="turmaDropdown">
                            <a class="dropdown-item" href="index.php?action=create-turma">Adicionar Turma</a>
                            <a class="dropdown-item" href="index.php?action=list-turmas">Listar Turmas</a>
                        </div>
                    </li>
                </ul>
            </div>
        </nav>
        <section class="my-4">
            <?php 
            // Verifica se a variável $view não está vazia
            if (!empty($view)) {
                // Extrai as variáveis do array $data para o escopo atual
                // Isso cria variáveis a partir das chaves do array $data
                extract($data);
                
                // Inclui o arquivo da view especificada na variável $view
                // Isso insere o conteúdo da view no ponto onde include($view) é chamado
                include($view); 
            } else {
                // Se $view estiver vazia, exibe uma mensagem de erro
                echo "<p>View não encontrada.</p>";
            }
        ?>
        </section>
        <footer class="text-center my-4">
            <p>&copy; 2024 Sistema Acadêmico</p>
        </footer>
    </div>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.2/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
