<?php 

class dslists{
	
	public function lists(){
		
		$blogusers = get_users( 'blog_id=1&orderby=nicename&role=subscriber' );
		// Array of WP_User objects.
		foreach ( $blogusers as $user ) {
			//echo '<span>' . esc_html( $user->ID ) . '</span>';
			$custom = get_post_custom($user->ID);
					?>
									
							
									<div style="float:left; width:250px; margin:10px;" class="doc-featurelist item">
										<figure class="doc-featureimg">
											<a class="doc-featuredicon" href="javascript:;">
												<i class="fa fa-bolt"></i>featured</a> 
												<a class="doc-featuredicon doc-verfiedicon" href="javascript:;">
												<i class="fa fa-shield"></i>Verified</a> 
												<a class="list-avatar" href="<?php //echo get_the_permalink(); ?>">
													<?php echo get_avatar( $user->ID, $size, $default, $alt, $args ); ?> 
												</a> 

										</figure>
										<div class="doc-featurecontent">
											<div class="doc-featurehead">
												<a class="doc-favoriteicon doc-notfavorite add-to-fav" data-view_type="v2" data-wl_id="333" href="javascript:;"><i class="fa fa-heart"></i></a>
												<h2><a class="list-avatar" href="http://dsdirectory.teamsolidak.com/dentist/?id=<?php echo  $user->ID  ?>"><?php echo esc_html( $user->display_name ) ?></a></h2>
												<ul class="doc-matadata">
													<li>
														<a class="do-like-me" data-like_id="333" href="javascript:;"><i class="fa fa-thumbs-up"></i>9</a>
													</li>
													<li><span class="doc-stars"><span style="width:70%"></span></span></li>
												</ul>
											</div>
											<ul class="doc-addressinfo">
												<li>
													<i class="fa fa-map-marker"></i> 
													<address>
														<?php //echo $street_number ." " .  $locality ." " . $administrative_area_level_1 ." ". $postal_code . " " . $country ;?>
													</address>
												</li>
												<li><i class="fa fa-phone"></i><span><?php echo $custom['dscontact'][0];?></span></li>
												<li>
													<i class="fa fa-envelope-o"></i><?php echo $user->user_email;?>
												</li>
												<li>
													<i class="fa fa-link"></i><?php echo $custom['dswebsite'][0];?>
												</li>
												
											</ul>
										</div>
									</div>
										
									 
				<?php 
		
		}
	}
	
}

