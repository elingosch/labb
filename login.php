<!DOCTYPE html>
<?php
  include 'database.php';
?>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Logga in</title>
  </head>
  <body>

    <h1>Logga in</h1>
    <div id="form">
      <form method="post" action="handleLogin.php" name="myForm" id="send">
        <label for="e-mail">Email</label>
        <input class="form-ruta" type="text" placeholder="Vänligen skriv epostadress här..." name="e-mail">
        <label for="pass-word">Lösenord</label>
        <input class="form-ruta" type="password" placeholder="Vänligen skriv lösenordet här..." name="password">
        <input type="button" name="knapp" value="Logga in" id="button" onclick="validateForm();"></input>
      </form>
    </div>
    <script type="text/javascript" src="js/style3.js"></script>
  </body>
</html>
