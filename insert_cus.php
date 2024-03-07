<?php
$cus_id = $_GET['cus_id'];
$cus_name = $_GET['cus_name'];
$cus_tel = $_GET['cus_tel'];
$cus_email= $_GET['cus_email'];
$cus_address = $_GET['cus_address'];

include('dbcon.php');
$sql = "INSERT INTO customer (cus_id,cus_name,cus_tel,cus_email,cus_address) VALUES('cus_id', 'cus_name', 'cus_tel', 'cus_email', 'cus_address')";

$result = $mysqli->query($sql);
if($result){
    echo "บันทึกข้อมูลแล้ว";
}
else{
    echo "บันทึกข้อมูลไม่สำเร็จ";
}
?>