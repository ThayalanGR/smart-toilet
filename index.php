<?php

require "dbconnection.php";

if(isset($_GET['commands'])) {
    $sql = 'insert into tbl_uss (`commands`) values ('.$_GET['commands'].')';
    echo $sql;
    $success = mysqli_query($DB, $sql);
    if($success) {
        echo "inserted";
    } else {
        echo "something went wrong";
    }
}

echo "hello world";
?>