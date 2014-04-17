<?php
session_start();
//echo "EEERis";
$unVar = array();
$unVar["uno"] = 10;
$unVar["due"] = "ketto";
$encoded_data = json_encode($unVar);
header("HTTP/1.1 200 OK");
header("Content-Type: application/json");
echo $encoded_data;
echo "____________";

			
