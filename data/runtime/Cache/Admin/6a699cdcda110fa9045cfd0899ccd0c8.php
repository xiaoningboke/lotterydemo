<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>图文</title>
    <script src="http://libs.baidu.com/bootstrap/3.0.3/js/bootstrap.min.js"></script>
<link href="http://libs.baidu.com/bootstrap/3.0.3/css/bootstrap.min.css" rel="stylesheet" />
</head>
<body>
<form action="/fore/index.php/Admin/Image/edit" enctype="multipart/form-data" method="post" >
   <div class="form-group">
    <label for="exampleInputName2">文字1</label>
    <input type="text" class="form-control" id="exampleInputName2"  name="name1" value="<?php echo ($data["0"]["word"]); ?>">
  </div>
     <div class="form-group">
    <label for="exampleInputName2">文字2</label>
    <input type="text" class="form-control" id="exampleInputName2"  name="name2" value="<?php echo ($data["1"]["word"]); ?>">
  </div>
     <div class="form-group">
    <label for="exampleInputName2">文字3</label>
    <input type="text" class="form-control" id="exampleInputName2"  name="name3" value="<?php echo ($data["2"]["word"]); ?>">
  </div>
    <input type="submit" value="提交" >
</form>
</body>
</html>