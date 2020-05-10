<?php   
        session_start();
        $filename=$_COOKIE[$_SESSION['name']];
        unlink('../text/'. $filename );
        setcookie($_SESSION['name'],'',time()-3650,'/');
        header('location:../index.php');