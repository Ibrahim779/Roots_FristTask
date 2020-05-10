<?php
setcookie("text", "", time()- 3600);

header( "refresh:1;url=../index.php" );