<?php
session_start();
include_once 'conn.php';
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$gonghao=$_POST["gonghao"];$xingming=$_POST["xingming"];$mima=$_POST["mima"];$xingbie=$_POST["xingbie"];$dianhua=$_POST["dianhua"];$youxiang=$_POST["youxiang"];$zhaopian=$_POST["zhaopian"];$zhujiaokecheng=$_POST["zhujiaokecheng"];$chushengnianyue=$_POST["chushengnianyue"];$beizhu=$_POST["beizhu"];
	$sql="insert into jiaoshixinxi(gonghao,xingming,mima,xingbie,dianhua,youxiang,zhaopian,zhujiaokecheng,chushengnianyue,beizhu) values('$gonghao','$xingming','$mima','$xingbie','$dianhua','$youxiang','$zhaopian','$zhujiaokecheng','$chushengnianyue','$beizhu') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='jiaoshixinxi_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ʦ��Ϣ</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>��ӽ�ʦ��Ϣ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.gonghao.value==""){alert("�����빤��");document.form1.gonghao.focus();return false;}if(document.form1.xingming.value==""){alert("����������");document.form1.xingming.focus();return false;}if(document.form1.mima.value==""){alert("����������");document.form1.mima.focus();return false;}if(document.form1.dianhua.value==""){alert("������绰");document.form1.dianhua.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>���ţ�</td><td><input name='gonghao' type='text' id='gonghao' value='' />&nbsp;*</td></tr><tr><td>������</td><td><input name='xingming' type='text' id='xingming' value='' />&nbsp;*</td></tr><tr><td>���룺</td><td><input name='mima' type='text' id='mima' value='' />&nbsp;*</td></tr><tr><td>�Ա�</td><td><select name='xingbie' id='xingbie'><option value="��">��</option><option value="Ů">Ů</option></select></td></tr><tr><td>�绰��</td><td><input name='dianhua' type='text' id='dianhua' value='' />&nbsp;*</td></tr><tr><td>���䣺</td><td><input name='youxiang' type='text' id='youxiang' value='' /></td></tr><tr><td>��Ƭ��</td><td><input name='zhaopian' type='text' id='zhaopian' value='' size='50'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=zhaopian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>���̿γ̣�</td><td><input name='zhujiaokecheng' type='text' id='zhujiaokecheng' value='' size='50'  /></td></tr><tr><td>�������£�</td><td><input name='chushengnianyue' type='text' id='chushengnianyue' value='' onclick="getDate(form1.chushengnianyue,'2')" need="1" /></td></tr><tr><td>��ע��</td><td><textarea name='beizhu' cols='50' rows='8' id='beizhu'></textarea></td></tr>

    <tr>
      <td>&nbsp;</td>
      <td><input type="hidden" name="addnew" value="1" />
        <input type="submit" name="Submit" value="���" onclick="return check();" />
      <input type="reset" name="Submit2" value="����" /></td>
    </tr>
  </table>
</form>
<p>&nbsp;</p>
</body>
</html>

