<?php
if (isset($_POST["name"]) && isset($_POST["password"])) {
    if (
        $_POST["name"] == 'senna' &&
        $_POST["password"] == '0000'
    ) {
        echo 'success';
    }
}
?>
<?php
session_start();

$error = NULL;
if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username == "senna" && $password == "0000") {
        $_SESSION['name'] = $username;
    } else {
        $error = "<h4 style='color: red;'>wachtwoord verkeerd</h4>";
    }
}
if (isset($_SESSION['name']) && $_SESSION['name'] != "") {
    echo "Hoi" . $_SESSION['name'];
    header("Location: admin-panel.php");
    exit;
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link rel="stylesheet" href="style.css/main.css">
</head>

<body>
    <section class="login1">
        <div class="logo">
            <h2>Restaurant</h2>
        </div>
        <div class="line">
        </div>
        <div class="navbar">
            <ul class="navbar-tekst">
                <li><a class="navbar-tekst" href="index.php">Home</a></li>
                <li><a class="navbar-tekst" href="menu.php">Menu</a></li>
                <li><a class="navbar-tekst" href="over-ons.php">over ons</a></li>
                <li><a class="navbar-tekst" href="#">reserveren</a></li>
                <li><a class="navbar-tekst" href="#">Contact</a></li>
                <li><a class="navbar-tekst" href="login.php">login</a></li>
            </ul>
        </div>


        <div class="login-background"></div>
        <div class="login">
            <form method="post">
                <h2>name</h2><input type="text" name="name">
                <h2>password</h2><input type="password" name="password" id="">
                <br><input type="submit" value="login">
            </form>
        </div>
    </section>

</body>

</html>