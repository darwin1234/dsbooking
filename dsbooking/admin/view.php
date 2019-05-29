<?php 
require_once(realpath(dirname(__FILE__)) . "/../../../../wp-load.php");
require_once(realpath(dirname(__FILE__)). '/main.php');
session_start();
class Booking{
	
	private $otherPage = 0;
	private $permalink; //for customize code;
	private $title;
	
	function limitText($string, $limit){
			// strip tags to avoid breaking any html
			$string = strip_tags($string);

			if (strlen($string) > $limit) {
				// truncate string
				$stringCut = substr($string, 0, $limit);

				// make sure it ends in a word so assassinate doesn't become ass...
				$string = substr($stringCut, 0, strrpos($stringCut, ' ')); 
			}
			return  $string;	
	}
	

	
	public function slidedown(){
		?>
		
		<script type="text/javascript">
			
		
	
			</script>
			<style>
				.dsform form{background:#fff; padding:20px;}
				.dsform iframe{background:#fff;}
			</style>
		
		<?php 
		
	}
	

	public function tourList($atts){
		
		 ob_start();
	
		 $atts = shortcode_atts(
			array(
				'cat_id' => '',
			), $atts);

	
		$args = array( 'post_type' => 'dstour', 'posts_per_page' => 10,'cat'=>$atts['cat_id']);
		$loop = new WP_Query( $args );
		while ( $loop->have_posts() ) : $loop->the_post();
			global $post;
			echo '<div class="entry-content" style="background:#F7F7F7; border-top: 4px solid #5B9B3C; padding:20px; border-bottom:1px solid #ccc; margin-bottom:20px;">';
				$tourPrice = $custom['customprice'][0];		
				
				
				echo get_the_content();
				//echo "<p>";
				//the_post_thumbnail( 'Full' ); 
				//echo "</p>";
				if($this->otherPage==0){
					//echo "<form method='POST' action='". get_the_permalink() ."'><input type='hidden' name='title' value='".get_the_title()."'><input type='hidden' name='tourID' value='$post->ID'><input type='submit' value='Book Now'></form>";
					$this->permalink = get_the_permalink();
					$this->title = get_the_title();
					add_action('wp_footer', array($this,'dsbookingHook'));
					
				}else{
					echo "<p><button onclick='dsbook($post->ID,0)'  style='float:right; background: #E63125; clear:both; display:block; clear:both; ' >BookNow</button></p>";
					echo "<div id='bookingwrapper_$post->ID' class='dsform'></div>";
				}
				
			echo '</div>';
			//echo "<hr>";
			
		
		
			
		endwhile;
		//$this->slidedown();
		return ob_get_clean();
	}
	
	function dsbookingHook(){
		?>
			<script type="text/javascript">
			
					window.onload = function(){
					var bgurl = document.getElementById("bgurl").value;
				
					document.getElementById("featured_img_url").setAttribute("style","background:url('"+bgurl+"') no-repeat; background-size:100%; height:380px; width:100%; background-position: center 80%; padding:20px; padding-left:50px;");
					 var htmlContent ="";
					 var FebNumberOfDays ="";
					 var counter = 1;
					 
					 
					 var dateNow = new Date();
					 var month = dateNow.getMonth();
					
					 var nextMonth = month+1; //+1; //Used to match up the current month with the correct start date.
					 var prevMonth = month -1;
					 var day = dateNow.getDate();
					 var year = dateNow.getFullYear();
					 
					 
					 //Determing if February (28,or 29)  
					 if (month == 1){
						if ( (year%100!=0) && (year%4==0) || (year%400==0)){
						  FebNumberOfDays = 29;
						}else{
						  FebNumberOfDays = 28;
						}
					 }
					 
					 
					 // names of months and week days.
					 var monthNames = ["January","February","March","April","May","June","July","August","September","October","November", "December"];
					 var dayNames = ["Sunday","Monday","Tuesday","Wednesday","Thrusday","Friday", "Saturday"];
					 var dayPerMonth = ["31", ""+FebNumberOfDays+"","31","30","31","30","31","31","30","31","30","31"]
					 
					 
					 // days in previous month and next one , and day of week.
					 var nextDate = new Date(nextMonth +' 1 ,'+year);
					 var weekdays= nextDate.getDay();
					 var weekdays2 = weekdays
					 var numOfDays = dayPerMonth[month];
						 
					 
					 
					 
					 // this leave a white space for days of pervious month.
					 while (weekdays>0){
						htmlContent += "<td class='monthPre'></td>";
					 
					 // used in next loop.
						 weekdays--;
					 }
					 
					 // loop to build the calander body.
					 while (counter <= numOfDays){
					 
						 // When to start new line.
						if (weekdays2 > 6){
							weekdays2 = 0;
							htmlContent += "</tr><tr>";
						}
					 
					 
					 
						// if counter is current day.
						// highlight current day using the CSS defined in header.
						if (counter == day){
							htmlContent +="<td class='dayNow selectdate' dsdate='"+counter+"' onMouseOver='this.style.background=\"#ffa500\"; this.style.color=\"#FFFFFF\"' "+
							"onMouseOut='this.style.background=\"#FFFFFF\"; this.style.color=\"#00FF00\"'>"+counter+"</td>";
						}else{
							htmlContent +="<td class='monthNow selectdate' dsdate='"+counter+"'   onMouseOver='this.style.background=\"#ffa500\"'"+
							" onMouseOut='this.style.background=\"#FFFFFF\"'>"+counter+"</td>";    
					 
						}
						
						weekdays2++;
						counter++;
					 }
					 
					 
					 
					 // building the calendar html body.
					 var calendarBody = "<table class='calendar'> <tr class='monthNow'><th colspan='7'>"
					 +monthNames[month]+" "+ year +"</th></tr>";
					 calendarBody +="<tr class='dayNames'>  <td>Sun</td>  <td>Mon</td> <td>Tues</td>"+
					 "<td>Wed</td> <td>Thurs</td> <td>Fri</td> <td>Sat</td> </tr>";
					 calendarBody += "<tr>";
					 calendarBody += htmlContent;
					 calendarBody += "</tr></table>";
					 // set the content of div .
					 document.getElementById("calendar").innerHTML=calendarBody;
					 document.getElementById("dscontent").innerHTML="<h1><?php echo $this->title; ?></h1><form  action='<?php echo $this->permalink; ?>' method='POST'><input type='submit' value='Book Now' id='dsbooknow'><input type='hidden' name='dsdate' id='fieldsdsdate' value=''></form>";
					 
					
						
					document.getElementById("calendar").addEventListener("click", function(event){
						
							
							 var divs = document.querySelectorAll('td');

									for (var div of divs) {
									  div.style.backgroundColor = "#fff";
									}
							
							if (event.target.classList.contains("selectdate")) {
										
											//var selectdate = event.target.classList.contains("selectdate");
											
											event.target.classList.add("selecteddate");
											var dsdate = event.target.getAttribute("dsdate");
											
										
										//alert(countclick);
										document.getElementById('fieldsdsdate').value = monthNames[month] + '-' + dsdate + '-' + year;
										
								
							}
						
						
						
					});
					
			}
			
			</script>
		<?php 
	}
	
	function receipt(){
		global $wpdb;
		?>
		<div style="width:95%; margin:0 auto; display:block; background:#fff; border-top:4px solid #5b9b3c; padding:0; padding-bottom:20px; margin-bottom:40px;">
			<h3 style="text-align:center; background:#6AB446; padding:10px; margin:0; color:#fff;">Your Receipt</h3>
			<p style='text-align:center'>Thank you for your order, we will be in touch with you shortly.</p>
			<canvas id="myCanvas" style="margin-top:-20px;  margin-left:20px; display:block; border-top: #6AB446 solid 2px; margin-bottom:20px; " width="650" height="357">
			Your browser does not support the HTML5 canvas tag.
			</canvas>
			<button style="margin:0 auto; display:block;">Save your receipt</button>
		</div>
			<script>
			window.onload = function() {
				
					var myCanvas = document.getElementById('myCanvas');
					var ctx = myCanvas.getContext('2d');
					ctx.fillStyle = "#FFFFFF";
					ctx.fillRect(0, 0, myCanvas.width, myCanvas.height);
					var logo = new Image;
					var img = new Image;

					img.onload = function(){
					 
					  ctx.drawImage(img, myCanvas.width - 100,30,100,100); // Or at whatever offset you like
					};
					img.src = "http://gibraltartoursandtaxiservice.com/wp-content/plugins/dsbooking/view/qrcode.php";
					
					ctx.font = "bold 12px Arial";
					ctx.fillStyle="#000000";
					ctx.beginPath();
					ctx.beginPath();
					ctx.moveTo(0, 150);
					ctx.lineTo(myCanvas.width, 150);
					ctx.stroke();
					var newLine = 150;

					<?php 
						$count = 0;
						foreach($_SESSION['infoReceipt'] as $key => $value){ ?>
						<?php $count++; ?>
						<?php if($count <=5){ ?>
							<?php if($key =="firstname") {?>
								ctx.fillText("FirstName: <?php echo $value;?> ",10, newLine += 28);
							<?php } ?>
							<?php if($key =="lastname") {?>
								ctx.fillText("LastName: <?php echo $value;?> ",10, newLine += 28);
							<?php } ?>
							<?php if($key =="noofadults") {?>
								ctx.fillText("No of Adult: <?php echo $value;?> ",10, newLine += 28);
							<?php } ?>
							<?php if($key =="noofchildren") {?>
								ctx.fillText("No of Children: <?php echo $value;?> ",10, newLine += 28);
							<?php } ?>
							<?php if($key =="bookingdate") {?>
								ctx.fillText("Date: <?php echo $value;?> ",10, newLine += 28);
							<?php } ?>
							<?php if($key =="tourname") {?>
								ctx.fillText("Tour Type: <?php echo $value;?> ",10, newLine += 28);
							<?php } ?>
						
							
						<?php } ?>	
					<?php } ?>
					
				
					var dot2 ="";
					for(var i = 0; i<myCanvas.width; i++){
						 dot2 += ".";
					}
					ctx.fillText(dot2,0,320);
					ctx.fillText("Total Amount: <?php echo $_SESSION['infoReceipt']['total']; ?> ",10,340);
			};
			
			</script>
			
	
			
	<?php 	
		$wpdb->update('wp_booking2', array('Status' => '1'), array( 'ID' => $_SESSION['qr_code']));
	}
		 
}