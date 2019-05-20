<?php
    include 'conn.php';
    $email2 = isset($_POST['email']) ? $_POST['email'] : '';
    $password3 = isset($_POST['password']) ? $_POST['password'] : '1';
    $sql = "SELECT * FROM `yonghubiao` WHERE email = '$email2' && password = '$password3'";
    $res = $conn->query($sql);
  
    if($res->num_rows) {
        echo 'yes';
    }else{
        echo 'no';
    }
    
?>