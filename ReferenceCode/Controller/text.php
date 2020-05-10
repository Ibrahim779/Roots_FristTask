<?php
if (isset($_COOKIE[$_SESSION['name']])) {
    $file_name=$_COOKIE[$_SESSION['name']];
   $text= file_get_contents('text/'.$file_name);
}else {
     $file_name='default';
     $text= file_get_contents('text/'.$file_name.'.txt');
     
}

