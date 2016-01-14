<?php
require_once('connection.php');
$error = false;
$success = false;
if(@$_POST['formSubmit']){
    if(!$_POST['fname']){
        $error .= '<p>First name is a required field!</p>';
    }
    if(!$_POST['lname']){
        $error .= '<p>Last name is a required field!</p>';
    }
    if(!$_POST['email']){
        $error .= '<p>Email is a required field!</p>';
    }
    if(!$_POST['pword']){
        $error .= '<p>Password is a required field!</p>';
    }
    if(!$_POST['ccard']){
        $error .= '<p>Credit Card Number is a required field!</p>';
    }
    if(!$_POST['cvv']){
        $error .= '<p>CVV is a required field!</p>';
    }
    if(!$_POST['reservedate']){
        $error .= '<p>Reserve Date is a required field!</p>';
    }
    if(!$_POST['timeslot']){
        $error .= '<p>Time slot is a required field!</p>';
    }

    $stmt = $dbh->prepare('INSERT INTO users (fname, lname, email, pword, phone, ccard, cvv, reservedate, timeslot, boattype)
VALUES (:fname, :lname, :email, :pword, :phone, :ccard, :cvv, :reservedate, :timeslot, :boattype)');
    $result = $stmt->execute(
        array(
            'fname'=>$_POST['fname'],
            'lname'=>$_POST['lname'],
            'email'=>$_POST['email'],
            'pword'=>$_POST['pword'],
            'phone'=>$_POST['phone'],
            'ccard'=>$_POST['ccard'],
            'cvv'=>$_POST['cvv'],
            'reservedate'=>$_POST['reservedate'],
            'timeslot'=>$_POST['timeslot'],
            'boattype'=>$_POST['boattype']
        )
    );

};
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
    <?php
    if($result){
        $success = "The reservation for " . $_POST['fname'] . " " . $_POST['lname'] . " was successfully created.";
        echo $success;
    }else{
        $success = "There was an error saving " . $_POST['email'];
        echo $error;
    }
    ?><br>
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

