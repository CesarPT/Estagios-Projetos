<?php
 include_once("../ConnectionBD/connectbd.php");
 ?>

<!DOCTYPE html>
<html>
<head>
    <titel></title>
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">
    <style>
      table{
        border-collapse: collapse;
        width: 75%;
      }
      table thead tr th{
        text-align: center;
      }
      table tbody tr td{
        text-align: center;
      }
      table tbody tr td #plus{
        color: green;
      }
    </style>
</head>
<body>
    <h1 align="center" style="color:red;">Propostas de Candidatura</h1>
      <br>

      <!--Get Data-->
      <?php
      $sql = "SELECT * FROM Proposta";
      #get querry result
      $final = mysqli_query($link, $sql);
      ?>

<div class="container">
  <div class="col-8 bg-white m-auto mt-3">
      <table class="table">
        <tbody>
          <tr>
            <th>ID</th>
            <th>Titulo</th>
            <th>Resumo</th>
            <th>Area</th>
            <th>Empresa</th>
            <th>Docente</th>
            <th>PDF</th>
            <th>Escolha</th>
          </tr>
          <?php
          #comando sql para ir buscar dados a tabela
          $sql = "SELECT * FROM `Proposta`";
          #executar a query
          $final = mysqli_query($link, $sql);
          #guardar o numero de row
          $resultcheck = mysqli_num_rows($final);
          #verifica se o result teve algum resultado
          if($resultcheck > 0){
          ?>

              <?php
                while($row = mysqli_fetch_assoc($final)){
              ?>
                <tr>
                  <td><?php echo $row["id"]; ?></td>
                  <td><?php echo $row["descricao"]; ?></td>
                  <td><?php echo $row["empresa"];?></td>
                  <td><?php echo $row["local"]; ?></td>
                  <td><?php echo $row["id_aluno"]; ?></td>
                  <td><?php echo $row["estado"]; ?></td>
                  <td><?php echo $row["id_docente"]; ?></td>
                  <td><?php echo $row["iduser"]; ?></td>

                  <td style="width: 10%"><a href="" class="btn btn-primary">Ingressar</a></td>
                </tr>
              <?php } ?>

          <?php } ?>
        </tbody>
      </table>
  </div>
</div>

</body>
</html>