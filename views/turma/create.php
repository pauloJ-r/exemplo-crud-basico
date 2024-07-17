<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar Turma</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container" style="margin: 0 20%;">
        <h1 class="my-4">Criar Turma</h1>
        <form action="index.php?action=create-turma" method="POST">
            <div class="form-group">
                <label for="turma">Turma:</label>
                <input type="text" class="form-control" name="turma" required>
            </div>
            <div class="form-group">
                <label for="professor">Professor:</label>
                <input type="text" class="form-control" name="professor" required>
            </div>
            <div class="form-group">
                <label for="turno">Turno:</label>
                <input type="text" class="form-control" name="turno" required>
            </div> 
            <input type="submit" class="btn btn-primary" value="Criar">
        </form>
    </div>
</body>
</html>