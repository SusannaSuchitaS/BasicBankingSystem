<!-- navbar --> 
<nav class="navbar navbar-dark navbar-expand-sm fixed"> 
  <div class="container">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#Navbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand mr-auto mb-0 h1" href="index.php" style="font-size:40px"> Step Up Bank &nbsp; &nbsp;</a> <!--Prominently display the logo of a company-->
    <div class="collapse navbar-collapse" id="Navbar"> <!--collapse is bootstraps js components-->
    <ul class="navbar-nav mr-auto"> <!--mr-auto specifies the right margin, content is moved as left as possible-->
      <li class="nav-item active"><a class="nav-link" href="index.php"><span class="fa fa-home fa-lg"></span> Home</a></li>
    </ul>
    </div>
    <div class = "dropdown">
    <ul class="nav navbar-nav navbar-right">
    <li class="nav-item active">
      <a class="nav-link" href="createuser.php"><span class="fa fa-user fa-lg"></span>   Create User</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="transfermoney.php"><span class="fa fa-money fa-lg"></span>    Transfer Money</a>
    </li>
    <li class="nav-item active">
      <a class="nav-link" href="transactionhistory.php"><span class="fa fa-book fa-lg"></span>      Transaction History</a>
    </li>
    </ul>
    </div>
  </div>
</nav>
