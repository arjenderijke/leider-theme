<?php 
/*
 * Theme Name	: leider
 * @file          footer.php
 * @package       leider
 * @author        Arjen de Rijke
 * @copyright     2014 Hammock
 * @license       license.txt
 * @filesource    wp-content/themes/leider/footer.php
 */
?>

<!--closing of the footer widgets area-->
<?php $current_options = get_option('busiprof_theme_options' );?>
<?php if($current_options['busiprof_custom_css']!='')
  { echo "<style type='text/css'>".$current_options['busiprof_custom_css']."</style>"; }
  ?>
<div class="footer-section">
  <div class="container">
    <hr />
    <div class="row">
      <div class="span8">
        <div style="margin-left: auto; margin-right: auto ;">
        <?php _e(' Powered by ', 'busi_prof'); ?>
        <a href="<?php echo esc_url( __( 'http://wordpress.org/', 'busi_prof' ) ); ?>"><?php _e('WordPress', 'busi_prof'); ?></a>
        <?php echo $current_options['busiprof_copy_rights_text'] ; ?><?php if($current_options['footer_designedby'] != '' ) { ?>&nbsp;<a target="_blank" rel="nofollow" href="<?php echo $current_options['footer_url'] ?>"><?php echo $current_options['footer_designedby'] ?></a><?php } ?>
      </div>
      </div>
    </div>
  </div>
</div>
<!-- closing of the footer -->
<?php wp_footer(); ?> 
</body>
</html>
