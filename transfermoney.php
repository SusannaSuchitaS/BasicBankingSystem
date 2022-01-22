<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transfer Money</title>
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
    <link rel="stylesheet" type="text/css" href="css/navbar.css">

    <style type="text/css">
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
        *{
	        padding: 0;
	        margin: 0;
	        box-sizing: border-box;
	        font-family: sans-serif;
        }
        h2{
	        font-size: 40px;
        }
        table{
	        letter-spacing: 1.2px;
        }
        th,td{
	        text-align: center;
            font-family: 'Rubik', sans-serif;
        }
        button{
	        border:none;
	        background: #808000;
            transition: 1s;
        }
        @media only screen and (orientation: portrait){
	        *{
		        letter-spacing: 1px;
	        }
        }
    </style>
</head>

<body>

<?php
    include 'config.php';
    $sql = "SELECT * FROM users";
    $result = mysqli_query($dbConn,$sql);
?>

<?php
  include 'navbar.php';
?>

<div class="container">
        <h2 class="text-center pt-4" style="color: #0096FF">TRANSFER MONEY</h2>
        <br>
            <div class="row">
                <div class="col"style="background-color: white">
                    <div class="table-responsive-sm">
                    <table class="table table-hover table-sm table-striped table-bordered">
                        <thead>
                            <tr>
                            <th scope="col" class="text-center py-2">Id</th>
                            <th scope="col" class="text-center py-2">Name</th>
                            <th scope="col" class="text-center py-2">E-Mail</th>
                            <th scope="col" class="text-center py-2">Balance in Rupees (&#8377;)</th>
                            <th scope="col" class="text-center py-2">Operation</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php 
                            while($rows=mysqli_fetch_assoc($result)){
                        ?>
                        <tr>
                            <td class="py-2"><?php echo $rows['id'] ?></td>
                            <td class="py-2"><?php echo $rows['name']?></td>
                            <td class="py-2"><?php echo $rows['email']?></td>
                            <td class="py-2"><?php echo $rows['balance']?></td>
                            <td><a href="selecteduserdetail.php?id= <?php echo $rows['id'] ;?>"> 
                            <button type="submit" class="btn btn-primary"">Transact</button></a></td> 
                        </tr>
                    <?php
                    }
                ?>
                        </tbody>
                    </table>
                    </div>
                </div>
            </div> 
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
    </body>
</html>