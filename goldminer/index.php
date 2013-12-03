<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<meta name="description" content="桌上遊戲Info 鑽探機Beta.1" />
<link rel="image_src" type="image/jpeg" href="http://rp2.monday.vip.tw1.yahoo.net/res/gdsale/st_nsm/5547/pdt-5547526-4-s200.jpg" />
<link rel="image_src" type="image/jpeg" href=" http://rp2.monday.vip.tw1.yahoo.net/res/gdsale/st_nsm/5536/pdt-5536813-4-s200.jpg" />
<link rel="image_src" type="image/jpeg" href="http://rp1.monday.vip.tw1.yahoo.net/res/gdsale/st_pic/2728/st-2728136-s200.jpg" />
<link rel="image_src" type="image/jpeg" href="http://rp1.monday.vip.tw1.yahoo.net/res/gdsale/st_pic/2213/st-2213697-s200.jpg" />
<!--META HTTP-EQUIV="refresh" CONTENT="3"-->
<title>桌上遊戲Info 鑽探機Beta.1</title>
<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
$(window).load(function(){$("#loading").hide();})
$(document).ready(function(){
	$(".txt").hide();
	$(".random").css({"color":'black'});
	$(".random").css("background-color",'#FF6');
	$(".random").click(function(){
		location.reload();
		$(".txt").fadeIn(2000);
		})
	$(".random").mouseenter(function(){
		$(".random").css("background-color",'#FF0');
		$(".random").css({"color":'black'});
	})
	$(".random").mouseleave(function(){
		$(".random").css("background-color",'#FF6');
		$(".random").css({"color":'black'});
	})
	/*$(".Prod_Title:eq(0)").html("<a href='http://clicq.cc'>"+$(".Prod_Title:eq(0)").text()+"</a>");
	$(".Prod_Title:eq(1)").html("<a href='http://clicq.cc'>"+$(".Prod_Title:eq(1)").text()+"</a>");
	$(".Prod_Title:eq(2)").html("<a href='http://clicq.cc'>"+$(".Prod_Title:eq(2)").text()+"</a>");*/
});
</script>

<style type="text/css">
#random p {
	font-weight: bold;
	font-size: xx-large;
	max-width: 960px;
}
#hader p {
	font-weight: bold;
	font-size: 36px;
}
.subtitle {
	color: #999;
}
#des p {
}
.contaner {
	max-width: 960px;
}
#txt p {
	font-style: italic;
	background-color: #F00;
	color: #FFF;
	width: 760px;
}
#hader p .contaner {
	font-weight: normal;
	font-size: 68px;
}
.titlename {
	color: #333;
}
.subscribe {
	color: #333;
}
.random {
	max-width: 960px;
}
</style>
</head>
<body class="all">

<?php
	$text1;
	require("goldMining.php");	
?>
<!--Number :
<select name="myId" id="myId">
 <option value="1">1</option>
 <option value="2">2</option>
</select>
<input type="button" name="button" value="who??" onClick="getData();">
<div id="myData"></div>
<script type="text/javascript">
function getData(){
 var myId = $('#myId').val();
 $.post("giftMining.php",
  {
   id:  myId
  },
  function (msg){
   $('#myData').html(msg.name);
  //document.write(msg.name);
  },
  "json"
 );
}>
</script-->
<div id="all" class="all" align="center" >
<div class="hader" id="hader" align="center">
<p> <span class="titlename">桌上遊戲Info</span> <span class="subtitle">鑽探機Beta.1</span>
</p>
</div>
<!--end of hader-->
<div class="des" id="des" align="center">
<p class="subscribe">
全自動巨量桌游資訊鑽探機
</p>
</div>
<!--end of des-->
<div class="table" align="center">
<table width="760" border="0" align="center" id="random">
  <tr>
  <div class="ad" id="ad" align="center">
  <script type="text/javascript"><!--
google_ad_client = "ca-pub-6219370196162555";
/* 媽媽禮物 */
google_ad_slot = "8792732138";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<!--end of ad-->
  </tr>
  <tr>
    <td>
	<?php 
	$text1 = new DrillingMachine;
	echo $text1->/*start*/mining();
	//echo $text1->yahooID;
	?>
    </td>
    <!--td>
	<?php 
	$text2 = new DrillingMachine;
	echo $text2->/*start*/mining();
	//echo $text2->yahooID;
	?></td>
    <td>
	<?php 
	$text3 = new DrillingMachine;
	echo $text3->/*start*/mining();
	//echo $text3->yahooID;
	?></td-->
  </tr>
</table>
</div>
<!--end of table-->
<div class="txt" id="txt" align="center">
<p>鑽探中...</p>
</div>
<!--end of txt-->
<div class="random" id="random" align="center">
<p >重新鑽探</p>
</div>
<!--end of random-->
<div class="ad" id="ad" align="center">
<script type="text/javascript"><!--
google_ad_client = "ca-pub-6219370196162555";
/* 媽媽禮物 */
google_ad_slot = "8792732138";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script>
</div>
<!--end of ad-->
</div>
<!--end of contaner-->
</body>
</html>