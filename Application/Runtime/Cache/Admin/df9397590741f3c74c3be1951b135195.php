<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en" class="app">
<head>
  <meta charset="utf-8" />
  <title>CheliOus商城后台管理系统</title>
  <meta name="description" content="app, web app, responsive, admin dashboard, admin, flat, flat ui, ui kit, off screen nav" />
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
  <link rel="stylesheet" href="/tpShop/tpShop/Shop/Public/Admin/css/bootstrap.css" type="text/css"/>
  <link rel="stylesheet" href="/tpShop/tpShop/Shop/Public/Admin/css/animate.css" type="text/css"/>
  <link rel="stylesheet" href="/tpShop/tpShop/Shop/Public/Admin/css/font-awesome.min.css" type="text/css"/>
  <link rel="stylesheet" href="/tpShop/tpShop/Shop/Public/Admin/css/font.css" type="text/css"/>
  <link rel="stylesheet" href="/tpShop/tpShop/Shop/Public/Admin/js/calendar/bootstrap_calendar.css" type="text/css"/>
  <link rel="stylesheet" href="/tpShop/tpShop/Shop/Public/Admin/js/jvectormap/jquery-jvectormap-1.2.2.css" type="text/css"/>
  <link rel="stylesheet" href="/tpShop/tpShop/Shop/Public/Admin/css/app.css" type="text/css"/>
  <script src="/tpShop/tpShop/Shop/node_modules/hdjs/js/jquery.min.js"></script>
  <!--[if lt IE 9]>
  <script src="/tpShop/tpShop/Shop/Public/Admin/js/ie/html5shiv.js"></script>
  <script src="/tpShop/tpShop/Shop/Public/Admin/js/ie/respond.min.js"></script>
  <script src="/tpShop/tpShop/Shop/Public/Admin/js/ie/excanvas.js"></script>
  <script src="/tpShop/tpShop/Shop/Public/Admin/js/liclick.js"></script>
  <![endif]-->
  <script>
      //配置后台地址
      var hdjs = {
        'base': '/tpShop/tpShop/Shop/node_modules/hdjs',
        'ueditor':'',
        'uploader': "<?php echo u('system/component/uploader');?>",
        'filesLists': '/admin/Component/filesLists',
        'removeImage': '删除图片后台地址'
      };
  </script>
  <script src="/tpShop/tpShop/Shop/node_modules/hdjs/app/util.js"></script>
  <script src="/tpShop/tpShop/Shop/node_modules/hdjs/require.js"></script>
  <script src="/tpShop/tpShop/Shop/node_modules/hdjs/config.js"></script>
</head>
<body class="" ng-controller="ctrl">
  <section class="vbox">
    <header class="bg-dark dk header navbar navbar-fixed-top-xs">
      <div class="navbar-header aside-md">
        <a class="btn btn-link visible-xs" data-toggle="class:nav-off-screen,open" data-target="#nav,html">
          <i class="fa fa-bars"></i>
        </a>
        <a href="index.php" class="navbar-brand" data-toggle="fullscreen"><img src="/tpShop/tpShop/Shop/Public/Admin/images/logo.png" class="m-r-sm">CheliOus' Shop</a>
        <a class="btn btn-link visible-xs" data-toggle="dropdown" data-target=".nav-user">
          <i class="fa fa-cog"></i>
        </a>
      </div>
      <ul class="nav navbar-nav hidden-xs">
        <li class="dropdown">
          <section class="dropdown-menu aside-xl on animated fadeInLeft no-borders lt">
            <div class="wrapper lter m-t-n-xs">
              <a href="#" class="thumb pull-left m-r">
                <img src="/tpShop/tpShop/Shop/Public/Admin/images/avatar.jpg" class="img-circle">
              </a>
              <div class="clear">
                <a href="#"><span class="text-white font-bold">@Mike Mcalidek</a></span>
                <small class="block">Art Director</small>
                <a href="#" class="btn btn-xs btn-success m-t-xs">Upgrade</a>
              </div>
            </div>
            <div class="row m-l-none m-r-none m-b-n-xs text-center">
              <div class="col-xs-4">
                <div class="padder-v">
                  <span class="m-b-xs h4 block text-white">245</span>
                  <small class="text-muted">Followers</small>
                </div>
              </div>
              <div class="col-xs-4 dk">
                <div class="padder-v">
                  <span class="m-b-xs h4 block text-white">55</span>
                  <small class="text-muted">Likes</small>
                </div>
              </div>
              <div class="col-xs-4">
                <div class="padder-v">
                  <span class="m-b-xs h4 block text-white">2,035</span>
                  <small class="text-muted">Photos</small>
                </div>
              </div>
            </div>
          </section>
        </li>
      </ul>
      <ul class="nav navbar-nav navbar-right m-n hidden-xs nav-user">
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown">
            <span class="thumb-sm avatar pull-left">
              <img src="/tpShop/tpShop/Shop/Public/Admin/images/avatar.jpg">
            </span>
            <?php echo session('admin.username');?>
          </a>
        </li>
        <li class="dropdown" style="margin-right: 10px">
          <div class="m-t m-l">
            <a href="<?php echo u('admin/index/out');?>" class="dropdown-toggle btn btn-xs btn-primary" title="Upgrade"><i class="fa fa-long-arrow-up"></i></a>
          </div>
        </li>
      </ul>      
    </header>
    <section>
      <section class="hbox stretch">
        <!-- .aside -->
        <aside class="bg-dark lter aside-md hidden-print hidden-xs" id="nav">          
          <section class="vbox">
            <header class="header bg-primary lter text-center clearfix">
              <div class="btn-group">
                <button type="button" class="btn btn-sm btn-dark btn-icon" title="New project"><i class="fa fa-plus"></i></button>
                <div class="btn-group hidden-nav-xs">
                  <button type="button" class="btn btn-sm btn-primary dropdown-toggle" data-toggle="dropdown">
                    Switch Project
                    <span class="caret"></span>
                  </button>
                  <ul class="dropdown-menu text-left">
                    <li><a href="#">Project</a></li>
                    <li><a href="#">Another Project</a></li>
                    <li><a href="#">More Projects</a></li>
                  </ul>
                </div>
              </div>
            </header>
            <section class="w-f scrollable">
              <div class="slim-scroll" data-height="auto" data-disable-fade-out="true" data-distance="0" data-size="5px" data-color="#333333">
                
                <!-- nav -->
                <nav class="nav-primary hidden-xs">
                  <ul class="nav">
                    <li  class="active">
                      <a href="index.html"   class="active">
                        <i class="fa fa-dashboard icon">
                          <b class="bg-danger"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>基本配置</span>
                      </a>
                      <ul class="nav lt">
                        <li  class="active">
                          <a href="<?php echo u('admin/config/index');?>"  class="active">
                            <i class="fa fa-angle-right"></i>
                            <span>网站配置</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li >
                      <a href="#layout"  >
                        <i class="fa fa-columns icon">
                          <b class="bg-warning"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>类型管理</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="<?php echo u('admin/type/index');?>" >
                            <i class="fa fa-angle-right"></i>
                            <span>类型列表</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li >
                      <a href="#uikit"  >
                        <i class="fa fa-flask icon">
                          <b class="bg-success"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>分类管理</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="<?php echo u('admin/cate/index');?>" >
                            <i class="fa fa-angle-right"></i>
                            <span>分类列表</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo u('admin/cate/add');?>" >
                            <b class="badge bg-info pull-right"></b>
                            <i class="fa fa-angle-right"></i>
                            <span>顶级分类添加</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li >
                      <a href="#pages"  >
                        <i class="fa fa-file-text icon">
                          <b class="bg-primary"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>品牌管理</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="<?php echo u('admin/brand/index');?>" >
                            <i class="fa fa-angle-right"></i>
                            <span>品牌列表</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo u('admin/brand/save');?>" >
                            <i class="fa fa-angle-right"></i>
                            <span>品牌添加</span>
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li >
                      <a href="#uikit"  >
                        <i class="fa fa-flask icon">
                          <b class="bg-success"></b>
                        </i>
                        <span class="pull-right">
                          <i class="fa fa-angle-down text"></i>
                          <i class="fa fa-angle-up text-active"></i>
                        </span>
                        <span>商品管理</span>
                      </a>
                      <ul class="nav lt">
                        <li >
                          <a href="<?php echo u('admin/goods/index');?>" >
                            <i class="fa fa-angle-right"></i>
                            <span>商品列表</span>
                          </a>
                        </li>
                        <li >
                          <a href="<?php echo u('admin/goods/save');?>" >
                            <b class="badge bg-info pull-right">369</b>
                            <i class="fa fa-angle-right"></i>
                            <span>商品添加</span>
                          </a>
                        </li>
                      </ul>
                    </li>


                  </ul>
                </nav>
                <!-- / nav -->
              </div>
            </section>
            
            <footer class="footer lt hidden-xs b-t b-dark">
              <div id="chat" class="dropup">
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">Active chats</header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No active chats.</p>
                      <p><a href="#" class="btn btn-sm btn-default">Start a chat</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <div id="invite" class="dropup">                
                <section class="dropdown-menu on aside-md m-l-n">
                  <section class="panel bg-white">
                    <header class="panel-heading b-b b-light">
                      John <i class="fa fa-circle text-success"></i>
                    </header>
                    <div class="panel-body animated fadeInRight">
                      <p class="text-sm">No contacts in your lists.</p>
                      <p><a href="#" class="btn btn-sm btn-facebook"><i class="fa fa-fw fa-facebook"></i> Invite from Facebook</a></p>
                    </div>
                  </section>
                </section>
              </div>
              <a href="#nav" data-toggle="class:nav-xs" class="pull-right btn btn-sm btn-dark btn-icon">
                <i class="fa fa-angle-left text"></i>
                <i class="fa fa-angle-right text-active"></i>
              </a>
              <div class="btn-group hidden-nav-xs">
                <button type="button" title="Chats" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#chat"><i class="fa fa-comment-o"></i></button>
                <button type="button" title="Contacts" class="btn btn-icon btn-sm btn-dark" data-toggle="dropdown" data-target="#invite"><i class="fa fa-facebook"></i></button>
              </div>
            </footer>
          </section>
        </aside>
        <!-- /.aside -->
        <section id="content">

          
<ol class="breadcrumb" style="background-color: #f9f9f9;padding:8px 0;margin-bottom:10px;">
    <li>
        <a href=""><i class="fa fa-cogs"></i>
            商品管理</a>
    </li>
    <li class="active">
        <a href="">添加商品</a>
    </li>
</ol>
<ul class="nav nav-tabs" role="tablist">
    <li class="active">
        <a href="#tab3">商品添加</a>
    </li>
</ul>
<section class="panel panel-default">
    <div class="panel-body">
        <form class="form-horizontal" method="post" action="">
            <div class="form-group">
                <label class="col-sm-2 control-label">商品名称</label>
                <div class="col-sm-5">
                    <input type="text" name="gname" class="form-control" value="<?php echo ($oldGoods['gname']); ?>">
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">商品货号</label>
                <div class="col-sm-5">
                    <input type="text" name="gnumber" class="form-control" value="<?php echo ($oldGoods['gnumber']); ?>">
                    <span class="help-block m-b-none">请输入商品货号。。。</span>
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label">所属分类</label>
                <div class="col-sm-5">
                    <select name="cid" class="form-control m-b">
                        <option value="0" tid="-1">请选择</option>
                        <?php if(is_array($cateData)): $i = 0; $__LIST__ = $cateData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($oldGoods['cid']==$vo['cid']): ?><option value="<?php echo ($vo['cid']); ?>" tid="<?php echo ($vo['tid']); ?>" selected><?php echo ($vo['_cname']); ?></option>
                                <?php else: ?> <option value="<?php echo ($vo['cid']); ?>" tid="<?php echo ($vo['tid']); ?>"><?php echo ($vo['_cname']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>
            <!--异步回去规格和属性【商品详情页面的规格参数+下单选择颜色尺码】-->
            <script>
                $(function () {
                    $('select[name=cid]').change(function () {
                        //1.通过分类找见对应的类型属性 所以首先要类型id
                        var tid=$(':selected').attr('tid');
                        $('input[name=tid]').val(tid);
                        //顶级分类不可以添加商品
                        if(tid==0){
                            alert("顶级分类不可以添加商品");
                            $(this).val(0);
                            return false;
                        }
                        //发送异步
                        $.ajax({
                            type:'post',
                            url:"<?php echo u('getAttr');?>",
                            data:{tid:tid},
                            dataType:'json',
                            success:function (res) {
                                var attr='';
                                var spec='';
                                $.each(res,function (k,v){
                                    //属性
                                    if (v.class==2){
                                        attr+='<tr><td>'+v.taname+'</td><td><select name="attr['+v.taid+']"  class="form-control m-b"><option value="0">请选择</option>';
                                        $.each(v.tavalue,function (kk,vv) {
                                            attr += '<option value="'+vv+'">'+vv+'</option>';
                                        })
                                        attr+='</select></td></tr>';
                                    }else {
                                        //规格spec['+v.taid+'][norms][]这是规格名所在数组
                                        spec+='<tr><td class="col-sm-2">'+v.taname+'</td><td class="col-sm-3"><select name="spec['+v.taid+'][norms][]"  class="form-control m-b ">';
                                        spec+=' <option value="0">请选择</option>';
                                        //规格下拉框中的值为分解后tavalue中的属性值
                                        $.each(v.tavalue,function (kk,vv) {
                                            spec+='<option value="'+vv+'">'+vv+'</option>';
                                        })
                                        //规格spec['+ v.taid+'][added][]这是规格附加价所在数组
                                        spec+='<td class="col-sm-2 ">附加价格</td><td class="col-sm-2"><input type="text" name="spec['+ v.taid+'][added][]" class="form-control" ></td><td><button type="button" class="btn btn-success  addSpec">追加</button></td></tr>'
                                    }
                                })
                                $('#attr').html(attr);
                                $('#spec').html(spec);
                            }
                        });
                    })
                })
            </script>

            <div class="form-group">
                <label class="col-sm-2 control-label">商品属性</label>
                <div class="col-sm-5">
                    <table class="table table-hover" id="attr">
                        <?php if($oldAttr): endif; ?>
                    </table>
                </div>
            </div>
            <!--点击添加规格按钮，追加一个-->
            <!--<button type="button" class="btn btn-danger btn-xs delSpec">删除</button>-->
            <script>
                $(function () {
                    $('#spec').delegate('.addSpec','click',function () {
                        //找到tr
                        var tr=$(this).parents('tr').clone();
                        //把追加按扭换成删除
                        var del = '<button type="button" class="btn btn-danger delSpec">删除</button>';
                        tr.find('td').last().html(del);
                        //追加
                        $(this).parents('tr').after(tr);
                    })
                    //删除按扭点击事件
                    $('#spec').delegate('.delSpec','click',function () {
                        $(this).parents('tr').remove();
                    })
                })
            </script>


            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">商品规格</label>
                <div class="col-sm-10">
                    <table class="table table-hover" id="spec">
                    </table>
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label">所属品牌</label>
                <div class="col-sm-5">
                    <select name="bid" class="form-control m-b">
                        <option value="0">请选择</option>
                        <?php if(is_array($brandData)): $i = 0; $__LIST__ = $brandData;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; if($oldGoods['bid']==$vo['bid']): ?><option value="$vo['bid']" selected><?php echo ($vo['bname']); ?></option>
                                <?php else: ?>
                                <option value="<?php echo ($vo['bid']); ?>"><?php echo ($vo['bname']); ?></option><?php endif; endforeach; endif; else: echo "" ;endif; ?>
                    </select>
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>

            <div class="form-group">
                <label class="col-sm-2 control-label" for="input-id-1">单位</label>
                <div class="col-sm-5">
                    <?php if($oldGoods): ?><input type="text" name="unit" class="form-control" id="input-id-1" value="<?php echo ($oldGoods['unit']); ?>">
                       <?php else: ?> <input type="text" name="unit" class="form-control" id="input-id-1" value="件"><?php endif; ?>
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">市场价</label>
                <div class="col-sm-5">
                     <input type="number" name="marketprice" class="form-control"  value="<?php echo ($oldGoods['marketprice']); ?>">
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">商城价</label>
                <div class="col-sm-5">
                    <input type="number" name="shopprice" class="form-control"  value="<?php echo ($oldGoods['shopprice']); ?>">
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">点击次数</label>
                <div class="col-sm-5">
                    <input type="text"  class="form-control" name="click" placeholder="" value="<?php echo ($oldGoods['click']); ?>">
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">库存</label>
                <div class="col-sm-5">
                    <input type="text"  class="form-control" name="total" placeholder="" value="<?php echo ($oldGoods['total']); ?>">
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>

            <!--引入uploadify相关js、css-->
            <div class="form-group">
                <label class="col-sm-2 control-label">列表图</label>
                <div class="col-sm-5">
                    <div class="input-group">
                        <input type="text" class="form-control" name="pic" readonly="" value="<?php echo ($oldGoods['pic']); ?>">
                        <div class="input-group-btn">
                            <button onclick="upImage(this)" class="btn btn-default" type="button">选择图片</button>
                        </div>
                    </div>
                    <div class="input-group" style="margin-top:5px;">
                        <?php if($oldGoods): ?><img src="<?php echo ($oldGoods['pic']); ?>" class="img-responsive img-thumbnail" width="150">
                            <?php else: ?>
                            <img src="/tpShop/tpShop/Shop/node_modules/hdjs/images/nopic.jpg" class="img-responsive img-thumbnail" width="150"><?php endif; ?>
                        <em class="close" style="position:absolute; top: 0px; right: -14px;" title="删除这张图片" onclick="removeImg(this)">×</em>
                    </div>
                </div>
                <script>
                    //上传图片
                    function upImage(obj) {
                        require(['util'], function (util) {
                            options = {
                                multiple: false,//是否允许多图上传
                                //data是向后台服务器提交的POST数据
                                data:{name:'后盾人',year:2099},
                            };
                            util.image(function (images) {          //上传成功的图片，数组类型 
                                $("[name='pic']").val(images[0]);
                                $(".img-thumbnail").attr('src', images[0]);
                            }, options)
                        });
                    }

                    //移除图片
                    function removeImg(obj) {
                        $(obj).prev('img').attr('src', '/tpShop/tpShop/Shop/Public/Admin/images/nopic.jpg');
                        $(obj).parent().prev().find('input').val('');
                    }
                </script>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">商品图册</label>
                <div class="col-sm-2">
                    <button onclick="upManyImage(this)" class="btn btn-default" type="button">选择图片</button>
                    <script>
                        //上传图片
                        function upManyImage(obj) {
                            require(['util'], function (util) {
                                options = {
                                    //上传多图
                                    multiple: true,
                                };
                                util.image(function (images) {
                                    $(images).each(function(k,v){
                                        $("<img style='width:80px' src='"+v+"'/><input type='hidden' name='img[]' value='"+v+"'/>").appendTo('#box');
                                    })
                                }, options)
                            });
                        }
                    </script>
                </div>
                <div class="col-sm-8" id="box">
                    <?php if($oldDetail['big']): if(is_array($oldDetail['big'])): foreach($oldDetail['big'] as $key=>$vo): ?><img style='width:80px' src="<?php echo ($vo); ?>"/><input type='hidden' name='img[]' value='<?php echo ($vo); ?>'/><?php endforeach; endif; ?>
                        <?php else: endif; ?>
                </div>

            </div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">商品详情</label>
                <div class="col-sm-10">
                    <?php if(oldDetail): ?><textarea id="container1" name="intro" style="height:300px;width:100%;"><?php echo ($oldDetail['intro']); ?></textarea>
                        <?php else: ?>
                        <textarea id="container1" name="intro" style="height:300px;width:100%;"></textarea><?php endif; ?>
                    <script>
                        require(['util'], function (util) {
                            util.ueditor('container1', {hash:2,data:'hd'}, function (editor) {
                                //这是回调函数 editor是百度编辑器实例
                            })
                        });
                    </script>
                </div>
            </div>
            <div class="line line-dashed line-lg pull-in"></div>
            <div class="form-group">
                <label class="col-sm-2 control-label">售后服务</label>
                <div class="col-sm-10">
                    <?php if(oldDetail): ?><textarea id="container" name="service" style="height:300px;width:100%;"><?php echo ($oldDetail['service']); ?></textarea>
                        <?php else: ?>
                        <textarea id="container" name="service" style="height:300px;width:100%;"></textarea><?php endif; ?>
                    <script>
                        require(['util'], function (util) {
                            util.ueditor('container', {hash:2,data:'hd'}, function (editor) {
                                //这是回调函数 editor是百度编辑器实例
                            });
                        })
                    </script>
                </div>
            </div>
            <input type="hidden" name="tid" value="">
            <div class="form-group">
                <div class="col-sm-offset-2 col-sm-10">
                    <button type="submit" class="btn btn-default">提交</button>
                </div>
            </div>
        </form>
    </div>
</section>






          <a href="#" class="hide nav-off-screen-block" data-toggle="class:nav-off-screen, open" data-target="#nav,html"></a>
        </section>
        <aside class="bg-light lter b-l aside-md hide" id="notes">
          <div class="wrapper">Notification</div>
        </aside>
      </section>
    </section>
  </section>
  <!-- Bootstrap -->
  <script src="/tpShop/tpShop/Shop/Public/Admin/js/bootstrap.js"></script>
  <script>
      require(['util', 'underscore'], function (until, _) {
          require(['/tpShop/tpShop/Shop/Public/Admin/js/app.js', 'css!/tpShop/tpShop/Shop/Public/Admin/css/app.css']);

          require(['angular', 'jquery'], function (angular, $) {
              angular.module('app', []).controller('ctrl', ['$scope', function ($scope) {
                  if (angular.isFunction(controller)) {
                      controller($scope, $, _);
                  }
              }]);
              angular.bootstrap(document.getElementsByTagName('body'), ['app']);
          });
      });
  </script>
</body>
</html>