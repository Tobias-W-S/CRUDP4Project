<?php 

    include('../includes/connect.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="post" action="../includes/loginExecute.php">
        <input name="Gebruikersnaam" autocapitalize="none" type="email" class="lowercase" required>
        <input name="Wachtwoord" type="password" required>
        <input name="submitlogin" type="submit" value="Login">
    </form>
    <script src="js/main.js"></script>
</body>
</html>



