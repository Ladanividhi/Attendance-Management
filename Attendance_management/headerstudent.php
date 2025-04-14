<?php
    if ((!(isset($_COOKIE["sname"]))) || (!(isset($_SESSION["sid"]))))
    {
        header("Location: index.php");
    }
?>

<html>
<body>
<style>
ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
  align:left;
}
ly a{

display: block;
color:white;
font-size: 45px;
float: right;
padding: 12px 13px;
text-align: center;

text-decoration: none;
}
.active:hover {
    color: gray;
}
body
{
  background-color:  #e6e6e6;
}

.navbar {
  overflow: hidden;
  background-color: #333;
  font-family: Arial, Helvetica, sans-serif;
}

.navbar a {
  float: left;
  font-size: 16px;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar a:hover {
  background-color: gray;
  color: black;
}

</style>


<div class="navbar">
  <a href="view_attendance_student.php">View Attendance</a>
  <a href="student_change_pswd.php">Change Password</a> 
  <a href="logout.php">Log out</a>
</div>

