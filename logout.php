<?php
    session_start();
    session_destroy();

    setcookie("uname","",time()-132);
    
    header("Location: index.php");
    
?>
