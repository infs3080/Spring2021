<?php
    require_once("dbconnect.php");

    if (isset($_POST['upload'])) {
        $file = $_FILES['img_upload'];

        // Print the information coming from uploaded file
        // print_r($file);

        // Variables to gather the information we need about the file.
        $fileName = $_FILES['img_upload']['name'];
        $fileTmpName = $_FILES['img_upload']['tmp_name'];
        $fileSize = $_FILES['img_upload']['size'];
        $fileError = $_FILES['img_upload']['error'];
        $fileType = $_FILES['img_upload']['type'];

        // Explode the filename from extension
        $fileExt = explode('.', $fileName);

        //Get the lower case version of the file extension
        $fileActualExt = strtolower(end($fileExt));

        //What specific file types do you want to allow
        $allowed = array('jpg', 'jpeg', 'png');


        // Does the file have the appropriate extension for upload
        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 7000000) {
                    $fileNameNew = uniqid('', true). ".".$fileActualExt;
                    // If uploading to local directory
                    $fileDestination = 'uploads/' .$fileNameNew;

                    // If uploading to a database
                    // $query = "insert into images (image) values ('$fileNameNew');";
                    // $fileDestination = mysqli_query($conn, $query);
                    
                    move_uploaded_file($fileTmpName, $fileDestination);
                    
                    header("Location: ../gallery.php?uploadsucess");
                } else {
                    echo "File is too large!";
                }
            } else {
                echo "There was an error uploading file!";
            }
        } else {
            echo "Wrong file type!";
        }
    }