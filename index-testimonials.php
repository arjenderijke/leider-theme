<?php 
$current_options=get_option('busiprof_theme_options');
$template_uri=get_template_directory_uri(). '/images/default' ;
?>
<div class="container">		
	<div class="row">
		<div class="span6 testimonial_mn">
				<?php if($current_options['testimonials_title']!='') {?>
				<h2><?php echo $current_options['testimonials_title']; ?>
				<?php } ?><br><span><?php if($current_options['testimonials_text']!='') { echo $current_options['testimonials_text'];  } ?></span></h2>
				<div id="testimonial_mn_cols" class="media">
					<img alt="webriti" src="<?php if($current_options['testimonials_image_one']!='') { echo $current_options['testimonials_image_one'];} ?>"  class="media-object img-circle pull-left recent_blog_thumb">
					<div class="media-body">
					<p><?php if($current_options['testimonials_text_one']!='') { echo $current_options['testimonials_text_one'];} ?></p>
					<a href="#"><?php if($current_options['testimonials_name_one']!='') { echo $current_options['testimonials_name_one'];} ?> <span>(<?php if($current_options['testimonials_designation_one']!='') { echo $current_options['testimonials_designation_one'];} ?>)</span></a>
					</div>
				</div>
				
				<div id="testimonial_mn_cols" class="media">
					<img alt="webriti" src="<?php if($current_options['testimonials_image_two']!='') { echo $current_options['testimonials_image_two'];} ?>"  class="media-object img-circle pull-left recent_blog_thumb">
					<div class="media-body">
					<p><?php if($current_options['testimonials_text_two']!='') { echo $current_options['testimonials_text_two'];} ?></p>
					<a href="#"><?php if($current_options['testimonials_name_two']!='') { echo $current_options['testimonials_name_two'];} ?> <span>(<?php if($current_options['testimonials_designation_two']!='') { echo $current_options['testimonials_designation_two'];} ?>)</span></a>
					</div>
				</div>
			</div>
		</div>
		<div class="span6 recent_blog">
		     <h2>Facebook</h2>
			<div class="row">
				     <div class="span3">
      <?php if ( is_active_sidebar( 'footer-widget-area' ))
        {  
        	dynamic_sidebar('footer-widget-area' );   
        } else { ?>
      <?php }  ?>
				     </div>
                       </div>
                </div>
	</div>			
</div>
