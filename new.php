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
			У������
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
					<!--��������λ��-->
					<a href="news.php">վ������</a>  &gt;  <?php echo mysql_result($query,0,"biaoti"); ?>
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
					<!--�����������-->
					<div class="new_title">
						<?php echo mysql_result($query,0,"biaoti"); ?>
					</div><!--�������±���-->
					<div class="new_detail">
						<!--����������Ϣ���-->
						<div class="new_time">
							<?php echo mysql_result($query,$i,"addtime");?>
						</div>
						<div class="new_hot">
							�ȶ�(<?php echo mysql_result($query,0,"dianjilv"); ?>)
						</div>
					</div>
					<div class="news_content">
						<!--������������-->
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