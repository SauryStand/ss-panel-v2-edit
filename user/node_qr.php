<?php
require_once '../lib/config.php';
require_once '_check.php';
$id = $_GET['id'];
$node = new \Ss\Node\NodeInfo($id);
$server =  $node->Server();
$method = $node->Method();
$pass = $oo->get_pass();
$port = $oo->get_port();

$ssurl =  $method.":".$pass."@".$server.":".$port;
$ssqr = "ss://".base64_encode($ssurl);
?>
<meta http-equiv="content-type" content="text/html; charset=UTF-8" />
<!-- <p>ss://<?php echo $ssurl;?></p> -->
<p>一键导入ss信息方法</p>
<p>方法一：复制此地址，打开手机版影梭，单击顶上的Shadowsocks，点击加号，点击从剪贴板导入，即可添加ss信息。</p>
<p id="ssqr_text" ><?php echo $ssqr;?></p>
<p></p>
<p>方法二：用手机版影梭扫描此二维码，即可添加ss信息。</p>
<div align="center">
    <div id="qrcode"></div>
</div>
<script src="../asset/js/jQuery.min.js"></script>
<script src="../asset/js/jquery.qrcode.min.js"></script>
<script>
    jQuery('#qrcode').qrcode("<?php echo $ssqr;?>");
</script>


