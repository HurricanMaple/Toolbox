<?php
// 配置
$config_ktools_password = "123123"; //状态监控访问密码
$config_customurl = false;    //是否开启自定义域名，true/false，样式错误请开启
$config_ktools_custom_url =  "https://hurricanmaple.github.io/Toolbox/";    //自定义域名，上方配置填 true 之后填入此项
$ktools_visitor = false;    // 访问者数据统计开关，（实验性功能，如有问题请关闭）

// 数据库信息
$servername = "localhost";  //数据库地址
$username = "ktools";       //数据库用户名
$password = "ktools";       //数据库密码
$dbname = "ktools";         //数据库名

// 以下请不要修改
define('IN_SYS', TRUE);
if (!defined('IN_SYS')) {
    　　exit('禁止访问');
    } 
//获取当前域名
if ($config_customurl == true) {
    define("TOOLS_URL",$config_ktools_custom_url);
}else{
    define("TOOLS_URL",$_SERVER['SERVER_NAME']);
}
// 状态监控
define("STATUS_PASSWORD",$config_ktools_password);
