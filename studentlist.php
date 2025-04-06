<?php
    include "connection.php";
    include "headerstaff.php";

    $q= "SELECT * FROM student";
    $rs=mysqli_query($conection,$q);
?>
    <center><br><br>
    <table style=width:30% border=5 bgcolor=#f2f2f2 bordercolor=black cellspacing=1 cellpadding=3 align=center>

    <tr><th><center>Student ID</center></th><th><center>Student Name</center></th></tr>
 <?php 
    while($rec=mysqli_fetch_assoc($rs))
    {
        echo "<tr>";
        echo "<td><center>".$rec["id_number"]."</center></td>";
        echo "<td><center>".$rec["stud_name"]."</center></td>";
        echo "</tr>";
    }
    echo "</table></center>";
    include "footerstaff.php";
?>