<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html> <html> <head> <meta charset="utf-8" /> <title>夏-新品推荐-精品男装-天猫Tmall.com-理想生活上天猫</title> <link rel="stylesheet" type="text/css" href="/tpShop/tpShop/Shop/Public/Home/css/list.css" /> <link rel="stylesheet" type="text/css" href="/tpShop/tpShop/Shop/Public/Home/css/iconfont.css" /> <script src="/tpShop/tpShop/Shop/Public/Home/js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script> <script src="/tpShop/tpShop/Shop/Public/Home/js/list.js" type="text/javascript" charset="utf-8"></script> </head> <body> <div id="mallPage"> <!--顶部开始--> <div id="site-nav"> <div class="wrapper clearfix"> <div class="login-info"> <?php if($_SESSION['user']): ?><span class="login">Hi,<a href="#"><?php echo ($_SESSION['user']['username']); ?></a></span> <span class="login">积分<a href="#"  style="color: red;font-weight: 700;">22</a></span> <span class="login">消息<a href="#" style="color: red;font-weight: 700;">4</a></span> <span class="login"><a href="<?php echo u('Home/User/out');?>">退出</a></span> <?php else: ?> <span class="welcome">喵，欢迎来天猫</span> <span class="login"><a href="<?php echo u('Home/User/login');?>">请登录</a></span> <span class="login"><a href="<?php echo u('Home/User/register');?>">免费注册</a></span><?php endif; ?> </div> <div class="quick-menu"> <div class="menu"> <a href="#">我的淘宝<b></b></a> <div class="baobei"> <p> <a href="<?php echo u('Home/Order/index');?>">已买到的宝贝</a> </p>
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
        <div class="tamll">
            <div class="mlogo">
                <a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/tmallleft.png" /></a>
            </div>
        </div>
        <div class="header-extra">
            <div class="header-banner">
                <a href="#"><img src="/tpShop/tpShop/Shop/Public/Home/img/rsrr.jpg" width="190" height="80" /></a>
            </div>
            <div id="mallSearch">
                <div class="mallSearch-input clearfix">
                    <div class="defaultSearch">
                        <div class="inputbox">
                            <input type="text" name="" id="mq" value="" />
                            <button type="submit">
                                搜索
                            </button>
                        </div>

                    </div>
                </div>
                <ul class="hot-query">
                    <li style="border: none;">
                        <a href="#">短袖</a>
                    </li>
                    <li>
                        <a href="#">t恤</a>
                    </li>
                    <li>
                        <a href="#">裙</a>
                    </li>
                    <li>
                        <a href="#">2017夏</a>
                    </li>
                    <li>
                        <a href="#">irud</a>
                    </li>
                    <li>
                        <a href="#">上衣女夏</a>
                    </li>
                    <li>
                        <a href="#">t恤夏</a>
                    </li>
                    <li>
                        <a href="#">连衣裙小清新</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--头部结束-->
    <div id="content">
        <div class="main">
            <div class="crumb">
                <div class="crumbCon">
                    <div class="crumbSlide">
                        <div class="crumbClip">
                            <ul class="crumbSlide-con clearfix">
                                <li>
                                    <a href="<?php echo u('Home/Index/index');?>" class="crumbStrong">首页
                                        <i class="crumbArrow"></i>
                                    </a>
                                </li>
                                <?php if(is_array($fatherData)): foreach($fatherData as $key=>$v): ?><li>
                                        <a href="<?php echo u('Home/Lists/index',['cid'=>$v['cid']]);?>" class="crumbStrong"><?php echo ($v['cname']); ?>
                                            <i class="crumbArrow"></i>
                                        </a>
                                    </li><?php endforeach; endif; ?>
                                <li class="crumbSearch">
                                    <label class="crumbSearch-label" for="CrumbSearchInput">
                                        <input type="" name="" id="CrumbSearchInput"  class="crumbSearch-input" value="" />
                                    </label>
                                    <input type="text" name="" class="crumbSearch-btn" id="" value="" />
                                </li>
                                <li>
                                    <a href="#" class="ar-fd-find">逛。发现</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <p class="crumbTitle">共 <span>138348</span>件相关商品</p>
                </div>
            </div>
            <!--筛选开始-->
            <form id="J_NavAttrsForm" class="navAttrsForm">
                <div class="attrs">
                    <div class="nav-band">

                    </div>

                    <div class="propAttrs">
                        <?php if(is_array($attrData)): foreach($attrData as $k=>$v): ?><div class="attr">
                            <div class="attrKey"><?php echo ($v['name']); ?></div>
                            <div class="attrValues">
                                <?php
 $temp = $param; $temp[$k] = 0; ?>
                                <ul class="av-collapse">
                                    <li>
                                        <a href="<?php echo u('index',['cid'=>$_GET['cid'],'param'=>implode('_',$temp)]);?>" <?php if($param[$k]==0): ?>class="hover"<?php endif; ?>>不限</a>
                                    </li>
                                    <?php if(is_array($v['value'])): foreach($v['value'] as $key=>$vv): ?><li>
                                        <?php $temp[$k]=$vv['gtid']?>
                                        <a href="<?php echo u('index',['cid'=>$_GET['cid'],'param'=>implode('_',$temp)]);?>" <?php if($param[$k]==$vv['gtid']): ?>class="hover"<?php endif; ?>> <?php echo ($vv['gtvalue']); ?></a>
                                    </li><?php endforeach; endif; ?>
                                </ul>
                            </div>
                        </div><?php endforeach; endif; ?>
                        <!--更多筛选开始-->
                       <!-- <div class="moreAttr" style="display: none;">
                            <div class="attr">
                                <div class="attrKey">基础风格</div>
                                <div class="attrValues">
                                    <ul class="av-collapse">
                                        <li>
                                            <a href="#">青春流行</a>
                                        </li>
                                        <li>
                                            <a href="#">时尚都市</a>
                                        </li>
                                        <li>
                                            <a href="#">商务绅士</a>
                                        </li>
                                        <li>
                                            <a href="#">其他</a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>-->
                        <!--更多筛选结束-->
                    </div>
                    <div class="attrs-border"></div>
                    <div class="attrExtra">
                        <div class="attrExtra-border"></div>
                        <a href="javascript:;" class="attrExtra-more"><i></i><span id="more">更多选项</span></a>
                    </div>
                </div>
            </form>
            <!--筛选结束-->
            <div class="filter clearfix">
                <a href="#" class="fSort fSort-cur">
                    综合
                    <i class="f-ico-arrow-d"></i>
                </a>
                <a href="#" class="fSort">
                    人气
                    <i class="f-ico-arrow-d"></i>
                </a>
                <a href="#" class="fSort">
                    新品
                    <i class="f-ico-arrow-d"></i>
                </a>
                <a href="#" class="fSort">
                    销量
                    <i class="f-ico-arrow-d"></i>
                </a>
                <a href="#" class="fSort">
                    价格
                    <i class="f-ico-triangle-mt"></i>
                    <i class="f-ico-triangle-mb"></i>
                </a>
            </div>
        </div>
    </div>
    <!--数据遍历开始-->
    <div class="view">
        <?php if(is_array($goodsData)): foreach($goodsData as $key=>$v): ?><div class="product">
            <div class="product-iWrap">
                <div class="productImg-wrap">
                    <a href="<?php echo u('Home/Content/index',['gid'=>$v['gid']]);?>" class="productImg">
                        <img src="<?php echo ($v['pic']); ?>" />
                    </a>
                </div>
                <div class="productThumb clearfix">
                    <div class="proThumb">
                        <p>
                            <?php if(is_array($v['thumb'])): foreach($v['thumb'] as $key=>$vv): ?><b class="proThumb-img"><img src="<?php echo ($vv); ?>"/></b><?php endforeach; endif; ?>
                        </p>
                    </div>
                </div>
                <p class="productPrice">
                    <a href="<?php echo u('Home/Content/index',['gid'=>$v['gid']]);?>" class="tag"><img src="/tpShop/tpShop/Shop/Public/Home/img/newpro.png" /></a>
                    <em><b>¥</b><?php echo ($v['shopprice']); ?>.00</em>
                </p>
                <p class="blank"></p>
                <p class="productTitle">
                    <a href="<?php echo u('Home/Content/index',['gid'=>$v['gid']]);?>"><?php echo ($v['gname']); ?></a>
                </p>
                <div class="productShop">
                    <a href="#" class="productShop-name">
                        森马官方旗舰店
                    </a>
                </div>
                <p class="productStatus">
							<span>
								月成交
								<em>440笔</em>
							</span>
                    <span>
								评价
								<a>27</a>
							</span>
                    <span class="ww-light">
								<a href="#"></a>
							</span>
                </p>
            </div>
        </div><?php endforeach; endif; ?>
    </div>
    <div class="tm-end"></div>
    <!--数据遍历结束-->
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
        <div class="filter clearfix" style="margin: 0;">
            <a href="#" class="fSort fSort-cur">
                综合
                <i class="f-ico-arrow-d"></i>
            </a>
            <a href="#" class="fSort">
                人气
                <i class="f-ico-arrow-d"></i>
            </a>
            <a href="#" class="fSort">
                新品
                <i class="f-ico-arrow-d"></i>
            </a>
            <a href="#" class="fSort">
                销量
                <i class="f-ico-arrow-d"></i>
            </a>
            <a href="#" class="fSort">
                价格
                <i class="f-ico-triangle-mt"></i>
                <i class="f-ico-triangle-mb"></i>
            </a>
        </div>
    </div>
    <!--跟随菜单结束-->

</div>
</body>

</html>