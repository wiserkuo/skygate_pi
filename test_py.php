  <!--            
 SWing Studio
test_py.php develp by Wiser&Stan
project:SkyGate
purpose:catch the POST data from Matrix/mouse_down & mouse_up to control the pi to bi~~~~~~~~~~~~~
changelogs:
20130910 Stan
	fix - $led=$_POST[‘led’]; to $led=$_POST['led'];
20131028 Wiser
        backup sudo python /home/pi/public_html/on.py  sudo aplay /home/pi/police_s.wav
  -->
  <?php      
    header("Content-Type: text/html; charset=utf-8");  

    
    $led=$_POST['led'];
    $name=$_POST['name'];
	  if($led=="ON"){
    	exec("sudo python /home/pi/public_html/on.py ");
	  }
	  if($led=="OFF"){
	    exec("sudo python /home/pi/public_html/off.py ");
 	  }
    
    $host="localhost"; // Host name
    $db_user="root"; // Mysql username
    $db_pwd="stanwiser"; // Mysql password
    $db_name="db1"; // Database name
    $tbl_name="songs"; // Table name 
    $s=mysql_connect("$host","$db_user","$db_pwd") or die("連線失敗!!<BR>");
    print "連線成功!<BR>";
    mysql_query("set names 'utf8'");
    mysql_select_db("$db_name");  
    $re=mysql_query("SELECT * FROM $tbl_name  WHERE name='$name' ");
    while($data=mysql_fetch_array($re)){
      print $data[0];
   //   if( strcmp("$data[0]","Wiser")){ print "$data[1]<BR>";}
   //   else if(strcmp("$data[0]","Stan")) {print "$data[1]<BR>";}   
    	print ":";
      print $data[1];
      $song=$data[1];
      print "<BR>";  
    }      
    exec("sudo aplay /home/pi/public_html/songs/$song ");             
    echo "led=$led <BR>name=$name<BR>";
  ?>
