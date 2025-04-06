<?php
    
    include "connection.php";
    include "headerstaff.php";

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    
    $dt=$_POST["dt"];

    // echo "<br>Year:=".substr($dt,0,4);
    // echo "<br>Month:=".substr($dt,5,2);
    // echo "<br>Day:=".substr($dt,8,2);

    $y=substr($dt,0,4);
    $m=substr($dt,5,2);
    $d=substr($dt,8,2);

    $abstud=implode(",",$_POST["chk"]);
    // echo "$abstud";
    $qry="SELECT * FROM stud_attendance where month_year='$y-$m-01' and staff_id=".$_SESSION["uid"];
    $rs=mysqli_query($conection,$qry);
    if (mysqli_num_rows($rs)==0)
    {
        $qryins="INSERT into stud_attendance(month_year,staff_id,stud_id) values ";
        $qstud= "SELECT id FROM student";
        $rsstud=mysqli_query($conection,$qstud);
        
        while($rec=mysqli_fetch_assoc($rsstud))
        {
            $qryins=$qryins." ('$y-$m-01','".$_SESSION["uid"]."','".$rec["id"]."'),";
        }
        $qryins=substr($qryins,0,strlen($qryins)-1);
        
        mysqli_query($conection,$qryins);   
    }

    $qryab="UPDATE stud_attendance set day$d='A' where stud_id IN ($abstud) and month_year='$y-$m-01' and staff_id=".$_SESSION["uid"];
    mysqli_query($conection,$qryab); 
    $qrypr="UPDATE stud_attendance set day$d='P' where stud_id Not IN ($abstud) and month_year='$y-$m-01' and staff_id=".$_SESSION["uid"];
    mysqli_query($conection,$qrypr); 
    echo "<br><h2><i><center>Attendance Added Successfully</center></i></h2>"

?>