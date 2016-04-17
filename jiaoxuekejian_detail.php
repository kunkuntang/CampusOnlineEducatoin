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
$sql="select * from jiaoxuekejian where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>

<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <td width='11%'>编号：</td><td width='39%'><?php echo mysql_result($query,0,bianhao);?></td><td width='11%'>名称：</td><td width='39%'><?php echo mysql_result($query,0,mingcheng);?></td></tr><tr><td width='11%'>课程：</td><td width='39%'><?php echo mysql_result($query,0,kecheng);?></td><td width='11%'>课件：</td><td width='39%'><?php echo mysql_result($query,0,kejian);?></td></tr><tr><td width='11%'>类型：</td><td width='39%'><?php echo mysql_result($query,0,leixing);?></td><td width='11%'>简介：</td><td width='39%'><?php echo mysql_result($query,0,jianjie);?></td></tr><tr><td width='11%'>发布人：</td><td width='39%'><?php echo mysql_result($query,0,faburen);?></td><td>&nbsp;</td><td>&nbsp;</td>
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

