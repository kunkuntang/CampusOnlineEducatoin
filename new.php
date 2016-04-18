<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
mysql_query("update xinwentongzhi set dianjilv=dianjilv+1 where id=$id");
?>
<!doctype html>
<html lang="en">
	<head>
		<title>
			校内新闻
		</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/nav.css" />
		<link rel="stylesheet" type="text/css" href="css/gonggao.css"/>
		<link rel="stylesheet" type="text/css" href="css/new.css" />
		<link rel="stylesheet" type="text/css" href="css/footer.css" />
		<link rel="stylesheet" type="text/css" href="css/login.css"/>
		<script src="js/jquery-1.11.3.min.js">
		</script>
		<script src="js/login.js" type="text/javascript">
		</script>
	</head>
	<body>
		<?php
		include_once 'header.php';
	?>
		<div class="body">
			<div class="new_Con">
				<div class="new_title_nav">
					<?php 
						$sql="select * from xinwentongzhi where id=".$id;
						$query=mysql_query($sql);
					?>
					<!--新闻文章位置-->
					<a href="news.php">站内新闻</a>  &gt;  <?php echo mysql_result($query,0,"biaoti"); ?>
				</div>
				<?php require_once 'gonggao.php' ?>
				<div class="new">
					<?php 
					 	$rowscount=mysql_num_rows($query);
					  	if($rowscount==0)
					  	{}
					  	else
					  	{
					?>
					<!--新闻文章外框-->
					<div class="new_title">
						<?php echo mysql_result($query,0,"biaoti"); ?>
					</div><!--新闻文章标题-->
					<div class="new_detail">
						<!--新闻文章信息外框-->
						<div class="new_time">
							<?php echo mysql_result($query,$i,"addtime");?>
						</div>
						<div class="new_hot">
							热度(<?php echo mysql_result($query,0,"dianjilv"); ?>)
						</div>
					</div>
					<div class="news_content">
						<!--新闻文章正文-->
						<?php echo mysql_result($query,0,"neirong");?>
					</div>
					<?php
						}
					?>
				</div>
			</div>
		</div>
		<?php require_once 'footer.php' ?>
	</body>
</html>