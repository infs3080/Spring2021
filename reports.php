<!-- Connection parameters to connect to MySql db -->
<?php
  include_once "php/dbconnect.php";
  $query = "select * from CONTACTS";
  $results = mysqli_query($conn, $query);
?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <!-- Local CSS-->
    <link rel="stylesheet" href="./css/report_style.css">
    

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
                <a href="">GALLERY</a>
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

        
    <section class="table-format">
        <table class="table">
            <thead class="thead-dark">
              <tr>
                <th scope="col">ID</th>
                <th scope="col">FIRST NAME</th>
                <th scope="col">LAST NAME</th>
                <th scope="col">EMAIL</th>
                <th scope="col">COMMENT</th>
              </tr>
            </thead>
         
        <!-- Retrieving data from the db -->
         <?php
            while ($row = mysqli_fetch_assoc($results))
            {
              $ID = $row['id'];
              $firstName = $row['firstname'];
              $lastName = $row['lastname'];
              $email = $row['email'];
              $comment = $row['comment'];
            
          ?>
              <tr>
                <td><?php echo $ID ?></td>
                <td><?php echo $firstName ?></td>
                <td><?php echo $lastName ?></td>
                <td><?php echo $email ?></td>
                <td><?php echo $comment ?></td>
              </tr>

          <?php
            }
          ?>
         
        </table>
    </section>



    <!--Footer-->
    <footer>
        <p>INFS-3800</p>
     </footer>


    <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous"></script>
    
  </body>
</html>