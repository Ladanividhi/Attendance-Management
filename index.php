<html>
<head>
<style>
body{
	background-color:  #e6e6e6;
}
.font{
	font-size: 17px;
}
.img{
	/* border-radius: 5%; */
    border: 2px solid #555;
    box-shadow: 6px 6px 2px 1px #cccccc;
}
span{
	color: red;
}
input[type=text], input[type=password]{
	padding: 10px 18px;
	margin: 8px 0;
}
input[type=submit]{
	width: 7%;
	background-color: #04AA6D;
	color: white;
	padding: 5px 7px;
	margin: 5px 0;
	cursor: pointer;
}
</style>

</head>
<body>
<center>
<form action="config.php" method="POST">
	<img class="img" src="https://d2lk14jtvqry1q.cloudfront.net/media/large_1130_164d345a84_6b57c47b83.png" width="700px" height="300px">
  <div class="font">
  <h3><span>*</span>Your Role:</h3>
  <input type="radio" id="s" name="role" value="staff" required>
  <label for="staff">Staff</label>
  <input type="radio" id="c" name="role" value="student">
  <label for="student">Student</label><br>
	 
  <label for="fname"><h2><span>*</span>Username:</h2></label>
  <input type="text" id="fname" name="fname" size="35"  width="50px" height="70px" placeholder="Enter your username" required><br>
  
  <label for="pswd"><h2><span>*</span>Password:</h2></label>
  <input type="password" id="pswd" name="pswd" size="35" placeholder="Enter your password" required><br><br>
  </div>
  <input type="submit" value="Login" name="login">
</form>
</center></body>
</html>