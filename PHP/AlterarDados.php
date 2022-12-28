<!DOCTYPE html>
<html lang="pt">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- CSS e Bootstrap -->
  <link rel="stylesheet" href="../CSS/styles.css">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous">
  <!-- JQUERY -->
  <script src=
      "https://code.jquery.com/jquery-3.6.0.min.js"
       integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" 
       crossorigin="anonymous">
  </script>
  <script type="text/javascript" src="../JQUERY/script.js"></script>
</head>

<body>
    <br><br>
    <h5>Informações:</h5>
        <form>
            <div class="form-group">
                <label for="exampleInputEmail1">Alterar email:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduza email">
               </div>
        <button type="submit" class="btn btn-primary">Submeter</button>
        </form>
        <form>
                <div class="form-group">
                <label for="exampleInputEmail1">Alterar nome:</label>
                <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Introduza username">
                </div>
                <button type="submit" class="btn btn-primary">Submeter</button>
        </form>
        <form>
                 <div id="show_hide_password" class="form-group">
                <label for="exampleInputPassword1">Alterar senha:</label>
                <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Introduza senha">
                <button type="submit" class="btn btn-primary">Submeter</button>
                <small class="form-text text-muted">Dicas: Introduza uma senha forte.</small>
                <small class="form-text text-muted">Não partilhe os dados com ninguém.</small>
                </div>

 <script>
                        $(document).ready(function() {
        $("#show_hide_password a").on('click', function(event) {
            event.preventDefault();
            if($('#show_hide_password input').attr("type") == "text"){
                $('#show_hide_password input').attr('type', 'password');
                $('#show_hide_password i').addClass( "fa-eye-slash" );
                $('#show_hide_password i').removeClass( "fa-eye" );
            }else if($('#show_hide_password input').attr("type") == "password"){
                $('#show_hide_password input').attr('type', 'text');
                $('#show_hide_password i').removeClass( "fa-eye-slash" );
                $('#show_hide_password i').addClass( "fa-eye" );
            }
        });
    });
</script>

</body>

</html>