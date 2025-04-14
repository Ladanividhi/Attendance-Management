<?php
    include "connection.php";
    include "headerstaff.php";

    $opass=$_POST["oldpass"];
    $npass=$_POST["newpass"];
    $cpass=$_POST["cnfpass"];
    $uid=$_SESSION["uid"];

    $q= "SELECT * FROM staff WHERE id ='$uid' AND userpass = '$opass' ";
    $rs=mysqli_query($conection,$q);
    if(mysqli_num_rows($rs))
    {
        if($npass==$cpass)
        {
            $qry="UPDATE staff SET userpass='$npass' WHERE id='$uid'";
            mysqli_query($conection,$qry);
            echo "<br><h3><center><i>Password Changed Successfully</i></center></h3>";
        }
        else
        {
            echo "<br><h3><center><i>New Password and Confirm Password Mismatch</i></center></h3>";
        }
    }
    else
    {
        echo "<br><h3><center><i>Incorrect Old Password</i></center></h3>";
    }

    
    include "footerstaff.php";
?>