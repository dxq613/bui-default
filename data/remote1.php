<?php 
  $a = $_GET["a"];
  if($a && strlen($a) < 5){
    sleep(0.5);
    echo '';
  }else{
    sleep(1);
    echo '长度必须小于5！';
  }
?>