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
        body {
            font-family: "Poetsen One", sans-serif;
            margin: 0;
            padding: 0;
            background-color: aliceblue;
        }

        .navbar {
            display: flex;
            align-items: center;
            justify-content: space-around;
            background-color: #d80f9f;
            color: #ffffff;
            border-radius: 20px;
            padding: 10px;
            margin-left: 20px;
            margin-top: 10px;
            margin-right: 20px;
        }

        .navbar_start {
            font-family: "Anton", sans-serif;
            font-size: 26px;
            text-decoration: navajowhite;
            color: #ffffff;
            margin-left: 20px;
        }

        navbar_start:hover {
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

        .navbar_item :hover {
            background-color: rgb(110, 142, 142);
            transform: scale(1.5);


        }

        .mainpage {
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
            margin: 50px;
            padding: 80px;
        }

        .about {
            background-color: #ffffff;
            padding: 20px;
            max-width: 600px;
            margin: 20px;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .about p {
            font-size: 16px;
            color: #333333;
            line-height: 1.6;
        }

        .image img {

            height: 300px;
            max-width: 200%;
            border-radius: 10px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .footer {
            background-color: #011627;
            color: #ffffff;
            text-align: center;
            padding: 16px;
        }
    </style>
</head>

<body>
    <!-- universal html -->
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

    <!-- private html -->
    <div class="mainpage">
        <div class="about">
            <h2>About Us</h2>
            <p>Welcome to Matrimony Hub, where your perfect wedding begins. We are a premier marriage management company dedicated to turning your wedding dreams into reality. Our mission is to provide seamless, personalized, and unforgettable wedding planning experiences for couples who want their special day to be nothing short of magical.</p>
        </div>
        <div class="image">
            <img src="https://www.pgsoftwares.com/wp-content/uploads/2022/03/Second-Marriage-Website-for-All-Coimbatore-Tamilnadu-India.webp" alt="" srcset="">
        </div>
    </div>
    <div class="footer">
        <p>&copy; 2024 Matrimony Hub. All rights reserved.</p>
    </div>
</body>

</html>