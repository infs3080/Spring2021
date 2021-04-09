<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GALLERY</title>
</head>
<body>
  
    <form action="php/upload.php" method="POST" enctype="multipart/form-data">

        <input type="file" name="img_upload">
        <button type="UPLOAD" name="upload">UPLOAD</button>
    
    </form>

    <?php
        $files = glob("uploads/*.*");
        for ($i=0; $i<count($files); $i++)
        {
            $num = $files[$i];
            echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
            }
    ?>

</body>
</html>