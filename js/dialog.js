var url;
function newItem(tabName) {
	var dlgName='#dlg_'+tabName;
	var fmName="#fm_"+tabName;
	$(dlgName).dialog('open').dialog('setTitle', '新增科研项目');
	$(fmName).form('clear');
	url = 'save_user.php?tab='+tab;
}
function editItem(tabName) {
	var dlgName='#dlg_'+tabName;
	var fmName="#fm_"+tabName;
	var dgName="#dg_"+tabName;
	var row = $(dgName).datagrid('getSelected');
	if (row) {
		$(dlgName).dialog('open').dialog('setTitle', '修改科研项目');
		$(fmName).form('load', row);
		url = 'update_user.php?id=' + row.id;
	}
}
function saveItem(tabName) {
	var dlgName='#dlg_'+tabName;
	var fmName="#fm_"+tabName;
	var dgName="#dg_"+tabName;
	$(fmName).form('submit', {
		url : url,
		onSubmit : function() {
			return $(this).form('validate');
		},
		success : function(result) {
			var result = eval('(' + result + ')');
			if (result.errorMsg) {
				$.messager.show({
					title : 'Error',
					msg : result.errorMsg
				});
			} else {
				$(dlgName).dialog('close'); // close the dialog
				$(dgName).datagrid('reload'); // reload the user data
			}
		}
	});
}
function destroyUser(tabName) {
	var dlgName='#dlg_'+tabName;
	var fmName="#fm_"+tabName;
	var dgName="#dg_"+tabName;
	var row = $(dgName).datagrid('getSelected');
	if (row) {
		$.messager.confirm('Confirm',
				'Are you sure you want to destroy this user?', function(r) {
					if (r) {
						$.post('destroy_user.php', {
							id : row.id
						}, function(result) {
							if (result.success) {
								$(dgName).datagrid('reload'); // reload the
																// user data
							} else {
								$.messager.show({ // show error message
									title : 'Error',
									msg : result.errorMsg
								});
							}
						}, 'json');
					}
				});
	}
}

function cancelItem(tabName){
	var dlgName='#dlg_'+tabName;
	$(dlgName).dialog('close');
	
}