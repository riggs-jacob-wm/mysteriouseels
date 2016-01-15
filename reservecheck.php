<?php
?>
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
    <p>The Mysterious Eels</p>
</div>
<!--Navigation bar-->
<div id="nav" class="nav">
    <ul class="nav">
        <li><a href="firstpage.html">Home</a></li>
        <li><a href="reservations.html">Reservations</a></li>
        <li><a href="contact.html">Contact</a></li>
        <li><a href="about.html">About</a></li>
    </ul>
</div>
<div id="body">
    <button id="myButton" class="homeButton">Back to Home page</button>
    <script type="text/javascript">
        document.getElementById("myButton").onclick = function() {
            location.href = "firstpage.html";
        };
    </script>
</div>
<!--Takes the user back to the home page-->
<div id="footer">
</div>
</body>
</html>
