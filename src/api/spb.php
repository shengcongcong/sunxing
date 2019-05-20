<?php    
    include 'conn.php'; 
    $APItype=isset($_POST['APItype']) ? $_POST['APItype'] : '';
    //加入购物车
    if($APItype=='addOrderCar'){
        
        $oldprice=isset($_POST['oldprice']) ? $_POST['oldprice'] : '1';
        $gid=isset($_POST['gid']) ? $_POST['gid'] : '1';
        $uid=isset($_POST['uid']) ? $_POST['uid'] : '1';
        $num=isset($_POST['num']) ? $_POST['num'] : '1';
        $price=isset($_POST['price']) ? $_POST['price'] : '1';
        $url=isset($_POST['url']) ? $_POST['url'] : '1';
        $name=isset($_POST['name']) ? $_POST['name'] : '1';
       
        $sql="SELECT * FROM `dingdanbiao` WHERE gid = '$gid' AND uid = '$uid' ";
        
       
        $res=$conn->query($sql);      
        if($res->num_rows) {
            $content=$res->fetch_all(MYSQLI_ASSOC);
            echo json_encode($content,JSON_UNESCAPED_UNICODE);
        }else{
            $sql="INSERT INTO `dingdanbiao`(oldprice,num,price,url,uid,gid,name) VALUES('$oldprice','$num','$price','$url','$uid','$gid','$name')";
           
        };
       
        
       
    };  
    //购物车信息输出 
    if($APItype=='orderCar'){
        $uid=isset($_POST['uid']) ? $_POST['uid'] : '';
       
        
        $sql="SELECT * FROM `dingdanbiao` WHERE uid = '$uid'";
       
    };
    //购物数量变化
    if($APItype=='orderCarNum'){
        $gid=isset($_POST['gid']) ? $_POST['gid'] : '2';
        $uid=isset($_POST['uid']) ? $_POST['uid'] : '12';
        $num=isset($_POST['num']) ? $_POST['num'] : '2';
        $sql="UPDATE `dingdanbiao` SET num=$num where gid='$gid' AND  uid='$uid'";
        $res=$conn->query($sql);
      
        if($res){
            echo 1;
        }else{
            echo 0;
        }
    };
    // 购物车删除数据
    if($APItype=='orderCarDelete'){
        $id=isset($_POST['id']) ? $_POST['id'] : '';
        $sql="DELETE FROM `dingdanbiao` WHERE id='$id'"; 
    };
    //购物车删除全部
    // if($APItype=='orderCarDeleteAll'){
    //     $id=isset($_POST['id']) ? $_POST['id'] : '';
    //     $sql="DELETE FROM `dingdanbiao`";
    // }
    $res=$conn->query($sql);
    
    if($APItype=='orderCar'){
        $datalist=$res->fetch_all(MYSQLI_ASSOC);//只要内容部分
       
        echo json_encode($datalist,JSON_UNESCAPED_UNICODE);
        // $res->close();//关闭结果集
    };
    //关闭数据库
    // $conn->close();
?>