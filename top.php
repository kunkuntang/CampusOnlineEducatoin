<?php
session_start();

?><!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=gb2312" />
<title>�ޱ����ĵ�</title>
<style type="text/css">
<!--
body {
	margin-left: 0px;
	margin-top: 0px;
	margin-right: 0px;
	margin-bottom: 0px;
}
.STYLE1 {font-size: 12px}
-->
a:link {font-size:12px; text-decoration:none; color:#000000;}
a:visited {font-size:12px; text-decoration:none; color:#000000;}
a:hover {font-size:12px; text-decoration:none; color:#FF0000;}

a.v1:link {font-size:12px; text-decoration:none; color:#03515d;}
a.v1:visited {font-size:12px; text-decoration:none; color:#03515d;}
.STYLE5 {	color: #72AC27;
	font-size: 26pt;
}
.STYLE6 {font-size: 18pt}
</style>
</head>

<body>
<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td height="26" background="images/main_03.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr>
        <td width="227" height="26" background="images/main_01.gif" >&nbsp;</td>
        <td>&nbsp;</td>
        <td width="60"><img src="images/main_05.gif" width="60" height="26" /></td>
      </tr>
    </table></td>
  </tr>
  <tr>
    <td height="64"><table width="100%" border="0" cellspacing="0" cellpadding="0">
      <tr> 
        <td width="227" height="64" background="images/main_06.gif" nowrap="nowrap" >&nbsp;</td>
        <td><table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
            <td height="26" background="images/main_07.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="26"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                  <tr>
                    <td width="640" height="26"><table width="100%" border="0" cellspacing="0" cellpadding="0">
                      <tr>
                        <td width="30"><div align="center"><img src="images/top_1.gif" width="14" height="14" /></div></td>
                        <td  nowrap="nowrap" class="STYLE1">��ǰ��¼�û���<?php
			echo $_SESSION['username'];
			?>
            Ȩ�ޣ�
              <?php
			echo $_SESSION['cx'];
			?></td>
                      </tr>
                    </table></td>
                    <td width="19"><img src="images/main_09.gif" width="19" height="26" /></td>
                    <td width="352"><table width="46%" border="0" align="right" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="56"><table width="45" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="21"><div align="center"><img src="images/top_2.gif" width="14" height="14" /></div></td>
                              <td width="35"><div align="center" class="STYLE1"><a href="sy.php" target="hsgmain">��ҳ</a></div></td>
                            </tr>
                        </table></td>
                       
                       
                        <?php
						if($_SESSION["cx"]=="��������Ա" || $_SESSION["cx"]=="��ͨ����Ա")
						{
						?>
						 <td width="10"><img src="images/main_11.gif" width="6" height="26" /></td>
						<td width="102"><table width="102" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="22"><div align="center"><img src="images/top_6.gif" width="14" height="14" /></div></td>
                              <td width="80"><div align="center" class="STYLE1"><a href="mod.php" target="hsgmain">������Ϣ�޸�</a></div></td>
                            </tr>
                        </table></td>
						<?php
						}
						?>
                        <td width="10"><img src="images/main_11.gif" width="6" height="26" /></td>
                        <td width="56"><table width="45" border="0" cellspacing="0" cellpadding="0">
                            <tr>
                              <td width="21"><div align="center"><img src="images/top_7.gif" width="14" height="14" /></div></td>
                              <td width="24"><div align="center" class="STYLE1"><a href="logout.php" target="_parent">�˳�</a></div></td>
                            </tr>
                        </table></td>
                        </tr>
                    </table></td>
                  </tr>
                </table></td>
                <td width="12"><img src="images/main_13.gif" width="12" height="26" /></td>
              </tr>
            </table></td>
          </tr>
          <tr>
            <td height="38" background="images/main_15.gif"><table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td height="38"><div style="font-family:����; color:#FFFFFF; filter:Glow(Color=#000000,Strength=2); WIDTH: 100%; FONT-WEIGHT: bold; FONT-SIZE: 16pt; margin-top:5pt">
                  <div align="center" class="STYLE5 STYLE6">
                    <div align="left">��Ʒ�γ���վ���߷���ϵͳ</div>
                  </div>
                </div></td>
                <td width="60" ><div align="right"><img src="images/main_17.gif" width="60" height="38" /></div></td>
              </tr>
            </table></td>
          </tr>
        </table></td>
      </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
