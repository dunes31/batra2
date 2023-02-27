<?php
 session_start();if(isset($_SESSION['username']) || isset($_SESSION['password'])){
    $navbar = "1";
    $logindisplay = "0";
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
} else {
    header('Location:404.php');
}
 if(isset($_SESSION['username']) || isset($_SESSION['password'])){
    $navbar = "1";
    $logindisplay = "0";
    $username = $_SESSION['username'];
    $password = $_SESSION['password'];
  } else {
    header('Location:404.php');
  }
 session_destroy();
  header('Location:login.php');