<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8" />
    <title>确认订单-Tmall.com天猫</title>
    <link rel="stylesheet" type="text/css" href="/tpShop/tpShop/Shop/Public/Home/css/buyconfirm.css" />
    <link rel="stylesheet" type="text/css" href="/tpShop/tpShop/Shop/Public/Home/css/iconfont.css" />
    <script src="/tpShop/tpShop/Shop/Public/Home/js/jquery-3.2.1.min.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript" src="/tpShop/tpShop/Shop/Public/Home/js/area.js"></script>
    <script src="/tpShop/tpShop/Shop/Public/Home/js/buyconfirm.js" type="text/javascript" charset="utf-8"></script>
    <script type="text/javascript">
        $(function () {
            //初始化方法
            area.init('area');
            //修改的时候默认被选中效果
            area.selected('江西', '南昌', '青山湖区');
        })

    </script>
    <script>
        $(function () {
            //增加收货地址
            /*$(".tc-popup").hide();
             $(".tc-mask").hide();*/
            $('#saveAddr').click(function () {
                var adid=$('.tc-popup').attr('adid');
                if (adid!=''){
                    var isedit=true;
                }
                var area='';
                $.each($('.ks-clear .area'),function (k,v) {
                    area += $(this).val() + ',';
                })//省份地区
                var address=$('.i-ta').val();//详细地址
                var consignee=$('#consignee').val();//收件人
                var phone=$('.mobile').val();//手机号
                var iscur=$('#SetDefault').is(':checked');
                if(iscur){
                    iscur=1;
                }else{
                    iscur=0;
                }//是否设置为默认地址
                $.ajax({
                    type:'post',
                    url:'addr',
                    data:{"adid":adid,"consignee":consignee,"iscur":iscur,"phone":phone,"area":area,"address":address},
                    dataType:'json',
                    success:function (data) {
                        var addr='';
                        addr+=' <?php if('+data.iscur+'==1): ?>';
                        addr+=' <div class="addr addr-cur"><?php else: ?> <div class="addr"><?php endif; ?>';
                        addr+='<div class="inner adid="'+data.adid+'""><div class="addr-hd">';
                        addr+='<span class="city">'+data.area[0]+data.area[1]+'</span>(<span class="name">';
                        addr+=data.consignee+'</span>收)</div><div class="addr-bd"><span class="dist">'+data.area[2]+'</span>';
                        addr+='<span class="town">'+data.address+'</span>';
                        addr+=' <span class="phone">'+data.phone+'</span><span></span></div>';
                        addr+=' <div class="addr-toolbar"> <a href="#" class="change">修改</a>';
                        addr+='<a href="<?php echo u('Home/Submit/delete,adid=>'+data.adid+'');?>" class="delete">删除</a>';
                        addr+='</div></div><div class="curMarker"></div></div>';
                        if(isedit){
                            location.href="<?php echo u('index');?>";
                        }else {
                            $(".tc-popup").hide();
                            $(".tc-mask").hide();
                            $('.order-address .list').append(addr);
                        }

                    }
                })
            })
        })
    </script>
    <script>
        $(function () {
            $('.list').delegate('.addr', 'click', function () {
                var city = $(this).find('.city').html();
                city = city + $(this).find('.dist').html();
                city = city + $(this).find('.town').html();
                $('.confirmAddr-addr-bd').html(city);
                var name = $(this).find('.name').html();
                $('.consignee').html(name);
                $(this).addClass('addr-cur').siblings('.addr').removeClass('addr-cur');
            })
            $('.list').delegate('.change', 'click', function () {
                var adid = $(this).parents('.inner').attr('adid');
                $(".tc-popup").attr('adid',adid);
                $.ajax({
                    type:'post',
                    url:'edit',
                    data:{adid:adid},
                    dataType:'json',
                    success:function (data) {

                    }
                })
            })
            $('.change'). click( function () {
                var adid = $(this).parents('.inner').attr('adid');
                $(".tc-popup").attr('adid',adid);
                $.ajax({
                    type:'post',
                    url:'edit',
                    data:{adid:adid},
                    dataType:'json',
                    success:function (data) {
                        $('#area1').val(data.area[0]);
                        $('#area2').val(data.area[1]);
                        $('#area3').val(data.area[2]);
                        if(data.iscur==1){
                            $('#SetDefault').prop('checked','checked');
                        }else {
                            $('#SetDefault').removeAttr('checked');
                        }
                        $('.i-ta').val(data.address);
                        $('.mall').val(000000);
                        $('#consignee').val(data.consignee);
                        $('.mobile').val(data.phone);
                        $(".tc-mask").show();
                        $(".tc-popup").show();
                    }
                })
            })
        })
    </script>
</head>

<body>
<div class="tc-mask"></div>
<div class="tc-popup" >
    <div class="tc-popup-header">创建地址</div>
    <div class="tc-popup-content">
        <div class="clearfix">
            <div class="form-box">
                <div class="item item-title">
                    <span class="item-label tsl">新增收货地址</span>
                    <span class="tsl">电话号码、手机号选填一项, 其余均为必填项</span>
                </div>
                <div class="item item-devision">
                    <span class="item-label tsl">所在地区 <i>*</i></span>
                    <div class="ks-clear clearfix">
                        <input type="text" name=""  class="city-sel" style="width: 50px;height: 25px;" value="中国大陆" disabled="disabled" />
                        <select name="" id="area1"  class="city-sel area"></select>
                        <select name="" id="area2"  class="city-sel area"></select>
                        <select name="" id="area3"  class="city-sel area"></select>
                    </div>
                </div>
                <div class="item item-street">
                    <span class="item-label">详细地址 <i>*</i></span>
                    <textarea class="i-ta " aria-combobox="list" role="combobox"  name="addressDetail" placeholder="建议您如实填写详细收货地址，例如街道名称，门牌号码，楼层和房间号等信息"></textarea>
                </div>
                <div class="item">
                    <span class="item-label">邮政编码 </span>
                    <input name="post" class="i-text mail" maxlength="16" placeholder="如您不清楚邮递区号，请填写000000" value="" type="text" >
                </div>
                <div class="item">
                    <span class="item-label" >收货人姓名<i>*</i> </span>
                    <input name="post" class="i-text mail" maxlength="16" placeholder="长度不超过25个字符" value="" type="text"  id="consignee">
                </div>
                <div class="item item-devision">
                    <span class="item-label tsl">手机号码<i>*</i> </span>
                    <div class="ks-clear clearfix">
                        <input type="text" name=""  class="city-sel " style="width: 90px;" value="中国大陆+86" disabled="disabled" />
                        <input type="text" name="city" value="" class="city-sel mobile" style="width: 170px;" />
                    </div>
                </div>
                <div class="item">
                    <input type="checkbox" name="" id="SetDefault" />
                    <label for="SetDefault">设置为默认收货地址</label>
                </div>
                <div class="item">
                    <button type="button" class="btn" id="saveAddr">保存</button>
                </div>
            </div>
        </div>
    </div>
    <a href="#" class="tc-popup-hide"></a>
</div>
<div id="mallPage">
    <!--顶部开始-->
    <div id="site-nav">
        <div class="wrapper clearfix">
            <div class="login-info">
                <span class="login"><i class="iconfont icon-icon" style="font-size: 11px;color: #FF0036;margin-right: 3px;vertical-align: top;"></i><a href="<?php echo u('Home/Index/index');?>">天猫首页</a></span>
                <span class="welcome">Hi,<span class="login"><a href="list.html">...</a></span></span>
                <span class="login"><a href="#">积分<span class="number">333</span></a>
						</span>
                <span class="login"><a href="#">消息<span  class="number">33</span></a>
						</span>
                <span class="login"><a href="<?php echo u('Home/Index/out');?>">退出</a></span>
            </div>
            <div class="quick-menu">
                <div class="menu">
                    <a href="<?php echo u('Home/Order/index');?>">我的淘宝<b></b></a>
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
                <span style="float: left;margin-right: 12px;">|</span>
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
        <div class="stepbar-box">
            <ol class="order-stepbar stepbar-5">
                <li class="step-first">
                    <div class="step-done">
                        <div class="step-name">
                            查看购物车
                        </div>
                        <div class="step-no"></div>
                    </div>
                </li>
                <li>
                    <div class="">
                        <div class="step-name">
                            拍下商品
                        </div>
                        <div class="step-no">2</div>
                    </div>
                </li>
                <li>
                    <div class="">
                        <div class="step-name">
                            付款到支付宝
                        </div>
                        <div class="step-no">3</div>
                    </div>
                </li>
                <li>
                    <div class="">
                        <div class="step-name">
                            确认收货
                        </div>
                        <div class="step-no">4</div>
                    </div>
                </li>
                <li class="step-last">
                    <div class="">
                        <div class="step-name">
                            评价
                        </div>
                        <div class="step-no">5</div>
                    </div>
                </li>
            </ol>
        </div>

    </div>
    <!--头部结束-->
    <!--主体部分开始-->
    <div id="content">
        <div id="App">

            <div class="page">
                <div class="order-confirmOrder">
                    <div class="order-address">
                        <h2 class="">选择收货地址</h2>
                        <div class="list">
                            <?php if(is_array($addressData)): foreach($addressData as $k=>$v): if($v['iscur']==1): ?><div class="addr addr-cur">
                                        <?php else: ?> <div class="addr"><?php endif; ?>
                                <div class="inner" adid="<?php echo ($v['adid']); ?>">
                                    <div class="addr-hd">
                                        <span class="city"><?php echo ($addressData[$k]['area'][0]); echo ($addressData[$k]['area'][1]); ?></span>(<span class="name"><?php echo ($v['consignee']); ?></span>收)</div>
                                    <div class="addr-bd">
                                        <span class="dist"><?php echo ($addressData[$k]['area'][2]); ?></span>
                                        <span class="town"><?php echo ($v['address']); ?></span>
                                        <span class="phone"><?php echo ($v['phone']); ?></span>
                                        <span></span>
                                    </div>
                                    <div class="addr-toolbar">
                                        <a href="javascript:;" class="change">修改</a>
                                        <a href="<?php echo u('Home/Submit/delete',['adid'=>$v['adid']]);?>" class="delete">删除</a>
                                    </div>
                                </div>
                                <div class="curMarker"></div>
                        </div><?php endforeach; endif; ?>
                    </div>

                    <div class="control">
                        <input type="button" name="" id="addAddr" value="使用新地址" class="addAddr" />
                    </div>
                </div>

                <div class="order-orderDesc">
                    <h2 class="buy-th-title">
                        确认订单信息
                    </h2>
                    <div class="buy-th">
                        <div class="buy-td td-0">店铺宝贝</div>
                        <div class="buy-td td-1">商品属性</div>
                        <div class="buy-td td-2">单价</div>
                        <div class="buy-td td-3">数量</div>
                        <div class="buy-td td-4">优惠方式</div>
                        <div class="buy-td td-5">小计</div>
                    </div>
                </div>
                <?php if(is_array($goodsData)): foreach($goodsData as $k=>$v): ?><div class="order-order">
                        <div class="order-orderInfo">
                            <img class="shopIcon" src="/tpShop/tpShop/Shop/Public/Home/img/buyconfirm/tm.png" /><span class="shop-name">店铺: </span>
                            <a href="#" class="shop-url"><?php echo ($v['brand']['bname']); ?></a><span class="ww-light">
									<a href="#"></a>
								</span>
                        </div>
                        <div class="order-item">
                            <div class="order-itemInfo">
                                <div class="info-detail info-cell">
                                    <div class="info-cell">
                                        <a href="#" class="info-img">
                                            <img src="<?php echo ($v['pic']); ?>" class="info-img" />
                                        </a>
                                    </div>
                                    <div class="info-cell info-msg">
                                        <a href="#" class="info-title"><?php echo ($v['name']); ?></a>
                                        <div class="info-icon-list">
                                            <div class="">
                                                <a href="#" class="icon-main"><img src="/tpShop/tpShop/Shop/Public/Home/img/buyconfirm/bz.png" /></a>
                                                <a href="#" class="icon-main"><img src="/tpShop/tpShop/Shop/Public/Home/img/buyconfirm/xcard.png" /></a>
                                            </div>
                                            <div class="">
                                                <p class="icon-ext">此商品性质不支持7天退货
                                                    <a href="#" class="ext-detail-msg">详情</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="info-sku info-cell">

                                </div>
                                <div class="info-price info-cell"><?php echo ($v['price']); ?>.00</div>
                            </div>
                            <div class="order-quantity"><?php echo ($v['num']); ?></div>
                            <div class="order-promotion item-promotion">无优惠</div>
                            <div class="order-itemPay">
                                <span class="simple-price"><?php echo ($v['total']); ?>.00</span>
                            </div>
                            <div class="orderPay">
                                <span>店铺合计</span><span>(含运费)</span>
                                <span class="price">￥<?php echo ($v['total']); ?>.00</span>
                            </div>
                        </div>
                    </div><?php endforeach; endif; ?>
                <div class="remark">
                    <div class="remark-wrap">
                    <span>备注：</span><textarea name="remark" id="" cols="30"  ></textarea>
                    </div>
                </div>
                <div class="order-payInfo">
                    <div class="payInfo-wrapper">
                        <div class="payInfo-shadow">
                            <div class="order-realPay">
                                <span class="realPay-title">实付款：</span>
                                <span class="order-price">￥</span>
                                <span class="realPay-price"><?php echo ($totalPrice); ?>.00</span>
                            </div>
                            <div class="order-confirmAddr">
                                <div class="confirmAddr-addr">
                                    <span class="confirmAddr-title">寄送至：</span><span class="confirmAddr-addr-bd"><span class="province"><?php echo ($consigneeData['area'][0]); ?></span><span class="city"><?php echo ($consigneeData['area'][1]); ?></span><span class="town"><?php echo ($consigneeData['area'][2]); ?></span><span class="address"><?php echo ($consigneeData['address']); ?></span></span>
                                </div>
                                <div class="confirmAddr-addr-user">
                                    <span class="confirmAddr-title">收货人:</span>
                                    <span class="consignee"><?php echo ($consigneeData['consignee']); ?></span>
                                </div>
                            </div>
                            <div class="order-confirmAddr"></div>
                        </div>
                    </div>
                </div>
                <div class="order-submitOrder">
                    <div class="wrapper">
                        <a href="<?php echo u('Home/Cart/index');?>" class="go-back"><span>返回购物车</span></a>
                        <a href="javascript:;" class="go-btn">提交订单</a>
                    </div>
                </div>
            </div>
            <script>
                $(function () {
                    $('.go-btn').click(function () {
                       // 获得地址
                       var  addr='';
                       addr+=$('.confirmAddr-addr').find('.province').text()+',';
                        addr+=$('.confirmAddr-addr').find('.city').text()+',';
                        addr+=$('.confirmAddr-addr').find('.town').text()+',';
                        addr+=$('.confirmAddr-addr').find('.address').text();

                        var consignee=$('.confirmAddr-addr-user').find(".consignee").text();
                        if(consignee==null){
                            alert("请选择收获地址");
                        }
                        var phone=$('.addr-cur').find('.phone').text();
                        var remark=$('textarea[name=remark]').val();
                        $.ajax({
                            type:'post',
                            url:'confirm',
                            data:{addr:addr,consignee:consignee,phone:phone,remark:remark},
                            dataType:'json',
                            success:function (res) {
                                if(res.message){
                                    alert(res.message);
                                }else{
                                    location.href="<?php echo u('Home/Order/index');?>"
                                }
                            }
                        })
                    })
                })
            </script>
        </div>

    </div>
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
</div>

</body>

</html>