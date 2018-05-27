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
 
 function getEmail($email, $connection) {
  $query = "SELECT email FROM registration WHERE email = '".$email."' ";
  $result = $connection->query($query);
  $email = $result->fetch_assoc();
  return $email['email'];
}

function randomSalt() {
  return substr(sha1(mt_rand()),0,22); // hämtat från https://code.tutsplus.com/tutorials/understanding-hash-functions-and-keeping-passwords-safe--net-17577
}


function getSalt($email,$connection) {
  $query = "SELECT salt FROM registration WHERE email = '".$email."' ";
  $result = $connection->query($query);
  $salt = $result->fetch_assoc();
  return $salt['salt'];
}

function getPassword($email,$connection) {
  $query = "SELECT password FROM registration WHERE email = '".$email."' ";
  $result = $connection->query($query);
  $password = $result->fetch_assoc();
  return $password['password'];
}

function getUser($email, $connection) {
  $query = "SELECT username FROM registration WHERE email = '".$email."' ";
  $result = $connection->query($query);
  $user = $result->fetch_assoc();
  return $user['username'];
}

 ?>
