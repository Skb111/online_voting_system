<!DOCTYPE html>
<html>
	<head>
		<title>Javascript Clock Script</title>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<!-- Bootstrap -->
		<link href="css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="css/style.css" rel="stylesheet" media="screen">
		<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
		<!--[if lt IE 9]>
		<script src="../../assets/js/html5shiv.js"></script>
		<script src="../../assets/js/respond.min.js"></script>
		<![endif]-->

	</head>
	<body>
		<header>
			<p class="text-center">
				JAVASCRIPT CLOCK SCRIPT - DEMO
			</p>
		</header>
		<div class="container">
			<div class="row">
				
				<div class="col-xs-24 col-sm-12 col-lg-12 cal">
					<h4 class='format'>Date Time Format (m d, YYYY h:i:s A)</h4>
					<p id='demo' class="text-center cal-container"></p>	
				</div>
			</div>
			<div class="row">
				<div class="col-xs-24 col-sm-12 col-lg-12 cal">
					<p class='format'>Date Time Format (M d, YYYY h:i:s A)</p>
					<p id='demo1' class="text-center cal-container"></p>	
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-24 col-sm-12 col-lg-12 cal">
					<p class='format'>Date Time Format (Day M d, YYYY h:i:s A)</p>
					<p id='demo4' class="text-center cal-container"></p>	
				</div>
			</div>
			
			<div class="row">
				<div class="col-xs-24 col-sm-12 col-lg-12 cal">
					<p class='format'>Date Time Format (d:m:YYYY h:i:s A)</p>
					<p id='demo2' class="text-center cal-container"></p>	
				</div>
			</div>
			<div class="row">				
				<div class="col-xs-24 col-sm-12 col-lg-12 cal">
					<p class='format'> Time Format (h:i:s A)</p>
					<p id='demo3' class="text-center cal-container"></p>	
				</div>
			</div>
		</div>
		<footer>
			<p class="text-center" id="foot">
				&copy; <a href="http://smarttutorials.net/" target="_blank">Smart Tutorials </a>2013
			</p>
		</footer>
		<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
		<script src="js/jquery-1.10.2.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<?php
			$date = new DateTime();
			$current_timestamp = $date->getTimestamp();
		?>

		<script>
		    flag_time = true;
			timer = '';
			setInterval(function(){phpJavascriptClock();},1000);
			
			function phpJavascriptClock()
			{
				if ( flag_time ) {
				timer = <?php echo $current_timestamp;?>*1000;
				}
				var d = new Date(timer);
				months = new Array('Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sept', 'Oct', 'Nov', 'Dec');
				
				month_array = new Array('January', 'Febuary', 'March', 'April', 'May', 'June', 'July', 'Augest', 'September', 'October', 'November', 'December');
				
				day_array = new Array( 'Sunday', 'Monday', 'Tuesday', 'Wednesday', 'Thursday', 'Friday', 'Saturday');
				
				currentYear = d.getFullYear();
				month = d.getMonth();
				var currentMonth = months[month];
				var currentMonth1 = month_array[month];
				var currentDate = d.getDate();
				currentDate = currentDate < 10 ? '0'+currentDate : currentDate;
				
				var day = d.getDay();
				current_day = day_array[day];
				var hours = d.getHours();
				var minutes = d.getMinutes();
				var seconds = d.getSeconds();
				
				var ampm = hours >= 12 ? 'PM' : 'AM';
				hours = hours % 12;
				hours = hours ? hours : 12; // the hour ’0′ should be ’12′
				minutes = minutes < 10 ? '0'+minutes : minutes;
				seconds = seconds < 10 ? '0'+seconds : seconds;
				var strTime = hours + ':' + minutes+ ':' + seconds + ' ' + ampm;
				timer = timer + 1000;
				document.getElementById("demo").innerHTML= currentMonth+' ' + currentDate+' , ' + currentYear + ' ' + strTime ;
				
				document.getElementById("demo1").innerHTML= currentMonth1+' ' + currentDate+' , ' + currentYear + ' ' + strTime ;
				
				document.getElementById("demo2").innerHTML= currentDate+':' +(month+1)+':' +currentYear + ' ' + strTime ;
				
				document.getElementById("demo3").innerHTML= strTime ;
				
				document.getElementById("demo4").innerHTML= current_day + ' , ' +currentMonth1+' ' + currentDate+' , ' + currentYear + ' ' + strTime ;
				
				
				flag_time = false;
			}

		</script>

            <style>
                
                header{
                    background: #339966;
                    height: 70px;
                    color:#fff;
                }
                a{text-decoration: none;color: #fff;}
                header p{padding-top:20px;font-family: 'tracy';font-size: 25px;}
                footer{
                    background: #339966;
                    height: 100px;
                    color:#fff;
                }
                footer p{padding-top:50px;}
                .cal{margin:0 auto;padding: 5% 250px;}


                .cal-container{ font-family: 'Due'; color:#C77405;font-size:50px;}
                .format{ font-family: 'tracy'; color:#339966;font-size:40px;border-bottom: 2px solid #999;}

            </style>


	</body>
</html>

