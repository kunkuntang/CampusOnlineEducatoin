function openNew() {
	//��ȡҳ��ĸ߶ȺͿ��
	var sWidth = document.body.scrollWidth;
	var sHeight = document.body.scrollHeight;

	//��ȡҳ��Ŀ�������߶ȺͿ��
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
							'<input type="text" name="username" id="user" value="" placeholder="�˺���" />'+
							'<input type="password" name="pwd1" id="pwd" value="" placeholder="����"/>'+
							'<div class="checkboxCon"><input type="radio" name="person" id="stu" value="ѧ��" checked="checked" />ѧ��'+
							'<input type="radio" name="person" id="teach" value="teach" />��ʦ</div>'+
							'<input type="submit" id="submit" value="��¼"/>'+
							'<span class="reg">û���˺ţ�����<a href="reg">ע��</a></span>'+
						'</form>'+
					'</div>'+
					'<div id="close">����ر�</div>';
	oLogin.innerHTML = htmlCon;
	document.body.appendChild(oLogin);

	//��ȡ��½��Ŀ�͸�
	var dHeight = oLogin.offsetHeight;
	var dWidth = oLogin.offsetWidth;
	//���õ�½���left��top
	oLogin.style.left = sWidth / 2 - dWidth / 2 + "px";
	oLogin.style.top = wHeight / 2 - dHeight / 2 + "px";
	//����رհ�ť
	var oClose = document.getElementById("close");

	//�����½�����������Ҳ���Թرյ�½��
	oClose.onclick = oMask.onclick = function() {
		document.body.removeChild(oLogin);
		document.body.removeChild(oMask);
	};
};

window.onload = function() {
	var oBtn = document.getElementById("btnLogin");
	//�����¼��ť
	oBtn.onclick = function() {
		openNew();
		return false;
	}
}

/*
 <div id="login" style="left: 0px; top: 298px;">
	<div class="loginCon">
		<div id="close">����ر�</div>
	</div>
</div>
 
 */