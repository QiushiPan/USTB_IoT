<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:52:"C:\thinkphp/application/admin\view\api\edit_api.html";i:1515723186;s:51:"C:\thinkphp/application/admin\view\public\head.html";i:1515723186;s:51:"C:\thinkphp/application/admin\view\public\foot.html";i:1515723186;}*/ ?>
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
        <form action="edit_api" class="layui-form" id="mainForm" method="post" style="margin-right: 20px;">
            <input type="hidden" name='id' value="<?php echo $data['id']; ?>">
            <div class="layui-form-item">
                <label class="layui-form-label">
                    接口名称
                </label>
                <div class="layui-input-block">
                    <input autocomplete="off" class="layui-input" id="name" lay-verify="required" name="name" value="<?php echo $data['name']; ?>" placeholder="请输入接口名称" type="text">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">
                    BASE_URL
                </label>
                <div class="layui-input-block">
                    <input autocomplete="off" value="<?php echo $data['base_url']; ?>" class="layui-input" id="base_url" lay-verify="required" name="base_url" placeholder="请输入BASE_URL" type="text">
                    </input>
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">
                    接口映射(系统)
                </label>
                <div class="layui-input-block">
                    <input id="hash" readonly autocomplete="off" class="layui-input"  lay-verify="required" name="hash" value="<?php echo $data['hash']; ?>" placeholder="请输入hash" type="text">
                </div>
            </div>

            <div class="layui-form-item">
                <label class="layui-form-label">
                    传输方式
                </label>
                <div class="layui-input-block">
                     <select  name="method" id='method' lay-filter="method" >
                        <option value="post">POST
                        </option>
                        <option value="get">GET
                        </option>
                        <option value="no_limit">不限
                        </option>
                    </select>
                </div>
            </div>

            <div class="layui-form-item">
                        <label class="layui-form-label">
                            <a  href="javascript:layer.alert('测试环境推荐不开启Token验证')">AccessToken(点)</a>
                        </label>
                <div class="layui-input-block">
                       <input type="checkbox" id="is_token" name="is_token" lay-skin="switch" lay-text="开启|关闭"  value='1'>
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
    $("#method").val("<?php echo $data['method']; ?>");
    if("<?php echo $data['is_token']; ?>"==1){
         $("#is_token").attr({'checked':true});
    }
	//监听提交，学习参考用
	// form.on('submit(demo1)', function(data){
	//       layer.alert(JSON.stringify(data.field), {
	//       title: '最终的提交信息'
	//     })
	//     return false;
	//   });
	$(document).ready(function(){
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

</script>
<script src="__module__/layui/layui.all.js" charset="utf-8"></script>
</html>
