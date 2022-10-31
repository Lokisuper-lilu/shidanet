<!DOCTYPE html>
<html>
<body>

<?php
echo "Hello Worldww!";
?>
<?php
    $a=6;
    $b=7;
    $z=$a+$b;
    echo $z;
?>
<!-- <?php
$x=5;//全局变量
function mytest()
{
    global $x;
    $y=10;//函数参变量
    echo "<p>测试函数内部变量输出<p>";
    echo "y=$y";
    echo "<br>";
    echo "测试全集变量";
    echo "x=$x";
}
mytest();
$y=10;
echo "<p>函数外测试函数内部变量<p>";
echo "y=$y";
echo "<br>";
echo "测试全局变量";
echo "x=$x";
function mytest2($z){
    $GLOBALS['x']=$z;
}
mytest2(666);
echo "<p>x=$x<p>";
?> -->
<?php 
    echo "使用","echo","输出的字符串","用了多个参数";
    print "使用print输出的,仅一个参数";
    echo <<<EOF
    <h1>EOF测试标题</h1>
    <p>EOF测试段落。</p>
    EOF;//EOF的结尾起始点不能在字符串的首字节之后
?>
<?php
    echo "<pre>";
    // if(42=="42"){
    //     echo "1,值相等哦";
    // }

    // echo PHP_EOL;

    // if(42==="42"){
    //     echo "类型相等";
    // }else{
    //     echo "类型不相等";
    // }
    // $txt1="Hello World!";
    // $txt2="What is nice try";
    // echo "<br>";
    // echo $txt1 . " ".$txt2;
    // $txt3=$txt1." ".$txt2;
    // echo $txt3;
    $testarray=array("first"=>"1","second"=>"2","third"=>3);
    foreach($testarray as $num=>$num_value){
        echo "Key=".$num.",Value=".$num_value.PHP_EOL;
    }
?>

</body>
</html>