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
-->
</style>
</head>
<body bgcolor="#FFFFFF" leftmargin="0" topmargin="0" marginwidth="0" marginheight="0">
<table width="969" height="592" border="0" align="center" cellpadding="0" cellspacing="0" id="__01">
	<tr>
		<td><?php include_once 'grtop.php';?></td>
	</tr>
	<tr>
		<td height="525"><table id="__01" width="969" height="525" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td height="525" valign="top">
<?php include_once 'grleft.php';?></td>
            <td valign="top"><table id="__01" width="725" height="525" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td height="258" valign="top"><table id="__01" width="725" height="258" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="725" height="42" background="grimages/1_02_02_01_01.gif"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="17%" align="center" class="title"><a href="grnews.asp?lb=教学大纲">教学大纲</a></td>
                        <td width="83%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="725" height="208" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="10"><img src="grimages/1_02_02_01_02_01.gif" width="10" height="208" alt=""></td>
                        <td width="703" height="208" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                          <?php 
					  $sql="select biaoti,id,addtime from xinwentongzhi where leibie='教学大纲' and tianjiaren='".$username."' order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							if($i==8)
							{
								break ;
							}
						?>
                          <tr height="25">
                            <td width="4%" align="center" class="newslist"><img height="7" src="grimages/1.jpg" width="7" /></td>
                            <td width="70%" class="newslist"><a href="grgg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>
                            <td width="26%" class="newslist"><?php echo mysql_result($query,$i,"addtime");?></td>
                          </tr>
                          <?php
						}
					  }
					  ?>
                        </table></td>
                        <td width="12"><img src="grimages/1_02_02_01_02_04.gif" width="12" height="208" alt=""></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="grimages/1_02_02_01_03.gif" width="725" height="8" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              
              <tr>
                <td height="267"><table id="__01" width="725" height="267" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td><table id="__01" width="363" height="267" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="363" height="41" background="grimages/1_02_02_03_01_01.jpg"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                          <tr>
                            <td width="35%" align="center" class="title"><A href="grnews.php?lb=教学课件">教学课件</A></td>
                            <td width="65%">&nbsp;</td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="363" height="215" border="0" cellpadding="0" cellspacing="0">
                          <tr>
                            <td><img src="grimages/1_02_02_03_01_02_01.jpg" width="14" height="215" alt=""></td>
                            <td width="335" height="215" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                              <?php 
					  $sql="select * from jiaoxuekejian where faburen='".$username."' order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							if($i==8)
							{
								break ;
							}
						?>
                              <tr height="25">
                                <td width="4%" align="center" class="newslist"><img height="7" src="grimages/1.jpg" width="7" /></td>
                                <td width="58%" class="newslist"><a href="grjiaoxuekejiandetail.php?id=<?php echo mysql_result($query,$i,"id");?>&username=<?php echo $username?>"><?php echo mysql_result($query,$i,"mingcheng");?></a></td>
                                <td width="38%" class="newslist"><?php echo mysql_result($query,$i,"addtime");?></td>
                              </tr>
                              <?php
						}
					  }
					  ?>
                            </table></td>
                            <td><img src="grimages/1_02_02_03_01_02_03.jpg" width="14" height="215" alt=""></td>
                          </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="grimages/1_02_02_03_01_03.jpg" width="363" height="11" alt=""></td>
                      </tr>
                    </table></td>
                    <td><table id="__01" width="363" height="267" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="363" height="41" background="grimages/1_02_02_03_01_01.jpg"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                            <tr>
                              <td width="35%" align="center" class="title"><A href="grjiaoxueshipinlist.php">教学视频</A></td>
                              <td width="65%">&nbsp;</td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><table id="__01" width="363" height="215" border="0" cellpadding="0" cellspacing="0">
                            <tr>
                              <td><img src="grimages/1_02_02_03_01_02_01.jpg" width="14" height="215" alt=""></td>
                              <td width="335" height="215" valign="top"><table width="98%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                                <?php 
					  $sql="select * from jiaoxueshipin where faburen='".$username."' order by id desc";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	for($i=0;$i<$rowscount;$i++)
						{
							if($i==8)
							{
								break ;
							}
						?>
                                <tr height="25">
                                  <td width="4%" align="center" class="newslist"><img height="7" src="grimages/1.jpg" width="7" /></td>
                                  <td width="58%" class="newslist"><a href="grjiaoxueshipindetail.php?id=<?php echo mysql_result($query,$i,"id");?>&username=<?php echo $username?>"><?php echo mysql_result($query,$i,"mingcheng");?></a></td>
                                  <td width="38%" class="newslist"><?php echo mysql_result($query,$i,"addtime");?></td>
                                </tr>
                                <?php
						}
					  }
					  ?>
                              </table></td>
                              <td><img src="grimages/1_02_02_03_01_02_03.jpg" width="14" height="215" alt=""></td>
                            </tr>
                        </table></td>
                      </tr>
                      <tr>
                        <td><img src="grimages/1_02_02_03_01_03.jpg" width="363" height="11" alt=""></td>
                      </tr>
                    </table></td>
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