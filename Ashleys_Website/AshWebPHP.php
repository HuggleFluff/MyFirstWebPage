<!doctype html>

<html>
<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet" type="text/css">
<style>
body{
background-color: black;
}
.white-text{
color: white;
}
.red-text{
color: red;
}
.green-text{
color: green;
}
h1{
font-family: Monospace;
}
h3
{
font-size: 16px;
font-family: Monospace;
}
.picture-border{
border-color: green;
border-width: 2px;
border-style: solid;
border-radius: 50%
}
div{
position: relative;
left: 700px;
}
form{
position: relative;
right: 700px;

}
h4{
font-size: 100px;
font-family: Lobster, Monospace;
color: white;
position: relative;
right: 700px;
}
h5{
font-size: 50px;
font-family: Monospace;
color: green;

}
h6
{
font-size: 40px;
font-family: Monospace;
color: Blue;
position: relative;
right: 700px;

}
form{

font-size: 50px;
font-family: Monospace;
color: white;

}
</style>
<div>
<head>
<title>
Ashley's First Website!</title>
</head>

<body>
<h1 class = "red-text">
Welcome to Ashley's First Webpage!!
</h1>
<h2 class = "white-text">
Let's take a look around!
</h2>

<h3 class = "green-text">

Her web page is still under construction so give it some time yall!


</h3>


<a> <img class = "picture-border" src = "https://imgs.tuts.dragoart.com/how-to-draw-the-engineer-from-team-fortress-2_1_000000021856_5.png"  alt="Still under construction"></a>

<form>
<a><img  src = "https://lh3.googleusercontent.com/MP8igcrFNLDAEOtlo2j_UUAtTTUWUKFsCd7XxBwM55ZB0UG7-fp6qy5PuV3akomAb8Y=w300" alt="tiny shroom thing"></a>
<a><img  src = "http://www.imagefully.com/wp-content/uploads/2015/07/Speech-Bubble-Hi-Message-Image.png"  alt ="speech"></a>
</form>

<h4>Hi! Welcome to Ashley's first web page!  This is going to be her place of practice, where she can perfect her various codes, and dev projects!</h4>

<form>
<a href="https://github.com/HuggleFluff"><img  src = "http://hanslodge.com/data_images/150160.png"  alt ="mouse"></a>
<a href="https://twitter.com/A_B_L_C?lang=en"><img src = "https://orig00.deviantart.net/7f85/f/2017/050/e/2/nerd_bird_by_antixi-d59i03z.png" alt="nerdybirdy"></a>
<h5>
Click the mouse to reach her GitHub account!
Click the bird to reach her Twitter!
</h5>
</form>

<h6>
		Project: Backwards Name Generator (PHP practice);
	</h6>

<form method="GET">
	<input type="text" name="person">
	<button>SUBMIT</button>

	<?php
	$name = $_GET['person'];
	echo "Hello $name ";
	echo "Your name spelled backwards is: ";
	echo strrev($name);



	?>


</form>

</body>
</div>

</html>