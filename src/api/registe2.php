<?php
    include 'conn.php';
   
    $id= isset($_POST['id']) ? $_POST['id'] : '';
    $email = isset($_POST['email']) ? $_POST['email'] : '';
    $phone = isset($_POST['phone']) ? $_POST['phone'] : '';
    $password2 = isset($_POST['password']) ? $_POST['password'] : '1';
    

    if($email){
        $sql2 = "UPDATE `yonghubiao` SET email = '$email' , password = '$password2' WHERE id = $id";
    }
    if($phone){
        $sql2 = "UPDATE `yonghubiao` SET phone = $phone , password = '$password2' WHERE id = $id";
       
    }
    $res2 = $conn->query($sql2);
    if($res2 == 1){
       echo 'yes';
    }else{
        echo 'nono';
    };
  
?>
