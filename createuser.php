<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create User</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" >
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script src="js/jshoverd.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-social/5.1.1/bootstrap-social.min.css.map">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

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
      button,input {
        font-family: 'Rubik', 'serif';
        font-weight: 700;
        letter-spacing: 1.4px;
      }
      .background {
        margin-left: 350px;
        width: 100%;
        display: flex;
      }
      .screen {
        position: relative;
        border-radius: 15px;
        box-shadow: 5px 10px 10px rgba(0, 1, 0,0.5);
      }
      .screen-header {
        align-items: center;
        padding: 10px 20px;
        background: #0096FF;
        border-top-left-radius: 15px;
        border-top-right-radius: 15px;
      }
      .screen-header-right {
        display: flex;
      }
      .screen-header-ellipsis {
        width: 5px;
        height: 5px;
        margin-left: 3px;
        border-radius: 8px;
        background-color: #0096FF;
      }
      .screen-body {
        display: flex;
      }
      .screen-body-item {
        flex: 1;
        padding: 50px;
      }
      .app-form-group {
        margin-bottom: 15px;
      }
      .app-form-group.button {
        margin-bottom: 0;
        text-align: right;
        position: absolute;
        bottom: 30px;
        right:40px;
      }
      .app-form-control{
        width: 100%;
        padding: 10px 0;
        background: none;
        border: none;
        border-bottom: 1px solid #4C4B4B;
        color: #4C4B4B;
        font-size: 14px;
        outline: none;
        transition: border-color .2s;
      }
      .app-form-control::placeholder {
        color: #666;
      }
      .app-form-control:focus {
        border-bottom-color: #4C4B4B;
      }
      .app-form-button {
        background: none;
        border: none;
        margin-left: 20px;
        color: #666;
        font-size: 14px;
        cursor: pointer;
        outline: none;
      }
      .app-form-button:hover {
        color: #0096FF;
      }
      @media screen and (max-width: 520px) {
      *{
          letter-spacing:1px;
        }
        .container{
          margin-left: 20px;
          margin-right: 20px;
          margin-bottom: 40px;
        }
        .screen-body {
          flex-direction: column;
        } 
        .screen-body-item.left {
          margin-bottom: 50px;
        }
        .app-form-button{
          margin-top:5px;
        }
      }

      @media screen and (max-width: 600px) {
      .screen-body {
        padding: 40px;
      }
      .screen-body-item {
        padding: 0;
      }
    }
  </style>
</head>

<body>
<?php
    include 'config.php';
    if(isset($_POST['submit'])){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $balance=$_POST['balance'];
    $sql="insert into users(name,email,balance) values('{$name}','{$email}','{$balance}')";
    $result=mysqli_query($dbConn,$sql);
    if($result){
               echo "<script> alert('Hurray! User created');
                               window.location='transfermoney.php';
                     </script>";
                    
    }
  }
?>

<?php
  include 'navbar.php';
?>

        <h2 class="text-center pt-4" style="color: #0096FF;" >CREATE A NEW USER</h2>
        <br>

  <div class="background">
    <div class="screen">
      <div class="screen-header">
        <div class="screen-header-right">
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
          <div class="screen-header-ellipsis"></div>
        </div>
      </div>
      <div class="screen-body">
        <div class="screen-body-item left">
          <img class="img-fluid" src="img/user3.jpg" style="border: none; border-radius: 50%;">
        </div>
        <div class="screen-body-item">
          <form class="app-form" method="post">
            <div class="app-form-group">
              <input class="app-form-control" placeholder="NAME" type="text" name="name" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="EMAIL" type="email" name="email" required>
            </div>
            <div class="app-form-group">
              <input class="app-form-control" placeholder="BALANCE" type="number" name="balance" required>
            </div>
            <br>
            <div class="app-form-group button">
              <input class="app-form-button" type="submit" value="CREATE" name="submit"></input>
              <input class="app-form-button" type="reset" value="RESET" name="reset"></input>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>