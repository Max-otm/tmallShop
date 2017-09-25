<?php
/**'-------------------------------------------------------------------
 * Author: 熊伟洋<chelious@foxmail.com>
 * WeChat: hello_McGrady
 *     QQ:434493420
 *  Motto: Hungry & Humble
 *   Date: 2017/6/5
 *   Time: 13:55
 *'-------------------------------------------------------------------*/

/**
 * 拓展函数库
 */

/**
 * @param $data
 * 打印函数
 */
function p($data)
{
	echo "<pre style='padding: 15px;background: #ccc;border-radius: 6px'>";
	if (is_null($data)) {
		var_dump($data);
	} elseif (is_bool($data)) {
		var_dump($data);
	} else {
		print_r($data);
	}
	echo '</pre>';
}
