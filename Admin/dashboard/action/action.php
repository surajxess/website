<?php
session_start();
include '../config/config.php';

$action = $_REQUEST['submit'];//form submit button name


$created_at = date('Y-m-d H:i:s');
$updated_at = date('Y-m-d H:i:s');

switch($action){

    case 'login':
            $username = mysqli_real_escape_string($db, $_REQUEST['username']);
            $password = mysqli_real_escape_string($db, $_REQUEST['password']);

            $data=$db->query("SELECT * FROM `admin` WHERE `username` = '$username' AND `password`= '$password'");
         
            if(!empty($data -> num_rows)){
                $value = $data->fetch_object();
                $_SESSION['id'] = $value->u_id;
                header('Location:../dashboard.php');
            } else {
                echo '<script>alert("Email and Password doesn\'t match.");window.location.replace(../index.php)</script>';
            }
            break;
    case 'logout': 
        unset($_SESSION['id']);
        header('Location:../index.php');
        break;
        
    default:
        echo "Invalid Request";
        break;
}
?>