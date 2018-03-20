<!DOCTYPE html>
<?php
session_start();
$_SESSION['invalid']=0;   // 1-Invalid User , 0-Valid User

if(isset($_POST['l-submit']))
{
$_SESSION['flag'] = 0;   //  0-Not Logged In , 1-Logged In
include 'connection.php';
$l_userid = $_POST['l-user-id'];
$l_pass = $_POST['l-pass'];
$result = mysqli_query($conn,"Select * from register where user_name = '$l_userid'");
$values = mysqli_fetch_object($result);
if(!empty($values))     //Error at top line as $values is empty so $values->pass is invalid...
{   
if($values->pass == $l_pass)
{
    $_SESSION['srno'] = $values->id; 
    $_SESSION['name'] = $values->name;
    $_SESSION['username'] = $l_userid;
    $_SESSION['flag'] = 1;
    header("Location:homepage.php");
}
}
else
{
   $_SESSION['invalid']=1; 
    //window.alert("Invalid login...");
}
}    

if(isset($_POST['submit']))
{    
include 'connection.php';

$name = $_POST['name'];
$roll = $_POST['roll'];
$user_name = $_POST['user_name'];
$pass = $_POST['pass'];
$email = $_POST['email'];
$clg = $_POST['clg'];
$branch = $_POST['branch'];
$year = $_POST['year'];
$ph = $_POST['ph'];
$sql = "INSERT INTO register(name,roll,user_name,pass,email,clg,branch,year,ph) VALUES('$name','$roll','$user_name','$pass','$email','$clg','$branch','$year','$ph')";
$result = $conn->query($sql);

//    $_SESSION['srno'] = $values->id;  //
    $_SESSION['name'] = $name;          //
    $_SESSION['username'] = $user_name; //  for direct registraion welcome user
    $_SESSION['flag'] = 1;              //
    header("Location:homepage.php");    //

//if($result){
//  header("refresh:1;http://localhost/miniproject/main.php");}
}    
?>

<html lang="en">
<head>
  <title>Registration</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </head>
<body style="background-color: wheat;">
    
    <?php
    if(isset($_SESSION['flag']))
    {
     if($_SESSION['flag'] == 1)
    {
     ?> 
     
    <div class="navbar navbar-inverse" style="font-size:35px; background-color: maroon; color: chocolate; font-family: “Times New Roman”, Times, serif;">
       <p class="col-md-6 text-left"><?php echo "Hello ".$_SESSION['name']; ?></p>
       <p class="col-md-6 text-right"><?php echo "User-ID - ".$_SESSION['username']; ?></p>
    </div>
    <?php
    }
    }
    ?>
    
<div style="height:150px; background-color: wheat;">
  <div class="col-md-3">
    <img src="mainlogo.png" style="height:150px; width:225px;" class="img-rounded">
  
  </div>
  <div class="col-md-9">
      <br>
    <h1 style="font-size:60px; color: chocolate; font-family: “Times New Roman”, Times, serif;"><i><b>ONLY SECOND HAND!!!</b></i></h1>      
  </div>
</div>


    <nav class="navbar navbar-inverse" style="background-color: maroon;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav col-md-9">
<!--        <li><a href="webpage.php"><b style="font-size:25px; color: chocolate; font-family: “Times New Roman”, Times, serif;">ONLY SECOND HAND</b></a></li>-->
        <li><a href="homepage.php"><b style="font-size:20px; color: white; font-family: “Times New Roman”, Times, serif;"><span style="font-size: 20px; color: white;" class="glyphicon glyphicon-home"></span> HOME</b></a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="font-size:20px; color: white; font-family: “Times New Roman”, Times, serif;">BUY <span class="caret"></span></b></a>
          <ul class="dropdown-menu" style="background-color: wheat;">
              <li><a href="sembranch.php"><b style="font-size:20px; color: chocolate; font-family: “Times New Roman”, Times, serif;">BOOKS</b></a></li>
            <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: “Times New Roman”, Times, serif;">WORKSHOP MATERIALS</b></a></li>
            <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: “Times New Roman”, Times, serif;">DRAWING TOOLS</b></a></li>
            <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: “Times New Roman”, Times, serif;">OTHER</b></a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="font-size:20px; color: white; font-family: “Times New Roman”, Times, serif;">SELL <span class="caret"></span></b></a>
          <ul class="dropdown-menu" style="background-color: wheat;">
              <li><a href="sellbookform.phpphp"><b style="font-size:20px; color: chocolate; font-family: “Times New Roman”, Times, serif;">BOOKS</b></a></li>
            <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: “Times New Roman”, Times, serif;">WORKSHOP MATERIALS</b></a></li>
            <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: “Times New Roman”, Times, serif;">DRAWING TOOLS</b></a></li>
            <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: “Times New Roman”, Times, serif;">OTHER</b></a></li> 
          </ul>
        </li>

        <li><a href="#"><b style="font-size:20px; color: white; font-family: “Times New Roman”, Times, serif;">CONTACT US</b></a></li>
        <li><a href="#"><b style="font-size:20px; color: white; font-family: “Times New Roman”, Times, serif;">SEARCH <span class="glyphicon glyphicon-search"></span></b></a></li>
      </ul>

          <?php
         if(isset($_SESSION['flag']))
         {
        if($_SESSION['flag'] == 0)
        {
        ?>
        <ul class="nav navbar-nav navbar-right col-md-3">
        <li><a href="registration.php"><b style="font-size:20px; color: white; font-family: “Times New Roman”, Times, serif;"><span style="font-size: 20px; color: white;" class="glyphicon glyphicon-user"></span> REGISTER</b></a></li>
        
        
<div class="container">
    <li data-toggle="modal" data-target="#myModal" onMouseOver="this.style.cursor='pointer'"><span  style="font-size: 20px; color: white;" class="glyphicon glyphicon-log-in"></span><b style="font-size: 20px; color: white; font-family: “Times New Roman”, Times, serif;"> LOGIN</b></li>
 </ul>
        <?php
        }
        else
            {
        ?>
        
        <ul class="nav navbar-nav navbar-right col-md-3">
        <li><a href="logout.php"><b style="font-size:20px; color: white; font-family: “Times New Roman”, Times, serif;"><span style="font-size: 20px; color: white;" class="glyphicon glyphicon-log-out"></span> LOGOUT</b></a></li>
        </ul>
        
        <?php
             }
         }
 else
     {
        ?>
        <ul class="nav navbar-nav navbar-right col-md-3">
        <li><a href="registration.php"><b style="font-size:20px; color: white; font-family: “Times New Roman”, Times, serif;"><span style="font-size: 20px; color: white;" class="glyphicon glyphicon-user"></span> REGISTER</b></a></li>
        
        
<div class="container">
    <li data-toggle="modal" data-target="#myModal" onMouseOver="this.style.cursor='pointer'"><span  style="font-size: 20px; color: white;" class="glyphicon glyphicon-log-in"></span><b style="font-size: 20px; color: white; font-family: “Times New Roman”, Times, serif;"> LOGIN</b></li>
 </ul>
        <?php
     }
        ?>
        
    </div>
  </div>
</nav>
    
  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title" style="font-family: “Times New Roman”, Times, serif; color:chocolate;">Login Page</h4>
        </div>
        <div class="modal-body">
          
            <form class="form-horizontal" method="POST" action="">
    <div class="form-group">
      <label class="control-label col-sm-5" for="User-Id">User-Id:</label>
      <div class="col-sm-4">
          <input type="text" class="form-control" name="l-user-id" placeholder="Enter User-Id" required>
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-md-5" for="pass">Password:</label>
      <div class="col-md-4">
         <input type="password" class="form-control" name="l-pass" placeholder="Enter Password" required>
      </div>
    </div><br>
    <div class="form-group">
        <div class="col-md-5">    </div>
      <div class="col-sm-3">
                <input type="submit" class="form-control" name="l-submit" value="Submit"></input>
      </div>
    </div>
</form>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
      
    </div>
  </div>
  
</div>

<div class="col-md-4"></div>
<div class="col-md-8" style="font-family: “Times New Roman”, Times, serif; font-size:40px; color:chocolate;"><u>REGISTRATION FORM:</u><br><br></div>
<br><br><br>

<div class="container" style="font-family: “Times New Roman”, Times, serif; font-size: 20px; color: chocolate;">
  <form class="form-horizontal" method="POST" action="">
    <div class="form-group">
      <label class="control-label col-sm-5" for="name">Name:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="name" placeholder="Enter Name" required>
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-5" for="roll">Roll No:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="roll" placeholder="Enter Roll No" required>
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-5" for="user">User-Name:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="user_name" placeholder="Enter User-Name" required>
      </div>
    </div>
	
    <div class="form-group">
      <label class="control-label col-sm-5" for="pass">Password:</label>
      <div class="col-sm-3">
          <input type="password" class="form-control" name="pass" placeholder="Enter Password" required>
      </div>
    </div>
	
    <!--  <div class="form-group">
      <label class="control-label col-sm-5" for="pass1">Confirm Password:</label>
      <div class="col-sm-3">
        <input type="password" class="form-control" name="c-pass" placeholder="Confirm Password" required>
      </div>
    </div>
    -->	
	<div class="form-group">
      <label class="control-label col-sm-5" for="email">Email:</label>
      <div class="col-sm-3">
          <input type="email" class="form-control" name="email" placeholder="Enter Email" required>
      </div>
    </div>
	
   
    <div class="form-group">
      <label class="control-label col-sm-5" for="clg">College Name:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="clg" placeholder="Enter College Name" required>
      </div>
    </div>

      <div class="form-group">
      <label class="control-label col-sm-5" for="user">Branch:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="branch" placeholder="Enter Branch" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="user">Year:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="year" placeholder="Enter Year" required>
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-5" for="no">Phone No:</label>
      <div class="col-sm-3">
          <input type="number" class="form-control" name="ph" placeholder="Enter Phone No" max="9999999999" min="1000000000" required>
      </div>
    </div>
	
    <div class="form-group">        
        <div class="col-md-4"></div>
      <div class="col-sm-offset-2 col-md-3" style="color: chocolate">
          <input type="submit" class="btn btn-default" name="submit" value="submit"></input>
      </div>
    </div>
  </form>
</div>
<br>


<footer class="container text-center" style="background-color: maroon;">
    <div class="text-left" style="color: orangered;">
   <h3> &copy;VINIT KALE </h3>
  </div>
  <div class="text-center" style="color: orangered;">
	<h3> &copy;AMOL JAYBHAYE </h3>
  </div>
  <div class="text-right" style="color: orangered;">
    <h3> &copy;PAWAN LOKAPUR </h3>
  </div>
</footer>
    <?php
     if($_SESSION['invalid'] == 1)
     {
    ?>
    
    <script>
    window.alert("INVALID User-Id OR Password");
    </script>
    
    <?php
     }
    ?>
    

</body>
</html>
