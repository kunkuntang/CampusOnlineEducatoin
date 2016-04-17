<?php
session_start();
include_once 'conn.php';
$lb=$_GET["lb"];
$biaoti=$_POST["biaoti"];
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
                          <td width="17%" align="center" class="title"><?php echo $lb;?></td>
                          <td width="83%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="725" height="208" border="0" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="10" background="grimages/1_02_02_01_02_01.gif">&nbsp;</td>
                          <td width="703" height="208" valign="top"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0" class="newsline">
                            <?php 
    $sql="select * from xinwentongzhi where tianjiaren='$username'";
  
if ($biaoti!=""){$sql=$sql." and biaoti like '%$biaoti%'";}
if($lb!=""){$sql=$sql." and leibie='$lb'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=20;//每页行数；
  $pagecurrent=$_GET["pagecurrent"];
  if($rowscount%$pagelarge==0)
  {
		$pagecount=$rowscount/$pagelarge;
  }
  else
  {
   		$pagecount=intval($rowscount/$pagelarge)+1;
  }
  if($pagecurrent=="" || $pagecurrent<=0)
{
	$pagecurrent=1;
}
 
if($pagecurrent>$pagecount)
{
	$pagecurrent=$pagecount;
}
		$ddddd=$pagecurrent*$pagelarge;
	if($pagecurrent==$pagecount)
	{
		if($rowscount%$pagelarge==0)
		{
		$ddddd=$pagecurrent*$pagelarge;
		}
		else
		{
		$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
		}
	}

	for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
{
  ?>
                            <tr height="25">
                              <td width="2%" align="right" class="newsline">·</td>
                              <td width="65%" class="newsline"><a href="grgg_detail.php?id=<?php echo mysql_result($query,$i,"id");?>&username=<?php echo $username?>"><?php echo mysql_result($query,$i,"biaoti");?></a></td>
                              <td width="11%" class="newsline">被点击<?php echo mysql_result($query,$i,"dianjilv");?>次</td>
                              <td width="22%" class="newsline"><?php echo mysql_result($query,$i,"addtime");?></td>
                            </tr>
                            <?php
						}
					  }
					  ?>
                          </table>
                            <p align="center"><a href="grnews.php?pagecurrent=1&lb=<?php echo $lb;?>&username=<?php echo $username?>">首页</a>, <a href="grnews.php?pagecurrent=<?php echo $pagecurrent-1;?>&lb=<?php echo $lb;?>&username=<?php echo $username?>">前一页</a> ,<a href="grnews.php?pagecurrent=<?php echo $pagecurrent+1;?>&lb=<?php echo $lb;?>&username=<?php echo $username?>">后一页</a>, <a href="grnews.php?pagecurrent=<?php echo $pagecount;?>&lb=<?php echo $lb;?>&username=<?php echo $username?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 以上数据共
                              <?php
		echo $rowscount;
	?>
                              条,
  <input type="button" name="Submit2" onClick="javascript:window.print();" value="打印本页" style=" height:19px; border:solid 1px #000000; color:#666666" />
                            </p>                            <p align="center">&nbsp;</p>
                            </td>
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