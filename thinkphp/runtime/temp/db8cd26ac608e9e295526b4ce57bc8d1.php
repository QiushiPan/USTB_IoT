<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:51:"C:\thinkphp/application/admin\view\api\add_app.html";i:1515723186;s:51:"C:\thinkphp/application/admin\view\public\head.html";i:1515723186;s:51:"C:\thinkphp/application/admin\view\public\foot.html";i:1515723186;}*/ ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>闻海南-ADMIN</title>
  <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,user-scalable=yes, minimum-scale=0.4, initial-scale=0.8" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <link rel="shortcut icon" href="__static__/favicon.ico" type="image/x-icon" />
    <link rel="stylesheet" href="__static__/css/font.css">
    <link rel="stylesheet" href="__module__/layui/css/layui.css">
    <link rel="stylesheet" href="__static__/css/xadmin.css">
    <script type="text/javascript" src="__js__/jquery.min.js"></script>
    <script src="__module__/layui/layui.all.js" charset="utf-8"></script>
    <script type="text/javascript" src="__static__/js/xadmin.js"></script>
    <script type="text/javascript" src="__static__/js/jquery.form.js"></script>
    <script type="text/javascript" src="__static__/js/jquery.form.js"></script>
</head>


<body>
    <div class="x-body">
        <form action="add_app" class="layui-form" id="mainForm" method="post" style="margin-right: 20px;">

            <div class="layui-form-item">
                <label class="layui-form-label">
                    接口名称
                </label>
                <div class="layui-input-block">
                    <input autocomplete="off" class="layui-input" id="name" lay-verify="required" name="name" placeholder="请输入应用名称" type="text">
                    </input>
                </div>
            </div>


            <div class="layui-form-item">
                <label class="layui-form-label">
                    appid(系统)
                </label>
                <div class="layui-input-block">
                    <input style="color:blue" id="app_id" readonly value="" autocomplete="off" class="layui-input"  lay-verify="required" name="app_id" placeholder="请输入hash" type="text">
                    </input>
                </div>
            </div>

              <div class="layui-form-item">
                <label class="layui-form-label">
                    secret(系统)
                </label>
                <div class="layui-input-block">
                    <input style="color:blue" id="secret" readonly value="" autocomplete="off" class="layui-input"  lay-verify="required" name="secret" type="text">
                    </input>
                </div>
            </div>
            
            <div class="layui-form-item">
                <div class="layui-input-block">
                    <button class="layui-btn"  lay-filter="toSubmit" lay-submit=""  style="margin-left: 33%">
                        提交
                    </button>
                    <button style="display: none;" class="layui-btn layui-btn-primary" id="reset" type="reset">
                        reset
                    </button>
                </div>
            </div>

        </form>
        
    </div>
</body>

<script type="text/javascript">
	var form = layui.form;
	var layer = layui.layer;
    //自定义验证规则
    form.verify({
        url:function(value){
           console.log(value);
           if(!checkURL(value)){
                return '不符合url规则';
           }
        }
    });
	//监听提交，学习参考用
	// form.on('submit(demo1)', function(data){
	//       layer.alert(JSON.stringify(data.field), {
	//       title: '最终的提交信息'
	//     })
	//     return false;
	//   });
	$(document).ready(function(){
        $("#app_id").val(GetRandomNum(10000,100000000));
        $("#secret").val(generateMixed(25));  
	     var options = {
		      type:'post',           //post提交
		      //url:'http://ask.tongzhuo100.com/server/****.php?='+Math.random(),   //url
		      dataType:"json",        //json格式
		      data:{},    //如果需要提交附加参数，视情况添加
		      clearForm: false,        //成功提交后，清除所有表单元素的值
		      resetForm: false,        //成功提交后，重置所有表单元素的值
		      cache:false,          
		      async:false,          //同步返回
		      success:function(data){
		      	    console.log(data);
    		      	if(data.code==0){
    		      		layer.msg(data.msg);
    		      	}else{
    		      		layer.msg(data.msg,{icon:1,time:500},function(){
    		      			$("#reset").click();
    		      			x_admin_close();
    		      			parent.location.reload();
    		      		});
    		      	}
    		      //服务器端返回处理逻辑
		      	},
		      	error:function(XmlHttpRequest,textStatus,errorThrown){
		        	layer.msg('操作失败:服务器处理失败');
		      }
		    }; 
	    // bind form using 'ajaxForm' 
	    $('#mainForm').ajaxForm(options).submit(function(data){
	    	//无逻辑
	    }); 
	});
    function GetRandomNum(Min,Max)
    {   
        var Range = Max - Min;   
        var Rand = Math.random();   
        return(Min + Math.round(Rand * Range));   
    }   
    var chars = ['0','1','2','3','4','5','6','7','8','9','A','B','C','D','E','F','G','H','I','J','K','L','M','N','O','P','Q','R','S','T','U','V','W','X','Y','Z'];
    function generateMixed(n){
         var res = "";
         for(var i = 0; i < n ; i ++) {
             var id = Math.ceil(Math.random()*35);
             res += chars[id];
         }
         return res;
    }
    function checkURL(str){
        if (str.match("/(http[s]?|ftp)://[^/.]+?..+\w$/i") == null) {
            return false;
        }
        else {
            return true;
        }
    }
</script>
<script src="__module__/layui/layui.all.js" charset="utf-8"></script>
</html>
