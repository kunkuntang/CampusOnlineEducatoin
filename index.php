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
					<li class="titleActive"><a href="index.php">首页</a></li>
					<li><a href="news.php?lb=站内新闻">新闻</a></li>
					<li><a href="video.php">视频</a></li>
					<li><a href="classFileList.php">课件</a></li>
					<li><a href="news.php?lb=教学大纲">大纲</a></li>
					<li><a href="live.php">直播</a></li>
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
			<p class="new_title1">最新动态</p>
			<p class="new_title2">校内最新资讯，站内最新动态</p>
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
		<div class="section1Btn moreBtn">查看更多&gt;&gt;</div>
	</div>
	<div class="section2">
		<div class="tecTitle">
			<p class="tec_title1">教师风采</p>
			<p class="tec_title2">也许有那么一个人可以点亮你夜行的路</p>
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
				<span class="tecName">教师名</span>
			</div>
			<?php
					}
				}
  			?>
		</div>
		<div class="section2Btn moreBtn">查看更多&gt;&gt;</div>
	</div>
	<div class="section3">
		<img class="laptop" src="img/section3Bg.png" />
		<div class="section3_detail">
			<p>系统简介</p>
			<span>随着网络的发展，互联网已经走入了我国大部分人的生活。但是现代教育太过形式化，许多学生学不到自己想学的东西，还有一些人根本没有走入课堂的机会。</br>
本站可以解决大部分学生的问题，一切资源免费对大家开发，提供不同科目的不同资料，使有知识的人可以把知识传给别人，想学知识的人可以在这里学到知识，让师生有一个交流的平台。
本网站基于PHP开发的综合网站，让教学资源共享，能够给广大学子，老师提供一个学习交流的平台。</span>
			<div class="section3Btn moreBtn">了解更多&gt;&gt;</div>
		</div>
	</div>
	<div class="footer">
		<div class="footerCon">
			<div>
				<span>
					友情链接
				</span>
				<ul>
					<li>网易</li>
					<li>QQ</li>
					<li>新浪</li>
					<li>谷歌</li>
					<li>百度</li>
				</ul>
			</div>
			<div>
				<span>
					后台留言
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
					<a href="login.html">后台入口</a>
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