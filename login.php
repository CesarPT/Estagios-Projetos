<?php include_once("connectbd.php") ?>
<!--
https://www.youtube.com/watch?v=scd8YKiuS7I&t=199s logout
-->

<!DOCTYPE html>
<html lang="en">
<meta charset="UTF-8">

<head>
<title>Login</title>
</head>

<body>

<form action="login.php" method="post">
<h1>Login</h1>
<?php if (isset($_GET['error'])) { ?>
        <p class="error"> <?php echo $_GET['error'] ?></p>
<?php } ?>

    <p>
        <label for="name">Username:</label>
        <input type="text" name="name">
    </p>
    <p>
        <label for="pass">Password:</label>
        <input type="password" name="password">
    </p>
    <button type="submit" >Login</button>

</form>


<?php
function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}

session_start();
if (isset($_POST['name']) && isset($_POST['password'])) {

    $name = validate($_POST['name']);
    $password = validate($_POST['password']);


    echo "----".$password;




    if (empty($name)) {
        header("Location: login.php?error=User Name is requierd");
        //exit();
    } elseif (empty($password)) {
        header("Location login.php?error=Password is requierd");
        //exit();
    }

    $sql = "Select * FROM Utilizador Where nome='$name' and password='$password'";

    $result = mysqli_query($link, $sql);

    if (mysqli_num_rows($result) == 1) {
        echo "ENTREI";
        $row = mysqli_fetch_assoc($result);
        if ($row['nome'] == $name && $row['password'] == $password) {
            $_SESSION['nome'] = $row['name'];
            $_SESSION['id'] = $row['id'];
            $_SESSION['password'] = $row['password'];
            echo "sd,jkgfsdk.jfasdçkj";
            header("Location; index.php");
            exit();
        } else {
            header("Location: login.php?error=incorrer username or password");
            exit();
        }
    } else {
        header("Location: login.php");
    }
}


?>
</body>