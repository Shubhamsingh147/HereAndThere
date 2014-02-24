<html>
<head>
<meta content="text/html; charset=ISO-8859-1"
 http-equiv="content-type">
 <meta http-equiv="Content-Type" content="text/html;charset=utf-8" />
 <script src="jquery-1.6.2.js" type="text/javascript" charset="utf-8"></script>
<title>
Load Test
</title>
</head>
<style>
a:link{color:white;}
a:visited{color:white;}
input {border:solid 1px #888;font-size:35px;border-radius:5px;padding:2px;outline:none;opacity:0.84}
#maxload {box-shadow:0 0 4px green;}
#current {box-shadow:0 0 4px blue;}
        body
                {
        	        height: 100%;
                	padding: 0;
                	margin: 0;
                	background: #7F7872 url(road2.jpg) repeat-x center top ;
                	background-color: #7F7872 ;
                }
</style>
<body style="background-image:url('road2.jpg'); background-position:center;">
<div id="enter" position="relative">
<input id="maxload" type="text" placeholder="Input Max Load" />
<br>
<input id= "current" type="text" placeholder="Input current Load" />
<span style="font-family: sans-serif; font-size:2em; color:white;  background-color:black; opacity:0.8;" ></span>
</div>
<canvas id="canvas" width="900" height="500"></canvas><br>
<div id='object' position="relative" >
<marquee direction="right" scrollamount="15" style="margin-top:-16.5em; visibility:hidden" id="marquee2" ><img src="car.gif" id='circle' style="width: 185px;
height: 56px; "/></marquee>
<marquee direction="right" scrollamount="27" style="margin-top:-16.5em; visibility:hidden" id="marquee3" ><img src="car.gif" id='circle' style="width: 185px;
height: 56px; "/></marquee>
</div>
<marquee direction="right" scrollamount="30" style="margin-top:-16.5em" id="marquee"><img src="car.gif" id='circle' style="width: 185px;
height: 56px; "/></marquee>
<button id="road" style="background-color: #7F7872;
width: 99%;
height: 23px; margin-top: -16em;
margin-left: 0.5%;
 border-radius:7px; color: white;
font-family: monospace; background-image:url('road.jpg');background-position:center;" onclick="function(){}" onclick="none"/>
ROAD WITH LIMITED LOAD CAPACITY
</button>
<p style="font-size:23px; color:white"> Minimum road height:23px &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="info.php"/>How To Use?</a> &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp &nbsp <a href="www.facebook.com/https://www.facebook.com/jubak.saxena"/>©JubakSaxena/SS147 2014</a></p> 
<script>
$('#maxload').bind('input', function() {
    //$(this).next().stop(true, true).fadeIn(0).html('[input event fired!]: ' + $(this).val()).fadeOut(2000);
	//if($(this).val()>23)
	document.getElementById('road').style.height = $(this).val();
	//else
	//if($(this).val()<=23)
	//document.getElementById('road').style.height =35;
	
});
$('#current').bind('input', function() {
    if($(this).val()*1>$('#maxload').val()*1)
	{
	$(this).next().stop(true, true).fadeIn(0).html('      Current Load Exceeded The Maximum Load!').fadeOut(4000);
	document.getElementById('road').innerHTML="OVERLOAD!!!";
	document.getElementById('marquee').stop();
	document.getElementById('marquee2').stop();
	document.getElementById('marquee3').stop();
	document.getElementById('road').style.backgroundImage= "url('cracked.jpg')";
	}
	else 
	{
	$(this).next().stop(true, true).fadeIn(0).html('      Current Load Is Feasable to The Maximum Load!').fadeOut(4000);
	document.getElementById('road').innerHTML="ROAD WITH LIMITED LOAD CAPACITY";
	document.getElementById('marquee2').start();
	document.getElementById('marquee').start();
	document.getElementById('marquee3').start();
	document.getElementById('road').style.backgroundImage= "url('road.jpg')";
	}
	if($(this).val()>=200)
	{
	document.getElementById('marquee3').style.visibility ='visible';
	document.getElementById('marquee2').style.visibility ='visible';
	}
	else 
	if($(this).val()>=100 )
	document.getElementById('marquee2').style.visibility ='visible';
	else {
	document.getElementById('marquee2').style.visibility ='hidden';
	document.getElementById('marquee3').style.visibility ='hidden';
	}
	
});
</script>
</body>
</html>
