<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
$username=$_GET["username"];
mysql_query("update xinwentongzhi set dianjilv=dianjilv+1 where id=$id");
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
                          <td width="17%" align="center" class="title">教学课件</td>
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
$sql="select * from jiaoxuekejian where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
</p>                            
                            <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">
  <td width='11%'>编号：</td>
      <td width='39%'><?php echo mysql_result($query,0,bianhao);?></td>
    <td width='11%'>名称：</td>
    <td width='39%'><?php echo mysql_result($query,0,mingcheng);?></td>
  </tr><tr>
    <td width='11%'>课程：</td>
    <td width='39%'><?php echo mysql_result($query,0,kecheng);?></td>
    <td width='11%'>课件：</td>
    <td width='39%'><a href="<?php echo mysql_result($query,0,kejian);?>" target="_blank">点此下载</a></td>
  </tr>
  <tr>
    <td width='11%'>类型：</td>
    <td width='39%'><?php echo mysql_result($query,0,leixing);?></td>
    <td width='11%'>发布人：</td>
    <td width='39%'><?php echo mysql_result($query,0,faburen);?></td>
  </tr>
  <tr>
    <td width='11%' height="120">简介：</td>
    <td colspan="3"><?php echo mysql_result($query,0,jianjie);?></td>
  <tr>
    <td colspan="4" align="center"><input type="button" name="Submit" value="返回" onClick="javascript:history.back()" /></td>
  </tr>
                            </table>
                            <?php
	}
?>
                            <p></p></td>
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