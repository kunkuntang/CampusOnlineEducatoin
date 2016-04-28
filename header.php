		<div class="title">
			<div class="title_left">
				<span class="logo"></span>
				<ul>
					<?php $page=$_GET["page"]; ?>
					<li><a href="index.php">首页</a></li>
					<li><a href="news.php?lb=站内新闻&page=newsSide" <?php if($page == 'newsSide'){echo 'class="titleActive"';}?>>新闻</a></li>
					<li><a href="video.php?page=vedio" <?php if($page == 'vedio'){echo 'class="titleActive"';}?>>视频</a></li>
					<li><a href="classFileList.php?page=cFileList" <?php if($page == 'cFileList'){echo 'class="titleActive"';}?>>课件</a></li>
					<li><a href="news.php?lb=教学大纲&page=teachLine" <?php if($page == 'teachLine'){echo 'class="titleActive"';}?>>大纲</a></li>
					<li><a href="live.php?page=live" <?php if($page == 'live'){echo 'class="titleActive"';}?>>直播</a></li>
				</ul>
			</div>
			<div class="title_right">
				<div class="stauts">
					<?php 
                		if ($_SESSION['cx']=="" )
                		{
                	?>
							<div class="reg">注册</div>
							<div class="login" id="btnLogin">登录</div>
					<?php 
						}
					  	else
					  	{
				 	?>
				 		<div class="userCon">
				 			<div class="userLogo"></div>
							<div class="userName"><?php echo $_SESSION['username']?></div>
							<ul>
								<li><a href="main.php">个人后台</a></li>
								<li><a href="logout.php">退出</a></li>
							</ul>
						</div>
					<?php 
						}
					?>
				</div>
				<div class="mes"></div>
				<div class="search" id="searchBtn"></div>
				<input type="search" id="searchBox" class="searchBox" placeholder="搜索新闻" />
			</div>
		</div>
