<html>
<title>
Calculator
</title>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<style>
.btn
{
font-size:6px;
font-family: Arial, sans-serif;
border: solid #3079ed;
color: #fff;
text-shadow: 0 1px rgba(0,0,0,0.1);
background-color: #4d90fe;
border-radius:3px;
zoom:1.5;
}
.mem
{
opacity: 0.4;
font-size: 8px;
margin-left: 40%;
margin-top: 2px;
margin-bottom: 2px;
}
</style>
</head>
<h1 style="font-family: sans-serif;">
This is a Simple Calculator.
</h1>
<body onload="document.getElementById('box').focus()">
<div id="cal" position="relative" style=" margin-left:30%;zoom: 3;">
	<div id="temp_data" position="relative">
		<p class="mem" id="mem1"> &nbsp </p>
		<p class="mem" id="opn">  &nbsp </p>
		<p class="mem" id="mem2"> &nbsp </p>
	</div>
	<div id="screen">
		<input type="text" id="box" placeholder="Type numbers here" style="font-family: monospace; width: 65%;" >
		<button style="margin-left: -27;background:none;font-size: 12.1px; border:none; opacity:0.3" onclick="clrall()">X</button>
	</div>
		<div id="panel" style="margin-left: 15px;">
			
			<button class="btn" onclick="clckd(1)">1</button>
			<button class="btn" onclick="clckd(2)">2</button>
			<button class="btn" onclick="clckd(3)">3</button>
			<button class="btn" onclick="replace('+')">+</button>
			<button class="btn" onclick="replace('^')">^</button>
			<br>
			<button class="btn" onclick="clckd(4)">4</button>
			<button class="btn" onclick="clckd(5)">5</button>
			<button class="btn" onclick="clckd(6)">6</button>
			<button class="btn" onclick="replace('-')">-</button>
			<button class="btn" onclick="replace('√')">√</button>
			<br>
			<button class="btn" onclick="clckd(7)">7</button>
			<button class="btn" onclick="clckd(8)">8</button>
			<button class="btn" onclick="clckd(9)">9</button>
			<button class="btn" onclick="replace('*')">*</button>
			<button class="btn" onclick="var deg=document.getElementById('box').value;
										document.getElementById('mem1').innerHTML='sin('+deg+')';
										document.getElementById('mem2').innerHTML=Math.sin(deg*Math.PI/180).toPrecision(5);
										document.getElementById('box').value=''">sin</button>
			<br>
			<button class="btn" onclick="clckd('.')">. </button>
			<button class="btn" onclick="clckd(0)">0</button>
			<button class="btn" onclick="dothis()">=</button>
			<button class="btn" onclick="replace('/')">/</button>
			<button class="btn" onclick="var deg=document.getElementById('box').value;
										document.getElementById('mem1').innerHTML='asin('+deg+')';
										document.getElementById('mem2').innerHTML=Math.round(Math.asin(deg)*180/Math.PI).toPrecision(5);
										document.getElementById('box').value=''">sin<sup>-1</sup></button>
		</div>
</div>
</body>
</html>
<script>
function clckd(a)
{
var r=document.getElementById("box").value;
document.getElementById("box").value=r+a;
document.getElementById("box").focus();
}
function replace (sgn)
{
var x=document.getElementById("box").value;
if(x)
document.getElementById("mem1").innerHTML=x;
document.getElementById("opn").innerHTML=sgn;
document.getElementById("box").value="";
document.getElementById("box").focus();
document.getElementById("mem2").innerHTML="&nbsp";
}
function dothis()
{
var a=document.getElementById("mem1").innerHTML *1;
var b=document.getElementById("box").value *1;
document.getElementById("mem2").innerHTML=b;
switch(document.getElementById("opn").innerHTML)
{
case '+':
  document.getElementById("box").value=a+b;
  break;
case '-':
  document.getElementById("box").value=a-b;
  break;
case '*':
	document.getElementById("box").value=a*b;
	break;
case '/':
	document.getElementById("box").value=a/b;
	break;
case '^':
	document.getElementById("box").value=Math.pow(a,b);
	break;
case '√':
	document.getElementById("box").value=Math.pow(a,1/b);
	break;
default:
	alert("kuchh bhi daal doge kya?");
  }
  document.getElementById("box").focus();
}
function clrall()
{
	document.getElementById("mem1").innerHTML="&nbsp";
	document.getElementById("box").value="";
	document.getElementById("opn").innerHTML="&nbsp";
	document.getElementById("mem2").innerHTML="&nbsp";
	document.getElementById("box").focus();
}
</script>
