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
    <h5>Informações:</h5>
        <form action="" method="POST">
            <div class="form-group">
                <label for="InputEmail">Introduza o seu email:</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Introduza email">
            </div>
                <div class="form-group">
                <label for="InputChave">Chave de segurança:</label>
                <input type="chave" class="form-control" name="chave" aria-describedby="chaveHelp" placeholder="Introduza chave">
                <h6>Esta chave foi fornecida no manual de utilização.</h6>
                </div>
             <div class="form-group">
                <label for="InputSenha">Nova senha:</label>
                <input type="password" class="form-control" name="senha" aria-describedby="senhaHelp" placeholder="Introduza nova senha" method="post">
                <button type="submit" name="submitSenha" class="btn btn-primary">Alterar senha</button>
            </div>
        </form>
</body>

</html>