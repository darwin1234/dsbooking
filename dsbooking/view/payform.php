<?php get_header(); ?><?php 
global  $wpdb;
session_start();
$custom = get_post_custom($post->ID);
	

	$locality                               = $custom['locality'][0];
	$country                                = $custom['country'][0];
	$dsAuthor                               = $custom['dsAuthor'][0];
	$dsroute                                = $custom['route'][0];
	$dslocality                             = $custom['locality'][0];
	$dsadministrative_area_level_1          = $custom['administrative_area_level_1'][0];
	$dspostal_code                          = $custom['postal_code'][0];
	$dsdsplace                              = $custom['dsplace'][0];
	$dslat                                  = $custom['dslat'][0];  
	$dslong                                 = $custom['dslong'][0];     
	$street_number                          = $custom['street_number'][0];  
    $email                             		= $custom['email'][0];
    $contact                            	= $custom['contact'][0];
    $socialcontact                      	= $custom['socialcontact'][0];
    $website                           	 	= $custom['website'][0];
    $about                             		= $custom['about'][0];
    $statement                          	= $custom['statement'][0];
    $language                           	= $custom['language'][0];
    $experience                        		= $custom['experience'][0];
    $education                          	= $custom['education'][0];
    $honoursandawards                   	= $custom['honoursandawards'][0];

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	
	<main class="tg-page-wrapper tg-haslayout" id="main">
		<div class="tg-userbanner tg-haslayout parallax-window" data-appear-top-offset="600" data-image-src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/10/DOCTOR.jpg" data-parallax="scroll" id="tg-userbanner">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 col-xs-12">
						<div class="tg-userbanner-content">
							<h1><?php the_title(); ?></h1><span>Doctor</span>
							<ul class="tg-likestars">
								<li>
									<div class="feature-rating user-star-rating">
										<span class="tg-stars star-rating"><span style="width:70%"></span></span> <em>3.5<sub>/5</sub></em>
									</div>
								</li>
								<li>
									<a class="tg-like add-to-fav" data-view_type="v1" data-wl_id="333" href="javascript:;"><i class="fa fa-heart"></i></a>
								</li>
								<li><span>643&nbsp;view(s)</span></li>
							</ul><a href="?edit=1" class="tg-btn tg-btn-lg make-appointment-btn" data-target=".tg-user-modal" data-toggle="modal" type="button">EDIT PROFILE</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="container">
			<div class="row">
				<div class="tg-userdetail appointment-enabled">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<aside class="tg-sidebar" id="tg-sidebar">
							<div class="tg-widget tg-widgetuserdetail">
								<figure class="tg-userimg detail-avatar">
									<?php the_post_thumbnail('medium_large'); ?>
									<a class="doc-themetag tg-categorytag sp-av-link" href="" style="background:#3498db">Doctor	</a>
									<figcaption>
										<ul class="tg-featureverified">
											<li class="tg-featuresicon">
												<a href="javascript:;"><i class="fa fa-bolt"></i><span>featured</span></a>
											</li>
											<li class="tg-varified">
												<a href="javascript:;"><i class="fa fa-shield"></i><span>Verified</span></a>
											</li>
										</ul>
									</figcaption>
								</figure>
								<div class="tg-usercontactinfo">
									<h3>Contact Details</h3>
									<ul class="tg-doccontactinfo">
										<li>
											<i class="fa fa-map-marker"></i>
											<address>
												<?php echo $locality.", ".$dsadministrative_area_level_1.","." ".$country; ?>
											</address>
										</li>
										<li><i class="fa fa-envelope-o"></i><?php echo $email; ?></li>
										<li><i class="fa fa-phone"></i> <span><?php echo $contact; ?></span></li>
										<li><i class="fa fa-skype"></i><span><?php echo $socialcontact; ?></span></li>
										<li><i class="fa fa-link"></i><?php echo $website; ?></li>
									</ul>
									<ul class="tg-socialicon-v2">
										<li class="tg-facebook">
											<a href="#"><i class="fa fa-facebook-f"></i></a>
										</li>
										<li class="tg-twitter">
											<a href="#"><i class="fa fa-twitter"></i></a>
										</li>
										<li class="tg-linkedin">
											<a href="#"><i class="fa fa-linkedin"></i></a>
										</li>
										
										<li class="tg-googleplus">
											<a href="#"><i class="fa fa-google-plus"></i></a>
										</li>
					
									</ul><a class="tg-btn tg-btn-lg" href="http://maps.google.com/maps?saddr=&amp;daddr=28%20Gatcombe%20Mews,%20Hanger%20Ln,%20London%20W5%203HF,%20UK" target="_blank">get directions</a>
									<div class="profile-share social-share">
										<h3>Share</h3>
										<ul class="tg-socialiconstwo">
											<li class="tg-facebook">
												<a class="tg-social-facebook" href ="https://www.facebook.com" onclick="window.open(this.href, 'post-share','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-facebook"></i><span>Share on Facebook</span></a>
											</li>
											<li class="tg-twitter">
												<a class="tg-social-twitter" href="https://www.twitter.com" onclick="window.open(this.href,'post-share','left=50,top=50,width=600,height=350,toolbar=0'); return false;"><i class="fa fa-twitter"></i><span>Share on Twitter</span></a>
											</li>
											<li class="tg-googleplus">
												<a class="tg-social-google" href="https://www.googleplus.com" onclick ="window.open(this.href,'post-share','left=450, top=450,width=600,height=450,toolbar=0'); return false;"> <i class="fa fa-google-plus"></i><span>Share on Google +</span></a>
											</li>
											<li class="tg-linkedin">
												<a class="tg-social-linkedin" href=""><i class="fa fa-linkedin"></i><span>Share on LinkedIn</span></a>
											</li>
										</ul>
									</div>
									<div class="tg-usercontatnow">
										<h3>contact now</h3>
										<div class="tg-widgetcontent doc-contact">
											<form class="contact_form tg-usercontactform">
												<fieldset>
													<div class="row">
														<div class="col-sm-12 col-xs-12">
															<div class="form-group">
																<input class="form-control" name="username" placeholder="Name" type="text">
															</div>
														</div>
														<div class="col-sm-12 col-xs-12">
															<div class="form-group">
																<input class="form-control" name="useremail" placeholder="Email" type="email">
															</div>
														</div>
														<div class="col-sm-12 col-xs-12">
															<div class="form-group">
																<input class="form-control" name="userphone" placeholder="Number" type="text">
															</div>
														</div>
														<div class="col-sm-12 col-xs-12">
															<div class="form-group">
																<input class="form-control" name="usersubject" placeholder="Subject" type="text">
															</div>
														</div>
														<div class="col-sm-12 col-xs-12">
															<div class="form-group">
																<textarea class="form-control" name="user_description" placeholder="Message"></textarea>
															</div>
														</div>
														<div class="col-sm-12 col-xs-12">
															<input class="form-control" name="email_to" type="hidden" value="cr@docdirect.com"> <button class="tg-btn contact_me" type="submit">Send</button> <input id="user_security" name="user_security" type="hidden" value="5b707514ff"><input name="_wp_http_referer" type="hidden" value="/wordpress/directory/doctor/carol/">
														</div>
													</div>
												</fieldset>
											</form>
										</div>
									</div>
								</div>
							</div>
						
						</aside>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
						<div class="tg-haslayout provider-sections">
							<div class="tg-section-map">
								<div class="tg-location-map tg-haslayout" id="map_canvas" style="position: relative; overflow: hidden;">
									<div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);">
										<div class="gm-style" style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px;">
											<div style="position: absolute; z-index: 0; left: 0px; top: 0px; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; cursor: url(&quot;https://maps.gstatic.com/mapfiles/openhand_8_8.cur&quot;), default; touch-action: none;" tabindex="0">
												<div style="z-index: 1; position: absolute; left: 50%; top: 50%; transform: translate(0px, 0px);">
													<div style="position: absolute; left: 0px; top: 0px; z-index: 100; width: 100%;">
														<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
															<div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -88, -247);">
																<div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;">
																	<div style="width: 256px; height: 256px;"></div>
																</div>
																<div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;">
																	<div style="width: 256px; height: 256px;"></div>
																</div>
																<div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;">
																	<div style="width: 256px; height: 256px;"></div>
																</div>
																<div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;">
																	<div style="width: 256px; height: 256px;"></div>
																</div>
																<div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;">
																	<div style="width: 256px; height: 256px;"></div>
																</div>
																<div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;">
																	<div style="width: 256px; height: 256px;"></div>
																</div>
																<div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;">
																	<div style="width: 256px; height: 256px;"></div>
																</div>
																<div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;">
																	<div style="width: 256px; height: 256px;"></div>
																</div>
																<div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;">
																	<div style="width: 256px; height: 256px;"></div>
																</div>
																<div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;">
																	<div style="width: 256px; height: 256px;"></div>
																</div>
															</div>
														</div>
													</div>
													<div style="position: absolute; left: 0px; top: 0px; z-index: 101; width: 100%;"></div>
													<div style="position: absolute; left: 0px; top: 0px; z-index: 102; width: 100%;"></div>
													<div style="position: absolute; left: 0px; top: 0px; z-index: 103; width: 100%;">
														<div style="position: absolute; left: 0px; top: 0px; z-index: -1;">
															<div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -88, -247);">
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 256px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 256px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -256px; top: 0px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 0px; top: 0px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 0px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 256px; top: 256px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 256px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: -512px; top: 0px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 0px;"></div>
																<div style="width: 256px; height: 256px; overflow: hidden; position: absolute; left: 512px; top: 256px;"></div>
															</div>
														</div>
														<div style="width: 40px; height: 60px; overflow: hidden; position: absolute; left: -20px; top: -60px; z-index: 0; animation-duration: 500ms; animation-iteration-count: 1; animation-name: _gm8449;"><img alt="" draggable="false" src="//themographics.com/wordpress/directory/wp-content/uploads/2016/04/02.png" style="position: absolute; left: 0px; top: 0px; user-select: none; width: 40px; height: 60px; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div>
													</div>
													<div style="position: absolute; left: 0px; top: 0px; z-index: 0;">
														<div style="position: absolute; z-index: 1; transform: matrix(1, 0, 0, 1, -88, -247);">
															<div style="position: absolute; left: 0px; top: 256px; width: 256px; height: 256px;"><img alt="" draggable="false" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1022!3i681!4i256!2m3!1e0!2sm!3i426128780!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnfHAudjpzaW1wbGlmaWVkfHAuaDojZmYwMDAw!4e0!23i1301875&amp;key=AIzaSyB-v7mDZ8e1GDluhDZrhF_T44GxlJprqr0&amp;token=106279" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
															<div style="position: absolute; left: -256px; top: 256px; width: 256px; height: 256px;"><img alt="" draggable="false" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1021!3i681!4i256!2m3!1e0!2sm!3i426128780!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnfHAudjpzaW1wbGlmaWVkfHAuaDojZmYwMDAw!4e0!23i1301875&amp;key=AIzaSyB-v7mDZ8e1GDluhDZrhF_T44GxlJprqr0&amp;token=18018" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
															<div style="position: absolute; left: -256px; top: 0px; width: 256px; height: 256px;"><img alt="" draggable="false" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1021!3i680!4i256!2m3!1e0!2sm!3i426128780!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnfHAudjpzaW1wbGlmaWVkfHAuaDojZmYwMDAw!4e0!23i1301875&amp;key=AIzaSyB-v7mDZ8e1GDluhDZrhF_T44GxlJprqr0&amp;token=19982" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
															<div style="position: absolute; left: 0px; top: 0px; width: 256px; height: 256px;"><img alt="" draggable="false" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1022!3i680!4i256!2m3!1e0!2sm!3i426128780!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnfHAudjpzaW1wbGlmaWVkfHAuaDojZmYwMDAw!4e0!23i1301875&amp;key=AIzaSyB-v7mDZ8e1GDluhDZrhF_T44GxlJprqr0&amp;token=108243" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
															<div style="position: absolute; left: 256px; top: 0px; width: 256px; height: 256px;"><img alt="" draggable="false" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1023!3i680!4i256!2m3!1e0!2sm!3i426128780!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnfHAudjpzaW1wbGlmaWVkfHAuaDojZmYwMDAw!4e0!23i1301875&amp;key=AIzaSyB-v7mDZ8e1GDluhDZrhF_T44GxlJprqr0&amp;token=65433" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
															<div style="position: absolute; left: 256px; top: 256px; width: 256px; height: 256px;"><img alt="" draggable="false" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1023!3i681!4i256!2m3!1e0!2sm!3i426128780!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnfHAudjpzaW1wbGlmaWVkfHAuaDojZmYwMDAw!4e0!23i1301875&amp;key=AIzaSyB-v7mDZ8e1GDluhDZrhF_T44GxlJprqr0&amp;token=63469" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
															<div style="position: absolute; left: -512px; top: 256px; width: 256px; height: 256px;"><img alt="" draggable="false" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1020!3i681!4i256!2m3!1e0!2sm!3i426128769!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnfHAudjpzaW1wbGlmaWVkfHAuaDojZmYwMDAw!4e0!23i1301875&amp;key=AIzaSyB-v7mDZ8e1GDluhDZrhF_T44GxlJprqr0&amp;token=64432" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
															<div style="position: absolute; left: -512px; top: 0px; width: 256px; height: 256px;"><img alt="" draggable="false" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1020!3i680!4i256!2m3!1e0!2sm!3i426128756!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnfHAudjpzaW1wbGlmaWVkfHAuaDojZmYwMDAw!4e0!23i1301875&amp;key=AIzaSyB-v7mDZ8e1GDluhDZrhF_T44GxlJprqr0&amp;token=41452" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
															<div style="position: absolute; left: 512px; top: 0px; width: 256px; height: 256px;"><img alt="" draggable="false" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1024!3i680!4i256!2m3!1e0!2sm!3i426128780!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnfHAudjpzaW1wbGlmaWVkfHAuaDojZmYwMDAw!4e0!23i1301875&amp;key=AIzaSyB-v7mDZ8e1GDluhDZrhF_T44GxlJprqr0&amp;token=22623" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
															<div style="position: absolute; left: 512px; top: 256px; width: 256px; height: 256px;"><img alt="" draggable="false" src="https://maps.googleapis.com/maps/vt?pb=!1m5!1m4!1i11!2i1024!3i681!4i256!2m3!1e0!2sm!3i426128780!3m14!2sen-US!3sUS!5e18!12m1!1e68!12m3!1e37!2m1!1ssmartmaps!12m4!1e26!2m2!1sstyles!2zcy50OjE3fHMuZTpnfHAudjpzaW1wbGlmaWVkfHAuaDojZmYwMDAw!4e0!23i1301875&amp;key=AIzaSyB-v7mDZ8e1GDluhDZrhF_T44GxlJprqr0&amp;token=20659" style="width: 256px; height: 256px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
														</div>
													</div>
												</div>
												<div class="gm-style-pbc" style="z-index: 2; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; opacity: 0;">
													<p class="gm-style-pbt"></p>
												</div>
												<div style="z-index: 3; position: absolute; height: 100%; width: 100%; padding: 0px; border-width: 0px; margin: 0px; left: 0px; top: 0px; touch-action: pan-x pan-y;">
													<div style="z-index: 4; position: absolute; left: 50%; top: 50%; transform: translate(0px, 0px);">
														<div style="position: absolute; left: 0px; top: 0px; z-index: 104; width: 100%;"></div>
														<div style="position: absolute; left: 0px; top: 0px; z-index: 105; width: 100%;"></div>
														<div style="position: absolute; left: 0px; top: 0px; z-index: 106; width: 100%;">
															<div class="gmnoprint" style="width: 40px; height: 60px; overflow: hidden; position: absolute; opacity: 0.01; cursor: pointer; touch-action: none; left: -20px; top: -60px; z-index: 0;" title="Dr.Carol"><img alt="" draggable="false" src="//themographics.com/wordpress/directory/wp-content/uploads/2016/04/02.png" style="position: absolute; left: 0px; top: 0px; user-select: none; width: 40px; height: 60px; border: 0px; padding: 0px; margin: 0px; max-width: none; opacity: 1;"></div>
															<div></div>
														</div>
														<div style="position: absolute; left: 0px; top: 0px; z-index: 107; width: 100%;">
															<div class="infoBox" style="position: absolute; visibility: visible; width: 300px; left: 65px; bottom: -15px;">
																<img align="right" src="https://themographics.com/wordpress/directory/wp-content/themes/docdirect/images/close.gif" style=" position: relative; cursor: pointer; margin: 2px;">
																<div class="directory-detail">
																	<div class="tg-mapmarker">
																		<figure>
																			<?php the_post_thumbnail('small'); ?>
																		</figure>
																		<div class="tg-mapmarkercontent">
																			<h3><a href="https://themographics.com/wordpress/directory/doctor/carol/"><?php the_title(); ?></a></h3>
																			<ul class="tg-likestars">
																				<li>
																					<div class="feature-rating user-star-rating">
																						<span class="tg-stars star-rating"><span style="width:70%"></span></span>
																					</div>
																				</li>
																				<li>
																					<a class="tg-like add-to-fav" data-view_type="v1" data-wl_id="333" href="javascript:;"><i class="fa fa-heart"></i></a>
																				</li>
																				<li>643&nbsp;view(s)</li>
																			</ul>
																		</div>
																	</div>
																</div>
															</div>
														</div>
													</div>
												</div>
											</div><iframe frameborder="0" src="about:blank" style="z-index: -1; position: absolute; width: 100%; height: 100%; top: 0px; left: 0px; border: none;"></iframe>
											<div style="margin-left: 5px; margin-right: 5px; z-index: 1000000; position: absolute; left: 0px; bottom: 0px;">
												<a href="https://maps.google.com/maps?ll=51.512658,-0.290866&amp;z=11&amp;hl=en-US&amp;gl=US&amp;mapclient=apiv3" rel="noopener" style="position: static; overflow: visible; float: none; display: inline;" target="_blank" title="Click to see this area on Google Maps">
												<div style="width: 66px; height: 26px; cursor: pointer;"><img alt="" draggable="false" src="https://maps.gstatic.com/mapfiles/api-3/images/google_white5.png" style="position: absolute; left: 0px; top: 0px; width: 66px; height: 26px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></div></a>
											</div>
											<div style="background-color: white; padding: 15px 21px; border: 1px solid rgb(171, 171, 171); font-family: Roboto, Arial, sans-serif; color: rgb(34, 34, 34); box-shadow: rgba(0, 0, 0, 0.2) 0px 4px 16px; z-index: 10000002; display: none; width: 256px; height: 148px; position: absolute; left: 274px; top: 60px;">
												<div style="padding: 0px 0px 10px; font-size: 16px;">
													Map Data
												</div>
												<div style="font-size: 13px;">
													Map data ©2018 Google
												</div>
												<div style="width: 13px; height: 13px; overflow: hidden; position: absolute; opacity: 0.7; right: 12px; top: 12px; z-index: 10000; cursor: pointer;"><img alt="" draggable="false" src="https://maps.gstatic.com/mapfiles/api-3/images/mapcnt6.png" style="position: absolute; left: -2px; top: -336px; width: 59px; height: 492px; user-select: none; border: 0px; padding: 0px; margin: 0px; max-width: none;"></div>
											</div>
											<div class="gmnoprint" style="z-index: 1000001; position: absolute; right: 155px; bottom: 0px; width: 121px;">
												<div class="gm-style-cc" draggable="false" style="user-select: none; height: 14px; line-height: 14px;">
													<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
														<div style="width: 1px;"></div>
														<div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
													</div>
													<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
														<a style="text-decoration: none; cursor: pointer; display: none;">Map Data</a><span>Map data ©2018 Google</span>
													</div>
												</div>
											</div>
											<div class="gmnoscreen" style="position: absolute; right: 0px; bottom: 0px;">
												<div style="font-family: Roboto, Arial, sans-serif; font-size: 11px; color: rgb(68, 68, 68); direction: ltr; text-align: right; background-color: rgb(245, 245, 245);">
													Map data ©2018 Google
												</div>
											</div>
											<div class="gmnoprint gm-style-cc" draggable="false" style="z-index: 1000001; user-select: none; height: 14px; line-height: 14px; position: absolute; right: 0px; bottom: 0px;">
												<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
													<div style="width: 1px;"></div>
													<div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
												</div>
												<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
													<a href="https://www.google.com/intl/en-US_US/help/terms_maps.html" rel="noopener" style="text-decoration: none; cursor: pointer; color: rgb(68, 68, 68);" target="_blank">Terms of Use</a>
												</div>
											</div><button aria-label="Toggle fullscreen view" draggable="false" style="background: none rgb(255, 255, 255); border: 0px; margin: 10px 14px; padding: 0px; position: absolute; cursor: pointer; user-select: none; width: 25px; height: 25px; overflow: hidden; display: none; top: 0px; right: 0px;" title="Toggle fullscreen view" type="button"><img alt="" class="gm-fullscreen-control" draggable="false" src="https://maps.gstatic.com/mapfiles/api-3/images/sv9.png" style="position: absolute; left: -52px; top: -86px; width: 164px; height: 175px; user-select: none; border: 0px; padding: 0px; margin: 0px;"></button>
											<div class="gm-style-cc" draggable="false" style="user-select: none; height: 14px; line-height: 14px; display: none; position: absolute; right: 0px; bottom: 0px;">
												<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
													<div style="width: 1px;"></div>
													<div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
												</div>
												<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
													<a href="https://www.google.com/maps/@51.512658,-0.290866,11z/data=!10m1!1e1!12b1?source=apiv3&amp;rapsrc=apiv3" rel="noopener" style="font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); text-decoration: none; position: relative;" target="_blank" title="Report errors in the road map or imagery to Google">Report a map error</a>
												</div>
											</div>
											<div class="gm-style-cc" draggable="false" style="position: absolute; user-select: none; height: 14px; line-height: 14px; right: 72px; bottom: 0px;">
												<div style="opacity: 0.7; width: 100%; height: 100%; position: absolute;">
													<div style="width: 1px;"></div>
													<div style="background-color: rgb(245, 245, 245); width: auto; height: 100%; margin-left: 1px;"></div>
												</div>
												<div style="position: relative; padding-right: 6px; padding-left: 6px; font-family: Roboto, Arial, sans-serif; font-size: 10px; color: rgb(68, 68, 68); white-space: nowrap; direction: ltr; text-align: right; vertical-align: middle; display: inline-block;">
													<span>2 km&nbsp;</span>
													<div style="position: relative; display: inline-block; height: 8px; bottom: -1px; width: 46px;">
														<div style="width: 100%; height: 4px; position: absolute; left: 0px; top: 0px;"></div>
														<div style="width: 4px; height: 8px; left: 0px; top: 0px; background-color: rgb(255, 255, 255);"></div>
														<div style="width: 4px; height: 8px; position: absolute; background-color: rgb(255, 255, 255); right: 0px; bottom: 0px;"></div>
														<div style="position: absolute; background-color: rgb(102, 102, 102); height: 2px; left: 1px; bottom: 1px; right: 1px;"></div>
														<div style="position: absolute; width: 2px; height: 6px; left: 1px; top: 1px; background-color: rgb(102, 102, 102);"></div>
														<div style="width: 2px; height: 6px; position: absolute; background-color: rgb(102, 102, 102); bottom: 1px; right: 1px;"></div>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>
								<div class="map-controls">
									<span id="doc-mapplus"><i class="fa fa-plus"></i></span> <span id="doc-mapminus"><i class="fa fa-minus"></i></span> <span id="doc-lock"><i class="fa fa-lock"></i></span>
								</div>
								<script>
								                        jQuery(document).ready(function() {
								                            docdirect_init_detail_map_script({"status":"found","users_list":[{"latitude":"51.512658","longitude":"-0.290866","title":"Dr.Carol","name":"Dr Carol","email":"cr@docdirect.com","phone_number":"57 235 856843","address":"28 Gatcombe Mews, Hanger Ln, London W5 3HF, UK","group":"","icon":"\/\/themographics.com\/wordpress\/directory\/wp-content\/uploads\/2016\/04\/02.png","html":{"content":"<div class=\"tg-mapmarker\"><figure><img width=\"60\" heigt=\"60\" src=\"https:\/\/themographics.com\/wordpress\/directory\/wp-content\/uploads\/2016\/04\/img-04-1-150x150.jpg\" alt=\"User\"><\/figure><div class=\"tg-mapmarkercontent\"><h3><a href=\"https:\/\/themographics.com\/wordpress\/directory\/doctor\/carol\/\">Dr Carol<\/a><\/h3><span>Doctor<\/span><ul class=\"tg-likestars\"><li>        <div class=\"feature-rating user-star-rating\">\r\n            <span class=\"tg-stars star-rating\">\r\n                <span style=\"width:70%\"><\/span>\r\n            <\/span>\r\n            \r\n                    <\/div>\r\n        <\/li><li><a data-view_type=\"v1\" class=\"tg-like add-to-fav\" data-wl_id=\"333\" href=\"javascript:;\"><i class=\"fa fa-heart\"><\/i><\/a><\/li><li>643&nbsp;view(s)<\/li><\/ul><\/div>"}}]});
								                        }); 
								</script>
							</div>
						
							<div class="tg-aboutuser">
								<div class="tg-userheading">
									<h2>About&nbsp;Dr Carol</h2>
								</div>
								<div class="tg-description">
									<p></p>
									<textarea class="form-control" name="about" placeholder="About" readonly><?php echo $about; ?></textarea>
								</div>
								
							</div>
							<div class="tg-userheading">
									<h2>Statement</h2>
									<div class="professional-statements">
										<textarea class="form-control" name="statement" placeholder="Statement" readonly><?php echo $statement; ?></textarea>
									</div>
								</div>
							<div class="tg-honourawards tg-listview-v3 user-section-style">
								<div class="tg-userheading">
									<h2>Languages</h2>
								</div>
								<div class="tg-doctor-profile">
									<ul class="tg-tags">
										<?php the_terms( get_the_ID(), 'dslanguage', ' ', ' / ' ); ?>
									</ul>
								</div>
							</div>
						
							<div class="tg-innetworkinsurrance tg-tagsstyle tg-listview-v3 user-section-style">
								<div class="tg-userheading">
									<h2>In-Network Insurance</h2>
								</div>
								<div class="see-more-info">
									<p><a href="javascript:;">See which insurance(s) covers your care. <span><i class="fa fa-plus"></i></span></a></p>
								</div>
								<ul class="elm-display-none insurance-wrap">
									<li><span>Kaiser Foundation Group</span> <span class="insurance_logo"><img src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/12/partner-3.png"></span></li>
									<li><span>UnitedHealth Group</span> <span class="insurance_logo"><img src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/12/partner-2.png"></span></li>
									<li><span>Wellpoint Inc. Group</span> <span class="insurance_logo"><img src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/12/partner-1.png"></span></li>
								</ul>
							</div>
							<div class="tg-userexperience">
								<div class="tg-userheading">
									<h2><i class="fa fa-briefcase"></i>Experience</h2>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="experience" placeholder="Experience" readonly><?php echo $experience; ?></textarea>
								</div>
							</div>
							<div class="tg-userexperience tg-userqualification">
								<div class="tg-userheading">
									<h2><i class="fa fa-graduation-cap"></i>Education</h2>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="education" placeholder="Education" readonly><?php echo $education; ?></textarea>
								</div>
							</div>
							<div class="tg-userexperience tg-honourawards">
								<div class="tg-userheading">
									<h2><i class="fa fa-trophy"></i>Honours &amp; Awards</h2>
								</div>
								<div class="form-group">
									<textarea class="form-control" name="education" placeholder="Education" readonly><?php echo $education; ?></textarea>
								</div>
							</div>
							<div class="tg-widgetrelatedposts sp-provider-articles">
								<div class="tg-widgettitle">
									<h3>Articles&nbsp;<span class="written-by-sp">Written by&nbsp;Dr Carol</span></h3>
								</div>
								<div class="tg-widgetcontent">
									<ul>
										<li>
											<div class="tg-serviceprovidercontent">
												<div class="tg-companylogo">
													<a href="https://themographics.com/wordpress/directory/article/thinning-hair-how-it-affects-both-men-and-women/"><img alt="Related" src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/08/img-06-150x150.jpg"></a>
												</div>
												<div class="tg-companycontent">
													<div class="tg-title">
														<h3><a href="https://themographics.com/wordpress/directory/article/thinning-hair-how-it-affects-both-men-and-women/">Thinning Hair: How it affects both Men and Women</a></h3>
													</div>
													<ul class="tg-matadata">
														<li>
															<a href="https://themographics.com/wordpress/directory/article/thinning-hair-how-it-affects-both-men-and-women/">Read More</a>
														</li>
													</ul>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="prices-list-wrap" style="display:none;">
								<div class="tg-companyfeaturebox tg-services">
									<div class="tg-userheading">
										<h2><i aria-hidden="true" class="fa fa-money"></i>Prices/Services List</h2>
									</div>
									<div class="tg-accordion" id="tg-accordion">
										<div class="tg-service tg-panel">
											<div class="tg-accordionheading tg-active">
												<h4><span>BIPOLAR DISORDERS</span><span>$225</span></h4>
											</div>
											<div class="tg-panelcontent" style="">
												<div class="tg-description">
													<p>Oral Surgery &amp; Medicine resources are concerned with basic, applied, and clinical aspects of oral infections and diseases, including thseir epidemiology, diagnosis, treatment, and rehabilitation. Specialties such as oral pathology/biology, oral epidemiology, oral rehabilitation, and oral implants are also included. Facial pain and craniomandibular resources are also covered in this category.</p>
												</div>
											</div>
										</div>
										<div class="tg-service tg-panel">
											<div class="tg-accordionheading">
												<h4><span>Medical/Surgical Unit</span><span>$1500</span></h4>
											</div>
											<div class="tg-panelcontent" style="display: none;">
												<div class="tg-description">
													<p>Oral Surgery &amp; Medicine resources are concerned with basic, applied, and clinical aspects of oral infections and diseases, including their epidemiology, diagnosis, treatment, and rehabilitation. Specialties such as oral pathology/biology, oral epidemiology, oral rehabilitation, and oral implants are also included. Facial pain and craniomandibular resources are also covered in this category.</p>
												</div>
											</div>
										</div>
										<div class="tg-service tg-panel">
											<div class="tg-accordionheading">
												<h4><span>Inpatient Rehabilitation</span><span>$1091.44</span></h4>
											</div>
											<div class="tg-panelcontent" style="display: none;">
												<div class="tg-description">
													<p>Oral Surgery &amp; Medicine resources are concerned with basic, applied, and clinical aspects of oral infections and diseases, including their epidemiology, diagnosis, treatment, and rehabilitation. Specialties such as oral pathology/biology, oral epidemiology, oral rehabilitation, and oral implants are also included. Facial pain and craniomandibular resources are also covered in this category.</p>
												</div>
											</div>
										</div>
										<div class="tg-service tg-panel">
											<div class="tg-accordionheading">
												<h4><span>Cesarean Section Delivery</span><span>$13182.79</span></h4>
											</div>
											<div class="tg-panelcontent" style="display: none;">
												<div class="tg-description">
													<p>Oral Surgery &amp; Medicine resources are concerned with basic, applied, and clinical aspects of oral infections and diseases, including their epidemiology, diagnosis, treatment, and rehabilitation. Specialties such as oral pathology/biology, oral epidemiology, oral rehabilitation, and oral implants are also included. Facial pain and craniomandibular resources are also covered in this category.</p>
												</div>
											</div>
										</div>
										<div class="tg-service tg-panel">
											<div class="tg-accordionheading">
												<h4><span>Pediatric Evaluation – Level 1</span><span>$387.91</span></h4>
											</div>
											<div class="tg-panelcontent" style="display: none;">
												<div class="tg-description">
													<p>Oral Surgery &amp; Medicine resources are concerned with basic, applied, and clinical aspects of oral infections and diseases, including their epidemiology, diagnosis, treatment, and rehabilitation. Specialties such as oral pathology/biology, oral epidemiology, oral rehabilitation, and oral implants are also included. Facial pain and craniomandibular resources are also covered in this category.</p>
												</div>
											</div>
										</div>
									</div>
								</div>
							</div>
							<div class="our-teams-wrap" style="display:none;">
								<div class="tg-companyfeaturebox tg-ourteam">
									<div class="tg-userheading">
										<h2>Our Team</h2>
									</div>
									<ul class="tg-teammembers">
										<li data-id="340" id="team-340">
											<div class="tg-teammember">
												<figure>
													<a href="https://themographics.com/wordpress/directory/doctor/professional/"><img height="60" src="https://themographics.com/wordpress/directory/wp-content/uploads/2017/01/Doc_05-150x150.jpg" width="60"></a>
												</figure>
												<div class="tg-memberinfo">
													<h5><a href="https://themographics.com/wordpress/directory/doctor/professional/">VICK Jian</a></h5><a href="https://themographics.com/wordpress/directory/doctor/professional/">View Full Profile</a>
												</div>
											</div>
										</li>
										<li data-id="337" id="team-337">
											<div class="tg-teammember">
												<figure>
													<a href="https://themographics.com/wordpress/directory/doctor/anna/"><img height="60" src="https://themographics.com/wordpress/directory/wp-content/uploads/2017/01/Doc_05-150x150.jpg" width="60"></a>
												</figure>
												<div class="tg-memberinfo">
													<h5><a href="https://themographics.com/wordpress/directory/doctor/anna/">Dr Anna</a></h5><a href="https://themographics.com/wordpress/directory/doctor/anna/">View Full Profile</a>
												</div>
											</div>
										</li>
										<li data-id="336" id="team-336">
											<div class="tg-teammember">
												<figure>
													<a href="https://themographics.com/wordpress/directory/doctor/celia/"><img height="60" src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-07-1-150x150.jpg" width="60"></a>
												</figure>
												<div class="tg-memberinfo">
													<h5><a href="https://themographics.com/wordpress/directory/doctor/celia/">Dr Celia</a></h5><a href="https://themographics.com/wordpress/directory/doctor/celia/">View Full Profile</a>
												</div>
											</div>
										</li>
										<li data-id="335" id="team-335">
											<div class="tg-teammember">
												<figure>
													<a href="https://themographics.com/wordpress/directory/doctor/ella/"><img height="60" src="https://themographics.com/wordpress/directory/wp-content/uploads/2017/01/Doc_01-150x150.jpg" width="60"></a>
												</figure>
												<div class="tg-memberinfo">
													<h5><a href="https://themographics.com/wordpress/directory/doctor/ella/">Dr Ella</a></h5><a href="https://themographics.com/wordpress/directory/doctor/ella/">View Full Profile</a>
												</div>
											</div>
										</li>
										<li data-id="334" id="team-334">
											<div class="tg-teammember">
												<figure>
													<a href="https://themographics.com/wordpress/directory/doctor/delia/"><img height="60" src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-05-1-150x150.jpg" width="60"></a>
												</figure>
												<div class="tg-memberinfo">
													<h5><a href="https://themographics.com/wordpress/directory/doctor/delia/">Dr Delia</a></h5><a href="https://themographics.com/wordpress/directory/doctor/delia/">View Full Profile</a>
												</div>
											</div>
										</li>
									</ul>
								</div>
							</div>
							<div class="tg-presentationvideo" style="display:none;">
								<div class="tg-userheading">
									<h2>Presentation Video</h2>
								</div>
								<div class="tg-video doc-haslayout">
									<iframe allowfullscreen frameborder="0" height="200" src="https://www.youtube.com/embed/0aNNYEUARAk" width="368"></iframe>
								</div>
							</div>
							<div class="tg-userphotogallery" style="display:none;">
								<div class="tg-userheading">
									<h2>Photo Gallery</h2>
								</div>
								<ul>
									<li>
										<figure>
											<a data-rel="prettyPhoto[iframe]" href="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-10.jpg" rel="prettyPhoto[iframe]"><img alt="img-10" src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-10-150x150.jpg">
											<figcaption>
												<span class="icon-add"></span>
											</figcaption></a>
										</figure>
									</li>
									<li>
										<figure>
											<a data-rel="prettyPhoto[iframe]" href="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-09.jpg" rel="prettyPhoto[iframe]"><img alt="img-09" src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-09-150x150.jpg">
											<figcaption>
												<span class="icon-add"></span>
											</figcaption></a>
										</figure>
									</li>
									<li>
										<figure>
											<a data-rel="prettyPhoto[iframe]" href="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-08.jpg" rel="prettyPhoto[iframe]"><img alt="img-08" src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-08-150x150.jpg">
											<figcaption>
												<span class="icon-add"></span>
											</figcaption></a>
										</figure>
									</li>
									<li>
										<figure>
											<a data-rel="prettyPhoto[iframe]" href="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-07.jpg" rel="prettyPhoto[iframe]"><img alt="img-07" src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-07-150x150.jpg">
											<figcaption>
												<span class="icon-add"></span>
											</figcaption></a>
										</figure>
									</li>
								</ul>
							</div>
							<div class="detail-panel-wrap tg-haslayout tg-companyfeaturebox" style="display:none;">
								<div class="tg-companyfeaturebox tg-reviews">
									<ul class="tg-reviewstabs" role="tablist">
										<li class="active" role="presentation">
											<a aria-controls="reviews" data-toggle="tab" href="#reviews" role="tab">Reviews</a>
										</li>
										<li role="presentation">
											<a aria-controls="consult" data-toggle="tab" href="#consult" role="tab">Consult Q&amp;A</a>
										</li>
									</ul>
									<div class="tg-tabcontent tab-content">
										<div class="tg-tabpane tab-pane active" id="reviews" role="tabpanel">
											<div class="tg-userreviews">
												<div class="tg-userheading">
													<h2>2&nbsp;&nbsp;Review(s)</h2>
												</div>
												<div class="tg-ratingbox">
													<div class="tg-averagerating">
														<h3>Average Rating</h3><em>3.5</em> <span class="tg-stars"></span>
														<div class="feature-rating user-star-rating">
															<span class="tg-stars"><span class="tg-stars star-rating"><span style="width:70%"></span></span></span>
														</div>
													</div>
													<div class="tg-userskill" id="tg-userskill">
														<div class="tg-skill">
															<span class="tg-skillname">1 Stars</span> <span class="tg-skillpercentage">0%</span>
															<div class="tg-skillbox">
																<div class="tg-skillholder" data-percent="0%">
																	<div class="tg-skillbar"></div>
																</div>
															</div>
														</div>
														<div class="tg-skill">
															<span class="tg-skillname">2 Stars</span> <span class="tg-skillpercentage">40%</span>
															<div class="tg-skillbox">
																<div class="tg-skillholder" data-percent="40%">
																	<div class="tg-skillbar"></div>
																</div>
															</div>
														</div>
														<div class="tg-skill">
															<span class="tg-skillname">3 Stars</span> <span class="tg-skillpercentage">0%</span>
															<div class="tg-skillbox">
																<div class="tg-skillholder" data-percent="0%">
																	<div class="tg-skillbar"></div>
																</div>
															</div>
														</div>
														<div class="tg-skill">
															<span class="tg-skillname">4 Stars</span> <span class="tg-skillpercentage">0%</span>
															<div class="tg-skillbox">
																<div class="tg-skillholder" data-percent="0%">
																	<div class="tg-skillbar"></div>
																</div>
															</div>
														</div>
														<div class="tg-skill">
															<span class="tg-skillname">5 Stars</span> <span class="tg-skillpercentage">100%</span>
															<div class="tg-skillbox">
																<div class="tg-skillholder" data-percent="100%">
																	<div class="tg-skillbar"></div>
																</div>
															</div>
														</div>
													</div>
												</div>
												<ul class="tg-reviewlisting">
													<li>
														<div class="tg-review">
															<figure class="tg-reviewimg">
																<a href="https://themographics.com/wordpress/directory/doctor/steve/"><img alt="Reviewer" src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-01-1-150x150.jpg"></a>
															</figure>
															<div class="tg-reviewcontet">
																<div class="tg-reviewhead">
																	<div class="tg-reviewheadleft">
																		<h3><a href="https://themographics.com/wordpress/directory/doctor/steve/">Dr Steve</a></h3><span>2 years&nbsp;ago</span>
																	</div>
																	<div class="tg-reviewheadright tg-stars star-rating">
																		<span style="width:100%"></span>
																	</div>
																</div>
																<div class="tg-description">
																	<p></p>
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam.</p>
																	<p></p>
																</div>
															</div>
														</div>
													</li>
													<li>
														<div class="tg-review">
															<figure class="tg-reviewimg">
																<a href="https://themographics.com/wordpress/directory/clinic/express-care/"><img alt="Reviewer" src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/6-1-150x150.jpg"></a>
															</figure>
															<div class="tg-reviewcontet">
																<div class="tg-reviewhead">
																	<div class="tg-reviewheadleft">
																		<h3><a href="https://themographics.com/wordpress/directory/clinic/express-care/">Express Care Clinics</a></h3><span>2 years&nbsp;ago</span>
																	</div>
																	<div class="tg-reviewheadright tg-stars star-rating">
																		<span style="width:40%"></span>
																	</div>
																</div>
																<div class="tg-description">
																	<p></p>
																	<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliquat enim ad minim veniam.</p>
																	<p></p>
																</div>
															</div>
														</div>
													</li>
												</ul>
												<div class="tg-leaveyourreview">
													<div class="tg-userheading">
														<h2>Leave Your Review</h2>
													</div><span><a class="tg-btn" data-target=".tg-user-modal" data-toggle="modal" href="javascript:;">Please Login To add Review</a></span>
												</div>
											</div>
										</div>
										<div class="tg-tabpane tab-pane" id="consult" role="tabpanel">
											<div class="tg-askquestion">
												<span class="tg-questionicon"><img alt="Consult Q&amp;A" src="https://themographics.com/wordpress/directory/wp-content/themes/docdirect/framework-customizations/extensions/questionsanswers/static/img/thumbnails/start.png"></span>
												<div class="tg-getanswer">
													<p>Get answers to your queries now</p>
												</div><a class="tg-btn" data-target="#tg-add-questions" data-toggle="collapse" href="javascript:;">Ask Question</a>
												<div class="collapse tg-add-questions" id="tg-add-questions">
													<div class="login-to-add tg-haslayout">
														<a class="tg-btn" data-target=".tg-user-modal" data-toggle="modal" href="javascript:;">Login to add your answer</a>
													</div>
												</div>
											</div>
											<div class="tg-questions">
												<div class="tg-userheading">
													<h2>Questions</h2>
												</div>
											</div>
											<div class="question-panel-wrap tg-haslayout">
												<p>No query answered yet.</p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</main>
	<div id="mapdd" style="height:300px;"></div>
	<script>

	     function initMap() {
	       var myLatLng = {lat: <?php echo $dslat; ?>, lng: <?php echo $dslong; ?>};

	       var map = new google.maps.Map(document.getElementById('mapdd'), {
	         zoom: 10,
	         center: myLatLng
	       });

	       var marker = new google.maps.Marker({
	         position: myLatLng,
	         map: map,
	         title: 'Hello World!'
	       });
	     }
	</script> 
	<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBAD2cR8koCwjb3_IM5G5hBQ_XpPcxHvKU&callback=initMap">
	</script> 
	<script>
	// Get the modal
	var modal = document.getElementById('myModal');

	// Get the button that opens the modal
	var btn = document.getElementById("myBtn");

	// Get the <span> element that closes the modal
	var span = document.getElementsByClassName("close")[0];

	// When the user clicks the button, open the modal 
	btn.onclick = function() {
	   modal.style.display = "block";
	}

	// When the user clicks on <span> (x), close the modal
	span.onclick = function() {
	   modal.style.display = "none";
	}

	// When the user clicks anywhere outside of the modal, close it
	window.onclick = function(event) {
	   if (event.target == modal) {
	       modal.style.display = "none";
	   }
	}
	</script> <?php get_footer();?>
</body>
</html>