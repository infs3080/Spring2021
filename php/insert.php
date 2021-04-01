<?php

    require_once("dbconnect.php");

    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email = $_POST['email'];
    $comment = $_POST['comment'];

    $query = "insert into CONTACTS (firstName, lastName, email, comment) values ('$firstName', '$lastName', '$email', '$comment');";
    
    mysqli_query($conn, $query);

    header("Location: ../index.html?signup=success");
    
?>