<?php
/**
 * 权重算法实验
 * 要求:去除权重为0和为100的道具,其他的道具按照权重的不同来显示.相同权重的道具随机显示
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/9/9
 * Time: 21:22
 */


$db[1] = 5;
$db[2] = 10;
$db[3] = 20;
//权重算法一
$a = "111112222222222333333333333333333333";
//str_repeat生成字符串活力
echo strlen($a);
echo '<br/>';
$w = mt_rand(0, strlen($a) - 1);
//选取一个下标
echo $w;
echo '<br>';
echo $a{$w};
echo '<hr>';


//权重算法二

$wg[1] = $db[1];
$wg[2] = $wg[1] + $db[2];

$total = $db[1] + $db[2] + $db[3];
echo $total . '<br>';
$n = mt_rand(0, $total);
echo $n . '<br>';
for ($i = 1; $i <= count($wg); $i++) {
    if ($n <= $wg[$i]) {
        echo "wg{$i}";
        break;
    }
}