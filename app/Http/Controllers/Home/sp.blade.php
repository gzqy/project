<!DOCTYPE html>
<html><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">		<title>梁非凡商城</title> <meta name="description" content="美丽说是白领女性时尚消费品牌，为超过1亿注册用户提供导购信息。建立300万全球女性时尚品牌商品库，超过1000家全球品牌达成官方合作导购体验，更好的满足白领女性的时尚消费需求。">         <meta name="keywords" content="美丽说,美丽说官网,美丽说首页,美丽说登录,导购,白领,女装,网购">	<link rel="dns-prefetch" href="http://static.meilishuo.net/">	<link rel="dns-prefetch" href="http://s6.mogucdn.com/">	<link rel="dns-prefetch" href="http://s7.mogucdn.com/">	<link rel="dns-prefetch" href="http://s11.mogucdn.com/">	<link rel="dns-prefetch" href="http://s16.mogucdn.com/">	<link rel="dns-prefetch" href="http://s17.mogucdn.com/">	<link rel="dns-prefetch" href="https://s10.mogucdn.com/">         <meta http-equiv="x-ua-compatible" content="IE=edge,chrome=1">	<meta name="renderer" content="webkit">	<meta name="mobile-agent" content="format=html5;url=http://m.meilishuo.com">         <link rel="icon" href="https://s10.mogucdn.com/mlcdn/c45406/170612_02i668aijej2cb21ji56g98a218dg_48x48.png" type="image/x-icon">
	<link rel="stylesheet" href="{{asset('home/css/css/sidebar.css')}}">	
  <link type="text/css" rel="stylesheet" href="{{asset('home/css/css/base-2bac77b294.css')}}">	
  <link type="text/css" rel="stylesheet" href="{{asset('home/css/css/welcome-fc9359d842.css')}}">
<style type="text/css">.im-frame-container {
  width: 580px;
  height: 430px;
  position: fixed;
  z-index: 1000;
  display: none;
  left: 10px;
  top: 10px;
}
.im-frame-container .im-frame-box {
  width: 100%;
  height: 100%;
  border: none;
}
.im-frame-container .im-frame-drag {
  width: 470px;
  height: 32px;
  position: absolute;
  z-index: 3;
  left: 75px;
  top: 24px;
}
.im-frame-container .im-frame-btn {
  width: 32px;
  height: 32px;
  position: absolute;
  right: 0;
  top: 24px;
  z-index: 2;
  cursor: pointer;
  opacity: 0;
  background-color: rgba(255, 102, 153, 0);
}
 
</style><style id="waterfall-optimise-style">.waterfall-optimise-show{display:block;}.waterfall-optimise-hide{display:none;}.waterfall-container{position:relative;}.waterfall-box{position:absolute;}</style></head><body>

<div class="content-wrap" style="height: 846px; text-align:center ;width:1100px; margin:0 auto; ">     
  @foreach($res as $key => $val)  
  <div class="content pic-list js-top-goods-today"> 
                    
              <div class="item is-side">    
                  <a href="" target="_blank" class="pic-box lazyload-img-start lazyload-img-end"> 
                      <img src="/uploads/pricute/{{ $val->pricute}}" style="width:100%;height:100%">               
                  </a>   
                  <div class="info">     
                      <div class="part">
                          <div class="text">{{$val->name}}:    
                          <div class="">¥:<div class="price" style="display:inline;">{{$val->pirce}}</div></div>    
                          <div class="collect">加入购物车</div>
                      </div>     
                      <p class="title"><i class="icon-select"></i>{{$val->monut}}</p>
                  </div>     
                  </div>  
              </div>
    <div>
     @endforeach

      <div id="did">
           <button type="submit" class="btn btn-primary">付款</button>
      </div>


    <script type="text/javascript" src="{{asset('/home/jquery-1.8.3.min.js')}}"></script>
    <script>   

    
        var col =  $(".collect");

        var a=[];
      
        col.each(function(){

          $(this).click(function(){


            var bb = $(this).parent("div").find(".price").html();

            a.push(bb);

             alert(sum(a));

             

                
          })

        })

      //封装一个计算总价的sum函数
    function sum(a)
    { 
     
      var sum = 0;

      $.each(a,function(i,n)
     {
          sum += (n*1);
          console.log(sum);
      })

      return sum ;
    }



    $("#did").on('click',function(){

      alert('');
    })

        </script>
     
        </body>
    
        </html>