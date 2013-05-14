function check_plan(){
	if (form1.fromq.value == ""){
		alert("出发地不能为空！");
		form1.fromq.focus();
		return (false);	 
	}
	if (form1.toq.value == ""){
		alert("目的地不能为空！");
		form1.toq.focus();
		return (false);	 
	}
	if (form1.wayq.value == ""){
		alert("运输方式不能为空！");
		form1.wayq.focus();
		return (false);	 
	}
	if (form1.bilei_s.value == ""){
		alert("水路比例不能为空！");
		form1.bilei_s.focus();
		return (false);	 
	}
	if (form1.bilei_g.value == ""){
		alert("公路比例不能为空！");
		form1.bilei_g.focus();
		return (false);	 
	}
	if (form1.bilei_t.value == ""){
		alert("铁路比例不能为空！");
		form1.bilei_t.focus();
		return (false);	 
	}
	if (form1.chenyusan.value == ""){
		alert("承运商不能为空！");
		form1.chenyusan.focus();
		return (false);	 
	}
	if (form1.changzi_s.value == ""){
		alert("水路产值不能为空！");
		form1.changzi_s.focus();
		return (false);	 
	}
	if (form1.changzi_g.value == ""){
		alert("公路产值不能为空！");
		form1.changzi_g.focus();
		return (false);	 
	}
	if (form1.changzi_t.value == ""){
		alert("铁路产值不能为空！");
		form1.changzi_t.focus();
		return (false);	 
	}
	if (form1.yhway.value == ""){
		alert("优化方式不能为空！");
		form1.yhway.focus();
		return (false);	 
	}
	if (form1.ysnumber.value == ""){
		alert("运输数量不能为空！");
		form1.ysnumber.focus();
		return (false);	 
	}
	if (form1.ystime_1.value == ""){
		alert("运输时间不能为空！");
		form1.ystime_1.focus();
		return (false);	 
	}
	if (form1.ystime_2.value == ""){
		alert("运输时间不能为空！");
		form1.ystime_2.focus();
		return (false);	 
	}
	if (form1.yscb_s.value == ""){
		alert("水路运输成本不能为空！");
		form1.yscb_s.focus();
		return (false);	 
	}
	if (form1.yscb_g.value == ""){
		alert("公路运输成本不能为空！");
		form1.yscb_g.focus();
		return (false);	 
	}
	if (form1.yscb_t.value == ""){
		alert("铁路运输成本不能为空！");
		form1.yscb_t.focus();
		return (false);	 
	}
	if (form1.pinpai.value == ""){
		alert("商品品牌号不能为空！");
		form1.pinpai.focus();
		return (false);	 
	}
	if (form1.username.value == ""){
		alert("用户名不能为空！");
		form1.username.focus();
		return (false);	 
	}
	//验证车牌号码
	if (form1.car_number.value==""){
		alert("车牌号码不能为空！");
		form1.car_number.focus();
		return (false);	 
	}

    //验证身份证号码
	if(form1.user_number.value==""){
		alert("请输入身份证号码!");
		form1.user_number.focus();
		return (false);
	}
	
	//验证电话号码
		if(form1.user_tel.value==""){
		alert("请输入电话号码!");
		form1.user_tel.focus();
		return (false);
	}
	
	//验证地址
		if(form1.address.value==""){
		alert("请输入家庭地址!");
		form1.address.focus();
		return (false);
	}	
	    if(form1.car_content.value==""){
		alert("请输入车辆信息!");
		form1.car_content.focus();
		return (false);
	}	
	    if(form1.car_road.value==""){
		alert("请输入车辆行驶路线!");
		form1.car_road.focus();
		return (false);
	}
}

function check_admin(){
	if(form1.admin_user.value==""){
		alert("请输入用户名!");
		form1.admin_user.focus();
		return (false);
		}
    if(form1.admin_pass.value==""){
		alert("请输入旧密码!");
		form1.admin_pass.focus();
		return (false);
		}
		 if(form1.admin_new_pass.value==""){
		alert("请输入新密码!");
		form1.admin_new_pass.focus();
		return (false);
		}
 if(form1.admin_new_pass2.value==""){
		alert("请输入新密码!");
		form1.admin_new_pass2.focus();
		return (false);
		}
	 if(form1.admin_new_pass.value!=forms1.admin_new_pass2.value){
		alert("您输入的新密码与确认密码不符!");
		form1.admin_new_pass2.focus();
		return (false);
		}	
	}
function check_select_car(){
	if(form1.select1.value==""){
		alert("请输入车辆路线!");
		form1.select1.focus();
		return (false);
		}
    if(form1.select2.value==""){
		alert("请输入车辆路线!");
		form1.select2.focus();
		return (false);
		}

	}