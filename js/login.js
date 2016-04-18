function openNew() {
	//获取页面的高度和宽度
	var sWidth = document.body.scrollWidth;
	var sHeight = document.body.scrollHeight;

	//获取页面的可视区域高度和宽度
	var wHeight = document.documentElement.clientHeight;

	var oMask = document.createElement("div");
	oMask.id = "mask";
	oMask.style.height = sHeight + "px";
	oMask.style.width = sWidth + "px";
	document.body.appendChild(oMask);
	var oLogin = document.createElement("div");
	oLogin.id = "login";
	
	var htmlCon = 	'<div class="loginCon">'+
						'<form class="person" method="post" action="userlog_post.php">'+
							'<input type="text" name="username" id="user" value="" placeholder="账号名" />'+
							'<input type="password" name="pwd1" id="pwd" value="" placeholder="密码"/>'+
							'<div class="checkboxCon"><input type="radio" name="person" id="stu" value="学生" checked="checked" />学生'+
							'<input type="radio" name="person" id="teach" value="teach" />教师</div>'+
							'<input type="submit" id="submit" value="登录"/>'+
							'<span class="reg">没有账号？现在<a href="reg">注册</a></span>'+
						'</form>'+
					'</div>'+
					'<div id="close">点击关闭</div>';
	oLogin.innerHTML = htmlCon;
	document.body.appendChild(oLogin);

	//获取登陆框的宽和高
	var dHeight = oLogin.offsetHeight;
	var dWidth = oLogin.offsetWidth;
	//设置登陆框的left和top
	oLogin.style.left = sWidth / 2 - dWidth / 2 + "px";
	oLogin.style.top = wHeight / 2 - dHeight / 2 + "px";
	//点击关闭按钮
	var oClose = document.getElementById("close");

	//点击登陆框以外的区域也可以关闭登陆框
	oClose.onclick = oMask.onclick = function() {
		document.body.removeChild(oLogin);
		document.body.removeChild(oMask);
	};
};

window.onload = function() {
	var oBtn = document.getElementById("btnLogin");
	//点击登录按钮
	oBtn.onclick = function() {
		openNew();
		return false;
	}
}

/*
 <div id="login" style="left: 0px; top: 298px;">
	<div class="loginCon">
		<div id="close">点击关闭</div>
	</div>
</div>
 
 */