<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>已买到的宝贝</title>
		<link rel="stylesheet" type="text/css" href="/tpShop/tpShop/Shop/Public/Home/css/my.css" />
		<link rel="stylesheet" type="text/css" href="/tpShop/tpShop/Shop/Public/Home/css/iconfont.css" />
		<script src="/tpShop/tpShop/Shop/Public/Home/js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>
		<div id="mallPage">
			<div class="site-nav">
				<div class="wrapper clearfix">
					<div class="login-info">
						<span class="login"><a href="#"><span name="username"><?php echo ($_SESSION['user']['username']); ?></span></a>
						</span>
						<span class="menu "><i class="iconfont icon-ht_notice"></i><span class="news">消息</span></span>
						<a href="#" class="phone">手机逛淘宝</a>
					</div>
					<div class="quick-menu">
						<a href="<?php echo u('Home/Index/index');?>" class="home">天猫首页</a>
						<div class="menu">
							<a href="#">我的淘宝<b></b></a>
							<div class="baobei">
								<p>
									<a href="#">已买到的宝贝</a>
								</p>
								<p>
									<a href="#">已卖出的宝贝</a>
								</p>
							</div>
						</div>
						<span class="buycar"><i class="iconfont icon-gouwuche gouwuche"></i><a href="#">购物车<span class="num">0</span>件</a>
						</span>
						<div class="menu">
							<a href="#">收藏夹<b></b></a>
							<div class="baobei">
								<p>
									<a href="#">收藏的宝贝</a>
								</p>
								<p>
									<a href="#">收藏的店铺</a>
								</p>
							</div>
						</div>
						<span class="net"><a href="#">商品分类</a></span>
						<span class="shu">|</span>
						<div class="menu">
							<a href="#">卖家中心<b></b></a>
							<div class="mai">
								<p>
									<a href="#">免费开店</a>
								</p>
								<p>
									<a href="#">免费开店</a>
								</p>
							</div>
						</div>
						<div class="menu">
							<a href="#">联系客服<b></b></a>
							<div class="support">
								<p>
									<a href="#">免费开店</a>
								</p>
								<p>
									<a href="#">免费开店</a>
								</p>
							</div>
						</div>
						<div class="menu">
							<a href="#"><i class="iconfont icon-bbgliebiao liebiao"></i>网站导航<b></b></a>
							<div class="net-nav">
								<div class="site-count site-hot">
									<h2>热点推荐<span>Hot</span></h2>
									<ul class="site-list">
										<li>
											<a href="#">天猫超市</a>
										</li>
										<li>
											<a href="#">喵鲜生 </a>
										</li>
										<li>
											<a href="#">科技新品<i class="iconfont icon-shangchengicon22 new"></i></a>
										</li>
										<li>
											<a href="#">女装新品<i class="iconfont icon-hot hot"></i></a>
										</li>
										<li>
											<a href="#">酷玩街</a>
										</li>
										<li>
											<a href="#">内衣新品<i class="iconfont icon-hot hot"></i></a>
										</li>
										<li>
											<a href="#">试美妆</a>
										</li>
										<li>
											<a href="#">运动新品</a>
										</li>
										<li>
											<a href="#">时尚先生<i class="iconfont icon-hot hot"></i></a>
										</li>
										<li>
											<a href="#">精明妈咪</a>
										</li>
										<li>
											<a href="#">吃乐会<i class="iconfont icon-shangchengicon22 new"></i></a>
										</li>
										<li>
											<a href="#">企业采购</a>
										</li>
										<li>
											<a href="#">会员积分</a>
										</li>
										<li>
											<a href="#">天猫国际</a>
										</li>
									</ul>
								</div>
								<div class="site-count site-market">
									<h2>行业市场<span>Market</span></h2>
									<ul class="site-list">
										<li>
											<a href="#">天猫超市</a>
										</li>
										<li>
											<a href="#">喵鲜生 </a>
										</li>
										<li>
											<a href="#">科技新品<i class="iconfont icon-shangchengicon22 new"></i></a>
										</li>
										<li>
											<a href="#">女装新品<i class="iconfont icon-hot hot"></i></a>
										</li>
										<li>
											<a href="#">酷玩街</a>
										</li>
										<li>
											<a href="#">内衣新品<i class="iconfont icon-hot hot"></i></a>
										</li>
										<li>
											<a href="#">试美妆</a>
										</li>
										<li>
											<a href="#">运动新品</a>
										</li>
										<li>
											<a href="#">时尚先生<i class="iconfont icon-hot hot"></i></a>
										</li>
										<li>
											<a href="#">精明妈咪</a>
										</li>
									</ul>
								</div>
								<div class="site-count site-brand">
									<h2>品牌风尚<span>Brand</span></h2>
									<ul class="site-list">
										<li>
											<a href="#">天猫超市</a>
										</li>
										<li>
											<a href="#">喵鲜生 </a>
										</li>
										<li>
											<a href="#">科技新品</a>
										</li>
										<li>
											<a href="#">女装新品</a>
										</li>
										<li>
											<a href="#">酷玩街</a>
										</li>
									</ul>
								</div>
								<div class="site-count site-help">
									<h2>服务指南<span>Help</span></h2>
									<ul class="site-list">
										<li>
											<a href="#">天猫超市</a>
										</li>
										<li>
											<a href="#">喵鲜生 </a>
										</li>
										<li>
											<a href="#">科技新品</a>
										</li>
										<li>
											<a href="#">女装新品</a>
										</li>
										<li>
											<a href="#">酷玩街</a>
										</li>
									</ul>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div id="page">
				<div class="header">
					<article>
						<div class="logo">
							<a href="#"></a>
						</div>
						<nav class="mt-nav">
							<ul id="mainNav">
								<li>
									<a href="#">首页</a>
								</li>
								<li>
									<a href="#">账户设置<i><em></em><s></s></i></a>
									<div class="nav-sub hide">
										<div class="nav-arr"></div>
										<dl class="safe">
											<dt>安全设置</dt>
											<dd>
												<p><a href="#">修改登录密码</a></p>
											</dd>
										</dl>
									</div>
								</li>
								<li>
									<a href="#">消息</a>
								</li>
							</ul>
							<div class="search">
								<div class="search-button">
									<button type="submit" class="search-btn">搜索</button>
								</div>
								<div class="search-input">
									<input type="text" name="" id="" value="" />
								</div>
							</div>
						</nav>
					</article>
				</div>
				<div id="content">
					<div class="main clearfix">
						<div class="bought">
							<div class="tabs">
								<a href="#" class="tabs-item selected">
									<span class="item-mod">
										<span class="item-text">所有订单</span>
									<span class="item-count"></span>
									</span>
									<span class="right-mod"></span>
								</a>
								<a href="#" class="tabs-item">
									<span class="item-mod">
										<span class="item-text">待付款</span>
									<span class="item-count"></span>
									</span>
									<span class="right-mod"></span>
								</a>
								<a href="#" class="tabs-item">
									<span class="item-mod">
										<span class="item-text">待发货</span>
									<span class="item-count"></span>
									</span>
									<span class="right-mod"></span>
								</a>
								<a href="#" class="tabs-item">
									<span class="item-mod">
										<span class="item-text">待收货</span><span class="item-count"></span>
									</span>
									<span class="right-mod"></span>
								</a>
								<a href="#" class="tabs-item">
									<span class="item-mod">
										<span class="item-text">待评价</span><span class="item-count"></span>
									</span>
									<span class="right-mod"></span>
								</a>
								<a href="#" class="tabs-item ">
									<span class="item-mod">
										<span class="item-text" style="font-size: 14px;">分阶段</span><span class="item-count"></span>
									</span>
									<span class="right-mod"></span>
								</a>
								<div class="recycle">
									<div class="recycle-mod">
										<a href="#" class="recycle-content"> <img src="/tpShop/tpShop/Shop/Public/Home/img/delete.png" alt="" style="margin-right: 5px;" /><span class="text">订单回收站</span></a>
									</div>
								</div>
							</div>
							<div class="search-mod">
								<input type="text" name="" id="" value="" class="search" placeholder="输入商品标题或订单号进行搜索" /><button type="submit" class="search-btn">订单搜索</button>
								<button class="more-search">
									<span>更多筛选条件</span>
									<img src="/tpShop/tpShop/Shop/Public/Home/img/下箭头.png"/>
								</button>
							</div>
							<div class="th">
								<div class="good">宝贝</div>
								<div class="price">单价</div>
								<div class="num">数量</div>
								<div class="good-opt">商品操作</div>
								<div class="good-pay">实付款</div>
								<div class="deal-state">交易状态</div>
								<div class="deal-opt">交易操作</div>
							</div>
							<div class="order">
								<div class="order-content">
									<div class="head">
										<div class="dingdan">
											<div class="time">
												<input type="checkbox" name="" id="" value="" /><span name="time" class="order-time">2017-05-26</span><span class="order-num">订单号:<span>19977223527415442</span></span>
											</div>
											<div class="merchant">
												<span>
												<img src="/tpShop/tpShop/Shop/Public/Home/img/merchant.png" />
												<a href="#">迪信通官方旗舰店</a>
												</span>
											</div>
											<div class="opt">
												<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/wanwan.png" /></a>
											</div>
											<div class="delete">
												<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/delete.png" /></a>
											</div>
										</div>
									</div>
									<table class="detail">
										<tr style="height: 108px;">
											<td class="good-detail " style="width: 38%;">
												<div class="mod-content">
													<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/good1.jpg" /></a>
													<div style="margin-left: 90px;">
														<p>
															<a href="#">福建移动省内流量包充值1GB手机流量充值2G3G4G自动充值当月 QB</a>
														</p>
														<p>
															<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/baozhang.png" /></a>
															<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/zhengpin.png" /></a>
														</p>
													</div>
												</div>
											</td>
											<td class="price-detail" style="width: 10%; ">
												<p>￥37.50</p>
											</td>
											<td class="num-detail" style="width: 5%;">
												<p>1</p>
											</td>
											<td class="gopt-detail" style="width: 12%;">
												<p>
													<a href="#">申请售后</a>
												</p>
												<p>
													<a href="#">投诉卖家</a>
												</p>
											</td>
											<td class="gpay-detail" style="width: 12%;">
												<p><strong style="font-weight: bolder;">￥37.50</strong></p>
												<p>(自动充值)</p>
												<p>
													<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/phoneorder.png" /></a>
												</p>
											</td>
											<td class="gopt-detail" style="width: 11%;">
												<p>
													<a href="#">交易成功</a>
												</p>
												<p>
													<a href="#">订单详情</a>
												</p>
											</td>
											<td class="deopt-detail" style="width: 11%;">
												<p>
													<a href="#">评价</a>
												</p>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="order">
								<div class="order-content">
									<div class="head">
										<div class="dingdan">
											<div class="time">
												<input type="checkbox" name="" id="" value="" /><span name="time" class="order-time">2017-05-26</span><span class="order-num">订单号:<span>19977223527415442</span></span>
											</div>
											<div class="merchant">
												<span>
												<img src="/tpShop/tpShop/Shop/Public/Home/img/merchant.png" />
												<a href="#">迪信通官方旗舰店</a>
												</span>
											</div>
											<div class="opt">
												<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/wanwan.png" /></a>
											</div>
											<div class="delete">
												<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/delete.png" /></a>
											</div>
										</div>
									</div>
									<table class="detail">
										<tr style="height: 108px;">
											<td class="good-detail " style="width: 38%;">
												<div class="mod-content">
													<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/good1.jpg" /></a>
													<div style="margin-left: 90px;">
														<p>
															<a href="#">福建移动省内流量包充值1GB手机流量充值2G3G4G自动充值当月 QB</a>
														</p>
														<p>
															<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/baozhang.png" /></a>
															<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/zhengpin.png" /></a>
														</p>
													</div>
												</div>
											</td>
											<td class="price-detail" style="width: 10%; ">
												<p>￥37.50</p>
											</td>
											<td class="num-detail" style="width: 5%;">
												<p>1</p>
											</td>
											<td class="gopt-detail" style="width: 12%;">
												<p>
													<a href="#">申请售后</a>
												</p>
												<p>
													<a href="#">投诉卖家</a>
												</p>
											</td>
											<td class="gpay-detail" style="width: 12%;">
												<p><strong style="font-weight: bolder;">￥37.50</strong></p>
												<p>(自动充值)</p>
												<p>
													<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/phoneorder.png" /></a>
												</p>
											</td>
											<td class="gopt-detail" style="width: 11%;">
												<p>
													<a href="#">交易成功</a>
												</p>
												<p>
													<a href="#">订单详情</a>
												</p>
											</td>
											<td class="deopt-detail" style="width: 11%;">
												<p>
													<a href="#">评价</a>
												</p>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="order">
								<div class="order-content">
									<div class="head">
										<div class="dingdan">
											<div class="time">
												<input type="checkbox" name="" id="" value="" /><span name="time" class="order-time">2017-05-26</span><span class="order-num">订单号:<span>19977223527415442</span></span>
											</div>
											<div class="merchant">
												<span>
												<img src="/tpShop/tpShop/Shop/Public/Home/img/merchant.png" />
												<a href="#">迪信通官方旗舰店</a>
												</span>
											</div>
											<div class="opt">
												<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/wanwan.png" /></a>
											</div>
											<div class="delete">
												<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/delete.png" /></a>
											</div>
										</div>
									</div>
									<table class="detail">
										<tr style="height: 108px;">
											<td class="good-detail " style="width: 38%;">
												<div class="mod-content">
													<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/good1.jpg" /></a>
													<div style="margin-left: 90px;">
														<p>
															<a href="#">福建移动省内流量包充值1GB手机流量充值2G3G4G自动充值当月 QB</a>
														</p>
														<p>
															<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/baozhang.png" /></a>
															<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/zhengpin.png" /></a>
														</p>
													</div>
												</div>
											</td>
											<td class="price-detail" style="width: 10%; ">
												<p>￥37.50</p>
											</td>
											<td class="num-detail" style="width: 5%;">
												<p>1</p>
											</td>
											<td class="gopt-detail" style="width: 12%;">
												<p>
													<a href="#">申请售后</a>
												</p>
												<p>
													<a href="#">投诉卖家</a>
												</p>
											</td>
											<td class="gpay-detail" style="width: 12%;">
												<p><strong style="font-weight: bolder;">￥37.50</strong></p>
												<p>(自动充值)</p>
												<p>
													<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/phoneorder.png" /></a>
												</p>
											</td>
											<td class="gopt-detail" style="width: 11%;">
												<p>
													<a href="#">交易成功</a>
												</p>
												<p>
													<a href="#">订单详情</a>
												</p>
											</td>
											<td class="deopt-detail" style="width: 11%;">
												<p>
													<a href="#">评价</a>
												</p>
											</td>
										</tr>
									</table>
								</div>
							</div>
							<div class="order">
								<div class="order-content">
									<div class="head">
										<div class="dingdan">
											<div class="time">
												<input type="checkbox" name="" id="" value="" /><span name="time" class="order-time">2017-05-26</span><span class="order-num">订单号:<span>19977223527415442</span></span>
											</div>
											<div class="merchant">
												<span>
												<img src="/tpShop/tpShop/Shop/Public/Home/img/merchant.png" />
												<a href="#">迪信通官方旗舰店</a>
												</span>
											</div>
											<div class="opt">
												<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/wanwan.png" /></a>
											</div>
											<div class="delete">
												<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/delete.png" /></a>
											</div>
										</div>
									</div>
									<table class="detail">
										<tr style="height: 108px;">
											<td class="good-detail " style="width: 38%;">
												<div class="mod-content">
													<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/good1.jpg" /></a>
													<div style="margin-left: 90px;">
														<p>
															<a href="#">福建移动省内流量包充值1GB手机流量充值2G3G4G自动充值当月 QB</a>
														</p>
														<p>
															<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/baozhang.png" /></a>
															<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/zhengpin.png" /></a>
														</p>
													</div>
												</div>
											</td>
											<td class="price-detail" style="width: 10%; ">
												<p>￥37.50</p>
											</td>
											<td class="num-detail" style="width: 5%;">
												<p>1</p>
											</td>
											<td class="gopt-detail" style="width: 12%;">
												<p>
													<a href="#">申请售后</a>
												</p>
												<p>
													<a href="#">投诉卖家</a>
												</p>
											</td>
											<td class="gpay-detail" style="width: 12%;">
												<p><strong style="font-weight: bolder;">￥37.50</strong></p>
												<p>(自动充值)</p>
												<p>
													<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/phoneorder.png" /></a>
												</p>
											</td>
											<td class="gopt-detail" style="width: 11%;">
												<p>
													<a href="#">交易成功</a>
												</p>
												<p>
													<a href="#">订单详情</a>
												</p>
											</td>
											<td class="deopt-detail" style="width: 11%;">
												<p>
													<a href="#">评价</a>
												</p>
											</td>
										</tr>
									</table>
								</div>
							</div>
						</div>

					</div>
					<div id="sub" class="clearfix">
						<aside class="sideMenu">
							<div class="menu-tree">
								<dl class="menu-item">
									<dt>全部功能</dt>
									<dd>
										<a href="#">我的购物车</a>
									</dd>
									<dd>
										<b class="jiantou">-</b>
										<a href="#" class="selected">已买到了的宝贝</a>
										<ul style="padding-left: 8px;">
											<li>
												<a href="#">我的拍卖</a>
											</li>
											<li>
												<a href="#">机票酒店保险</a>
											</li>
											<li>
												<a href="#">我的彩票</a>
											</li>
											<li>
												<a href="#">我的游戏</a>
											</li>
											<li>
												<a href="#">官方集运</a>
											</li>
										</ul>
									</dd>
									<dd><a href="#">购买过的店铺</a></dd>
									<dd>
										<b class="jiantou">-</b>
										<a href="#" >我的发票</a>
									</dd>
									<dd><a href="#">我的收藏</a></dd>
									<dd><a href="#">我的积分</a></dd>
									<dd><a href="#">评价管理</a></dd>
									<dd><b class="jiantou">-</b><a href="#">退款维权</a></dd>
									<dd><a href="#">我的足迹</a></dd>
									<dd><a href="#">流量钱包</a></dd>
								</dl>
								<dl>
									<dt>最近访问</dt>
									<dd><a href="#">天猫会员</a></dd>
									<dd><a href="#">喵先生</a></dd>
									<dd><a href="#">爱逛街</a></dd>
									<dd><a href="#">淘金币</a></dd>
								</dl>
							</div>
						</aside>
					</div>
				</div>
			</div>
			<div id="footer">
				<div id="tmall-copyright">
					<p class="tmall-info">
						<a href="#">关于天猫</a>
						<a href="#">帮助中心</a>
						<a href="#">开放平台</a>
						<a href="#">诚聘英才</a>
						<a href="#">联系我们</a>
						<a href="#">网站合作</a>
						<a href="#">法律声明及隐私政策</a>
						<a href="#">知识产权</a>
						<a href="#">廉政举报</a>
						<a href="#">规则意见征集</a>
					</p>
					<p class="otherlink">
						<a href="#">阿里巴巴集团</a>|
						<a href="#">天猫</a>|
						<a href="#">聚划算</a>|
						<a href="#">全球速卖通</a>|
						<a href="#">阿里巴巴国际交易市场</a>|
						<a href="#">1688</a>|
						<a href="#">阿里妈妈</a>|
						<a href="#">飞猪</a>|
						<a href="#">阿里云计算</a>|
						<a href="#">YunOS</a>|
						<a href="#">阿里通信</a>|
						<a href="#">万网</a>|
						<a href="#">高德</a>|
						<a href="#">UC</a>|
						<a href="#">友盟</a>|
						<a href="#">虾米</a>|
						<a href="#">阿里星球</a>|
						<a href="#">来往</a>|
						<a href="#">钉钉</a>|
						<a href="#">支付宝</a>|
						<a href="#">淘宝网</a>
					</p>
					<div class="footer-copyright">
						增值电信业务经营许可证：
						<a href="#">浙B2-20110446</a>
						网络文化经营许可证：
						<a href="#">浙网文[2015]0295-065号</a>
						<a href="#">12318举报</a>
						<br /> 互联网药品信息服务资质证书编号：
						<a href="#">浙-（经营性）-2017-0005</a>
						<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/jing.png" /> 浙公网安备 33010002000120号</a>
						<b>© 2003-2017 TMALL.COM 版权所有</b>
					</div>
					<div id="server-num">wormholesource011179166021.center.eu13.production</div>
				</div>
			</div>
		</div>
	</body>

</html>