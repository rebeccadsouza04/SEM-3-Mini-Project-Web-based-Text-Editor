<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title>CSLR - Admin</title>
<link rel="stylesheet" href="style.css"> 
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="shortcut icon" href="android-chrome-512x512.png" />

 <script src= 
"https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"> 
    </script> 
<style>
body, html {
  height: 60%;
}

* {
  box-sizing: border-box;
}

body{
  /* The image used */

background-image: url("candyy.png");

  /* Full height */
  height: 100%;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}



body {font-family: Arial, Helvetica, sans-serif;}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  box-sizing: border-box;
}

/* Set a style for all buttons */
button {
  background-color: green;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
}

button:hover {
  opacity: 0.8;
}

/* Extra styles for the cancel button */
.cancelbtn {
  width: auto;
  padding: 10px 18px;
  background-color: #f44336;
}

/* Center the image and position the close button */
.imgcontainer {
  text-align: center;
  margin: 24px 0 12px 0;
  position: relative;
  box-sizing: border-box;
}

img.avatar {
  width: 10%;
  border-radius: 50%;
}

.container {
  padding: 16px;
  text-color: black;
}

span.psw {
  float: right;
  padding-top: 16px;
}

/* The Modal (background) */
.modal {
  display: none; /* Hidden by default */
  position: fixed; /* Stay in place */
  z-index: 1; /* Sit on top */
  left: 0;
  top: 0;
  width: 100%; /* Full width */
  height: 100%; /* Full height */
  overflow: auto; /* Enable scroll if needed */
  background-color: rgb(0,0,0); /* Fallback color */
  background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
  padding-top: 60px;
}

/* Modal Content/Box */
.modal-content {
  background-color: #fefefe;
  margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
  border: 1px solid #888;
  width: 80%; /* Could be more or less, depending on screen size */
}

/* The Close Button (x) */
.close {
  position: absolute;
  right: 25px;
  top: 0;
  color: #000;
  font-size: 35px;
  font-weight: bold;
}

.close:hover,
.close:focus {
  color: red;
  cursor: pointer;
}

/* Add Zoom Animation */
.animate {
  -webkit-animation: animatezoom 0.6s;
  animation: animatezoom 0.6s
}

@-webkit-keyframes animatezoom {
  from {-webkit-transform: scale(0)} 
  to {-webkit-transform: scale(1)}
}
  
@keyframes animatezoom {
  from {transform: scale(0)} 
  to {transform: scale(1)}
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
  span.psw {
     display: block;
     float: none;
  }
  .cancelbtn {
     width: 100%;
  }
}
a:link {
    text-decoration: none;
    color: grey;
}
.mode { 
            float:right; 
        } 
        .change { 
            cursor: pointer; 
            border: 1px solid #555; 
            border-radius: 40%; 
            width: 20px; 
            text-align: center; 
            padding: 5px; 
            margin-left: 8px; 
        } 
        .dark{ 
            background-color: #222; 
            color: #e6e6e6; 
        } 
        .footer{
background-color:#003366;
margin:0;
padding:0;
width:90vw;
height:22.5vh;
float:right;
overflow:auto;
display: block;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
  position: relative;
}
</style>
</head>
<body>
    
<form action="Authentication.php" method="POST">
    <div class="imgcontainer">
      
      <img src="data:image/jpeg;base64,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" alt="Avatar" class="avatar">
    </div>

    <div class="container">
      <label for="uname"><b>Username</b></label>
      <input type="text" placeholder="Enter Username" name="username" required>

      <label for="psw"><b>Password</b></label>
      <input type="password" placeholder="Enter Password" name="password" required>
        
      <button type="submit">Login</button>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn">Cancel</button>
      <span class="psw">Forgot <a href="#">password?</a></span>
      <p> </p>
    </div>
</div>
</form>
<div class = "a">
<p style="text-align:center">
<a href="#facebook"><i class="fa fa-facebook"></i></a>
<a href="#instagram"><i class="fa fa-instagram"></i></a>
<a href="#linkedin"><i class="fa fa-linkedin"></i></a>
<a href="#twitter"><i class="fa fa-twitter"></i></a><br>
 <i class="fa fa-copyright"></i> 2020 Copyright: Text Editor</p>
 <p style ="text-align: center">
 <a class="active" href="Index.html">Home </a>
 &nbsp;
 &nbsp;
  &nbsp;
   &nbsp;
  <a href="Editor.html">Editor </a><br>
  <a href="#news">Features </i></a>
  &nbsp;
 &nbsp;
  &nbsp;
   &nbsp;
  <a href="#contact">Contact </a><br>
  <a href="#about">About </a>
  &nbsp;
 &nbsp;
  &nbsp;
   &nbsp;
  <a href="#help">Help  </a></p>
</div>

 
 
  <div class="mode"> 
        Dark mode:              
        <span class="change">OFF</span> 
    </div> 
    <footer>
   <p> <img src = "android-chrome-512x512.png"  style="width:200px;height:100px;">
</footer>

<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}

 $( ".change" ).on("click", function() { 
            if( $( "body" ).hasClass( "dark" )) { 
                $( "body" ).removeClass( "dark" ); 
                $( ".change" ).text( "OFF" ); 
            } else { 
                $( "body" ).addClass( "dark" ); 
                $( ".change" ).text( "ON" ); 
            } 
        }); 
</script>

</body>
</html>
