<?php
$con= new mysqli('localhost', 'root','','product');
 $sql="insert into customer(name, username,mobile,email,address)values('$_POST[name]','$_POST[username]','$_POST[mobile]'
 ,'$_POST[email]','$_POST[address]')";
if($con->query($sql)){
    header("Location:index.php");
}else{
    echo "qurrey faild";
}
$con->close();
?>