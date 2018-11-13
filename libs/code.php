<?php
//页面用来输出图片

/*验证码
  尺寸：宽、高  width  height
  干扰线:  line
  杂点:  pointer
  产生几个字符:  num
  字符集合:  chars   从该集合中产生num个字符
  最终产生的验证码:  result

  方法：
  createimg   创建图片
  getbgcolor    填充颜色
  drawline       画线
  drawpointer   画点
  getchar      得到文字
  drawtext     画文字
  output       输出

*/
class code{
    public $width;
    public $height;
    private $line;
    private $pointer;
    private $num;
    public $chars;
    public $result;
    public $img;   //句柄：操作图片（资源）
    public $fontpath;
    function __construct($w=100,$h=50)
    {
        /*初始化*/
        $this->width = $w;
        $this->height = $h;
        $this->num = 4;
        $this->chars = '0123456789qwertyuiopasdfghjklzxcvbnmQWERTYUIPASDFGHJKLZXCVBNM';
        $this->line = 6;
        $this->pointer = 50;
        $this->fontpath = FONT_PATH;  //字体路径
    }

    function createimg(){
        /*创建真彩色图片*/
        $this->img = imagecreatetruecolor($this->width,$this->height);
        /*创建颜色标识*/
        $arr = $this->createbgcolcor();
        $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
        /*填充颜色*/
        imagefill($this->img,0,0,$color);
    }

    function drawline(){
        /*画线*/
        for($i=0;$i<$this->line;$i++){
            if($i%2){
                $x1 = mt_rand(0,$this->width/2);  //左
                $y1 = mt_rand(0,$this->height/2);  //上
                $x2 = mt_rand($this->width/3 * 2,$this->width); //右
                $y2 = mt_rand($this->height/3 * 2,$this->height);  //下
            }else{
                $x1 = mt_rand($this->width/3 * 2,$this->width);  //右
                $y1 = mt_rand(0,$this->height/3);  //上
                $x2 = mt_rand(0,$this->width/3); //左
                $y2 = mt_rand($this->height/3 * 2,$this->height);  //下
            }
            $arr = $this->createbgcolcor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            /*画线*/
            imageline($this->img,$x1,$y1,$x2,$y2,$color);
        }
    }

    function drawpointer(){
        /*画点*/
        for($i=0;$i<$this->pointer;$i++){
            $arr = $this->createlinecolcor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            $x = mt_rand(0,$this->width);
            $y = mt_rand(0,$this->height);
            imagesetpixel($this->img,$x,$y,$color);
        }

    }

    function drawtext(){
        $str = $this->getchar();
        $w = $this->width / $this->num;  //每个验证码占的位置大小
        for($i=0;$i<$this->num;$i++){
            $arr = $this->createlinecolcor();
            $color = imagecolorallocate($this->img,$arr[0],$arr[1],$arr[2]);
            $x = mt_rand($w*$i+10,$w*($i+1)-15);
            $y = mt_rand($this->height/2-5,$this->height/2+5);
            imagettftext($this->img,mt_rand(20,30),mt_rand(-15,15),$x,$y,$color,$this->fontpath,$str[$i]);   //画验证码
        }

    }

    function getchar(){
       $str = '';
       for($i=0;$i<$this->num;$i++){
           $index = mt_rand(0,strlen($this->chars)-1);
           $str .= substr($this->chars,$index,1);
       }
        $this->result = strtolower($str);  //转化为小写  不区分大小写
        return $str;
    }

    /*创建颜色*/
    function createbgcolcor(){
        $arr = [];
        for($i=0;$i<3;$i++){
            /*产生随机数*/
            $arr[$i] = mt_rand(0,107);  //能取到边界
        }
        return $arr;
    }
    function createlinecolcor(){
        $arr = [];
        for($i=0;$i<3;$i++){
            /*产生随机数*/
            $arr[$i] = mt_rand(108,255);  //能取到边界
        }
        return $arr;
    }
    /*输出*/
    function output(){
        header('Content-type:image/png'); //设置头信息  告诉浏览器生成图片
        $this->createimg();
        $this->drawline();
        $this->drawpointer();
        $this->drawtext();
        imagepng($this->img);  //输出图片
    }
}
