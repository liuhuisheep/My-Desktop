<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>My Desktop</title>
<style type="text/css">
*{
	margin:0px;
	padding:0px;
	text-decoration:none;
}
html,body{
	width:100%;
	height:100%;
}
#_container{
	width:100%;
	height:100%;
	margin:auto;
	background:url(images/ff13-2.jpg) no-repeat center;
	background-attachment:fixed;
	/*
	border:#cc0000 20px solid;
	background:url(images/blackbackground.jpg) no-repeat center;
	background-attachment:fixed;
	*/
}
#_desktop{
	width:100%;
	height:100%;
	margin-bottom:-42px;
	overflow:hidden;
	color:#FFF;
}
#_taskbar{
	position:absolute;
	z-index:999;
	left:0;
	bottom:0;
	width:100%;
	height:42px;
	border-top:#122d38 1px solid;
	box-shadow:inset 0 1px #adc7d1;
	background-color:rgb(44,111,137);
	-moz-opacity:0.6;
   	opacity: 0.6;
}
#_taskbar div{
	float:left;
	display:inline-block;
	line-height:40px;
	vertical-align:top;
	text-align:center;
	cursor:default;
}
#_taskbar #_start{
	width:40px;
	height:40px;
	background:url(images/start.png) no-repeat center;
	margin-right:20px;
	margin-left:10px;
}
#_taskbar #_start:hover{
	background:url(images/start2.png) no-repeat center;
}
#_taskbar #_task{
	width:60px;
	height:40px;
	border:rgb(44,111,137) 1px solid;
	border-top:#122d38 1px solid;
	box-shadow:inset 0 1px #adc7d1;
	margin-top:-1px;
	-moz-opacity:0.6;
	opacity:0.6;
}
#_taskbar #_task:hover{
	opacity:1;
	border:#1e4a5b 1px solid;
}
#_taskbar ._chrome{
	background:url(images/chrome-logo.png) no-repeat center;
}
#_taskbar #_clock{
	float:right;
	color:#fff;
	line-height:20px;
	width:80px;
	margin-right:10px;
}
#_taskbar #_display-desktop{
	float:right;
	width:15px;
	height:40px;
	border:#fff 1px solid;
}
#_taskbar #_display-desktop:hover{
	background:rgb(255,255,255);
	border:#000 1px solid;
	opacity:0.8;
}
#_about{
	font-family:Georgia, "Times New Roman", Times, serif;
	color:#fff;
	line-height:16px;
	text-align:center;
}
#_desktop #_shotcut{
	width:64px;
	height:64px;
	margin:10px;
	border:transparent 1px solid;
}
#_desktop #_shotcut:hover{
	border:#eff8fa 1px dashed;
	border-radius:10px;
	cursor:pointer;
}
#_desktop ._disk{
	background:url(images/icons/disk.png) no-repeat center;
}
#_desktop ._computer{
	background:url(images/icons/computer.png) no-repeat center;
}
#_desktop ._ie{
	background:url(images/icons/ie.png) no-repeat center;
}
#_desktop ._notepad{
	background:url(images/icons/notepad.png) no-repeat center;
}
#_desktop ._toolkit{
	background:url(images/icons/toolkit.png) no-repeat center;
}
#_desktop ._configure{
	background:url(images/icons/configure.png) no-repeat center;
}
</style>
<script type="text/javascript">
function showclock(){
	var date = new Date();
	var hhmm = "",yyyymmdd = "";
	if(date.getHours()<10)
		hhmm += "0";
	hhmm += date.getHours() + ":";
	if(date.getMinutes()<10)
		hhmm += "0";
	hhmm += date.getMinutes()/* + ":";
	if(date.getSeconds()<10)
		hhmm += "0";
	hhmm += date.getSeconds();*/
	yyyymmdd += date.getFullYear() + "/";
	if(date.getMonth()<9)
		yyyymmdd += "0";
	yyyymmdd += (date.getMonth() + 1) + "/";
	if(date.getDate()<10)
		yyyymmdd += "0";
	yyyymmdd += date.getDate();
	document.getElementById("_clock").innerHTML = hhmm + "<br />" + yyyymmdd;
	setTimeout("showclock()",1000)
}
</script>
</head>

<body onload="showclock()">
<div id="_container">
	<div id="_about">© 2011 Liu Hui. All rights reserved.<br />For better performance, Firefox or Chrome Browser are recommended.</div>
	<div id="_desktop">
    	<div id="_shotcut" class="_computer"></div>
        <div id="_shotcut" class="_ie"></div>
        <div id="_shotcut" class="_notepad"></div>
        <div id="_shotcut" class="_toolkit"></div>
        <div id="_shotcut" class="_configure"></div>
    </div>
    <div id="_taskbar">
    	<div id="_start"></div>
        <div id="_task" class="_chrome"></div>
        <div id="_display-desktop"></div>
        <div id="_clock"></div>
    </div>
</div>
</body>
</html>