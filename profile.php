<?php
    session_start();
    
    if (isset($_SESSION['username'])) {
        echo $_SESSION['username']." ".$_SESSION['name']." ".$_SESSION['usertype'];
    } else {
        echo "loged out";
    }
?>