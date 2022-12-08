<?php include_once("connectbd.php") ?>


<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
<title>Aluno</title>
</head>

<body>
<p>propostas</p>






<?php 

$sql = "SELECT Proposta.empresa,Proposta.local,Docente.id,Proposta.estado
from Proposta INNER JOIN Docente
 On Proposta.id_docente=Docente.id";

#get the result
$final = mysqli_query($link, $sql);

if (mysqli_num_rows($final) > 0) {
    echo "<table><tr><th>Empresa</th>
    <th>Local</th>
    <th>Docente</th>
    <th>Estado</th>";

    //get the output of each row
    while ($i = mysqli_fetch_assoc($final)) {
        //get id and name columns
        echo "<tr><td>" . $i["empresa"] .
            "</td><td>" . $i["local"] .
            "</td><td>" . $i["id"] .
            "</td><td>" . $i["estado"] .
       "</td></tr>";
    }
} else {
    echo "No results";
}




//mysqli_close($connection);
?>

</body>