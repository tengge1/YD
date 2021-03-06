<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>
<html lang="zh-CN">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>首页</title>
    <link href="/YD/Public/Home/css/bootstrap.min.css" rel="stylesheet">
    <link href="/YD/Public/Home/css/non-responsive.css" rel="stylesheet">
    <link href="/YD/Public/Home/css/my.css" rel="stylesheet">
    <!--[if lt IE 9]>
      <script src="/YD/Public/Home/js/html5shiv.min.js"></script>
      <script src="/YD/Public/Home/js/respond.min.js"></script>
    <![endif]-->
</head>
<body>
    
    <nav class="navbar navbar-default navbar-fixed-top index-nav">
        <div class="container-fluid">
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo U('Index/index');?>">
                    <img alt="YDesigner" src="/YD/Public/Home/img/index-logo.png" />
                </a>
            </div>
            <div>
                <ul class="nav navbar-nav">
                    <li class="active"><a href="<?php echo U('Index/index');?>">首页</a></li>
                    <li><a href="<?php echo U('articleList');?>">最新资讯</a></li>
                    <li><a href="<?php echo U('articleDetail',array('article_id'=>22));?>">推荐产品</a></li>
                    <li><a href="http://112.74.212.185/YDesigner" target="_blank">系统演示</a></li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="index-mask"></div>

    
    <div class="jumbotron index-banner">
        <div class="container index-banner-text">
            <h1>应用系统设计的利器</h1>
            <p>做应用系统容易遇到的问题是，懂业务流程的人一般是企业管理者，但是他们不会编程；而会编程的我们却不懂企业的业务流程。客户的需求一般就是几页纸，很简单，其中细节问题需要我们自己问明白。做项目很大的一部分时间花在了我们学习企业的业务流程上，而且如果我们理解不对就去编程，很可能做了很多无用功。有没有办法让懂业务、不懂编程的人自己可以设计出系统？这样我们程序员就不用弄懂各个企业的管理流程，把注意力完全集中在编程上了......</p>
            <p><a class="btn btn-primary btn-lg" href="<?php echo U('articleDetail',array('article_id'=>22));?>" role="button">了解更多&gt;&gt;</a></p>
        </div>
    </div>

    
    <div class="container index-block">
        <div class="row">
            <div class="col-xs-4">
                <h5>最新资讯 / <span class="sub">NEWS</span><a class="pull-right" href="<?php echo U('articleList');?>">更多&gt;&gt;</a></h5>
                <hr />
                <ul>
                    <?php if(is_array($articles)): $i = 0; $__LIST__ = $articles;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo_article): $mod = ($i % 2 );++$i;?><li><a href="<?php echo U('articleDetail',array('article_id'=>$vo_article['id']));?>"><?php echo ($vo_article["title"]); ?></a></li><?php endforeach; endif; else: echo "" ;endif; ?>
                </ul>
            </div>
            <div class="col-xs-4">
                <h5>产品简介 / <span class="sub">INTRODUCE</span><!--<a class="pull-right">更多&gt;&gt;</a>--></h5>
                <hr />
                <img class="img-rounded img-login center-block" src="/YD/Public/Home/img/login.png" alt="YDesigner" />
                <br />
                <p>YDesigner是一个应用设计软件，用户只需要简单的鼠标操作，即可设计应用系统。YDesigner还可以自动生成数据库，用户完全不懂编程，也可以做出自己想要的系统。</p>
            </div>
            <div class="col-xs-4">
                <h5>案例展示 / <span class="sub">EXAMPLE</span><!--<a class="pull-right">更多&gt;&gt;</a>--></h5>
                <hr />
                <img class="img-rounded img-responsive center-block" src="/YD/Public/Home/img/index-youku.png" alt="Youku" />
            </div>
        </div>
    </div>
    <br />
    <br />

    
    <div class="container index-product">
        <h5><span>推荐产品</span></h5>
        <br />
        <div class="row">
<!--            <div class="col-xs-1">
                <img class="arrow" src="/YD/Public/Home/img/index-arrow-left.png" alt="arrow-left" />
            </div>-->
            <div class="col-xs-3">
                <a href="<?php echo U('articleDetail',array('article_id'=>22));?>">
                    <img class="img-responsive img-rounded" src="/YD/Public/Home/img/login.png" alt="YDesigner" />
                    <h4>YDesigner</h4>
                    <p>一个功能强大的应用设计器</p>
                </a>
            </div>
<!--            <div class="col-xs-7"></div>
            <div class="col-xs-1">
                <img class="arrow" src="/YD/Public/Home/img/index-arrow-right.png" alt="arrow-left" />
            </div>-->
        </div>
    </div>

    
    <div class="container-fluid text-center copyright">
        <ul class="center-block">
            <li><a href="<?php echo U('index');?>">首页</a></li>
            <li>|</li>
            <li><a href="<?php echo U('articleList');?>">最新资讯</a></li>
            <li>|</li>
            <li><a href="<?php echo U('articleDetail',array('article_id'=>22));?>">推荐产品</a></li>
            <li>|</li>
            <li><a href="http://112.74.212.185/YDesigner" target="_blank">系统演示</a></li>
        </ul>
        <div class="service-text">
            服务咨询：
            <img src="/YD/Public/Home/img/index-qq.png" alt="qq" /> 930372551
            邮箱：930372551@qq.com 
            页面设计：学妹小鱼儿
        </div>
        <div class="copyright-text">版权所有 &copy; All Right Reserved.</div>
    </div>

    <script src="/YD/Public/Home/js/jquery.min.js"></script>
    <script src="/YD/Public/Home/js/bootstrap.min.js"></script>
</body>
</html>