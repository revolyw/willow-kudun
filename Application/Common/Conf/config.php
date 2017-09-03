<?php
return array(
    //'配置项'=>'配置值'
    'DEFAULT_MODULE'       => 'Home', //默认模块
    'URL_CASE_INSENSITIVE' => false, //false为url地址对大小写不敏感
    // 'URL_MODEL'          => '2', //URL模式
    'SESSION_AUTO_START'   => true, //是否开启session
    'SESSION_OPTIONS'      => array(
        'name'   => 'PSESSION', //设置session名
        'expire' => 120 * 60, //SESSION存在时间（秒）
    ),

    'TMPL_CACHE_ON'        => false, //模板缓存
    // 'LOG_RECORD' => true, // 开启日志记录
    // 'LOG_LEVEL'  =>'EMERG,ALERT,CRIT,ERR', // 只记录EMERG ALERT CRIT ERR 错误

    'TMPL_PARSE_STRING'    => array(
        '__PUBLIC__' => '/Public', // 更改默认的/Public 替换规则
    ),

    'TMPL_ACTION_ERROR'    => THINK_PATH . 'Tpl/dispatch_jump.html', //默认错误跳转对应的模板文件
    'TMPL_ACTION_SUCCESS'  => THINK_PATH . 'Tpl/dispatch_jump.html', //默认成功跳转对应的模板文件

    'ACTION_SUFFIX'        => 'Action', //    操作方法后缀 防止控制器方法与关键字冲突
    'URL_PARAMS_BIND'      => true, //     URL变量绑定到操作方法作为参数

    'URL_HTML_SUFFIX'      => '', //    静态后缀 默认情况下，伪静态的设置为html，如果我们设置伪静态后缀为空，则可以支持所有的静态后缀
    'URL_DENY_SUFFIX'      => 'pdf|gif', //    禁止访问的静态后缀
    'DEFAULT_FILTER'       => 'htmlspecialchars', // 系统默认的变量过滤机制

    'DEFAULT_V_LAYER'      => 'View', // 设置默认的视图层名称
    'TMPL_TEMPLATE_SUFFIX' => '.html', //模板文件的默认后缀的情况是.html
    // 'TMPL_FILE_DEPR'    =>    '_',        //简化模板的目录层次 ./Application/Home/View/User_add.html

    //默认数据库配置
    // 'DB_TYPE'      =>  'mysql',         // 数据库类型
    // 'DB_HOST'      =>  'w.rdc.sae.sina.com.cn',     // 服务器地址
    // 'DB_NAME'      =>  'app_tpteac',       // 数据库名
    // 'DB_USER'      =>  'jnj41zlwnk',       // 用户名
    // 'DB_PWD'       =>  'wkxl1mh2034yk1k4lmx3h0mwzlwy445jh2k00jlk',        // 密码
    // 'DB_PORT'      =>  '3307',             // 端口
    'DB_TYPE'              => 'mysql', // 数据库类型
    'DB_HOST'              => '127.0.0.1', // 服务器地址
    'DB_NAME'              => 'app_kundun', // 数据库名
    'DB_USER'              => 'root', // 用户名
    'DB_PWD'               => 'willow', // 密码
    'DB_PORT'              => '3306', // 端口
    'DB_PREFIX'            => 'kd_',

    'DB_PARAMS'            => array(), // 数据库连接参数
    // 'DB_PREFIX'    =>  'e_',         // 数据库表前缀
    // 'DB_DSN'       =>  '',                 // 数据库连接DSN 用于PDO方式
    // 'DB_PARAMS' => array(PDO::ATTR_PERSISTENT => true), //长连接
    'DB_CHARSET'           => 'utf8', // 数据库的编码 默认为utf8
    'DB_DEBUG'             => true, // 数据库调试模式 开启后可以记录SQL日志

    //数据库配置1
    /*'DB_CONFIG1' => array(
    'db_type'  => 'mysql',
    'db_user'  => 'db_teac',
    'db_pwd'   => '104132',
    'db_host'  => 'localhost',
    'db_port'  => '3306',
    'db_name'  => 'db_teac'
    ),*/
    //数据库配置2
    // 'DB_CONFIG2' => 'mysql://root:1234@localhost:3306/thinkphp',
);
