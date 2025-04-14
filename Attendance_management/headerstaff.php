<?php
    if ((!(isset($_COOKIE["uname"]))) || (!(isset($_SESSION["uid"]))))
    {
        header("Location: index.php");
    }
?>

<html>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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

.dropdown {
  float: left;
  overflow: hidden;
}

.dropdown .dropbtn {
  font-size: 16px;  
  border: none;
  outline: none;
  color: white;
  padding: 14px 16px;
  background-color: inherit;
  font-family: inherit;
  margin: 0;
}

.navbar a:hover, .dropdown:hover .dropbtn {
  background-color: gray;
  color: black;
}

.dropdown-content {
  display: none;
  position: absolute;
  background-color: #f9f9f9;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  float: none;
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
  text-align: left;
}

.dropdown-content a:hover {
  background-color: #ddd;
}

.dropdown:hover .dropdown-content {
  display: block;
}

</style>


<div class="navbar">
  <a href="studentlist.php">Student list</a>
  <div class="dropdown">
    <button class="dropbtn">Attendance
      <i class="fa fa-caret-down"></i>
    </button>
    <div class="dropdown-content">
      <a href="view_attendance.php">View Attendance</a>
      <a href="attendancelist.php">Add Attendance</a>
    </div>
  </div>
  <a href="staff_change_pswd.php">Change Password</a> 
  <a href="logout.php">Log out</a>
</div>

