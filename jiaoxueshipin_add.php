<?php
session_start();
include_once 'conn.php';
include_once 'sinaEditor.class.php';
extract($_POST);
extract($_GET);
$editor=new sinaEditor('jianjie');
$editor->Value='';
$editor->BasePath='.';
$editor->Height=460;
$editor->Width=650;
$editor->AutoSave=false;
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$bianhao=$_POST["bianhao"];$mingcheng=$_POST["mingcheng"];$kecheng=$_POST["kecheng"];$jianjie=$_POST["jianjie"];$shipin=$_POST["shipin"];$faburen=$_POST["faburen"];
	$sql="insert into jiaoxueshipin(bianhao,mingcheng,kecheng,jianjie,shipin,faburen) values('$bianhao','$mingcheng','$kecheng','$jianjie','$shipin','$faburen') ";
	mysql_query($sql);
	echo "<script>javascript:alert('��ӳɹ�!');location.href='jiaoxueshipin_add.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>��ѧ��Ƶ</title><script language="javascript" src="js/Calendar.js"></script><link rel="stylesheet" href="css.css" type="text/css">
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
<p>��ӽ�ѧ��Ƶ�� ��ǰ���ڣ� <?php echo $ndate; ?></p>
<script language="javascript">
	function check()
{
	if(document.form1.bianhao.value==""){alert("��������");document.form1.bianhao.focus();return false;}if(document.form1.mingcheng.value==""){alert("����������");document.form1.mingcheng.focus();return false;}if(document.form1.kecheng.value==""){alert("������γ�");document.form1.kecheng.focus();return false;}if(document.form1.shipin.value==""){alert("��������Ƶ");document.form1.shipin.focus();return false;}if(document.form1.faburen.value==""){alert("�����뷢����");document.form1.faburen.focus();return false;}
}
	function gow()
	{
		location.href='peixunccccailiao_add.php?jihuabifffanhao='+document.form1.jihuabifffanhao.value;
	}
</script>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse">    
	<tr><td>��ţ�</td><td><input name='bianhao' type='text' id='bianhao' value='' />&nbsp;*</td></tr><tr><td>���ƣ�</td><td><input name='mingcheng' type='text' id='mingcheng' value='' size='50'  />&nbsp;*</td></tr><tr><td>�γ̣�</td><td><input name='kecheng' type='text' id='kecheng' value='' />&nbsp;*</td></tr><tr><td>��飺</td><td><?php $editor->Create();?></td></tr><tr><td>��Ƶ��</td><td><input name='shipin' type='text' id='shipin' value='' size='50'  />&nbsp;<a href="javaScript:OpenScript('upfile.php?Result=shipin',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a>&nbsp;*</td></tr><tr><td>�����ˣ�</td><td><input name='faburen' type='text' id='faburen' value='<?php echo $_SESSION['username'];?>' />&nbsp;*</td></tr>

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

