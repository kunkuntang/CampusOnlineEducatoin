<?php 
$id=$_GET["id"];
include_once 'conn.php';
include_once 'sinaEditor.class.php';
extract($_POST);
extract($_GET);
$editor=new sinaEditor('gently_editor');
$editor->Value='';
$editor->BasePath='.';
$editor->Height=460;
$editor->Width=650;
$editor->AutoSave=false;
$ndate =date("Y-m-d");
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$bianhao=$_POST["bianhao"];$mingcheng=$_POST["mingcheng"];$kecheng=$_POST["kecheng"];$kejian=$_POST["kejian"];$leixing=$_POST["leixing"];$jianjie=$gently_editor;$faburen=$_POST["faburen"];
	$sql="update jiaoxuekejian set bianhao='$bianhao',mingcheng='$mingcheng',kecheng='$kecheng',kejian='$kejian',leixing='$leixing',jianjie='$jianjie',faburen='$faburen' where id= ".$id;
	mysql_query($sql);
	echo "<script>javascript:alert('修改成功!');location.href='jiaoxuekejian_list.php';</script>";
}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>修改教学课件</title><link rel="stylesheet" href="css.css" type="text/css"><script language="javascript" src="js/Calendar.js"></script>
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
<p>修改教学课件： 当前日期： <?php echo $ndate; ?></p>
<?php
$sql="select * from jiaoxuekejian where id=".$id;
$query=mysql_query($sql);
$rowscount=mysql_num_rows($query);
if($rowscount>0)
{
$editor->Value=mysql_result($query,$i,jianjie);
?>
<form id="form1" name="form1" method="post" action="">
<table width="100%" border="1" align="center" cellpadding="3" cellspacing="1" bordercolor="#00FFFF" style="border-collapse:collapse"> 
      <tr><td>编号：</td><td><input name='bianhao' type='text' id='bianhao' value='<?php echo mysql_result($query,$i,bianhao);?>' /></td></tr><tr><td>名称：</td><td><input name='mingcheng' type='text' id='mingcheng' size='50' value='<?php echo mysql_result($query,$i,mingcheng);?>' /></td></tr><tr><td>课程：</td><td><input name='kecheng' type='text' id='kecheng' value='<?php echo mysql_result($query,$i,kecheng);?>' /></td></tr><tr><td>课件：</td><td><input name='kejian' type='text' id='kejian' size='50'  value='<?php echo mysql_result($query,$i,kejian);?>' /> &nbsp;<a href="javaScript:OpenScript('upfile.php?Result=kejian',460,180)"><img src="Images/Upload.gif" width="30" height="16" border="0" align="absmiddle" /></a></td></tr><tr><td>类型：</td><td><select name='leixing' id='leixing'>
        <option value="rar">rar</option>
        <option value="zip">zip</option>
        <option value="doc">doc</option>
        <option value="pdf">pdf</option>
        <option value="xls">xls</option>
        <option value="ppt">ppt</option>
      </select></td></tr><script language="javascript">document.form1.leixing.value='<?php echo mysql_result($query,$i,leixing);?>';</script><tr><td>简介：</td><td><?php $editor->Create();?></td></tr><tr><td>发布人：</td><td><input name='faburen' type='text' id='faburen' value='<?php echo mysql_result($query,$i,faburen);?>' /></td></tr>
    <tr>
      <td>&nbsp;</td>
      <td><input name="addnew" type="hidden" id="addnew" value="1" />
      <input type="submit" name="Submit" value="修改" />
      <input type="reset" name="Submit2" value="重置" /></td>
    </tr>
  </table>
</form>
<?php
	}
?>
</body>
</html>

