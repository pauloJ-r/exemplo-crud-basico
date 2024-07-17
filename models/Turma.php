<?php 
require_once "../config/database.php";

class Turma {
    private $conn;
    private $table_name = "turmas";

    public $id;
    public $turma;
    public $professor;
    public $turno;
    public $timestamp_criacao;
    public $timestamp_update;

    public function __construct($db)
    {
        $this->conn = $db;
    }

    function create()
    {
        $query = "INSERT INTO " . $this->table_name . " SET turma=:turma, professor=:professor, turno=:turno";

        $statement = $this->conn->prepare($query);

        $this->turma = htmlspecialchars(strip_tags($this->turma));
        $this->professor = htmlspecialchars(strip_tags($this->professor));
        $this->turno = htmlspecialchars(strip_tags($this->turno));

        $statement->bindParam(":turma", $this->turma);
        $statement->bindParam(":professor", $this->professor);
        $statement->bindParam(":turno", $this->turno);

        if($statement->execute()) {
            return true;
        }

        return false;
    }

    function read()
    {
        $query = "SELECT * FROM " . $this->table_name;
        $statement = $this->conn->prepare($query);
        $statement->execute();
        return $statement;
    }

    function readOne()
    {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id = ? LIMIT 0,1";
        $statement = $this->conn->prepare($query);
        $statement->bindParam(1, $this->id);
        $statement->execute();

        $row = $statement->fetch(PDO::FETCH_ASSOC);

        $this->turma = $row['turma'];
        $this->professor = $row['professor'];
        $this->turno = $row['turno'];
    }

    function update()
    {
        $query = "UPDATE " . $this->table_name . " SET turma=:turma, professor=:professor, turno=:turno WHERE id=:id";

        $statement = $this->conn->prepare($query);

        $this->turma = htmlspecialchars(strip_tags($this->turma));
        $this->professor = htmlspecialchars(strip_tags($this->professor));
        $this->turno = htmlspecialchars(strip_tags($this->turno));
        $this->id = htmlspecialchars(strip_tags($this->id));

        $statement->bindParam(":turma", $this->turma);
        $statement->bindParam(":professor", $this->professor);
        $statement->bindParam(":turno", $this->turno);
        $statement->bindParam(":id", $this->id);

        if($statement->execute()) {
            return true;
        }

        return false;
    }

    function delete()
    {
        $query = "DELETE FROM " . $this->table_name . " WHERE id = ?";
        $statement = $this->conn->prepare($query);
        $this->id = htmlspecialchars(strip_tags($this->id));
        $statement->bindParam(1, $this->id);

        if($statement->execute()) {
            return true;
        }

        return false;
    }
}
?>