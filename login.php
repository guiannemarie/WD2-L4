<?php
session_start();

$user = "James";
$pass = "12345";
$name = "James";

$msg = "";

if (isset($_POST['login'])) {

    $uname = $_POST['username'];
    $pword = $_POST['password'];

    if ($uname == $user && $pword == $pass) {

        $_SESSION['username'] = $uname;
        $_SESSION['name'] = $name;

        header("Location: landing.php");
        exit();

    } else {
        $msg = "Wrong username or password";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
</head>
<body>

<h2>Login</h2>

<form method="POST">
    <input type="text" name="username" placeholder="Enter username"><br>
    <input type="password" name="password" placeholder="Enter password"><br>
    <button type="submit" name="login">Log In</button>
</form>

<p>
<?php 
    if($msg != ""){
        echo $msg;
    }
?>
</p>

</body>
</html>
