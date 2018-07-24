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
 * Moodle's uebtheme theme, an example of how to make a Bootstrap theme
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
$PAGE->requires->css('/theme/uebtheme/css/stylesUEB.css');

// Set default (LTR) layout mark-up for a three column page.
$regionmainbox = 'col-md-10 col-lg-10';
$regionmain = 'col-md-10 col-lg-10 pull-right';
$sidepre = 'col-md-2 col-lg-2 desktop-first-column';
$sidepost = 'col-md-2 col-lg-2 pull-right';
// Reset layout mark-up for RTL languages.
if (right_to_left()) {
    $regionmainbox = 'col-md-10 col-lg-10 pull-right';
    $regionmain = 'col-md-10 col-lg-10';
    $sidepre = 'col-md-2 col-lg-2 pull-right';
    $sidepost = 'col-md-2 col-lg-2 desktop-first-column';
}

echo $OUTPUT->doctype() ?>
<html <?php echo $OUTPUT->htmlattributes(); ?>>
<head>
    <title><?php echo $OUTPUT->page_title(); ?></title>
    <link type="image/x-icon" rel="shortcut icon" href="<?php echo $OUTPUT->favicon(); ?>">
    <?php echo $OUTPUT->standard_head_html() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body <?php echo $OUTPUT->body_attributes(); ?>>

<?php echo $OUTPUT->standard_top_of_body_html() ?>

<div id="page" class="container-fluid">

    <header id="page-header" class="clearfix">
        <?php echo $html->heading; ?>
    </header>

    <div id="page-content" class="row">
        <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row">
                <section id="region-main" class="<?php echo $regionmain; ?>">
                    <?php echo $OUTPUT->main_content(); ?>
                </section>
                <?php echo $OUTPUT->blocks('side-pre', $sidepre); ?>
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
    </div>

    <?php echo $OUTPUT->standard_end_of_body_html() ?>

</div>
</body>
</html>