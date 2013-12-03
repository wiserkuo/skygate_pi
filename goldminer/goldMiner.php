<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<!--META HTTP-EQUIV="refresh" CONTENT="3"-->
<title>GIftMiner</title>
<script type="text/javascript" src="jquery.js"></script>

<script type="text/javascript">
$(window).load(function(){$("#loading").hide();})
$(document).ready(function(){
	$(".txt").hide();
	$(".random").click(function(){
		location.reload();
		$(".txt").show();
		})
	/*$(".Prod_Title:eq(0)").html("<a href='http://clicq.cc'>"+$(".Prod_Title:eq(0)").text()+"</a>");
	$(".Prod_Title:eq(1)").html("<a href='http://clicq.cc'>"+$(".Prod_Title:eq(1)").text()+"</a>");
	$(".Prod_Title:eq(2)").html("<a href='http://clicq.cc'>"+$(".Prod_Title:eq(2)").text()+"</a>");*/
});
</script>

<style type="text/css">
#random p {
	font-weight: bold;
	color: #F9C;
	font-size: xx-large;
	background-color: #FF9;
	width: 760px;
}
#hader p {
	font-weight: bold;
	font-size: 36px;
	width: 290px;
}
#des p {
}
.mama {
	color: #F00;
}
#txt p {
	font-style: italic;
	background-color: #F00;
	color: #FFF;
	width: 760px;
}
#hader p .mama {
	font-weight: normal;
}
</style>
</head>
<body>

<?php
	$text1;
	require("giftMining.php");
    
	
	
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
<div class="hader" id="hader" align="left">
<p>
<span class="mama">七夕</span>缺乏靈感？ </p>
</div>
<script type="text/javascript"><!--
<div class="googlead" id="googlead" align="right">google_ad_client = "ca-pub-6219370196162555";
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
<div class="des" id="des" align="center">
<p>
七夕情人節禮物真的沒有Idea?這三個應該不錯。不對味的話沒關係，再選幾次都可以！
</p>
</div>
<div class="table">
<table width="760" border="0" align="center" id="random">
  <tr>
    <td>
	<?php 
	$text1 = new DrillingMachine;
	echo $text1->/*start*/mining();
	//echo $text1->yahooID;
	?>
    </td>
    <td>
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
	?></td>
  </tr>
</table>
</div>
<div class="random" id="random" align="center">
<p>這些媽咪一定不尬意，重新選三個</p>
<p><script type="text/javascript"><!--
<div class="googlead" id="googlead" align="right">google_ad_client = "ca-pub-6219370196162555";
/* 媽媽禮物 */
google_ad_slot = "8792732138";
google_ad_width = 468;
google_ad_height = 60;
//-->
</script>
<script type="text/javascript"
src="http://pagead2.googlesyndication.com/pagead/show_ads.js">
</script></p>
</div>
<div class="txt" id="txt" align="center">
<p>重新挑選中，尖峰時刻請稍待...</p>
</div>
</body>
</html>