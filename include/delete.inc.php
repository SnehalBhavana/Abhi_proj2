<?php

include "include/dbh.inc.php"; // Using database connection file here

$id = $_GET['id']; // get id through query string

$del = mysqli_query($conn,"DELETE FROM sellcar WHERE id=$id"); // delete query

if($conn)
{
    mysqli_close($conn); // Close connection
    header("location:sell.php"); // redirects to all records page
    exit;	
}
else
{
    echo "Error deleting record"; // display error message if not delete
}
?>