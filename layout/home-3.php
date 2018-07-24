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
global $DB, $USER, $CFG, $PAGE;

$uebthemeformatoptions = new stdClass();
$uebthemeformatoptions->noclean = true;
$uebthemeformatoptions->overflowdiv = false;

    

$enablemoodlemaincontent = get_config('theme_uebtheme', 'moodlemaincontentinfrontpage');
$PAGE->requires->css('/theme/uebtheme/css/stylesUEB.css');
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
$PAGE->requires->js('/theme/uebtheme/js/jquery.bxslider.min.js', true);
$PAGE->requires->js('/theme/uebtheme/js/jquery.scroll.js', true);
$PAGE->requires->js('/theme/uebtheme/js/engine.js', true);
$PAGE->requires->js('/theme/uebtheme/js/backtop.js', true);
$PAGE->requires->js('/theme/uebtheme/js/stickyheader.prototype.js', true);
$PAGE->requires->js('/theme/uebtheme/js/prototype.js', true);
if (right_to_left()) {
    $regionbsid = 'region-bs-main-and-post';
} else {
    $regionbsid = 'region-bs-main-and-pre';
}
echo $OUTPUT->doctype();
$context = context_system::instance();
?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
	<head>
		<title><?php echo $OUTPUT->page_title(); ?></title>
		<?php echo $OUTPUT->standard_head_html() ?>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link type="image/x-icon" rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>">
		<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
	</head>
	<body <?php echo $OUTPUT->body_attributes(); ?>>
		
		<?php require('header.php'); echo $OUTPUT->standard_top_of_body_html() ?>
		
		
		<?php	require($CFG->dirroot.'/theme/uebtheme/layout/home/firstslider.php'); ?>
		
		<div class="content">
			<div class="container">
				
            <?php	require($CFG->dirroot.'/theme/uebtheme/layout/home/aboutsite.php'); ?>
            	
		
			</div>
		</div><!-- END of .content -->
		
		<div class="content availablecourse">
			<div class="container">
			<?php require($CFG->dirroot.'/theme/uebtheme/layout/home/availablecourse.php'); ?>
			</div>
		</div>
		
		<div class="content">
			<div class="container">
			<?php if ($enablemoodlemaincontent == 1) { ?>
                <div class="container">
                	<div class="moodlecorecontent">
                		<?php echo $OUTPUT->main_content();
                		if (isloggedin()) {
                			if (has_capability('moodle/course:create', $context)) {
		                		if ($PAGE->user_is_editing()) { ?>
		                			<a class = "turnedit btn-1" href="<?php echo $CFG->wwwroot.'/course/view.php?id=1&sesskey='.sesskey().'&edit=off';?>"><?php echo get_string('turneditingoff');?></a>
		                		<?php } else { ?>
		                			<a class = "turnedit btn-1" href="<?php echo $CFG->wwwroot.'/course/view.php?id=1&sesskey='.sesskey().'&edit=on';?>"><?php echo get_string('turneditingon');?></a>
		                		<?php }
		                	}
	                	}
                		?>
                	</div>
                </div>
                <?php } else { ?>
                	<div class="maincontent"><?php echo $OUTPUT->main_content();?></div>
                <?php } ?>
            <?php
            	require($CFG->dirroot.'/theme/uebtheme/layout/home/categories.php');
            ?>
            
			</div>
		</div>
		
		<div class="content banners-ueb">
			<div class="container">
				<?php
            	require($CFG->dirroot.'/theme/uebtheme/layout/home/bannerueb.php');
            ?>
			</div>
		</div>
		
		<div class="content">
			<?php
				require($CFG->dirroot.'/theme/uebtheme/layout/home/contacts.php');
				require($CFG->dirroot.'/theme/uebtheme/layout/home/social_network.php');
			?>
		</div>
		<?php require('footer.php'); echo $OUTPUT->standard_end_of_body_html() ?>
	</body>
</html>
