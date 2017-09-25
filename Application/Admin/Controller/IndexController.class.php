<?php
/**'-------------------------------------------------------------------
 * Author: 熊伟洋<chelious@foxmail.com>
 * WeChat: hello_McGrady
 *     QQ:434493420
 *  Motto: Hungry & Humble
 *   Date: 2017/6/5
 *   Time: 13:59
 *'-------------------------------------------------------------------*/

namespace Admin\Controller;
use Common\Controller;

/**
 * Class IndexController
 * @package Admin\Controller
 * 后台首页管理控制器
 */
class IndexController extends Controller\BaseController
{
	public function index()
	{
		//载入模板
		$this->display();
	}
}