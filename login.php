<?php
session_start();

//$handle =fopen('login.php');

include('connection.php');
$a=null;
$count=null;
if(isset($_POST["submit"])){
  $username = $_POST['username'];
  $password = $_POST['password'];
 $sql = "select * from admin where username = '$username'and password='$password'";
  $rs= $con->query($sql);
  $row= mysqli_fetch_array($rs,MYSQLI_ASSOC);
  $count =mysqli_num_rows($rs);
  $_SESSION["username"]=$username;
  try{
  if($count == 1){
    header("Location:index.php");
    echo "<h1><center>login successful</h1></center>";
  }

throw new Exception("<h3><center>Pls Enter your velid username and password</center></h3>");
  }catch(Exception $e){
    $a=$e->getMessage();

  }   

} 
?>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<div class="container border mt-5" >
  <div class="alert alert-primary">
<h1 class="text-center" >Login</h1>
<?php if(!$count==1){
  echo $a;
}
?>
</div>

<form method="post">
  <div class="mb-3">
    
    <label for="exampleInputEmail1" class="form-label">username</label>
    <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="username">
</div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1" name="password">
  </div>
  
  <button  name="submit"type="submit" class="btn btn-primary">Submit </button >
</form>
</div>