<?php
include 'config.php';
date_default_timezone_set('Asia/Kolkata');    

if(isset($_POST['submit']))
{
    $from = $_GET['id'];
    $to = $_POST['to'];
    $amount = $_POST['amount'];

    $sql = "SELECT * from users where id=$from";
    $query = mysqli_query($dbConn,$sql);
    $sql1 = mysqli_fetch_array($query); // returns array or output of user from which the amount is to be transferred.

    $sql = "SELECT * from users where id=$to";
    $query = mysqli_query($dbConn,$sql);
    $sql2 = mysqli_fetch_array($query);



    // constraint to check input of negative value by user
    if (($amount)<0)
   {
        echo '<script type="text/javascript">';
        echo ' alert("Oops! Negative values cannot be transferred")';  // showing an alert box.
        echo '</script>';
    }


  
    // constraint to check insufficient balance.
    else if($amount > $sql1['balance']) 
    {
        
        echo '<script type="text/javascript">';
        echo ' alert("Bad Luck! Insufficient Balance")';  // showing an alert box.
        echo '</script>';
    }
    


    // constraint to check zero values
    else if($amount == 0){

         echo "<script type='text/javascript'>";
         echo "alert('Oops! Zero value cannot be transferred')";
         echo "</script>";
     }


    else {
        
                // deducting amount from sender's account
                $newbalance = $sql1['balance'] - $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$from";
                mysqli_query($dbConn,$sql);
             

                // adding amount to reciever's account
                $newbalance = $sql2['balance'] + $amount;
                $sql = "UPDATE users set balance=$newbalance where id=$to";
                mysqli_query($dbConn,$sql);
                
                $sender = $sql1['name'];
                $receiver = $sql2['name'];
                $sql = "INSERT INTO transaction(`sender`, `receiver`, `amount`,`date_and_time`) VALUES ('$sender','$receiver','$amount',CURDATE())";
                $query=mysqli_query($dbConn,$sql);

                if($query){
                     echo "<script> alert('Transaction Successful');
                                     window.location='transactionhistory.php';
                           </script>";
                    
                }

                $newbalance= 0;
                $amount =0;
        }
    
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Transaction</title>
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
        button{
	        border:none;
            transition: 1s;
        }
        @media only screen and (orientation: portrait){
	        *{
		        letter-spacing: 1px;
	        }
        }
		button{
			border:none;
			background: ##92a8d1;
		}
	    button:hover{
			background-color:##92a8d1;
			transform: scale(1.1);
			color:white;
		}
    </style>
</head>

<body>
 
<?php
  include 'navbar.php';
?>

	<div class="container">
        <h2 class="text-center pt-4" style="color:#0096FF">Transaction</h2>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM  users where id=$sid";
                $result=mysqli_query($dbConn,$sql);
                if(!$result)
                {
                    echo "Error : ".$sql."<br>".mysqli_error($dbConn);
                }
                $rows=mysqli_fetch_assoc($result);
            ?>
            <form method="post" name="tcredit" class="tabletext" ><br>
        <div>
            <table class="table table-striped table-condensed table-bordered">
                <tr>
                    <th class="text-center">Id</th>
                    <th class="text-center">Name</th>
                    <th class="text-center">Email</th>
                    <th class="text-center">Balance</th>
                </tr>
                <tr>
                    <td class="py-2"><?php echo $rows['id'] ?></td>
                    <td class="py-2"><?php echo $rows['name'] ?></td>
                    <td class="py-2"><?php echo $rows['email'] ?></td>
                    <td class="py-2"><?php echo $rows['balance'] ?></td>
                </tr>
            </table>
        </div>
        <br><br><br>
        <label>Transfer To:</label>
        <select name="to" class="form-control" required>
            <option value="" disabled selected>Choose</option>
            <?php
                include 'config.php';
                $sid=$_GET['id'];
                $sql = "SELECT * FROM users where id!=$sid";
                $result=mysqli_query($dbConn,$sql);
                if(!$result)
                {
                    echo "Error ".$sql."<br>".mysqli_error($dbConn);
                }
                while($rows = mysqli_fetch_assoc($result)) {
            ?>
                <option class="table" value="<?php echo $rows['id'];?>" >
                
                    <?php echo $rows['name'] ;?> (Balance: 
                    <?php echo $rows['balance'] ;?> ) 
               
                </option>
            <?php 
                } 
            ?>
            <div>
        </select>
        <br>
        <br>
        <label>Amount in Rupees (&#8377;):</label>
        <input type="number" class="form-control" name="amount" required>   
        <br><br>
            <div class="text-center" >
                <button class="btn btn-primary btn-lg block" name="submit" type="submit" id="myBtn">Transfer</button>
            </div>
        </form>
    </div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" ></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" ></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" ></script>
</body>
</html>