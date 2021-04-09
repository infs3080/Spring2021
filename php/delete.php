<?php

    // Database Connection
    require_once("dbconnect.php");

    // If the button "Del" is pressed do the following
    if (isset($_GET['Del']))
    {
        $id = $_GET['Del'];
        mysqli_query($conn, "delete from CONTACTS where id=$id");
    }

    // After the page is processed where to go.
    header("Location: ../reports.php");
?>