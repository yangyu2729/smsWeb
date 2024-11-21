# smsWeb
开源WEB端，一款为SmsForwarder短信转发器做的个人版无限制短信接收平台
使用教程：
1.新建一个webhook通道 请求方式为POST

2.在发送通道中配置post推送地址 https://sms.ncncy.com/zf.php

3.配置消息模板1310000000=[msg]

4.heard头配置填写%TETLE  %CONTENT
![微信图片编辑_20241122004748](https://github.com/user-attachments/assets/9be0c8db-4289-4bfd-8751-da5b4b291ad5)

5.访问demo网页端查看短信 https://sms.ncncy.com/
![微信图片_20241122005600](https://github.com/user-attachments/assets/174db592-eb83-4f64-bd97-8d8fe0f90538)
你可以部署到本地方便个人使用
