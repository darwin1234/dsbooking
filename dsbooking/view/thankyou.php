<?php get_header(); ?>

<div style="float:left; background:#fff; border-top:4px solid #5b9b3c; padding:0; padding-bottom:20px; margin-bottom:40px; width:700px;">
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
		
		//http://162.144.249.154/~gibraltartours/wp-content/uploads/2016/01/gbt-name-rev-rev.png
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
				ctx.fillText("<?php echo $key; ?>: <?php echo $value;?> ",10, newLine += 28);
			<?php } ?>	
		<?php } ?>
		
	
	    var dot2 ="";
		for(var i = 0; i<myCanvas.width; i++){
			 dot2 += ".";
		}
		ctx.fillText(dot2,0,320);
		ctx.fillText("Total Amount: <?php echo $_SESSION['total']; ?> ",10,340);
};
</script>


<?php get_sidebar();?>
<?php get_footer(); ?>


