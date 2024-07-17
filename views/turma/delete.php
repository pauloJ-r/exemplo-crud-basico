<h1>Deletar Turma</h1>
<p>Tem certeza que deseja deletar a turma <?php echo $turma->nome; ?>?</p>
<form action="index.php?action=delete-turma&id=<?php echo $turma->id; ?>" method="POST">
    <input type="submit" class="btn btn-danger" value="Deletar">
    <a href="index.php?action=list-turmas" class="btn btn-secondary">Cancelar</a>
</form>