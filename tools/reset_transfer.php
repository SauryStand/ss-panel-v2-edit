<?php
/*
 * 清空流量
 */
//定义清零日期,1为每月1号
if ($enable) {
    $reset_date = '1';
    //日期符合就清零
    if (date('d')==$reset_date){
        $db->update("user",[
            "u" => "0",
            "d" => "0",
            //"transfer_enable" => "5368709120" 这一句是把总流量重置为50G，具体数据请自行修改，如需启用请把注释符号去掉
        ]);
    }
}