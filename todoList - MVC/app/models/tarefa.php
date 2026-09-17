<?php

require_once __DIR__ . '/../config/database.php';

class Tarefa{
    private $conn;
   
    public function __construct(){
        $database = new Database();
        $this->conn = $database->conectar();
    }

    public function criar($descricao){
        $descricao = $this->conn->real_escape_string($descricao);
        $sql = "INSERT INTO tarefas (descricao) VALUES ('$descricao')";
        return $this->conn->query($sql);
    }
  
    public function excluir($id){
        $id = intval($id);
        $sql = "DELETE FROM tarefas WHERE id = $id";
        return $this->conn->query($sql);

    }

    public function listar(){
       $tarefas=[];
       $sql = "SELECT * FROM tarefas ORDER BY id DESC";
       $resultado = $this->conn->query($sql);
       if($resultado->num_rows > 0){
        while($rowados = $resultado->fetch_assoc()){
            $tarefas[] = $rowados;
        }
    }
    return $tarefas;
}
}
?>