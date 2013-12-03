$(document).ready(function() {
	$.post("./common/get_teacher_info.php", {
		teacher_id : 1
	}, function(result) {
		var data=eval("("+result+")");//转换为json对象 
		$("#jbxx_xm").val(data.TEACHER_NAME);
		$("#jbxx_xb").val(data.GENDER);
		$("#jbxx_mz").val(data.ETHNIC);
		$("#jbxx_zzmm").val(data.POLITICAL);
		$("#jbxx_gjdq").val(data.DISTRICT);
		$("#jbxx_jg").val(data.NATIVE_PLACE);
		$("#jbxx_csrq").val(data.BIRTHDAY);
		$("#jbxx_bgdz").val(data.OFFICE);
		$("#jbxx_zjlx").val(data.CREDENTIAL_TYPE);
		$("#jbxx_zjhm").val(data.CREDENTIAL_NO);
		$("#jbxx_jxny").val(data.CAMPUS_DAY);
		$("#jbxx_szbm").val(data.DEPARTMENT);
		$("#jbxx_bgdh").val(data.OFFICE_PHONE);
		$("#jbxx_sjhm").val(data.CELLPHONE);
		$("#jbxx_email").val(data.EMAIL);
	});
});
