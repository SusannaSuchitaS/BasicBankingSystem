<!doctype html>
<html lang="en"> 
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/jshoverd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css.map">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <title>Basic Banking System</title>

    <style>
      @import url('https://fonts.googleapis.com/css2?family=Rubik:wght@500&display=swap');
      .navbar-dark{
        background-color: #A7C7E7;
      }
      .navbar{
        height: 60px;
      }
      .navbar-brand{
	      color: black;
	      letter-spacing: 0.5px;
        font-family: 'Rubik', sans-serif;
      }
      .nav-link{
	      margin-right: 10px;
	      transition: 0.5s;
        letter-spacing: 0.5px;
	      font-size: 20px;
	      font-family: 'Rubik', sans-serif; 
      }
      h1{
	      color:rgb(43, 161, 216);
	      font-weight: bold;
	      transition: 0.5s;
	      font-family: 'Rubik','Times';
      }
      h4
      {
        font-family: 'Rubik','Times';
      }
      footer{
	      color:#586776;
	      background-color:#A7C7E7;
	      letter-spacing: 0.5px;
      }
      footer p{
	      margin: 0;
	      font-size: 15px;
      }
    </style>
  </head>

  <body>
  <?php
  include 'navbar.php';
  ?>
  
      <div class="container-fluid"  >
      <!-- Introduction section -->
      </br>
            <div class="row intro py-1">
              <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                  <br><br><br>
                  <h1>Welcome to the STEP UP BANK</h1>
                  <h4>Your Bank Service in One Stop</h4>
                </div>
              </div>
              <div class="col-sm-12 col-md img text-center">
                <img src="img/image2.jpg" class="img-fluid pt-2" width="600" height="1000">
              </div>
            </div>

      <!-- Activity section -->
            <div class="row activity text-center">
                  <div class="col-md act">
                    <img src="img/task1.jpg" class="img-fluid" width="200" height="200">
                    <br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <a href="createuser.php"><button type="button" class="btn btn-primary btn-lg">Create User</button></a>
                  </div>
                  <div class="col-md act">
                  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <img src="img/task2.png" class="img-fluid" width="230" height="100">
                    <br>
                    <a href="transfermoney.php"><button type="button" class="btn btn-primary btn-lg">Make Transaction</button></a>
                  </div>
                  <div class="col-md act">
                    <img src="img/task3.jpg" class="img-fluid" width="200" height="100">
                    <br>
                    <a href="transactionhistory.php"><button type="button" class="btn btn-primary btn-lg">Transaction History</button></a>
                  </div>
            </div>
      </div>
      <footer class="text-center mt-5 py-2">
        <p>&copy 2022 <br>Made by <b>Susanna Suchita S</b> <br> The Sparks Foundation</p>
      </footer>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
  </body>
</html>