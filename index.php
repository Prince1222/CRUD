<?php
include 'connect.php'; //Database Connection

if($_SERVER['REQUEST_METHOD'] == 'POST'){
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['Address'];
    $age =$_POST['age'];
    $Gender =$_POST['GENDER'];
    $hiking =$_POST['Hiking'];
   

    //Insert part
    $sql = "INSERT INTO myguests(firstName,lastName,email,contact,Address,age,GENDER,Hiking) 
            VALUES ('$firstName','$lastName','$email','$contact','$address','$age','$Gender','$hiking')";
    if ($conn->query ($sql) === TRUE){
        echo "Information added sucessfully";
    }else{
        echo "Error:" .$sql ."<br>". $conn -> error;
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Crude Operation</title>
</head>
<body>

    
    <form method="POST">
    <h2>Add New User</h2>
    FirstName: <input type="text" name="firstName" placeholder="Enter your name" required><br><br>
    Last Name: <input type="text" name="lastName" placeholder="Enter your surname" required><br><br>
    Email: <input type="email" name="email"  placeholder="abc@gmail.com" required><br><br>
    Contact: <input type="number" name="contact" placeholder="Contact Number"required><br><br>
    Address: <input type="text" name="Address" placeholder="City Name" required><br><br>
    Age: <input type="text" name="age" placeholder="Age" required><br><br>
    Gender: 
  <input type="radio" name="GENDER" value="Male"> Male
  <input type="radio" name="GENDER" value="Female"> Female
  <input type="radio" name="GENDER" value="Others"> Others 
  <br><br>

  Hiking:  
  <input type="radio" name="Hiking" value="Going"> Going
  <input type="radio" name="Hiking" value="Not Going"> Not Going 
  <br><br>        
    
    <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>


