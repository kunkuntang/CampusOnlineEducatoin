<?php 
$id=$_GET["id"];
include_once 'conn.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>内容详细</title><link rel="stylesheet" href="css.css" type="text/css">
</head>
<body>
<p>内容详细： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from jiaoshixinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <td width='11%'>工号：</td><td width='39%'><?php echo mysql_result($query,0,gonghao);?></td><td width='11%'>姓名：</td><td width='39%'><?php echo mysql_result($query,0,xingming);?></td></tr><tr><td width='11%'>密码：</td><td width='39%'><?php echo mysql_result($query,0,mima);?></td><td width='11%'>性别：</td><td width='39%'><?php echo mysql_result($query,0,xingbie);?></td></tr><tr><td width='11%'>电话：</td><td width='39%'><?php echo mysql_result($query,0,dianhua);?></td><td width='11%'>邮箱：</td><td width='39%'><?php echo mysql_result($query,0,youxiang);?></td></tr><tr><td width='11%'>照片：</td><td width='39%'><?php echo mysql_result($query,0,zhaopian);?></td><td width='11%'>主教课程：</td><td width='39%'><?php echo mysql_result($query,0,zhujiaokecheng);?></td></tr><tr><td width='11%'>出生年月：</td><td width='39%'><?php echo mysql_result($query,0,chushengnianyue);?></td><td width='11%'>备注：</td><td width='39%'><?php echo mysql_result($query,0,beizhu);?></td>
    <tr>
      <td colspan="4" align="center"><input type="button" name="Submit" value="返回" onclick="javascript:history.back()" /></td>
    </tr>
  </table>

<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>

