<?php
return array(
	//'配置项'=>'配置值'
    'default_module'     => 'Web', //默认模块
    'url_model'          => '2', //URL模式--PATHINFO模式
    'session_auto_start' => true, //是否开启session
    'URL_CASE_INSENSITIVE'  =>  true,//URL不区分大小写



    //数据库配置信息
    'DB_TYPE'   => 'mysql', // 数据库类型
    'DB_HOST'   => '127.0.0.1', // 服务器地址
    'DB_NAME'   => 'blog', // 数据库名
    'DB_USER'   => 'root', // 用户名
    'DB_PWD'    => '123456', // 密码
    'DB_PORT'   => 3306, // 端口
    'DB_PARAMS' =>  array(), // 数据库连接参数
    'DB_PREFIX' => 'wg_', // 数据库表前缀
    'DB_CHARSET'=> 'utf8', // 字符集
    'DB_DEBUG'  =>  TRUE, // 数据库调试模式 开启后可以记录SQL日志

    'THINK_EMAIL' => array(
        'SMTP_HOST' => 'smtp.qq.com',
        'SMTP_PORT' => '465',
        'SMTP_USER' => '565626763@qq.com',
        'SMTP_PASS' => 'vzryaipilahhbfah',
        'FROM_EMAIL' => '565626763@qq.com',
        'FROM_NAME' => 'somebody from web',
        'REPLY_EMAIL' => '',
        'REPLY_NAME' => '',

    )
);