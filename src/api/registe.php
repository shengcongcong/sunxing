<?php
    include 'conn.php';
    $xing = isset($_POST['xing']) ? $_POST['xing'] : '1';
    $ming = isset($_POST['ming']) ? $_POST['ming'] : '1';
    $sfz = isset($_POST['sfz']) ? $_POST['sfz'] : '1';
    
    $sql = "SELECT * FROM `yonghubiao` WHERE sfz = $sfz && xing = $xing && ming = $ming ";
    $res = $conn->query($sql);
   
    if($res->num_rows) {
        $content=$res->fetch_all(MYSQLI_ASSOC);
        echo json_encode($content,JSON_UNESCAPED_UNICODE);
    }else{
        echo 'no';
    }
    
?>