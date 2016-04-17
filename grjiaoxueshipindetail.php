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
                          <td width="17%" align="center" class="title">教学视频</td>
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
						  $i=0;
					$sql="select * from jiaoxueshipin where id=".$id;
					$query=mysql_query($sql);
					 $rowscount=mysql_num_rows($query);
					  if($rowscount==0)
					  {}
					  else
					  {
					?>
</p>                            
                            <table width="97%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#67B41A" style="border-collapse:collapse">
                              <tr>
                                <td height="33" align="center"><span class="STYLE3"><?php echo mysql_result($query,0,"mingcheng"); ?></span></td>
                              </tr>
                              <tr>
                                <td height="30" align="center"><span class="STYLE3">编号：<?php echo mysql_result($query,$i,bianhao);?> 课程：<?php echo mysql_result($query,$i,kecheng);?> 教师： <?php echo mysql_result($query,$i,faburen);?></span></td>
                              </tr>
                              <tr>
                                <td height="104"><?php
					$lurl=mysql_result($query,0,"shipin")

?>
                                    <p align=center>
                                      <object align=middle classid=CLSID:22d6f312-b0f6-11d0-94ab-0080c74c7e95 class=OBJECT id=MediaPlayer width=500 height=500 >
                                        <param name=ShowStatusBar value=-1>
                                        <param name=Filename value=<?php echo $lurl ;?>
                        
          
                                        <embed type=application/x-oleobject codebase=http://activex.microsoft.com/activex/controls/mplayer/en/nsmp2inf.cab#Version=5,1,52,701 flename=mp src=<?php echo $lurl ;?>   width=500 height=500></embed>
                                      </object>
                                  <p align=center>(双击全屏)</td>
                              </tr>
                              <tr>
                                <td height="104"><?php echo mysql_result($query,0,"jianjie");?></td>
                              </tr>
                              <tr>
                                <td align="right"><a href="#" onClick="javascript:history.back();">返回</a></td>
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