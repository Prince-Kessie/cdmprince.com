<?php

$con=new mysqli('localhost','root','','organization-db');

if(!$con){
    die(mysqli_errno($con));
}

