<?php 
//这都不是必须的

// 定义ThinkPHP框架路径(相对于入口文件)

define('THINK_PATH', './ThinkPHP');

//定义项目名称和路径

define('APP_NAME', 'Myapp');

define('APP_PATH', './Myapp');

//----------------------
// 加载框架入口文件 

require(THINK_PATH."/ThinkPHP.php"); //加载核心 建立对应文件夹

//实例化一个网站应用实例

App::run();

?>
