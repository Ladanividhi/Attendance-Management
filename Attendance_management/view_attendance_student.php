<?php
    include "connection.php";
    include "headerstudent.php";
?>
    <center><br>
<form>
    Select First Date of attendance Month:  <input type=date name=dt required>
    <input type=submit name=s1 value="Display"><br>
</form>
<?php
if (isset($_GET["dt"]))
{    
    $mon=$_GET["dt"];
    $q="SELECT staff.username,stud_attendance.* FROM stud_attendance,staff where stud_attendance.staff_id=staff.id and month_year='$mon' and stud_id=".$_SESSION["sid"];
    $rs=mysqli_query($conection,$q);
    
    if (mysqli_num_rows($rs)>0)
    {
        $row = mysqli_fetch_assoc($rs); 

        echo "<h3 align=center>Attendance of ".substr($row["month_year"],5,2)."-".substr($row["month_year"],0,4)."</h3>";
        echo "<table border='1'>";
        echo "<tr><th>Staff Name</th>";
        for($idx=1;$idx<=31;$idx++)
        {
            echo "<th>$idx</th>";
        }
        echo "</tr>";
        
        do
        {
            echo "<tr>";
            echo "<td><center>".$row["username"]."</center></td>";
            for($idx=1;$idx<=9;$idx++)
            {
                echo "<td width=30><center>".$row["day0".$idx]."</center></td>";
            }
            for($idx=10;$idx<=31;$idx++)
            {
                echo "<td width=30><center>".$row["day".$idx]."</center></td>";
            }
            
            echo "</tr>";
        }while($row = mysqli_fetch_assoc($rs));
        echo "</table>";
    }
    else
    {
        echo"<br><h3><i><center>No Record Found</h3></i></center>";
    }
}
    include "footerstudent.php";
?>