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
	if($led=="ON"){
    exec("sudo python /home/pi/public_html/on.py");
		//exec("sudo python /home/pi/public_html/on.py ");
    
		}
	if($led=="OFF"){
			exec("sudo python /home/pi/public_html/off.py");
			}
    echo "$led";
  ?>
