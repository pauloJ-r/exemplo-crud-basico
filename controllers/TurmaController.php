<?php

require_once '../models/Turma.php'; // Inclui o arquivo de modelo Turma
require_once '../config/database.php'; // Inclui o arquivo de configuração do banco de dados

class TurmaController {
    private $db; // Conexão com o banco de dados
    private $turma; // Instância da classe Turma

    // Construtor da classe que inicializa a conexão com o banco de dados e cria uma instância da classe Turma
    public function __construct() {
        $database = new Database(); // Cria uma instância da classe Database
        $this->db = $database->getConnection(); // Obtém a conexão com o banco de dados
        $this->turma = new Turma($this->db); // Cria uma instância da classe Turma passando a conexão do banco de dados
    }

    // Método para exibir todas as turmas
    public function index() {
        $statement = $this->turma->read();
        $turmas = $statement->fetchAll(PDO::FETCH_ASSOC);
        return ['view' => '../views/turma/index.php', 'data' => compact('turmas')];
    }

    // Método para exibir o formulário de criação e salvar uma nova turma
    public function create() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->turma->turma = $_POST['turma'];
            $this->turma->professor = $_POST['professor'];
            $this->turma->turno = $_POST['turno'];
        
            if ($this->turma->create()) {
                header("Location: index.php?action=list-turmas");
                exit();
            }
        }
        return ['view' => '../views/turma/create.php', 'data' => []];
    }

    // Método para exibir os detalhes de uma turma
    public function show($id) {
        $this->turma->id = $id;
        $this->turma->readOne();
        return ['view' => '../views/turma/show.php', 'data' => ['turma' => $this->turma]];
    }

    // Método para exibir o formulário de edição e atualizar uma turma
    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $this->turma->id = $id;
            $this->turma->turma = $_POST['turma'];
            $this->turma->professor = $_POST['professor'];
            $this->turma->turno = $_POST['turno'];
        
            if ($this->turma->update()) {
                header("Location: index.php?action=list-turmas");
                exit();
            }
        } else {
            $this->turma->id = $id;
            $this->turma->readOne();
        }
        return ['view' => '../views/turma/edit.php', 'data' => ['turma' => $this->turma]];
    }

    // Método para deletar uma turma
    public function delete($id) {
        $this->turma->id = $id;
        if ($this->turma->delete()) {
            header("Location: index.php?action=list-turmas");
            exit();
        }
    }
}

?>
