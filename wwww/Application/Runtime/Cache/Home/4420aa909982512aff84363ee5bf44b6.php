<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
</head>

<body>
<form method="post" action="/web/index.php/Home/Index/news_modify_pass" >
<input type="hidden" name="id" value="<?php echo ($data["id"]); ?>" />
<table border="1">
<tr>
 <td colspan="2" align="center">修改公告</td>
</tr>
<tr>
	<td>标题</td>
    <td><input type="text" name="title" value="<?php echo ($data["title"]); ?>"/></td>
</tr>
<tr>
	<td colspan="2"><input type="submit" value="提交" /></td>
</tr>
</table>
</form>
</body>
</html>