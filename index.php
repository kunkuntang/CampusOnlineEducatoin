<?php
session_start();
include_once 'conn.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title></title>
	<link rel="stylesheet" href="css/reset.css" />
	<link rel="stylesheet" href="css/index.css" />
	<script src="js/jquery-1.11.3.min.js"></script>
</head>
<body>
	<div class="header">
		<div class="title">
			<div class="title_left">
				<span class="logo"></span>
				<ul>
					<li class="titleActive">首页</li>
					<li>新闻</li>
					<li>视频</li>
					<li>课件</li>
					<li>大纲</li>
					<li>直播</li>
				</ul>
			</div>
			<div class="title_right">
				<div class="stauts">
					<div class="reg">注册</div>
					<div class="login">登录</div>
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
		<div class="new_title">
			<p class="new_title1">最新动态</p>
			<p class="new_title2">校内最新资讯，站内最新动态</p>
			<div class="new_04"></div>
		</div>
		<div class="new_01"></div>
		<div class="new_02"></div>
		<div class="new_03"></div>
		<div class="section1Btn moreBtn">查看更多&gt;&gt;</div>
	</div>
	<div class="section2">
		<div class="tecTitle">
			<p class="tec_title1">教师风采</p>
			<p class="tec_title2">也许有那么一个人可以点亮你夜行的路</p>
		</div>
		<div class="tecsPicCon">
			<div class="tecPicCon">
				<img src="img/teacher1.png"/>
				<span class="tecName">教师名</span>
			</div>
			<div class="tecPicCon">
				<img src="img/teacher2.png"/>
				<span class="tecName">教师名</span>
			</div>
			<div class="tecPicCon">
				<img src="img/teacher3.png"/>
				<span class="tecName">教师名</span>
			</div>
			<div class="tecPicCon">
				<img src="img/teacher4.png"/>
				<span class="tecName">教师名</span>
			</div>
		</div>
		<div class="section2Btn moreBtn">查看更多&gt;&gt;</div>
	</div>
	<img src="img/bannerBg.png"/>
	<script type="text/javascript">
		$('#searchBtn').click(function(){
			$('#searchBox').toggleClass('searchBtnShow');
			$(this).css({'opacity': 1})
		});
		
		console.log($(window).scrollTop());
		$(window).scroll(function(){
			if($(window).scrollTop() > 70){
				$('.title').css({'backgroundColor': '#262334','height': 70, 'lineHeight': '70px'});
			}else if($(window).scrollTop() < 70){
				$('.title').css({'backgroundColor': '','height': 60,'lineHeight': '60px'});
			}
		});
		
	</script>
</body>
</html>