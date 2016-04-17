<?php
session_start();
include_once 'conn.php';
$username=$_GET["username"];
?>
<html>
<head>
<title><?php echo $username?>教师个人主页</title><LINK href="grimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE2 {
	color: #FFFFFF;
	font-weight: bold;
}
.STYLE3 {color: #6D2E18; font-weight: bold; }
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="969" height="1043" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'grtop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="969" height="740" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top">
<?php include_once 'grleft.php';?></td>
            <td valign="top"><table id="__01" width="725" height="740" border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td valign="top"><table id="__01" width="725" height="258" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="725" height="42" background="grimages/1_02_02_01_01.gif"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="17%" align="center" class="title">个人档案</td>
                          <td width="83%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="725" height="208" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="10" background="grimages/1_02_02_01_02_01.gif">&nbsp;</td>
                          <td width="703" height="208" valign="top"><p align="center">
                            <?php
$sql="select * from jiaoshixinxi where gonghao='".$username."'";
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
</p>                            
                            <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">
  <td width='11%' height="30">工号：</td>
      <td width='39%' height="30"><?php echo mysql_result($query,0,gonghao);?></td>
    <td colspan="2" rowspan="7" align="center"><img src="<?php echo mysql_result($query,0,zhaopian);?>" width="231" height="206"></td>
  </tr><tr>
    <td width='11%' height="30">姓名：</td>
    <td width='39%' height="30"><?php echo mysql_result($query,0,xingming);?></td>
  </tr>
  <tr>
    <td height="30">性别：</td>
    <td height="30"><?php echo mysql_result($query,0,xingbie);?></td>
  </tr>
  <tr>
    <td height="30">邮箱：</td>
    <td height="30"><?php echo mysql_result($query,0,youxiang);?></td>
  </tr>
  <tr>
    <td height="30">主教课程：</td>
    <td height="30"><?php echo mysql_result($query,0,zhujiaokecheng);?></td>
  </tr>
  <tr>
    <td width='11%' height="30">电话：</td>
    <td width='39%' height="30"><?php echo mysql_result($query,0,dianhua);?></td>
  </tr>
  <tr>
    <td width='11%' height="30">出生年月：</td>
    <td width='39%' height="30"><?php echo mysql_result($query,0,chushengnianyue);?></td>
  </tr>
  <tr>
    <td width='11%' height="61">备注：</td>
    <td colspan="3"><?php echo mysql_result($query,0,beizhu);?></td>
  <tr>
    <td colspan="4" align="center"><input type="button" name="Submit" value="返回" onClick="javascript:history.back()" /></td>
  </tr>
                            </table>
                            <?php
	}
?></td>
                          <td width="12" background="grimages/1_02_02_01_02_04.gif">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="grimages/1_02_02_01_03.gif" width="725" height="8" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              
            </table></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td><?php include_once 'grdown.php';?></td>
	</tr>
</table>
</body>
</html>