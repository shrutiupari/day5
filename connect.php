<?php
$connection = mysqli_connect('localhost', 'root', 'Aissel@123');
if (!$connection){
    die("Database Connection Failed" . mysqli_error($connection));
}
$select_db = mysqli_select_db($connection, 'registration');
if (!$select_db){
    die("Database Selection Failed" . mysqli_error($connection));
}