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
<!-- LER FICHEIRO JSON API-ALUNOS -->
<?php
//Iniciar uma conexão CURL para ler a API alunos
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, "http://ctesp.dei.isep.ipp.pt:8081/getAlunos");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$json = curl_exec($ch);

//Cria um objeto JSON para ser usado em PHP
$obj = json_decode($json, true);

$number1 = $obj['aluno1']['number'];
$number2 = $obj['aluno2']['number'];
$number3 = $obj['aluno3']['number'];
$number4 = $obj['aluno4']['number'];

$nome1 = $obj['aluno1']['name'];
$nome2 = $obj['aluno2']['name'];
$nome3 = $obj['aluno3']['name'];
$nome4 = $obj['aluno4']['name'];

$email1 = $obj['aluno1']['email'];
$email2 = $obj['aluno2']['email'];
$email3 = $obj['aluno3']['email'];
$email4 = $obj['aluno4']['email'];

echo '<p><b>Nº:</b> '. $number1 . ' | <b>Nome:</b> ' . $nome1 . ' | <b>Email:</b> ' . $email1 .'</p>';
echo '<p><b>Nº:</b> '. $number2 . ' | <b>Nome:</b> ' . $nome2 . ' | <b>Email:</b> ' . $email2 .'</p>';
echo '<p><b>Nº:</b> '. $number3 . ' | <b>Nome:</b> ' . $nome3 . ' | <b>Email:</b> ' . $email3 .'</p>';
echo '<p><b>Nº:</b> '. $number4 . ' | <b>Nome:</b> ' . $nome4 . ' | <b>Email:</b> ' . $email4 .'</p>';

?>

<?php
curl_close($ch);
?>


</body>
</html>
