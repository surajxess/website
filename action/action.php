<?php

include '../config/config.php';
$action=$_REQUEST['submit'];//form submit button name


$create_at = date('Y-m-d H:i:s');
$update_at = date('Y-m-d H:i:s');

switch($action){
    case 'submit': // form submit button value
        $id =  mysqli_real_escape_string($db, $_REQUEST["id"]); 
        $type =  mysqli_real_escape_string($db, $_REQUEST["type"]); 
        $regn_date =  mysqli_real_escape_string($db, $_REQUEST["regn_date"]); 
        $regn_time =  mysqli_real_escape_string($db, $_REQUEST["regn_time"]); 
        $tpa_corp =  mysqli_real_escape_string($db, $_REQUEST["tpa_corp"]); 
        $bsky =  mysqli_real_escape_string($db, $_REQUEST["bsky"]); 
        $cleft =  mysqli_real_escape_string($db, $_REQUEST["cleft"]); 
        $patient_name =  mysqli_real_escape_string($db, $_REQUEST["patient_name"]); 
        $ward =  mysqli_real_escape_string($db, $_REQUEST["ward"]); 
        $room =  mysqli_real_escape_string($db, $_REQUEST["room"]); 
        $age =  mysqli_real_escape_string($db, $_REQUEST["age"]); 
        $sex =  mysqli_real_escape_string($db, $_REQUEST["sex"]); 
        $adhaar =  mysqli_real_escape_string($db, $_REQUEST["adhaar"]); 
        $height =  mysqli_real_escape_string($db, $_REQUEST["height"]); 
        $weight =  mysqli_real_escape_string($db, $_REQUEST["weight"]); 
        $m_status =  mysqli_real_escape_string($db, $_REQUEST["m_status"]); 
        $married =  mysqli_real_escape_string($db, $_REQUEST["married"]); 
        $occupation =  mysqli_real_escape_string($db, $_REQUEST["occupation"]); 
        $res_address =  mysqli_real_escape_string($db, $_REQUEST["res_address"]); 
        $dist =  mysqli_real_escape_string($db, $_REQUEST["dist"]); 
        $pin =  mysqli_real_escape_string($db, $_REQUEST["pin"]); 
        $p_add =  mysqli_real_escape_string($db, $_REQUEST["p_add"]); 
        $p_post =  mysqli_real_escape_string($db, $_REQUEST["p_post"]); 
        $p_ps =  mysqli_real_escape_string($db, $_REQUEST["p_ps"]); 
        $p_dist =  mysqli_real_escape_string($db, $_REQUEST["p_dist"]); 
        $p_state =  mysqli_real_escape_string($db, $_REQUEST["p_state"]); 
        $p_pin =  mysqli_real_escape_string($db, $_REQUEST["p_pin"]); 
        $mob_no =  mysqli_real_escape_string($db, $_REQUEST["mob_no"]); 
        $c_name =  mysqli_real_escape_string($db, $_REQUEST["c_name"]); 
        $c_dept =  mysqli_real_escape_string($db, $_REQUEST["c_dept"]); 
        $refer_by =  mysqli_real_escape_string($db, $_REQUEST["refer_by"]); 
        $sign_name =  mysqli_real_escape_string($db, $_REQUEST["sign_name"]);
       
        $db->query("INSERT INTO `form_table`(`id`, `type`, `regn_date`, `regn_time`, `tpa_corp`, `bsky`, `cleft`, `patient_name`, `ward`, `room`, `age`, `sex`, `adhaar`, `height`, `weight`, `m_status`, `married`, `occupation`, `res_address`, `dist`, `pin`, `p_add`, `p_post`, `p_ps`, `p_dist`, `p_state`, `p_pin`, `mob_no`, `c_name`, `c_dept`, `refer_by`, `sign_name`,`create_at`)
  VALUES ('$id','$type','$regn_date','$regn_time','$tpa_corp','$bsky','$cleft','$patient_name','$ward','$room','$age','$sex','$adhaar','$height','$weight','$m_status','$married','$occupation','$res_address','$dist','$pin','$p_add','$p_post','$p_ps','$p_dist','$p_state','$p_pin','$mob_no','$c_name','$c_dept','$refer_by','$sign_name','$create_at')");
  header("Location:../data_list.php");
        break;
        case "update":
            $id =  mysqli_real_escape_string($db, $_REQUEST["id"]); 
$type =  mysqli_real_escape_string($db, $_REQUEST["type"]); 
$regn_date =  mysqli_real_escape_string($db, $_REQUEST["regn_date"]); 
$regn_time =  mysqli_real_escape_string($db, $_REQUEST["regn_time"]); 
$tpa_corp =  mysqli_real_escape_string($db, $_REQUEST["tpa_corp"]); 
$bsky =  mysqli_real_escape_string($db, $_REQUEST["bsky"]); 
$cleft =  mysqli_real_escape_string($db, $_REQUEST["cleft"]); 
$patient_name =  mysqli_real_escape_string($db, $_REQUEST["patient_name"]); 
$ward =  mysqli_real_escape_string($db, $_REQUEST["ward"]); 
$room =  mysqli_real_escape_string($db, $_REQUEST["room"]); 
$age =  mysqli_real_escape_string($db, $_REQUEST["age"]); 
$sex =  mysqli_real_escape_string($db, $_REQUEST["sex"]); 
$adhaar =  mysqli_real_escape_string($db, $_REQUEST["adhaar"]); 
$height =  mysqli_real_escape_string($db, $_REQUEST["height"]); 
$weight =  mysqli_real_escape_string($db, $_REQUEST["weight"]); 
$m_status =  mysqli_real_escape_string($db, $_REQUEST["m_status"]); 
$married =  mysqli_real_escape_string($db, $_REQUEST["married"]); 
$occupation =  mysqli_real_escape_string($db, $_REQUEST["occupation"]); 
$res_address =  mysqli_real_escape_string($db, $_REQUEST["res_address"]); 
$dist =  mysqli_real_escape_string($db, $_REQUEST["dist"]); 
$pin =  mysqli_real_escape_string($db, $_REQUEST["pin"]); 
$p_add =  mysqli_real_escape_string($db, $_REQUEST["p_add"]); 
$p_post =  mysqli_real_escape_string($db, $_REQUEST["p_post"]); 
$p_ps =  mysqli_real_escape_string($db, $_REQUEST["p_ps"]); 
$p_dist =  mysqli_real_escape_string($db, $_REQUEST["p_dist"]); 
$p_state =  mysqli_real_escape_string($db, $_REQUEST["p_state"]); 
$p_pin =  mysqli_real_escape_string($db, $_REQUEST["p_pin"]); 
$mob_no =  mysqli_real_escape_string($db, $_REQUEST["mob_no"]); 
$c_name =  mysqli_real_escape_string($db, $_REQUEST["c_name"]); 
$c_dept =  mysqli_real_escape_string($db, $_REQUEST["c_dept"]); 
$refer_by =  mysqli_real_escape_string($db, $_REQUEST["refer_by"]); 
$sign_name =  mysqli_real_escape_string($db, $_REQUEST["sign_name"]);
$db->query("UPDATE `form_table` SET  `id`  =  '$id', `type`  =  '$type', `regn_date`  =  '$regn_date', `regn_time`  =  '$regn_time', `tpa_corp`  =  '$tpa_corp', `bsky`  =  '$bsky', `cleft`  =  '$cleft', `patient_name`  =  '$patient_name', `ward`  =  '$ward', `room`  =  '$room', `age`  =  '$age', `sex`  =  '$sex', `adhaar`  =  '$adhaar', `height`  =  '$height', `weight`  =  '$weight', `m_status`  =  '$m_status', `married`  =  '$married', `occupation`  =  '$occupation', `res_address`  =  '$res_address', `dist`  =  '$dist', `pin`  =  '$pin', `p_add`  =  '$p_add', `p_post`  =  '$p_post', `p_ps`  =  '$p_ps', `p_dist`  =  '$p_dist', `p_state`  =  '$p_state', `p_pin`  =  '$p_pin', `mob_no`  =  '$mob_no', `c_name`  =  '$c_name', `c_dept`  =  '$c_dept', `refer_by`  =  '$refer_by', `sign_name`  =  '$sign_name', `update_at`  =  '$update_at' WHERE id='$id'");
header("Location:../data_list.php");
        break;
    case "delete":
        $id =  mysqli_real_escape_string($db, $_REQUEST["id"]); 
        $db->query("DELETE FROM `form_table` WHERE id = '$id' ");
        header("Location:../data_list.php");
        break;
    default:
        echo "Invalid Request";
        break;
}
?>