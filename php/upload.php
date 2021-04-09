<?php
    require_once("dbconnect.php");

    // If the upload button is clicked
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

        //Explode filename from extension
        $fileExt = explode('.', $fileName);

        //Get lowercase values for extension
        $fileActualExt = strtolower(end($fileExt));

        //Specify the file types allowed
        $allowed = array('jpg', 'jpeg', 'png');

        if (in_array($fileActualExt, $allowed)) {
            if ($fileError === 0) {
                if ($fileSize < 7000000) {
                    $fileNameNew = uniqid('', true). ".".$fileActualExt;

                    // Location where files will be stored on the server
                    $fileDestination = '../uploads/'.$fileNameNew;

                    // If you are uploading to a database
                    //$query = "insert into images (image) values ('$fileNameNew')";
                    //$fileDestination = mysqli_query($conn, $query);

                    move_uploaded_file($fileTmpName, $fileDestination);

                    // Location we navigate to after processing
                    header("Location: ../gallery.php");
                } else {
                    echo "File is too large!";
                    }
            } else {
                echo "There was an error uploading";
                }
        }   else {
            echo "Wrong file type!";
            }
    }
    ?>