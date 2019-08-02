<?php 
try {
  //DB接続エラー:SQLSTATE[HY000] [2002] Connection refusedと表示され、うまくSQLと接続ができない。
  $db=new PDO('mysql:dbname=mini_bbs;host=127.0.0.1;
  charset=utf8','root','');
}catch(PDOException $e){
  print('DB接続エラー:'.$e->getMessage());

}

?>
