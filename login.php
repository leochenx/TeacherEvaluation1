<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<!-- saved from url=(0063)http://www.chinahr.com/modules/jsperson/login.php?http_referer= -->
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<title>教师评定系统</title>

</head>
<body style="background: #f1f0f0">

	<link rel="stylesheet" type="text/css" media="screen"
		href="./css/login_person.css">
		<div class="top_bg"
			style="background: #08599a; height: 94px; width: 993px; margin: auto;">
			<div class="top" style="width: 985px; margin: 0 auto;">
				<div class="logo">
					<img src="./image/logo.jpg" border="0">
				
				</div>
				<div class="clear"></div>
			</div>
			<!--top -->
		</div>
		<script src="./js/jquery.js" type="text/javascript"></script>
		<script src="./js/person_login.js" type="text/javascript"></script>
		<script language="javascript">
		//new
		jsperson._MD_NEED_USERNAME = '请输入账号';
		jsperson._MD_NEED_PASSWORD = '请输入密码';
		jsperson._MD_NEED_CAPTCHA = '请输入验证码';
		//new end
	</script>
		<div class="content width">
			<div class="content_left">

				<div class="xo-blockszone">
					<div class="login_banner">
						<ul>
							<li><img class="lazy" src="./image/guangxuelou.jpg" width="692"
								height="310" alt="" title="" border="0" rel="0"
								style="display: inline;"></a></li>
							<div class="clear"></div>
						</ul>
					</div>


				</div>

			</div>
			<form name="form1"
				action="./login.php"
				method="post" onsubmit="return jsperson.checkJobseekerLogin();">
				<div class="content_right">
					<div id="uname-wrap" class="account off">
						<span>用户名</span> <input name="uname" tabindex="1" id="uname"
							class="ps" type="text" value="">
					
					</div>
					<div id="password-wrap" class="account off">
						<span>密 码</span><input name="password" tabindex="2" id="password"
							class="ps" type="password" value="">
					
					</div>

					<div style="display: none;" class="remember3" id="remember3"></div>
					<!-- new end//-->
					<input type="hidden" name="http_referer" id="http_referer" value="">
						<input type="hidden" name="typeid" id="typeid" value=""> <input
							type="hidden" name="action" id="action" value="login">

								<div class="loading_image_bg">
									<div class="loading_image">
										<img src="./image/login_loading.gif">
									
									</div>
								</div> <input onclick="" type="submit" value="" class="bottom">
				
				</div>

			</form>
			<div class="clear"></div>
		</div>

		<div class="clear"></div>
		<div class="footer width">
			<div class="left">
				<p>Copyright © |2013&nbsp;复旦大学数学科学学院版权所有 沪ICP备042465 &nbsp;</p>
				<p>电话：+86(21)65642341 传真：+86(21)65646073&nbsp;&nbsp;</p>
			</div>
			<div class="clear"></div>

		</div>

</body>
</html>