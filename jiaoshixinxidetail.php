<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
?>
<html>
<head>
<title>精品课程网站在线发布系统</title>
<LINK href="qtimages/style.css" type=text/css rel=stylesheet>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<style type="text/css">
<!--
.STYLE1 {
	color: #529915;
	font-weight: bold;
}
.STYLE4 {color: #FFFFFF; font-weight: bold; }
.STYLE2 {color: #6D2E18; font-weight: bold; }
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="993" height="1092" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'qttop.php';?></td>
	</tr>
	<tr>
		<td><table id="__01" width="993" height="846" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td valign="top"><?php include_once 'qtleft.php';?></td>
            <td height="830" valign="top"><table id="__01" width="785" height="830" border="0" cellpadding="0" cellspacing="0">
              
              <tr>
                <td valign="top"><table width="785" height="833" border="0" cellpadding="0" cellspacing="0" id="__01">
                  <tr>
                    <td width="785" height="40" background="qtimages/1_02_02_02_01.jpg"><table width="100%" height="19" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="12%" align="center" valign="bottom"><span class="STYLE4">教师详细</span></td>
                        <td width="74%" valign="bottom">&nbsp;</td>
                        <td width="14%" valign="bottom" class="STYLE4"></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="760" valign="top"><table id="__01" width="785" height="100%" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="19" background="qtimages/1_02_02_02_02_01.jpg">&nbsp;</td>
                        <td width="737" height="176" valign="top"><p align="center">
                          <?php
$sql="select * from jiaoshixinxi where id=".$id;
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
    <td colspan="4" align="center"><input type="button" name="Submit" value="返回" onclick="javascript:history.back()" /></td>
  </tr>
                          </table>
                          <?php
	}
?></td>
                        <td width="29" background="qtimages/1_02_02_02_02_03.jpg">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td height="12"><img src="qtimages/1_02_02_02_03.jpg" width="785" height="12" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              
              <tr>
                <td height="13"><img src="qtimages/1_02_02_04.jpg" width="785" height="13" alt=""></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
	</tr>
	<tr>
		<td><?php include_once 'qtdown.php';?></td>
	</tr>
</table>
</body>
</html>