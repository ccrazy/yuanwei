<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html>

<head>
    <title><?php echo ($site_seo_title); ?> <?php echo ($site_name); ?></title>
    <meta name="keywords" content="<?php echo ($site_seo_keywords); ?>" />
    <meta name="description" content="<?php echo ($site_seo_description); ?>">
    <?php  function _sp_helloworld(){ echo "hello ThinkCMF!"; } function _sp_helloworld2(){ echo "hello ThinkCMF2!"; } function _sp_helloworld3(){ echo "hello ThinkCMF3!"; } ?>
<?php $portal_index_lastnews="1,2"; $portal_hot_articles="1,2"; $portal_last_post="1,2"; $tmpl=sp_get_theme_path(); $default_home_slides=array( array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/1.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/2.jpg", "slide_url"=>"", ), array( "slide_name"=>"ThinkCMFX2.2.0发布啦！", "slide_pic"=>$tmpl."Public/assets/images/demo/3.jpg", "slide_url"=>"", ), ); ?>
<meta name="author" content="ThinkCMF">
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

<!-- Set render engine for 360 browser -->
<meta name="renderer" content="webkit">

<!-- No Baidu Siteapp-->
<meta http-equiv="Cache-Control" content="no-siteapp" />

<!-- HTML5 shim for IE8 support of HTML5 elements -->
<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
    <![endif]-->
<link rel="icon" href="/themes/simplebootx/Public/assets/images/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="/themes/simplebootx/Public/assets/images/favicon.ico" type="image/x-icon">
<link href="/themes/simplebootx/Public/assets/simpleboot/themes/simplebootx/theme.min.css" rel="stylesheet">
<link href="/themes/simplebootx/Public/assets/simpleboot/bootstrap/css/bootstrap.css" rel="stylesheet" type="text/css">
<link href="/themes/simplebootx/Public/assets/simpleboot/bootstrap/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="/themes/simplebootx/Public/assets/simpleboot/font-awesome/4.4.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<!--[if IE 7]>
	<link rel="stylesheet" href="/themes/simplebootx/Public/assets/simpleboot/font-awesome/4.4.0/css/font-awesome-ie7.min.css">
	<![endif]-->
<link href="/themes/simplebootx/Public/assets/css/style.css" rel="stylesheet">
<style>
    /*html{filter:progid:DXImageTransform.Microsoft.BasicImage(grayscale=1);-webkit-filter: grayscale(1);}*/
    
    #backtotop {
        position: fixed;
        bottom: 50px;
        right: 20px;
        display: none;
        cursor: pointer;
        font-size: 50px;
        z-index: 9999;
    }
    
    #backtotop:hover {
        color: #333
    }
    
    #main-menu-user li.user {
        display: none
    }
</style>
    <link href="/themes/simplebootx/Public/assets/css/slippry/slippry.css" rel="stylesheet">
    <style>
        .caption-wraper {
            position: absolute;
            left: 50%;
            bottom: 2em;
        }
        
        .caption-wraper .caption {
            position: relative;
            left: -50%;
            background-color: rgba(0, 0, 0, 0.54);
            padding: 0.4em 1em;
            color: #fff;
            -webkit-border-radius: 1.2em;
            -moz-border-radius: 1.2em;
            -ms-border-radius: 1.2em;
            -o-border-radius: 1.2em;
            border-radius: 1.2em;
        }
        
        .navbar-fixedx {
            margin-top: 120px;
        }
        
        @media (max-width: 767px) {
            .sy-box {
                margin: 12px -20px 0 -20px;
            }
            .caption-wraper {
                left: 0;
                bottom: 0.4em;
            }
            .caption-wraper .caption {
                left: 0;
                padding: 0.2em 0.4em;
                font-size: 0.92em;
                -webkit-border-radius: 0;
                -moz-border-radius: 0;
                -ms-border-radius: 0;
                -o-border-radius: 0;
                border-radius: 0;
            }
        }
    </style>
</head>

<body class="body-white">
    <?php echo hook('body_start');?>
<div class="navbar navbar-fixed-top">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapsex">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <a class="brand" href="/"><img src="/themes/simplebootx/Public/assets/images/logo.png" /></a>
            <div class="nav-collapse collapse" id="main-menu">
                <span style="line-height:120px;font-size:24px;"><?php echo ($site_name); ?></span>
                <ul class="nav pull-right" id="main-menu-user">
                    <li class="dropdown user login">
                        <a class="dropdown-toggle user" style="line-height:120px;" data-toggle="dropdown" href="#">
                            <img src="/themes/simplebootx/Public/assets/images/headicon.png" class="headicon" />
                            <span class="user-nicename"></span>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo U('user/center/index');?>"><i class="fa fa-user"></i> &nbsp;个人中心</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo U('user/index/logout');?>"><i class="fa fa-sign-out"></i> &nbsp;退出</a></li>
                        </ul>
                    </li>
                    <li class="dropdown user offline">
                        <a class="dropdown-toggle user" data-toggle="dropdown" href="#">
                            <img src="/themes/simplebootx/Public/assets/images/headicon.png" class="headicon" />登录<b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu pull-right">
                            <li><a href="<?php echo U('api/oauth/login',array('type'=>'sina'));?>"><i class="fa fa-weibo"></i> &nbsp;微博登录</a></li>
                            <li><a href="<?php echo U('api/oauth/login',array('type'=>'qq'));?>"><i class="fa fa-qq"></i> &nbsp;QQ登录</a></li>
                            <li><a href="<?php echo leuu('user/login/index');?>"><i class="fa fa-sign-in"></i> &nbsp;登录</a></li>
                            <li class="divider"></li>
                            <li><a href="<?php echo leuu('user/register/index');?>"><i class="fa fa-user"></i> &nbsp;注册</a></li>
                        </ul>
                    </li>
                </ul>
                <div class="pull-right">
                    <form method="post" class="form-inline" action="<?php echo U('portal/search/index');?>" style="margin:18px 0;">
                        <input type="text" class="" placeholder="Search" name="keyword" value="<?php echo I('get.keyword');?>" />
                        <input type="submit" class="btn btn-info" value="Go" style="margin:0" />
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
    <!--<?php echo hook('body_start');?>-->
<div class="navbar navbar-fixed-top navbar-fixedx">
    <div class="navbar-inner">
        <div class="container">
            <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </a>
            <div class="nav-collapse collapse" id="main-menu">
                <?php
 $effected_id="main-menu"; $filetpl="<a href='\$href' target='\$target'>\$label</a>"; $foldertpl="<a href='\$href' target='\$target' class='dropdown-toggle' data-toggle='dropdown'>\$label <b class='caret'></b></a>"; $ul_class="dropdown-menu" ; $li_class="li-class" ; $style="nav"; $showlevel=6; $dropdown='dropdown'; echo sp_get_menu("main",$effected_id,$filetpl,$foldertpl,$ul_class,$li_class,$style,$showlevel,$dropdown); ?>

            </div>
        </div>
    </div>
</div>

    <?php $home_slides=sp_getslide("portal_index"); $home_slides=empty($home_slides)?$default_home_slides:$home_slides; ?>
    <ul id="homeslider" class="unstyled">
        <?php if(is_array($home_slides)): foreach($home_slides as $key=>$vo): ?><li>
                <div class="caption-wraper">
                    <div class="caption"><?php echo ($vo["slide_name"]); ?></div>
                </div>
                <a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a>
            </li><?php endforeach; endif; ?>
    </ul>
    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="sy-box">
                    <ul id="homeslider" class="unstyled">
                        <?php $vo=$home_slides[1] ?>
                        <li>
                            <a href="<?php echo ($vo["slide_url"]); ?>"><img src="<?php echo sp_get_asset_upload_path($vo['slide_pic']);?>" alt=""></a>
                        </li>
                    </ul>
                </div>

            </div>
            <div class="col-md-4">
                <div class="">
                    <?php $lists = sp_sql_posts("cid:100;order:post_date DESC;",5); ?>
                    <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="">
                            <!--list-boxes-->
                            <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>"><?php echo (msubstr($vo["post_excerpt"],0,256)); ?></a>
                        </div><?php endforeach; endif; else: echo "" ;endif; ?>

                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <div class="tc-box">
                    <div class="headtitle">
                        <h2>源味线下活动</h2>
                    </div>
                    <div class="ranking">
                        <?php $hot_articles=sp_sql_posts("cid:100;field:post_title,post_excerpt,object_id,term_id,smeta;order:post_hits desc;limit:5;"); ?>
                        <ul class="unstyled">
                            <?php if(is_array($hot_articles)): foreach($hot_articles as $key=>$vo): $top=$key <3? "top3": ""; ?>
                                        <li class="<?php echo ($top); ?>"><i><?php echo ($key+1); ?></i><a title="<?php echo ($vo["post_title"]); ?>" href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a></li><?php endforeach; endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-md-9">
                <div class="tc-box">
                    <div class="headtitle">
                        <h2>滋农生态游</h2>
                    </div>
                    <div class="row">
                        <?php $lists = sp_sql_posts("cid:100;order:post_date DESC;limit:8;"); ?>
                        <?php if(is_array($lists)): $i = 0; $__LIST__ = $lists;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><div class="col-md-3">
                                <div class="tc-gridbox">
                                    <div class="header">
                                        <div class="item-image">
                                            <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>">
                                                <?php if(empty($smeta['thumb'])): ?><img src="/themes/simplebootx/Public/assets/images/default_tupian1.png" class="img-responsive" alt="<?php echo ($vo["post_title"]); ?>" />
                                                    <?php else: ?>
                                                    <img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo["post_title"]); ?>" /><?php endif; ?>
                                            </a>
                                        </div>
                                        <h3><a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a></h3>
                                        <hr>
                                    </div>
                                    <div class="body">
                                        <p><a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>"><?php echo msubstr($vo['post_excerpt'],0,32);?></a></p>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; else: echo "" ;endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <?php $lastnews=sp_sql_posts("cid:100;field:post_title,post_excerpt,object_id,smeta,term_id;order:listorder asc;limit:6;"); ?>
        <div class="row">
            <div class="col-md-6">
                <div class="tc-box">
                    <div class="headtitle">
                        <h2>优秀农场案例</h2>
                    </div>
                    <div class="row">
                        <?php if(is_array($lastnews)): foreach($lastnews as $key=>$vo): ?><div class="col-md-4">
                                <div class="tc-gridbox">
                                    <div class="header">
                                        <div class="item-image">
                                            <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>">
                                                <?php if(empty($smeta['thumb'])): ?><img src="/themes/simplebootx/Public/assets/images/default_tupian1.png" class="img-responsive" alt="<?php echo ($vo["post_title"]); ?>" />
                                                    <?php else: ?>
                                                    <img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo["post_title"]); ?>" /><?php endif; ?>
                                            </a>
                                        </div>
                                        <h3><a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>"><?php echo ($vo["post_title"]); ?></a></h3>
                                        <hr>
                                    </div>
                                    <div class="body">
                                        <p><a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>"><?php echo msubstr($vo['post_excerpt'],0,32);?></a></p>
                                    </div>
                                </div>
                            </div><?php endforeach; endif; ?>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="tc-box">
                    <div class="headtitle">
                        <h2>技术服务案例</h2>
                    </div>
                    <?php $listx=sp_sql_posts("cid:100;field:post_title,post_excerpt,object_id,smeta,term_id;order:listorder asc;limit:6;"); ?>
                    <div class="row">
                        <div class="posts">
                            <?php if(is_array($listx)): foreach($listx as $key=>$vo): $smeta=json_decode($vo['smeta'],true); ?>
                                <dl class="dl-horizontal">
                                    <dt>
											<a class="img-wraper" href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>">
												<?php if(empty($smeta['thumb'])): ?><img src="/themes/simplebootx/Public/assets/images/default_tupian4.png" class="img-responsive" alt="<?php echo ($vo["post_title"]); ?>"/>
												<?php else: ?> 
													<img src="<?php echo sp_get_asset_upload_path($smeta['thumb']);?>" class="img-responsive img-thumbnail" alt="<?php echo ($vo["post_title"]); ?>" /><?php endif; ?>
											</a>
										</dt>
                                    <dd>
                                        <a href="<?php echo leuu('article/index',array('id'=>$vo['object_id'],'cid'=>$vo['term_id']));?>"><?php echo msubstr($vo['post_excerpt'],0,32);?></a>
                                    </dd>
                                </dl><?php endforeach; endif; ?>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <br>
<br>
<br>
<!-- Footer ================================================== -->
<hr>
<?php echo hook('footer');?>
<div id="footer">
	<div class="links">
		<?php $links=sp_getlinks(); ?>
		<?php if(is_array($links)): foreach($links as $key=>$vo): if(!empty($vo["link_image"])): ?><!-- <img src="<?php echo sp_get_image_url($vo['link_image']);?>"> --><!-- 如果想加个友链图片可以取消注释 --><?php endif; ?>
			<a href="<?php echo ($vo["link_url"]); ?>" target="<?php echo ($vo["link_target"]); ?>"><?php echo ($vo["link_name"]); ?></a><?php endforeach; endif; ?>
	</div>
	<p>
		Made by <a href="http://www.thinkcmf.com" target="_blank">ThinkCMF</a>
		Code licensed under the 
		<a href="http://www.apache.org/licenses/LICENSE-2.0" rel="nofollow" target="_blank">Apache License v2.0</a>.
		<br />
		Based on 
		<a href="http://getbootstrap.com/2.3.2/" target="_blank">Bootstrap</a>.
		Icons from 
		<a href="http://fortawesome.github.com/Font-Awesome/" target="_blank">Font Awesome</a>
	</p>
</div>
<div id="backtotop">
	<i class="fa fa-arrow-circle-up"></i>
</div>
<?php echo ($site_tongji); ?>

    </div>

    <script type="text/javascript">
//全局变量
var GV = {
    ROOT: "/",
    WEB_ROOT: "/",
    JS_ROOT: "public/js/"
};
</script>
   <!-- Placed at the end of the document so the pages load faster -->
   <script src="/public/js/jquery.js"></script>
   <script src="/public/js/wind.js"></script>
   <script src="/themes/simplebootx/Public/assets/simpleboot/bootstrap/js/bootstrap.min.js"></script>
   <script src="/public/js/frontend.js"></script>
<script>
$(function(){
	$('body').on('touchstart.dropdown', '.dropdown-menu', function (e) { e.stopPropagation(); });
	
	$("#main-menu li.dropdown").hover(function(){
		$(this).addClass("open");
	},function(){
		$(this).removeClass("open");
	});
	
	$.post("<?php echo U('user/index/is_login');?>",{},function(data){
		if(data.status==1){
			if(data.user.avatar){
				$("#main-menu-user .headicon").attr("src",data.user.avatar.indexOf("http")==0?data.user.avatar:"<?php echo sp_get_image_url('[AVATAR]','!avatar');?>".replace('[AVATAR]',data.user.avatar));
			}
			
			$("#main-menu-user .user-nicename").text(data.user.user_nicename!=""?data.user.user_nicename:data.user.user_login);
			$("#main-menu-user li.login").show();
			
		}
		if(data.status==0){
			$("#main-menu-user li.offline").show();
		}
		
		/* $.post("<?php echo U('user/notification/getLastNotifications');?>",{},function(data){
			$(".nav .notifactions .count").text(data.list.length);
		}); */
		
	});	
	;(function($){
		$.fn.totop=function(opt){
			var scrolling=false;
			return this.each(function(){
				var $this=$(this);
				$(window).scroll(function(){
					if(!scrolling){
						var sd=$(window).scrollTop();
						if(sd>100){
							$this.fadeIn();
						}else{
							$this.fadeOut();
						}
					}
				});
				
				$this.click(function(){
					scrolling=true;
					$('html, body').animate({
						scrollTop : 0
					}, 500,function(){
						scrolling=false;
						$this.fadeOut();
					});
				});
			});
		};
	})(jQuery); 
	
	$("#backtotop").totop();
	
	
});
</script>


    <script src="/themes/simplebootx/Public/assets/js/slippry.min.js"></script>
    <script>
        $(function() {
            var demo1 = $("#homeslider").slippry({
                transition: 'fade',
                useCSS: true,
                captions: false,
                speed: 1000,
                pause: 3000,
                auto: true,
                preload: 'visible'
            });
        });
    </script>
    <?php echo hook('footer_end');?>
</body>

</html>