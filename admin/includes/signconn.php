<?php

mysqli_connect("localhost","root","transport");

if(mysqli_connect_error())
{
    echo "cannot connect to database";
}
?>