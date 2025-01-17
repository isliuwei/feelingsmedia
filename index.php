<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>feelngsmedia 慧灵思</title>
  <base href="<?php echo site_url(); ?>">


  <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no" />
  <link rel="stylesheet" media="screen" href="css/particles.css" />
  <link rel="stylesheet" media="screen" href="css/bootstrap.min.css" />
  <link rel="stylesheet" media="screen" href="css/btn.css" />
  <link rel="stylesheet" media="screen" href="css/footer.css" />
  <link rel="stylesheet" media="screen" href="css/font-awesome.min.css" />
  <link rel="stylesheet" href="css/lrtk.css" />
  <link rel="stylesheet" href="css/lrtk1.css" />
  <style>
    #login{
      background: rgba(255, 255, 255, 0);
      margin-left: 100px;
    }
    .login{
      background: rgba(255, 255, 255, 0);
      margin-left: 100px;
    }
    #captcha{
      width: 120px;
    }
    /*去掉html5 input number默认样式*/
    input[type="number"]{
      -moz-appearance: textfield;
    }
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button{
      -webkit-appearance: none !important;
      margin: 0;
    }
    .modal-btn{
      padding: 0;
      width: 65%;
      margin-bottom: 10px;
    }
    .form-actions{
      padding:5px 20px;
    }
    .close {
      float: right;
      font-size: 50px;
      font-weight: 900;
      line-height: 1;
      color: #fff;
      text-shadow: 0 1px 0 #fff;
      filter: alpha(opacity=50);
      opacity: .5;
      transition: all 0.1 liner;
    }
    .close:hover{
      transform: rotate(360deg);
      opacity: 1;
      color: #fff;
    }
  </style>

</head>
<body>

<header class='navbar navbar-top navbar-fixed-top' id='main-navbar' role='banner'>

    <nav class='collapse navbar-collapse' role='navigation'>

      <!-- <img class="logo" alt="" src="/images/favicon.ico"> -->
      <ul class='nav navbar-nav navbar-left'>
        <li  class="active"><a href="#">首页</a></li>
        <li><a href="#">联系我们</a></li>
        <li><a href="#">关于我们</a></li>
      </ul>
    </nav>

</header>




  <!-- particles.js container -->

  <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img/demo1.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="img/demo2.jpg" alt="...">
      <div class="carousel-caption">
        ...
      </div>
    </div>
    <div class="item">
      <img src="img/demo3.jpg" alt="...">
      <div class="carousel-caption">
        .fdsfdsfds
      </div>
    </div>
    ...
  </div>

  <div id="particles-js"></div>




  </div>


  <div class="htmleaf-container">

    <section class="buttons">
      <div class="container">



      <a  href="#" class="link btn btn-1">慧灵思简介</a>
      <br>

      <a  href="#" class="link btn btn-2"  data-toggle="modal" data-target="#ader-reg">我是广告主</a>
      <br>



      <a  href="#" class="link btn btn-5" data-toggle="modal" data-target="#anchor-reg">我是主播</a>
      <br>

      <a  href="#" class="link btn btn-4" data-toggle="modal" data-target="#company-reg"><span>我是媒体咨询公司</span></a>
      <br>







      </div>

    </section>


<div id="Bfooter">

      <div class="Bfooter-wrap">
        <div class="Bfooter-info">
          <!-- <h3>for U</h3> -->
          <img class="logo-title" src="img/logo-bg.png" alt="">
          <p>feelingsmedia.com</p>
          <ul class="about-us">
            <li><a href="#">关于我们</a></li>
            <li><a href="#">联系我们</a></li>
            <li><a href="#">加入我们</a></li>
            <li><a href="#">用户协议</a></li>
            <li><a href="#">免责声明</a></li>
          </ul>
        </div>
        <div class="Bfooter-contact">
          <p class="tel"><span><i class="fa fa-phone"></i></span>客服电话：<a href="tel:10086">400-666-8800</a></p>
          <p class="feedback"><span><i class="fa fa-envelope"></i></span>意见反馈：<a class="mail" href="mailto:forUemail@163.com">forUemail@163.com</a></p>
          <p class="worktime"><span><i class="fa fa-calendar"></i></span>工作时间：周一到周五 10:00-19:00</p>
          <p class="address"><span><i class="fa fa-map-marker"></i></span>联系地址：黑龙江省哈尔滨市南岗区黑龙江大学</p>
          <!-- <a id="online-chat" href="http://www.sobot.com/chat/pc/index.html?sysNum=05a92d4d6af748b4a2086f0b5e388993" target="_blank"><span><i class="fa fa-microphone"></i></span>在线客服</a> -->

        </div>
        <!-- <div class="hh"></div>
        <div class="Bweixin-QRcode">
          <img src="image/QR.png" alt="">
          <p>扫码关注微信公众平台</p>
        </div> -->
      </div>


      <hr style="filter: progid:DXImageTransform.Microsoft.Glow(color=#987cb9,strength=10)" width="100%" color="#987cb9" size="1">


      <div class="Bfooter-detail">
        <div class="Bcopyright">
          <p>Copyright&nbsp;&copy;&nbsp;2016-2016 forU.site | 皖ICP备15024039 | Our Team: 李彦宏 马化腾 马云 周鸿祎 库克</p>
        </div>

        <div class="Bweb-secure">
          <p>举报通道：</p>
          <a href="http://net.china.cn/chinese/index.htm" target="_blank"><img src="img/net-china-circle.png" width="20"></a>
          <a href="http://www.cyberpolice.cn/wfjb/" target="_blank"><img src="img/cyberpolice-circle.png" width="20"></a>
          <p>技术支持：</p>
          <a href="http://www.aliyun.com" rel="nofollow" class="external" target="_blank"><img src="img/aly.png" alt="" width="49px"></a>
        </div>


        <div class="Bshare">
          <ul class="Bshare-list">
            <li><a class="weibo" href=""><span><i class="fa fa-weibo"></i></span></a></li>
            <li><a class="facebook" href=""><span><i class="fa fa-facebook"></i></span></a></li>
            <li><a class="twitter" href=""><span><i class="fa fa-twitter"></i></span></a></li>
            <li><a class="qq" href=""><span><i class="fa fa-qq"></i></span></a></li>
            <li><a class="share-alt" href=""><span><i class="fa fa-share-alt"></i></span></a></li>
          </ul>
        </div>
      </div>

  </div>










<div class="modal fade" id="ader-reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div id="login">
              <form action="#" method="post" class="container offset1 loginform">
                  <div id="owl-login">
                      <div class="hand"></div>
                      <div class="hand hand-r"></div>
                      <div class="arms">
                          <div class="arm"></div>
                          <div class="arm arm-r"></div>
                      </div>
                  </div>
                  <br>
                  <h3>广告主登录</h3>
                  <div class="pad">
                      <input type="hidden" name="" value="">
                      <div class="control-group">
                          <div class="controls">
                              <label for="username" class="control-label fa fa-user"></label>
                              <input id="username" type="text" name="username" placeholder="用户名" tabindex="1" autofocus="autofocus" class="form-control input-medium">
                          </div>
                      </div>

                      <div class="control-group">
                          <div class="controls">
                              <label for="password" class="control-label fa fa-key"></label>
                              <input id="password" type="password" name="password" placeholder="密码" tabindex="2" class="form-control input-medium">
                          </div>
                      </div>

                      <div class="control-group">
                          <div class="controls">
                            <label for="captcha" class="control-label fa fa-key"></label>
                              <input id="captcha" type="number" name="captcha" placeholder="验证码" tabindex="2" class="form-control col-md-2">
                              <img id="captcha-img" src="img/demo.jpg" alt="">
                              <span id="captcha-tip"><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i>换一张</a></span>
                          </div>

                      </div>


                  </div>
                  <div class="form-actions">
                      <p><a href="#" tabindex="5" class=" pull-left btn-link text-muted">忘记密码?</a></p>
                      <br>
                      <button type="submit" tabindex="4" class="btn btn-primary modal-btn">登录</button>
                      <button type="button" tabindex="4" class="btn btn-primary modal-btn"><a href="ader-reg.html" style="display:block;color:#fff;">注册</a></button>
                  </div>

              </form>
        </div>
    </div>
</div>


<div class="modal fade" id="anchor-reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="login">
              <form action="#" method="post" class="container offset1 loginform">
                  <div class="owl-login">
                      <div class="hand"></div>
                      <div class="hand hand-r"></div>
                      <div class="arms">
                          <div class="arm"></div>
                          <div class="arm arm-r"></div>
                      </div>
                  </div>
                  <br>
                  <h3>主播登录</h3>
                  <div class="pad">
                      <input type="hidden" name="" value="">
                      <div class="control-group">
                          <div class="controls">
                              <label for="username" class="control-label fa fa-user"></label>
                              <input id="username" type="text" name="username" placeholder="用户名" tabindex="1" autofocus="autofocus" class="form-control input-medium">
                          </div>
                      </div>

                      <div class="control-group">
                          <div class="controls">
                              <label for="password" class="control-label fa fa-key"></label>
                              <input id="password" type="password" name="password" placeholder="密码" tabindex="2" class="form-control input-medium">
                          </div>
                      </div>

                      <div class="control-group">
                          <div class="controls">
                            <label for="captcha" class="control-label fa fa-key"></label>
                              <input id="captcha" type="number" name="captcha" placeholder="验证码" tabindex="2" class="form-control col-md-2">
                              <img id="captcha-img" src="img/demo.jpg" alt="">
                              <span id="captcha-tip"><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i>换一张</a></span>
                          </div>

                      </div>


                  </div>
                  <div class="form-actions">
                      <p><a href="#" tabindex="5" class=" pull-left btn-link text-muted">忘记密码?</a></p>
                      <br>
                      <button type="submit" tabindex="4" class="btn btn-primary modal-btn">登录</button>
                      <button type="button" tabindex="4" class="btn btn-primary modal-btn"><a href="anchor-reg.html" style="display:block;color:#fff;">注册</a></button>
                  </div>

              </form>
        </div>
    </div>
</div>



<div class="modal fade" id="company-reg" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel">
  <div class="modal-dialog" role="document">
    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <div class="login">
              <form action="#" method="post" class="container offset1 loginform">
                  <div class="owl-login">
                      <div class="hand"></div>
                      <div class="hand hand-r"></div>
                      <div class="arms">
                          <div class="arm"></div>
                          <div class="arm arm-r"></div>
                      </div>
                  </div>
                  <br>
                  <h3>媒体资源公司登录</h3>
                  <div class="pad">
                      <input type="hidden" name="" value="">
                      <div class="control-group">
                          <div class="controls">
                              <label for="username" class="control-label fa fa-user"></label>
                              <input id="username" type="text" name="username" placeholder="用户名" tabindex="1" autofocus="autofocus" class="form-control input-medium">
                          </div>
                      </div>

                      <div class="control-group">
                          <div class="controls">
                              <label for="password" class="control-label fa fa-key"></label>
                              <input id="password" type="password" name="password" placeholder="密码" tabindex="2" class="form-control input-medium">
                          </div>
                      </div>

                      <div class="control-group">
                          <div class="controls">
                            <label for="captcha" class="control-label fa fa-key"></label>
                              <input id="captcha" type="number" name="captcha" placeholder="验证码" tabindex="2" class="form-control col-md-2">
                              <img id="captcha-img" src="img/demo.jpg" alt="">
                              <span id="captcha-tip"><a href="#"> &nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-refresh"></i>换一张</a></span>
                          </div>

                      </div>


                  </div>
                  <div class="form-actions">
                      <p><a href="#" tabindex="5" class=" pull-left btn-link text-muted">忘记密码?</a></p>
                      <br>
                      <button type="submit" tabindex="4" class="btn btn-primary modal-btn">登录</button>
                      <button type="button" tabindex="4" class="btn btn-primary modal-btn"><a href="company-reg.html" style="display:block;color:#fff;">注册</a></button>
                  </div>

              </form>
        </div>
    </div>
</div>




<!-- scripts -->
<script src="js/particles.js"></script>
<script src="js/app.js"></script>

<!-- stats.js -->
<script src="js/stats.js"></script>
<script src="js/jquery-1.11.3.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script>
  $(function() {
      $('#login #password').focus(function() {
          $('#owl-login').addClass('password');
      }).blur(function() {
          $('#owl-login').removeClass('password');
      });




      $('.login #password').focus(function() {
          $('.owl-login').addClass('password');
      }).blur(function() {
          $('.owl-login').removeClass('password');
      });


  });
</script>









</div>
</body>
</html>


</body>
</html>
