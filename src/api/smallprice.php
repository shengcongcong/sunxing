<?php
 include 'conn.php';
 
 $sql = "SELECT * FROM `list` ORDER BY price DESC";
 $res = $conn->query($sql);

 if($res->num_rows) {
     $content=$res->fetch_all(MYSQLI_ASSOC);
     echo json_encode($content,JSON_UNESCAPED_UNICODE);
 }else{
     echo 'no';
 }
?>