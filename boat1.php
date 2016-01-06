<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>The Mysterious Eels</title>
    <link type="text/css" rel="stylesheet" href="boats.css" />
</head>
<body>
<div class="overlay"></div>
<!--Type of boat-->
<div id="header">
    <p>Center Console Boats</p>
</div>
<!--Navigation bar-->
<div id="nav" class="nav">
    <ul class="nav">
        <li><a href="boat1.php" class="active">Center Consoles</a></li>
        <li><a href="boat2.php">Deck Boats</a></li>
        <li><a href="boat3.php">Cuddy Cabins</a></li>
        <li><a href="boat4.php">High Performance</a></li>
        <li><a href="boat5.php">Jet Boats</a></li>
        <li><a href="boat6.php">Pontoon Boats</a></li>
    </ul>
</div>
<div id="body">
    <!--Boat information-->
    <img src="http://www.cobiaboats.com/wp-content/uploads/2011/12/Cobia-217-Center-Console.jpg">
    <h2>About This Boat</h2>
    <p>This boat is good for freshwater fishing, saltwater fishing, and day cruising. There is
        No set max for how many people can fit, so throw on as many as you can. The boats are 18-48 ft
        and have an outboard engine.</p>
    <h3>Rental Prices:</h3>
    <h4>Half Day: $320</h4>
    <h4>Full Day: $375</h4>
</div>
<!--Reservation information-->
<div id="form">
    <form>
        First name
        <input type="text" name="firstname"><br>
        Last name
        <input type="text" name="lastname"><br>
        E-mail
        <input type="text" name="email"><br>
        Password
        <input type="password" name="pword"><br>
        Phone Number (Optional)
        <input type="text" name="phone"><br>
        Card Number
        <input type="text" name="card"><br>
        CVV Number
        <input type="text" name="cvv"><br>
        <input type="submit" value="Submit">
    </form>
</div>
<!--Takes the user back to the home page-->
<div id="footer">
    <button id="myButton" class="homeButton">Back to Home page</button>
    <script type="text/javascript">
        document.getElementById("myButton").onclick = function () {
            location.href = "firstpage.html";
        };
    </script>
</div>
</body>
</html>
<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$servername;dbname=mysteriouseels", $username, $password);
    // set the PDO error mode to exception
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch(PDOException $e)
{
    echo "Connection failed: " . $e->getMessage();
}
?>