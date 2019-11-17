<?php

/**
 * 定时查看数据库中是否有需要发布的公告信息
 * Created by PhpStorm.
 * User: Administrator
 * Date: 2017/6/17
 * Time: 23:43
 */
require_once './DB.php';
class Notice
{
    public function getNotice(){
        $sql = 'SELECT * FROM `emp` LIMIT 10';
        $conn = new DB();
        $res = $conn->Query($sql);
        return $res;
    }
}

$notice = new Notice();
$data = $notice->getNotice();

var_dump($data);

