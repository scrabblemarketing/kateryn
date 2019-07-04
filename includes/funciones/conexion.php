<?php
$conn = new mysqli('localhost','root','','katherin');

if(isset($conn->connect_error)){
    echo $error->$conn->connect_error;
}