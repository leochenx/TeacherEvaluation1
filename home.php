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
<script type="text/javascript" src="./common/dialog.js"></script>
<script type="text/javascript" src="./common/teacher_info.js"></script>
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
		<div class="mRTable02">
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
										<input id="jbxx_xm" name="jbxx.xm" type="text"
											readonly="readonly" class="solided" style="width: 127px;"> </input>
									</div></td>
								<td><span>性别</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_xb" name="jbxx.xb" type="text" value="女"
											readonly="readonly" class="solided" style="width: 127px;"> </input>
									</div></td>
								<td><span>民族</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_mz" name="jbxx.mz" type="text" value="苗族"
											readonly="readonly" class="solided" style="width: 127px;"> </input>
									</div></td>
								<td><span>政治面貌</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_zzmm" name="jbxx.zzmm" type="text"
											value="中共党员" readonly="readonly" class="solided"
											style="width: 127px;"> </input>
									</div></td>

							</tr>
							<tr>
								<td><span>国家或地区</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_gjdq" name="jbxx.gjdq" type="text" value=""
											readonly="readonly" class="solided" style="width: 127px;"> </input>
									</div></td>
								<td><span>籍贯</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_jg" name="jbxx.jg" type="text" value=""
											readonly="readonly" class="solided" style="width: 127px;"> </input>
									</div></td>
								<td><span>出生日期</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_csrq" name="jbxx.csrq" type="text" value=""
											readonly="readonly" class="solided" style="width: 127px;"> </input>
									</div></td>
								<td><span>办公室地址</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_bgdz" name="jbxx.bgdz" type="text" value=""
											class="solided" readonly="readonly" class="solided"
											style="width: 127px;"> </input>
									</div></td>
							</tr>
							<tr>
								<td><span>证件类型</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_zjlx" name="jbxx.zjlx" type="text" value=""
											readonly="readonly" class="solided" style="width: 127px;"> </input>
									</div></td>
								<td><span>证件号码</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_zjhm" name="jbxx.zjhm" type="text" value=""
											readonly="readonly" class="solided" style="width: 127px;"> </input>
									</div></td>
								<td><span>进校年月</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_jxny" name="jbxx.jxny" type="text" value=""
											readonly="readonly" class="solided" style="width: 127px;"> </input>
									</div></td>
								<td><span>所在部门</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_szbm" name="jbxx.szbm" type="text" value=""
											class="solided" readonly="readonly" class="solided"
											style="width: 127px;"> </input>
									</div></td>
							</tr>
							<tr>
								<td><span>办公电话</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_bgdh" name="jbxx.bgdh" type="text" value=""
											class="solided" readonly="readonly" class="solided"
											style="width: 127px;"> </input>
									</div></td>
								<td><span>手机号码</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_sjhm" name="jbxx.sjhm" type="text" value=""
											readonly="readonly" class="solided" style="width: 127px;"> </input>
									</div></td>
								<td><span>电子邮件</span></td>
								<td><div class="comboContainer"
										style="width: 130px; display: block; border: none;">
										<input id="jbxx_email" name="jbxx.email" type="text"
											value="xqwan@fudan.edu.cn" class="solided"
											readonly="readonly" class="solided" style="width: 127px;"> </input>
									</div></td>
								<td><a href="./detail.php" style="color: blue;">详细</a></td>
							</tr>
						</tbody>
					</table>
				</div>
			</div>
		</div>


		<div class="tableGroup otherInfo">
			<div class="mRTable03">
				<h4 class="mRTableTitle" title="科研创新"
					style="height: 30px; position: relative; top: 5px">
					<span id="kycx" class="tableTitle"> <i class="arrow"
						style="position: relative; top: -5px; background-image: url(./image/AllImages_1.png); background-position: -20px -148px; background-repeat: no-repeat no-repeat;"></i>科研创新
					</span>
				</h4>
			</div>
		</div>

		<div class="easyui-tabs">
			<div title="科研论文" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_kylw" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th>论文标题</th>
							<th>期刊名称</th>
							<th>发表时间</th>
							<th>论文编号</th>
							<th>论文类别</th>
							<th>论文作者（按次序）</th>
							<th>总人数</th>
							<th>本人排名</th>
							<th>论文首页</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar_kylw">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-add" plain="true" onclick="newItem('kylw')">新增</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-edit" plain="true" onclick="editItem('kylw')">修改</a>
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-remove" plain="true" onclick="destroyItem('kylw')">删除</a>
				</div>
				<div id="dlg_kylw" class="easyui-dialog"
					style="width: 500px; height: 480px; padding: 10px 20px"
					closed="true" buttons="#dlg-buttons_kylw">
					<div class="ftitle">科研论文信息</div>
					<form id="fm" method="post" novalidate>
						<div class="fitem">
							<label>论文标题:</label> <input name="paper_title"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>期刊名称:</label> <input name="magzine_name"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>发表时间:</label> <input name="publish_date"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>期刊号:</label> <input name="magzine_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>论文编号:</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>论文类别:</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>论文作者（按次序）:</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>总人数:</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>排名</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>上传论文首页:</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
					</form>
				</div>
				<div id="dlg-buttons_kylw">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-ok" onclick="saveItem('kylw')">Save</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-cancel" onclick="cancelItem('kylw')">Cancel</a>
				</div>
			</div>
			<div title="教学论文" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_jxlw" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th>论文标题</th>
							<th>期刊名称</th>
							<th>发表时间</th>
							<th>论文编号</th>
							<th>论文类别</th>
							<th>论文作者（按次序）</th>
							<th>总人数</th>
							<th>本人排名</th>
							<th>论文首页</th>
						</tr>
					</thead>
				</table>
				<div id="toolbar_jxlw">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-add" plain="true" onclick="newItem('jxlw')">新增</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-edit" plain="true" onclick="editItem('jxlw')">修改</a>
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-remove" plain="true" onclick="destroyItem('jxlw')">删除</a>
				</div>
				<div id="dlg_jxlw" class="easyui-dialog"
					style="width: 400px; height: 280px; padding: 10px 20px"
					closed="true" buttons="#dlg-buttons_jxlw">
					<div class="ftitle">教学论文信息</div>
					<form id="fm" method="post" novalidate>
						<div class="fitem">
							<label>论文标题:</label> <input name="paper_title"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>期刊名称:</label> <input name="magzine_name"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>发表时间:</label> <input name="publish_date"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>期刊号:</label> <input name="magzine_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>论文编号:</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>论文类别:</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>论文作者（按次序）:</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>总人数:</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>排名</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
						<div class="fitem">
							<label>上传论文首页:</label> <input name="paper_no"
								class="easyui-validatebox" required="true"> </input>
						</div>
					</form>
				</div>
				<div id="dlg-buttons_jxlw">
					<a href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-ok" onclick="saveItem('jxlw')">Save</a> <a
						href="javascript:void(0)" class="easyui-linkbutton"
						iconCls="icon-cancel"
						onclick="cancelItem('jxlw')">Cancel</a>
				</div>
			</div>
			<div title="科研项目" style="padding: 10px">
				<table id="dg_kyxm" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_kyxm" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname">项目名称</th>
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
			</div>
			<div title="教学项目" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_jxxm" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname">项目名称</th>
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
			</div>

			<div title="学术专著" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_xszz" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname">著作名称</th>
							<th field="lastname">出版社</th>
							<th field="phone">出版年月</th>
							<th field="email">出版地</th>
							<th field="email">作者（按次序）</th>
							<th field="email">作者人数</th>
							<th field="email">本人排名</th>
							<th field="email">ISBN</th>
							<th field="email">总字数</th>
							<th field="email">本人承担字数</th>
							<th field="email">备注（是否入选重点教材系</th>
						</tr>
					</thead>
				</table>
			</div>
			<div title="教学专著" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_jxzz" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="firstname">著作名称</th>
							<th field="lastname">出版社</th>
							<th field="phone">出版年月</th>
							<th field="email">出版地</th>
							<th field="email">作者（按次序）</th>
							<th field="email">作者人数</th>
							<th field="email">本人排名</th>
							<th field="email">ISBN</th>
							<th field="email">总字数</th>
							<th field="email">本人承担字数</th>
							<th field="email">备注（是否入选重点教材系</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>



		<div class="tableGroup otherInfo">
			<div class="mRTable03">
				<h4 class="mRTableTitle" title="教务教学"
					style="height: 30px; position: relative; top: 5px">
					<span id="jwjs" class="tableTitle"> <i class="arrow"
						style="position: relative; top: -5px; background-image: url(./image/AllImages_1.png); background-position: -20px -148px; background-repeat: no-repeat no-repeat;"></i>教务教学
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
			<div title="研究生指导" style="padding: 10px">
				<table id="dg" class="easyui-datagrid" url="get_users.php"
					toolbar="#toolbar_yjszd" pagination="true" rownumbers="true"
					fitColumns="true" singleSelect="true">
					<thead>
						<tr>
							<th field="email">年份</th>
							<th field="firstname">春季硕士名单</th>
							<th field="phone">秋季硕士名单</th>
							<th field="email">硕士人数</th>
							<th field="lastname">春季博士名单</th>
							<th field="email">秋季博士名单</th>
							<th field="email">博士人数</th>
						</tr>
					</thead>
				</table>
			</div>
		</div>
		<div class="tableGroup otherInfo">
			<div class="mRTable03">
				<h4 class="mRTableTitle" title="个人情况"
					style="height: 30px; position: relative; top: 5px">
					<span id="jwjs" class="tableTitle"> <i class="arrow"
						style="position: relative; top: -5px; background-image: url(./image/AllImages_1.png); background-position: -20px -148px; background-repeat: no-repeat no-repeat;"></i>个人情况
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
							<th>开始年月</th>
							<th>结束年月</th>
							<th>学校名称</th>
							<th>所学专业</th>
							<th>所获学历</th>
							<th>所获学位</th>
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
							<th>类别</th>
							<th>获奖名称</th>
							<th>所有获奖人（按次序）</th>
							<th>人数</th>
							<th>本人排名</th>
							<th>获奖年份</th>
							<th>获奖级别</th>
							<th>获奖等第</th>
							<th>附件</th>
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
								<th>类别</th>
								<th>名称</th>
								<th>年份</th>
								<th>级别</th>
								<th>入选编号</th>

							</tr>
						</tr>
					</thead>
				</table>
			</div>
		</div>
	</div>
</body>
</html>