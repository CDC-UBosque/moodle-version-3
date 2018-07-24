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
$checkbanneruebimage1 = $PAGE->theme->setting_file_url('banneruebimage1', 'banneruebimage1');
if (!empty($checkbanneruebimage1)) {
    $banneruebimage1 = $PAGE->theme->setting_file_url('banneruebimage1', 'banneruebimage1');
} else {
    $banneruebimage1 = $CFG->wwwroot."/theme/uebtheme/data/cat-1.jpg";
}

$checkbanneruebimage2 = $PAGE->theme->setting_file_url('banneruebimage2', 'banneruebimage2');
if (!empty($checkbanneruebimage2)) {
    $banneruebimage2 = $PAGE->theme->setting_file_url('banneruebimage2', 'banneruebimage2');
} else {
    $banneruebimage2 = $CFG->wwwroot."/theme/uebtheme/data/cat-2.jpg";
}

if (!empty($html->banner1) || !empty($html->banner2) || !empty($html->banner3)) {
?>
<div>
	<div class="banners-items">
<?php
    if (!empty($html->banner1)) {
?>
		<div class="banners-item">
			
			<div class="banners-item-img">
				<a href="<?php echo $html->bannerueburl1;?>">
					<img alt="" src="<?php echo $banneruebimage1; ?>">
					<span class="banners-txt"><?php echo $html->banner1; ?><span class="banners-btn">Ver más</span></span>
				</a>
			</div>
			
		</div>
<?php 
    }
    if (!empty($html->banner2)) {
?>
		<div class="banners-item">
		
			<div class="banners-item-img">
				<a href="<?php echo $html->bannerueburl2;?>">
					<img alt="" src="<?php echo $banneruebimage2; ?>">
					<span class="banners-txt"><?php echo $html->banner2; ?><span class="banners-btn">Ver más</span></span>
					
				</a>
			</div>
			
		</div>
<?php 
    }
?>
	</div>
</div>
</div><!-- END of .contacts -->
<?php
}