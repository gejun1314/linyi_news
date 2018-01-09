<?php
use yii\helpers\Url;
?>


<!DOCTYPE html>

<html lang="zh-CN">

<head>

<meta charset="utf-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="revised" content="Ningxia Seasons, 2015/8/13/" />

<!-- 定义页面的最新版本 -->

<meta name="description" content="网站简介" />

<!-- 网站简介 -->

<meta name="keywords" content="搜索关键字，以半角英文逗号隔开" />

<!-- 搜索关键字 -->

<meta name="viewport" content="width=device-width, initial-scale=1">

<title>个人中心</title>





<!-- CSS公共部分 开始 -->

<link href="pre/css/bootstrap.min.css" rel="stylesheet">

<!--[if lt IE 9]>

      <script src="/pre///cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="/pre///cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

<link href="pre/css/style.css" rel="stylesheet">

<!-- CSS公共部分 结束 -->

<link href="pre/css/crowdfunding.css" rel="stylesheet">

</head>

<body>

<!-- 核心 开始 -->

<div class="container border1 nopadding margin10">

    <div id="vertical_navigation" class="col-lg-3 background831312 nopadding">

        <div class="dead_pic"><img src="/pre/images/nopic.jpg.png"><br>

            <span class="username">用户名</span></div>

        <div class="usertype">用户类型： 金牌用户<br>

            会员等级：  <img style="margin-right:0px;" src="/pre/images/xx2.png"/> <img style="margin-right:0px;" src="/pre/images/xx2.png" /> <img style="margin-right:0px;" src="/pre/images/xx2.png"/> <img style="margin-right:0px;" src="/pre/images/xx2.png"/></div>

        <div class="menu">

            <div class="menu_title"> 我的信息 </div>

            <div class="menu_list">

                <ul class="list-unstyled">

                    <li id="listClick1" class="menu_list_on" onClick="listClick(1)"><img src="/pre/images/left_icon_1.png"> 基本信息</li>

                    <li id="listClick2" class="" onClick="listClick(2)"> <img src="/pre/images/left_icon_2.png"> 修改头像</li>

                    <li id="listClick4" class="" onClick="listClick(4)"> <img src="/pre/images/left_icon_3.png"> 修改密码</li>


                </ul>

            </div>

        </div>

        <div class="menu">

            <div class="menu_title"> 我的发布 </div>

            <div class="menu_list">

                <ul class="list-unstyled">

                    <li id="listClick6" class="" onClick="listClick(6)"><img src="/pre/images/left_icon_6.png"> 新闻管理</li>
                    <li id="listClick19" class="" onClick="listClick(19)"><img src="/pre/images/left_icon_6.png"> 新闻发布</li>

                </ul>

            </div>

        </div>


        <div class="menu">

            <div class="menu_title"> 我的星级和积分 </div>

            <div class="menu_list">

                <ul class="list-unstyled">

                    <li id="listClick11" class="" onClick="listClick(11)"><img src="/pre/images/left_icon_9.png"> 星级和积分介绍</li>

                    <li id="listClick12" class="" onClick="listClick(12)"> <img src="/pre/images/left_icon_12.png"> 积分纪录</li>

                    <li id="listClick13" class="" onClick="listClick(13)"> <img src="/pre/images/left_icon_13.png"> 积分规则</li>

                </ul>

            </div>

        </div>

        <div class="menu">

            <div class="menu_title"> 我的消息 </div>

            <div class="menu_list">

                <ul class="list-unstyled">

                    <li id="listClick14" class="" onClick="listClick(14)"><img src="/pre/images/left_icon_14.png"> 发送新消息</li>

                    <li id="listClick15" class="" onClick="listClick(15)"> <img src="/pre/images/left_icon_15.png"> 收件箱</li>

                    <li id="listClick16" class="" onClick="listClick(16)"> <img src="/pre/images/left_icon_16.png"> 发件箱</li>

                </ul>

            </div>

        </div>

    </div>
  <div class="col-lg-9">
  	<iframe name="left" id="crowdfunding_iframe" src="<?= Url::to(['personal/my_info']);?>" frameborder="false" scrolling="no" style="border:none;" width="100%" height="1045" allowtransparency="true"></iframe>

  </div>

</div>

<!-- JS公共部分 开始 -->

<script src="/pre/js/jquery-2.1.1.min.js"></script>

<script src="/pre/js/bootstrap.min.js"></script>

<script src="/pre/js/basics.js"></script>

<!-- JS公共部分 结束 -->

<script src="/pre/js/crowdfunding.js"></script>

</body>

</html>

<!-- 核心 结束 -->



