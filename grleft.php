<script language="javascript">
function userlogs()
{
	if(document.userlog.username.value=="")
	{
		alert("�������û���");
		document.userlog.username.focus();
		return false;
	}
	if(document.userlog.pwd1.value=="")
	{
		alert("����������");
		document.userlog.pwd1.focus();
		return false;
	}
}
</script><table id="__01" width="244" height="519" border="0" cellpadding="0" cellspacing="0">
              <tr>
                <td><table id="__01" width="244" height="152" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="244" height="39" background="grimages/1_02_01_01_01.jpg"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="52%" align="center" class="title">ϵͳ����</td>
                        <td width="48%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="244" height="106" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="7" background="grimages/1_02_01_01_02_01.jpg">&nbsp;</td>
                        <td width="227" height="106"><marquee border="0" direction="up" height="100%" onMouseOut="start()" onMouseOver="stop()"
                scrollamount="1" scrolldelay="50"><TABLE width="92%" height="100%" 
            border=0 align=center 
      cellPadding=0 cellSpacing=5>
                      <TBODY><TR><TD><?php 
					  $sql="select * from jiaoshixinxi where gonghao='".$username."'";
					  $query=mysql_query($sql);
					  $rowscount=mysql_num_rows($query);
					  if($rowscount>0)
					  {
					  	echo mysql_result($query,0,"grgg");
					  	}
						?></TD></TR></TBODY></TABLE></marquee></td>
                        <td width="10" background="grimages/1_02_01_01_02_03.jpg">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="grimages/1_02_01_01_03.jpg" width="244" height="7" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td height="152"><table id="__01" width="244" height="152" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="244" height="39" background="grimages/1_02_01_01_01.jpg"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                        <tr>
                          <td width="52%" align="center" class="title">�û���½</td>
                          <td width="48%">&nbsp;</td>
                        </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="244" height="106" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="7" background="grimages/1_02_01_01_02_01.jpg">&nbsp;</td>
                        <td width="227" height="106"><?php 
					if ($_SESSION['cx']=="" )
					{
				?>
                            <table width="100%" height="68%" border="0" cellpadding="0" cellspacing="0">
                              <form action="userlog_post.php" method="post" name="userlog" id="userlog">
                                <tr>
                                  <td width="12" height="34">&nbsp;</td>
                                  <td width="49">�û���:</td>
                                  <td width="109"><input name="username" type="text" id="username" size="12" style="width:100px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                                </tr>
                                <tr>
                                  <td height="26">&nbsp;</td>
                                  <td>����:</td>
                                  <td><input name="pwd1" type="password" id="pwd1" size="12" style="width:100px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                                </tr>
                                <tr>
                                  <td height="38" colspan="3" align="center"><input type="submit" name="Submit" value="��½" style=" height:19px; border:solid 1px #000000; color:#666666" />
                                      <input type="reset" name="Submit2" value="����" style=" height:19px; border:solid 1px #000000; color:#666666" /></td>
                                </tr>
                              </form>
                            </table>
                          <?php 
							}
				  else
				  {
				 ?>
                            <table width="100%" height="100%" border="0" align="center" cellpadding="0" cellspacing="0">
                              <tr>
                                <td align="left">��ǰ�û���<?php echo $_SESSION['username']?></td>
                              </tr>
                              <tr>
                                <td align="left">��ӭ���ĵ���!!!</td>
                              </tr>
                              <tr>
                                <td align="center"><input type="button" name="Submit3" value="�˳�" onclick="javascript:location.href='logout.php';" style=" height:19px; border:solid 1px #000000; color:#666666" />
                                    <input type="button" name="Submit22" value="���˺�̨" onclick="javascript:location.href='main.php';" style=" height:19px; border:solid 1px #000000; color:#666666" /></td>
                              </tr>
                            </table>
                          <?php } ?></td>
                        <td width="10" background="grimages/1_02_01_01_02_03.jpg">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="grimages/1_02_01_01_03.jpg" width="244" height="7" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              <tr>
                <td><table id="__01" width="244" height="215" border="0" cellpadding="0" cellspacing="0">
                  <tr>
                    <td width="244" height="48" background="grimages/1_02_01_03_01.jpg"><table width="97%" border="0" align="center" cellpadding="0" cellspacing="0">
                      <tr>
                        <td width="81%" align="center" class="title">վ������</td>
                        <td width="19%">&nbsp;</td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><table id="__01" width="244" height="154" border="0" cellpadding="0" cellspacing="0">
                      <tr>
                        <td><img src="grimages/1_02_01_03_02_01.jpg" width="7" height="154" alt=""></td>
                        <td width="227" height="154" background="grimages/1_02_01_03_02_02.jpg"><table width="100%" height="100" border="0" cellpadding="0" cellspacing="0">
                          <form action="news.php" method="post" name="formsearch" id="formsearch">
                            <tr>
                              <td width="19%">����</td>
                              <td width="81%"><input name="biaoti" type="text" id="biaoti" size="20" style="width:130px; height:16px; border:solid 1px #000000; color:#666666" /></td>
                            </tr>
                            <tr>
                              <td>���</td>
                              <td><select name="lb" style="width:130px; height:16px; border:solid 1px #000000; color:#666666">
                                  <option value="վ������">վ������</option>
                                </select>                              </td>
                            </tr>
                            <tr>
                              <td>&nbsp;</td>
                              <td><input type="submit" name="Submit4" value="�ύ" style=" height:19px; border:solid 1px #000000; color:#666666" /></td>
                            </tr>
                          </form>
                        </table></td>
                        <td><img src="grimages/1_02_01_03_02_03.jpg" width="10" height="154" alt=""></td>
                      </tr>
                    </table></td>
                  </tr>
                  <tr>
                    <td><img src="grimages/1_02_01_03_03.jpg" width="244" height="13" alt=""></td>
                  </tr>
                </table></td>
              </tr>
              
            </table>
