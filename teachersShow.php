<?php
include_once 'conn.php';
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8" />
	<title>教师展示</title>
	<link rel="stylesheet" type="text/css" href="css/reset.css" />
	<link rel="stylesheet" type="text/css" href="css/nav.css" />
	<link rel="stylesheet" type="text/css" href="css/teachesShow.css"/>
	<link rel="stylesheet" type="text/css" href="css/footer.css" />
	<link rel="stylesheet" type="text/css" href="css/login.css"/>
	<script src="js/jquery-1.11.3.min.js">
	</script>
	<script src="js/login.js" type="text/javascript">
	</script>
</head>
<body>
	<?php require_once 'header.php'?>
	<div class="title1"></div>
	<div class="teachCon">
		<div class="teachRowCon">
			<?php 
    			$sql="select * from jiaoshixinxi where 1=1";
  
				if ($_POST["gonghao"]!=""){$nreqgonghao=$_POST["gonghao"];$sql=$sql." and gonghao like '%$nreqgonghao%'";}
				if ($_POST["xingming"]!=""){$nreqxingming=$_POST["xingming"];$sql=$sql." and xingming like '%$nreqxingming%'";}
				if ($_POST["xingbie"]!=""){$nreqxingbie=$_POST["xingbie"];$sql=$sql." and xingbie like '%$nreqxingbie%'";}
				if ($_POST["dianhua"]!=""){$nreqdianhua=$_POST["dianhua"];$sql=$sql." and dianhua like '%$nreqdianhua%'";}
				if ($_POST["zhujiaokecheng"]!=""){$nreqzhujiaokecheng=$_POST["zhujiaokecheng"];$sql=$sql." and zhujiaokecheng like '%$nreqzhujiaokecheng%'";}
				$sql=$sql." order by id desc";
  
				$query=mysql_query($sql);
			  	$rowscount=mysql_num_rows($query);
			  	if($rowscount==0)
			  	{}
			  	else
			  	{
			  		for($i=0;$i<$rowscount;$i++){
			?>
						<div class="teach">
							<img src="<?php echo mysql_result($query,$i,zhaopian) ?>"/>
							<div class="teachName"><?php echo mysql_result($query,$i,xingming);?></div>
						</div>
			<?php
					}
				}
			?>
			
			</div>
		</div>
	</div>
	<?php require_once 'footer.php' ?>
</body>
</html>