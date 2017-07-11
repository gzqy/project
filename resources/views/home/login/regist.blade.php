<!DOCTYPE html>
<html lang="zh-CN" class="">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
<meta name="renderer" content="webkit" />
<meta name="description" content="一个真实的网络问答社区，帮助你寻找答案，分享知识。"/>
<meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1.0, maximum-scale=1.0"/>
<title>知乎 - 与世界分享你的知识、经验和见解</title>

<link rel="stylesheet" href="css/main.4807c903_2.css">
<meta name="google-site-verification" content="FTeR0c8arOPKh8c5DYh_9uu98_zJbaWw53J-Sch9MTg" />
<meta name="baidu-site-verification" content="KPFppAFoYF4Kkdv9" />
<meta property="qc:admins" content="00544670776201056375" />
<link rel="canonical" href="http://www.zhihu.com" />
<meta id="znonce" name="znonce" content="053344737a594a11ae62a21788046f70">
<!--[if lt IE 9]>
<script src="js/respond.min_5.js"></script>
<link href="https://static.zhihu.com/static/components/respond/cross-domain/respond-proxy.html" id="respond-proxy" rel="respond-proxy" />
<link href="/static/components/respond/cross-domain/respond.proxy.gif" id="respond-redirect" rel="respond-redirect" />
<script src="js/respond.proxy_5.js"></script>
<![endif]-->
<script src="js/instant.14757a4a_5.js"></script>
</head>
<body class="zhi ">




<div class="index-main">
<div class="index-main-body">
<div class="index-header">

<h1 class="logo hide-text">知乎</h1>

<h2 class="subtitle">与世界分享你的知识、经验和见解</h2>
</div>

<div class="desk-front sign-flow clearfix sign-flow-simple">

<div class="index-tab-navs">
<div class="navs-slider">
<p>注册</p>
</div>
</div>


<div class="view view-signin" data-za-module="SignInForm">


</div>
<div class="view view-signup selected" data-za-module="SignUpForm">
<form class="zu-side-login-box" action="/home/doregist"  method="POST">
<input type="password" hidden> 
{{csrf_field()}}
<div class="group-inputs">
@if(session('info'))
	<div class="name input-wrapper">
	{{ session('info') }}
	</div>
@endif

  @if (count($errors) > 0)
    <div class="name input-wrapper">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
<div class="name input-wrapper">
<input required type="text" name="name" aria-label="姓名" placeholder="姓名（不少于 3 位）">
</div>
<div class="email input-wrapper">

<input required type="password" name="password" aria-label="密码" placeholder="密码（不少于 6 位）" autocomplete="off">


</div>

<div class="input-wrapper">
<input required type="password" name="re_password" aria-label="重复密码" placeholder="与密码相同" autocomplete="off">
</div>

<div class="input-wrapper">
<input required type="email" name="email" aria-label="邮箱" placeholder="请填写正确的邮箱" autocomplete="off">
</div>


</div>
<div class="button-wrapper command">
<button class="sign-button submit" type="submit">注册知乎</button>
</div>
</form>

<p class="agreement-tip">点击「注册」按钮，即代表你同意<a href="/terms" target="_blank">《知乎协议》</a></p>
<p class="agreement-tip"><a href="{{url('/home/login')}}">登录</a></p>
</div>
</div>
</div>

</div>
<div class="footer">

<span>&copy; 2017 知乎</span>
<span class="dot">·</span>
<a target="_blank" href="https://zhuanlan.zhihu.com">知乎专栏</a>
<span class="dot">·</span>
<a target="_blank" href="/roundtable">知乎圆桌</a>
<span class="dot">·</span>
<a target="_blank" href="/explore" data-za-c="explore" data-za-a="visit_explore" data-za-l="home_bottom_explore">发现</a>
<span class="dot">·</span>
<a target="_blank" href="/app">移动应用</a>
<span class="dot">·</span>


<a href="/org/signin" class="footer-mobile-show">使用机构帐号登录</a>

<span class="dot footer-mobile-show">·</span>

<a href="/contact" class="footer-mobile-show">联系我们</a>
<span class="dot">·</span>
<a target="_blank" href="/careers">来知乎工作</a>
<br />
<a href="http://www.miibeian.gov.cn/" target="_blank">京 ICP 证 110745 号</a>
<span class="dot">·</span>
<span>京公网安备 11010802010035 号</span>
<span class="dot">·</span>
<a href="http://zhstatic.zhihu.com/assets/zhihu/publish-license.jpg" target="_blank">出版物经营许可证</a>
<span class="dot">·</span>
<a target="_blank" href="/jubao">侵权投诉</a>
<span class="dot">·</span>
<a target="_blank" href="http://www.12377.cn">网上有害信息举报专区</a>
<span class="dot">·</span>
<span>违法和不良信息举报：010-82716601</span>


</div>



<script type="text/json" class="json-inline" data-name="disabled_components">["back_to_top"]</script>
<script type="text/json" class="json-inline" data-name="current_user">["","","","-1","",0,0]</script>
<script type="text/json" class="json-inline" data-name="env">["zhihu.com","comet.zhihu.com",false,null,false,false]</script>

<script type="text/json" class="json-inline" data-name="ga_vars">{"user_created":0,"now":1499157816000,"abtest_mask":"------------------------------","user_attr":[0,0,0,"-","-"],"user_hash":0}</script>

<script src="js/vendor.cb14a042_5.js"></script>
<script src="js/base.ecc1e150_2.js"></script>

<script src="js/common.d6c46a16_2.js"></script>
<script src="js/page-index.352df081_2.js"></script>
<meta name="entry" content="ZH.entrySignPage" data-module-id="page-index">
</body>
</html>