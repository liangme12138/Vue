<?php
    header('Access-Control-Allow-Origin:*');

    include "DBHelper.php";

    $userId = isset($_POST['userid']) ? $_POST['userid'] : "1";
    $goodId = isset($_POST['goodId']) ? $_POST['goodId'] : "1";
    $state = isset($_POST['state']) ? $_POST['state'] : "";
    $sql;
    // echo $userId
    if( $state == 'insert'){
      $sql = "insert into collect(userId,goodId) values ('$userId','$goodId')";
      $result = excute_oop($sql);
      if($result){
        echo  "ok";
      }else{
        echo "fail";
      }
    } else if( $state == 'select'){
      $sql = "SELECT * from collect where userId = '$userId' and goodId ='$goodId'";
      $result = query_oop($sql);

      echo json_encode($result, JSON_UNESCAPED_UNICODE);
    }
?>
