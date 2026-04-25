<?php  
session_start();  

if (!isset($_SESSION['username'])) {  
    header("Location: index.php");  
    exit();  
}  
?>  

<!DOCTYPE html>
<html>
<head>
    <title>Landing</title>
</head>
<body>

<h2>Welcome, <?php echo $_SESSION['name']; ?>!</h2>

<p>Username: <?php echo $_SESSION['username']; ?></p>
<p>Name: <?php echo $_SESSION['name']; ?></p>

<a href="logout.php">
    <button>Logout</button>
</a>

</body>
</html>
