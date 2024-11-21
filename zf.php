<?php
    // 链接数据库
    require_once("conn.php");
    // 获取POST数据
    $data = file_get_contents("php://input");
    // 获取的json格式数据转为obj对象
    // $obj=json_decode($data,TRUE);
    $key = $_SERVER['HTTP_ABCD]'];
    
    // $title = $obj['title'];
    // $content = $obj['content'];
    $data2 = urldecode($data);
    $arr = [];
//     $data2 = "19913163151=【阿里巴巴】验证码3866，您正在进行登录校验，切勿将验证码泄露于他人，验证码15分钟内有效。

// 【Redmi 6】";
    $arr = explode("=",$data2);
    $phone = $arr[0];
    $content = $arr[1];
    $create_time = date("Y-m-d H:i:s",time());
    // print_r($arr);
    if (empty($data)) {
        $result2 = ["code" => 500,"message" => "内容为空（empty content）"];
                    echo json_encode($result2);
                    die;
    }else{
        $sql="insert into zf (time, phone, content,header) VALUES ('$create_time', '$phone', '$content','$token')";
                $result = mysqli_query($conn,$sql);
                if($result){
                    $result2 = ["code" => 200,"message" => "短信接收成功"];
                    echo json_encode($result2);
                }else{
                    // echo "cuowu";
                }
    }
	$conn->close();
	

?>