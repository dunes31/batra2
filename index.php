<?php
session_start();
if(isset($_SESSION['username']) || isset($_SESSION['password'])){
  $navbar = "1";
  $logindisplay = "0";
  $username = $_SESSION['username'];
 // $password = $_SESSION['password'];
} else {
  header('Location:404.php');
}
$con= new mysqli('localhost', 'root','','product');
 $sql= "select  * from customer";
$rs=$con->query($sql);
$con->close();
$data=$rs->fetch_all(1);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Document</title>
</head>

<body>
  
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    
    <!-- <a class="navbar-brand" href="#">Navbar</a> -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="login.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="create.php">create</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="logout.php">logout</a>
        </li> <li class="nav-item">
          <a class="nav-link" href="file.php">file</a>
        </li>
       
        <!-- <li class="nav-item">
          <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
        </li> -->
      </ul>
      <h2 class="text-light"><?=$_SESSION["username"];?> </h2>
    </div>
  </div>
</nav>
  

          
    </div>
    <div class="container border">
    <table class="table">
  <thead>
    <tr>
       <th scope="col">son</th>
      <th scope="col">name</th>
      <th scope="col">Username</th>
      <th scope="col">mobile</th>
      <th scope="col">email</th>
      <th scope="col">address</th>
    </tr>
  </thead>
  <?php
  $index=0;
  foreach($data as $info){ ?>
    
  
  <tbody>
    <tr>
      <td><?=++$index?></td>
      <td><?=$info['name'];?></td>
      <td><?=$info['username'];?></td>
      <td><?=$info['mobile'];?></td>
      <td><?=$info['email'];?></td>
      <td><?=$info['address'];?></td>
    </tr>
  </tbody><?php } ?></div>