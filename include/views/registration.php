<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="assets/css/main.css">
    <title>Registrera ny användare</title>
  </head>
  <body>

    <h1>Registrera ny användare</h1>
    <div id="form">
      <form method="post" action="handleRegistration.php" name="myForm" id="send">
        <label for="username">Användarnamn</label>
        <input class="form-ruta" type="text" placeholder="Vänligen skriv användarnamn här..." name="username">
        <label for="mail">Email</label>
        <input class="form-ruta" type="text" placeholder="Vänligen skriv epostadress här..." name="mail">
        <label for="password">Lösenord</label>
        <input class="form-ruta" type="password" placeholder="Vänligen skriv lösenordet här..." name="password">
        <input type="button" name="knapp" value="Skapa användare" id="button" onclick="validateForm();"></input>
      </form>
    </div>
    <script type="text/javascript" src="assets/js/style.js"></script>
  </body>
</html>
