<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>添加个人信息</title>
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
<form method="post" action="/wwww/index.php/Home/Student/stu_add_pass">
<table width="538" height="742" border="1" align="center">
<input type="hidden" name="username" value="<?php echo ($_SESSION['username']); ?>" />
<tr>
	<td colspan="2" align="center">添加个人信息</td>
</tr>
<tr>
	<td align="center">学号</td>
	<td><input type="text" name="stu_num"  /></td>
</tr>
<tr>
	<td align="center">姓名</td>
	<td><input type="text" name="stu_name"  /></td>
</tr>
<tr>
	<td align="center">学院</td>
	<td><select name="stu_xy">
    <!--<option>---请选择---</option>-->
    <option></option>
 <option >计算机学院</option>
<option >财经学院</option>
<option >工商学院</option>
<option>外国语学院</option>
    </select></td>
</tr>
<tr>
	<td align="center">专业</td>
	<td><select name="stu_zy">
    <!--<option>---请选择---</option>-->
    <option></option>
 <option>网络工程</option>
    <option>软件工程</option>
    <option>物联网工程</option>
    <option>工商管理</option>
    </select></td>
</tr>
<tr>
	<td align="center">班级</td>
	<td><select name="stu_class">
    <!--<option>---请选择---</option>-->
    <option></option>
    <option>17软件一班</option>
    <option>17网络二班</option>
    <option>17软件三班</option>
    <option>17网络四班</option>
    </select></td>
</tr>
<tr>
	<td align="center">性别</td>
	<td><input type="radio" name="stu_gender"  value="男"/>男
    <input type="radio" name="stu_gender"  value="女"/>女
    </td>
</tr>
<tr>
	<td align="center">籍贯</td>
	<td><input type="text" name="stu_jg" /></td>
</tr>
<tr>
	<td align="center">政治面貌</td>
	<td><input type="radio" name="stu_zz"  value="团员"/>团员
    <input type="radio" name="stu_zz"  value="党员"/>党员</td>
</tr>
<tr>
	<td align="center">家庭住址</td>
	<td><input type="text" name="stu_home" /></td>
</tr>
<tr>
	<td align="center">联系电话</td>
	<td><input type="text" name="stu_iphone" /></td>
</tr>
<tr valign="middle">
	<td align="center" >兴趣爱好</td>
	<td><input type="checkbox" name="stu_hobby[]" value="打球" />打球&nbsp;&nbsp;<input type="checkbox" name="stu_hobby[]" value="上网" />上网&nbsp;&nbsp;
    <input type="checkbox" name="stu_hobby[]" value="网页设计" />网页设计
    </td>
</tr>
<tr>
	<td align="center" style=" text-height:100px;" >学习经历</td>
	<td><textarea name="stu_study" cols="" rows=""></textarea></td>
</tr>
<tr>
	<td colspan="2" align="center" style="padding-top:10px; ">  <button class="button bg-main icon-check-square-o" type="submit"> 提交</button></td>
</tr>
</table>
</form>
</body>
</html>