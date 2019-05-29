<?php 

global $wpdb;
$SQL='SELECT * FROM wp_booking2 WHERE ID=' . (int)$_GET['view'];
//echo var_dump($wpdb->get_results($SQL));
$Data = $wpdb->get_results($SQL);


//array(1) { [0]=> object(stdClass)#1447 (16) { ["ID"]=> string(2) "18" ["firstname"]=> string(5) "Denny" ["lastname"]=> string(4) "Sese" ["email"]=> string(19) "dennysese@gmail.com" 
//["tourname"]=> string(13) "Half Day Tour" ["noofperson"]=> string(2) "10" ["noofadults"]=> string(1) "0" 
//["noofchildren"]=> string(1) "0" ["price"]=> string(2) "45" ["date"]=> string(10) "2018-02-10" ["message"]=> string(67)
// "hjkhdkjhaksdfhkhkfaskhsadfkjhjkdgkjhadfgkdfhgjklhadfghkdafhghdfhdfg" ["status"]=> string(1) "0" ["datepaid"]=> string(10) "0000-00-00" 
///["bookingdate"]=> string(10) "2018-02-20" ["contactno"]=> string(10) "2147483647" ["url"]=> string(0) "" } }
//echo "<pre>";
//echo var_dump($Data);
//echo "</pre>";
?>
<div class="container"  style="width:100%;">
<div class="panel panel-primary">
       <div class="alert alert-success" style="background: #34495E; color: #fff; border-color: #34495E; border-radius: 0;">
				<h5>Clients Info</h5>
			</div>
            <div class="panel-body">
				<p>FirstName: <?php echo $Data[0]->firstname; ?> </p>
				<p>LastName: <?php echo $Data[0]->lastname; ?> </p>
				<p>Email: <?php echo $Data[0]->email; ?> </p>
				<p>TourType: <?php echo $Data[0]->tourname; ?> </p>
				<p>No of Adults: <?php echo $Data[0]->noofadults; ?> </p>
				<p>No of Children: <?php echo $Data[0]->noofchildren; ?> </p>
				<p>Price: <?php echo $Data[0]->price; ?> </p>
				<p>Date Created: <?php echo $Date[0]->datepaid;  ?> </p>
				<p>Status: <?php echo $Date[0]->status;  ?> </p>
				<p>Booking Date: <?php echo $Date[0]->bookingdate;  ?> </p>
				<p>Contactno: <?php echo $Date[0]->contactno;  ?> </p>
				<p>Message: <?php echo $Data[0]->message; ?></p>
			</div>
</div>
</div>