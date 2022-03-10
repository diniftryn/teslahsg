<?php
session_start();

if(isset($_SESSION['loginUserid'])){
    session_start();
    session_unset();
    session_destroy();
    
    header("Location: index.php?status=logout");
}
?>