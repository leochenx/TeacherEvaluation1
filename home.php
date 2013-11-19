<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8"></meta>
<title>个人数据中心</title>
<link rel="stylesheet" type="text/css" media="screen"
	href="./css/home.css"></link>
<link rel="stylesheet" type="text/css" media="screen"
	href="./css/ajaxcss.css"></link>
<link rel="stylesheet" type="text/css" media="screen"
	href="./css/base.css"></link>
<link rel="stylesheet" type="text/css" media="screen"
	href="./css/index.css"></link>

<link rel="stylesheet" type="text/css" href="./css/easyui.css"></link>
<link rel="stylesheet" type="text/css" href="./css/icon.css"></link>
<link rel="stylesheet" type="text/css" href="./css/demo.css"></link>
<script type="text/javascript" src="./js/jquery-1.6.min.js"></script>
<script type="text/javascript" src="./js/jquery.easyui.min.js"></script>
<script type="text/javascript" src="./js/dialog.js"></script>

</head>
<body>
	<div class="top_bg"
		style="background: #08599a; height: 94px; width: 993px; margin: auto;">
		<div class="top" style="width: 985px; margin: 0 auto;">
			<div class="logo">
				<img src="./image/logo.jpg" border="0"> </img>
			</div>
			<div class="clear"></div>
		</div>
	</div>
	<div class="container w1000" style="width: 993px; margin: auto;">
		<div>
			<div class="mRTable02">
				<form id="form1"
					action="http://www.grfw.fudan.edu.cn/sjzx/index.do#" method="post">
					<div class="tableGroup otherInfo">
						<div>
							<table class="jbxx" cellpadding="1">
								<tbody>
									<tr>
										<td>
											<h4 class="mRTableTitle" align="left" title="基本信息">
												<span id="jbxx" class="tableTitle"> 基本信息 </span>
											</h4>
										</td>
										<td colspan="7"></td>
										<td rowspan="5">
											<div id="photoContainer1"
												style="width: 105px; height: 140px; margin-left: 10px;">
												<div align="center">
													<img style="*height: 140px; *width: 105px;"
														id="fileUploadPhoto" src="photo.widgets" width="105px"
														height="140px"></img>
												</div>
											</div>
										</td>
									</tr>
									<tr>
										<td><span>姓名</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx.xm" type="text" readonly="readonly"
													value="万熙琼" class="solided" style="width: 127px;"> </input>
											</div></td>
										<td><span>性别</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx.xb"
													class="{required:true,minlength:2} solided" type="text"
													value="女" readonly="readonly" style="width: 127px;"> </input>
											</div></td>
										<td><span>民族</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx.xmpy"
													class="{required:true,minlength:3} solided" type="text"
													value="苗族" readonly="readonly" style="width: 127px;"> </input>
											</div></td>
										<td><span>政治面貌</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx.xmpy"
													class="{required:true,minlength:3} solided" type="text"
													value="中共党员" readonly="readonly" style="width: 127px;"> </input>
											</div></td>

									</tr>
									<tr>
										<td><span>国家或地区</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx.cym" type="text" value="" class="solided"
													readonly="readonly" style="width: 127px;"> </input>
											</div></td>
										<td><span>籍贯</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx.xbdm" class="{required:true} solided"
													type="text" value="" readonly="readonly"
													style="width: 127px;"> </input>
											</div></td>
										<td><span>学科类别</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input id="jbxx.csrq" name="jbxx.csrq" type="text" value=""
													class="solided" readonly="readonly" style="width: 127px;">
												</input>
											</div></td>
										<td><span>一级学科</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input id="jbxx.csrq" name="jbxx.csrq" type="text" value=""
													class="solided" readonly="readonly" style="width: 127px;">
												</input>
											</div></td>
									</tr>
									<tr>
										<td><span>二级学科</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx.mzdm" type="text" value="" class="solided"
													readonly="readonly" style="width: 127px;"> </input>
											</div></td>
										<td><span>专业</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx.zzmmm" type="text" value=""
													class="solided" readonly="readonly" style="width: 127px;">
												</input>
											</div></td>
										<td><span>校区</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx.zjlx" type="text" value="邯郸"
													class="solided" readonly="readonly" style="width: 127px;">
												</input>
											</div></td>
										<td><span>专技职务</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx.zjlx" type="text" value="工程师"
													class="solided" readonly="readonly" style="width: 127px;">
												</input>
											</div></td>
									</tr>
									<tr>
										<td><span>办公电话</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx_lxfs.BGDH" type="text" value=""
													class="solided" readonly="readonly" style="width: 127px;">
												</input>
											</div></td>
										<td><span>手机号码</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx_lxfs.SJHM" type="text" value=""
													class="solided" readonly="readonly" style="width: 127px;">
												</input>
											</div></td>
										<td><span>电子邮件</span></td>
										<td><div class="comboContainer"
												style="width: 130px; display: block; border: none;">
												<input name="jbxx_lxfs.DZYJ" type="text"
													value="xqwan@fudan.edu.cn" class="solided"
													readonly="readonly" style="width: 127px;"> </input>
											</div></td>
										<td><a
											href="http://www.grfw.fudan.edu.cn/sjzx/module/index.do"
											style="color: blue;">详细</a></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>
				</form>
			</div>
		</div>


		<div class="tableGroup otherInfo">
			<div class="mRTable03">
				<h4 class="mRTableTitle" title="科研创新"
					style="height: 30px; position: relative; top: 5px">
					<span id="kycx" class="tableTitle"> <i class="arrow"
						style="position: relative; top: -5px; background-image: url(http://www.grfw.fudan.edu.cn/sjzx/resources/image/AllImages_1.png); background-position: -20px -148px; background-repeat: no-repeat no-repeat;"></i>科研创新
					</span>
				</h4>
			</div>
		</div>
		<div class="easyui-tabs">
			<div title="科研项目" style="padding: 10px">
				<table id="dg_kyxm" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_kyxm" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="25">项目名称</th>
							<th field="lastname" width="5">项目标号</th>
							<th field="phone" width="5">项目级别</th>
							<th field="email" width="5">项目成员（按次序）</th>
							<th field="email" width="5">人数</th>
							<th field="email" width="5">本人排序</th>
							<th field="email" width="5">个人经费</th>
							<th field="email" width="5">总经费</th>
							<th field="email" width="5">开始时间</th>
							<th field="email" width="5">结束时间</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar_kyxm">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-add" plain="true" onclick="newItem('kyxm')">新增</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-edit" plain="true" onclick="editItem('kyxm')">修改</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-remove" plain="true" onclick="destroyItem('kyxm')">删除</a>
				</div>
				<div id="dlg_kyxm" class="easyui-dialog"
					style="width: 400px; height: 280px; padding: 10px 20px"
					closed="true" buttons="#dlg-buttons_kyxm">
					<div class="ftitle">User Information</div>
					<form id="fm_kyxm" method="post" novalidate>
						<div class="fitem">
							<label>First Name:</label> <input name="firstname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Last Name:</label> <input name="lastname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Phone:</label> <input name="phone">
						
						</div>
						<div class="fitem">
							<label>Email:</label> <input name="email"
								class="easyui-validatebox" validType="email">
						
						</div>
					</form>
				</div>
				<div id="dlg-buttons_kyxm">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-ok" onclick="saveItem('kyxm')">保存</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-cancel"
						onclick="cancelItem('kyxm')">取消</a>
				</div>
			</div>
			<div title="教学项目" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_jxxm" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="50">First Name</th>
							<th field="lastname" width="50">Last Name</th>
							<th field="phone" width="50">Phone</th>
							<th field="email" width="50">Email</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar_jxxm">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-add" plain="true" onclick="newUser()">New User</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove
						User</a>
				</div>
				<div id="dlg" class="easyui-dialog"
					style="width: 400px; height: 280px; padding: 10px 20px"
					closed="true" buttons="#dlg-buttons_jxxm">
					<div class="ftitle">User Information</div>
					<form id="fm" method="post" novalidate>
						<div class="fitem">
							<label>First Name:</label> <input name="firstname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Last Name:</label> <input name="lastname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Phone:</label> <input name="phone">
						
						</div>
						<div class="fitem">
							<label>Email:</label> <input name="email"
								class="easyui-validatebox" validType="email">
						
						</div>
					</form>
				</div>
				<div id="dlg-buttons_jxxm">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-ok" onclick="saveUser()">Save</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-cancel"
						onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
				</div>
			</div>
			<div title="科研论文" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_kylw" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="50">First Name</th>
							<th field="lastname" width="50">Last Name</th>
							<th field="phone" width="50">Phone</th>
							<th field="email" width="50">Email</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar_kylw">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-add" plain="true" onclick="newUser()">New User</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove
						User</a>
				</div>
				<div id="dlg" class="easyui-dialog"
					style="width: 400px; height: 280px; padding: 10px 20px"
					closed="true" buttons="#dlg-buttons_kylw">
					<div class="ftitle">User Information</div>
					<form id="fm" method="post" novalidate>
						<div class="fitem">
							<label>First Name:</label> <input name="firstname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Last Name:</label> <input name="lastname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Phone:</label> <input name="phone">
						
						</div>
						<div class="fitem">
							<label>Email:</label> <input name="email"
								class="easyui-validatebox" validType="email">
						
						</div>
					</form>
				</div>
				<div id="dlg-buttons_kylw">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-ok" onclick="saveUser()">Save</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-cancel"
						onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
				</div>
			</div>
			<div title="教学论文" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_jxlw" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="50">First Name</th>
							<th field="lastname" width="50">Last Name</th>
							<th field="phone" width="50">Phone</th>
							<th field="email" width="50">Email</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar_jxlw">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-add" plain="true" onclick="newUser()">New User</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove
						User</a>
				</div>
				<div id="dlg" class="easyui-dialog"
					style="width: 400px; height: 280px; padding: 10px 20px"
					closed="true" buttons="#dlg-buttons_jxlw">
					<div class="ftitle">User Information</div>
					<form id="fm" method="post" novalidate>
						<div class="fitem">
							<label>First Name:</label> <input name="firstname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Last Name:</label> <input name="lastname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Phone:</label> <input name="phone">
						
						</div>
						<div class="fitem">
							<label>Email:</label> <input name="email"
								class="easyui-validatebox" validType="email">
						
						</div>
					</form>
				</div>
				<div id="dlg-buttons_jxlw">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-ok" onclick="saveUser()">Save</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-cancel"
						onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
				</div>
			</div>
			<div title="学术专著" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_xszz" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="50">First Name</th>
							<th field="lastname" width="50">Last Name</th>
							<th field="phone" width="50">Phone</th>
							<th field="email" width="50">Email</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar_xszz">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-add" plain="true" onclick="newUser()">New User</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove
						User</a>
				</div>
				<div id="dlg" class="easyui-dialog"
					style="width: 400px; height: 280px; padding: 10px 20px"
					closed="true" buttons="#dlg-buttons_xszz">
					<div class="ftitle">User Information</div>
					<form id="fm" method="post" novalidate>
						<div class="fitem">
							<label>First Name:</label> <input name="firstname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Last Name:</label> <input name="lastname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Phone:</label> <input name="phone">
						
						</div>
						<div class="fitem">
							<label>Email:</label> <input name="email"
								class="easyui-validatebox" validType="email">
						
						</div>
					</form>
				</div>
				<div id="dlg-buttons_xszz">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-ok" onclick="saveUser()">Save</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-cancel"
						onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
				</div>
			</div>
			<div title="教学专著" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_jxzz" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="50">First Name</th>
							<th field="lastname" width="50">Last Name</th>
							<th field="phone" width="50">Phone</th>
							<th field="email" width="50">Email</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar_jxzz">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-add" plain="true" onclick="newUser()">New User</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove
						User</a>
				</div>
				<div id="dlg" class="easyui-dialog"
					style="width: 400px; height: 280px; padding: 10px 20px"
					closed="true" buttons="#dlg-buttons_jxzz">
					<div class="ftitle">User Information</div>
					<form id="fm" method="post" novalidate>
						<div class="fitem">
							<label>First Name:</label> <input name="firstname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Last Name:</label> <input name="lastname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Phone:</label> <input name="phone">
						
						</div>
						<div class="fitem">
							<label>Email:</label> <input name="email"
								class="easyui-validatebox" validType="email">
						
						</div>
					</form>
				</div>
				<div id="dlg-buttons_jxzz">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-ok" onclick="saveUser()">Save</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-cancel"
						onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
				</div>
			</div>
		</div>


		<div class="tableGroup otherInfo">
			<div class="mRTable03">
				<h4 class="mRTableTitle" title="教务教学"
					style="height: 30px; position: relative; top: 5px">
					<span id="jwjs" class="tableTitle"> <i class="arrow"
						style="position: relative; top: -5px; background-image: url(http://www.grfw.fudan.edu.cn/sjzx/resources/image/AllImages_1.png); background-position: -20px -148px; background-repeat: no-repeat no-repeat;"></i>教务教学
					</span>
				</h4>
			</div>
		</div>
		<div class="easyui-tabs">
			<div title="本科生课程信息" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_bkskc" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="email">课程类别</th>
							<th field="firstname">选课序号</th>
							<th field="lastname">课程名称</th>
							<th field="phone">学分</th>
							<th field="email">人数</th>
							<th field="email">教室</th>
							<th field="email">上课时间</th>
							<th field="email">学期</th>
						</tr>
					</thead>
				</table>
			</div>
			<div title="研究生课程信息" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_yjskc" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="50">First Name</th>
							<th field="lastname" width="50">Last Name</th>
							<th field="phone" width="50">Phone</th>
							<th field="email" width="50">Email</th>
						</tr>
					</thead>
				</table>
			</div>
			<div title="研究生指导" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_yjszd" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="50">First Name</th>
							<th field="lastname" width="50">Last Name</th>
							<th field="phone" width="50">Phone</th>
							<th field="email" width="50">Email</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar_yjszd">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-add" plain="true" onclick="newUser()">New User</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove
						User</a>
				</div>
				<div id="dlg" class="easyui-dialog"
					style="width: 400px; height: 280px; padding: 10px 20px"
					closed="true" buttons="#dlg-buttons_yjszd">
					<div class="ftitle">User Information</div>
					<form id="fm" method="post" novalidate>
						<div class="fitem">
							<label>First Name:</label> <input name="firstname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Last Name:</label> <input name="lastname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Phone:</label> <input name="phone">
						
						</div>
						<div class="fitem">
							<label>Email:</label> <input name="email"
								class="easyui-validatebox" validType="email">
						
						</div>
					</form>
				</div>
				<div id="dlg-buttons_yjszd">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-ok" onclick="saveUser()">Save</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-cancel"
						onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
				</div>
			</div>
		</div>
		<div class="tableGroup otherInfo">
			<div class="mRTable03">
				<h4 class="mRTableTitle" title="个人情况"
					style="height: 30px; position: relative; top: 5px">
					<span id="jwjs" class="tableTitle"> <i class="arrow"
						style="position: relative; top: -5px; background-image: url(http://www.grfw.fudan.edu.cn/sjzx/resources/image/AllImages_1.png); background-position: -20px -148px; background-repeat: no-repeat no-repeat;"></i>个人情况
					</span>
				</h4>
			</div>
		</div>
		<div class="easyui-tabs">
			<div title="工作经历" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_bkskc" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="50">开始年月</th>
							<th field="lastname" width="50">结束年月</th>
							<th field="phone" width="50">工作单位</th>
							<th field="email" width="50">工作岗位</th>
							<th field="email" width="150">职称</th>
						</tr>
					</thead>
				</table>
			</div>
			<div title="学习经历" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_yjskc" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="50">First Name</th>
							<th field="lastname" width="50">Last Name</th>
							<th field="phone" width="50">Phone</th>
							<th field="email" width="50">Email</th>
						</tr>
					</thead>
				</table>
			</div>
			<div title="个人荣誉" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_yjszd" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="50">First Name</th>
							<th field="lastname" width="50">Last Name</th>
							<th field="phone" width="50">Phone</th>
							<th field="email" width="50">Email</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar_yjszd">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-add" plain="true" onclick="newUser()">New User</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-edit" plain="true" onclick="editUser()">Edit User</a>
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-remove" plain="true" onclick="destroyUser()">Remove
						User</a>
				</div>
				<div id="dlg" class="easyui-dialog"
					style="width: 400px; height: 280px; padding: 10px 20px"
					closed="true" buttons="#dlg-buttons_yjszd">
					<div class="ftitle">User Information</div>
					<form id="fm" method="post" novalidate>
						<div class="fitem">
							<label>First Name:</label> <input name="firstname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Last Name:</label> <input name="lastname"
								class="easyui-validatebox" required="true">
						
						</div>
						<div class="fitem">
							<label>Phone:</label> <input name="phone">
						
						</div>
						<div class="fitem">
							<label>Email:</label> <input name="email"
								class="easyui-validatebox" validType="email">
						
						</div>
					</form>
				</div>
				<div id="dlg-buttons_yjszd">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-ok" onclick="saveUser()">Save</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-cancel"
						onclick="javascript:$('#dlg').dialog('close')">Cancel</a>
				</div>
			</div>
			<div title="人才计划" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_yjskc" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname" width="50">First Name</th>
							<th field="lastname" width="50">Last Name</th>
							<th field="phone" width="50">Phone</th>
							<th field="email" width="50">Email</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</body>
</html>