<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

	<head>
		<meta charset="UTF-8">
		<title>天猫注册</title>
		<link rel="stylesheet" type="text/css" href="/tpShop/tpShop/Shop/Public/Home/css/register.css" />
		<link rel="stylesheet" type="text/css" href="/tpShop/tpShop/Shop/Public/Home/css/iconfont.css" />
	</head>

	<body>
		<div id="registerpaper">
			<!--头部-->
			<div class="header">
				<a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/loginmall.png" /></a>
			</div>
			<!--主体-->
			<div class="content">
				<div class="inner">

					<div class="register-form">
						<div class="registerbox">
							<div class="bd">
								<div class="static-form">
									<div class="title">免费注册</div>
									<form action="" method="post">
										<div class="username-field">
											帐号: <span class="user"><i class="iconfont icon-user"></i></span><input class="username" type="text" name="username" id="username" value="" required/>
											<br />密码: <span class="password"><i class="iconfont icon-password"></i></span><input class="username" type="password" name="password" id="password" value="" />
											<br />确认: <span class="confirm"><i class="iconfont icon-password"></i></span><input class="username" type="password" name="password1" id="password1" value="" />
										</div>
										<button type="submit" class="submit">注册</button>
									</form>
								</div>
							</div>
							<a href="<?php echo u('Home/User/login');?>" class="toregister">已有帐号去登录</a>
						</div>
					</div>
				</div>
			</div>
			<!--脚部-->
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