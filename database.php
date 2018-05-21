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

<?php

function validEmail() {

  $check = false;

      $input = $_POST['mail'];
      $splitted = explode('@', $input);
      if (count($splitted) == 2) {
        $splitted2 = explode('.', $splitted[1]);
        if (count($splitted2) == 2) {
          $check = true;
        }
      }
}

function getHash($password, $salt) {
     $h = sha1($salt . $password);
     return $h;
 }

 ?>
