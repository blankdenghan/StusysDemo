<?php if (!defined('THINK_PATH')) exit();?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>无标题文档</title>
<link rel="stylesheet" href="/wwww/Public/css/pintuer.css">
    <link rel="stylesheet" href="/wwww/Public/css/admin.css">
</head>
<style>
a{
	text-decoration: none;
	color: #39C;
	}
.pages a,.pages span{
	display:inline-block;
	padding:2px 10px;
	margin:0 10px;;
	border:1px solid #f0f0f0;
	-webkit-border-radius:3px;
	-moz-border-radius:3px;
	border-radius:3px;
	}
.pages a,.pages li{
    display:inline-block;
	list-style:none;
	text-decoration:none;
	color:#58A0D3;
	}
.pages a.first,.pages a.prev,.pages a.next,.pages a.end{
	margin:0;
	}
.pages a:hover{
	border-color:#50a8e6;
	}
.pages span.current{
	background:#50a8e6;
	color:#fff;
	font-weight:700;
	border-color:#50a8e6;
	}
	table{border:0px #50a8e6 solid;}
	td{border:0px #50a8e6 solid;}
</style>
<body >
<!--<table border="1" align="center"  bordercolor="#CCCCCC"><tr><td colspan="13" align="center">学生信息列表1-->
<!--[<?php echo (session('username')); ?>]<?php echo ($_SESSION['username']); ?> --><!--[<a href="<?php echo U('Student/stu_add');?>">添加</a>][<a href="<?php echo U('Student/logout');?>">退出登录</a>] --><!--</td></tr>1-->
<!--2
<tr>
<td align="center">学号</td>
<td align="center">姓名</td>
<td align="center">学院</td>
<td align="center">专业</td>
<td align="center">班级</td>
<td align="center">性别</td>
<td align="center">籍贯</td>
<td align="center">政治面貌</td>
<td align="center">家庭住址</td>
<td align="center">联系电话</td>
<td align="center">兴趣爱好</td>
<td align="center">学习经历</td>
<td align="center">操作</td>
</tr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i;?><tr>
<td align="center"><?php echo ($rs['stu_num']); ?></td>
<td align="center"><?php echo ($rs['stu_name']); ?></td>
<td align="center"><?php echo ($rs['stu_xy']); ?></td>
<td align="center"><?php echo ($rs['stu_zy']); ?></td>
<td align="center"><?php echo ($rs['stu_class']); ?></td>
<td align="center"><?php echo ($rs['stu_gender']); ?></td>
<td align="center"><?php echo ($rs['stu_jg']); ?></td>
<td align="center"><?php echo ($rs['stu_zz']); ?></td>
<td align="center"><?php echo ($rs['stu_home']); ?></td>
<td align="center"><?php echo ($rs['stu_iphone']); ?></td>
<td align="center"><?php echo ($rs['stu_hobby']); ?></td>
<td align="center"><?php echo ($rs['stu_study']); ?></td>
<td>
<a class="button button-little bg-green" href="<?php echo U('stu_modify?stu_num='.$rs['stu_num']);?>" target="_blank"> 修改</a>
<a href="<?php echo U('stu_delete?stu_num='.$rs['stu_num']);?>" class="button button-little bg-blue"> 删除</a> 
<!--[<a href="<?php echo U('stu_modify?stu_num='.$rs['stu_num']);?>">修改</a>]
[<a href="<?php echo U('stu_delete?stu_num='.$rs['stu_num']);?>">删除</a>]--> 
<!--</td>
</tr>2-->
<!--<?php endforeach; endif; else: echo "" ;endif; ?>
<tr>
<td  colspan="13" align="center" class="pages"><?php echo ($page); ?></td>
</tr>
</table>3-->
 <div class="panel-head"><strong class="icon-reorder"> 学生信息列表</strong></div>
 <table class="table table-hover text-center">
 <tr>
 <td align="center">用户名</td>
<td align="center">学号</td>
<td align="center">姓名</td>
<td align="center">学院</td>
<td align="center">专业</td>
<td align="center">班级</td>
<td align="center">性别</td>
<td align="center">籍贯</td>
<td align="center">政治面貌</td>
<td align="center">家庭住址</td>
<td align="center">联系电话</td>
<td align="center">兴趣爱好</td>
<td align="center">学习经历</td>
<td align="center">操作</td>
</tr>
<?php if(is_array($data)): $i = 0; $__LIST__ = $data;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$rs): $mod = ($i % 2 );++$i;?><tr>
<td align="center"><?php echo ($_SESSION['username']); ?></td>
<td align="center"><?php echo ($rs['stu_num']); ?></td>
<td align="center"><?php echo ($rs['stu_name']); ?></td>
<td align="center"><?php echo ($rs['stu_xy']); ?></td>
<td align="center"><?php echo ($rs['stu_zy']); ?></td>
<td align="center"><?php echo ($rs['stu_class']); ?></td>
<td align="center"><?php echo ($rs['stu_gender']); ?></td>
<td align="center"><?php echo ($rs['stu_jg']); ?></td>
<td align="center"><?php echo ($rs['stu_zz']); ?></td>
<td align="center"><?php echo ($rs['stu_home']); ?></td>
<td align="center"><?php echo ($rs['stu_iphone']); ?></td>
<td align="center"><?php echo ($rs['stu_hobby']); ?></td>
<td align="center"><?php echo ($rs['stu_study']); ?></td>
<td>
<a class="button button-little bg-green" href="<?php echo U('stu_modify?stu_num='.$rs['stu_num']);?>" target="_blank"> 修改</a>
<!--<a href="<?php echo U('stu_delete?stu_num='.$rs['stu_num']);?>" class="button button-little bg-blue"> 删除</a> -->
</td>
</tr><?php endforeach; endif; else: echo "" ;endif; ?>
<!--<tr>
<td  colspan="13" align="center" class="pages"><?php echo ($page); ?></td>
</tr>-->
</table>
</body>
</html>