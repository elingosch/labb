<?php
 include 'include/bootstrap.php';

  if(isset($_SESSION['username'])) {

          $connection = new mysqli($host, $uname, $pass, $dbname);
          if ($connection->connect_error)
            {
                die("Connection failed: ".$connection.connect_error);
            }
          
          $un = $_SESSION['email'];
          $cm = mysqli_real_escape_string($connection, $_POST['post']);

          $query = "INSERT INTO comments(Comment,eMail) VALUES ('$cm', '$un')";
          $connection->query($query);
        

          header('Location: index.php');

    }

  else {
      echo '<div id="unathorized">Du är inte inloggad, logga in först!</div>';
      header('Refresh: 4; login.php');
    }
    ?>
