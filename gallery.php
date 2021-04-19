<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Fancybox Links -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.css" />
    <script src="https://cdn.jsdelivr.net/gh/fancyapps/fancybox@3.5.7/dist/jquery.fancybox.min.js"></script>

    <!-- Link to styling for menus and Showcase -->
    <link rel="stylesheet" href="css/homestyles.css">
    <link rel="stylesheet" href="css/gallery_style.css">

    <title>GALLERY</title>
</head>
<body>


<!-- Navigation buttons-->
<nav class="main-nav">
    <ul>
        <li><a href="index.html">HOME</a></li>
        <li><a href="gallery.php">Picture Gallery</a></li>
        <li><a href="contact.php">Contact</a></li>
        <li><a href="reports.php">Reports</a></li>
    </ul>
</nav>

<!-- Top section with image-->
<section >
    <header class="showcase">
        <h1>Web Dev is Awesome...</h1>
    </header>
</section>

<!-- Upload form design -->
<form action="php/upload.php" method="POST" enctype="multipart/form-data">

    <input type="file" name="img_upload">
    <button type="UPLOAD" name="upload">UPLOAD</button>

</form>

<!-- Displaying images from our uploads folder -->
<section class = "img_gallery">
    <div class = "gallery_detail">
        <?php
        $dir = glob('uploads/*.*');
        foreach ($dir as $value){

            ?>
            <div class = "thumbnails">
                <a data-fancybox="gallery" href="<?php echo $value ; ?>"><img src="<?php echo $value ; ?>" alt="<?php echo $value ; ?>"></a>
            </div>
            <?php



        }


        /*
        $files = glob("uploads/*.*");
        for ($i=0; $i<count($files); $i++)
        {
            $num = $files[$i];
            echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
            } */
        ?>
    </div>
</section>
</body>
</html>