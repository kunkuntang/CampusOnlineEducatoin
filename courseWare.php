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
		<link rel="stylesheet" type="text/css" href="css/courseWare.css"/>
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
					<div class="courseCon">
						<div class="fileLogo">
							<img src=""/>
						</div>
						<div class="file">
							<span class="fileName">
							</span>
							<span class="fileTime">
							</span>
						</div>
						<div class="fileDetail">
							<span class="fileNo">
							</span>
							<span class="fileBelong">
							</span>
							<span class="filePerson">
							</span>
							<a href="" class="more">
								查看更多
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>