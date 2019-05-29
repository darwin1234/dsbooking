<?php 
class mainAdmin{
	
	public function DsEvent(){
		global $wpdb;
		if(isset($_GET['delete'])){ 
			$wpdb->query("DELETE FROM wp_booking WHERE ID='". $_GET['delete'] ."'");
			return 1;
		}
		return 0;
	}
	

	 
	public function bookingdashboard(){ 
			if($this->DsEvent() == 1){} //delete function
			/*?>
			<div style='background:#fff; position: relative; width: 94%; margin: 0 auto; margin-left: 0; padding-top: 20px; padding: 10px; margin-top: 37px; overflow:auto;'>
				<?php 
					require_once('includes/body1.php'); 
				?>
			</div>
		
			<?php*/ 
	}
	
	public function viewSearch($post_type){
			?>
			<div style='position: relative; width: 100%; margin: 0 auto; margin-left: 0; padding-top: 20px; padding: 10px; background: #fff; margin-top: 37px;'>
			<form method='POST'  id="dsformsearch" style='float:left; width: 100%;'><input type='text' name='search' style='float:left; height: 49px; margin-top: 2px; width:57%;' placeholder="SEARCH"><?php echo $this->dropdownCat($post_type); ?><input type='submit' name='searchbtn' value='search' style='float: left; height: 49px; background:#3e82e8; border: 0; color: #fff; width: 99px;'/></form>						
			</div>
			<?php 	
	}
	
}	