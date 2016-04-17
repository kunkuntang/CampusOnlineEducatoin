<?php
session_start();

	//echo $_SESSION['cx'];
	if($_SESSION['cx']=="教师")
	{
		echo "<script>javascript:location.href='left2.html';</script>";
	}
	if($_SESSION['cx']=="学生")
	{
		echo "<script>javascript:location.href='left3.html';</script>";
	}
	if($_SESSION['cx']=="超级管理员" || $_SESSION['cx']=="普通管理员")
	{
		echo "<script>javascript:location.href='left.html';</script>";
	}

?>