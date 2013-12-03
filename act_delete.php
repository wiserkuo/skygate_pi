

<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
<?php 

/*
SWing Studio
act_login.php develp by 
project:Bored game database
purpose:the actions for checking account with members-db
changelogs:
20130717 Wiser:create this script,create meber db,check typed name/password with db contents
*/
header("Content-Type: text/html; charset=utf-8");

$host="localhost"; // Host name
$db_user="root"; // Mysql username
$db_pwd="stanwiser"; // Mysql password
$db_name="db1"; // Database name
$tbl_name="members"; // Table name 

$s=mysql_connect("$host","$db_user","$db_pwd") or die("連線失敗!!<BR>");
print "連線成功!<BR>";
mysql_query("set names 'utf8'");
mysql_select_db("$db_name");

$name=$_POST['name'];
$password=$_POST['password'];
print "輸入惹 name=$name , password=$password <BR>";//debug msg
//$name = stripslashes($name);   //avoid for db injection ,waiting for discuss with Stan
//$password = stripslashes($password);
//$name = mysql_real_escape_string($name);
//$password = mysql_real_escape_string($password);

$result=mysql_query("SELECT * FROM $tbl_name WHERE name='$name'");
$count=mysql_num_rows($result);

//debug msg
print "DEBUG MSG:<BR>members db:<BR>";
$re=mysql_query("SELECT * FROM $tbl_name");
while($data=mysql_fetch_array($re)){
	print $data[0];
	print ":";
  print $data[1];
  print ":";
	print $data[2];
  print "<BR>";  
}

//checking find acount
if($count==1){
  print "已退出野蠻遊戲!!<BR>";
  mysql_query("DELETE FROM $tbl_name WHERE name='$name'") or die("刪除失敗<BR>");
//session_register("myusername"); //session the member with our website ,wait for developing and studying
//session_register("mypassword");
}
else{
  print "沒有這個冒險者!<BR>";
}
//debug msg
print "DEBUG MSG:<BR>members db:<BR>";
$re=mysql_query("SELECT * FROM $tbl_name");
while($data=mysql_fetch_array($re)){
	print $data[0];
	print ":";
  print $data[1];
  print ":";
	print $data[2];
  print "<BR>";  
}
mysql_close($s);

?>
