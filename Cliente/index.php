<?php
        session_start();

    if(!isset($_SESSION['usuario'] )){
       header("Location: ../Login");
        
    }
    else{
        header("Location:  ../Cliente/index.html");
        
    }
?>