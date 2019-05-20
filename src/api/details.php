<?php
 include 'conn.php';
 $id = isset($_POST['id']) ? $_POST['id'] : '';
 $sql = "SELECT * FROM `list` WHERE id = $id";
 $res = $conn->query($sql);

 if($res->num_rows) {
     $content=$res->fetch_all(MYSQLI_ASSOC);
     echo json_encode($content,JSON_UNESCAPED_UNICODE);
 }else{
     echo 'no';
 }
?>