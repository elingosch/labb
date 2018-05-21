<?php
$uname = "root";
$pass = "";
$host = "localhost";
$dbname = "laboration";


session_start();
if(isset($_SESSION['username'])) {

/*$check = false;

    $input = $_POST['email'];
    $splitted = explode('@', $input);
    if (count($splitted) == 2) {
      $splitted2 = explode('.', $splitted[1]);
      if (count($splitted2) == 2) {
        $check = true;
      }
    }

if (trim($_POST['firstname']) == "" || trim($_POST['post']) == "" || $check == false)
{
    //echo 'Felaktig email';
    header('Location: index.php');
}*/


//else {
          $connection = new mysqli($host, $uname, $pass, $dbname);
          if ($connection->connect_error)
            {
                die("Connection failed: ".$connection.connect_error);
            }
          //$fn = mysqli_real_escape_string($connection,$_POST['firstname']);
          $un = $_SESSION['email'];
          $cm = mysqli_real_escape_string($connection, $_POST['post']);

          $query = "INSERT INTO comments(Comment,eMail) VALUES ('$cm', '$un')";
          $connection->query($query);
          //var_dump($query);

          header('Location: index.php');

    /*var_dump($query);*/

      //}
    }

    else {
      echo 'du är inte inloggad';
      header('Refresh: 4; registration.php');
    }
    ?>
