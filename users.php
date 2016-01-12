<?php
require_once('connection.php');
$error = false;
$success = false;
if(@$_POST['formSubmit']){
    if(!$_POST['firstname']){
        $error .= '<p>Email is a required field!</p>';
    }
    if(!$_POST['lastname']){
        $error .= '<p>Email is a required field!</p>';
    }
    if(!$_POST['email']){
        $error .= '<p>Email is a required field!</p>';
    }
    if(!$_POST['email']){
        $error .= '<p>Email is a required field!</p>';
    }
    if(!$_POST['email']){
        $error .= '<p>Email is a required field!</p>';
    }
}