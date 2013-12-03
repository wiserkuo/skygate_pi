<meta http-equiv="Content-Type" content="text/html; charset="utf-8">
<?php 
header("Content-Type: text/html; charset=utf-8");
/*20130617 basic php mysql server connection sample,start wiser*/

$s=mysql_connect("localhost","root","stanwiser") or die("connect failed!!\n");
print "connect success!\n";
//mysql_close($s);
//20130708

//20130617 write data into a table in database
mysql_query("set names 'utf8'");
mysql_select_db("db1",$s);
mysql_query("INSERT INTO tb1 VALUES('幹的好It Works!See more funny things in /goldminer',123123456789)");
print "write some data to table tb1 of database  db1\n";
//20130710 wiserkuo , print out table data
$re=mysql_query("SELECT * FROM tb1");
while($data=mysql_fetch_array($re)){
	print $data[0];
	print ":";
  print $data[1];
  print ":";
  print "<BR>";  
  
}
mysql_close($s);

/*20130617 end wiser*/


?>
