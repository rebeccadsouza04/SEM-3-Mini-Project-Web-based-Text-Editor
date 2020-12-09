<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {font-family: Arial, Helvetica, sans-serif;
      background-image : url("cs.png")}
* {box-sizing: border-box;}

h4{
margin-right : 10px;
color: rgba(0,255,255,0.2);
}

a:link {
  color: grey;
  background-color: transparent;
  text-decoration: none;
}
a:visited {
  color: pink;
  background-color: transparent;
  text-decoration: none;
}
a:hover {
  color: red;
  background-color: transparent;
  text-decoration: underline;
}
a:active {
  color: yellow;
  background-color: transparent;
  text-decoration: underline;
}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: rgb(60,60,60);
  padding: 20px;
}

.containerr {
  border-radius: 5px;
  background-color: rgb(180,180,180);
  padding: 20px;
}

.containerrr {
  border-radius: 5px;
  background-color: rgb(120,120,120);
  padding: 20px;
}
</style>
</head>
<body>

<div style="background-color: rgba(255, 182, 193, 1);color:white;padding:2px;">
<h1>
<b>  Contact Form </b></h1>
</div>

<p id = "test"></p>
<h4>
     <a href="tel:+919082125272"><button type = "button"  onclick= "document.getElementById('test').innerHTML=''" >Click here to reach us on an urgent basis!!<!--Call me at +919082125272 --> </button></a> <br>
     <!--<a href="figueiroshaun11@gmail.com">Send email</a> -->
</h4>


<!--<div class="container"> -->
  <form action="Auth.php" method="POST">
     <div class="container">
    <label for="fname">First Name</label>
    <input type="text" id="fname" name="firstname" placeholder="Your name..">
	</div>

     <div class="containerr">
    <label for="lname">Last Name</label>
    <input type="text" id="lname" name="lastname" placeholder="Your last name..">
    </div>

	<div class="containerrr">
    <label for="country">Country</label>
    <select id="country" name="country">
      <option value="india">India</option>
      <option value="australia">Australia</option>
      <option value="usa">USA</option>
    </select>
    </div>

    <label for="subject">Subject</label>
    <textarea id="subject" name="sub" placeholder="Write something.." style="height:200px"></textarea>

    <input type="submit" value="Submit"><input type="reset" value="Clear">
  </form>

