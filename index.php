<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Ramadhan 1442 H</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link rel="shortcut icon" href="favicon.ico">
</head>
<body>
	<div class="container">
		<h2><span>Ramadhan </span>1442 H</h2>
		<div class="ramadhan">
			<div id="day">NA</div>
			<div id="hour">NA</div>
			<div id="minute">NA</div>
			<div id="second">NA</div>
		</div>
	</div>
	<script type="text/javascript">
		var countDate = new Date('May 12, 2021 23:59:59').getTime();

		function newMonth(){
			var now = new Date().getTime();
				gap = countDate - now;

				var second = 1000;
				var minute = second * 60;
				var hour = minute * 60;
				var day = hour * 24;

				var d = Math.floor(gap / (day));
				var h = Math.floor((gap % (day)) / (hour));
				var m = Math.floor((gap % (hour)) / (minute));
				var w = Math.floor((gap % (minute)) / (second));

				document.getElementById('day').innerText = d;
				document.getElementById('hour').innerText = h;
				document.getElementById('minute').innerText = m;
				document.getElementById('second').innerText = w;
		}

		setInterval(function(){
			newMonth();
		},1000)
	</script>
</body>
</html>