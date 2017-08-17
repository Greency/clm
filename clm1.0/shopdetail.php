<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width">
<title>吃了么_商家详情</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width">
<link type="text/css" rel="stylesheet" href="CSS/main.css">
<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="CSS/bootstrap.css">
<link rel="stylesheet" href="CSS/bootstrap-theme.css">
<link rel="shortcut icon" href="favicon.ico">
<script src="javascripts/modernizr.js"></script>
<script src="javascripts/jquery-3.2.1.min.js"></script>
<style type="text/css">
.logout{
	position:absolute;
	display:none;
	top:44px;
	right:123px;
	width:53px;
	height:50px;
	text-align:center;
	background-color:#1e89e0;
	color:white;
	cursor:pointer;
}
#paging-wrapper{
	margin-left:384px;
	width: auto;
	margin-top: 32px;
	text-align: center;
}
#paging-wrapper li{
	display: inline-block;
	width: 30px;
	height: 30px;
	margin: 5px;
	text-align: center;
	line-height: 30px;
	background-color: rgba(0, 0, 0, .1);
	border: 1px solid rgba(0, 0, 0, .3);
	cursor: pointer;
}
#paging-wrapper li:hover{
	color: white;
	background-color: rgba(0, 0, 0, .3);
}
#paging-wrapper li:nth-child(1) {
	width: 50px;
}

#paging-wrapper li:nth-child(2) {
	width: 66px;
}

#paging-wrapper li:nth-child(3) {
	color: white;
	background-color: rgba(0, 0, 0, .3);
}
ul li{
	float:left;
}
/*头部*/
.container{
	width:100%;
	min-width:1400px;
	height:200px;
	margin-left:20px;
	background:url(images/back1.jpg) no-repeat 30% 30%;
	box-shadow:5px 5px 3px #888888;
}
/*餐馆介绍*/
.liimg{
	float:left;
	height:130px;
	width:360px;
	margin-top:5px;
	padding-top:15px;
	display:inline-block;
}
.liimg .img1{
	margin-left:10px;
	border-radius:50%;
	border:3px solid #C8C8C8;
}

.liimg .title1{
	height:70px;
	width:240px;
	float:right;
	margin-top:15px;
	display:inline-block;
}
.liimg .title1 h2{
	margin-top:10px;
}
.liimg .title1 p{
	display:inline-block;
	font-size:16px;
}
.liimg .title1 .star{
	height:20px;
	width:100px;
	display:inline-block;
}
.liimg .title1 .star img{
	height:20px;
	width:20px;
}

/*搜索框*/
.wrapperBox{
	float:right;
	margin:60px 100px 0px 0;
	height:32px;
	display:inline-block;
}
.searchBox{
	float:right;
	position:relative;
	z-index:3;
	background:#fff;
	border:1px solid #ccc;
	color:#999;	
}
.searchBox i{
	float:right;
	color:#999;
	width:46px;
	height:inherit;
	line-height:32px;
	text-align: center;
	font-size:20px;
}
.searchBox input{
	width:180px;
	height:30px;
	border:0;
	outline: none;
}
.searchBox span{
	padding-right:10px;
}

/*中间部分总体*/
.middle{
	height:600px;
	width:100%;
	min-width:1350px;
}


/*中间头部，索引*/
.middleTop{
	max-width:735px;
	position:absolute;
	top:255px;
	margin-left:9%;	
	margin-top:10px;
	z-index:1;
	border:1px solid #C8C8C8;
	background-color:white;
}

.middleTop ul li .span1{
	line-height:40px;
}
.middleTop ul li .span2{
	margin-top:50px;
}
.middleTop ul li .a1{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color: #6495ED;
}
.middleTop ul li .a1:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon1.png) no-repeat 50% 60%;
}

.middleTop ul li .a2{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:pink;
}
.middleTop ul li .a2:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon2.png) no-repeat 50% 60%;
}

.middleTop ul li .a3{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:#6495ED;
}
.middleTop ul li .a3:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon3.png) no-repeat 50% 60%;
}

.middleTop ul li .a4{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:pink;
}
.middleTop ul li .a4:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon4.png) no-repeat 50% 60%;
}

.middleTop ul li .a5{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:#6495ED;
}
.middleTop ul li .a5:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon5.png) no-repeat 50% 60%;
}

.middleTop ul li .a6{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:pink;
}
.middleTop ul li .a6:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/yu.png) no-repeat 50% 60%;
}

.middleTop ul li .a7{
	display:block;
	height:125px;
	width:120px;
	text-align:center;
	margin-left:2px;
	background-color:#6495ED;
}
.middleTop ul li .a7:hover{
	display:block;
	height:110px;
	width:120px;
	background-color:#E9CD4C;
	border-top:10px solid #1e89e0;
	background:url(images/icon7.png) no-repeat 50% 60%;
}

/* 头部字体 middleTop */
.p1,.p2{
	display:block;
	color: #0066FF;
}

.p1{
	font-size:12px;	
}


/* 菜品排版 */
.middlehot1{
	padding-top:140px;
}


.middleHot{
	width:858px;
	margin-left:9%;	
}

.middleHot .hot{
	height:50px;
	width:300px;
	display:block;
	line-height:50px;
	font-size:26px;
}

.middleHot .hot span{
	font-size:13px;
}

.middleHot .dish{
	height:100px;
	width:417px;
	margin-bottom:30px;
	display:inline-block;
	background-color:white;
	border:1px solid #D0D0D0;
	margin-right:5px;
}

.middleHot .dish .title{
	height:50px;
	width:310px;
	float:right;
	display:inline-block;
}
.middleHot .dish .title h4{
	margin-top:10px;
}
.middleHot .dish .title p{
	display:inline-block;
	font-size:12px;
}
.middleHot .dish .title .star{
	height:20px;
	width:50px;
	display:inline-block;
}

.middleHot .dish .price{
    position:absolute;
	height:30px;
	width:300px;
	margin-left:10px;
	margin-top:60px;
	display:inline-block;
}

.middleHot .dish .price span{
	height:20px;
	width:20px;
}
.middleHot .dish span:before{
	content:"\00a5";
	font-size:12px;
	marign-right:5px;
}

.middleHot .dish .price .button{
display: inline-block;
border: 0;
cursor: pointer;
width: 90px;
height: 26px;
line-height: 26px;
border-radius: 20px;
text-align: center;
margin-left:170px;
	color:white;
outline: 0;
background-color:#0089dc;
}


/* 商家公告 */

.in1{
	margin-top:10px;
}

.inform{
	height:370px;
	width:350px;
	background-color:white;
	margin-right:40px;
	float:right;
	border:1px solid #D0D0D0;
}
.inform .informTop{
	height:40px;
	width:350px;
	background-color:#1e89e0;
}

.inform .informTop span{
	line-height:40px;
	font-size:20px;
	margin-left:10px;
	color:white;
}
.inform p{
	height:118px;
	font-size:16px;
	text-indent:20px;
	margin-left:10px;
	margin-right:10px;
	margin-top:10px;
}
.inform .informMiddle{
	height:60px;
	width:348px;
	margin-top:90px;
	background-color:#F0F0F0;
}
.inform .informMiddle span{
	margin-top:10px;
	margin-left:20px;
   display:block;
}
.inform button{
    height:50px;
	width:348px;
	border:0;
	font-size:16px;
	border-top:1px solid #D0D0D0; 
	background-color:white;
}

/*商家配送费地址等信息div*/
.detail{
	float:left;
	height:130px;
	width:420px;
	margin-top:5px;
	display:none;
	border:1px solid #D0D0D0;
	background-color:#f6f6f6;
}
.detail .detailLeft{
	height:128px;
	width:110px;
	border-right:1px solid #D0D0D0;
	display:inline-block;
}
.detail .detailLeft .span1{
	float:left;
	height:40px;
	width:110px;
	font-size:24px;
	text-indent:37px;
	margin-top:25px;
}
.detail .detailLeft .span2{
	font-size:10px;
	display:block;
	margin-left:37px;
}
.detail .detailLeft .span3{
	font-size:10px;
	display:block;
	margin-left:10px;
}
.detail p{
	position:relative;
	bottom:130px;
	left:90px;
	width:300px;
	font-size:13px;
	text-indent:37px;
}

.index{
	width:100%;
	min-width:1400px;
	height:40px;
	margin-top:20px;
	background-color:#f6f6f6;
}
.index ul .indexLi1{
	width:100px;
	height:40px;
	margin-left:420px;
	 cursor: pointer;
	text-align: center;
	line-height:40px;
}
.index ul .indexLi2{
	width:100px;
	height:40px;
	cursor: pointer;
	text-align: center;
	line-height:40px;
}
.index ul .indexLi2:before{
position: absolute;
left: 520px;
top:32%;
content: "  ";
margin-top: -7px;
height: 24px;
width: 2px;
background-color: #ccc;
}




.middle1{
	width:100%;
	min-width:1350px;
	display:none;
}
.pingjia{
	width:855px;
	margin-left:9%;
	margin-top:10px;
}

.pingjia .pingjiaTop{
	width:853px;
	height:50px;
	border-bottom:1px solid #eee;
	background-color:#f6f6f6;
}

.pingjia .pingjiaTop ul li{
	width:100px;
	height:48px;
	border-left:1px solid #eee;
	text-align: center;
	line-height:50px;
}
.pingjia .content{
	width:855px;
}
.pingjia .content ul li{
	width:855px;
	height:140px;
	border:1px solid #eee;
}
.pingjia .content ul li span{
	width:140px;
	height:84px;
	position: absolute;
    left: 130px;
    text-align: center;
	margin-top:10px;
}
.pingjia .content ul li span img{
	width: 60px;
    height: 60px;
	margin:0 auto;
	display:block;
    border-radius: 50%;
}

.pingjia .content ul li .liLeft{
	width: 710px;
    height: 150px;
	position: absolute;
    left: 270px;
}
.pingjia .content ul li .liLeft .ha{
	height:70px;
	width:710px;
	margin-top:10px;
	display:inline-block;
}

.pingjia .content ul li .liLeft .ha h4{
	margin-top:10px;
}
.pingjia .content ul li .liLeft .ha p{
	display:inline-block;
	font-size:14px;

	text-indent: 10px;
}
.pa{
color:#FFCC33;
}
.pb{
color: 	#808080;
}
.pingjia .content ul li .liLeft .ha img{
	height:20px;
	width:20px;
}
.pingjia .content ul li .liLeft .ha .star{
	height:20px;
	width:100px;
	margin-top:10px;
	display:inline-block;
}

.pingjia .content ul li .liLeft .hb{
	width: 690px;
    height: 50px;
	border-top:1px solid #C8C8C8;
}

.pingjia .content ul li .liLeft .hb p{
	margin-top:10px;
}


.starrating  b{
	float: left;
	width: 24px;
	height: 21px;
	background: url(images/stars.png) 0 -20px no-repeat;
}
.starrating  .starnum{
	background: url(images/stars.png) 0 0px no-repeat;
}


.starratingg  b{
	float: left;
	width: 14px;
	height: 11px;
	background: url(images/starss.png) 0 -11px no-repeat;
}
.starratingg  .starnum{
	background: url(images/starss.png) 0 0px no-repeat;
}

.footerLocal{
	margin-top:800px;
}

</style>
</head>
<body>
<div class="container clearfix">
	<div class="topBar clearfix">
		<h1 class="topBarLogo"><b></b>吃了么</h1>
		<div class="topBarList">
			<a href="index.php" class="homePage">首页</a>
			<a href="order.php">我的订单</a>
			<a href="#">加盟合作</a>
		</div>
		<nav class="topBarNav">
			<a href="#"><i class="fa fa-user-o"></i>服务中心</a>
			<a href="#">规则中心</a>
			<a href="#"><i class="fa fa-mobile"></i>手机应用</a>
		</nav>
		<div class="topBarNavLogin">
			   <?php if(empty($_SESSION['userId'])){?>
			   <a href="login.html"><i class="fa fa-user"></i>登录/注册</a>
			   <?php }else{?>
			   <div class='logname'>
			      <a  href="order.php"><i class="fa fa-user"></i><?php echo $_SESSION['name'] ?></a>
			     <span class="logout">退出</span>
			   </div>
			   <?php }?>
		</div>
	</div>
	<!-- 侧边栏 -->
	<div id="sidebar">
        <div id="wrap">
            <div id="prof" class="item">
                <a class="order">
                    <i class="fa fa-reorder"></i>
                    <span>我的订单</span><b class="trangle"></b>
                </a>
            </div>
            <div id="asset" class="item">
                <span>
                    <i class="fa fa-cart-plus"></i>
                </span>
                <div>
                                                 购物车
                </div>
            </div>
            <div id="brand" class="item">
                <a class="msg">
                    <i class="fa fa-envelope-o"></i>
                    <span>我的信息</span><b class="trangle"></b>
                </a>
            </div>  
        </div>
        <div id="closeBar"><!-- 将侧边栏收进去 -->
            <div>
                <i class="fa fa-remove"></i>
            </div>
        </div>
    </div><!-- sideBar结束 -->
    <div id="asset-content" class="nav-content"><!-- 侧边栏滑出内容 -->
        <div class="nav-con-close">
            <i class="fa fa-angle-left fa-2x"></i>
        </div>
        <div class="carContent clearfix">
            <h3>购物车</h3>
            <div class="carChoose">
                <div class="chooseTitle">
	                <h4>1号购物车</h4>
		            <a class="clear" href="#">[清空]</a>
		            <div class="chooseTitlecontent"></div>
                </div>
            </div>
            <div class="count">
	            <p class="sum">共<span>1</span>份，总计￥<span>5</span></p>
	            <button class="payment">结算</button>
            </div>
        </div>
    </div><!-- 侧边栏结束 -->
	
	       
			<div class="liimg" id="liimg">
			   <img src="shop/1/images/shop.jpg" class="img1">
			   <div class="title1">
               <h2 class="shop-name"></h2>
	               <div class="starrating">
	               
	               </div>
	               <p class="shop-comment-count"></p>
	               <p class="shop-sales"></p>
			   </div> 
			</div>   
			
			<div class="detail">
	           <div class="detailLeft">
	           <span class="span1">4.7</span>
	           <span class="span2">综合评价</span>
	           <span class="span3">高于周边商家55.5%</span>
	           </div>
	           <p class="shop-minimum-delivery-amount"></p>
	           <p class="shop-delivery-cost"></p>
	           <p>预计送达时间：35分钟</p>
	           <p class="shop-adress"></p>
	           <p class="shop-opening-hours"></p>
	        </div>
	        
	        
				 <div class="wrapperBox">
				<div class="searchBox clearfix">
					<i class="fa fa-search"></i>
					<span></span><input id="change" class="searchInput input" placeholder="搜索商家/美食...">
				</div>
		     </div>
		
		<div class="classify"></div>
		<div class="contentBox"></div>
	</div>
	
	<div class="index">
	<ul>
	<li class="indexLi1">所有商品</li>
	<li class="indexLi2">评价</li>
	</ul>
	</div>

	
	
	
	<div class="middle">
	<div class="inform in1">
	 <div class="informTop ">
	   <span>商家公告</span>
	   	 </div>
	   	 <p class="shop_announcement"></p>
	   	 
	 <div class="informMiddle">
	 <span>配送说明：</span>
	 <span class="shop-delivery-cost"></span>
	 </div>
	 <button>举报商家</button>
	</div>
		<div class="middleTop"  id="float_banner">
			
			<ul id="navclassify">
		
			</ul>	
		</div>
		
	<div id="content" style="margin-top:138px">	

	
	</div>
	</div>
	
	
	
	<div class="middle1">
	
	<div class="pingjia">
	<div class="pingjiaTop">
	<ul>
	<li>全部</li>
	<li>满意</li>
	<li>不满意</li>
	</ul>
	</div>
	<div class="content">
	<ul id="pingjiacontent">
	
	</ul>
	<ul id="paging-wrapper"></ul>
	</div>
	</div>
	</div>
	
	
	<div class="footer footerLocal clearfix">
		<div class="footerLinks help">
			<h3 class="linksTitle">用户帮助</h3>
			<a href="#">服务中心</a>
			<a href="#">常见问题</a>
		</div>
		<div class="footerLinks cooperation">
			<h3 class="linksTitle">商务合作</h3>
			<a href="#">我要开店</a>
			<a href="#">加盟指南</a>
			<a href="#">市场合作</a>
			<a href="#">开放平台</a>
		</div>
		<div class="footerLinks about">
			<h3 class="linksTitle">关于我们</h3>
			<a href="#">吃了么介绍</a>
			<a href="#">加入我们</a>
			<a href="#">联系我们</a>
			<a href="#">规则中心</a>
		</div>
		<div class="footerContect">
			<ul>
				<li>24小时客服热线：<a>1234567</a></li>
				<li>意见反馈：<a>12345@163.com</a></li>
				<li>
					关注我们：
					<a href="#"><i class="fa fa-qq"></i></a>
					<a href="#"><i class="fa fa-facebook"></i></a>
				</li>
			</ul>
		</div>
		<div class="footerQrCode clearfix">
			<a href="#"><img src="http://faas.elemecdn.com/desktop/media/img/appqc.95e532.png"></a>
			<div class="qrCodeRight">
				<h3>下载手机版</h3>
				<p>扫一扫，手机订餐更方便</p>
			</div>
		</div>
		<div class="footerCopyRight">
		           技术支持Team.S&nbsp;&nbsp;copyright&copy&nbsp;2004-2017&nbsp;&nbsp;Team.S 版权所有
		</div>
	</div>
	
	<script src="javascripts/JqueryPaging-1.0.js"></script>
	<script>
	$('.logname').on("mouseover",function(){
    		$('.logout').css("display","inline-block");
    		$('.logout').on("click",function(){
    			$.ajax({
    		        type: "post",
    		        url: 'PHP/api.php',
    		        dataType: 'json',
    		        data: {status:"logout"},
    		        success: function (data) {
    		        	if(data['status'] === 1){
		        		    window.location.href = "index.php"
			        	  }
    		        },
    		        error: function () {
    		           console.log("error")
    		        }
    		    })
			});
		
		  }).on("mouseout",function(){
			  $('.logout').css("display","none");
			  })
	var amount = 0;
	var sum = 0;
	var speed = 100;
	var scrollTop = null;
	var hold = 0;
	var float_banner;
	var pos = null;
	var timer = null;
	var moveHeight = null;
	float_banner = document.getElementById("float_banner");
	window.onscroll=scroll_ad;
	float_banner_off=float_banner.offsetTop;//middleTop最开始离windowTop的高度
	function scroll_ad(){
	 scrollTop = document.documentElement.scrollTop+document.body.scrollTop;
	 //console.log(document.documentElement.scrollTop);
	 pos = scrollTop - float_banner_off;
	 //console.log(scrollTop);
	 //console.log(float_banner.offsetTop);
	 //console.log(pos);
	 pos = pos/10
	 moveHeight = pos>0?Math.ceil(pos):Math.floor(pos);
	 //console.log(moveHeight);
	 //console.log(Math.ceil(pos));
	 if(moveHeight>0){
	  float_banner.style.top = document.body.scrollTop+document.documentElement.scrollTop-10+"px";
	  setTimeout(scroll_ad,speed);
	 }
	 else if(moveHeight<0){
		  float_banner.style.top = float_banner_off-10+"px";
	 }
	}
	
	//结算
	$('.payment').on("click",function(){
		$.ajax({
	        type: "post",
	        url: 'PHP/api.php',
	        dataType: 'json',
	        data: {status:"payment",type:"verification"},
	        success: function (data) {
	        	if(data['status'] === 2){
	        		alert("请登录后再结算！")
	        		window.location.href = "login.html";
	        	}else if(data['status'] === 3){
	        		alert("购物是空的哦，快去选购一些食物吧！")
	        	}else if(data['status'] === 1){
	        	    window.location.href = "balance.php"
		        	}
	        },
	        error: function () {
	           console.log("error")
	        }
	    })
	})
	
	//获取购物车里的东西
	$.ajax({
        type: "post",
        url: 'PHP/api.php',
        dataType: 'json',
        data: {status:"shopcart",type:"get"},
        success: function (data) {
        	console.log(data)
        	var sum = 0,
        		html = "<div class='chooseTitle1'>"
        	for(var i = 0;i<data.length;i++){
        		sum += parseInt(data[i].price)
        		html += "<p>" + data[i].name + "</p>"
        	}
        	 
			$(".chooseTitlecontent").html(html)		
       html = "共<span>" + data.length + "</span>份，总计￥<span>" + sum + "</span>"
		$(".sum").html(html)
        },
        error: function () {
           console.log("error")
        }
    })
    
      //清除购物车里的数据
	$(".clear").on("click",function(){
		$(".chooseTitlecontent").html("")	
		$.ajax({
	        type: "post",
	        url: 'PHP/api.php',
	        dataType: 'json',
	        data: {status:"shopcart",type:"delete"},
	        success: function (data) {
	        	
	        	if(data['state']){
	        		
	        		amount = 0
	        		sum = 0
	        		var html = "共<span>" +0+ "</span>份，总计￥<span>" + 0+ "</span>"
		$(".sum").html(html)
	        }
	        },
	        error: function () {
	           console.log("error")
	        }
	    })
	})
	
	$("#liimg").hover(function(){
		$(".detail").show();
	},function(){
		$(".detail").hide();
	});
	$(".detail").hover(function(){
		$(".detail").show();
	},function(){
		$(".detail").hide();
	});
	
	$(".indexLi1").click(function(){
		$(".middle").show();
		$(".middle1").hide();
	});
	$(".indexLi2").click(function(){
		$(".middle1").show();
		$(".middle").hide();
		var _data = {
				status:"comment",
				currentPage:1
		}
		//获取评论里的数据
		$.ajax({
            type: "post",
            url: 'PHP/api.php',
            dataType: 'json',
            data: _data,
            success: function (data) {
    			console.log(data)
    			var html = "";
    			for(var i=0;i<data.length - 1;i++){
    				html += "<li><span><img src='images/touxiang.png'></span><div class='liLeft'><div class='ha'>";
    				html += "<h4>"+data[i].food_name+"</h4><div class='starrating'>"
    				for(var j = 0;j<5;j++){
    				    if(j<data[i].comment_rating_count){
        				    html += "<b class='starnum'></b>"
        				    }else{
            				    html +="<b></b>"
            				    }
        				}
    				html +="</div><p class='pb'>40分钟送达</p></div>"
    				html += "<div class='hb'><p>"+data[i].comment_content+"</p></div></div></li>"
    			}
    		   $("#pingjiacontent").html(html)
               //配置数据
               var option = {
                   id: '#paging-wrapper',
                   pages: Math.ceil(data[data.length -1] / 5), //总页数
                   displayPage: 3, //只显示多少页
                   data:_data,
                   drawHtml:function(data){
                	  	var html = "";
           				for(var i=0;i<data.length - 1;i++){
           					html += "<li><span><img src='images/touxiang.png'></span><div class='liLeft'><div class='ha'>";
            				html += "<h4>"+data[i].food_name+"</h4><div class='starrating'>"
            				for(var j = 0;j<5;j++){
            				    if(j<data[i].comment_rating_count){
                				    html += "<b class='starnum'></b>"
                				    }else{
                    				    html +="<b></b>"
                    				    }
                				}
            				html +="</div><p class='pb'>40分钟送达</p></div>"
            				html += "<div class='hb'><p>"+data[i].comment_content+"</p></div></div></li>"
	           			}
           		   		$("#pingjiacontent").html(html)
                   }
               }
               //调用分页插件
               new Paging(option)
            },
            error: function () {
               console.log("error")
            }
        })
	});
	
	
/* 	
	$(".smooth").click(function(){
		var href = $(this).attr("href");
		var pos = $(href).offset().top;
		$("html,body").animate({scrollTop: pos}, 1000);	
		return false;
	}); */
	
	
	window.onload=function(){
	    var aA=document.getElementsByClassName('input');
		for(var i=0; i<aA.length; i++){
			aA[i].onmouseover=function(){
				var This=this;
				clearInterval(This.time);/*清除计时器*/
				This.time=setInterval(function(){/*设定计时器*/
						This.style.width=This.offsetWidth+8+"px";
						if(This.offsetWidth>=230)/*input标签的宽度*/
						clearInterval(This.time);
					},30)
			}
			aA[i].onmouseout=function(){
					clearInterval(this.time);
					var This=this;
					this.time=setInterval(function(){
						This.style.width=This.offsetWidth-8+"px";
						if(This.offsetWidth<=180){
							This.style.width='180px';
							clearInterval(This.time);
						}
					},30)
			}
		}
	}
	
	
	var shopId = "" , //商家id
		shopName = "", //商家名称
		shopPhone = ""  //商家手机号
	//商家信息
	$.ajax({
        type: "post",
        url: 'PHP/api.php',
        dataType: 'json',
        data:{status:"shopdata"},
        success: function (data) {
			console.log(data)
			shopId = data[0].shop_id
			$(".shop_announcement").text(data[0].shop_announcement)
			$(".shop-name").text(data[0].shop_name)
			shopName = data[0].shop_name
			$(".shop-sales").text("总销："+data[0].shop_sales)
			$(".shop-comment-count").text("("+data[0].shop_comment_count+")")
			var text =""
			if(data[0].shop_delivery_cost === "0"){
				text = "免配送费"
			}else{
				text = "配送费￥"+data[0].shop_delivery_cost
			}
			$(".shop-delivery-cost").text(text)
			$(".shop-minimum-delivery-amount").text("起送价："+data[0].shop_minimum_delivery_amount)
			$(".shop-opening-hours").text("营业时间："+data[0].shop_opening_hours)
			$(".shop-adress").text("商家地址："+data[0].shop_adress)
			var htmlstar = ""
			 var _starnum = 0
			    if(data[0].shop_rating_count === 5){
			        _starnum = 5
				    }else{
				        _starnum = Math.ceil(data[0].shop_rating_count/data[0].shop_sales)
					    }

          for(var j = 0;j <5;j++){
              if(j<_starnum){
            	  htmlstar += "<b class='starnum'></b>"
                  }else{
                	  htmlstar += "<b></b>"
	                        }
              } 
          $(".starrating").html(htmlstar)
			
			shopPhone = data[0].shop_phone
			
			var nav = (data[0].shop_kind_food).match(/([\u4e00-\u9fa5]{2})/g),  //商家食品的分类
				html = ""
			for(var i=0;i<nav.length;i++){
				html += "<li class='a'>"+
						"<a href='#' class='a1'>"+
						"<span class='p2 span1'>'"+nav[i]+"'</span>"+
						"<span class='p1 span2'>HOT*</span>"+
						"</a>"+
						"</li>"
			}
			
			$("#navclassify").html(html)
				
		$.ajax({
	        type: "post",
	        url: 'PHP/api.php',
	        dataType: 'json',
	        data:{status:"food"},
	        success: function (data) {
				console.log(data)
				var _num = 0,
					flag = false,
					html = ""
				for(var j=0;j<nav.length;j++){
					flag = false
					if(nav[j] === "热销"){
						_num = 4
					}else{
						_num = data.length
					}
					 html += "<div class='middleHot' style='top:70px' id='b'><span class='hot'>"+nav[j]+"</span>"
					
					for(var i=0;i<_num;i++){
						if(_num === 4){
							flag = true
							console.log("_num:  ")
						}else{
							flag = false
							if(data[i].food_kind === nav[j]){
								flag = true
								console.log("对吗    "+nav[j])
							}
						}
						if(flag){
							html += "<div class='dish'><img src='shop/"+shopId+"/images/dish1.jpg'>"+
									"<div class='title'>"+
									"<h4>"+data[i].food_name+"</h4>"+
									"<div class='starratingg'>"

									 var _starnum = 0
	     							    if(data[i].food_rating_count === 5){
	     							        _starnum = 5
	         							    }else{
	         							        _starnum = Math.ceil(data[i].food_rating_count/data[i].food_sales)
	             							    }

	     			                    for(var f = 0;f <5;f++){
	         			                    if(f<_starnum){
	       			                    	   html += "<b class='starnum'></b>"
	         			                        }else{
	         			                        	html += "<b></b>"
	             			                        }
	         			                    } 
									   
									html +="</div><p>("+data[i].food_comment_count+")</p>"+
									"<p>总售"+data[i].food_sales+"份</p>"+
									"</div>"+
									"<div class='price'>"+
									"<span>"+data[i].food_price+"</span>"+
									"<input class='button' type='button' value='加入购物车'>"+
									"</div>"+
									"</div>"
									   }
					}
					html +="</div>"
	        }
				$("#content").html(html)
				
				var food = {
					shopId:-1,
					shopName:"",
					shopPhone:"",
					foodId:-1,
					name:"",
					price:0,
					num: 0
				}
				//总价
				$(".button").on("click",function() {
					var parent = $(this).parent().parent()
					var children = $(parent).children()
					var str = $(($(children[1]).children())[0]).text()
					for (var a = 0; a < data.length; a++) {
						if (data[a].food_name === str) {
							food.shopId = parseInt(shopId)
							food.shopName = shopName
							food.shopPhone = shopPhone
							food.foodId = data[a].food_id
							food.name = data[a].food_name
							food.price = data[a].food_price
							food.num = 1
						}
					}
					var html = "<p>" + str + "</p>"
					$(".chooseTitlecontent").append(html)
					amount++
					sum += parseInt(food.price)
					html = "共<span>" + amount + "</span>份，总计￥<span>" + sum + "</span>"
					$(".sum").html(html)

					$.ajax({
						type: "post",
						url: 'PHP/api.php',
						dataType: 'json',
						data: {status: "shopcart", type: "insert", data: food},
						success: function (data) {

						},
						error: function () {
							console.log("error")
						}
					})
				})
				
				
				
	 var temp = $(".middleHot")
	    $(".a").on("click",function(){
	    	var _index = $(this).index()
	    	
	    	$("html,body").animate({
	    		scrollTop:$(temp[_index]).offset().top-125
	    	},1000);
	    	return false;
     })

	        },
	        error: function () {
	           console.log("error")
	        }
    })
			
        },
        error: function () {
           console.log("error")
        }
    })
	
	
    
    
 
	
    
 
	
    
	</script>

    <script src="javascripts/sidebar.js"></script>
</body>
