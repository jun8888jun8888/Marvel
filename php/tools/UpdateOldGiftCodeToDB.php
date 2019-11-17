<?php
/**
 * Created by PhpStorm.
 * User: pc
 * Date: 2017/7/8
 * Time: 10:36
 */
set_time_limit(0);
ini_set('memory_limit', '500M');
//defined('ROOTPATH') or define('ROOTPATH',dirname(__DIR__) . '/');
//require_once ROOTPATH.'application/config/config.php';
//require_once ROOTPATH.'application/constant/ConstDBTable.php';
//require_once ROOTPATH.'application/config/dbconfig.php';
//require_once ROOTPATH.'system/db/DBContainer.php';
//require_once ROOTPATH.'system/lib/Utils.php';
//require_once ROOTPATH.'system/lib/SendHttp.php';

$host = 'http://'.$_SERVER['SERVER_ADDR'].':'.$_SERVER['SERVER_PORT'].'/'.strstr(substr($_SERVER['SCRIPT_NAME'],1),'/',true).'/GM/index.php?';
$produce = [
    Array
    (
        'gift_name' => '公测新手礼包',
        'server_list' => 0-0-100101,
        'description' =>'' ,
        'group' => 1,
        'number' => 1,
        'item' => '[{"itemId":"0","itemNum":"200"},{"itemId":"7","itemNum":"20000"}]',
        'gift_id' => 1,
        'action' => 'gift_produce',
    ),
    Array
    (
        'gift_name' => '小米独家',
        'server_list' => 0-0-100101,
        'description' =>'' ,
        'group' => 2,
        'number' => 1,
        'item' => '[{"itemId":"100000","itemNum":"1"},{"itemId":"0","itemNum":"500"}]',
        'gift_id' => 2,
        'action' => 'gift_produce',
    ),
    Array
    (
        'gift_name' => '360悬赏礼包',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 6,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"300"},{"itemId":"7","itemNum":"2000"},{"itemId":"1","itemNum":"5000"}]',
    'gift_id' => 6,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '九宫格豪华',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 5,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"500"},{"itemId":"1","itemNum":"10000"},{"itemId":"100009","itemNum":"1"}]',
    'gift_id' => 7,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '九宫格抽奖礼包',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 4,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"200"},{"itemId":"1","itemNum":"5000"}]',
    'gift_id' => 8,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '网易独家',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100002","itemNum":"1"},{"itemId":"3","itemNum":"1000"}]',
    'gift_id' => 9,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '有量独家',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100002","itemNum":"1"},{"itemId":"7","itemNum":"2000"}]',
    'gift_id' => 10,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '益玩独家',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100002","itemNum":"1"},{"itemId":"1","itemNum":"20000"}]',
    'gift_id' => 11,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => 'TAP独家',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100002","itemNum":"1"},{"itemId":"0","itemNum":"500"}]',
    'gift_id' => 12,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => 'bilibili独家',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100004","itemNum":"1"},{"itemId":"3","itemNum":"1000"}]',
    'gift_id' => 13,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '好游快爆独家',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100004","itemNum":"1"},{"itemId":"7","itemNum":"2000"}]',
    'gift_id' => 14,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '4399独家',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100004","itemNum":"1"},{"itemId":"1","itemNum":"20000"}]',
    'gift_id' => 15,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '360独家',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100004","itemNum":"1"},{"itemId":"0","itemNum":"500"}]',
    'gift_id' => 16,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '阿里渠道独家',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100000","itemNum":"1"},{"itemId":"3","itemNum":"1000"}]',
    'gift_id' => 17,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '多酷独家',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100000","itemNum":"1"},{"itemId":"7","itemNum":"2000"}]',
    'gift_id' => 18,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '应用宝独家',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100000","itemNum":"1"},{"itemId":"1","itemNum":"20000"}]',
    'gift_id' => 19,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '社区米粉车',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 1,
    'number' => 1,
    'item' => '[{"itemId":"100035","itemNum":"1"},{"itemId":"0","itemNum":"200"},{"itemId":"1","itemNum":"5000"}]',
    'gift_id' => 23,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '社区金币礼包',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"1000023","itemNum":"4"},{"itemId":"0","itemNum":"200"},{"itemId":"1","itemNum":"10000"}]',
    'gift_id' => 24,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '社区金币2',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 7,
    'number' => 1,
    'item' => '[{"itemId":"100015","itemNum":"4"}]',
    'gift_id' => 25,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '社区金币3',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"200"},{"itemId":"1","itemNum":"5000"},{"itemId":"1000015","itemNum":"4"}]',
    'gift_id' => 26,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '社区公测2',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 4,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"500"},{"itemId":"1","itemNum":"10000"},{"itemId":"7","itemNum":"2000"}]',
    'gift_id' => 28,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '社区公测2',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 4,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"500"},{"itemId":"1","itemNum":"10000"},{"itemId":"7","itemNum":"2000"}]',
    'gift_id' => 28,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '社区春节',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 5,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"500"},{"itemId":"1","itemNum":"5000"},{"itemId":"7","itemNum":"1000"},{"itemId":"3","itemNum":"500"}]',
    'gift_id' => 29,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '双微公测礼包',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 1,
    'number' => 1,
    'item' => '[{"itemId":"100035","itemNum":"1"},{"itemId":"0","itemNum":"200"},{"itemId":"1","itemNum":"5000"},{"itemId":"7","itemNum":"1000"}]',
    'gift_id' => 30,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '易道礼包2',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"500"},{"itemId":"1","itemNum":"5000"},{"itemId":"100009","itemNum":"1"}]',
    'gift_id' => 33,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '易道礼包2',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"500"},{"itemId":"1","itemNum":"5000"},{"itemId":"100009","itemNum":"1"}]',
    'gift_id' => 33,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '小米员工',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 1,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"500"},{"itemId":"1","itemNum":"10000"},{"itemId":"100010","itemNum":"1"}]',
    'gift_id' => 34,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '小米视频公测',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"200"},{"itemId":"1","itemNum":"10000"},{"itemId":"7","itemNum":"1000"}]',
    'gift_id' => 35,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '小米视频3',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"200"},{"itemId":"1","itemNum":"10000"},{"itemId":"7","itemNum":"1000"}]',
    'gift_id' => 37,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '新手礼包2',
    'server_list' => 0-0-100101,
    'description' => 111,
    'group' => 1,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"200"},{"itemId":"7","itemNum":"1000"}]',
    'gift_id' => 42,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '独家小米',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100000","itemNum":"1"},{"itemId":"0","itemNum":"500"}]',
    'gift_id' => 44,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '新手礼包19',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 2,
    'number' => 1,
    'item' => '[{"itemId":"100000","itemNum":"1"},{"itemId":"3","itemNum":"500"},{"itemId":"0","itemNum":"200"}]',
    'gift_id' => 45,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '公测豪华礼包',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 3,
    'number' => 1,
    'item' => '[{"itemId":"100008","itemNum":"1"},{"itemId":"1","itemNum":"50000"},{"itemId":"3","itemNum":"1000"}]',
    'gift_id' => 46,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '小爱活动',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 100,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"100"}]',
    'gift_id' => 47,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '小爱礼包11',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 12,
    'number' => 1,
    'item' => '[{"itemId":"100010","itemNum":"1"},{"itemId":"0","itemNum":"200"},{"itemId":"1","itemNum":"10000"}]',
    'gift_id' => 48,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '米粉高价值',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 16,
    'number' => 1,
    'item' => '[{"itemId":"100035","itemNum":"1"},{"itemId":"1","itemNum":"20000"},{"itemId":"0","itemNum":"500"}]',
    'gift_id' => 49,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '安智1',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 6,
    'number' => 1,
    'item' => '[{"itemId":"1","itemNum":"10000"},{"itemId":"0","itemNum":"500"},{"itemId":"100009","itemNum":"1"}]',
    'gift_id' => 50,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '益玩1',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 7,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"500"},{"itemId":"7","itemNum":"2000"}]',
    'gift_id' => 51,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '益玩2',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 8,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"500"},{"itemId":"1","itemNum":"100000"},{"itemId":"100008","itemNum":"1"}]',
    'gift_id' => 52,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '联想',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 9,
    'number' => 1,
    'item' => '[{"itemId":"1","itemNum":"10000"},{"itemId":"0","itemNum":"500"},{"itemId":"100009","itemNum":"1"}]',
    'gift_id' => 53,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '小米之家旗舰店',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 20,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"200"},{"itemId":"1","itemNum":"5000"},{"itemId":"100009","itemNum":"1"}]',
    'gift_id' => 54,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '小米之家北京',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 21,
    'number' => 1,
    'item' => '[{"itemId":"1","itemNum":"10000"},{"itemId":"100000","itemNum":"1"}]',
    'gift_id' => 55,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '内部员工礼包',
    'server_list' => 0-0-100101|1-0-200201,
    'description' =>'' ,
    'group' => 22,
    'number' => 1,
    'item' => '[{"itemId":"100035","itemNum":"1"},{"itemId":"100019","itemNum":"1"},{"itemId":"0","itemNum":"1000"},{"itemId":"1","itemNum":"20000"}]',
    'gift_id' => 56,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '官网预约礼包',
    'server_list' => 0-0-100101|1-0-200201,
    'description' =>'' ,
    'group' => 10086,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"300"},{"itemId":"1","itemNum":"50000"},{"itemId":"100011","itemNum":"1"}]',
    'gift_id' => 57,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '渠道预约礼包',
    'server_list' => 0-0-100101|1-0-200201,
    'description' =>'' ,
    'group' => 30,
    'number' => 1,
    'item' => '[{"itemId":"1","itemNum":"20000"},{"itemId":"0","itemNum":"200"},{"itemId":"100009","itemNum":"1"}]',
    'gift_id' => 58,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => 'QQ',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 445,
    'number' => 1,
    'item' => '[{"itemId":"0","itemNum":"34"}]',
    'gift_id' => 67,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '小爱礼包11',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 12,
    'number' => 1,
    'item' => '[{"itemId":"100010","itemNum":"1"},{"itemId":"0","itemNum":"200"},{"itemId":"1","itemNum":"10000"}]',
    'gift_id' => 48,
    'action' => 'gift_produce',
),
Array
(
    'gift_name' => '小爱普通',
    'server_list' => 0-0-100101,
    'description' =>'' ,
    'group' => 41,
    'number' => 1,
    'item' => '[{"itemId":"100010","itemNum":"1"},{"itemId":"1","itemNum":"10000"},{"itemId":"0","itemNum":"200"}]',
    'gift_id' => 69,
    'action' => 'gift_produce',
),
];


//$curl  = SendHttp::GetInstance();
//foreach($produce as $param){
////    $ret[] = $curl->SendGet($host.http_build_url($param));
//    $ret[] = $host.http_build_url($param);
//}
//$curl->Close();
//var_dump($ret);


//$url = 'Help/code/';
//$code = [
//
//];
/**
 * @var RedisLib
 */
//$redis = DBContainer::GetInstance()->GetRedisByTable(ConstDBTable::GameGiftCode);
//
//$db_key = MakeDBKey("GameGiftCode", "0", "0" );
//foreach($code as $name){
//    require_once ROOTPATH.$url.$name.'.php';
//    foreach( $Id as $key=>$value )
//    {
//        $redis->hset(array($db_key, $key, $value));
//    }
//}
//
//echo "Finish";


$codes = array (
    'AE30' => '0-1546790158-1555343758-1-1-30-1',   //双微公测礼包
    'AI47' => '0-1546876505-1555343705-1-100-47-1',   //小爱活动
    'ALDJ17' => '0-1546703755-1563120055-1-2-17-uc', //阿里渠道独家
    'AZLB50' => '0-1546947034-1563189934-1-6-50-anzhi',  //安智1
    'BIDJ13' => '0-1546703758-1563120058-1-2-13-bili',  //bilibili独家
    'BJ55' => '0-1547033740-1555343740-1-21-55-xiaomi',  //小米之家北京
    'CJ29' => '0-1546790132-1554047732-1-5-29-1',  //社区春节
    'DKDJ18' => '0-1546703745-1563120045-1-2-18-1',   //多酷独家
    'GC27' => '0-1546790127-1551369327-1-3-27-1',   //社区公测
    'GCJ8' => '0-1546702554-1550160054-1-4-8-1',   //九宫格抽奖礼包
    'GCXS1' => '0-1546683956-1563120056-1-1-1-1',   //公测新手礼包
    'GHU7' => '0-1546698033-1550160033-1-5-7-360',    //九宫格豪华
    'GW57' => '0-1547094654-1556639754-1-10086-57-1',    //官网预约礼包
    'HH46' => '0-1546841407-1563206107-1-3-46-1',   //公测豪华礼包
    'HYDJ14' => '0-1546703708-1563120008-1-2-14-1',   //好游快爆独家
    'LXLB53' => '0-1546998946-1563155746-1-9-53-lenovo',   //联想
    'MF49' => '0-1546876500-1555343700-1-16-49-1',    //米粉高价值
    'NBLB34' => '0-1546790105-1556639705-1-1-34-1',   //小米员工
    'QJ54' => '0-1547024453-1555343753-1-20-54-xiaomi',   //小米之家旗舰店
    'QQ67' => '0-1547207729-1550747729-1-445-67-1',   //QQ
    'SJ25' => '0-1546790147-1551369347-1-7-25-1',  //社区金币2
    'SJ26' => '0-1546790135-1551369335-1-2-26-1',   //社区金币3
    'SLDJ16' => '0-1546703723-1563120023-1-2-16-360',  //360独家
    'SPLB35' => '0-1548950116-1556639716-1-2-35-1',   //小米视频公测
    'SQ28' => '0-1546790105-1554047705-1-4-28-1',  //社区公测2
    'SQJB24' => '0-1546707302-1551369302-1-2-24-1',   //社区金币礼包
    'SQMF23' => '0-1546790126-1554047726-1-1-23-1',  //社区米粉车
    'SSDJ15' => '0-1546703726-1563120026-1-2-15-4399',  //4399独家
    'TAP58' => '0-1547107800-1556639700-1-30-58-1',    //渠道预约礼包
    'TAPD12' => '0-1546703734-1563120034-1-2-12-1',   //TAP独家
    'TEDJ19' => '0-1546703711-1563206111-1-2-19-yingyongbao',   //应用宝独家
    'WYDJ9' => '0-1546703126-1563201926-1-2-9-1',  //网易独家
    'XA48' => '0-1546851019-1563206119-1-12-48-1',   //小爱礼包11
    'XA68' => '0-1547205612-1556639712-1-40-68-1',   //小爱礼包
    'XAPS69' => '0-1547205612-1556639712-1-40-68-1',    //小爱普通
    'XM44' => '0-1546876527-1563206127-1-2-44-xiaomi',  //独家小米
    'XMDJ2' => '0-1546696845-1563120045-1-2-2-xiaomi',    //小米独家2
    'XMSP37' => '0-1546790130-1555343730-1-2-37-1',   //小米视频3
    'XQ45' => '0-1546839342-1563206142-1-2-45-1',   //新手礼包19
    'XS42' => '0-1546828204-1563206104-1-1-42-1',    //新手礼包2
    'XSLB6' => '0-1546697740-1550160940-1-6-6-360',   //360悬赏礼包
    'YDLB31' => '0-1546790145-1556639745-1-1-31-1',    //易道礼包
    'YDLB33' => '0-1546790125-1556639725-1-2-33-1',   //易道礼包2
    'YG56' => '0-1547033722-1555343722-1-22-56-1',     //内部员工礼包
    'YLDJ10' => '0-1546700147-1563120047-1-2-10-youliang',   //有量独家
    'YWD51' => '0-1546998043-1563206143-1-7-51-yiwan',   //益玩1
    'YWDJ11' => '0-1546617612-1563120012-1-2-11-yiwan',    //益玩独家
    'YWG52' => '0-1546998629-1563206129-1-8-52-yiwan'    //益玩2
);

//foreach($codes as $channel=>$c){
//    $tmp = explode('-', $c);
//    if (count($tmp) !=7){
//        echo $channel;
//        die(0);
//    }
//    if ($tmp[1] > $tmp[2]){
//        echo $channel;
//        die(0);
//    }
//
//}
//echo 'ok';




$dir = '/data/web/test/libaoma/';

$names = scandir($dir);
foreach($names as $n){
    if (in_array($n, ['.', '..'])){
        continue;
    }
    $out = [];
    $fileName = pathinfo($n)['filename'];
    if (isset($codes[$fileName])){
        $codeVal = $codes[$fileName];
        require_once $dir.$n;
        if (is_array($Id)){
            foreach($Id as $k){
                $out[$k] = $codeVal;
                //redis save
            }
            file_put_contents('/data/web/test/li/'.$fileName.'.txt', print_r($out, true));
        }
    }else{
        echo $n;
        die(0);
    }
}

echo 'ok';