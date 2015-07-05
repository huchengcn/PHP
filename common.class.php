<?php
/**
* 通用类方法
*/
class Common extends BaseClass{

	/**
	*现在手机端的流量日益增多，我们经常会用到判断访问来源设备的代码，下面提供网上找到的判断设备是电脑还是安卓或者IOS的PHP代码.
	*/
	public function is_ios_android(){
        $userAgent = $_SERVER['HTTP_USER_AGENT'];
		if(strpos($userAgent,"iPhone") || strpos($userAgent,"iPad") || strpos($userAgent,"iPod")){
		   $this->display("index.html");
		}else if(strpos($userAgent,"Android")){
		   $this->display("index.html");
		}else{
		     $this->display("mindex.html");
		}
	}

    /**
    *在线二维码接口平台
    */
	public function generateQRfromGoogle($goods_id, $widhtHeight = '100', $EC_level = 'L', $margin = '0') {
        $url = 'http://www.elmsc.com'.'/index.php?app=goods&id='.$goods_id;
        $url = urlencode($url);
        return '<img src="http://qr.liantu.com/api.php?bg=ffffff&fg=000000&gc=000000&el=l&w=150&m=10&text=' . $url . '" alt="QR code" widhtHeight="' . $widhtHeight . '" widhtHeight="' . $widhtHeight . '"/>';
    }




}
?>