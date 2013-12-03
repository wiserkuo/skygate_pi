<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
<?php 
/*
SWing Studio
ui_login.php 
project:Bored game database
purpose:the prototype login ui  
changelogs:
20130716 wiser:create this script,forming the name and password,ready for POST transmits to act_login
*/
header("Content-Type: text/html; charset=utf-8");
 

?>
<! - - 登入 - ->
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form1" method="post" action="act_login.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>歡迎來到野蠻遊戲 </strong></td>
</tr>
<tr>
<td width="78">冒險者</td>
<td width="6">:</td>
<td width="294"><input name="name" type="text" id="name"></td>
</tr>
<tr>
<td>密語</td>
<td>:</td>
<td><input name="password" type="text" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Login" value="進入"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<! - - 新增 - ->
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form2" method="post" action="act_create.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>想加入野蠻遊戲?? </strong></td>
</tr>
<tr>
<td width="300">怎麼稱呼你?</td>
<td width="6">:</td>
<td width="294"><input name="name" type="text" id="name"></td>
</tr>
<tr>
<td>你的密語是?</td>
<td>:</td>
<td><input name="password" type="text" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Create" value="創造"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>
<! - - 刪除 - ->
<table width="300" border="0" align="center" cellpadding="0" cellspacing="1" bgcolor="#CCCCCC">
<tr>
<form name="form3" method="post" action="act_delete.php">
<td>
<table width="100%" border="0" cellpadding="3" cellspacing="1" bgcolor="#FFFFFF">
<tr>
<td colspan="3"><strong>想退出野蠻遊戲?? </strong></td>
</tr>
<tr>
<td width="300">怎麼稱呼你?</td>
<td width="6">:</td>
<td width="294"><input name="name" type="text" id="name"></td>
</tr>
<tr>
<td>你的密語是?</td>
<td>:</td>
<td><input name="password" type="text" id="password"></td>
</tr>
<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Delete" value="退出"></td>
</tr>
</table>
</td>
</form>
</tr>
</table>