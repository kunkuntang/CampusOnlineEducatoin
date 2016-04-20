<?php
include_once 'conn.php';
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
		<link rel="stylesheet" type="text/css" href="css/classFileList.css"/>
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
		<div class="title1">
		</div>
		<div class="body">
			<div class="courseWare">
				<div class="courseSea">
					<form id="form1" name="form1" method="post" action="">
						<input name="bianhao" type="text" id="bianhao" placeholder="编号："/>
						<input name="mingcheng" type="text" id="mingcheng" placeholder="名称：" />
						<input name="kecheng" type="text" id="kecheng" placeholder="课程：" />
						<select name='leixing' id='leixing'>
							<option value="">
								类型：
							</option>
							<option value="rar">
								rar
							</option>
							<option value="zip">
								zip
							</option>
							<option value="doc">
								doc
							</option>
							<option value="pdf">
								pdf
							</option>
							<option value="xls">
								xls
							</option>
							<option value="ppt">
								ppt
							</option>
						</select>
						<input name="faburen" type="text" id="faburen" placeholder="发布人：" />
						<!--<button type="submit" id="submit">查找</button>-->
						<input type="submit" name="Submit" id="submit" value="查找" />
					</form>
				</div>
				<div class="courseWareList">
					<?php 
    					$sql="select * from jiaoxuekejian where 1=1";
  
						if ($_POST["bianhao"]!=""){$nreqbianhao=$_POST["bianhao"];$sql=$sql." and bianhao like '%$nreqbianhao%'";}
						if ($_POST["mingcheng"]!=""){$nreqmingcheng=$_POST["mingcheng"];$sql=$sql." and mingcheng like '%$nreqmingcheng%'";}
						if ($_POST["kecheng"]!=""){$nreqkecheng=$_POST["kecheng"];$sql=$sql." and kecheng like '%$nreqkecheng%'";}
						if ($_POST["leixing"]!=""){$nreqleixing=$_POST["leixing"];$sql=$sql." and leixing like '%$nreqleixing%'";}
						if ($_POST["faburen"]!=""){$nreqfaburen=$_POST["faburen"];$sql=$sql." and faburen like '%$nreqfaburen%'";}
					  	$sql=$sql." order by id desc";
					  
						$query=mysql_query($sql);
						$rowscount=mysql_num_rows($query);
						if($rowscount==0)
						{}
					  	else
					  	{
						  	$pagelarge=10;//每页行数；
						  	$pagecurrent=$_GET["pagecurrent"];
						  	if($rowscount%$pagelarge==0)
						  	{
								$pagecount=$rowscount/$pagelarge;
							}
						  	else
						  	{
						   		$pagecount=intval($rowscount/$pagelarge)+1;
						  	}
						  	if($pagecurrent=="" || $pagecurrent<=0)
							{
								$pagecurrent=1;
							}
						 
							if($pagecurrent>$pagecount)
							{
								$pagecurrent=$pagecount;
							}
								$ddddd=$pagecurrent*$pagelarge;
							if($pagecurrent==$pagecount)
							{
								if($rowscount%$pagelarge==0)
								{
									$ddddd=$pagecurrent*$pagelarge;
								}
								else
								{
									$ddddd=$pagecurrent*$pagelarge-$pagelarge+$rowscount%$pagelarge;
								}
							}
						
							for($i=$pagecurrent*$pagelarge-$pagelarge;$i<$ddddd;$i++)
							{
				  	?>
								<div class="courseCon">
									<a href="classFile.php?id=<?php echo mysql_result($query,$i,"id");?>"><div class="fileLogo">
										<img src="img/<?php echo mysql_result($query,$i,leixing);?>.png"/>
									</a>
									</div>
									<div class="file">
										<a href="classFile.php?id=<?php echo mysql_result($query,$i,"id");?>">
											<span class="fileName"><?php echo mysql_result($query,$i,mingcheng);?>
											</span>
										</a>
										<span class="fileTime"><?php echo mysql_result($query,$i,"addtime");?>
										</span>
									</div>
									<div class="fileDetail">
										<span class="fileNo"><?php echo mysql_result($query,$i,bianhao);?>
										</span>
										<span class="fileBelong"><?php echo mysql_result($query,$i,kecheng);?>
										</span>
										<span class="filePerson"><?php echo mysql_result($query,$i,faburen);?>
										</span>
										<a href="classFile.php?id=<?php echo mysql_result($query,$i,"id");?>" class="more">
											查看更多
										</a>
									</div>
								</div>
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
		<?php require_once 'footer.php' ?>
			<script type="text/javascript">
			window.onload = function(){
				document.getElementById("leixing").value = "<?php echo $_POST["leixing"];?>";
			}
		</script>
	</body>
</html>