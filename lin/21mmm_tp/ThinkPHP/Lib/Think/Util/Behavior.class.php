<?php
// +----------------------------------------------------------------------
// | ThinkPHP [ WE CAN DO IT JUST THINK IT ]
// +----------------------------------------------------------------------
// | Copyright (c) 2009 http://domain All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: name
// +----------------------------------------------------------------------
// $Id$

/**
 +------------------------------------------------------------------------------
 * 行为抽象类
 +------------------------------------------------------------------------------
 * @category   Think
 * @package  Think
 * @subpackage  Util
 * @author name
 * @version  $Id$
 +------------------------------------------------------------------------------
 */
abstract class Behavior extends Think {
    // 执行行为的接口方法
    abstract public function run();
}
?>