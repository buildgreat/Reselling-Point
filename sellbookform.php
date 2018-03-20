<?php
session_start();

if(isset($_SESSION['flag']))
{
if($_SESSION['flag']==1)
{
    if(isset($_POST['s-submit']))
    {
include 'connection.php';
$name = $_SESSION['name'];
$bookname = $_POST['bookname'];
$pub_name = $_POST['pname'];
$year_of_pub = $_POST['yearop'];
$semofbook = $_POST['semofbook'];
$catofbook = $_POST['catofbook'];
$bcond = $_POST['bc'];
$cost = $_POST['cost'];
// $cname = $_POST['cname'];
$no1 = $_POST['no1'];
$no2 = $_POST['no2'];
$branch = $_SESSION['branch'];
$sem = $_SESSION['sem'];


$sql1 = "INSERT INTO bsell(name,bookname,pub_name,year_of_pub,semofbook,catofbook,bcond,cost,no1,no2)  //,branch,sem 
        VALUES ('$name','$bookname','$pub_name','$year_of_pub','$semofbook','$catofbook','$bcond','$cost','$no1','$no2')";  //,'$branch','$sem';

//$result = $conn->query($sql1);
$result = mysqli_query($conn,$sql1);
header("Location:homepage.php");

    }
?>
<html lang="en">
<head>
  <title>Only Second Hand</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
    /* Remove the navbar's default margin-bottom and rounded borders */ 
    .navbar {
      margin-bottom: 0;
      border-radius: 0;
    }
    	
  </style>
</head>
<body style="background-color: window;">
    
    
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
    <h1 style="font-size:60px; color: chocolate; font-family: "Times New Roman", Times, serif;"><i><b>ONLY SECOND HAND!!!</b></i></h1>      
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
        <li><a href="homepage.php"><b style="font-size:20px; color: white; font-family: "Times New Roman", Times, serif;"><span style="font-size: 20px; color: white;" class="glyphicon glyphicon-home"></span> HOME</b></a></li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="font-size:20px; color: white; font-family: "Times New Roman", Times, serif;">BUY <span class="caret"></span></b></a>
          <ul class="dropdown-menu" style="background-color: wheat;" >
              <li><a href="sembranch.php"><b style="font-size:20px; color: chocolate; font-family: "Times New Roman", Times, serif;">BOOKS</b></a></li>
            <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: "Times New Roman", Times, serif;">WORKSHOP MATERIALS</b></a></li>
            <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: "Times New Roman", Times, serif;">DRAWING TOOLS</b></a></li>
            <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: "Times New Roman", Times, serif;">OTHER</b></a></li> 
          </ul>
        </li>
        <li class="dropdown">
          <a class="dropdown-toggle" data-toggle="dropdown" href="#"><b style="font-size:20px; color: white; font-family: "Times New Roman", Times, serif;">SELL <span class="caret"></span></b></a>
          <ul class="dropdown-menu" style="background-color: wheat;">
          <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: "Times New Roman", Times, serif;">BOOKS</b></a></li>
          <li><a href="sellbookform.php"><b style="font-size:20px; color: chocolate; font-family: "Times New Roman", Times, serif;">WORKSHOP MATERIALS</b></a></li>
            <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: "Times New Roman", Times, serif;">DRAWING TOOLS</b></a></li>
            <li><a href="#"><b style="font-size:20px; color: chocolate; font-family: "Times New Roman", Times, serif;">OTHER</b></a></li> 
          </ul>
        </li>

        <li><a href="#"><b style="font-size:20px; color: white; font-family: "Times New Roman", Times, serif;">CONTACT US</b></a></li>
        <li><a href="#"><b style="font-size:20px; color: white; font-family: "Times New Roman", Times, serif;">SEARCH <span class="glyphicon glyphicon-search"></span></b></a></li>
      </ul>

        <?php
        if($_SESSION['flag'] == 0)
        {
        ?>
        <ul class="nav navbar-nav navbar-right col-md-3">
        <li><a href="registration.php"><b style="font-size:20px; color: white; font-family: "Times New Roman", Times, serif;"><span style="font-size: 20px; color: white;" class="glyphicon glyphicon-user"></span> REGISTER</b></a></li>
        
        
<div class="container">
    <li data-toggle="modal" data-target="#myModal" onMouseOver="this.style.cursor='pointer'"><span  style="font-size: 20px; color: white;" class="glyphicon glyphicon-log-in"></span><b style="font-size: 20px; color: white; font-family: "Times New Roman", Times, serif;"> LOGIN</b></li>
 </ul>
        <?php
        }
        else {
        ?>
        
        <ul class="nav navbar-nav navbar-right col-md-3">
        <li><a href="logout.php"><b style="font-size:20px; color: white; font-family: "Times New Roman", Times, serif;"><span style="font-size: 20px; color: white;" class="glyphicon glyphicon-log-out"></span> LOGOUT</b></a></li>
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
          <h4 class="modal-title" style="font-family: "Times New Roman", Times, serif; color:chocolate;">Login Page</h4>
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
  

  
  
  
<div class="col-md-4"></div>
<div class="col-md-8" style="font-family: “Times New Roman”, Times, serif; font-size:40px; color:chocolate;"><u> REQUIRED INFORMATION:</u><br><br></div>
<br><br><br>

<div class="container" style="font-family: “Times New Roman”, Times, serif; font-size: 20px; color: chocolate;">
  <form class="form-horizontal" method="POST" action="">
    
      <div class="form-group">
      <label class="control-label col-sm-5" for="bookname">Book name:</label>
      <div class="col-sm-3">
          <select class="form-control" name="bookname">
          <option disabled>Semister - I</option>
        <option>AM-I</option>
        <option>EM</option>
        <option>BEEE</option>
        <option>AP-I</option>
        <option>AC-1</option>        
        <option>EVS</option>       
        <option disabled>Semister - II</option>        
        <option>AM-II</option>        
        <option>ED</option>        
        <option>SPA</option>
        <option>AP-II</option>
        <option>AC-II</option>        
        <option>CS</option>
        <option disabled>Semister - III</option>
        <option>AM-III</option>
        <option>DS</option>
        <option>OOPM</option>
        <option>ECCF</option>
        <option>DLDA</option>
        <option>xyz</option>
        <option disabled>Semister - IV</option>
        <option>AM-IV</option>
        <option>CG</option>
        <option>DBMS</option>
        <option>BEEE</option>
        <option>BEEE</option>
        <option>BEEE</option>
        <option disabled>Semister - V</option>
        <option>AOA</option>
        <option>MP</option>
        <option>SOOAD</option>
        <option>CN</option>
      </select>
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-5" for="pname">Publication name:</label>
      <div class="col-sm-3">
      <select class="form-control" name="pname">
        <option>Techmax</option>
        <option>Technical</option>
        <option>Jamnadas</option>
        <option>Nirali</option>
      </select>
      </div>
    </div>
      
    <div class="form-group">
      <label class="control-label col-sm-5" for="yearop">Year of publication:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="yearop" placeholder="2016-2017" required>
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-5" for="semofbook">Semister of book:</label>
      <div class="col-sm-3">
      <select class="form-control" name="semofbook">
        <option>1</option>
        <option>2</option>
        <option>3</option>
        <option>4</option>
        <option>5</option>
        <option>6</option>
      </select>
      </div>
    </div>
      
      <div class="form-group">
      <label class="control-label col-sm-5" for="catofbook">Category of book:</label>
      <div class="col-sm-3">
      <select class="form-control" name="catofbook">
        <option>computer dept.</option>
        <option>Electronics dept.</option>
        <option>IT dept.</option>
        <option>EXTC dept.</option>
        <option>Instrumentation dept.</option>
      </select>
      </div>
    </div>
      
      <div class="form-group">
          <label class="control-label col-sm-5" for="bc">Book Condition:</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="bc" placeholder="eg:good" required>
      </div>
    </div>

      
    <div class="form-group">
      <label class="control-label col-sm-5" for="cost">Cost:</label>
      <div class="col-sm-3">
          <input type="number" class="form-control" name="cost" placeholder="Enter cost" required="cost is mandatory">
      </div>
    </div>
	
   <!-- <div class="form-group">
      <label class="control-label col-sm-2" for="pass">Your College Name</label>
      <div class="col-sm-3">
          <input type="text" class="form-control" name="cname" placeholder="Enter your college" required="enter your college name">
      </div>
    </div>
	-->
    	
    <div class="form-group">
      <label class="control-label col-sm-5" for="no1">Phone No:</label>
      <div class="col-sm-3">
          <input type="number" class="form-control" name="no1" placeholder="Enter Phone No" required="Enter atleast one no" max="9999999999" min="1000000000" required="Enter 10 digit Number">
      </div>
    </div>

    <div class="form-group">
      <label class="control-label col-sm-5" for="no2">Alternate No:</label>
      <div class="col-sm-3">
          <input type="number" class="form-control" name="no2" placeholder="Enter alternate no" max="9999999999" min="1000000000">
      </div>
    </div>
	
    <div class="form-group">        
        <div class="col-md-4"></div>
      <div class="col-sm-offset-2 col-md-3" style="color: chocolate">
          <input type="submit" class="btn btn-default" name="s-submit" value="submit"></input>
      </div>
    </div>
  </form>
</div>
<br>
  





<footer  style="height: 100px; background-color: wheat; font-size:35px; background-color: maroon; color: chocolate; font-family: "Times New Roman", Times, serif;">
    <div class="col-md-1">
        
    </div>
  <div class="text-left col-md-3">
   <h3> &copy;VINIT KALE </h3>
  </div>
  <div class="text-left col-md-4">
	<h3> &copy;AMOL JAYBHAYE </h3>
  </div>
  <div class="text-left col-md-4">
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
    


<?php
}
 else {
    
?>
<script>
window.alert("Please login to continue further!...");

</script>


<?php
header("refresh:1;http://localhost/miniproject/homepage.php");
}
}
 else {
?>
<script>
window.alert("Please login to continue further!...");
</script>

<?php
header("refresh:1;http://localhost/miniproject/homepage.php");
     
}
 ?>

</body>
</html>

