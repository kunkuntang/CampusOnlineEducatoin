		<div class="title">
			<div class="title_left">
				<span class="logo"></span>
				<ul>
					<?php $page=$_GET["page"]; ?>
					<li><a href="index.php">��ҳ</a></li>
					<li><a href="news.php?lb=վ������&page=newsSide" <?php if($page == 'newsSide'){echo 'class="titleActive"';}?>>����</a></li>
					<li><a href="video.php?page=vedio" <?php if($page == 'vedio'){echo 'class="titleActive"';}?>>��Ƶ</a></li>
					<li><a href="classFileList.php?page=cFileList" <?php if($page == 'cFileList'){echo 'class="titleActive"';}?>>�μ�</a></li>
					<li><a href="news.php?lb=��ѧ���&page=teachLine" <?php if($page == 'teachLine'){echo 'class="titleActive"';}?>>���</a></li>
					<li><a href="live.php?page=live" <?php if($page == 'live'){echo 'class="titleActive"';}?>>ֱ��</a></li>
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
