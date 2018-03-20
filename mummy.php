<!--<%@ page language="java" contentType="text/html; charset=ISO-8859-1"
    pageEncoding="ISO-8859-1"%>-->
<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<!--<meta http-equiv="Content-Type" content="text/html; charset=ISO-8859-1">-->
<title>Registration Form For Mummy's Guide</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/lib/w3.css">

</head>
<body>
<div class="w3-container">
    <h2>W3.CSS Modal</h2>
  <button onclick="document.getElementById('id01').style.display='block'" class="w3-button">Open Modal</button>

  <div id="id01" class="w3-modal">
    <div class="w3-modal-content">
      <div class="w3-container">
        <span onclick="document.getElementById('id01').style.display='none'" class="w3-closebtn">&times;</span>
        <div class="w3-container w3-red">
        <h2>Login</h2>
        </div>
        <form class="w3-container">
  <p>
  <label>UserName</label>
  <input class="w3-input" type="text"></p>
  <p>
  <label>Password</label>
  <input class="w3-input" type="text"></p>
  <p>
  <input class="w3-btn w3-blue" type="submit" name="submit" value="Submit"></p>
  
</form>
      </div>
    </div>
  </div>
</div>
<center>

<form action="Authenticate" method="post">
       Userid:<input type="text" name="uid" value="">
       <br>
       Password:  <input type="password" name="password" value="">
       <br>
        <input type="submit" value="submit">
 
 </form>
 </center>
</body>
</html>