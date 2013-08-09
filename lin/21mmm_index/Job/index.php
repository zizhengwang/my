<?php
// +----------------------------------------------------------------------
// | ThinkPHP
// +----------------------------------------------------------------------
// | Copyright (c) 2008 http://thinkphp.cn All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: liu21st <liu21st@gmail.com>
// +----------------------------------------------------------------------

//定义全局根目录
define('MMM_ROOT','../../21mmm_tp');
 // 定义ThinkPHP框架路径
define('THINK_PATH', MMM_ROOT.'/ThinkPHP');
//定义项目名称和路径
define('APP_NAME', 'Job');
define('APP_PATH', MMM_ROOT.'/Job');

define('NO_CACHE_RUNTIME',True); //调试
define('URL_MODEL',2);
// 加载框架入口文件
require(THINK_PATH."/ThinkPHP.php");

//实例化一个网站应用实例
App::run(); 


?>