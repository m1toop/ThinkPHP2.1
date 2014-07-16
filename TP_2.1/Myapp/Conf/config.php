<?php
return array(
	//'配置项'=>'配置值'
	'APP_DEBUG' => true, // 开启调试模式
    
    'DB_TYPE'=> 'mysql',  

	'DB_HOST'=> 'localhost',

	'DB_NAME'=>'com_hmly',  

	'DB_USER'=>'root', 

	'DB_PWD'=>'tarena', 

	'DB_PORT'=>'3306',

	'DB_PREFIX'=>'',

	'SHOW_RUN_TIME'			=> true,   // 运行时间显示
    'SHOW_ADV_TIME'			=> true,   // 显示详细的运行时间
    'SHOW_DB_TIMES'			=> true,   // 显示数据库查询和写入次数
    'SHOW_CACHE_TIMES'		=> true,   // 显示缓存操作次数
    'SHOW_USE_MEM'			=> true,   // 显示内存开销
    'SHOW_PAGE_TRACE'		=> true,   // 显示页面Trace信息 由Trace文件定义和Action操作赋值
    'SHOW_ERROR_MSG'        => true,    // 显示错误信息

);
?>