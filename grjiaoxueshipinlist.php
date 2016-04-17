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
                          <td width="703" height="208" valign="top"><form id="form1" name="form1" method="post" action="">
                            编号：
                            <input name="bianhao" type="text" id="bianhao" size="15" />
                            名称：
  <input name="mingcheng" type="text" id="mingcheng" size="15" />
                            课程：
  <input name="kecheng" type="text" id="kecheng" size="15" />
  <input type="submit" name="Submit" value="查找" />
                          </form>
                            <table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">
                              <tr>
                                <td width="25" bgcolor="#CCFFFF">序号</td>
                                <td width="99" bgcolor='#CCFFFF'>编号</td>
                                <td width="165" bgcolor='#CCFFFF'>名称</td>
                                <td width="87" bgcolor='#CCFFFF'>课程</td>
                                <td width="85" bgcolor='#CCFFFF'>发布人</td>
                                <td width="159" align="center" bgcolor="#CCFFFF">添加时间</td>
                                <td width="51" align="center" bgcolor="#CCFFFF">操作</td>
                              </tr>
                              <?php 
    $sql="select * from jiaoxueshipin where faburen='$username'";
  
if ($_POST["bianhao"]!=""){$nreqbianhao=$_POST["bianhao"];$sql=$sql." and bianhao like '%$nreqbianhao%'";}
if ($_POST["mingcheng"]!=""){$nreqmingcheng=$_POST["mingcheng"];$sql=$sql." and mingcheng like '%$nreqmingcheng%'";}
if ($_POST["kecheng"]!=""){$nreqkecheng=$_POST["kecheng"];$sql=$sql." and kecheng like '%$nreqkecheng%'";}
if ($_POST["faburen"]!=""){$nreqfaburen=$_POST["faburen"];$sql=$sql." and faburen like '%$nreqfaburen%'";}
  $sql=$sql." order by id desc";
  
$query=mysql_query($sql);
  $rowscount=mysql_num_rows($query);
  if($rowscount==0)
  {}
  else
  {
  $pagelarge=10;//每页行数；
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
                              <tr>
                                <td width="25"><?php
	echo $i+1;
?></td>
                                <td><?php echo mysql_result($query,$i,bianhao);?></td>
                                <td><?php echo mysql_result($query,$i,mingcheng);?></td>
                                <td><?php echo mysql_result($query,$i,kecheng);?></td>
                                <td><?php echo mysql_result($query,$i,faburen);?></td>
                                <td width="159" align="center"><?php
echo mysql_result($query,$i,"addtime");
?></td>
                                <td width="51" align="center"><a href="grjiaoxueshipindetail.php?id=<?php echo mysql_result($query,$i,"id");?>&username=<?php echo $username?>">详细</a></td>
                              </tr>
                              <?php
	}
}
?>
                            </table>
                            <p>以上数据共
                              <?php
		echo $rowscount;
	?>
                              条,
  <input type="button" name="Submit2" onClick="javascript:window.print();" value="打印本页" />
                            </p>
                            <p align="center"><a href="grjiaoxueshipinlist.php?pagecurrent=1&username=<?php echo $username?>">首页</a>, <a href="grjiaoxueshipinlist.php?pagecurrent=<?php echo $pagecurrent-1;?>&username=<?php echo $username?>">前一页</a> ,<a href="grjiaoxueshipinlist.php?pagecurrent=<?php echo $pagecurrent+1;?>&username=<?php echo $username?>">后一页</a>, <a href="grjiaoxueshipinlist.php?pagecurrent=<?php echo $pagecount;?>&username=<?php echo $username?>">末页</a>, 当前第<?php echo $pagecurrent;?>页,共<?php echo $pagecount;?>页 </p>
                            <p align="center">&nbsp;</p>                            
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