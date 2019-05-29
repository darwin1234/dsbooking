<?php get_header(); ?>
 
<?php 
if(isset($_POST['submit']))
{
	update_post_meta(get_the_ID(),'street_number',$_POST['street_number']);
	update_post_meta(get_the_ID(),'route',$_POST['route']);
	update_post_meta(get_the_ID(),'locality',$_POST['locality']);
	update_post_meta(get_the_ID(),'administrative_area_level_1',$_POST['administrative_area_level_1']);
	update_post_meta(get_the_ID(),'postal_code',$_POST['postal_code']);
	update_post_meta(get_the_ID(),'country',$_POST['country']);
	update_post_meta(get_the_ID(),'dslat',$_POST['dslat']);
	update_post_meta(get_the_ID(),'dslong',$_POST['dslong']); 
	update_post_meta(get_the_ID(),'email',$_POST['email']);
	update_post_meta(get_the_ID(),'contact',$_POST['contact']);
	update_post_meta(get_the_ID(),'socialcontact',$_POST['socialcontact']);
	update_post_meta(get_the_ID(),'website',$_POST['website']);
	update_post_meta(get_the_ID(),'about',$_POST['about']);
	update_post_meta(get_the_ID(),'statement',$_POST['statement']);
	update_post_meta(get_the_ID(),'experience',$_POST['experience']);
	update_post_meta(get_the_ID(),'education',$_POST['education']);
	update_post_meta(get_the_ID(),'honoursandawards',$_POST['honoursandawards']);
	update_post_meta(get_the_ID(),'language',json_encode($_POST['language']));
	
}
	
$custom = get_post_custom(get_the_ID());
	$street_number						=$custom['street_number'][0];
	$route								=$custom['route'][0];
	$locality							=$custom['locality'][0];
	$administrative_area_level_1		=$custom['administrative_area_level_1'][0];
	$postal_code						=$custom['postal_code'][0];
	$country							=$custom['country'][0];
	$dslat								=$custom['dslat'][0];
	$dslong								=$custom['dslong'][0];
	$email								=$custom['email'][0];
	$contact							=$custom['contact'][0];
	$socialcontact						=$custom['socialcontact'][0];
	$website							=$custom['website'][0];
	$about								=$custom['about'][0];
	$statement							=$custom['statement'][0];
	$experience							=$custom['experience'][0];
	$education							=$custom['education'][0];
	$honoursandawards					=$custom['honoursandawards'][0];
	$language							=json_decode($custom['language'][0]);
	
?>

<div class="tg-usercontatnow">
		
		<div class="tg-widgetcontent doc-contact">
			<form method="POST" action="">
				<div class="container">
			<div class="row">
				<div class="tg-userdetail appointment-enabled">
					<div class="col-lg-3 col-md-4 col-sm-4 col-xs-12">
						<aside class="tg-sidebar" id="tg-sidebar">
							<div class="tg-widget tg-widgetuserdetail">
								<figure class="tg-userimg detail-avatar">
									<a href="https://themographics.com/wordpress/directory/doctor/carol/"><img alt="Dr Carol" src="https://themographics.com/wordpress/directory/wp-content/uploads/2016/04/img-04-1-365x365.jpg"></a> <a class="doc-themetag tg-categorytag sp-av-link" href="https://themographics.com/wordpress/directory/provider-category/doctor/" style="background:#3498db">Doctor</a>
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
											
											</address> 
										</li>
										<li>
											<i class="fa fa-envelope-o"></i><input type="text" name="email" value="<?php echo $email;?>">
										</li>
										<li><i class="fa fa-phone"></i> <span><input type="text" name="contact" value="<?php echo $contact;?>"></span></li>
										<li><i class="fa fa-skype"></i><span><input type="text" name="socialcontact" value="<?php echo $socialcontact;?>"></span></li>
										<li>
											<i class="fa fa-link"></i><input type="text" name="website" value="<?php echo $website;?>">
										</li>
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
							<div class="claim-box">
								<a class="tg-btn tg-btn-lg" data-target=".tg-user-modal" data-toggle="modal" href="javascript:;"><i class="fa fa-exclamation-triangle"></i> Claim This User</a>
							</div>
							<div class="tg-doctors-list tg-haslayout">
								<div class="address-column tg-ads-wgdets tg-widget" id="ads_widget-3">
									<div class="tg-add-wrapper">
										<a href="https://themeforest.net/item/docdirect-responsive-directory-wordpress-theme-for-doctors-and-healthcare-profession/16089820?s_rank=2" target="_blank"><img src="//themographics.com/wordpress/directory/wp-content/uploads/2017/03/Blue_370-x-370.jpg" title="ad"></a>
									</div>
								</div>
							</div>
						</aside>
					</div>
					<div class="col-lg-9 col-md-8 col-sm-8 col-xs-12">
						<div class="tg-haslayout provider-sections">
							<div class="form-group">
														<div style="margin-bottom:20px;">
															<input id="autocomplete" placeholder="Enter your address"
															onFocus="geolocate()" type="text" style="width:100%;"></input>
														</div>

												<table id="address" style="width:100%;">
												  <tr>
													<td class="label">Street address</td>
													<td class="slimField"><input class="field" id="street_number" disabled="true" style="width:100%;" name="street_number" value="<?php echo $street_number;?>"></td>
													<td class="wideField" colspan="2"><input class="field" id="route" disabled="true" style="width:100%;" name="route" value="<?php echo $route;?>"></td>
												  </tr>
												  <tr>
													<td class="label">City</td>
													<td class="wideField" colspan="3"><input class="field" id="locality" disabled="true" name="locality" value="<?php echo $locality; ?>" style="width:100%;"></td>
												  </tr>
												  <tr>
													<td class="label">State</td>
													<td class="slimField"><input class="field" id="administrative_area_level_1" disabled="true" name="administrative_area_level_1" value="<?php echo $administrative_area_level_1; ?>" style="width:100%;"></td>
													<td class="label">Zip code</td>
													<td class="wideField"><input class="field" id="postal_code" name="postal_code" value="<?php echo $postal_code; ?>" disabled="true" style="width:100%;"></td>
												  </tr>
												  <tr>
													<td class="label">Country</td>
													<td class="wideField" colspan="3"><input class="field" id="country" name="country" value="<?php echo $country; ?>" disabled="true" style="width:100%;"></td>
												  </tr>
												</table>
												<input type="hidden" name="dslat" id="dslat" value="<?php echo $dslat; ?>">
												<input type="hidden" name="dslong" id="dslong" value="<?php echo $dslong; ?>">
							</div>
							<div class="tg-aboutuser">
								<div class="tg-userheading">
									<h2>About&nbsp;<?php the_title(); ?></h2>
								</div>
								<div class="tg-description">
									<p></p>
									<div class="form-group">
										<textarea class="form-control" name="about" placeholder="About"><?php echo $about; ?></textarea>
									</div><p></p>
								</div>
								<div class="professional-statements">
									<textarea class="form-control" name="statement" placeholder="statement"><?php echo $statement; ?></textarea></div>
							</div>
							<div class="tg-honourawards tg-listview-v3 user-section-style">
								<div class="tg-userheading">
									<h2>Languages</h2>
									</div>
								
								<ul class="checkbox-grid">
								
							<?php
								$terms = get_terms( 'dslanguages' );
						if ( ! empty( $terms ) && ! is_wp_error( $terms ) ){
							echo '<ul>';
							$test = isset($language) ? "checked" : "";
							foreach ( $terms as $term ) {
								echo '<input type="checkbox" "'.$test.'" value="language" name="language[]">' . $term->name . '</li>';
							}
						echo '</ul>';
}	?>
							
								</ul>
 							
								
								<div class="tg-doctor-profile">							
									
																	
									<div class="tg-doctor-profile">
									
											</div>  
								
								</div>
							</div>
							<div class="tg-honourawards tg-listview-v3 user-section-style sp-icon-wrap">
								<div class="tg-userheading">
									<h2>Specialties</h2>
								</div>
								<div class="tg-doctor-profile">
									<ul class="tg-tags">
										<li>
											<div class="specialities-wrap">
												<span class="icon-sp"></span> <span>Dermatologist</span>
											</div>
										</li>
										<li>
											<div class="specialities-wrap">
												<span class="icon-sp"></span> <span>Eye, Nose, Ear (ENT) specialist</span>
											</div>
										</li>
										<li>
											<div class="specialities-wrap">
												<span class="icon-sp"></span> <span>Neurosurgeon</span>
											</div>
										</li>
										<li>
											<div class="specialities-wrap">
												<span class="icon-sp"></span> <span>Orthopedic Surgeon</span>
											</div>
										</li>
										<li>
											<div class="specialities-wrap">
												<span class="icon-sp"></span> <span>Psychiatrist</span>
											</div>
										</li>
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
								<textarea class="form-control" name="experience" placeholder="Experience"><?php echo $experience; ?></textarea>
							</div>	
									</div>
							<div class="tg-userexperience tg-userqualification">
								<div class="tg-userheading">
									<h2><i class="fa fa-graduation-cap"></i>Education</h2>
								</div>
									<div class="form-group">
								<textarea class="form-control" name="education" placeholder="Education"><?php echo $education; ?></textarea>
							</div>
									</div>
							<div class="tg-userexperience tg-honourawards">
								<div class="tg-userheading">
									<h2><i class="fa fa-trophy"></i>Honours &amp; Awards</h2>
								</div>
								<div class="form-group">
								<textarea class="form-control" name="honoursandawards" placeholder="Honours and Awards"><?php echo $honoursandawards; ?></textarea>
							</div>							
								</div>
								<button class="tg-btn contact_me" type="submit" name="submit">Submit</button> 
							</form>
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
							<div class="prices-list-wrap">
								<div class="tg-companyfeaturebox tg-services">
									<div class="tg-userheading">
										<h2><i aria-hidden="true" class="fa fa-money"></i>Prices/Services List</h2>
									</div>
									<div class="tg-accordion" id="tg-accordion">
										<div class="tg-service tg-panel">
											<div class="tg-accordionheading tg-active">
												<h4><span>BIPOLAR DISORDERS</span><span>$225</span></h4>
											</div>
											<div class="tg-panelcontent" style="display: block;">
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
							<div class="our-teams-wrap">
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
							<div class="tg-presentationvideo">
								<div class="tg-userheading">
									<h2>Presentation Video</h2>
								</div>
								<div class="tg-video doc-haslayout">
									<iframe allowfullscreen="" frameborder="0" height="200" src="https://www.youtube.com/embed/0aNNYEUARAk" width="368"></iframe>
								</div>
							</div>
							<div class="tg-userphotogallery">
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
							<div class="detail-panel-wrap tg-haslayout tg-companyfeaturebox">
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
																	<div class="tg-skillbar" style="width: 0%;"></div>
																</div>
															</div>
														</div>
														<div class="tg-skill">
															<span class="tg-skillname">2 Stars</span> <span class="tg-skillpercentage">40%</span>
															<div class="tg-skillbox">
																<div class="tg-skillholder" data-percent="40%">
																	<div class="tg-skillbar" style="width: 40%;"></div>
																</div>
															</div>
														</div>
														<div class="tg-skill">
															<span class="tg-skillname">3 Stars</span> <span class="tg-skillpercentage">0%</span>
															<div class="tg-skillbox">
																<div class="tg-skillholder" data-percent="0%">
																	<div class="tg-skillbar" style="width: 0%;"></div>
																</div>
															</div>
														</div>
														<div class="tg-skill">
															<span class="tg-skillname">4 Stars</span> <span class="tg-skillpercentage">0%</span>
															<div class="tg-skillbox">
																<div class="tg-skillholder" data-percent="0%">
																	<div class="tg-skillbar" style="width: 0%;"></div>
																</div>
															</div>
														</div>
														<div class="tg-skill">
															<span class="tg-skillname">5 Stars</span> <span class="tg-skillpercentage">100%</span>
															<div class="tg-skillbox">
																<div class="tg-skillholder" data-percent="100%">
																	<div class="tg-skillbar" style="width: 100%;"></div>
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
						
			
		</div>
	</div>
	
	<?php autocompleteaddress(); ?>
<?php get_footer(); ?>