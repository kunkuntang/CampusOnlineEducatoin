<?php
session_start();
?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<title>welcome</title>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312">
<link href="images/skin.css" rel="stylesheet" type="text/css" />
</head>
<body>
<table width="98%" border="0" align="center" cellpadding="0" cellspacing="0">
  <tr>
    <td width="53%" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><span class="left_bt">感谢您使用 精品课程网站在线发布系统 网站管理系统程序</span><br>
        <br>
      <span class="left_txt">&nbsp;<br>
      &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</span><span class="left_txt"><a href="grindex.php?username=<?php echo $_SESSION['username']?>" target="_blank">点此查看我的个人主页</a><br>
        　 <br>
    </span></td>
  </tr>
  <tr>
    <td>&nbsp;</td>
  </tr>
  <tr>
    <td valign="top"><!--JavaScript部分--></td>
  </tr>
  <tr>
    <td height="40"><table width="100%" height="1" border="0" cellpadding="0" cellspacing="0" bgcolor="#CCCCCC">
      <tr>
        <td></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>

