<?php
session_start();
include_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/index.css" />
	<link rel="stylesheet" type="text/css" href="css/login.css"/>
	<script src="js/jquery-1.11.3.min.js"></script>
	<script src="js/login.js" type="text/javascript"></script>
</head>
<body>
	<div class="header">
		<div class="title">
			<div class="title_left">
				<span class="logo"></span>
				<ul>
					<li class="titleActive"><a href="index.php">��ҳ</a></li>
					<li><a href="news.php?lb=վ������">����</a></li>
					<li><a href="video.php">��Ƶ</a></li>
					<li><a href="classFileList.php">�μ�</a></li>
					<li><a href="news.php?lb=��ѧ���">���</a></li>
					<li><a href="live.php">ֱ��</a></li>
				</ul>
			</div>
			<div class="title_right">
				<div class="stauts">
					<?php 
                		if ($_SESSION['cx']=="" )
                		{
                	?>
							<div class="reg">ע��</div>
							<div class="login" id="btnLogin">��¼</div>
					<?php 
						}
					  	else
					  	{
				 	?>
				 		<div class="userCon">
				 			<div class="userLogo"></div>
							<div class="userName"><?php echo $_SESSION['username']?></div>
							<ul>
								<li><a href="main.php">���˺�̨</a></li>
								<li><a href="logout.php">�˳�</a></li>
							</ul>
						</div>
					<?php 
						}
					?>
				</div>
				<div class="mes"></div>
				<div class="search" id="searchBtn"></div>
				<input type="search" id="searchBox" class="searchBox" placeholder="��������" />
			</div>
		</div>
		<img class="bnTitle" src="img/bnTitle.png"/>
		<img class="bnBgTitle" src="img/bnBgTitle.png"/>
	</div>
	<div class="section1">
		<?php 
			
			$sql = "select id,biaoti,shouyetupian from xinwentongzhi where shouyetupian<>'' order by id desc limit 4";	
			$query = mysql_query($sql);
            $rowscount = mysql_num_rows($query);
		?>
		<div class="new_title">
			<p class="new_title1">���¶�̬</p>
			<p class="new_title2">У��������Ѷ��վ�����¶�̬</p>
			<div class="new new_04" style="background-image: url(<?php echo mysql_result($query, 3, "shouyetupian"); ?>"><div class="newCon"><?php echo mysql_result($query, 3, "biaoti"); ?></div></div>
			<!--<div class="new_04"></div>-->
		</div>
		<div class="new new_01" style="background-image: url(<?php echo mysql_result($query, 0, "shouyetupian"); ?>);"><div class="newCon"><?php echo mysql_result($query, 0, "biaoti"); ?></div></div>
		<div class="new new_02" style="background-image: url(<?php echo mysql_result($query, 1, "shouyetupian"); ?>"><div class="newCon"><?php echo mysql_result($query, 1, "biaoti"); ?></div></div>
		<div class="new new_03" style="background-image: url(<?php echo mysql_result($query, 2, "shouyetupian"); ?>"><div class="newCon"><?php echo mysql_result($query, 2, "biaoti"); ?></div></div>
		<!--
		<div class="new_01"></div>
		<div class="new_02"></div>
		<div class="new_03"></div>
		-->
		<div class="section1Btn moreBtn">�鿴����&gt;&gt;</div>
	</div>
	<div class="section2">
		<div class="tecTitle">
			<p class="tec_title1">��ʦ���</p>
			<p class="tec_title2">Ҳ������ôһ���˿��Ե�����ҹ�е�·</p>
		</div>
		<div class="tecsPicCon">
			<?php 
    			$sql="select * from jiaoshixinxi where zhaopian<>'' order by id desc limit 4";
				$query=mysql_query($sql);
  				$rowscount=mysql_num_rows($query);
	 			for($i=0;$i<$rowscount;$i++){
					if($i<=4)
					{
  			?>
			<div class="tecPicCon">
				<img src="<?php echo mysql_result($query, $i, "zhaopian"); ?>"/>
				<span class="tecName">��ʦ��</span>
			</div>
			<?php
					}
				}
  			?>
		</div>
		<div class="section2Btn moreBtn">�鿴����&gt;&gt;</div>
	</div>
	<div class="section3">
		<img class="laptop" src="img/section3Bg.png" />
		<div class="section3_detail">
			<p>ϵͳ���</p>
			<span>��������ķ�չ���������Ѿ��������ҹ��󲿷��˵���������ִ�����̫����ʽ�������ѧ��ѧ�����Լ���ѧ�Ķ���������һЩ�˸���û��������õĻ��ᡣ</br>
��վ���Խ���󲿷�ѧ�������⣬һ����Դ��ѶԴ�ҿ������ṩ��ͬ��Ŀ�Ĳ�ͬ���ϣ�ʹ��֪ʶ���˿��԰�֪ʶ�������ˣ���ѧ֪ʶ���˿���������ѧ��֪ʶ����ʦ����һ��������ƽ̨��
����վ����PHP�������ۺ���վ���ý�ѧ��Դ�����ܹ������ѧ�ӣ���ʦ�ṩһ��ѧϰ������ƽ̨��</span>
			<div class="section3Btn moreBtn">�˽����&gt;&gt;</div>
		</div>
	</div>
	<div class="footer">
		<div class="footerCon">
			<div>
				<span>
					��������
				</span>
				<ul>
					<li>����</li>
					<li>QQ</li>
					<li>����</li>
					<li>�ȸ�</li>
					<li>�ٶ�</li>
				</ul>
			</div>
			<div>
				<span>
					��̨����
				</span>
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div>
				<span>
					<a href="login.html">��̨���</a>
				</span>
				<ul>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<p class="copyright">Copyright &copy;2016G-Try</p>
		</div>
	</div>
	<script type="text/javascript">
		$('#searchBtn').click(function(){
			$('#searchBox').toggleClass('searchBtnShow');
			$(this).css({'opacity': 1})
		});
		
		console.log($(window).scrollTop());
		$(window).scroll(function(){
			if($(window).scrollTop() > 70){
				$('.title').css({'backgroundColor': '#262334','height': 70, 'lineHeight': '70px'});
				$('.userLogo').css({'height': 70});
			}else if($(window).scrollTop() < 70){
				$('.title').css({'backgroundColor': '','height': 60,'lineHeight': '60px'});
				$('.userLogo').css({'height': 60});
			}
		});
		
	</script>
</body>
</html>