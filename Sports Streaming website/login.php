<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
  $_SESSION['name'] = $_POST['name'];
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['phone'] = $_POST['phone'];

  header("Location: home.php");
  exit();
}
?>
