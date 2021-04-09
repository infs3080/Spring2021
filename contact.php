<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
    <link rel="stylesheet" href="./css/contact_style.css">
    <link rel="stylesheet" href="./css/homestyles.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <title>Class Site</title>
</head>
<body>

  <div class="wrapper">
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

    <!-- Info Section -->
    <section class="info">
        <img src="https://images.pexels.com/photos/3727464/pexels-photo-3727464.jpeg?auto=compress&cs=tinysrgb&dpr=2&h=750&w=1260" alt="">
        <div>
          <h2>CONTACT INFORMATION</h2>
          <p>Please enter your contact information and the reason you are reaching out to us and we will get back with you.</p>
        </div>
    </section>

    <!-- Form area -->
    <section>
        
          <form action="php/insert.php" method="post" class="container offset-md-3">
              <div class="row">
                <div class="col-md-3" >
                  <label for="inputFname"></label>
                    <label>
                        <input type="text" class="form-control" name="firstName" placeholder="First Name">
                    </label>
                </div>
                <div class="col-md-3">
                  <label for="inputLname"></label>
                    <label>
                        <input type="text" class="form-control" name="lastName" placeholder="Last Name">
                    </label>
                </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                    <label for="inputEmail"></label>
                      <label>
                          <input type="email" class="form-control" name="email" placeholder="Email Address">
                      </label>
                  </div>
              </div>

              <div class="row">
                  <div class="col-md-6">
                  <label for="inputComment"></label>
                      <label>
                          <textarea class="form-control" name="comment" placeholder="Comments"></textarea>
                      </label>
                  </div>
              </div>
              
              <div>
                <br>
                <button type="submit" name="submit" class="btn btn-secondary offset-sm-2">SUBMIT</button>
              </div>
          </form>
        
    </section>

    
    <!--Footer-->
    <footer>
       <p>INFS-3800</p>
    </footer>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

</body>
</html>
