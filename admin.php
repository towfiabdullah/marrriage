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
         /* universal css */
*{
   margin:0px;
   padding:0px;
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
.body{
 background-color: #f9f9f9;}

 .anton-regular {
  font-family: "Anton", sans-serif;
  font-weight:400;
  
}
.container{
  width:100%;
}

/* univeral css*/
/* private css */
.summary { display: flex; gap:50px; margin-left:400px; margin-bottom: 20px; }
        .summary-item { background-color: #4CAF50; color: white; padding: 20px; border-radius: 5px; text-align: center; }
        .summary-item h3 { margin: 0; font-size: 2em; }
             
        .admin-pannel
        {
             margin-left:600px;
             margin-top: 50px;
             margin-bottom:50px;

        }
    
   </style>
      
</head>
<body>

<div class="container">
 <!-- private html -->
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
  <h2 class="admin-pannel">Admin Panel</h2>

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

   // Fetch blood requests summary
$totalRequestsSql = "SELECT COUNT(*) AS total FROM info";
$totalPendingSql = "SELECT COUNT(*) AS broom FROM info WHERE gender='male'";
$totalApprovedSql = "SELECT COUNT(*) AS bride FROM info WHERE gender='female'";

$totalRequestsResult = $conn->query($totalRequestsSql);
$totalPendingResult = $conn->query($totalPendingSql);
$totalApprovedResult = $conn->query($totalApprovedSql);

$totalRequests = $totalRequestsResult->fetch_assoc()['total'];
$totalPending = $totalPendingResult->fetch_assoc()['broom'];
$totalApproved = $totalApprovedResult->fetch_assoc()['bride'];
?>

<div class="summary">
    <div class="summary-item">
        <h3><?php echo $totalRequests; ?></h3>
        <p>Total Candidate</p>
    </div>
    <div class="summary-item">
        <h3><?php echo $totalPending; ?></h3>
        <p>Male Candidate</p>
    </div>
    <div class="summary-item">
        <h3><?php echo $totalApproved; ?></h3>
        <p>Female candidate</p>
    </div>
</div>   
</body>
</html>