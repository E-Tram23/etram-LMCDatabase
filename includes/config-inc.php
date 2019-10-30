<?php

$servername = "localhost";     //Change to online for website
$dBUsername = "root";         //Change to online for website
$dBPassword = "";
$dBName = "lmc_database";

$conn = mysqli_connect($servername,$dBUsername,$dBPassword,$dBName);

if(!$conn)
{
  die("Connection has failed" .mysqli_connect_error());
}
