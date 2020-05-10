<?php
session_start();
     if (isset($_SESSION['name'])) {
		 header('location:index.php');
	 };
  if($_SERVER['REQUEST_METHOD'] ==='POST') {
        $name=$_POST['name'];
        $password=$_POST['password'];
        $users = array(
            array('name' => 'ali','password'=>123 ),
            array('name' => 'omer','password'=>456 ) ,
            array('name' => 'ahmad','password'=>985 ),
            array('name' => 'ali','password'=>235 ));
         if (inUsers($name, $password, $users)) {
            $_SESSION['name']=$name;
            header('location:../index.php');
          }else {
            echo '<b>ERORR</b>';
         }
    }else {
        echo "ERROR SERVER";
    }

    
    //=================Functions================================================>   
function inUsers($name, $password, $users){
       foreach ($users as $key => $user) {
            if ($user['name']==$name && $user['password']==$password) {
                return TRUE;
                break;
            }
        }
        return FALSE;
    }