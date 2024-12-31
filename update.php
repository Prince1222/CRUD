<?php
include 'connect.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $sql = "Select * from myguests WHERE id = $id";
    $result = $conn->query($sql);
    $row = $result->fetch_assoc();


}
if($_SERVER['REQUEST_METHOD']=='POST'){

    $id = $_POST['id'];
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $address = $_POST['Address'];
    $age = $_POST['age'];
    $Gender = $_POST['GENDER'];
    $Hiking = $_POST['Hiking'];

    $sql = "UPDATE myguests SET firstName = '$firstName',lastName='$lastName',email='$email',contact='$contact',Address='$address',age='$age',GENDER='$Gender',Hiking='$Hiking' WHERE id=$id ";
    if($conn->query($sql)===TRUE){
        echo"Record updated successfully";
        header("Location:read.php");
    }else{
        echo "Error: ".$sql. "<br>". $conn->error;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
  <title>Update Table</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
 
<form method="POST">
 
<h2> Update Table of the Hiking</h2>
   <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
   FirstName:<input type="text" name="firstName" placeholder="Prince" value="<?php echo $row['firstName']; ?>" required><br><br>
   LastName:<input type="text" name="lastName" value="<?php echo $row['lastName']; ?>" required><br><br>
   Email:<input type="email" name="email" value="<?php echo $row['email']; ?>" required><br><br>
   Contact:<input type="number" name="contact" value="<?php echo $row['contact']; ?>" required><br><br>
   Address:<input type="text" name="Address" value="<?php echo $row['Address']; ?>" required><br><br>
   Age:<input type="text" name="age" value="<?php echo $row['age']; ?>" required><br><br>
   Gender: 
  <input type="radio" name="GENDER" value="Male" <?php echo ($row['GENDER']=="Male")? "checked" : ""; ?> required> Male
  <input type="radio" name="GENDER" value="Female"<?php echo ($row['GENDER']=="Female")? "checked":""; ?> required> Female
  <input type="radio" name="GENDER" value="Others"<?php echo ($row['GENDER']=="Others")? "checked":""; ?> required> Others 
  <br><br>

  Hiking:  
  <input type="radio" name="Hiking" value="Going"<?php echo ($row['Hiking']=="Going")? "checked":""; ?> required> Going
  <input type="radio" name="Hiking" value="Not Going"<?php echo ($row['Hiking']=="Not Going")? "checked":""; ?> required> Not Going 
  <br><br>        
    
  <button type="submit">Update</button>


</form>
</body>
</html>
