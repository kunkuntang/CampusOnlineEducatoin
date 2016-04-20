<?php
session_start();
if($_SESSION["username"]=="")
{
	echo "<script>javascript:alert('对不起，请您先登陆！');location.href='index.php';</script>";
	exit;
}
include_once 'conn.php';
$id=$_GET["id"];
$addnew=$_POST["addnew"];
if ($addnew=="1" )
{
	$zhanghao=$_SESSION["username"];$zhaopian=$_SESSION["zp"];$xingming=$_SESSION["xm"];$liuyan=$_POST["liuyan"];
	$sql="insert into liuyanban(zhanghao,zhaopian,xingming,liuyan) values('$zhanghao','$zhaopian','$xingming','$liuyan') ";
	mysql_query($sql);
	echo "<script>javascript:alert('留言成功!');location.href='message.php';</script>";
}
?>
<!doctype html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<title>
			后台留言
		</title>
		<link rel="stylesheet" type="text/css" href="css/reset.css" />
		<link rel="stylesheet" type="text/css" href="css/nav.css" />
		<link rel="stylesheet" type="text/css" href="css/gonggao.css"/>
		<link rel="stylesheet" type="text/css" href="css/message.css"/>
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
			<div class="mes_Con">
				<?php require_once 'gonggao.php'
				?>
				
				<div class="mes">
					<div class="textEdit">
						<form action="" method="post" name="form1">
							<textarea type="text" name="liuyan" id="liuyan" value="" placeholder="留言（限50字）"></textarea>
							<input type="email" name="email" id="email" value="" placeholder="邮箱" />
							<input type="submit" name="submit" id="submit" value="提交" />
							<input type="hidden" name="addnew" value="1" />
						</form>
					</div>
					<?php
						$sql="select * from liuyanban where 1=1";
						$sql=$sql." order by id desc";
	  					$query=mysql_query($sql);
		 				$rowscount=mysql_num_rows($query);
						if($rowscount==0)
	  					{}
					  	else
					  	{
						  	$pagelarge=5;//每页行数；
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
					<div class="liuyan_Con">
						<div class="liyan_userCon">
							<img src="<?php echo mysql_result($query,$i,"zhaopian");?>"/>
							<div class="liuyan_user">
								<span class="user">
									<?php echo mysql_result($query,$i,"xingming");?>
								</span>
								<span class="time">
									<?php echo mysql_result($query,$i,"addtime");?>
								</span>
							</div>
							<div class="liuyan_reply">
								<?php echo mysql_result($query,$i,"liuyan");?>
							</div>
						</div>
						<div class="liuyanAdmin">
							管理员回复：<?php echo mysql_result($query,$i,"huifu");?>
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
		<?php require_once 'footer.php'
		?>
		<script language="javascript">
			window.onload = function(){
				function check()
				{
					if(document.form1.zhanghao.value==""){alert("请输入账号");document.form1.zhanghao.focus();return false;}if(document.form1.xingming.value==""){alert("请输入姓名");document.form1.xingming.focus();return false;}if(document.form1.liuyan.value==""){alert("请输入留言");document.form1.liuyan.focus();return false;}
				}
			</script>
	</body>
</html>