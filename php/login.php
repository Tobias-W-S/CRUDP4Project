<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/styles.css" />
</head>
<body>
<?php 
    include('../includes/connect.php');
?>
<div class="login_form">
    <form method="post" action="../includes/loginExecute.php">
        <label>Gebruikersnaam</label>
        <input name="Gebruikersnaam" autocapitalize="none" type="email" class="lowercase" required>
        <label>Wachtwoord</label>
        <input name="Wachtwoord" type="password" required>
        <input name="submitlogin" type="submit" value="Login">
    </form>
</div>
    <script src="js/main.js"></script>
</body>
</html>




