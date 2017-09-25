<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="utf-8" />
		<title>天猫tmall.com--上天猫，就够了</title>
		<link rel="stylesheet" type="text/css" href="/tpShop/tpShop/Shop/Public/Home/css/index.css" />
		<link rel="stylesheet" type="text/css" href="/tpShop/tpShop/Shop/Public/Home/css/iconfont.css" />
		<script src="/tpShop/tpShop/Shop/Public/Home/js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
		<script src="/tpShop/tpShop/Shop/Public/Home/js/index.js" type="text/javascript" charset="utf-8"></script>
	</head>

	<body>
		<!--顶部开始-->
		<div id="site-nav">
			<div class="wrapper clearfix">
				<div class="login-info">
                    <?php if($_SESSION['user']): ?><span class="login">Hi,<a href="#"><?php echo ($_SESSION['user']['username']); ?></a></span>
                        <span class="login">积分<a href="#"  style="color: red;font-weight: 700;">22</a></span>
                        <span class="login">消息<a href="#" style="color: red;font-weight: 700;">4</a></span>
                        <span class="login"><a href="<?php echo u('Home/User/out');?>">退出</a></span>
                        <?php else: ?>
					<span class="welcome">喵，欢迎来天猫</span>
                    <span class="login"><a href="<?php echo u('Home/User/login');?>">请登录</a></span>
                        <span class="login"><a href="<?php echo u('Home/User/register');?>">免费注册</a></span><?php endif; ?>
				</div>
				<div class="quick-menu">
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
					<span class="attention"><i class="iconfont icon-aixin aixin"></i><a href="#">我关注的品牌</a></span>
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
					<div class="phone">|<i class="iconfont icon-shouji shouji"></i>
						<a href="#">手机版</a>
						<div class="qrcode">
							<div class="content"></div>
							<p>扫一扫，定制我的天猫！</p>
							<b></b>
						</div>
					</div>
					<span class="net"><a href="#">淘宝网</a></span>
					<span class="net"><a href="#">企业购</a></span>
					<div class="menu">
						<a href="#">商家支持<b></b></a>
						<div class="support">
							<ul>
								<li>
									<h3>商家:</h3>
									<a href="#">商家中心</a>
									<a href="#">商家入驻</a>
									<a href="#">运营服务</a>
									<a href="#">商家品控</a>
									<a href="#">商家工具</a>
									<a href="#">商家规则</a>
									<a href="#">天猫智库</a>
									<a href="#">喵言喵语</a>
								</li>
								<li>
									<h3>帮助:</h3>
									<a href="#">帮助中心</a>
								</li>
							</ul>
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
		<!--顶部结束-->
		<!--头部开始-->
		<div id="header">
			<div class="content">
				<div class="header-banner">
					<div></div>
				</div>
				<div id="search">
					<form class="search-form clearfix">
						<div class="search-input clearfix">
							<div class="sousuo">
								<input type="text" name="sousuo" id="sou" value="" title="请输入搜索文字" placeholder="全球美食精选" />
							</div>
						</div>
						<button type="submit">搜索</button>
					</form>
					<ul class="hot-query">
						<li class="high-light">
							<a href="#">t恤男</a>
						</li>
						<li>
							<a href="#">连衣裙</a>
						</li>
						<li>
							<a href="#">夏凉被</a>
						</li>
						<li class="high-light">
							<a href="#">电动牙刷</a>
						</li>
						<li>
							<a href="#">客厅灯</a>
						</li>
						<li>
							<a href="#">防晒衣</a>
						</li>
						<li class="high-light">
							<a href="#">凉鞋</a>
						</li>
						<li>
							<a href="#">双肩包</a>
						</li>
						<li class="high-light">
							<a href="#">口红</a>
						</li>
					</ul>
				</div>
				<div class="tmall">
					<img src="/tpShop/tpShop/Shop/Public/Home/img/tmall.png" />
				</div>
			</div>
		</div>
		<!--头部结束-->
		<!--主体部分开始-->
		<div id="content">
			<!--导航开始-->
			<!--右导航-->
			<div class="main-nav">
				<div class="nav-con0">
					<div class="nav-con1">
						<div class="nav-con2 clearfix">
							<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/tmshop.png" />
								<div class="hover-pic"></div>
							</a>
							<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/tmworld.png" />
								<div class="hover-pic"></div>
							</a>
							<a href="#">天猫会员
								<div class="hover-pic"></div>
							</a>
							<a href="#">品牌街
								<div class="hover-pic"></div>
							</a>
							<a href="#">电器城
								<div class="hover-pic"></div>
							</a>
							<a href="#">医药馆
								<div class="hover-pic"></div>
							</a>
							<a href="#">营业厅
								<div class="hover-pic"></div>
							</a>
							<a href="#">魅力惠
								<div class="hover-pic"></div>
							</a>
							<a href="#">飞猪旅行
								<div class="hover-pic"></div>
							</a>
							<a href="#">苏宁易购
								<div class="hover-pic"></div>
							</a>
						</div>
					</div>
				</div>
			</div>
			<!--左菜单-->
			<div class="category">
				<div class="category-inner">
					<div class="category-type"><i class="iconfont icon-liebiao  liebiao"></i>
						<div class="text">商品分类</div>
					</div>
					<div class="category-tab">
						<ul class="category-nav clearfix">
                            <?php if(is_array($parentCate)): foreach($parentCate as $k=>$v): ?><li class="nav-item item<?php echo ($k); ?>">
									&nbsp;&nbsp;&nbsp;&nbsp;
                                    <?php if(is_array($v)): foreach($v as $key=>$vv): ?><a href="<?php echo u('Home/Lists/index',['cid'=>$vv['cid']]);?>"><?php echo ($vv['cname']); ?></a>&nbsp;&nbsp;&nbsp;&nbsp;<?php endforeach; endif; ?>
                                    <div class="tab-content">
                                        <div class=" pannel-con pannel<?php echo ($k); ?>">
                                            <div class="hot-word-con">
                                                <?php if(is_array($sonCate[$k])): foreach($sonCate[$k] as $key=>$sv): ?><div class="hot-word-line">
                                                        <div class="line-title">
                                                            <div class="line-text"><?php echo ($sv['cname']); ?></div>
                                                            <i class="iconfont icon-youjiantou"></i></div>
                                                        <div class="line-con">
                                                            <?php if(is_array($grandCate[$k])): foreach($grandCate[$k] as $key=>$gv): if($gv['pid']==$sv['cid']): ?><a href="<?php echo u('Home/Lists/index',['cid'=>$gv['cid']]);?>" class="hot-word"><?php echo ($gv['cname']); ?></a><?php endif; endforeach; endif; ?>
                                                            <div class="sperate clearfix"></div>
                                                        </div>
                                                    </div><?php endforeach; endif; ?>
                                            </div>
										<div class="logo-con">
											<div class="logo-top">
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/goelia.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/meters.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/olain.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/chuyu.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/teenie.png" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/bershka.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/pull.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/bread.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/mytemo.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/ports.png" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/greel.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/manifen.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/threegun.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/aimer.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/miion.jpg" /></a>
												<a href="#" class="logo"><img src="/tpShop/tpShop/Shop/Public/Home/img/will.jpg" /></a>
											</div>
											<div class="logo-bottom">
												<a href="#" class="activity clearfix">
													<img src="/tpShop/tpShop/Shop/Public/Home/img/vvvv.jpg" style="width: 189px;
	height: 87px;" />
												</a>
											</div>
										</div>
									</div>
								</div>
							</li><?php endforeach; endif; ?>
						</ul>
					</div>

				</div>
				<!--轮播图开始-->
				<div class="lunbo">
					<div class="slider">
						<div class="slider-pannel" style="background-color: rgb(0, 0, 0); position: absolute; z-index: 1; opacity: 1; display: block;">
							<div class="banner-outcon">
								<div class="banner-con">
									<div class="banner-con2">
										<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/part1.jpg" /></a>
										<a href="#" class="small-banner0"><img src="/tpShop/tpShop/Shop/Public/Home/img/part1small.png" /></a>
										<a href="#" class="small-banner1"><img src="/tpShop/tpShop/Shop/Public/Home/img/part1small2.png" /></a>
									</div>
								</div>
							</div>
						</div>
						<div class="slider-pannel" style="background-color: rgb(232, 232, 232)none repeat scroll 0% 0%; position: absolute;">
							<div class="banner-outcon">
								<div class="banner-con">
									<div class="banner-con2">
										<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/part2.jpg" /></a>
									</div>
								</div>
							</div>
						</div>
						<div class="slider-pannel" style="background-color: rgb(233, 100, 143);position: absolute;">
							<div class="banner-outcon">
								<div class="banner-con">
									<div class="banner-con2">
										<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/part3.jpg" /></a>
										<a href="#" class="small-banner0"><img src="/tpShop/tpShop/Shop/Public/Home/img/part3small0.png" /></a>
										<a href="#" class="small-banner1"><img src="/tpShop/tpShop/Shop/Public/Home/img/part3small1.png" /></a>
									</div>
								</div>
							</div>
						</div>
						<div class="slider-pannel" style="background-color: rgb(232, 232, 232);position: absolute;">
							<div class="banner-outcon">
								<div class="banner-con">
									<div class="banner-con2">
										<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/part4.jpg" /></a>
									</div>
								</div>
							</div>
						</div>
						<div class="slider-pannel" style="background-color: rgb(226, 15, 96);position: absolute;">
							<div class="banner-outcon">
								<div class="banner-con">
									<div class="banner-con2">
										<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/part5.jpg" /></a>
										<a href="#" class="small-banner0"><img src="/tpShop/tpShop/Shop/Public/Home/img/part5small0.png" /></a>
										<a href="#" class="small-banner1"><img src="/tpShop/tpShop/Shop/Public/Home/img/part5small1.png" /></a>
									</div>
								</div>
							</div>
						</div>
						<div class="slider-pannel" style="background-color: rgb(175, 253, 200);position: absolute;">
							<div class="banner-outcon">
								<div class="banner-con">
									<div class="banner-con2">
										<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/part6.png" /></a>
										<a href="#" class="small-banner0"><img src="/tpShop/tpShop/Shop/Public/Home/img/part6small0.png" /></a>
										<a href="#" class="small-banner1"><img src="/tpShop/tpShop/Shop/Public/Home/img/part6small1.png" /></a>
									</div>
								</div>
							</div>
						</div>

					</div>
					<div class="slider-nav">
						<li class="selected"></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
						<li></li>
					</div>
				</div>

				<!--轮播图结束-->
			</div>

			<!--导航结束-->
			<div class="j_brand">
				<div class="module-body clearfix">
					<a href="#" class="brand-item"><img src="/tpShop/tpShop/Shop/Public/Home/img/j_brand1.jpg" /></a>
					<a href="#" class="brand-item big"><img src="/tpShop/tpShop/Shop/Public/Home/img/j_brand2.jpg" /></a>
					<a href="#" class="brand-item"><img src="/tpShop/tpShop/Shop/Public/Home/img/j_brand3.jpg" /></a>
					<a href="#" class="brand-item"><img src="/tpShop/tpShop/Shop/Public/Home/img/j_brand4.jpg" /></a>
				</div>
			</div>

			<div class="brand-con">
				<div class="module-body">
					<div class="brand-tmall">
						<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/brandtmall.jpg" /></a>
					</div>
					<div class="brand-list">
						<ul class="brandul">
                            <?php if(is_array($brandData)): foreach($brandData as $key=>$v): ?><li class="brand-item">
								<div class="brand-img">
									<img src="<?php echo ($v['brandlogo']); ?>" />
								</div>
								<div class="brand-mask">
									<i class="iconfont icon-aixin"></i>
									<div class="concern">关注人数 345.6万</div>
									<div class="enter">
										<a href="#">点击进入</a>
									</div>
								</div>
							</li><?php endforeach; endif; ?>

						</ul>
					</div>
				</div>

			</div>

			<!--广告-->
			<div class="add">
				<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/add.jpg" /></a>
			</div>
			<!--广告结束-->
			<!--一楼美丽人生-->
			<div class="floor fl1">
				<div class="floor-con">
					<i class="iconfont icon-shutiao1" style="font-weight: 700;
	color: #EA5F8D;"></i>
					<div class="floor-name">美丽人生</div>
					<div class="sub-name">FASHION & BEAUTY</div>
					<div class="content">
						<div class="word-con">
							<?php if(is_array($cateDataon)): foreach($cateDataon as $key=>$v): ?><a href="#" class="hot-word"><?php echo ($v['cname']); ?></a><?php endforeach; endif; ?>
						</div>
						<!--便利数据可用-->
						<div class="">
							<a href="#" class="con-left">
								<img src="/tpShop/tpShop/Shop/Public/Home/img/fl1left.jpg" />
								<div class="one btn-title">
									<ul>
										<li class="slide-item">大牌超值满减 ></li>
										<li class="slide-item">内衣处穿新时尚 ></li>
										<li class="slide-item">抢潮流首发款 ></li>
									</ul>
								</div>
								<div class="title-con">
									<div class="title">家居嘉年华</div>
									<div class="sub-title">指定款第二件半价</div>
									<div class="decoration"></div>
								</div>
							</a>
							<div class="con-middle">
                                <?php if(is_array($goodsData)): foreach($goodsData as $key=>$v): ?><a href="<?php echo u('Home/Content/index',['gid'=>$v['gid']]);?>" class="gezi yige">
									<div class="title"><?php echo ($v['gname']); ?></div>
									<img src="<?php echo ($v['pic']); ?>" alt="" />
								</a><?php endforeach; endif; ?>
							</div>
							<div class="con-right">
                                <?php if(is_array($goodsrData)): foreach($goodsrData as $key=>$v): ?><a href="<?php echo u('Home/Content/index',['gid'=>$v['gid']]);?>" class="gezi xiaogezi">
									<div class="title"><?php echo ($v['gname']); ?></div>
									<img src="<?php echo ($v['pic']); ?>" />
								</a><?php endforeach; endif; ?>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!--美丽人生结束-->
			<!--二楼潮电酷玩-->
			<div class="floor fl2">
				<div class="floor-con">
					<i class="iconfont icon-shutiao1" style="font-weight: 700;
	color: #0AA6E8;"></i>
					<div class="floor-name">潮流电玩</div>
					<div class="sub-name">ELECTRONICS</div>
					<div class="content">
						<div class="word-con">

                            <?php if(is_array($cateDatatw)): foreach($cateDatatw as $key=>$v): ?><a href="#" class="hot-word"><?php echo ($v['cname']); ?></a><?php endforeach; endif; ?>
						</div>

						<!--便利数据可用-->
						<div class="">
							<a href="#" class="con-left">
								<img src="/tpShop/tpShop/Shop/Public/Home/img/fl2.jpg" />
								<div class="two btn-title">
									<ul>
										<li class="slide-item">大牌超值满减 ></li>
										<li class="slide-item">内衣处穿新时尚 ></li>
										<li class="slide-item">抢潮流首发款 ></li>
									</ul>
								</div>
								<div class="title-con" style="background-color: #0AA6E8;">
									<div class="title">家居嘉年华</div>
									<div class="sub-title">指定款第二件半价</div>
									<div class="decoration"></div>
								</div>
							</a>
                                <div class="con-middle">
								<a href="<?php echo u('Home/Content/index',['gid'=>$goodsDatatw['gid']]);?>" class="gezi twoge">
									<div class="title"><?php echo ($goodsDatatw['gname']); ?></div>
									<div class="second-title">618先享会</div>
									<img src="<?php echo ($goodsDatatw['pic']); ?>" alt="" />
								</a>
                                    <?php if(is_array($goodsmDatatw)): foreach($goodsmDatatw as $key=>$v): ?><a href="<?php echo u('Home/Content/index',['gid'=>$v['gid']]);?>" class="gezi yige">
									<div class="title"><?php echo ($v['gname']); ?></div>
									<img src="<?php echo ($v['pic']); ?>" alt="" />
								</a><?php endforeach; endif; ?>

							</div>
							<div class="con-right">
                                <?php if(is_array($goodsrDatatw)): foreach($goodsrDatatw as $key=>$v): ?><a href="<?php echo u('Home/Content/index',['gid'=>$v['gid']]);?>" class="gezi yige">
									<div class="title"><?php echo ($v['gname']); ?></div>
									<img src="<?php echo ($v['pic']); ?>" />
								</a><?php endforeach; endif; ?>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!--潮电酷玩结束-->
			<!--广告-->
			<div class="add clearfix">
				<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/add2.jpg" /></a>
			</div>
			<!--广告结束-->
			<!--三楼居家生活-->
			<div class="floor fl3">
				<div class="floor-con">
					<i class="iconfont icon-shutiao1" style="font-weight: 700;
	color: #64C333;"></i>
					<div class="floor-name">居家生活</div>
					<div class="sub-name">GROCERY & HEALTH</div>
					<div class="content">
						<div class="word-con">
                            <?php if(is_array($cateDatath)): foreach($cateDatath as $key=>$v): ?><a href="#" class="hot-word"><?php echo ($v['cname']); ?></a><?php endforeach; endif; ?>
						</div>
						<!--便利数据可用-->
						<div class="">
							<a href="#" class="con-left">
								<img src="/tpShop/tpShop/Shop/Public/Home/img/fl3.jpg" />
								<div class="three btn-title">
									<ul>
										<li class="slide-item">大牌超值满减 ></li>
										<li class="slide-item">内衣处穿新时尚 ></li>
										<li class="slide-item">抢潮流首发款 ></li>
									</ul>
								</div>
								<div class="title-con" style="background-color: #64C333;">
									<div class="title">家居嘉年华</div>
									<div class="sub-title">指定款第二件半价</div>
									<div class="decoration"></div>
								</div>
							</a>
							<div class="con-middle">
                                <?php if(is_array($goodsDatath)): foreach($goodsDatath as $key=>$v): ?><a href="<?php echo u('Home/Content/index',['gid'=>$v['gid']]);?>" class="gezi yige">
                                        <div class="title"><?php echo ($v['gname']); ?></div>
                                        <img src="<?php echo ($v['pic']); ?>" alt="" />
                                    </a><?php endforeach; endif; ?>
                            </div>
                            <div class="con-right">
                                <?php if(is_array($goodsrDatath)): foreach($goodsrDatath as $key=>$v): ?><a href="<?php echo u('Home/Content/index',['gid'=>$v['gid']]);?>" class="gezi xiaogezi">
                                        <div class="title"><?php echo ($v['gname']); ?></div>
                                        <img src="<?php echo ($v['pic']); ?>" />
                                    </a><?php endforeach; endif; ?>
							</div>
						</div>
					</div>
				</div>

			</div>
			<!--居家生活结束-->
			<!--4楼打造爱巢-->
		<!--	<div class="floor fl4">
				<div class="floor-con">
					<i class="iconfont icon-shutiao1" style="font-weight: 700;
	color: #F15453;"></i>
					<div class="floor-name">打造爱巢</div>
					<div class="sub-name">HOME</div>
					<div class="content">
						<div class="word-con">
							<a href="#" class="hot-word">连衣裙</a>
							<a href="#" class="hot-word">T恤男</a>
							<a href="#" class="hot-word">美容护肤</a>
							<a href="#" class="hot-word">休闲男鞋</a>
							<a href="#" class="hot-word">黄金项链</a>
							<a href="#" class="hot-word">单鞋</a>
							<a href="#" class="hot-word">女包</a>
							<a href="#" class="hot-word">文胸</a>
							<a href="#" class="hot-word">大牌腕表</a>
						</div>
						&lt;!&ndash;便利数据可用&ndash;&gt;
						<div class="">
							<a href="#" class="con-left">
								<img src="/tpShop/tpShop/Shop/Public/Home/img/fl4.jpg" />
								<div class="three btn-title">
									<ul>
										<li class="slide-item">大牌超值满减 ></li>
										<li class="slide-item">内衣处穿新时尚 ></li>
										<li class="slide-item">抢潮流首发款 ></li>
									</ul>
								</div>
								<div class="title-con" style="background-color: #F15453;">
									<div class="title">家居嘉年华</div>
									<div class="sub-title">指定款第二件半价</div>
									<div class="decoration"></div>
								</div>
							</a>
							<div class="con-middle">
								<a href="#" class="gezi yige">
									<div class="title">简约显瘦休闲短裤</div>
									<div class="subtitle">潮牌大码舒适休闲短裤</div>
									<img src="/tpShop/tpShop/Shop/Public/Home/img/fl4mid.jpg" alt="" />
								</a>
								<a href="#" class="gezi yige">
									<div class="title">简约显瘦休闲短裤</div>
									<div class="subtitle">潮牌大码舒适休闲短裤</div>
									<img src="/tpShop/tpShop/Shop/Public/Home/img/fl4mid.jpg" alt="" />
								</a>
								<a href="#" class="gezi yige">
									<div class="title">简约显瘦休闲短裤</div>
									<div class="subtitle">潮牌大码舒适休闲短裤</div>
									<img src="/tpShop/tpShop/Shop/Public/Home/img/fl4mid.jpg" alt="" />
								</a>
								<a href="#" class="gezi yige">
									<div class="title">简约显瘦休闲短裤</div>
									<div class="subtitle">潮牌大码舒适休闲短裤</div>
									<img src="/tpShop/tpShop/Shop/Public/Home/img/fl4mid.jpg" alt="" />
								</a>
								<a href="#" class="gezi yige">
									<div class="title">简约显瘦休闲短裤</div>
									<div class="subtitle">潮牌大码舒适休闲短裤</div>
									<img src="/tpShop/tpShop/Shop/Public/Home/img/fl4mid.jpg" alt="" />
								</a>
								<a href="#" class="gezi yige">
									<div class="title">简约显瘦休闲短裤</div>
									<div class="subtitle">潮牌大码舒适休闲短裤</div>
									<img src="/tpShop/tpShop/Shop/Public/Home/img/fl4mid.jpg" alt="" />
								</a>
							</div>
							<div class="con-right">
								<a href="#" class="gezi xxiaogezi">
									<div class="title">凉鞋新品精选</div>
									<div class="subtitle">商场同款清凉一夏</div>
									<img src="/tpShop/tpShop/Shop/Public/Home/img/fl4rig.jpg" />
								</a>
								<a href="#" class="gezi xxiaogezi">
									<div class="title">凉鞋新品精选</div>
									<div class="subtitle">商场同款清凉一夏</div>
									<img src="/tpShop/tpShop/Shop/Public/Home/img/fl4rig.jpg" />
								</a>
								<a href="#" class="gezi xxiaogezi">
									<div class="title">凉鞋新品精选</div>
									<div class="subtitle">商场同款清凉一夏</div>
									<img src="/tpShop/tpShop/Shop/Public/Home/img/fl4rig.jpg" />
								</a>
								<a href="#" class="gezi xxiaogezi">
									<div class="title">凉鞋新品精选</div>
									<div class="subtitle">商场同款清凉一夏</div>
									<img src="/tpShop/tpShop/Shop/Public/Home/img/fl4rig.jpg" />
								</a>
							</div>
						</div>
					</div>
				</div>

			</div>-->
			<!--打造爱巢结束-->
			<!--猜你喜欢开始-->
			<div class="cnxh">
				<h2 class="title">
					<span class="text"><i class="iconfont icon-aixin" style="color: #FE2452;"></i>猜你喜欢</span>
				</h2>
				<div class="module-content">
					<ul class="cnxh-line">
                        <?php if(is_array($posibleLike)): foreach($posibleLike as $key=>$v): ?><li class="cnxh-item">
							<a href="<?php echo u('Home/Content/index',['gid'=>$v['gid']]);?>" class="item">
								<span class="item-pic">
								<img src="<?php echo ($v['pic']); ?>"/>
							</span>
								<span class="item-info">
								<span class="item-desc">
									<em class="item-name" title="【12期免息 现货速发】Huawei/华为 Mate 9 64GB智能手机官方"><?php echo ($v['gname']); ?></em>
								</span>
								<span class="item-detail">
									<span class="item-price">￥<?php echo ($v['shopprice']); ?></span>
								</span>
								</span>
							</a>
						</li><?php endforeach; endif; ?>
					</ul>
				</div>
			</div>
            <div>
			<div class="tm-end"></div>
            </div>
			<!--猜你喜欢结束-->
		</div>
		<!--主体部分结束-->
		<!--脚部开始-->
		<div id="footer">
			<div id="tmall-ensure">
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
				<a href="#"></a>
			</div>
			<div id="tmall-desc">
				<dl>
					<dt><span>购物指南</span></dt>
					<dd>
						<a href="#">免费注册</a>
						<a href="#">开通支付宝</a>
						<a href="#">支付宝充值</a>
					</dd>
				</dl>
				<dl>
					<dt><span>购物指南</span></dt>
					<dd>
						<a href="#">免费注册</a>
						<a href="#">开通支付宝</a>
						<a href="#">支付宝充值</a>
					</dd>
				</dl>
				<dl>
					<dt><span>支付方式</span></dt>
					<dd>
						<a href="#">快捷支付</a>
						<a href="#">信用卡</a>
						<a href="#">余额宝</a>
						<a href="#">蚂蚁花呗</a>
						<a href="#">货到付款</a>
					</dd>
				</dl>
				<dl>
					<dt><span>商家服务</span></dt>
					<dd>
						<a href="#">商家入驻</a>
						<a href="#">商家中心</a>
						<a href="#">天猫智库</a>
						<a href="#">天猫规则</a>
						<a href="#">物流服务</a>
						<a href="#">喵言喵语</a>
						<a href="#">运营服务</a>
					</dd>
				</dl>
				<dl id="mobile">
					<dt><span>手机天猫</span></dt>
					<dd>
						<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/mobile.png" /></a>
					</dd>
				</dl>
			</div>
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
					<p class="footer-img" style="padding-top:10px; ">
						<a href="#" style="margin-right:10px"><img src="/tpShop/tpShop/Shop/Public/Home/img/zhejiang.jpg" /></a>
						<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/xuke.jpg" /></a>
					</p>
				</div>
				<div id="server-num">wormholesource011179166021.center.eu13.production</div>
			</div>
		</div>
		<!--脚部结束-->
		<!--右边菜单-->
		<div id="right-menu">
			<div class="mui-tab">
				<div class="miao"></div>
				<div class="tab-tip tab1" style="top:0px;right: 70px; opacity: 0; display: none;">会员权益
					<div class="arr toparr">◆</div>
				</div>
				<div class="buycar">
					<div class="logo"></div>
					<div class="car-text">
						购物车
					</div>
				</div>
				<div class="qian"></div>
				<div class="tab-tip tab2" style="top:140px;right: 70px; opacity: 0; display: none;">会员权益
					<div class="arr toparr">◆</div>
				</div>
				<div class="xin"></div>
				<div class="tab-tip tab3" style=" top:185px; right: 70px; opacity: 0; display: none;">会员权益
					<div class="arr toparr">◆</div>
				</div>
				<div class="shouchang"></div>
				<div class="tab-tip tab4" style="top:235px;right: 70px; opacity: 0; display: none;">会员权益
					<div class="arr toparr">◆</div>
				</div>
				<div class="shijian"></div>
				<div class="tab-tip tab5" style="top:275px;right: 70px; opacity: 0; display: none;">会员权益
					<div class="arr toparr">◆</div>
				</div>
				<div class="chong"></div>
				<div class="tab-tip tab6" style="top:320px;right: 70px; opacity: 0; display: none;">会员权益
					<div class="arr toparr">◆</div>
				</div>
			</div>
		</div>
		<!--右菜单结束-->
		<!--跟随菜单开始-->
		<div id="menu">
			<div class="menu-container">
				<div class="tmall">
					<i class="iconfont icon-tmall"></i>
					<i class="iconfont icon-tianmao"></i>
				</div>
				<div class="mall-search">
					<form class="search-form clearfix">
						<div class="search-input clearfix">
							<div class="sousuo">
								<input type="text" name="sousuo" id="sou" value="" title="请输入搜索文字" placeholder="精品咖啡机 非买不可" />
							</div>
						</div>
						<button type="submit">搜索</button>
					</form>
				</div>
			</div>
		</div>
		<!--跟随菜单结束-->
		<!--电梯开始-->
		<ul id="elevate">
			<li class="daohang">导航</li>
			<li>美丽人生</li>
			<li>潮流电玩</li>
			<li>居家生活</li>
			<!--<li>打造爱巢</li>-->
			<li id="goTop"><div><span></span></div>顶部</li>
		</ul>
		<!--电梯结束-->
	</body>

</html>