<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>我的购物车</title>
	<link rel="stylesheet" type="text/css" href="/tpShop/Shop/Public/Home/css/buycar.css" />
	<link rel="stylesheet" type="text/css" href="/tpShop/Shop/Public/Home/css/iconfont.css" />
	<script src="/tpShop/Shop/Public/Home/js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="/tpShop/Shop/Public/Home/js/buycar.js" type="text/javascript" charset="utf-8"></script>
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
	<!--主体部分开始-->
	<div id="content">
		<div class="header">
			<div class="logo">
				<a href="#"></a>
			</div>
			<div class="search">
				<div class="inputbox">
					<div class="search-trigger">天猫</div>
					<input type="text" name=""  value="" />
				</div>
				<button type="submit" class="search-btn">搜索</button>
			</div>
		</div>
		<!--货品区开始-->
		<div class="cart">
			<div class="cart-filter-bar">
				<ul class="switch-cart">
					<li class="btn-switch-cart current">
						<a href="#">
							<em>全部商品</em>
							<span class="number"><?php echo count($goodsData)?></span>
							<span class="pipe"></span>
						</a>
					</li>
					<li class="btn-switch-cart disabled">
						<a href="#">
							<em>降价商品</em>
							<span class="number">0</span>
							<span class="pipe"></span>
						</a>
					</li>
					<li class="btn-switch-cart">
						<a href="#">
							<em>库存紧张</em>
							<span class="number">1</span>
							<span class="pipe"></span>
						</a>
					</li>
				</ul>
				<div class="cart-sum">
					<span>已选商品（不含运费）</span>
					<strong class="price"><em>￥<span class="account">0.00</span></em></strong>
					<a href="<?php echo u('Home/Submit/index');?>" class="submit-btn submit-btn-disabled">结 算</a>
				</div>
				<div class="wrap-line">
					<div class="floater" style="width: 123px; left: -1px;">
					</div>
				</div>
			</div>
			<!--货物主体开始-->
			<div class="cart-main">
				<!--标题开始-->
				<div class="cart-table-th">
					<div class="th th-chk">
						<div class="select-all">
							<div class="cart-checkbox ">
                                <input  type="checkbox" name="select-all"  />
							</div>
							全选
						</div>
					</div>
					<div class="th th-item">
						<div class="td-inner">商品信息</div>
					</div>
					<div class="th th-info">
						<div class="td-inner"></div>
					</div>
					<div class="th th-price">
						<div class="td-inner">
							单价
						</div>
					</div>
					<div class=" th th-amount">
						<div class="td-inner">
							数量
						</div>
					</div>
					<div class=" th th-sum">
						<div class="td-inner">
							金额
						</div>
					</div>
					<div class=" th th-op">
						<div class="td-inner">
							操作
						</div>
					</div>
				</div>
				<!--标题结束-->
				<!--订单开始-->
				<?php if(is_array($goodsData)): foreach($goodsData as $k=>$v): ?><div class="order-body clearfix">
						<!--商店开始-->
						<div class="shop">
							<div class="shop-info">
								<span class="shop-icon icon-B"></span>店铺：
								<a href="#"><?php echo ($v['brand']['bname']); ?></a>
								<span class="ww-light"><a href="#" class="ww-inline"></a></span>
							</div>
						</div>
						<!--商店结束-->
						<!--订单内容开始-->
						<div class="order-content">
							<!--内容主体开始-->
							<div class="bundle-main">
								<div class="clearfix item-body">
									<ul class="item-content clearfix">
										<li class="td td-chk">
											<div class="td-inner clearfix">
													<input type="checkbox" name="items[]" id="CheckBoxItem" />
											</div>
										</li>
										<li class="td td-item">
											<div class="td-inner">
												<div class="item-pic">
													<a href="<?php echo u('Home/Content/index',['gid'=>$v['id']]);?>"><img src="<?php echo ($v['pic']); ?>" /></a>
												</div>
												<div class="item-info">
													<div class="item-basic-info">
														<a href="<?php echo u('Home/Content/index',['gid'=>$v['id']]);?>" class="item-title"><?php echo ($v['name']); ?></a>
                                                        <a href="<?php echo u('Home/Content/index',['gid'=>$v['id']]);?>" class="price-now"><?php echo ($v['options']); ?></a>
													</div>
													<div class="item-other-info">
														<div class="promo-logos"></div>
														<div class="item-icon-list clearfix">
															<span class="item-icon"><img src="/tpShop/Shop/Public/Home/img/buycar/xcard.png"/></span>
															<a href="#" class="item-icon"><img src="/tpShop/Shop/Public/Home/img/buycar/bzfw.png" /></a>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="td td-info">
										</li>
										<li class="td td-price">
											<div class="td-inner">
												<div class="item-price">
													<div class="price-content">
														<div class="price-line">
                                                            <em>￥</em><em class="price-now"><?php echo ($v['price']); ?></em>
														</div>
													</div>
												</div>
											</div>
										</li>
										<li class="td td-amount">
											<div class="td-inner">
												<div class="amount-wrapper">
													<div class="item-amount">
														<a href="javascript:;" class="minus">-</a>
														<input type="text" class="text-amount" name=""  value="<?php echo ($v['num']); ?>" kk="<?php echo ($k); ?>" />
														<a href="javascript:;" class="plus">+</a>
													</div>
												</div>
											</div>
										</li>
										<li class="td td-sum">
											<div class="td-inner">
												￥<span class="number"><?php echo ($v['total']); ?></span>
											</div>
										</li>
										<li class="td td-op">
											<div class="td-inner">
												<a href="#">移入收藏夹</a>
												<a href="#" class="del" id="<?php echo ($k); ?>">删除</a>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<!--内容主体结束-->

						</div>
						<!--订单内容结束-->
					</div><?php endforeach; endif; ?>
				<!--订单结束-->
                <script>
                    $(function () {
                        //异步增加
                        $('.plus').click(function () {
                            var _this=$(this);
                            var kk=_this.siblings('input').attr('kk');
                            $.ajax({
                                type:'post',
                                url:"<?php echo u('add');?>",
                                data:{kk:kk},
                                dataType:'json',
                                success:function (res) {
                                    _this.parents('.item-content').find('.number').text(res.total);
                                    $('.account').text(res.total_price);
                                    if($('.select-all').find('.cart-checkbox-checked')){
                                        $('.sum').text(res.total_price);
                                    }
                                }
                            })
                        })
                        $('.minus').click(function () {
                            var _this=$(this);
                            var kk=_this.siblings('input').attr('kk');
                            $.ajax({
                                type:'post',
                                url:"<?php echo u('minus');?>",
                                data:{kk:kk},
                                dataType:'json',
                                success:function (res) {
                                    _this.parents('.item-content').find('.number').text(res.total);
                                    $('.account').text(res.total_price);
                                    if($('.select-all').find('.cart-checkbox-checked')){
                                        $('.sum').text(res.total_price);
                                    }
                                }
                            })
                        })
                        //异步删除
                        $('.del').click(function () {
                            var _this=$(this);
                            var k= $(this).attr('id');
                            $.ajax({
                                type:'post',
                                url:"<?php echo u('del');?>",
                                data:{k:k},
                                dataType:'json',
                                success:function (res) {
                                    _this.closest('.order-body').remove();
                                    $('.account').text(res.total_price);
                                    if($('.select-all').find('.cart-checkbox-checked')){
                                        $('.sum').text(res.total_price);
                                    }
                                }
                            })
                        })
                    })
                </script>
				<!--订单开始-->
				<!--<div class="order-body clearfix">
                    &lt;!&ndash;商店开始&ndash;&gt;
                    <div class="shop">
                        <div class="shop-info">
                            <div class="cart-checkbox "><input id="CheckBoxItems" type="checkbox" name="orders[]"  />
                                <label for="CheckBoxItems">勾选商品</label>
                            </div>

                            <span class="shop-icon icon-B"></span>店铺：
                            <a href="#">fzog旗舰店</a>
                            <span class="ww-light"><a href="#" class="ww-inline"></a></span>
                            <span class="shop-coupon-trigger">
                                <em>优惠券</em>
                                <span class="arrow"></span>
                            </span>
                        </div>
                    </div>
                    &lt;!&ndash;商店结束&ndash;&gt;
                    &lt;!&ndash;订单内容开始&ndash;&gt;
                    <div class="order-content">
                        &lt;!&ndash;头部优惠开始&ndash;&gt;
                        <div class="bundle-hd">
                            <div class="td-chk"></div>
                            <div class="bd-title">
                                满减优惠
                                <i class="icon-bd-title"></i>
                            </div>
                            <div class="bd-promos">
                                <div class="bd-has-promo">已享优惠
                                    <span class="">省￥750.00,包邮</span></div>
                                <div class="act-promo">
                                    <div class="act-promo-wrapper">
                                        满1000元,省50元,享包邮
                                    </div>
                                </div>

                            </div>
                        </div>
                        &lt;!&ndash;优惠结束&ndash;&gt;
                        &lt;!&ndash;内容主体开始&ndash;&gt;
                        <div class="bundle-main">
                            <div class="clearfix item-body">
                                <ul class="item-content clearfix">
                                    <li class="td td-chk">
                                        <div class="td-inner clearfix">
                                            <div class="cart-checkbox ">
                                                <input type="checkbox" name="items[]" id="CheckBoxItem" />
                                                <label for="CheckBoxItem">勾选商品</label>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="td td-item">
                                        <div class="td-inner">
                                            <div class="item-pic">
                                                <a href="#"><img src="/tpShop/Shop/Public/Home/img/buycar/itempic.jpg" /></a>
                                            </div>
                                            <div class="item-info">
                                                <div class="item-basic-info">
                                                    <a href="#" class="item-title">FZOG 男装白色结婚礼服新郎套装韩版修身气质单排扣长袖西服套装</a>
                                                </div>
                                                <div class="item-other-info">
                                                    <div class="promo-logos"></div>
                                                    <div class="item-icon-list clearfix">
                                                        <span class="item-icon"><img src="/tpShop/Shop/Public/Home/img/buycar/xcard.png"/></span>
                                                        <span class="item-icon"><img src="/tpShop/Shop/Public/Home/img/buycar/item_cod.png"/></span>
                                                        <a href="#" class="item-icon"><img src="/tpShop/Shop/Public/Home/img/buycar/seven.png" /></a>
                                                        <a href="#" class="item-icon"><img src="/tpShop/Shop/Public/Home/img/buycar/bzfw.png" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="td td-info">
                                    </li>
                                    <li class="td td-price">
                                        <div class="td-inner">
                                            <div class="item-price">
                                                <div class="price-content">
                                                    <div class="price-line">
                                                        <em class="price-original">￥25590.00</em>
                                                    </div>
                                                    <div class="price-line">
                                                        <em class="price-now">￥25590.00</em>
                                                    </div>
                                                </div>
                                                <div class="promo-main">
                                                    <div class="promo-content">
                                                        卖家促销<span class="arrow"></span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="td td-amount">
                                        <div class="td-inner">
                                            <div class="amount-wrapper">
                                                <div class="item-amount">
                                                    <a href="#" class="minus">-</a>
                                                    <input type="text" class="text-amount" name="" value="" />
                                                    <a href="#" class="plus">+</a>
                                                </div>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="td td-sum">
                                        <div class="td-inner">
                                            ￥<em class="number">30708.00</em>
                                        </div>
                                    </li>
                                    <li class="td td-op">
                                        <div class="td-inner">
                                            <a href="#">移入收藏夹</a>
                                            <a href="#">删除</a>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        &lt;!&ndash;内容主体结束&ndash;&gt;
                        &lt;!&ndash;促销开始&ndash;&gt;
                        <div class="poolorder-info">
                            <div class="wrap">
                                <span class="text">
                                <span class="satisfied">已享受“满1000.00元减1500.00元”，享包邮，</span>
                                <span>再买292.00元，“满31000.00元减1550.00元”，</span>享包邮，
                                <span>该店铺商品合计：</span>
                                <span class="price">￥30708.00</span>
                                </span>
                                <span class="go-pool">
                                <a href="#">去凑单</a>
                                <span class="arrow"></span>
                                </span>
                            </div>
                        </div>
                        &lt;!&ndash;促销结束&ndash;&gt;
                    </div>
                    &lt;!&ndash;订单内容结束&ndash;&gt;
                </div>-->
				<!--订单结束-->

			</div>
			<!--货物主体结束-->
			<!--结算开始-->
			<div class="float-bar show-selected-items">
				<!--已选商品预览开始-->
				<div class="group-wrapper">
					<div class="group-content">
						<div class="itme-lists single-group">
							<div class="scrollable-content clearfix">
								<div class="s-item">
									<a href="#" class="item-pic">
										<img src="/tpShop/Shop/Public/Home/img/buycar/itemthumb1.jpg" />
									</a>
								</div>
								<div class="s-item">
									<a href="#" class="item-pic">
										<img src="/tpShop/Shop/Public/Home/img/buycar/itemthumb2.jpg" />
									</a>
								</div>
							</div>
						</div>
					</div>
					<span class="arrow"></span>
				</div>
				<!--已选商品预览结束-->
				<div class="select-all">
					<div class="cart-checkbox">
						<input type="checkbox" name="select-all" id="CheckBoxShop" value="" />
					</div> 全选
				</div>
				<div class="operations">
					<a class="deleteSelect">
						删除
					</a>
					<a class="batchFav">
						移入收藏夹
					</a>
					<a class="batchShare">
						分享
					</a>
				</div>
				<div class="float-bar-right">
					<div class="amount-sum">
						<span class="txt">已选商品</span><em>0</em><span class="txt">件</span><span class="arrow"></span>
					</div>
					<div class="check-cod">
						<span class="icon-cod"></span>
						<span class="s-checkbox"></span> 货到付款
					</div>
					<div class="pipe"></div>
					<div class="price-sum">
						<span class="txt">合计（不含运费）：</span>
						<strong class="price"><em ><span class="total-symbol">&nbsp;</span><span class="sum">0.00</span></em></strong>
					</div>
					<div class="btn-area">
						<a href="<?php echo u('Home/Submit/index');?>" class="submit-btn submit-btn-disabled">
							<span>结算</span>
						</a>
					</div>
				</div>
			</div>
			<!--结算结束-->
		</div>
		<!--货品区结束-->
	</div>
	<!--主体结束-->
	<!--脚部开始-->
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
				<p class="about">
					<span><a href="#">关于淘宝</a></span>
					<span><a href="#">合作伙伴</a>
          	
          </span><span><a href="#">营销中心</a></span>
					<span><a href="#">廉正举报</a></span>
					<span><a href="#">联系客服</a></span>
					<span><a href="#">开放平台</a></span>
					<span><a href="#">诚征英才</a></span>
					<span><a href="#">联系我们</a></span>
					<span><a href="#">网站地图</a></span>
					<span><a href="#">法律声明及隐私权政策</a></span>
					<span><a href="#">知识产权</a></span>
					<b>|</b> <em>© 2003-2017 Taobao.com 版权所有</em>
				</p>
				增值电信业务经营许可证：
				<a href="#">浙B2-20110446</a>
				<b>|</b> 网络文化经营许可证：
				<a href="#">浙网文[2015]0295-065号</a>
				<a href="#">12318举报</a>
				<br /> 互联网药品信息服务资质证书编号：
				<a href="#">浙-（经营性）-2017-0005</a>
				<br />
				<a href="#"><img src="/tpShop/Shop/Public/Home/img/jing.png" /> 浙公网安备 33010002000120号</a>
			</div>
			<div id="server-num">wormholesource011179166021.center.eu13.production</div>
		</div>
	</div>
</div>

</html>