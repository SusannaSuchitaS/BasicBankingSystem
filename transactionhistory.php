<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction History</title>
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
	        font-family: 'Rubik','serif';
        }
        h2{
	        font-size: 40px;
        }
        table{
	        letter-spacing: 1.2px;
	        font-family: 'Rubik','serif';
        }
        td{
	        text-align: center;
	        font-family: 'Rubik','serif';
        }
        th{
	        font-family: 'Rubik','serif';
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
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color:#0096FF;">TRANSACTION HISTORY</h2>
        <br>
        <div class="table-responsive-sm">
        <table class="table table-hover table-striped table-condensed table-bordered">
        <thead>
            <tr>
                <th class="text-center">Sender</th>
                <th class="text-center">Receiver</th>
                <th class="text-center">Amount in Rupees (&#8377;)</th>
                <th class="text-center">Date</th>
            </tr>
        </thead>
        <tbody>
        <?php
            include 'config.php';

            $sql ="select * from transaction";
            $result =mysqli_query($dbConn, $sql);

            while($rows = mysqli_fetch_assoc($result))
            {
        ?>
            <tr>
            <td class="py-2"><?php echo $rows['sender']; ?></td>
            <td class="py-2"><?php echo $rows['receiver']; ?></td>
            <td class="py-2"><?php echo $rows['amount']; ?> </td>
            <td class="py-2"><?php echo $rows['date_and_time']; ?> </td>
            </tr>                
        <?php
            }
        ?>
        </tbody>
    </table>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>