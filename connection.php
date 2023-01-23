<?php

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "proiect_pai";

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{

	die("failed to connect!");
}
