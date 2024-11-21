<?php
    require_once("conn.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <meta name="format-detection" content="telephone=no,email=yes" />
    <meta name="language" content="zh-CN">
    <meta name="title" content="网站seo标题">
    <meta name="author" content="123">
    <meta name="description" content="网站描述">
    <meta name="keywords" content="网站关键词">
    <meta name="robots" content="All">
    <title>云短信—免费收短信</title>
    <!-- <link rel="shortcut icon" href="./favicon.ico"> -->
    <style>
        * {
  box-sizing: border-box;
}
                
body {
  background-color: #ffe96d;
  background-image: linear-gradient(166deg, #4fddf3 0%, #41d933 66%);
  min-height: 100vh;
  font-family: 'Fira Sans', sans-serif;
  display: flex;
  user-select: none;
  -ms-user-select: none;
  -moz-user-select: none;
  -webkit-user-select: none;
}
#content{
    width : 100%;
    margin-top: 60px;
    padding: 1px;
    display: flex;
    flex-direction: column;  /* 按照列column(垂直方向)排列*/
}
.cnmsb-card {
  width: 95%;
  position: relative;
  max-width: 800px;
  margin: 30px 200px;
  background: #fff;
  box-shadow: 0px 14px 80px rgba(34, 35, 58, 0.2);
  padding: 25px;
  border-radius: 25px;
  height: 600px;
}
@media screen and (max-width: 992px) {
  .cnmsb-card {
    margin: 30px 200px;
    max-width: 680px;
    height: 400px;
  }
}
@media screen and (max-width: 768px) {
  .cnmsb-card {
    min-height: 500px;
    height: auto;
    margin: 100px auto 50px;
  }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .cnmsb-card {
    height: 350px;
  }
}
.cnmsb-card-cnm {
  display: flex;
  align-items: center;
}
@media screen and (max-width: 768px) {
  .cnmsb-card-cnm {
    flex-direction: column;
  }
}

.sb {
  position: relative;
  width: 100%;
  height: 100%;
  z-index: 1;
  display: -webkit-box;
  display: -webkit-flex;
  display: -ms-flexbox;
  display: flex;
  -webkit-transition-property: -webkit-transform;
  transition-property: -webkit-transform;
  -o-transition-property: transform;
  transition-property: transform;
  transition-property: transform, -webkit-transform;
  -webkit-box-sizing: content-box;
  box-sizing: content-box
}

.cnmsb-card-img {
  width: 250px;
  flex-shrink: 0;
  height: 200px;
  background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
  box-shadow: 4px 13px 30px 1px rgba(252, 56, 56, 0.2);
  border-radius: 20px;
  transform: translateX(-80px);
  overflow: hidden;
}
.cnmsb-card-img:after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-image: linear-gradient(200deg, #7b6cff 0%, #ec4a4a54 74%);
  border-radius: 20px;
  opacity: 0.5;
}
.cnmsb-card-img img {
  width: 100%;
  height: 100%;
  object-fit: cover;
  display: block;
  opacity: 0.7;
  border-radius: 20px;
}
@media screen and (max-width: 768px) {
  .cnmsb-card-img {
    transform: translateY(-50%);
    width: 90%;
  }
}
@media screen and (max-width: 576px) {
  .cnmsb-card-img {
    width: 80%;
  }
  .cycle{
    border-radius: 100px;
  }
}
@media screen and (max-height: 500px) and (min-width: 992px) {
  .cnmsb-card-img {
    height: 270px;
  }
}
.cnmsb-card-content {
  padding-right: 25px;
}
@media screen and (max-width: 768px) {
  .cnmsb-card-content {
    margin-top: -100px;
    text-align: center;
    padding: 0 30px;
  }
}
@media screen and (max-width: 576px) {
  .cnmsb-card-content {
    padding: 0;
  }
}
.cnmsb-card-content > * {
  opacity: 0.7;
  transform: translateY(25px);
}
.cnmsb-card-content2 {
  padding-right: 25px;
}
@media screen and (max-width: 768px) {
  .cnmsb-card-content2 {
    text-align: center;
    padding: 0 30px;
  }
}
@media screen and (max-width: 576px) {
  .cnmsb-card-content2 {
    margin-top: -60px;
    padding: 0;
  }
}
.cnmsb-card-content2 > * {
  opacity: 0.7;
  transform: translateY(25px);
}
.cnmsb-card-site {
  color: #3827f7;
  font-size: 24px;
  font-weight: 500;
  margin-bottom: 15px;
  display: block;
}
.cnmsb-card-name {
  font-size: 24px;
  font-weight: 700;
  color: #0d0925;
  margin-bottom: 20px;

}
.cnmsb-card-text {
  color: #4e4a67;
  border: 1px solid #000;
  border-radius: 20px;
  padding: 20px;
  /*margin-bottom: 30px;*/
  line-height: 1.5em;
  word-wrap:break-word; 
  word-break:break-all; 
  overflow-y: scroll;
  height: 480px;
}
.cnmsb-card-phone {
  color: #4e4a67;
  /*margin-bottom: 10px;*/
  line-height: 1.5em;
  word-wrap:break-word; 
  word-break:break-all; 
  overflow: hidden;
  font-size: 24px;
}

.cnmsb-card-title {
  font-size: 48px;
  font-weight: 700;
  color: #0d0925;
  margin-bottom: 20px;
  margin-top: -60px;
}

.cnmsb-card-button {
  display: inline-flex;
  background-image: linear-gradient(147deg, #fe8a39 0%, #fd3838 74%);
  margin-bottom: 30px;
  padding: 15px 35px;
  border-radius: 50px;
  color: #fff;
  box-shadow: 0px 14px 80px rgba(252, 56, 56, 0.4);
  text-decoration: none;
  font-weight: 500;
  justify-content: center;
  text-align: center;
  letter-spacing: 1px;
}
@media screen and (max-width: 576px) {
  .cnmsb-card-button {
    width: 80%;
  }
}
.cnmsb-footer {
  width: 100%;
  text-align: center;
  font-size: 12px;
  color: rgba(187, 161, 161, 0.208);
  padding: 20px 0;
}

.cnmsb-footer {
  font-size: 12px;
}

.cnmsb-footer a {
  color: rgba(187, 161, 161, 0.3);
  text-decoration: none;
}
    </style>
</head>
<body>
    <div id="main">
        <div id="content">

            <!-- 第一张卡片 -->
            <div class="cnmsb-card">
                <div class="cnmsb-card-cnm sb">
                    <div class="cnmsb-card-img cycle">
                        <img src="logo.jpg">
                    </div>
                    <div class="cnmsb-card-content2">
                        <!--<div class="cnmsb-card-phone">我是手机号</div>-->
                        <div class="cnmsb-card-title">短信验证码</div>
                        <div class="cnmsb-card-text">
                        <!--输出数据库数据-->
                        <?php
                            $sql = "select * from zf order by id desc limit 10";
                            $result = $conn->query($sql);
                            
                            if ($result->num_rows > 0) {
                                // 输出数据
                                while($row = $result->fetch_assoc()) {
                                    echo "id: " . $row["id"]. "<br>". "短信时间:" . $row["time"]. "<br>". "手机号: " . $row["phone"]. "<br>"."短信内容:" . $row["content"]. "<br><br><hr>";
                                }
                            } else {
                                echo "0 结果";
                            }
                            $conn->close();
                        ?>

                        </div>
                    </div>
                </div>
            </div>


            <div class="cnmsb-footer">
                <p>Copyright © 2022 - 2022 <a href="https://www.ncncy.com" target="_blank" rel="noopener noreferrer">CNMSB</a> .All Rights Reserved.</p>
                <p><a href="https://www.ncncy.com" target="_blank"
                      rel="noopener noreferrer">已备案</a></p>
            </div>

        </div>
    </div>
    
</body>

</html>
