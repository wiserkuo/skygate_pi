
<?php
/**
 * This class wii mining the buy.yahoo's products ID repeatly
 * 
 *
 * @author Stanley hsu <stanley.hsu@clicq.cc>
 * @version 1.0
 * @copyright Copyright (c) 2011, Stanley hsu
 * @license [url=http://opensource.org/licenses/gpl-license.php]Open Source Initiative OSI - The GPL:Licensing | Open Source Initiative[/url] GNU Public License
 */ 
 
class DrillingMachine {
    var $yahooID   = 0;
	var $addr;
	var $header_data;
	//Yahoo's product ID
    
    public function __construct() {

    }
    
	public function startmining($repeattime) {
		//echo 'startmining($repeattime)</br>';
		//Call by outside, start mining the yahoo's product page
		return $this->repeat($repeattime);
    }
	
	 private function repeat($time) {
		// echo 'repeat($repeattime)</br>';
		//Mining How many times, Defaut 1.
		return $this->mining();
    }
	
    public function mining() {
		//echo 'mining()</br>';
		do{
		//Mining process
		
		//$this->yahooID = mt_rand(1000000, 2400000);
		//random a yahoo product ID
		//$this->addr = 'http://buy.yahoo.com.tw/gdsale/gdsale.asp?gdid='.$this->yahooID;
		//得出購物中心網址
		
		$this->addr = 'http://boardgamegeek.com/boardgame/12333/twilight-struggle';
		//得出冷戰熱鬥網止
		
		
		$header_data = get_headers($this->addr);
 		//print_r($header_data);
 		//取得網頭是否存在
		
		
		
		 }while($header_data[0]=='HTTP/1.1 302 Found');
		 //若網址不存在，則重拿yID
		 $text=file_get_contents($this->addr);
		 	if($text){
			echo 'text</br>';
			}else{
				echo 'NOT text</br>';
				}		
		//Get ID's relative yahoo product page
		
		preg_match('/<table[^>]*class=\'geekitem_infotable\'[^>]*>(.*?)<\/table>/si',$text,$match); 
		//preg_match('/<div[^>]*class="Prod_img"[^>]*>(.*?) <\/div>/si',$text,$match); 
		if($match[0]){
			echo 'Get</br>';
			echo $match[0];
			}else{
				echo 'NOT Get</br>';
				echo $match[0];
				}			
    echo 'strip_tags \n';
    echo strip_tags($match[0]);
    echo "\n";
    
		//取出div標籤且id為Prod_img的所有內容，並儲存至陣列 match 
		
		
		//若y_id不存在商品，紀錄y_id於資料庫
		
	//preg_match('/<img[^>]*>/Ui', $match[0], $match2); 
	//取得第一個img標籤，並儲存至陣列match2
	
	//preg_match('/<div class="Prod_Title">[^>]*<\/div>/si',$text, $match3); 
	//取得第一個art屬性，並儲存至陣列match3

		
		//return /*$this->yahooID.'text:'.*/'<a href="http://tw.partner.buy.yahoo.com/gd/buy?gdid='.$this->yahooID.'&mcode=MV9JaDRkQnFsVkl1K1l5RTJFSHhnZ2xCN2VDaHVGVjNnR1JsaWt2cVMyOGtFPQ==" target="blank">'.$match2[0].'<br/>'.$match3[0].'</a>';
		//return pic to Caller
		
		//return 'inner:</br>'.$match[0];
		//return 'All:</br>'.$text;
    }
    
   
    
    public function clear() {
        $this->yahooID   = 0;
        $this->endtime     = 0;
        $this->elapsed     = 0;
        $this->timername   = "Not Named";
    }


}
	//Single class test syntax
	//echo 'Start</br>';
	//$go = new DrillingMachine;
	/*if($_POST['id'] == '1'){
		$selectData = array("name"=>$go->startmining(1));
	}*/
	//echo $selectData[name];
	//echo json_encode($selectData );
?>
