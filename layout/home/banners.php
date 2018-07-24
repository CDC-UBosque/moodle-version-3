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
$checkbannerimage1 = $PAGE->theme->setting_file_url('bannerimage1', 'bannerimage1');
if (!empty($checkbannerimage1)) {
    $bannerimage1 = $PAGE->theme->setting_file_url('bannerimage1', 'bannerimage1');
} else {
    $bannerimage1 = $CFG->wwwroot."/theme/uebtheme/data/cat-1.jpg";
}
$checkbannerimage2 = $PAGE->theme->setting_file_url('bannerimage2', 'bannerimage2');
if (!empty($checkbannerimage2)) {
    $bannerimage2 = $PAGE->theme->setting_file_url('bannerimage2', 'bannerimage2');
} else {
    $bannerimage2 = $CFG->wwwroot."/theme/uebtheme/data/cat-2.jpg";
}
$checkbannerimage3 = $PAGE->theme->setting_file_url('bannerimage3', 'bannerimage3');
if (!empty($checkbannerimage3)) {
    $bannerimage3 = $PAGE->theme->setting_file_url('bannerimage3', 'bannerimage3');
} else {
    $bannerimage3 = $CFG->wwwroot."/theme/uebtheme/data/cat-3.jpg";
}
$checkbannerimage4 = $PAGE->theme->setting_file_url('bannerimage4', 'bannerimage4');
if (!empty($checkbannerimage4)) {
    $bannerimage4 = $PAGE->theme->setting_file_url('bannerimage4', 'bannerimage4');
} else {
    $bannerimage4 = $CFG->wwwroot."/theme/uebtheme/data/cat-4.jpg";
}
$checkbannerimage5 = $PAGE->theme->setting_file_url('bannerimage5', 'bannerimage5');
if (!empty($checkbannerimage5)) {
    $bannerimage5 = $PAGE->theme->setting_file_url('bannerimage5', 'bannerimage5');
} else {
    $bannerimage5 = $CFG->wwwroot."/theme/uebtheme/data/cat-5.jpg";
}
$checkbannerimage6 = $PAGE->theme->setting_file_url('bannerimage6', 'bannerimage6');
if (!empty($checkbannerimage6)) {
    $bannerimage6 = $PAGE->theme->setting_file_url('bannerimage6', 'bannerimage6');
} else {
    $bannerimage6 = $CFG->wwwroot."/theme/uebtheme/data/cat-6.jpg";
}
$checkbannerimage7 = $PAGE->theme->setting_file_url('bannerimage7', 'bannerimage7');
if (!empty($checkbannerimage7)) {
    $bannerimage7 = $PAGE->theme->setting_file_url('bannerimage7', 'bannerimage7');
} else {
    $bannerimage7 = $CFG->wwwroot."/theme/uebtheme/data/cat-7.jpg";
}
$checkbannerimage8 = $PAGE->theme->setting_file_url('bannerimage8', 'bannerimage8');
if (!empty($checkbannerimage8)) {
    $bannerimage8 = $PAGE->theme->setting_file_url('bannerimage8', 'bannerimage8');
} else {
    $bannerimage8 = $CFG->wwwroot."/theme/uebtheme/data/cat-8.jpg";
}

$checkbannerimage9 = $PAGE->theme->setting_file_url('bannerimage9', 'bannerimage9');
if (!empty($checkbannerimage8)) {
    $bannerimage9 = $PAGE->theme->setting_file_url('bannerimage9', 'bannerimage9');
} else {
    $bannerimage9 = $CFG->wwwroot."/theme/uebtheme/data/cat-8.jpg";
}

$checkbannerimage10 = $PAGE->theme->setting_file_url('bannerimage10', 'bannerimage10');
if (!empty($checkbannerimage8)) {
    $bannerimage10 = $PAGE->theme->setting_file_url('bannerimage10', 'bannerimage10');
} else {
    $bannerimage10 = $CFG->wwwroot."/theme/uebtheme/data/cat-3.jpg";
}

if (!empty($html->bannerheading)) {
?>

<div class="categories">
	<div class="container">
		<h3 class="header-b-2"><?php echo format_text($html->bannersubheading, "", $uebthemeformatoptions); ?></h3>
		<h1 class="h-large"><?php echo format_text($html->bannerheading, "", $uebthemeformatoptions); ?></h1>
	</div><!-- END of .container -->

	<div class="categories-items">
<?php
    if (!empty($html->bannertext1)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $bannerimage1;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->bannerurl1; ?>"><?php echo format_text($html->bannertext1, "", $uebthemeformatoptions); ?></a></h5>
				<p>
				    <?php 
        if (!empty($html->bannersubtext1)) {
                    echo format_text($html->bannersubtext1, "", $uebthemeformatoptions);
        }
        ?>
				</p>
			</div>
		</div><!-- END of .categories-item -->
<?php 
    }
    if (!empty($html->bannertext2)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $bannerimage2;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->bannerurl2; ?>"><?php echo format_text($html->bannertext2, "", $uebthemeformatoptions); ?></a></h5>				<p>
				    <?php 
        if (!empty($html->bannersubtext2)) {
                    echo format_text($html->bannersubtext2, "", $uebthemeformatoptions);
        }
        ?>
				</p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->bannertext3)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $bannerimage3;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->bannerurl3; ?>"><?php echo format_text($html->bannertext3, "", $uebthemeformatoptions); ?></a></h5>
				<p>
				    <?php 
        if (!empty($html->bannersubtext3)) {
                    echo format_text($html->bannersubtext3, "", $uebthemeformatoptions);
        }
        ?>
				</p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->bannertext4)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $bannerimage4;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->bannerurl4; ?>"><?php echo format_text($html->bannertext4, "", $uebthemeformatoptions); ?></a></h5>
				<p>
				    <?php 
        if (!empty($html->bannersubtext4)) {
                    echo format_text($html->bannersubtext4, "", $uebthemeformatoptions);
        }
        ?>
				</p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->bannertext5)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $bannerimage5;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->bannerurl5; ?>;"><?php echo format_text($html->bannertext5, "", $uebthemeformatoptions); ?></a></h5>
				<p>
				    <?php 
        if (!empty($html->bannersubtext5)) {
                    echo format_text($html->bannersubtext5, "", $uebthemeformatoptions);
        }
        ?>
				</p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->bannertext6)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $bannerimage6;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->bannerurl6; ?>"><?php echo format_text($html->bannertext6, "", $uebthemeformatoptions); ?></a></h5>
				<p>
				    <?php 
        if (!empty($html->bannersubtext6)) {
                    echo format_text($html->bannersubtext6, "", $uebthemeformatoptions);
        }
        ?>
				</p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->bannertext7)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $bannerimage7;?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->bannerurl7; ?>"><?php echo format_text($html->bannertext7, "", $uebthemeformatoptions); ?></a></h5>
				<p>
				    <?php 
        if (!empty($html->bannersubtext7)) {
                    echo format_text($html->bannersubtext7, "", $uebthemeformatoptions);
        }
        ?>
				</p>
			</div>
		</div><!-- END of .categories-item -->
<?php
    }
    if (!empty($html->bannertext8)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $bannerimage8; ?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->bannerurl8; ?>"><?php echo format_text($html->bannertext8, "", $uebthemeformatoptions); ?></a></h5>
				<p>
				    <?php 
        if (!empty($html->bannersubtext8)) {
                    echo format_text($html->bannersubtext8, "", $uebthemeformatoptions);
        }
        ?>
				</p>
			</div>
		</div>
		<!-- END of .categories-item -->
		
		<?php
    }
    if (!empty($html->bannertext9)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $bannerimage9; ?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->bannerurl9; ?>"><?php echo format_text($html->bannertext9, "", $uebthemeformatoptions); ?></a></h5>
				<p>
				    <?php 
        if (!empty($html->bannersubtext9)) {
                    echo format_text($html->bannersubtext9, "", $uebthemeformatoptions);
        }
        ?>
				</p>
			</div>
		</div>
		<!-- END of .categories-item -->
		
		
		<?php
    }
    if (!empty($html->bannertext10)) {
?>
		<div class="categories-item view fourth-effect">
			<img src="<?php echo $bannerimage10; ?>" alt="">
			<div class="mask"></div>
			<div class="categories-item-cont">
				<h5><a href="<?php echo $html->bannerurl10; ?>"><?php echo format_text($html->bannertext10, "", $uebthemeformatoptions); ?></a></h5>
				<p>
				    <?php 
        if (!empty($html->bannersubtext10)) {
                    echo format_text($html->bannersubtext10, "", $uebthemeformatoptions);
        }
        ?>
				</p>
			</div>
		</div>
		<!-- END of .categories-item -->
		
<?php
    }
?>
	</div><!-- END of .categories-items -->
</div><!-- END of .categories -->
<?php
}