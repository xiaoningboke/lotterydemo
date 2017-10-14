<?php if (!defined('THINK_PATH')) exit();?>﻿<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">
<meta content="" name="Keywords">
<meta content="" name="Description">
<title>News</title>
<link type="text/css" rel="stylesheet" href="/lottery/themes/simplebootx//public/assets/css/base.css">
</head>
<body>

<div class="wp" id="header" style="text-align:center;">
<img src="/lottery/themes/simplebootx//public/assets/images/1_01.png" style="width: 100%">
<div class="head_1 head_2" style="width:202px;height:125px;margin:0 auto;">
</div>
</div>
<div id="content">
<div class="content_a">
<div class="content_1_jiao content_1_1"></div>
<div class="content_1_jiao content_1_2"></div>
<div class="content_1_jiao content_1_3"></div>
<div class="content_1_jiao content_1_4"></div>
<div id="show2">
<div class="content_2" style="font-size:18px; text-align:center; color:#00F" >
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i; echo ($vo["number"]); ?> &nbsp<?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</div>
</div>
<div class="wp" id="footer">
<?php if(is_array($name)): $i = 0; $__LIST__ = $name;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?><p class="footer_a"><?php echo ($vo["word"]); ?></p><?php endforeach; endif; else: echo "" ;endif; ?>
</div>
</body>
</html>