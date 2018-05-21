<!DOCTYPE html>
<?php
$uname = "root";
$pass = "";
$host = "localhost";
$dbname = "laboration";

$connection = new mysqli($host, $uname, $pass, $dbname);

if ($connection->connect_error)
{
    die("Connection failed: ".$connection.connect_error);
}

?>

<html>
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <title>Page Title</title>
  </head>
  <body>

    <h1>Välkommen </h1>
    <div class="logoutButton"><a href="handleLogout.php" id="logout"><button>Logga ut</button></a></div>

    <div id="form">
      <form method="post" action="sida.php" name="myForm" id="hej">
        <label for="post">Inlägg</label>
        <textarea placeholder="Textarea stödjer placeholders" name="post" class="form-ruta">
        </textarea>
        <input type="button" name="knapp" value="Skicka ditt meddelande" onclick ="validateForm();" id="button"></input>
      </form>
    </div>


      <?php
      session_start();
      if(isset($_SESSION['username'])) {
        $query = "SELECT * FROM comments";
        $result = $connection->query($query);

          foreach ($result as $row) {

            
            $query = "SELECT username FROM registration WHERE email = '".$row['eMail']."'";
            $user = $connection->query($query);
            $username = $user->fetch_assoc();
            $username['username'];

            echo
            '<div id="comments">
            <h4> Kommentar av '.$username['username'].'</h4>'
            .$row['Comment'].
            '</div>';
          }
        }

        else
            {
              header('Location: login.php');
            }





      ?>
    <script type="text/javascript" src="js/style2.js"></script>
  </body>
</html>
