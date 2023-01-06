<?php include_once("../../ConnectionBD/connectbd.php");
session_start();
?>

<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS e Bootstrap -->
  <link rel="stylesheet" href="../../CSS/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- JQUERY -->
  <script src=
      "https://code.jquery.com/jquery-3.6.0.min.js"
       integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
       crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="../../JQUERY/script.js"></script>
</head>

<body>
    <br><br>
    <form class="form-horizoontal" action="" method="post" name="uploadCsv" enctype="multipart/form-data">
        <label>Ficheiro CSV:</label>
        <input type="file" name="file" accept=".csv">
        <button type="submit" name="import">Importar CSV</button>
    </form>
</body>

</html>