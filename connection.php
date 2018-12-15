<?php
$mysql_conf = array(
    'host'    => '127.0.0.1:3307', 
    'db'      => 'php-test', 
    'db_user' => 'root', 
    'db_pwd'  => 'usbw', 
    );
$mysql_conn = @mysql_connect($mysql_conf['host'], $mysql_conf['db_user'], $mysql_conf['db_pwd']);
if (!$mysql_conn) {
    die("could not connect to the database:\n" . mysql_error());//診斷連接錯誤
}
mysql_query("set names 'utf8'");//編碼轉化
$select_db = mysql_select_db($mysql_conf['db']);
if (!$select_db) {
    die("could not connect to the db:\n" .  mysql_error());
}
//$sql = "select * from user;";
//$res = mysql_query($sql);
//if (!$res) {
//    die("could get the res:\n" . mysql_error());
//}

//while ($row = mysql_fetch_assoc($res)) {
//    print_r($row);
//}

//mysql_close($mysql_conn);
?>