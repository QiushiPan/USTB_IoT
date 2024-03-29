<?php if (!defined('THINK_PATH')) exit(); /*a:1:{s:50:"C:\thinkphp/application/data\view\index\index.html";i:1525247954;}*/ ?>
﻿<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!-->
<html lang="en">
<!--<![endif]-->

<head>

<!-- Basic Page Needs
  ================================================== -->
<meta charset="utf-8">
<title>NattierSea物联实验数据</title>
<meta name="description" content="">
<meta name="author" content="">
<!--[if lt IE 9]>
		<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

<!-- Mobile Specific Metas
  ================================================== -->
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">

<!-- CSS
  ================================================== -->
<link rel="stylesheet" href="__css__/base.css">
<link rel="stylesheet" href="__css__/skeleton.css">
<link rel="stylesheet" href="__css__/screen.css">
<link rel="stylesheet" href="__css__/mediaelementplayer.css" />
<!--[if IE 7]>
        <link rel="stylesheet" href="stylesheets/ie7.css">
    <![endif]-->

<!-- Favicons
	================================================== -->
<link rel="shortcut icon" href="__images__/favicon.ico">
<link rel="apple-touch-icon" href="__images__/apple-touch-icon.png">
<link rel="apple-touch-icon" sizes="72x72" href="__images__/apple-touch-icon-72x72.png">
<link rel="apple-touch-icon" sizes="114x114" href="__images__/apple-touch-icon-114x114.png">

<!-- Fonts
	================================================== -->
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,400italic,700,700italic,300,300italic' rel='stylesheet' type='text/css'>

<!-- Scripts
	================================================== -->
<script src="__js__/jquery-1.7.min.js" type="text/javascript"></script>
<script src="__js__/jquery-3.2.1.js" type="text/javascript"></script>
<script src="__js__/jquery.easing.1.3.js" type="text/javascript"></script>
<script src="__js__/jquery.animate-colors-min.js" type="text/javascript"></script>
<script src="__js__/ddsmoothmenu.js" type="text/javascript"></script>
<script src="__js__/jquery.cssAnimate.mini.js" type="text/javascript"></script>
<script src="__js__/jquery.fitvids.js" type="text/javascript"></script>
<script src="__js__/jquery.flexslider-min.js" type="text/javascript"></script>
<script src="__js__/jquery.prettyPhoto.js" type="text/javascript"></script>
<script src="__js__/mediaelement-and-player.min.js" type="text/javascript"></script>
<script src="__js__/highcharts.js" type="text/javascript"></script>
<script src="__module__/layui/layui.js" charset="utf-8"></script>
<script type="text/javascript">
$(function(){
	$("#showall").click(function(){
		$("#ajaxContent").load("__js__/html/all.html",{limit: 25},function(){alert("加载成功")});
		});
})
$(function(){
	$("#showsensor").click(function(){
		$("#ajaxContent").load("__js__/html/sensor.html#sensordata",{limit: 25},function(){alert("加载成功")});
		});
})
$(function(){
	$("#showexecutor").click(function(){
		$("#ajaxContent").load("__js__/html/executor.html",{"name":"null"},function(){alert("加载成功")});
		});
})
$(function(){
	$("#showrfid").click(function(){
		$("#ajaxContent").load("__js__/html/rfid.html",{limit: 25},function(){alert("加载成功")});
		});
})
$(function(){
	$("#showtesttable").click(function(){
		$("#ajaxContent").load("__js__/html/test.html",{limit: 25},function(){alert("加载成功")});
		});
})

$(function(){
	$("#bytime").click(function(){
		$("#ajaxContent").load("__js__/html/sensor.html#sensordata",{limit: 50},function(){alert("加载成功")});
		});
})
$(function(){
	$("#bytemp").click(function(){
		$("#ajaxContent").load("__js__/html/bytemp.html",{limit: 50},function(){alert("加载成功")});
		});
})
$(function(){
	$("#byhum").click(function(){
		$("#ajaxContent").load("__js__/html/byhum.html",{limit: 50},function(){alert("加载成功")});
		});
})
$(function(){
	$("#bylight").click(function(){
		$("#ajaxContent").load("__js__/html/bylight.html",{limit: 50},function(){alert("加载成功")});
		});
})
$(function(){
	$("#byair").click(function(){
		$("#ajaxContent").load("__js__/html/byair.html",{limit: 50},function(){alert("加载成功")});
		});
})

				
</script>

</head>

<body>
    <script type="text/javascript">
        window.onload = function() {
                document.onkeydown = function() {
                var e = window.event || arguments[0];
                //屏蔽F12
                if(e.keyCode == 123) {

                    return false;
                 //屏蔽Ctrl+Shift+I
                } else if((e.ctrlKey) && (e.shiftKey) && (e.keyCode == 73)) {

                    return false;
                    //屏蔽Shift+F10
                } else if((e.shiftKey) && (e.keyCode == 121)){
                     return false;
                }
            };
            //屏蔽右键单击
            document.oncontextmenu = function() {
                 return false;
            }
        }
    </script>
<!-- Site Backgrounds
	================================================== --> 

<!-- Change to class="poswrapheaderline wide" and class="headerline full" for a full-width header line -->
<div class="poswrapheaderline">
  <div class="headerline"></div>
</div>
<!-- Remove or uncomment depending on if you want a background image or tile -->
<div class="tiledbackground"></div>
<!--img src="images/bg.jpg" alt="" id="background" /--> 
<!-- Change to class="poswrapper wide" and class="whitebackground full" for a full-width site background -->
<div class="poswrapper">
  <div class="whitebackground"></div>
</div>
<div class="container main portfolio4column"> 
  
  <!-- Header | Logo, Menu
		================================================== -->
  
  <div class="sixteen columns header"> <a href="" class="logo">
    <div class="logo"></div>
    </a>
    <div class="mainmenu">
      <div id="mainmenu" class="ddsmoothmenu">
        <ul>
          <li>
          <a href="<?php echo url('index/index/index'); ?>">主页<br/>
          <span>Home</span></a>
          <ul>
            <li><a href="#">Main</a></li>
            <li><a href="#">Main</a></li>
            <li><a href="#">Main</a></li>
            </li>
          </ul>
          </li>
          <li><a href="<?php echo url('data/index/index'); ?>">传感器<br/>
            <span>Sensor</span></a>
            <ul>
              <li><a href="#">NB-IOT</a></li>
              <li><a href="#">NB-IOT</a></li>
              <li><a href="#">NB-IOT</a></li>
            </ul>
          </li>
          <li><a href="<?php echo url('data/index/bd'); ?>">北斗<br/>
            <span>BeiDou</span></a>
            <ul>
              <li><a href="#">LoRa</a></li>
              <li><a href="#">LoRa</a></li>
              <li><a href="#">LoRa</a></li>
            </ul>
          </li>
          <li><a href="<?php echo url('admin/user/index'); ?>">用户管理<br/>
            <span>User</span></a>
          </li>
          <li> </li>
        </ul>
        <br style="clear: left" />
      </div>
      
      <!-- Responsive Menu -->
    </div>
  </div>
  <div>
  </div>
  
    <div >
  <table cellspacing="0" border="0" width="100%" bordercolor="#000000" align="center">
  <tr align="center">
  <td width="200">
  <input style="width:120px;margin:30px 20px 0px 20px" type="submit" id="showall" value="显示全部"/>
  </td>
  <td width="200">
  <input style="width:120px;margin:30px 20px 0px 20px" type="submit" id="showsensor" value="传感器"/>
  </td>
  <td width="200">
  <input style="width:120px;margin:30px 20px 0px 20px" type="submit" id="showexecutor" value="执行器"/>
  </td>
  <td width="200">
  <input style="width:120px;margin:30px 20px 0px 20px" type="submit" id="showrfid" value="RFID"/>
  </td>
    <td width="200"/>
  <input style="width:120px;margin:30px 20px 0px 20px" type="submit" id="showtesttable" value="透传数据"/>
    </tr>
  </td>
    </table>
	
	
  <table cellspacing="0" border="0" width="100%" bordercolor="#000000" align="center">
  <tr align="center">
  <td width="20">
  <input style="width:120px;margin:30px 20px 30px 20px" type="submit" id="bytime" value="时间"/>
  </td>
  <td width="20">
  <input style="width:120px;margin:30px 20px 30px 20px" type="submit" id="bytemp" value="温度"/>
  </td>
  <td width="20">
  <input style="width:120px;margin:30px 20px 30px 20px" type="submit" id="byhum" value="湿度"/>
  </td>
  <td width="20">
  <input style="width:120px;margin:30px 20px 30px 20px" type="submit" id="bylight" value="光照"/>
  </td>
  <td width="20">
  <input style="width:120px;margin:30px 20px 30px 20px" type="submit" id="byair" value="空气"/>
  </td>
    </tr>
    </table>
  </div>
  
  
  <div id="ajaxContent">
    <form action="clear.php" method="POST">
      <button type="submit" name="submit" value="insert">清空</button>
    </form>
     <div id="container"></div>
    <table cellspacing="0" border="0" width="100%" bordercolor="#000000" align="center">
      <tr align="center">
        <td width="25%">时间</td>
        <td width="11%">节点号</td>
        <td width="13%">温度</td >
        <td width="13%">湿度</td>
        <td width="13%">光照强度</td>
        <td width="13%">空气质量</td>
        <td width="12%">传输协议</td>
      </tr>
      <?php
      $tempdata=']';
      $humdata=']';
      $lightdata=']';
      $airdata=']';
      $mysqli = mysqli_connect("localhost", "root", "root", "mysql");
      
      if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
      }
      else {
      $sql = "SELECT * FROM Sensor ORDER BY id DESC";
      $res = mysqli_query($mysqli, $sql);
      if ($res) 
      {
      while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) 
      {
			$time  = $newArray['time'];
			$nodenum = $newArray['nodenum'];
			$temperature = $newArray['temperature'];
			$humidity = $newArray['humidity'];
			$light = $newArray['light'];
			$air = $newArray['air'];
			$msgtype = $newArray['msgtype'];
            if($nodenum<100)
            {
            $tempdata=$temperature.','.$tempdata;
            $humdata=$humidity.','.$humdata;
            $lightdata=$light.','.$lightdata;
            $airdata=$air.','.$airdata;
			echo "<tr align=\"center\"><td>".$time."</td><td>".$nodenum."</td><td>".$temperature." ℃</td><td>".$humidity." %RH</td><td>".$light." lx</td><td>".$air." ppm</td><td>".$msgtype." </td></tr>";
            }
       }
       $tempdata='['.$tempdata;
       $humdata='['.$humdata;
       $lightdata='['.$lightdata;
       $airdata='['.$airdata;
       } 
       else
       {
		printf("Could not retrieve records: %s\n", mysqli_error($mysqli));
        }
        mysqli_free_result($res);
        mysqli_close($mysqli);
     }
     ?>
    </table>
        <script language="JavaScript">
$(function(){
   var chart= {
            backgroundColor: '#f5f5f5',
            type: 'line'
   };
   var title = {
       text: '传感器数据'   
   };
   var subtitle = {
        text: 'SENSORDATA'
   };
   var xAxis = {
   };
   var yAxis = {
      title: {
         text: 'DATA'
      },
      plotLines: [{
         value: 0,
         width: 1,
         color: '#808080'
      }]
   };   

   var tooltip = {
   }

   var legend = {
      layout: 'vertical',
      align: 'right',
      verticalAlign: 'middle',
      borderWidth: 0
   };

   var series =  [
      {
         name: 'Temperature',
         data: <?php echo $tempdata; ?>
      }, 
      {
         name: 'Humidity',
         data: <?php echo $humdata; ?>
      }, 
      {
         name: 'Illumination',
         data: <?php echo $lightdata; ?>
      }, 
      {
         name: 'Air Quality',
         data: <?php echo $airdata; ?>
      }
   ];
   
   var credits= {  
          enabled:false ,
   };
   

   var json = {};

   json.chart = chart;
   json.credits = credits;
   json.title = title;
   json.subtitle = subtitle;
   json.xAxis = xAxis;
   json.yAxis = yAxis;
   json.tooltip = tooltip;
   json.legend = legend;
   json.series = series;

   $('#container').highcharts(json);
})
</script>
    <hr color="#666666" >
    <table cellspacing="0" border="0" width="100%" bordercolor="#000000" align="center">
      <tr align="center">
        <td width="20%">时间</td>
        <td width="20%">节点号</td width="20%">
        <td width="30%">继电器</td>
        <td width="30%">舵机角度</td>
      </tr>
      <?php
      $mysqli = mysqli_connect("localhost", "root", "root", "mysql");
      
      if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
      }
      else {
      $sql = "SELECT * FROM Executor ORDER BY id DESC";
      $res = mysqli_query($mysqli, $sql);
      if ($res) 
      {
      while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) 
      {
			$time  = $newArray['time'];
			$node = $newArray['node'];
			$relay = $newArray['relay'];
			$steer = $newArray['steer'];
			echo "<tr align=\"center\"><td>".$time."</td><td>".$node."</td><td>".$relay."</td><td>".$steer."</td></tr>";
       }
       } 
        mysqli_free_result($res);
        mysqli_close($mysqli);
     }
     ?>
     
     
     
    </table>
    <hr color="#666666" >
    <table cellspacing="0" border="0" width="100%" bordercolor="#000000" align="center">
      <tr align="center">
        <td width="20%">时间</td>
        <td width="30%">节点号</td width="20%">
        <td width="30%">卡号</td>
        <td width="20%"></td>
      </tr>
      <?php
      $mysqli = mysqli_connect("localhost", "root", "root", "mysql");
      
      if (mysqli_connect_errno()) {
      printf("Connect failed: %s\n", mysqli_connect_error());
      exit();
      }
      else {
      $sql = "SELECT * FROM RFID";
      $res = mysqli_query($mysqli, $sql);
      if ($res) 
      {
      while ($newArray = mysqli_fetch_array($res, MYSQLI_ASSOC)) 
      {
			$time  = $newArray['time'];
			$node = $newArray['node'];
			$number = $newArray['number'];
			echo "<tr align=\"center\"><td>".$time."</td><td>".$node."</td><td>".$number."</td></tr>";
       }
       } 
        mysqli_free_result($res);
        mysqli_close($mysqli);
     }
     ?>
    </table>
    <hr color="#666666" >
  </div>
  <div> 

    <hr color="#666666" >
  </div>
  
		<div class="homeslider row">        
            <div class="flexslider clearfix">
                <ul class="slides">
                    <li><img src="__images__/p1.jpg" alt="" /><div class="flex-caption"></div></li>
                    <li><img src="__images__/p2.jpg" alt="" /><div class="flex-caption"></div></li>
                    <li><img src="__images__/p3.jpg" alt="" /><div class="flex-caption"></div></li>
                </ul>
            </div>
            <div class="sliderspacefix"></div>
            </div>
		</div>

  <div> </div>
  <div class="clear"></div>
  <div class="clear"></div>
  
  <!-- Bottom Padding Adjust
       ================================================== -->
  <div class="sixteen columns bottomadjust"></div>
</div>
<!-- container --> 

<!-- Footer
	================================================== --> 

<!-- Change to class="container footerwrap full" for a full-width footer -->
<div class="container footerwrap">
  <div class="footerclose"></div>
  <div class="footer">
    <div class="sixteen columns">
      <div class="four columns clearfix widget alpha">
        <h5>特别感谢</h5>
        <div class="widget_tweets">
          <ul>
            <li class="clearfix">
              <div class="postlink"><a href="#">王志良</a></div>
              <div class="subline">老师</div>
            </li>
          </ul>
          <div class="clear"></div>
        </div>
      </div>
      <div class="four columns widget">
        <h5>相关研究</h5>
        <div class="widget_blogposts">
          <ul>
          </ul>
          <div class="clear"></div>
        </div>
      </div>
      <div class="four columns widget">
        <h5>联系方式</h5>
        <div class="widget_text"> <span class="lighti">联系我们</span><br/>
          邮箱: <a href="mailto:your@email.com" class="linkbg">panqiuhsi_ustb@163.com</a><br/>
          电话: 18813128564<br/>
          <br/>
          <span class="lighti">工作时间</span><br/>
          周一至周五: 09:00 - 18:00<br/>
          周六及周日: 10:00 - 15:00 </div>
      </div>
      <div class="four columns widget omega">
        <h5>快捷通道</h5>
        <div class="widget_quickcontact">
          <form id="quickcontact" method="post" action="#">
            <input type="text" name="name" id="quickcontact_name" class="requiredfield" onFocus="if(this.value == 'Name *') { this.value = ''; }" onBlur="if(this.value == '') { this.value = 'Name *'; }" value='Name *'/>
            <input type="text" name="email" id="quickcontact_email" class="requiredfield" onFocus="if(this.value == 'Email *') { this.value = ''; }" onBlur="if(this.value == '') { this.value = 'Email *'; }" value='Email *'/>
            <textarea name="message" id="quickcontact_message" class="requiredfield" onFocus="if(this.value == 'Message *') { this.value = ''; }" onBlur="if(this.value == '') { this.value = 'Message *'; }">Message *</textarea>
            <button type="submit" name="send">Send</button>
            <span class="errormessage">Error! Please correct marked fields.</span> <span class="successmessage">Message send successfully!</span> <span class="sendingmessage">Sending...</span>
          </form>
        </div>
      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>
<!-- container --> 

<!-- Sub-Footer
	================================================== --> 

<!-- Change to class="container subfooterwrap full" for a full-width subfooter -->
<div class="container subfooterwrap">
  <div class="footeropen"></div>
  <div class="subfooter">
    <div class="eight columns siteinfo">2017.USTB All rights reserved.    北京科技大学·物联网与电子工程系·NB-IoT</div>
    <div class="eight columns sitenav"> <a href="#">Home</a>&nbsp; &nbsp; &nbsp; <a href="#">Features</a>&nbsp; &nbsp; &nbsp; <a href="#">Portfolio</a>&nbsp; &nbsp; &nbsp; <a href="#">Blog</a>&nbsp; &nbsp; &nbsp; <a href="#">Contact</a> </div>
  </div>
</div>

<!-- End Document
================================================== -->
<div style="display:none"><script src='http://v7.cnzz.com/stat.php?id=155540&web_id=155540' language='JavaScript' charset='gb2312'></script></div>
</body>
</html>