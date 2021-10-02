<?php
require_once("./banco/conexao.php");
session_start();
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Editar Tarefa</title>
  <link rel="stylesheet" href="style.css">
</head>

<body>
  <div class="body">
    <div class="bg-top">
      <h1>Editar Tarefa</h1>
    </div>
    <div class="body-tarefa">
      <?php
      $id = $_GET['id'];
      if (isset($_GET['id'])) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM tarefa WHERE id_tarefa = '$id'";
        $res = mysqli_query($con, $sql);
        while ($reg = mysqli_fetch_assoc($res)) {

          $titulo = $reg['nome_tarefa'];
          $desc = $reg['descricao_tarefa'];
          $status = $reg['status_tarefa'];
          $datacria = $reg['data_criacao'];
          $dataconclu = $reg['data_conclusao'];
        }
      ?>
        <div class="div-editar">
          <form id="id" method="POST" action="funcoes/editar_tarefa.php"">
        <input style=" display: none !important;" type=" hidden" name="id_tarefa" id="id_tarefa" value="<?php echo $id ?>">
            <div class="campos-cadastro">
              <div>
                <div class="editar-esquerda">
                  <div>
                    <label>Título:<input type=" text" name="titulo" id="titulo" value="<?php echo $titulo ?>" required maxlength="15"></label>
                  </div>
                  <div>
                    <label>Descrição:<textarea name="descricao" id="descricao_tarefa" maxlength="100"><?php echo htmlspecialchars($desc) ?></textarea></label>
                  </div>
                  <div>
                    <label>Status:<input type="text" name="status_tarefa" id="status_tarefa" value="<?php echo $status ?>" required> </label>
                  </div>
                </div>
                <div class="editar-direta">
                  <label>Data de criação:<input type="date" name="datacriacao" id="data_criacao" value="<?php echo $datacria ?>" required></label>
                  <label>Data de conclusão desejada:
                    <input type="date" name="dataconclusao" id="data_conclusao" value="<?php echo $dataconclu ?>" required></label>
                </div>
              </div>
              <div class="btn-cadastro"><button type="submit" value="salvar">Salvar Alterações</button></div>
            </div>

          </form>

        <?php
      }
        ?>

        </div>
    </div>
    <footer class="bg-top">
</body>