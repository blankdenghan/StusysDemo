<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="/wwww/Public/css/pintuer.css">
<link rel="stylesheet" href="/wwww/Public/css/admin.css">
</head>
<style>
table{border:1px #50a8e6 solid;  border-collapse:collapse}
	td{border:1px #50a8e6 solid; border-right:none;border-left:none;
vertical-align:middle;/*设置垂直居中*/}
	input,select,textarea{
		margin-top:15px;
		}
	textarea{
	width: 200px;
	height: 100px;
	max-width: 200px;
	max-height: 100px;
	text-height:100px;	
		}
</style>
<body>
<form method="post" action="/wwww/index.php/Home/Student/admin_score_add_pass">
<table width="538" height="742" border="1" align="center">
<tr>
	<td colspan="2" align="center">公共选修课选择</td>
</tr>
<tr>
	<td align="center">学号</td>
	<td><input type="text" name="stu_num"/></td>
</tr>
<tr>
	<td align="center">姓名</td>
	<td><input type="text" name="stu_name" /></td>
</tr>
<tr>
	<td align="center">课程</td>
	<td>
		<select name="stu_course">
		    <option>---请选择---</option>
		    <option>计算机网络基础</option>
			<option>网络互联设备配置</option>
			<option>动态网站开发与设计</option>
			<option>网页设计基础</option>
			<option>网络管理员</option>
			<option>C语言程序设计</option>
			<option>网络数据库技术</option>
	    </select>
	</td>
</tr>
<tr>
	<td align="center">类型</td>
	<td>
    <input type="radio" name="stu_type"   checked="checked" value="选修课"/>选修课
    </td>
</tr>
<tr>
	<td colspan="2" align="center" style="padding-top:10px; ">  <button class="button bg-main icon-check-square-o" type="submit"> 提交</button></td>
</tr>
</table>
</form>
</body>
</html>