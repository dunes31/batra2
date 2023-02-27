<?
session_start();
if(isset($_SESSION['username']) || isset($_SESSION['password'])){
  $navbar = "1";
  $logindisplay = "0";
  $username = $_SESSION['username'];
  $password = $_SESSION['password'];
} else {
  header('Location:404.php');
}
?>
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<a class="btn btn-primary" href="index.php">GO Back</a>
<div class="container border">
<form method="post" action="store.php">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">name</label>
    <input type="name" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="name" required>
   
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">books</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="username" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">mobile</label>
    <input type="number" class="form-control" id="exampleInputPassword1" name="mobile" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">address</label>
    <input type="text" class="form-control" id="exampleInputPassword1" name="address" required>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" class="form-control" id="exampleInputPassword1" name="email" required>
  </div>
  
 

  <button type="submit" class="btn btn-primary">Submit</button>
</form> 
 </div>
 