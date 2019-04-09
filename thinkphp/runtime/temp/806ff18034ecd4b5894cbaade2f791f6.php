<?php if (!defined('THINK_PATH')) exit(); /*a:3:{s:54:"C:\thinkphp/application/platform\view\show\show36.html";i:1528604416;s:54:"C:\thinkphp/application/platform\view\public\head.html";i:1529569052;s:54:"C:\thinkphp/application/platform\view\public\foot.html";i:1515723186;}*/ ?>
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

      function delAll () {
        var datas = tableCheck.getData();
		var len = datas.length;
		var i;
		<!--alert(datas instanceof Array);-->
        layer.confirm('确认删除这'+len.toString()+'条数据吗？',function(index){
            //捉到所有被选中的，发异步进行删除
			for(i=0;i<len;i++)
			{
            $.post("<?php echo url('platform/deletedatas/deleteservers'); ?>", {id: datas[i], serial: '<?php echo $serial; ?>'}, function(data, textStatus, xhr) {
          /*optional stuff to do after success */
            
              console.log(data);
              if(data.code==1){
                  layer.msg(data.msg,{icon:1,time:1000},function(){
                  });
              }else{
                  layer.msg(data.msg,{icon:2,time:1000});
              } 
            });
			}
		 $(".layui-form-checked").not('.header').parents('tr').remove();
        });
      }
	  
	  function delData(obj,id){
        var count = $(".i_count")[0].innerText;
        layer.confirm('确认要删除吗？',function(index){
            //捉到所有被选中的，发异步进行删除
            $.post("<?php echo url('platform/deletedatas/deleteserver'); ?>", {id: id , serial: '<?php echo $serial; ?>'}, function(data, textStatus, xhr) {
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
	  function manage(m){
		
        layer.confirm('确认发送设置吗？',function(index){
            //捉到所有被选中的，发异步进行删除
            $.post("<?php echo url('platform/control/relay'); ?>", {id: '<?php echo $serial; ?>',m: m}, function(data, textStatus, xhr) {
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
 <body>

<div class="x-body" style="width:70%; margin: 0 auto">
        <button class="layui-btn  layui-btn-small layui-btn-danger" onclick="delAll()">批量删除</button>
        <button onclick="javascript:location.reload()" class="layui-btn layui-btn-small">刷新</button>
		<button onclick="manage(0)" class="layui-btn">开</button>
		<button onclick="manage(1)" class="layui-btn">关</button>
		<table class="x-right" style = "width:400px">
		<tr>
	            <td style = "width:150px">
	              <span class="x-right">共有数据:
				</td>
	              <td style = "width:100px"><i class="i_count"><?php echo $datas->total(); ?></i>条</span>
	            </td>
	            <td style = "width:100px">
				  <span class="x-right">序列号:
				</td>
	            <td style = "width:200px">
				  <i class="i_count"><?php echo $serial; ?></i></span>
				</td>
	            <td style = "width:150px">
				  <span class="x-right">设备类型:
				</td>
	            <td style = "width:200px">
				  <i class="i_count"><?php echo $type; ?></i></span>
				</td>
	        </tr>
		</table>
        
        
        <table class="layui-table">
        <thead>
          <tr>
            <th>
              <div class="header layui-form-checkbox" lay-skin="primary"><i class="layui-icon">&#xe605;</i></div>
            </th>
            <th>时间</th>
            <th>节点号</th>
            <th>开关状态</th>
            <th>传输协议</th>
            <th>操作</th>
        </thead>
        <tbody>

        <?php if(is_array($datas) || $datas instanceof \think\Collection || $datas instanceof \think\Paginator): $i = 0; $__LIST__ = $datas;if( count($__LIST__)==0 ) : echo "" ;else: foreach($__LIST__ as $key=>$vo): $mod = ($i % 2 );++$i;?>
        	<tr>
	            <td>
	              <div class="layui-form-checkbox" lay-skin="primary" data-id='<?php echo $vo['id']; ?>'><i class="layui-icon">&#xe605;</i></div>
	            </td>
	            <td><?php echo $vo['time']; ?></td>
	            <td><?php echo $vo['serial']; ?></td>
	            <td><?php if($vo['data'] == 0) echo "开"; else echo "关"; ?></td>
                <td><?php echo $vo['msgtype']; ?></td>
	            <td>
	             	<button onclick="delData(this,<?php echo $vo['id']; ?>)" class="layui-btn layui-btn-mini layui-btn-danger">删除</button>
	           </td>
	        </tr>
        <?php endforeach; endif; else: echo "" ;endif; ?>
       
          </tbody>
        </table>
	      <div class="page">
	        <div>
	        	<?php echo $datas->render(); ?>
	        </div>
	      </div>
        </div>

	</body>	

<script src="__module__/layui/layui.all.js" charset="utf-8"></script>
</html>