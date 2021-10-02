<?php
require_once("./banco/conexao.php");

?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Tarefas</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="body">
    <div class="bg-top">
      <h1>Tarefas</h1>
    </div>
    <div class="body-tarefa">
      <div class="div-cadastro-tarefa"> <a href="cadastro.php">Cadastrar Nova Tarefa</a></div>
      <div class="div-tarefa">
        <?php

        $sql = 'SELECT * FROM tarefa';
        if ($res = mysqli_query($con, $sql)) {
          $id_titulo = array();
          $titulo = array();
          $desc = array();
          $status = array();
          $datacria = array();
          $dataconclu = array();
          $i = 0;
          while ($reg = mysqli_fetch_assoc($res)) {
            $id_titulo = $reg['id_tarefa'];
            $titulo[$i] = $reg['nome_tarefa'];
            $desc[$i] = $reg['descricao_tarefa'];
            $status[$i] = $reg['status_tarefa'];
            $datacria[$i] = $reg['data_criacao'];
            $dataconclu[$i] = $reg['data_conclusao'];
        ?>
            <div class="tarefa">
              <div>
                <h3 class="titulo-tarefa"><?php echo $titulo[$i] ?></h3>
              </div>
              <div class="desc-tarefa">
                <p><?php echo $desc[$i] ?></p>
              </div>
              <div class="status-tarefa">
                <p><?php echo $status[$i] ?></p>
              </div>
              <div class="datas-tarefa">
                <div class="data-cria-tarefa">
                  <p><?php echo $datacria[$i] ?></p>
                </div>
                <div class="data-conclusao-tarefa">
                  <p><?php echo $dataconclu[$i] ?></p>
                </div>
              </div>
              <div>
                <a class="link-editar" href="editar.php?id=<?php echo $id_titulo[$i] ?>">Editar</a>
              </div>
            </div>
        <?php
          }
          $i++;
        } else {
          echo '<p>Nenhuma Tarefa Cadastrada</p>.';
        }
        ?>
      </div>
    </div>
  </div>
  <footer class="bg-top">

</body>