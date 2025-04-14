<?php
    
    include "connection.php";

if(isset($_POST["login"]))
{
    $u=$_POST['fname'];
    $p=$_POST['pswd'];
    $role=$_POST['role'];
    if( $role=="student")
    {
        $q= "SELECT * FROM student WHERE BINARY id_number = '$u' AND stud_pass = '$p' ";
        $compare=mysqli_query($conection,$q);
        $rec=mysqli_fetch_assoc($compare);
        // echo "<br>$q";
        if(mysqli_num_rows($compare))
        {
            setcookie("sname",$u);
            $_SESSION["sid"]=$rec["id"];
            header("Location: student.php");
        }
        else
        {
            echo '<script>
            alert("username and password are incorrect");
            window.location.href="index.php";
            </script>';
        }
    }
    else
    {
        $q= "SELECT * FROM staff WHERE username = '$u' AND userpass = '$p' ";
        $compare=mysqli_query($conection,$q);
        $rec=mysqli_fetch_assoc($compare);
        //echo "<br>$q";
        if(mysqli_num_rows($compare))
        {
            setcookie("uname",$u);
            $_SESSION["uid"]=$rec["id"];
            header("Location: staff.php");
        }
        else
        {
            echo '<script>
            alert("username and password are incorrect");
            window.location.href="index.php";
            </script>';
        }
    }
}