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

<title>某经融公司股权众筹站点</title>



<!-- Bootstrap -->

<link href="/pre/css/my_info.css" rel="stylesheet">



<!--[if lt IE 9]>

      <script src="//cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"></script>

      <script src="//cdn.bootcss.com/respond.js/1.4.2/respond.min.js"></script>

    <![endif]-->

</head>

<body>

<!-- 开始 -->

<div class="my_info_title">我的资料<span>

  <button type="button" class="but">签到</button>

  <p>07月29日<br>

    漏签1天</p>

  </span></div>

<div class="my_info_title_3">

  <ul>

    <li id="listClick_1" onClick="listClick(1)" style="border-bottom: 1px solid #C40521; color: #C40521;">基本资料</li>
 
    <li id="listClick_4" onClick="listClick(4)">修改密码</li>

  </ul>

</div>

<div class="my_info_content">

  <div class="my_info_content_care"> </div>

  <table class="my_info_content_care_table">

    <tbody>
    <form action="/personal/make_head" method="post">
        <input type="hidden" name="_csrf" value="<?=\Yii::$app->request->csrfToken?>">
      <tr>
        <td width="90" align="right" class="color555">用户名：</td>

        <td class="color555"><input class="my_info_content_care_table_text" id="username" name="nickname" type="text"></td>

      </tr>

      <tr>

        <td align="right" class="color555">E-mail邮箱：</td>

        <td class="color555"><input class="my_info_content_care_table_text" name="email" value="" type="text"></td>

      </tr>
      <tr>

        <td align="right" class="color555">注册时间：</td>

        <td class="color555"><input class="my_info_content_care_table_text" name="regdate" type="text"></td>

      </tr>

      <tr>

        <td align="right" class="color555">真实姓名：</td>

        <td class="color555"><input class="my_info_content_care_table_text" name="username" type="text"></td>

      </tr>


      <tr>

        <td align="right" class="color555">注册IP：</td>

        <td class="color555">127.0.0.1</td>

      </tr>

      <tr>

        <td align="right" class="color555">上次登录IP：</td>

        <td class="color555">127.0.0.1</td>

      </tr>


      <tr>

        <td align="right" class="color555">联系电话：</td>

        <td class="color555"><input class="my_info_content_care_table_text" name="" value="" type="text"></td>

      </tr>

      <tr>

        <td align="right" class="color555">出生日期：</td>

        <td class="color555"><input class="my_info_content_care_table_text" name="lastdate" value="" type="text"></td>

      </tr>

      <tr>

        <td align="center" class="color555" colspan="2"><input class="my_info_content_care_table_submit" type="submit" value="提交"></td>

      </tr>

    </tbody>

  </table>

</div>

</form>

<!-- 结束 --> 

<script src="/pre/js/jquery-2.1.1.min.js"></script>

<script src="/pre/js/my_info.js"></script>

<script src="/pre/js/jquery.cityselect.js"></script>

<script type="text/javascript">
// JavaScript Document
$(document).ready(function(){

	$("#my_city").citySelect({

		prov:"北京",

		nodata:"none"

	});
});

$('#username').blur(function (){
  alert "1111";
  $.ajax({
    url: "",
    type: "POST",
    //dataType: "json",
    data:{
      name:$(this).val(),
    },
    success:function (name) {
      if(name==''){
        $('#nametxt').html('用户名不能为空');
        $('#nametxt').css('color','red');
      }else{
        $('#nametxt').html('通过验证');
        $('#nametxt').css('color','green');
      }
    }
  })
});
</script>

</body>

</html>