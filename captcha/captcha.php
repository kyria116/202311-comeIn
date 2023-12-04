<?php
	$w = 90;//圖片寬
	$h = 40;//圖片高
	$gfx = imagecreatetruecolor($w,$h);//產生圖片

	imageantialias($gfx,true);//開啟反鋸齒

	$white = imagecolorallocate($gfx,255,255,255);//定義白色
	imagefilledrectangle($gfx,0,0,$w-1,$h-1,$white);//將背景色設為白色

	$str = '';
	for ($i=1;$i<=4;$i=$i+1){//定義一個4碼驗證碼
		$c=rand(2,2);//隨機選擇是數字、大寫或小寫
		if($c==1){//如果是小寫英文
			$a=rand(97,122);//隨機產生
			$b=chr($a);
		}
		if($c==2){//如果是數字
			$b=rand(0,9);//隨機產生
		}
		$str=$str.$b;//生成驗證碼
	}

	session_start();
	$_SESSION['captcha'] = $str;//把字串存入session

	$pos = $w / (strlen($str)+0.2);//定義每個字元應該出現的位置

	foreach(range(0,strlen($str)-1) as $s) {//印出字元
		$shade = rand(0,50);//隨機產生灰階
	
		$tmpgray = imagecolorallocate($gfx,$shade,$shade,$shade);//畫出字元，並用白色搞亂
	
		imagettftext(
			$gfx,//欲繪製的圖片
			rand($h/1.4,$h/1.3),//字型大小
			rand(-15,15),//傾斜角度
			$s*$pos+($pos*.1),//平衡
			rand($h*.8,$h*.9),//介於一半或更低一點
			$tmpgray,//貼上灰色
			'arial.ttf',//字型
			$str[$s]//印出字元
		);
	}

	foreach(range(-$h,$w,5) as $x){
		$shade = rand(175,254);//隨機產生陰影
		$tmpgray = imagecolorallocate($gfx,$shade,$shade,$shade);
		
		imageline($gfx,$x,0,$x+$h+rand(0,25),$h-1,$tmpgray);//畫兩條對角線
		imageline($gfx,$x,$h-1,$x+$h+rand(0,25),0,$tmpgray);
	}

	header('Content-type:image/png');//準備輸出png

	imagepng($gfx);//打印影像
?>