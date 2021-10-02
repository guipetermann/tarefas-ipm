<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Cadastro de Tarefas</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="body">
    <div class="bg-top">
      <h1>Cadastro de Tarefa</h1>
    </div>
    <div class="div-cadastro">
      <form action="funcoes/cad_tarefa.php" method="POST">
        <div class="campos-cadastro">
          <div>
            <div>
              <label>Título:<input type="text" name="titulo" required maxlength="15"></label>
            </div>
            <div>
              <label>Descrição:<textarea name="descricao" id="" maxlength="100"></textarea></label>
            </div>
          </div>
          <div>
            <div>
              <label>Data de criação:<input type="date" name="datacriacao" required></label>
            </div>
            <div>
              <label>Data de conclusão desejada: <input type="date" name="dataconclusao" required></label>
            </div>
          </div>
        </div>
        <div class="btn-cadastro"><button>Cadastrar</button></div>

      </form>
    </div>
  </div>
  <footer class="bg-top">
</body>