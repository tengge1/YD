<?php if (!defined('THINK_PATH')) exit();?>﻿<!DOCTYPE html>

<html lang="zh-cn">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <title>YDesigner</title>
    <link href="/YD/Public/Admin/css/themes/default/style.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/YD/Public/Admin/css/themes/css/core.css" rel="stylesheet" type="text/css" media="screen" />
    <link href="/YD/Public/Admin/css/themes/css/print.css" rel="stylesheet" type="text/css" media="print" />
    <!--[if IE]>
        <link href="/YD/Public/Admin/css/themes/css/ieHack.css" rel="stylesheet" type="text/css" media="screen"/>
    <![endif]-->
    <!--[if lte IE 9]>
        <script src="/YD/Public/Admin/js/speedup.js" type="text/javascript"></script>
    <![endif]-->
    <script src="/YD/Public/Admin/js/jquery-1.8.3.min.js" type="text/javascript"></script>
    <script src="/YD/Public/Admin/js/xheditor/xheditor-1.2.2.min.js" type="text/javascript"></script>
    <script src="/YD/Public/Admin/js/xheditor/xheditor_lang/zh-cn.js" type="text/javascript"></script>
    <script src="/YD/Public/Admin/js/jquery.cookie.js" type="text/javascript"></script>
    <script src="/YD/Public/Admin/js/jquery.validate.js" type="text/javascript"></script>
    <script src="/YD/Public/Admin/js/jquery.bgiframe.js" type="text/javascript"></script>
    <script src="/YD/Public/Admin/js/dwz.min.js" type="text/javascript"></script>
    <script src="/YD/Public/Admin/js/dwz.regional.zh.js" type="text/javascript"></script>
    <script src="/YD/Public/Admin/js/ajaxupload.js" type="text/javascript"></script>
    <script src="/YD/Public/Admin/js/json2.min.js" type="text/javascript"></script>
    <script type="text/javascript">
        $(function () {
            DWZ.init("/YD/Public/Admin/css/dwz.frag.xml", {
                loginUrl: "admin/login/Login.aspx", loginTitle: "登录",	// 跳到登录页面
                statusCode: { ok: 200, error: 300, timeout: 301 }, //【可选】
                pageInfo: { pageNum: "pageNum", numPerPage: "numPerPage", orderField: "orderField", orderDirection: "orderDirection" }, //【可选】
                keys: { statusCode: "statusCode", message: "message" }, //【可选】
                ui: { hideMode: 'offsets' }, //【可选】hideMode:navTab组件切换的隐藏方式，支持的值有’display’，’offsets’负数偏移位置的值，默认值为’display’
                debug: false,	// 调试模式 【true|false】
                callback: function () {
                    initEnv();
                    $("#themeList").theme({ themeBase: "/YD/Public/Admin/css/themes" }); // themeBase 相对于index页面的主题base路径
                }
            });
        });
    </script>
</head>
<body>
    <div id="layout">
        <div id="header">
            <div class="headerNav">
                <a class="logo" href="<?php echo U('Admin/Index/index');?>" style="width: 195px; margin-left:20px;"></a>
                <ul class="nav">
                    <li><a href="<?php echo U('password');?>" target="dialog" mask="true">修改密码</a></li>
                    <li><a href="<?php echo U('Admin/Login/logout');?>">退出</a></li>
                </ul>
                <ul class="themeList" id="themeList">
                    <li theme="default">
                        <div class="selected">蓝色</div>
                    </li>
                    <li theme="green">
                        <div>绿色</div>
                    </li>
                    <li theme="purple">
                        <div>紫色</div>
                    </li>
                    <li theme="silver">
                        <div>银色</div>
                    </li>
                    <li theme="azure">
                        <div>天蓝</div>
                    </li>
                </ul>
            </div>
        </div>
        <div id="leftside">
            <div id="sidebar_s">
                <div class="collapse">
                    <div class="toggleCollapse">
                        <div></div>
                    </div>
                </div>
            </div>
            <div id="sidebar">
                <div class="toggleCollapse">
                    <h2>导航菜单</h2>
                    <div>收缩</div>
                </div>
                <div class="accordion" fillspace="sidebar">
                    <div class="accordionHeader">
                        <h2><span>Folder</span>常用功能</h2>
                    </div>
                    <div class="accordionContent">
                        <ul class="tree treeFolder expand">
                            <li>
                                <a href="javascript:void(0)">系统管理</a>
                                <ul>
                                    <li><a href="<?php echo U('User/index');?>" target="navTab" rel="yd_user">用户管理</a></li>
                                    <li><a href="<?php echo U('Column/index');?>" target="navTab" rel="yd_column">栏目管理</a></li>
                                    <li><a href="<?php echo U('Article/index');?>" target="navTab" rel="yd_article">相关文档</a></li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div id="container">
            <div id="navTab" class="tabsPage">
                <div class="tabsPageHeader">
                    <div class="tabsPageHeaderContent">
                        <ul class="navTab-tab">
                            <li tabid="main" class="main"><a href="javascript:;"><span><span class="home_icon">我的主页</span></span></a></li>
                        </ul>
                    </div>
                    <div class="tabsLeft">left</div>
                    <div class="tabsRight">right</div>
                    <div class="tabsMore">more</div>
                </div>
                <ul class="tabsMoreList">
                    <li><a href="javascript:;">我的主页</a></li>
                </ul>
                <div class="navTab-panel tabsPageContent layoutBox">
                    <div class="page unitBox">
                        <div class="accountInfo">
                            <div class="alertInfo">
                                <p><span>欢迎您，<?php echo session('name');?>！</span></p>
                                <p>上次登录时间：<?php echo date('Y-m-d H:i:s', session('last_login_time'));?></p>
                            </div>
                            <div class="right">
                            </div>
                            <p>
                                <span>YDesigner</span>
                            </p>
                            <p>
                                文档总数：<?php echo ($article_count); ?> &nbsp;&nbsp;&nbsp;&nbsp;
                                用户总数：<?php echo ($user_count); ?> &nbsp;&nbsp;&nbsp;&nbsp;
                            </p>
                        </div>
                        <div class="pageFormContent"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="footer">Copyright © 2015 <a href="http://user.qzone.qq.com/930372551/main" target="_blank">QQ：930372551</a></div>
</body>
</html>