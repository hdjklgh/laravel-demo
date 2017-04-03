<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>后台管理模板</title>
    <meta name="renderer" content="webkit">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="format-detection" content="telephone=no">
    <link rel="stylesheet" href="{{asset('/plugins/layui/css/layui.css')}}" media="all" />
    <link rel="stylesheet" href="{{asset('/css/global.css')}}" media="all">
    <link rel="stylesheet" href="{{asset('/css/lay-reset.css')}}" />
</head>
<body>
<div class="layui-layout layui-layout-admin">
    <div class="layui-header header header-demo">
        <div class="layui-main">
            <div class="admin-login-box">
                <a class="logo" style="left: 0;" href="#">
                    <span style="font-size: 22px;"><img src="{{asset('/images/logo.png')}}"/></span>
                </a>
            </div>
            <ul class="layui-nav admin-header-item">
                <li class="layui-nav-item">
                    <a href="javascript:;" class='admin-infomation'>
                        <i class="layui-icon ">&#xe6b6;</i>
                        <i class="admin-warning"></i>
                    </a>
                </li>
                <li class="layui-nav-item">
                    <a href="javascript:;" class="admin-header-user admin-col-primary">
                        <span>早安商务中心</span>
                    </a>
                    <dl class="layui-nav-child">
                        <dd>
                            <a href="javascript:;"><i class="fa fa-user-circle" aria-hidden="true"></i> 万众城</a>
                        </dd>
                        <dd>
                            <a href="javascript:;"><i class="fa fa-gear" aria-hidden="true"></i> 展涛商务大厦</a>
                        </dd>
                        <dd>
                            <a href="javascript:;"><i class="fa fa-gear" aria-hidden="true"></i> 金銮时代大厦</a>
                        </dd>
                    </dl>
                </li>
                <li class="layui-nav-item">
                    <a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
                </li>
            </ul>
            <ul class="layui-nav admin-header-item-mobile">
                <li class="layui-nav-item">
                    <a href="login.html"><i class="fa fa-sign-out" aria-hidden="true"></i> 注销</a>
                </li>
            </ul>
        </div>
    </div>
    <div class="layui-side layui-bg-black admin-index-side" id="admin-side">
        <div class="layui-side-scroll" id="admin-navbar-side" lay-filter="side"></div>
    </div>
    <div class="layui-body" style="bottom: 0;border-left: solid 2px #1AA094;" id="admin-body">
        <div class="layui-tab layui-tab-card admin-nav-card" lay-filter="admin-tab">
            <ul class="layui-tab-title tab-index" id="tabIndex">
                <li class="layui-this">
                    <i class="fa fa-dashboard" aria-hidden="true"></i>
                    <cite>首页</cite>
                </li>
            </ul>
            <div class="layui-tab-content" id="tabContent" style="min-height: 150px; padding: 5px 0 0 0;">
                <div class="layui-tab-item layui-show">
                    <iframe src="{{asset('site/home')}}"></iframe>
                </div>
            </div>
        </div>
    </div>
    <!--锁屏模板 start-->
    <script type="text/template" id="lock-temp">
        <div class="admin-header-lock" id="lock-box">
            <div class="admin-header-lock-img">
                <img src="images/0.jpg"/>
            </div>
            <div class="admin-header-lock-name" id="lockUserName">beginner</div>
            <input type="text" class="admin-header-lock-input" value="输入密码解锁.." name="lockPwd" id="lockPwd" />
            <button class="layui-btn layui-btn-small" id="unlock">解锁</button>
        </div>
    </script>
    <!--锁屏模板 end -->
    <script type="text/javascript" src="{{asset('/plugins/layui/layui.js')}}"></script>
    <script type="text/javascript" src="{{asset('/js/part/common.js')}}"></script>
    <script type="text/javascript">
        var navs = null;
        layui.use(['jquery'], function() {
            var $ = layui.jquery;
            // todo 异步加载左侧菜单
            $.post('{{url('site/menu')}}', {'_token': '{{csrf_token()}}'}, function (response) {
                if (response.flag) {
                    navs = response.data;
                    //返回菜单数据的时候，才加载index.js，把数据渲染成菜单
                    $.common.addJs("{{asset('/js/index.js')}}");
                }
            });
            // todo 改写F5的刷新，当使用刷新的时候，刷新当前的iframe
            $(document).bind("keydown",function(e){
                var curr_window = $('.layui-show>iframe')[0];
                return $.common.f5Reload(curr_window.contentWindow);
            });
            // todo 禁止右键菜单
            $("body").bind("contextmenu", function(e) {
                return false;
            });
        });
    </script>
</div>
</body>
</html>