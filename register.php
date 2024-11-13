<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Anton&family=Poetsen+One&display=swap" rel="stylesheet">

    <style>
        .anton-regular {
  font-family: "Anton", sans-serif;
  font-weight:400;
  font-style: normal;
        }
        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #d80f9f;
            color: #ffffff;
            border-radius:20px;
            padding: 10px;
            margin-left:20px;
            margin-top:10px;
            margin-right:20px;
        }
        .navbar_start {
            font-family: "Anton", sans-serif;
            font-size: 26px;
            text-decoration: navajowhite;
            color: #ffffff;
            margin-left:20px;
        }
        navbar_start:hover{
            color: rgb(67, 12, 12);
            
        }
        .navbar_menu {
            list-style: none;
            margin: 10;
            padding: 0;
            display: flex;
        }
        .navbar_item {
            margin-left: 20px;
        }
        .navbar_item a {
            text-decoration: none;
            color: #ffffff;
        }
        .navbar_item :hover{
            background-color: rgb(110, 142, 142);
            transform: scale(1.5);  
        }

        .from-seciton{
 background-color: #ffffff;
    padding: 20px;
    max-width: 500px;
    height: 300px;
    margin: 20px;
    margin-left: 400px;
    border-radius: 10px;
    box-shadow: 0 4px 4px rgba(0, 0, 0, 0.1);
    
}
   input,select{
     width:100%;
     height:20px;
   }
  label {
   display: block;
   margin-bottom:5px;
   margin-top:5px;
  }
  #btn{
         margin-top:10px;
         padding:10px 20px;
         background-color:red;
         color:white;
         border:none;
  }
  #btn:hover { 
   background-color: #45a049;
   }


        </style>
</head>
<body>
<div class="container">
        <div class="navbar">
            <a href="#" class="navbar_start">Matrimony Hub</a>
            <ul class="navbar_menu">
                <li class="navbar_item"><a href="test.php">Home</a></li>
                <li class="navbar_item"><a href="register.php">Register</a></li>
                <li class="navbar_item"><a href="search.php">Search</a></li>
                <li class="navbar_item"><a href="admin.php">Admin</a></li>
            </ul>
        </div>
    </div>

        <div class="from-seciton">
    <h2 align="center" style="color:black;" >Register as a groom or bride : </h2>
    <form action="" method="POST">
    <label for="gender">Select Gender :</label>

<select name="gender" id="gender">
 <option value="male">Male</option>
 <option value="female">Female</option>
 <option value="others">Others</option>
 
</select>
    <label for="name">Name: </label>
    <input type="text" id="name" name="name" required>
    <label for="age">Age </label>
    <input type="text" id="age" name="age" required>
    <label for="blood_group">Blood_group : </label>

    <select name="blood_group" id="blood_group">
     <option value="A+">A+</option>
     <option value="B+">B+</option>
     <option value="A-">A-</option>
     <option value="O+">O+</option>
     <option value="AB+">AB+</option>
     <option value="AB-">AB-</option>

    </select>
    <label for="height">Height : </label>
    <input type="text" name="height" id="height " required>
    <label for="weight">Weight : </label>
    <input type="text" name="weight" id="weight " required>
    <label for="skin_color">Skin Color : </label>
    <input type="text" name="skin_color" id="skin_color " required>
    <label for="marital_status">Marital Status :</label>

<select name="marital_status" id="marital_status">
 <option value="single">Single</option>
 <option value="married">Married</option>
 <option value="in_a_relationship">In a relationship</option>
 <option value="devorced">Devorced</option>
 <option value="widowed">Widowed</option>
 
</select>
    <label for="region">Region : </label>
    <input type="text" name="region" id="region" required>
    <label for="contact">Contact : </label>
    <input type="text" name="contact" id="contact ">
    <button id="btn">submit</button>

    </form>

   </div>
<!-- phpconnect -->
<?php
 $servername = "localhost";
 $username = "root";
 $password = "";
 $dbname = "matrimony_hub";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $gender = $_POST['gender'];
    $blood_group = $_POST['blood_group'];
    $height = $_POST['height'];
    $weight=$_POST['weight'];
    $skin_color = $_POST['skin_color'];
    $marital_status = $_POST['marital_status'];
    $region= $_POST['region'];
    $contact = $_POST['contact'];


    $sql = "INSERT INTO info (name,age,gender,blood_group,height, weight ,skin_color,marital_status,region, contact) VALUES ('$name', '$age', '$gender', '$blood_group','$height','$weight','$skin_color','$marital_status','$region','$contact')";
    
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

</div>
</body>
</html>