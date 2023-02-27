
<?php

if(isset($_POST["make"])){
    $a=$_POST['a'];
    if(file_exists($a)){
        echo "$a file already exists";
    }else{
        touch("$a");
       echo "$a succesfully created";
    }
}
if(isset($_POST["delete"])){
    $a=$_POST['a'];
    if(!file_exists($a)){
        echo "$a file not exists";
    }else{
        unlink("$a");
        echo "$a succesfully delete";
    }
    
}
if(isset($_POST["open"]) || isset($_POST["update"])){
    $a=$_POST['a'];
    $file =fopen($a,"r");
    if(!file_exists($a)){
        echo "$a file not exists";
    }else{
       $file = fopen($a,"r");
       echo fread($file,23);
    }
    if(isset($_POST["update"])){
        $a=$_POST['a'];
        $b=$_POST['b'];
      $file =fopen($a,"w");
      if(isset($file)){
        echo fwrite($file,"$b");
      }
        }
}


"<br>";
?>

<form method="post">
    Task:<input type="text" name="a">
    <?php "<br>"?>
     Update:<input type="text" name="b">
    <button name="make">make</button>
    <button name="delete">delete</button>
    <button name="open">open</button>
    <button name="update">Update</button>
    