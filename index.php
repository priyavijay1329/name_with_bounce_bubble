<!DOCTYPE html>
<html>
  <head>
    <script type="text/javascript" src="js/jquery-1.10.2.min.js"></script>
    <script type="text/javascript" src="js/alphabet.js"></script>
  </head>
  <body>
    <canvas id="myCanvas"></canvas>
    <script type="text/javascript" src="js/bubbles.js"></script>
    <script type="text/javascript">
	var myName = "Angular";

var red = [0, 100, 63];
var orange = [40, 100, 60];
var green = [75, 100, 40];
var blue = [196, 77, 55];
var purple = [280, 50, 60];
var letterColors = [red, orange, green, blue, purple];

drawName(myName, letterColors);

if(10 < 3)
{
    bubbleShape = 'square';
}
else
{
    bubbleShape = 'circle';
}

bounceBubbles();
	</script>
  </body>
</html>