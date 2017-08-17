
(function () {

    var inputTips = document.getElementsByClassName('tips');
    var inputArr =document.getElementsByClassName('inputBox2');
    var control={
        account:false,
        password:false,
        re_password:false,
        verifyCode:true
    }
    var submitBotton =document.getElementById('signSubmit');

    function inputAddListener() {
        for(var i = 0;i<inputArr.length;i++){
            (function (index) {
                inputArr[index].onblur=function () {   //绑定失去焦点事件
                    verification(index);
                }

            })(i);
        }
    }
    inputAddListener();

    function verification(index) {
        switch (index){
            case 0: (function (index) {     //验证手机长度是否>=11
                var inputValue = inputArr[index].value;
                
                if (inputValue != ''){
                    if(inputValue.length >= 11){
                    	$.post("PHP/phonecheck.php",{phone:inputValue},function(re){   //异步请求
                            console.log(re);
                        	if(re.status){
                                showTips(index,true,re.mess);   //返回re.mess的信息：手机未注册
                                control.account=true;
                        	}else{
                        		showTips(index,false,re.mess);  //返回re.mess的信息：手机号已注册
                                control.account=false;
                        	}
                        },"json");
//                        showTips(index,true,'账号格式正确');
//                        control.account=true;
                    }
                    else {
                        console.log(inputValue);
                        showTips(index,false,'不正确的手机号码');
                        control.account=false;
                    }
                }else {
                    console.log(inputValue);
                    showTips(index,false,'输入不能为空');
                    control.account=false;
                }
            })(index);break;

            case 1: (function (index) {

                var inputValue = inputArr[index].value;

                if (inputValue != ''){
                    if(inputValue.length >= 5){
                        showTips(index,true,'格式正确');
                        control.password=true;

                    }
                    else {
                        showTips(index,false,'密码长度最好大于5位');
                        control.password=false;
                    }
                }else {
                    console.log(inputValue);
                    showTips(index,false,'输入不能为空');
                    control.password=false;

                }
            })(index);break;
            case 2: (function (index) {

                var inputValue = inputArr[index].value;
                var passwordVerify = inputArr[index-1].value;

                if (inputValue != ''){
                	if(inputValue.length >= 5){
                		if(inputValue == passwordVerify){
                            showTips(index,true,'两次密码一致');
                            control.re_password=true;
                        }
                        else {
                            showTips(index,false,'两次密码不一致');
                            control.re_password=false;
                        }

                    }
                    else {
                        showTips(index,false,'密码长度最好大于5位');
                        control.re_password=false;
                    }
                    
                    
                }else {
                    showTips(index,false,'输入不能为空');
                    control.re_password=false;
                }
            })(index);break;
            
            case 3: (function (index) {     
                var inputValue = inputArr[index].value;
                if (inputValue != ''){    //判断输入不能为空
                        	$.post("PHP/verifycodeAsync.php",{verifyCode:inputValue},function(re){   //异步请求
                                console.log(re);
                            	if(re.status){
                                    showTips(index,true,re.mess);   //返回re.mess的信息：验证码正确
                                    control.verifyCode=true;
                            	}else{
                            		showTips(index,false,re.mess);  //返回re.mess的信息：验证码错误
                                    control.verifyCode=false;
                            	}
                            },"json");
                           
                }else {
                    console.log(inputValue);
                    showTips(index,false,'验证码不能为空');
                    control.verifyCode=false;
                }
            })(index);break;

        }
    }

    function showTips(num, status,msg) {
        if(status){  //true
            inputTips[num].style.color='green';
            inputTips[num].innerText=msg;
        }
        else {
            inputTips[num].style.color='red';
            inputTips[num].innerText=msg;
        }
    }

    submitBotton.onclick=function (event){
        var num =0;
        for(var i in control){
            if(control[i]){
                num++;
//                console.log(i+' '+control[i]+num);
            }
        }
        if(num==4){
            window.locaton.href='../login.html';
        }else {
        	inputTips[3].style.color='red';
            inputTips[3].innerText="注册信息填写不完整或不符规范！";
            event.preventDefault();
        }
    };

})();




