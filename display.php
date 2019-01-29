<?php 
require 'dbconnection.php';
// header('content-type: application/data');
header("Access-Control-Allow-Origin: *");
header("Content-Type: application/json; charset=UTF-8");

$sql = 'select * from tbl_uss order by sid desc limit 1';

$row = mysqli_query($DB, $sql);

$array = array();
while($data = mysqli_fetch_array($row)) {

    array_push($array, $data);
    // echo "id:". $data[0] ."command:". $data[1] . "timestamp:". $data[2] ."\n";
}


echo json_encode(array("command" => $array));
