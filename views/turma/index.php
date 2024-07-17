<table class="table table-striped">
    <thead>
    <tr>
            <th>ID</th>
            <th>Turma</th>
            <th>Professor</th>
            <th>Turno</th>
            <th>Ações</th>
        </tr>
        <?php foreach ($turmas as $turma): ?>
        <tr>
            <td><?php echo $turma['id']; ?></td>
            <td><?php echo $turma['turma']; ?></td>
            <td><?php echo $turma['professor']; ?></td> 
            <td><?php echo $turma['turno']; ?></td>
            <td>
                <a href="index.php?action=show-turma&id=<?php echo $turma['id']; ?>">Ver</a>
                <a href="index.php?action=edit-turma&id=<?php echo $turma['id']; ?>">Editar</a>
                <a href="index.php?action=delete-turma&id=<?php echo $turma['id']; ?>" onclick="return confirm('Tem certeza que deseja deletar esta turma?')">Deletar</a>
            </td>
        </tr>
        <?php endforeach; ?>
        
            <tr>
                <td colspan="7" class="text-center">Nenhuma turma encontrada.</td>
            </tr>
       
    </tbody>
</table>