<?php


include 'connect.php';

$sql = "SELECT * FROM myguests";

$result = $conn->query($sql);

if($result->num_rows > 0){
    
echo "<table border='1'>
     <tr>
       <th>ID</th>
       <th>firstName</th>
       <th>lastName</th>
       <th>email</th>
       <th>contact</th>
       <th>Address</th>
       <th>Age</th>
       <th>Gender</th>
       <th>Hiking</th>
       <th>Action</th>
    </tr>";
 while($row = $result->fetch_assoc()){
    
    echo"<tr>
    <td>".$row['id']."</td>
    <td>".$row['firstName']."</td>
    <td>".$row['lastName']."</td>
    <td>".$row['email']."</td>
    <td>".$row['contact']."</td>
    <td>".$row['Address']."</td>
    <td>".$row['age']."</td>
    <td>".$row['GENDER']."</td>
    <td>".$row['Hiking']."</td>
    <td>
        <a href ='update.php?id=". $row['id']. "'>Edit</a> |
        <a href ='delete.php?id=". $row['id']. "'>Delete</a> |
        <a href ='index.php?id=". $row['id']. "'>Add</a>         

    </td>
    <tr>";
 }
 echo "</table>";

}else{
    echo "No record found";
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read</title>
   <!-- <link rel="stylesheet" href="styles.css"> -->
   <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
            background-color: #f4f4f9;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
            background: #fff;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            padding: 12px 15px;
            text-align: left;
            border: 1px solid #ddd;
        }

        th {
            background-color: #007bff;
            color: #fff;
        }

        tr:nth-child(even) {
            background-color: #f9f9f9;
        }

        a {
            color: #007bff;
            text-decoration: none;
        }

        a:hover {
            text-decoration: underline;
        }
    </style>

</head>
<body>
    
</body>
</html>