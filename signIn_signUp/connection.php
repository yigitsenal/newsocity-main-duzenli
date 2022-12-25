<?php

// DATABASE BAĞLANMA KISMI

$dbhost = "localhost";
$dbuser = "root";
$dbpass = "";
$dbname = "new_society"; // DATABASE ADI

if(!$con = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname))
{
	die("Bağlantı hatası!");
}
