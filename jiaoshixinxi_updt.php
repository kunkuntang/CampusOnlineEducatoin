<?php 
$id=$_GET["id"];
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{

	$gonghao=$_POST["gonghao"];$xingming=$_POST["xingming"];$mima=$_POST["mima"];$xingbie=$_POST["xingbie"];$dianhua=$_POST["dianhua"];$youxiang=$_POST["youxiang"];$zhaopian=$_POST["zhaopian"];$zhujiaokecheng=$_POST["zhujiaokecheng"];$chushengnianyue=$_POST["chushengnianyue"];$beizhu=$_POST["beizhu"];
	$sql="update jiaoshixinxi set gonghao='$gonghao',xingming='$xingming',mima='$mima',xingbie='$xingbie',dianhua='$dianhua',youxiang='$youxiang',zhaopian='$zhaopian',zhujiaokecheng='$zhujiaokecheng',chushengnianyue='$chushengnianyue',beizhu='$beizhu' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('�޸ĳɹ�!');location.href='jiaoshixinxi_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�޸Ľ�ʦ��Ϣ</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
</head>
<script language="javascript">
	
	
	function OpenScript(url,width,height)
{
  var win = window.open(url,"SelectToSort",'width=' + width + ',height=' + height + ',resizable=1,scrollbars=yes,menubar=no,status=yes' );
}
	function OpenDialog(sURL, iWidth, iHeight)
{
   var oDialog = window.open(sURL, "_EditorDialog", "width=" + iWidth.toString() + ",height=" + iHeight.toString() + ",resizable=no,left=0,top=0,scrollbars=no,status=no,titlebar=no,toolbar=no,menubar=no,location=no");
   oDialog.focus();
}
</script>
<body>
<p>�޸Ľ�ʦ��Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<?php
$sql="select * from jiaoshixinxi where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 

      <tr><td>���ţ�</td><td><input name='gonghao' type='text' id='gonghao' value='<?php echo mysql_result($query,$i,gonghao);?>' /></td></tr><tr><td>������</td><td><input name='xingming' type='text' id='xingming' value='<?php echo mysql_result($query,$i,xingming);?>' /></td></tr><tr><td>���룺</td><td><input name='mima' type='text' id='mima' value='<?php echo mysql_result($query,$i,mima);?>' /></td></tr><tr><td>�Ա�</td><td><select name='xingbie' id='xingbie'><option value="��">��</option><option value="Ů">Ů</option></select></td></tr><script language="javascript">document.form1.xingbie.value='<?php echo mysql_result($query,$i,xingbie);?>';</script><tr><td>�绰��</td><td><input name='dianhua' type='text' id='dianhua' value='<?php echo mysql_result($query,$i,dianhua);?>' /></td></tr><tr><td>���䣺</td><td><input name='youxiang' type='text' id='youxiang' value='<?php echo mysql_result($query,$i,youxiang);?>' /></td></tr><tr><td>��Ƭ��</td><td><input name='zhaopian' type='text' id='zhaopian' size='50'  value='<?php echo mysql_result($query,$i,zhaopian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>���̿γ̣�</td><td><input name='zhujiaokecheng' type='text' id='zhujiaokecheng' size='50' value='<?php echo mysql_result($query,$i,zhujiaokecheng);?>' /></td></tr><tr><td>�������£�</td><td><input name='chushengnianyue' type='text' id='chushengnianyue' value='<?php echo mysql_result($query,$i,chushengnianyue);?>' onclick="getDate(form1.chushengnianyue,'2')" need="1" /></td></tr><tr><td>��ע��</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'><?php echo mysql_result($query,$i,beizhu);?></textarea></td></tr>
   
   
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="�޸�" />
      <input type="reset" name="Submit2" value="����" /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
<p>&nbsp;</p>
</body>
</html>
