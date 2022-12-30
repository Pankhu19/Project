<?php
$dbuser = 'root';
$dbpass = '';
$dbserver = '127.0.0.1:3307';
$dbname = 'login';


$conn = mysqli_connect($dbserver,$dbuser,$dbpass,$dbname);
  /*  if(!conn) checking the connection, for some reason my server isnt accepting this 
    {
        echo "Connection Was Failed";
    }*/