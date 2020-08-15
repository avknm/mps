<?php
/*
Auser_tab   id    md5   sview   fview     last
           Ai    ukey      0       20        20200831

Ruser_tab   id    name    password  sview   fview     last


ip_tab     id    ip             last
           AI    1123131        time()




http://www.layuicms.com/v2/page/login/login.html
https://anonfiles.com/Rdicr1Mbob/M_txt





*/
include cfg.php
include db.php
$DB=MySqli::getInstance();

/*

check user models

*/

$ukey=!empty($_COOKIE['uskey']) ? $_COOKIE['uskey'] : '';
if(strlen($ukey) == 32)){
  $res=$DB->query('selset * form user_info');
  if($res){
    $t=data(time,'YYYYmmdd');
    if($t==$res['last']){// todays
      if($res['view'] > 0){
        //updata
      }else{
        if($res['num'] > 0){
          //updata
          return true;
        }else{
          //header();
          //loadUserTpl();
        }
      }
    }else{   // today one
      //updata
    }
  }else{
    //add user
  }
}else{
  //header('Loction:');
  loadUserTpl('check.php');
}
/*

user share models
reUrl /share/uid L ?uid
*/
$uid=!empty($_GET['uid']) ? $_GET['uid'] : '';// dechex($uid*1000)
$uid=hexdec($uid) / 1000;
if($uid){
  $ip=$GetIp();
  $r="selset";
  if($r){
    //updata
  }
}
 











