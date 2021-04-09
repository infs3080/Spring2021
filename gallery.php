<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Local CSS-->
    <link rel="stylesheet" href="css/reports_style.css">


    <title>Reports</title>
  </head>
  <body>
    <section>
        <div class="container">
            <div class="row">
              <div class="col mt-4 navitem">
               <a href="index.html">HOME</a>
              </div>
              <div class="col ml-4 mt-4 navitem">
                <a href="gallery.php">GALLERY</a>
              </div>
              <div class="col ml-4 mt-4 navitem">
                <a href="contact.php">CONTACT</a>
              </div>
              <div class="col ml-4 mt-4 navitem">
                <a href="reports.php">REPORTS</a>
              </div>
            </div>
          </div>
    </section>

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


    <!-- Display images on page -->
    <?php
        $files = glob("uploads/*.*");
        for ($i=0; $i<count($files); $i++)
    {
        $num = $files[$i];
        echo '<img src="'.$num.'" alt="random image">'."&nbsp;&nbsp;";
    }

    ?>

    <!-- Footer -->
    <footer>
        <p>INFS-3800</p>
     </footer>

  </body>
</html>