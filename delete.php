<?php
include 'connect.php';

if(isset($_GET['id'])){
    $id= $_GET['id'];
    $sql = "DELETE FROM myguests WHERE id= $id";
    if($conn->query($sql)===TRUE){
        echo "Record deleted sucessfully";
        header("Location:read.php");
    }
    else{
        echo "Error:".$sql."<br>" .$conn->error;
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    
</body>
</html>