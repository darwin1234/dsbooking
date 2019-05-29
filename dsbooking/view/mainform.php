<div id="mainForm" style="display:none;">
	
	<form class="page-content-form" method="post" action="" style="padding:10px;">
		
		  	<div style="float:left; width:50%;">
				
					
					<input type="hidden" name="field4" value="05/16/2018">
					 <div class="col-md-12">
						<div class="form-group">
						  <label for="firstname">First Name<span class="alert">*</span></label>
						  <input type="text"  name="firstname" class="form-control" style="float:right; width:300px;" />
						  <span  id="FIRSTNAMEERR" style="color:red!important; display:block; font-size:10px;"></span>
						   <label for="lastname">Last Name<span class="alert">*</span></label>
						  <input type="text"  name="lastname" class="form-control"  style=" float:right;width:300px;" />
						  <span   id="LASTNAMEERR" style="color:red!important; display:block; font-size:10px;"></span>
						</div>
					  </div><!-- /.col -->
					 	
				 
		
				<div class="col-md-6">
					<div class="form-group">
					  <label for="exampleInputEmail1">Email address<span class="alert">*</span></label>
					  <input type="email" name="email" class="form-control" style=" float:right;width:300px;" >
					  <span id="EMAILERR" style="color:red!important; display:block; font-size:10px;"></span>
					  <label for="contactno">Contact No<span class="alert">*</span></label>
					   <input type="text" name="contactnumber" class="form-control"  style="float:right; width:300px;" >
				       <span  id="CONTACTNUMBERERR" style="color:red!important; display:block; font-size:10px;"></span>	
					</div>
				  </div><!-- /.col -->
			 	
		
			  <div class="col-md-6">
				<div class="form-group">
				  <label for="noofperson">Number of Adults<span class="alert">*</span></label>
					<input type="text" name="noofadults" class="form-control"   style="float:right; width:300px;" >
					<span  id="NOOFADULTSERR" style="color:red!important; display:block; font-size:10px;"></span>
				</div>
			  </div><!-- /.col -->
			  <div class="col-md-6">
				<div class="form-group">
				  <label for="noofperson">Number of Children<span class="alert">*</span></label>
					<input type="text" name="noofchildren" class="form-control"  style="float:right; width:300px;" >
					<span  id="NOOFCHILDRENERR" style="color:red!important; display:block; font-size:10px;"></span>
				</div>
			  </div><!-- /.col -->
			
			
		 
		 
		
		</div>
		<div style="float:right; width:500px;">
			<div class="form-group">
					  <small id="PGATEWAYMETHODERR" class="form-text text-muted" style="color:red!important; display:block;"></small>	
					  <ul style="background:#ebe9eb; margin:0; padding:10px; width:100%;">
						<li style="height:50px; list-style:none;"><strong><input type="radio" name="pmethod" value="1" style="float:left; margin-top:6px; margin-right:10px;">Paypal:</strong><img src="<?php echo pluginsurl;?>/pgateway/pmethod/images/AM_mc_vs_dc_ae.jpg" style="width:150px; margin-top:-6px; float:right;"> </li>
						<li style="height:50px; list-style:none;"><strong><input type="radio" name="pmethod" value="2" style="float:left; margin-top:6px; margin-right:10px;">Cenpos:</strong> </li>
						
					  </ul>	
					<label for="Name">Message</label>
					<textarea class="form-control" name="message" style="height:200px; width:100%;"></textarea>
				</div>
				<div style="width:100%; height:20px; padding:40px;"></div>
			  <button type="submit" name="bookbow" class="btn btn-primary" style="float:right; background:#87c6fd;">Submit</button>
		</div>
		</form>
	</div>