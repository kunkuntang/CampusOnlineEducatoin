<?php
session_start();
include_once 'conn.php';
$lb = $_GET["lb"];
$biaoti = $_POST["biaoti"];
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>
			校内新闻
		</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/nav.css"/>
		<link rel="stylesheet" type="text/css" href="css/gonggao.css"/>
		<link rel="stylesheet" type="text/css" href="css/news.css"/>
		<link rel="stylesheet" type="text/css" href="css/footer.css"/>
		<link rel="stylesheet" type="text/css" href="css/login.css"/>
		<script src="js/jquery-1.11.3.min.js">
		</script>
		<script src="js/login.js" type="text/javascript">
		</script>
	</head>
	<body>
		<?php require_once 'header.php'
		?>
		<div class="title1">
		</div>
		<div class="body">
			<div class="new_content">
				<?php require_once 'gonggao.php'
				?>
				<div class="new_list">
					<?php 
    					$sql="select * from xinwentongzhi where 1=1";
  
						if ($biaoti!=""){
							$sql=$sql." and biaoti like '%$biaoti%'";
						}
						if($lb!=""){
							$sql=$sql." and leibie='$lb'";
						}
  						$sql=$sql." order by id desc";
						$query=mysql_query($sql);
					  	$rowscount=mysql_num_rows($query);
					  	if($rowscount==0)
					  	{}
					  	else{
					  		$pagelarge=10;//每页行数；
					  		$pagecurrent=$_GET["pagecurrent"];
					  		if($rowscount%$pagelarge==0){
								$pagecount=$rowscount/$pagelarge;
					  		}
					  		else{
					   			$pagecount=intval($rowscount/$pagelarge)+1;
					  		}
					  		if($pagecurrent=="" || $pagecurrent<=0){
								$pagecurrent=1;
							}
							if($pagecurrent>$pagecount){
								$pagecurrent=$pagecount;	
							}
							$ddddd=$pagecurrent*$pagelarge;
							if($pagecurrent==$pagecount){
								if($rowscount%$pagelarge==0){
									$ddddd=$pagecurrent*$pagelarge;
								}
								else{
									$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
								}
							}
							for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++){
					?>
								<ul>
									<li class="new_caption"><a href="new.php?id=<?php echo mysql_result($query,$i,"id");?>"><?php echo mysql_result($query,$i,"biaoti");?></a></li>
									<li><?php echo mysql_result($query,$i,"addtime");?></li>
								</ul>
					<?php
						}
					}
					?>
				<div class="page">
					<a href="news.php?pagecurrent=<?php echo $pagecount;?>&lb=<?php echo $lb;?>" class="last">&gt;&gt;</a>
					<a href="news.php?pagecurrent=<?php echo $pagecurrent+1;?>&lb=<?php echo $lb;?>" class="next">&gt;</a>
					<span class="curpage"><?php echo $pagecurrent;?>/<?php echo $pagecount;?></span>
					<a href="news.php?pagecurrent=<?php echo $pagecurrent-1;?>&lb=<?php echo $lb;?>" class="pre">&lt;</a>
					<a href="news.php?pagecurrent=1	&lb=<?php echo $lb;?>" class="first">&lt;&lt;</a>
				</div>
			</div>
		</div>
	</div>
	<?php require_once 'footer.php'


					?>
	</body>
</html>