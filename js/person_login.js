$('document').ready(function() {
	$('input[name="uname"]').focus(function() {
		$('#uname-wrap').addClass('on').removeClass('off');
		$('#remember3').fadeOut();

		if ($(this).val() == '工号') {
			$(this).val('');
		}
	}).blur(function() {
		$('#uname-wrap').addClass('off').removeClass('on');

		if ($(this).val() == '') {
			$(this).val('工号');
		}
	});
	$('input[name="password"]').focus(function() {
		$('#password-wrap').addClass('on').removeClass('off');
		$('#remember3').fadeOut();
	}).blur(function() {
		$('#password-wrap').addClass('off').removeClass('on');
	});
});

var jsperson = jsperson || {};
jsperson.captcha_flag = false;
jsperson.is_common = false;
jsperson.login_show = function(msg) {
	$("#remember3").html(msg);
	$("#remember3").show();
	var timerHide = setTimeout("$('#remember3').hide();;", 20000);
};
jsperson.loginIng = function() {
	$('.bottom').addClass('bottom_hidden');
	$('.loading_image').addClass('display');
	$('.loading_image_bg').addClass('display');
	jsperson.is_common = true;
}
jsperson.loginFail = function() {
	$('.bottom').removeClass('bottom_hidden');
	$('.loading_image').removeClass('display');
	$('.loading_image_bg').removeClass('display');
	jsperson.is_common = false;
}
jsperson.checkJobseekerLogin = function() {
	if (jsperson.is_common == true) {
		jsperson.login_show('正在登录...');
		return false;
	}
	jsperson.is_common = true;
	var username = $('#uname');
	var password = $('#password');
	if (username.val() == '' || $('#uname').val() == '工号') {
		alert(jsperson._MD_NEED_USERNAME);
		username.val();
		username.focus();
		jsperson.is_common = false;
		return false;
	}
	if (password.val() == '') {
		alert(jsperson._MD_NEED_PASSWORD);
		password.focus();
		jsperson.is_common = false;
		return false;
	}
	var param = "uname=" + username.val() + "&password="
			+ encodeURIComponent(password.val());

	jsperson.loginIng();

	$.ajax({
		type : "post",
		url : './common/checklogin.php',
		data : param,
		dataType : "json",
		// timeout: 3000, //超时时间
		success : function(msg) {
			if (msg.success == 1) {
				window.location.href = "home.php";
				jsperson.is_common = false;

			} else {
				jsperson.login_show(msg.msg);
				jsperson.loginFail();
			}
		},
		error : function(XMLHttpRequest, textStatus, errorThrown) {
			jsperson.login_show('登录失败,请重试!!');
			jsperson.loginFail();
		}
	});
	return false;
};