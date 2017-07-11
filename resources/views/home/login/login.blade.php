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

<script src="{{ asset('home/assets/js/instant.14757a4a_5.js') }}"></script>
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

<a href="">登录</a>
<span class="navs-slider-bar"></span>
</div>
</div>


<div class="view view-signin" data-za-module="SignInForm">


</div>
<div class="view view-signup selected" data-za-module="SignUpForm">
<form class="zu-side-login-box" action="/home/dologin"  method="POST">
  @if(session('info'))
        <p class="text-danger">{{session('info')}}</p>
    @endif

{{csrf_field()}}
<div class="group-inputs">

<div class="name input-wrapper">
<input required type="text" name="name"  placeholder="姓名">
</div>
<div class="input-wrapper">
<input required type="password" name="password" aria-label="密码" placeholder="密码（不少于 6 位）" autocomplete="off">
</div>
<div class="input-wrapper">
<input required type="password"  name="code" class="form-control" placeholder="验证码">
        <a onclick="javascript:re_captcha();" ><img src="{{ URL('kit/captcha/1') }}"  alt="验证码" title="刷新图片" width="100" height="40" id="c2c98f0de5a04167a9e427d883690ff6" border="0"></a>
</div>


</div>
<div class="button-wrapper command">
<button class="sign-button submit" type="submit">登录知乎</button>
</div>
</form>
<p class="agreement-tip">点击「登录」按钮，即代表你同意<a href="#" target="_blank">《知乎协议》</a></p>
<p class="agreement-tip"><a href="{{url('/home/regist')}}">注册</a></p>
<p class="agreement-tip"><a href="{{url('/home/pro')}}">意见反馈</a></p>
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
<script src="{{ asset('home/assets/js/vendor.cb14a042_5.js') }}"></script>
<script src="{{ asset('home/assets/js/base.ecc1e150_2.js') }}"></script>

<script src="{{ asset('home/assets/js/common.d6c46a16_2.js') }}"></script>
<script src="{{ asset('home/assets/js/page-index.352df081_2.js') }}"></script>
<meta name="entry" content="ZH.entrySignPage" data-module-id="page-index">
</body>


<script>
  //点击生成新的验证码
   function re_captcha() {
    $url = "{{ URL('kit/captcha') }}";
        $url = $url + "/" + Math.random();
        document.getElementById('c2c98f0de5a04167a9e427d883690ff6').src=$url;
  }
</script>
</html>