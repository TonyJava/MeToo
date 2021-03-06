<?php if (!defined('THINK_PATH')) exit();?><!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>迷途网</title>
<link rel="stylesheet" href="/MeToo/Public/end/css/bootstrap.css">
<link href="/MeToo/Public/end/css/jquery-ui.css" rel="stylesheet">
<link href="/MeToo/Public/end/css/mystyle.css" rel="stylesheet">
<script src="/MeToo/Public/end/js/jquery.js"></script>    
<script src="/MeToo/Public/end/js/bootstrap.min.js"></script>


</head>

<body>
<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
  <!-- Brand and toggle get grouped for better mobile display -->
  <div class="navbar-header">
    <img src="/MeToo/Public/end/images/me too .png" style="width:120px; height:60px">
    <span class="navbar-logo" > 迷途网账户管理</span>
   </div>

  <!-- Collect the nav links, forms, and other content for toggling -->
  <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
    
    
    <ul class="nav navbar-nav navbar-right mr">
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-star"></span>欢迎：Administrator</a></li>
      <li><a href="#" class="navbar-brand"><span class="glyphicon glyphicon-log-out"></span>退出系统</a></li>
    </ul>
  </div><!-- /.navbar-collapse -->
</nav> 

  <div class="row">
      <div class=" col-md-2 sidebar">
        <div id="accordion">
          <h3><a href="#"><span class="glyphicon glyphicon-lock"></span>账户管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/MeToo/index.php/Admin/Admin/lists">管理员管理</a></li>
            <li><a href="/MeToo/index.php/Admin/Admin/add">添加管理员</a></li>
            <li><a href="/MeToo/index.php/Admin/Admin/modi">修改信息</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-file"></span>个人中心<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/MeToo/index.php/Admin/Personal/lists">用户管理</a></li>
            <li><a href="/MeToo/index.php/Admin/Personal/footprint">个人足迹</a></li>
              <li><a href="/MeToo/index.php/Admin/Personal/exchange">积分兑换</a></li>
              <li><a href="/MeToo/index.php/Admin/Personal/record">兑换记录</a></li>
            </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-book"></span>推荐管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/MeToo/index.php/Admin/Recommend/food">美食</a></li>
            <li><a href="/MeToo/index.php/Admin/Recommend/shopping">购物</a></li>
            <li><a href="/MeToo/index.php/Admin/Recommend/hotel">旅店</a></li>
            <li><a href="/MeToo/index.php/Admin/Recommend/scenery">景点</a></li>
          </ul>
          <h3><a href="#"><span class="glyphicon glyphicon-tags"></span>攻略管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/MeToo/index.php/Admin/Strategy/travelnote">游记</a></li>
            <li><a href="/MeToo/index.php/Admin/Strategy/question">问答</a></li>
          </ul>
            <h3><a href="#"><span class="glyphicon glyphicon-pencil"></span>动态管理<span class="glyphicon glyphicon-chevron-down"></span></a></h3>
          <ul>
            <li><a href="/MeToo/index.php/Admin/Activity/pk">至美一拍</a></li>
            <li><a href="/MeToo/index.php/Admin/Activity/guess">猜猜看</a></li>
            </ul>
        </div>
    	</div>
            <div class="col-md-10 col-md-offset-2 ">
      <ol class="breadcrumb">
          <li><a href="#">首页</a></li> 
      </ol>
      <div class="row pad">
          <div class="col-md-6">
              <div class="panel panel-default">
              <div class="panel-body">
                <img src="/MeToo/Public/end/images/main1.gif" width="63" height="63" class="pull-left img1">
                <div class=" nr">
                    <h5 >账户管理<span>2016-11-11</span></h5>
                	<p>统一管理管理员账户，可以对管理员信息进行修改、删除</p>
                </div>
              <a href="userManage.html"><button type="button" class="btn btn-primary pull-right">点击进入<span class="glyphicon glyphicon-circle-arrow-right"></span> 
              </button></a>
              </div>
              </div>
          </div>
          <div class="col-md-6">
              <div class="panel panel-default">
              <div class="panel-body">
                <img src="/MeToo/Public/end/images/main2.gif" width="63" height="63" class="pull-left img1">
                <div class=" nr">
                  <h5 >个人中心<span>2016-11-11</span></h5>
              	  <p>统一管理用户账户，可以对用户进行修改、删除</p>
                </div>
              <a href="userPersonal.html"><button type="button" class="btn btn-primary pull-right">点击进入<span class="glyphicon glyphicon-circle-arrow-right"></span> 
              </button></a>
              </div>   
              </div>
          </div>
      </div>
                
      <div class="row pad">
          <div class="col-md-6">
            <div class="panel panel-default">
            <div class="panel-body">
              <img src="/MeToo/Public/end/images/main3.gif" width="63" height="63" class="pull-left img1">
              <div class=" nr">
                <h5>推荐管理<span>2016-11-11</span></h5>
            	  <p>用户可查看美食、购物、旅店、景点的信息</p>
              </div>
            <a href="recommend.html"> <button type="button" class="btn btn-primary pull-right">点击进入<span class="glyphicon glyphicon-circle-arrow-right"></span> 
            </button></a>
            </div>
            </div>
          </div>

          <div class="col-md-6">
            <div class="panel panel-default">
            <div class="panel-body">
              <img src="/MeToo/Public/end/images/main4.gif" width="63" height="63" class="pull-left img1">
              <div class=" nr">
                <h5 >攻略管理<span>2016-11-11</span></h5>
              	<p>为用户提供出行攻略，用户可以发布攻略、查看攻略</p>
              </div>
              <a href="straregy.html"> <button type="button" class="btn btn-primary pull-right">点击进入<span class="glyphicon glyphicon-circle-arrow-right"></span> 
              </button></a>
            </div>   
            </div>
          </div>
      </div>

      <div class="row pad">
        <div class="col-md-6">
          <div class="panel panel-default">
          <div class="panel-body">
            <img src="/MeToo/Public/end/images/main5.gif" width="63" height="63" class="pull-left img1">
            <div class=" nr">
                <h5 >动态管理<span>2016-11-11</span></h5>
            	<p>可以添加、修改、删除动态、用户可以通过参与活动获得奖励</p>        
            </div>
            <a href="dynamic.html"><button type="button" class="btn btn-primary pull-right">点击进入<span class="glyphicon glyphicon-circle-arrow-right"></span>
            </button></a>
          </div>
          </div>
        </div>             
      </div>
  </div>

         	

        	
	


      </div>
        	
<script src="/MeToo/Public/end/js/jquery-ui.js"></script>
<script>
$( "#accordion" ).accordion({
      heightStyle: "content"
    });
</script>
</body>
</html>