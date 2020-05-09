<?php
session_start();
session_unset();
session_destroy();
header( "refresh:1;url=../login.html" );
?>