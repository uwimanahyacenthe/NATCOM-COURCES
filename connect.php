<?php
$connection =mysqli_connect('localhost','root','','crud');
if(!$connection){
    die('connection failed'.mysqli_connect_error());
}