
<html>
   <body>
      
      <form   method = "POST" enctype = "multipart/form-data">
         <input type = "file" name = "file" />
         <input type = "submit"/>
			
</body>
<?php
if($_FILES!=4){
    $valid=['jog','gif','php','html',];
   @$type=strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
    @$to=$_FILES['file']['name'];
     @$from=$_FILES['file']['tmp_name'];
     if(move_uploaded_file($from,$to)){
         echo "uploaded successfully";
 }
}

if(isset($_POST["submit"])) {
  $check = filesize($_FILES["fileToUpload"]["tmp_name"]);
  if($check !== false) {
    echo "File is an file - " . $check["mime"] . ".";
    $uploadOk = 1;
  } else {
    echo "File is not an file.";
    $uploadOk = 0;
  }
}