<?php
require_once("../banco/conexao.php");
session_start();
$id = $_POST['id_tarefa'];
$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$datacriacao = $_POST['datacriacao'];
$status = $_POST['status_tarefa'];
$dataconclusao = $_POST['dataconclusao'];
$sql = "UPDATE tarefa SET
            nome_tarefa = '$titulo' , descricao_tarefa = '$descricao', status_tarefa = '$status',  data_criacao = '$datacriacao', data_conclusao = '$dataconclusao' WHERE id_tarefa = '$id'
        ";
echo $sql;
$resultado = mysqli_query($con, $sql);

if ($resultado == true) {
  header("Location:../index.php");
}
