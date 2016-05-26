<?php
//引入配置文件
require_once '../lib/config.php';
require_once '_check.php';
$uid = $_GET['uid'];
      
    //更新
    $User = new Ss\User\User($uid);
    $query = $User->sw_en(1,1);
    echo " <script>window.location='user.php';</script> " ;