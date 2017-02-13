<?php
require_once "jssdk.php";
// appId  和 秘钥
$jssdk = new JSSDK("wx6a53808c16c3eed1", "63f7d5cee917f3d9d9a35613cfee91fd");
$signPackage = $jssdk->GetSignPackage();
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
   <title></title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css"/>
	<link rel="stylesheet" type="text/css" href="css/swiper.min.css"/>
	<link rel="stylesheet" type="text/css" href="css/reset.css"/>
    <link rel="stylesheet" type="text/css" href="css/main.css"/>
    <script src="http://res.wx.qq.com/open/js/jweixin-1.0.0.js"></script>
    <style>
    body{
    		overflow: hidden;
    }
	.scroll-cover{
		position: relative;
	}
	#loading{
		width: 100%;height: 100%;
		background: url(img/1_02.jpg);
		background-size:100% 100%;
		position: absolute;
		top: 0;
		z-index: 9999;
	}
	.swiper-container {
    width: 100%;
    background: red;
    margin: 0;
	} 
    </style>
    
</head>
<body>
	<div id="loading"></div>
	
	<div id="doc"></div>
	
	
	
	<!-- footer-->
	<footer class="navbar navbar-default navbar-fixed-bottom mynav">
	  <div class="container">
	    <div class="row">
	    		<div class="col-xs-3 mynav-item">
	    			<a href="#home">
	    				<div><i class="glyphicon glyphicon-home"></i></div>
	    				<!--<div><img src="img/3_03.jpg"></div>-->
	    				<div><p>首页</p></div>
	    			</a>
	    		</div>
	    		
	    		<div class="col-xs-3 mynav-item">
	    			<a href="#leyuan">
	    				<div><i class="glyphicon glyphicon-tower"></i></div>
	    				<!--<div><img src="img/3_05.jpg"></div>-->
	    				<div><p>乐园</p></div>
	    			</a>
	    		</div>
	    		
	    		<div class="col-xs-3 mynav-item">
	    			<a href="#order">
	    				<div><i class="glyphicon glyphicon-list-alt"></i></div>
	    				<!--<div><img src="img/3_07.jpg"></div>-->
	    				<div><p>订单</p></div>
	    			</a>
	    		</div>
	    		
	    		<div class="col-xs-3 mynav-item">
	    			<a href="#mine">
	    				<div><i class="glyphicon glyphicon-user"></i></div>
	    				<!--<div><img src="img/3_09.png"></div>-->
	    				<div><p>我的</p></div>
	    			</a>
	    		</div>
	    </div>
	  </div>
	</footer>
	
	
	
	<script data-main = "main" src="lib/require.js"></script>
	<script>
		setTimeout(function(){
			var loading = document.getElementById('loading');
			document.body.style.overflowY = 'scroll'
			loading.style.display = 'none';
		},100);
	</script>
	
<script>

  wx.config({
    debug: true,
    appId: '<?php echo $signPackage["appId"];?>',
    timestamp: <?php echo $signPackage["timestamp"];?>,
    nonceStr: '<?php echo $signPackage["nonceStr"];?>',
    signature: '<?php echo $signPackage["signature"];?>',
     jsApiList: [
        'checkJsApi',
//      'onMenuShareTimeline',
//      'onMenuShareAppMessage',
//      'onMenuShareQQ',
        'onMenuShareWeibo',
        'onMenuShareQZone',
        'hideMenuItems',
        'showMenuItems',
        'hideAllNonBaseMenuItem',
        'showAllNonBaseMenuItem',
        'translateVoice',
        'startRecord',
        'stopRecord',
        'onVoiceRecordEnd',
        'playVoice',
        'onVoicePlayEnd',
        'pauseVoice',
        'stopVoice',
        'uploadVoice',
        'downloadVoice',
        'chooseImage',
        'previewImage',
        'uploadImage',
        'downloadImage',
        'getNetworkType',
        'openLocation',
        'getLocation',
        'hideOptionMenu',
        'showOptionMenu',
        'closeWindow',
        'scanQRCode',
        'chooseWXPay',
        'openProductSpecificView',
        'addCard',
        'chooseCard',
        'openCard'
      ]
  });
  wx.ready(function () {
    // 在这里调用 API
    
    wx.getLocation({
    success: function (res) {
        var latitude = res.latitude; // 纬度，浮点数，范围为90 ~ -90
        var longitude = res.longitude; // 经度，浮点数，范围为180 ~ -180。
        var speed = res.speed; // 速度，以米/每秒计
        var accuracy = res.accuracy; // 位置精度
    },
    cancel: function (res) {
        alert('用户拒绝授权获取地理位置');
    }
});


  });
</script>
</body>
</html>