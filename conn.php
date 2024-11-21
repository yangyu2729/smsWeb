<?php
	header('Content-Type: text/html;charset=utf-8');
    header('Access-Control-Allow-Origin:*'); // *代表允许任何网址请求
    header('Access-Control-Allow-Methods:POST,GET,OPTIONS,DELETE'); // 允许请求的类型
    header('Access-Control-Allow-Credentials: true'); // 设置是否允许发送 cookies
    header('Access-Control-Allow-Headers: Content-Type,Content-Length,Accept-Encoding,X-Requested-with, Origin,Token,Authorization,XX-Token,Cookie'); // 设置允许自定义请求头的字段

$servername = "localhost";
$username = "snsapi";
$password = "snsapi";
$dbname = "snsapi";

// 创建连接
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("连接失败: " . $conn->connect_error);
}


// 方法测试
function test(){
    echo "我是另个文件引入conn.php执调用本文件里的方法";
}

// 创建token，登陆时调用
function CreateToken($username) {
    $time = time();
    $end_time = time() + 86400;
    $info = $username . '.' . $time . '.' . $end_time; //设置token过期时间为一天
    //根据以上信息信息生成签名（密钥为 SIGNATURE 自定义全局常量)
    $signature = hash_hmac('md5', $info, 'SIGNATURE');
    //最后将这两部分拼接起来，得到最终的Token字符串
    return $token = $info . '.' . $signature;
}