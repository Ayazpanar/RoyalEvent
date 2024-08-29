<?php

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"royalevents");

if($con != "")
{
    //echo "Connected";
}
else
die("Error in connection");


?>