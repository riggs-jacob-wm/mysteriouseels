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
    if(!$_POST['date']){
        $error .= '<p>Email is a required field!</p>';
    }
    if(!$_POST['timeslot']){
        $error .= '<p>Email is a required field!</p>';
    }
    $stmt = $dbh->prepare('INSERT INTO users (fname, lname, email, pword, phone, ccard, cvv, timeslot) VALUES (:fname, :lname, :email, :pword, :phone, :ccard, :cvv, :timeslot)');
    $result = $stmt->execute(
        array(
            'fname'=>$_POST['fname'],
            'lname'=>$_POST['lname'],
            'email'=>$_POST['email'],
            'pword'=>$_POST['pword'],
            'phone'=>$_POST['phone'],
            'ccard'=>$_POST['ccard'],
            'cvv'=>$_POST['cvv'],
            'timeslot'=>$_POST['timeslot']
        )
    );
}