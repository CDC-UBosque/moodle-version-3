<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Moodle's roshnilite theme, an example of how to make a Bootstrap theme
 *
 * DO NOT MODIFY THIS THEME!
 * COPY IT FIRST, THEN RENAME THE COPY AND MODIFY IT INSTEAD.
 *
 * For full information about creating Moodle themes, see:
 * http://docs.moodle.org/dev/Themes_2.0
 *
 * @package    theme_roshnilite
 * @copyright  2015 dualcube {@link https://dualcube.com}
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 * 
 * Modification Centro de diseño UEB
 * 
 */
// Get the HTML for the settings bits.
$html = theme_uebtheme_get_html_for_settings($OUTPUT, $PAGE);
//$PAGE->requires->css('/theme/uebtheme/css/font-awesome.min.css');
//$PAGE->requires->css('/theme/uebtheme/css/styles.css');
$PAGE->requires->css('/theme/uebtheme/css/stylesUEB.css');
// Set default (LTR) layout mark-up for a three column page.
$regionmainbox = 'col-md-10 col-lg-10 pull-right';
$regionmain = 'col-md-10 col-lg-10 pull-right';
//$sidepre = 'col-md-12 col-lg-12 pull-left';
//$sidepost = 'span2 pull-right';
//$sidepost = 'col-md-12 col-lg-12 pull-left';
// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmainbox = 'col-md-10 col-lg-10 pull-right';
    $regionmain = 'col-md-10 col-lg-10 pull-right';
    //$sidepre = 'col-md-12 col-lg-12 pull-left';
    //$sidepre = 'span2';
    //$sidepost = 'col-md-12 col-lg-12 pull-left';
}
echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>">
	<?php 
        $PAGE->requires->js('/theme/uebtheme/js/jquery-1.11.1.min.js', true);
        //bootstrap 2
        //$PAGE->requires->js('/theme/uebtheme/js/bootstrap.min.js', true);
        
         //bootstrap 3
        //$PAGE->requires->js('/theme/uebtheme/js/bootstrap3/bootstrap.js', true);
        //$PAGE->requires->js('/theme/uebtheme/js/bootstrap3/bootstrap.min.js', true);
        //$PAGE->requires->js('/theme/uebtheme/js/bootstrap3/npm.js', true);
        
         //bootstrap 4
        $PAGE->requires->js('/theme/uebtheme/js/bootstrap4/bootstrap.bundle.min.js', true);
        $PAGE->requires->js('/theme/uebtheme/js/bootstrap4/bootstrap.min.js', true);
        
        //$PAGE->requires->js('/theme/uebtheme/js/jquery.bxslider.min.js', true);
        $PAGE->requires->js('/theme/uebtheme/js/jquery.scroll.js', true);
        //$PAGE->requires->js('/theme/uebtheme/js/engine.js', true);
        //$PAGE->requires->js('/theme/uebtheme/js/backtop.js', true);
       //$PAGE->requires->js('/theme/uebtheme/js/jquery.stickytableheaders.js', true);
    ?>
    <script src="https://cdn.rawgit.com/leafo/sticky-kit/v1.1.2/jquery.sticky-kit.js"></script>
</head>

<body <?php echo $OUTPUT->body_attributes('two-column'); ?>>

<?php require('header.php'); echo $OUTPUT->standard_top_of_body_html() ?>



<div id="page">
	
    
    <header id="page-header" class="clearfix">
        <div id="page-navbar" class="clearfix">
            <div class = "container">
                <div class="row">
                    <nav class="breadcrumb-nav"><?php echo $OUTPUT->navbar(); ?></nav>
                    <div class="breadcrumb-button"><?php echo $OUTPUT->page_heading_button(); ?></div>
                </div>
            </div>
        </div>
        <div id="course-header">
            <?php echo $OUTPUT->course_header(); ?>
        </div>
    </header>
    
    <div id="page-content" class="row background-grey">
	    	<div class="container">
	        <section id="region-main" class="<?php echo $regionmain; ?> no-brodrer">
	            <?php
	            echo $OUTPUT->course_content_header();
	            echo $OUTPUT->main_content();
	            echo $OUTPUT->course_content_footer();
	            ?>
	        </section>
	        
	        <aside id="region-admin-content" class="col-md-2 col-lg-2">
		        <div id="admin-block-layout" ><?php 
			        echo $OUTPUT->blocks('side-pre', $sidepre);
			      
			      ?></div>
			      
			      <div id="course-block-layout" ><?php 
			        echo $OUTPUT->blocks('side-post', $sidepost);
			      
			      ?></div>
	        </aside>
		      
		      
	      </div> 
    </div>
    <?php require('footer.php'); echo $OUTPUT->standard_end_of_body_html() ?>
</div>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-throttle-debounce/1.1/jquery.ba-throttle-debounce.min.js"></script>
<script type="text/javascript" src="/theme/uebtheme/js/sticky-videos.js"></script>
<script type="text/javascript" src="/theme/uebtheme/js/sticky-videos-api.js"></script>
<script type="text/javascript" src="/theme/uebtheme/js/jquery.stickysort.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script type="text/javascript" src="/theme/uebtheme/js/sticky-kit.js"></script>

<script src="https://www.youtube.com/iframe_api"></script>

<script>
	$(function () {
		$('table').stickySort({ sortable: true });
	});
	
	$window
	.on( "resize", function() {
	   top = $featuredMedia.offset().top;
	   offset = Math.floor( top + ( $featuredMedia.outerHeight() / 2 ) );
	} )
	
	$("#sticky_item").stick_in_parent();
	
</script>


</body>



</html>
