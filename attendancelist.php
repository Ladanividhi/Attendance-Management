<?php
    include "connection.php";
    include "headerstaff.php";
?>
<br><br>
<center>
<form method=post action="attendance_save.php">
    Select Date:  <input type=date name=dt required><br><br><br>
<?php
    $q= "SELECT * FROM student";
    $rs=mysqli_query($conection,$q);
    echo "<table style=width:30% border=5 bgcolor=#f2f2f2 bordercolor=black cellspacing=1 cellpadding=3 align=center>";
    echo "<tr><th>Absent</th><th>Student ID</th><th>Student Name</th></tr>";
    while($rec=mysqli_fetch_assoc($rs))
    {
        echo "<tr>";
        echo "<td><center><input type=checkbox name=chk[] value=".$rec["id"]."></center></td>";
        echo "<td><center>".$rec["id_number"]."</center></td>";
        echo "<td><center>".$rec["stud_name"]."</center></td>";
        echo "</tr>";
    }
    echo "</table>";

?>
    <br><br>
    <input type=submit value="Save Attendance" name=s1>
</form>
</center>
<?php
    include "footerstaff.php";
?>