<!DOCTYPE html>
<html>
<head>
    <title>Editar Turma</title>
</head>
<body>
    <h1>Editar Turma</h1>
    <form action="index.php?action=edit-turma&id=<?php echo $turma->id; ?>" method="POST">
        <div class="form-group">
            <label for="turma">Turma:</label>
            <input class="form-control"  type="text" id="turma" name="turma" value="<?php echo htmlspecialchars($turma->turma); ?>" required>
        </div>
        <div class="form-group">
            <label for="professor">Professor:</label>
            <input  class="form-control"  type="text" id="professor" name="professor" value="<?php echo htmlspecialchars($turma->professor); ?>" required>
        </div>
        <divdiv class="form-group">
            <label for="turno">Turno:</label>
            <input class="form-control"  type="text" id="turno" name="turno" value="<?php echo htmlspecialchars($turma->turno); ?>" required>
        </div>
        <div>
            <button type="submit" class="btn btn-primary">Salvar</button>
        </div>
    </form>
    <a href="index.php?action=list-turmas">Voltar</a>
</body>
</html>
