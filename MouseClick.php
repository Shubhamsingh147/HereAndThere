<html>
<head>
</head>
<body style="background-image:url('_edited1.png'); background-position:center;">
<p id="p1" style="font-size:4em;"> Score comes up here </p>
<p id="p2" style="font-size:2em;">Timer</p>
<button  onclick="myfunction()" style=" font-size:70px; ">Click as many times as you can in 10 seconds!</button>
<button  onclick="intet()" style=" border-radius:7px;">See Scores</button>
<script> var c=2;
var t;var b=0;
var timer_is_on=0;
var a=1;

function myfunction()
{
if (b==0 && !timer_is_on)
  {b++;
  timer_is_on=1;
  timedCount();
  document.getElementById("p1").innerHTML="1";
  }
  else
  counter();
  
}

function timedCount()
{
document.getElementById("p2").innerHTML=c;
c--;
if(c>=0)
t=setTimeout(function(){timedCount()},1000);
else stopCount();}

function stopCount()
{
	var name=prompt("enter your name: Your score is "+a);
	var xml = new XMLHttpRequest();
	console.log("object created");
	xml.open("POST","save.php",true);
	console.log("xml.open");
	xml.send("fname=Henry&score=Ford");
	console.log(xml.responseText);
								  
								 
	// location.reload(true);	
clearTimeout(t);
timer_is_on=0;
}

function counter()
{	a++;
     // if(a==2)
       // setTimeout(function(){
								 	
			                // },10000);
 document.getElementById("p1").innerHTML=a;
 
}
function intet()
{window.open("game.txt");}
</script>
</body>
</html>
