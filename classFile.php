<?php
session_start();
include_once 'conn.php';
$id=$_GET["id"];
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('对不起，请您先登陆！');location.href='classFileList.php';</script>";
	exit;
}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>
			课件
		</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/nav.css" />
		<link rel="stylesheet" type="text/css" href="css/gonggao.css"/>
		<link rel="stylesheet" type="text/css" href="css/classFile.css"/>
		<link rel="stylesheet" type="text/css" href="css/footer.css" />
		<link rel="stylesheet" type="text/css" href="css/login.css"/>
		<script src="js/jquery-1.11.3.min.js">
		</script>
		<script src="js/login.js" type="text/javascript">
		</script>
	</head>
	<body>
		<?php require_once 'header.php'
		?>
		<div class="body">
			<div class="file_Con">
				<div class="file_title_nav">
					<?php
					$sql = "select * from jiaoxuekejian where id=" . $id;
					$query = mysql_query($sql);
					?>
					<!--新闻文章位置-->
					<a href="classFileList.php">
						教学课件
					</a>  &gt;  <?php echo mysql_result($query,0,mingcheng);?>
				</div>
				<?php require_once 'gonggao.php'
				?>
				<?php 
					$rowscount=mysql_num_rows($query);
					if($rowscount>0)
					{
				?>
						<div class="file">
							<!--新闻文章标题-->
							<div class="file_title">
								<?php echo mysql_result($query,0,mingcheng);?>
							</div>
							<!--新闻文章外框-->
							<div class="file_detail">
								<!--课件编号-->
								<div class="file_No">
									<?php echo mysql_result($query,0,bianhao);?>
								</div>
								<div class="file_time">
									<?php echo mysql_result($query,$i,"addtime");?>
								</div>
								<div class="file_belong">
									<?php echo mysql_result($query,0,kecheng);?>
								</div>
								<!--发布人-->
								<div class="file_person">
									<?php echo mysql_result($query,0,faburen);?>
								</div>
							</div>
							<!--新闻文章信息外框-->
							<!--新闻文章正文-->
							<div class="files_content">
								<?php echo mysql_result($query,0,jianjie);?>
							</div>
							<a class="download" href="<?php echo mysql_result($query,0,kejian);?>">立即下载</a>
						</div>
				<?php
					}
				?>
			</div>
		</div>
		<?php require_once 'footer.php'
		?>
	</body>
</html>