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
echo $OUTPUT->doctype();
//$PAGE->requires->css('/theme/uebtheme/css/font-awesome.min.css');
//$PAGE->requires->css('/theme/uebtheme/css/styles.css');
$PAGE->requires->css('/theme/uebtheme/css/stylesUEB.css');
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php echo $OUTPUT->page_title(); ?></title>
		<?php echo $OUTPUT->standard_head_html() ?>
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
	</head>
<body <?php echo $OUTPUT->body_attributes(); ?>>
	<?php require('header.php'); echo $OUTPUT->standard_top_of_body_html() ?>
	
	<div id="page" class="container-fluid login-page">
		
		
		
		
		<div id="page-content" class="row background-grey">
			<div class="login-information">
				<div class="container no-background">
					<!--<div class="span6"><a href="javascript:void(0);"><?php echo get_string('loginsite');?></a></div>-->
					<div class="col-md-12 col-lg-12"><span><?php echo get_string('loggedinnot');?></span></div>
				</div>
			</div>
			<section id="region-main" class="col-md-12 col-lg-12 loginbox">
                <?php 
                echo $OUTPUT->course_content_header();
                ?>
                <div class="container">
                <?php echo $OUTPUT->main_content(); ?>
                </div>
                <?php
                echo $OUTPUT->course_content_footer();
                ?>
			</section>
		</div>
	</div>
	<?php require('footer.php'); echo $OUTPUT->standard_end_of_body_html() ?>
</body>
</html>