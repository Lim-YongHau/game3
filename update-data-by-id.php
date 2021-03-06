<?php session_start(); ?>
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">

    <title>Hello, How to Update Data by ID  into Database in php mySQL!</title>
  </head>
  <body>
    
    <div class="container">

       <div class="row justify-content-center">
           <div class="col-md-8">

           
           <?php
           if(isset($_SESSION['status']))
           {
             echo "<h4>".$_SESSION['status']."</h4>";
             unset($_SESSION['status']);
           }
           ?>

          
              <div class="card mt-5">
                 <div class="card-herder">
                    <h4>How to Update Data by ID  into Database in php mySQL</h4>
                 </div>
                 <div class="card-body">
                 
                 <form action="updateCode.php" method="POST">

                 <div class="form-group mb-3">
                 <label for="">Name</label>
                 <input type="text" name="name" class="form-control"/>
                 </div>

                 <div class="form-group mb-3">
                 <label for="">Email</label>
                 <input type="text" name="email" class="form-control"/>
                 </div>

                 <div class="form-group mb-3">
                 <label for="">Phone</label>
                 <input type="text" name="phone" class="form-control"/>
                 </div>

                 
                 <div class="form-group mb-3">
                 <button type="submit" name="update_stud_data" class="btn btn-primary">Update Data</button>
                 </div>

                 </form>
                 </div>
              </div>
          </div>
     </div>
    </div>


   
    <script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>


  </body>
</html>