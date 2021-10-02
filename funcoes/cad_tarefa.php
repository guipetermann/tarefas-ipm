<?php

require_once("../banco/conexao.php");
session_start();

$titulo = $_POST['titulo'];
$descricao = $_POST['descricao'];
$datacriacao = $_POST['datacriacao'];
$dataconclusao = $_POST['dataconclusao'];
$sql = "INSERT INTO 
            tarefa (nome_tarefa , descricao_tarefa, status_tarefa,  data_criacao, data_conclusao)
            VALUES
            ('$titulo', '$descricao', 'Não Iniciada',  '$datacriacao', '$dataconclusao')
        ";
echo $sql;
$resultado = mysqli_query($con, $sql);

if ($resultado == true) {
    header("Location:../index.php");
}
