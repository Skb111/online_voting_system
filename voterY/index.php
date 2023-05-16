<?php include ('head.php');?>

<body>
	<?php include ('view_banner.php');?>

    <heading class="voters_heading">
        <center>		
			<!-- <h1>Lagos State Secondary Student's Union</h1> -->
		<div class="">
			<div class="">
				
				<div class="col-xs-24 col-sm-12 col-lg-12 cal">
					<!-- <h4 class='format'>Date Time Format 1(m d, YYYY h:i:s A)</h4> -->
					<p id='demo' class="text-center cal-container"></p>	
				</div>
			</div>
			
		</div>
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
				
				flag_time = false;
			}

		</script>
    </heading>
    <?php include 'slider.php';?>
    <div class="image">
    	<!-- <img src="img/img1.jpg" width="40%" hieght="40%"/> -->
    </div>
   

	



    <?php    
        include ('footer.php');
        ?>

<style>
                
                a {
					text-decoration: none;
					color: #fff;
				}

                footer{
                    background: #339966;
                    height: 100px;
                    color:#fff;
                }
               
                .cal {
					margin:0 auto;
					padding: 5% 250px;
				}


                .cal-container { 
                    font-family: 'Due'; 
                    color:black;
                    font-size:30px;
				}
               

            </style>

   </body>
</html>

