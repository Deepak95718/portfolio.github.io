<?php

require("connection.php");
if(isset($_POST['submit'])){ 
    $sql = "INSERT INTO my_pf (Name ,Email ,Message) VALUES (?,?,?)";
     $result = $conn->prepare($sql);
     if($result){
     $result -> bind_param('sss' , $Name , $Email , $Message);
    $Name  = $_POST['Name'];
    $Email = $_POST['Email'];
    $Message  = $_POST['Message'];

    $result -> execute();
      header("location:index.php?success");

 
    $result -> close();  
    }
    else{
        echo "not inserted";
    }
}
    $conn -> close(); 
?> 
