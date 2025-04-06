<?php
    include "connection.php";
    include "headerstaff.php";
?>
<style>
    .b{
        border:1px solid black;
        padding:5px;
        width:400px;
    }
</style>
<br><br><br><br><center>
<div class="b">
    <center><h1>Change Password</h1>
<form method=post action=staff_change_pswd_qry.php>
<table>
    <tr>
        <td>Old Password:</td>
        <td><input type=password name=oldpass required></td>
    </tr>
    <tr>
        <td>New Password:</td>
        <td><input type=password name=newpass required></td>
    </tr>
    <tr>
        <td>Confirm Password:</td>
        <td><input type=password name=cnfpass required></td>
    </tr>
    <tr>
        <td colspan=2><input type=submit name=s1 value="Change Password"></td>
    </tr>
    
</table>
</form>
</div>
</center>
<?php
    include "footerstaff.php";
?>