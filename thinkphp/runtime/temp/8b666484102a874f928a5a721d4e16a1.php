<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:70:"C:\thinkphp/application/platform\view\application\applicationshow.html";i:1528638826;s:54:"C:\thinkphp/application/platform\view\public\head.html";i:1529569052;s:54:"C:\thinkphp/application/platform\view\public\foot.html";i:1515723186;}*/ ?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>物联网爱好者</title>
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
	<script type="text/javascript" src="__static__/js/highcharts.js"></script>
</head>


    <body>

<div class="x-body" style="width:70%; margin: 0 auto">
        <button class="layui-btn layui-btn-small " 
        onclick="x_admin_show('添加应用','<?php echo url('platform/application/addapplication'); ?>',500,410)">添加应用</button>
        <button onclick="javascript:location.reload()" class="layui-btn layui-btn-small">刷新</button>
	    <span class="x-right">用户<?php echo \think\Session::get('username'); ?>共有<i class="i_count"><?php echo $applist->total(); ?></i>个应用</span>
        
        
        <table class="layui-table">
        <thead>
          <tr>
            <th>
              <div class="header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
            </th>
            <th>应用名称</th>
            <th>创建时间</th>
            <th>设备数量</th>
            <th>应用秘钥</th>
            <th>连接方式</th>
            <th>行业范围</th>
            <th>是否启用</th>
            <th>操作</th>
        </thead>
        <tbody>

		<?php $n=0;if(is_array($applist) || $applist instanceof \think\Collection || $applist instanceof \think\Paginator): $i = 0; $__LIST__ = $applist;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        	<tr>
	            <td>
	              <div class="layui-form-checkbox" lay-skin="primary" data-id='2'><i class="layui-icon">&#xe605;</i></div>
	            </td>
	            <td><?php echo $vo['appname']; ?></td>
	            <td><?php echo $vo['createtime']; ?></td>
	            <td><?php echo $appdevice[$n]; ?></td>
	            <td><?php echo $vo['key']; ?></td>
	            <td><?php echo $connect[$n]; ?></td>
                <td><?php echo $appindustry[$n]; $n=$n+1; ?></td>
	            <td><?php if($vo['sta']==1): ?>
				     是
					 <?php else: ?>
					 否
					 <?php endif; ?>
				</td>
	            <td>
					<button class="layui-btn layui-btn-mini layui-btn-normal" onclick="x_admin_show('应用设置','<?php echo url('platform/application/applicationedit?id='.$vo['id']); ?>',500,350)">设置</button>
	             	<button onclick="changekey(<?php echo $vo['id']; ?>)" class="layui-btn layui-btn-mini layui-btn-warm">重置秘钥</button>
					<button onclick="delData(this,<?php echo $vo['id']; ?>)" class="layui-btn layui-btn-mini layui-btn-danger">删除</button>
					
	           </td>
	        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
       
          </tbody>
        </table>
	      <div class="page">
	        <div>
	        	<?php echo $applist->render(); ?>
	        </div>
	      </div>
        </div>

	</body>	
	<script>
	
	layui.use(['laydate','form'], function(){
        var laydate = layui.laydate;
        //执行一个laydate实例
        laydate.render({
          elem: '#start' //指定元素
        });
        //执行一个laydate实例
        laydate.render({
          elem: '#end' //指定元素
        });
      });

      function delData1(obj,id){
            //捉到所有被选中的，发异步进行删除
            $.post("<?php echo url('newdata/index/deletedata'); ?>", {id: id}, function() {alert("删除成功");location.reload();});
      }


      function delAll (argument) {
        var data = tableCheck.getData();
        layer.confirm('确认要隐藏吗？',function(index){
            //捉到所有被选中的，发异步进行删除
            layer.msg('删除成功', {icon: 1});
            $(".layui-form-checked").not('.header').parents('tr').remove();
        });
      }
	  
	  function delData(obj,id){
        var count = $(".i_count")[0].innerText;
        layer.confirm('确认要删除吗？',function(index){
            //捉到所有被选中的，发异步进行删除
            $.post("<?php echo url('platform/application/deleteapplication'); ?>", {id: id}, function(data, textStatus, xhr) {
          /*optional stuff to do after success */
              console.log(data);
              if(data.code==1){
                  layer.msg(data.msg,{icon:1,time:1000},function(){
                    $(obj).parents('tr').remove();
                    $(".i_count").html(count-1);
                  });
              }else{
                  layer.msg(data.msg,{icon:2,time:1000});
              }
            
            });
        });
      }
	  
	  function changekey(id){
        var count = $(".i_count")[0].innerText;
        layer.confirm('确认要重置秘钥吗？',function(index){
            //捉到所有被选中的，发异步进行删除
            $.post("<?php echo url('platform/application/changekey'); ?>", {id: id}, function(data, textStatus, xhr) {
          /*optional stuff to do after success */
              console.log(data);
              if(data.code==1){
                  layer.msg(data.msg,{icon:1,time:1000},function(){
                    location.reload();
                  });
              }else{
                  layer.msg(data.msg,{icon:2,time:1000});
              }
            
            });
        });
      }
    </script>
<script src="__module__/layui/layui.all.js" charset="utf-8"></script>
</html>