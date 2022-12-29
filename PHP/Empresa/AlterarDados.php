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
                <label for="InputEmail">Alterar email:</label>
                <input type="email" class="form-control" name="email" aria-describedby="emailHelp" placeholder="Introduza email">
                <button type="submit" name="submitEmail" class="btn btn-primary">Alterar email</button>   
            </div>
        </form>
        <form action="" method="POST">
                <div class="form-group">
                <label for="InputNome">Alterar nome:</label>
                <input type="nome" class="form-control" name="nome" aria-describedby="nomeHelp" placeholder="Introduza username">
                <button type="submit" name="submitNome" class="btn btn-primary">Alterar nome</button>
                </div>
        </form>
        <form action="" method="POST">
             <div class="form-group">
                <label for="InputSenha">Alterar password:</label>
                <input type="password" class="form-control" name="senha" aria-describedby="senhaHelp" placeholder="Introduza senha" method="post">
                <button type="submit" name="submitSenha" class="btn btn-primary">Alterar senha</button>
            </div>
        </form>
        <form action="" method="POST">
             <div class="form-group">
                <label for="InputTelemovel">Alterar telemovel:</label>
                <input type="text" class="form-control" name="telemovel" aria-describedby="senhaHelp" placeholder="Introduza telemovel" method="post">
                <button type="submit" name="submitTelemovel" class="btn btn-primary">Alterar telemovel</button>
            </div>
        </form>
        <p>Atual pessoa de contato:</p>
        <p>-</p>
        <p>Atual telemovel da pessoa de contato:</p>
        <p>-</p>
        <form action="" method="POST">
             <div class="form-group">
                <label for="InputNomeResponsavel">Alterar pessoa de contato:</label>
                <input type="text" class="form-control" name="nome_responsavel" aria-describedby="senhaHelp" placeholder="Introduza nome da pessoa" method="post">
                <button type="submit" name="submitNomeResponsavel" class="btn btn-secondary">Alterar pessoa de contato</button>
            </div>
        </form>
        <form action="" method="POST">
             <div class="form-group">
                <label for="InputContatoResponsavel">Alterar telemovel de pessoa de contato:</label>
                <input type="text" class="form-control" name="contato_responsavel" aria-describedby="senhaHelp" placeholder="Introduza telemovel da pessoa" method="post">
                <button type="submit" name="submitContatoResponsavel" class="btn btn-secondary">Alterar telemovel da pessoa de contato</button>
            </div>
        </form>
</body>

</html>