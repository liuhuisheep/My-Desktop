// JavaScript Document
var xmlHttp;
function createXMLHttpRequest(){
	if (window.XMLHttpRequest)
	{// code for IE7+, Firefox, Chrome, Opera, Safari
		xmlHttp=new XMLHttpRequest();
	}
	else
	{// code for IE6, IE5
		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
	}
}
function loadPage(id,url){
	createXMLHttpRequest();
	xmlHttp.onreadystatechange = function(){
		if(xmlHttp.readyState == 4 && xmlHttp.status == 200){
			document.getElementById(id).innerHTML = xmlHttp.responseText;
			alert(xmlHttp.responseText);
			var regDetectJs = /<script(.|\n)*?>(.|\n|\r\n)*?<\/script>/ig;
			var regGetJs = /<script(.|\n)*?>((.|\n|\r\n)*)?<\/script>/im;
			var jsMatch = xmlHttp.responseText.match(regDetectJs);
			if(jsMatch){
				//alert(jsMatch);
				var jsNums = jsMatch.length;
				for(var i=0;i<jsNums;i++){
					//alert(i);
					var jsSection = jsMatch[i].match(regGetJs);
					//alert(jsSection[2]);
					window.eval(jsSection[2]);
				}
			}
			//alert(xmlHttp.responseText);
		}
		else{
			document.getElementById(id).innerHTML = "<div style=\"width:100%;height:100%;background:url('images/loading.gif') no-repeat center;\"></div>";
		}
	}
	xmlHttp.open("get",url,true);
	xmlHttp.send();
}