		<div class="title">
			<div class="title_left">
				<span class="logo"></span>
				<ul>
					<li class="titleActive"><a href="index.php">��ҳ</a></li>
					<li><a href="news.php?lb=վ������">����</a></li>
					<li><a href="video.php">��Ƶ</a></li>
					<li><a href="classFile.php">�μ�</a></li>
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
