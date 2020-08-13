include cfg.php
include db.php
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





if new > 0{}

else{

}












