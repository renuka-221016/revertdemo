<?php
$HOSTNAME="localhost";
$USERNAME='root';
$PASSWORD='';
$DATABASE='userdata';
$con=mysqli_connect($HOSTNAME,$USERNAME,$PASSWORD,$DATABASE);
if(!$con)
    {
        die("connection failed");
    }