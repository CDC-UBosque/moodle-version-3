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
 */
?>

<header id="header">
				
	<div class="main-menu header3">
		
		<!-- top header -->
		<div id="top-head">
			<div class="container">
				<div class="login">
					
					<div id="phone">
						<i class="fa fa-phone" aria-hidden="true"></i>
						<a href="tel:5716489000">+5 71 6489000</a>
					</div>
					
					<?php echo $OUTPUT->user_menu(); ?>
					
					<div id="user_notification">
						<?php if ($CFG->version >= 2016120500) { ?>
						<div class="messagesnotifications">
						<?php echo $OUTPUT->navbar_plugin_output(); ?>
						</div>
						<?php } ?>
						
					</div>
					
					
					
					<?php if (!isloggedin()) { ?>
					<div class="header3-login">
						<div class="container">
							<form method="post" action="<?php echo $CFG->wwwroot; ?>/login/index.php?authldap_skipntlmsso=1">
								<input type="text" name="username" placeholder="Usuario:">
								<input type="password" name="password" placeholder="Contraseña:">
								<input type="submit" value="Ingresar">
							</form>
						</div>
					</div>
	        <?php } ?>
				</div>
			</div>
		</div>
		<!-- top header -->
		
		
		<div class="container" id="bottom-head">
			
			<a href="<?php echo $CFG->wwwroot;?>" class="inner-logo logo-text"></a>
			
			
			<div class="navbar navbar-expand-md">
			    <div class="navbar-inner">
			        <div class="">
			            <button type="button" class="btn btn-secondary btn-navbar" data-toggle="collapse"
			            data-target=".nav-collapse">&#x2630;</button>
						
						<div class="nav-collapse collapse">
							<li class="dropdown">
								<a href="#" data-toggle="dropdown" class="dropdown-toggle">IDIOMA <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li class="dropdown-item"><a class="dropdown-item" href="/?lang=es_co">Español (es)</a></li>
									<li class="dropdown-item"><a class="dropdown-item" href="/?lang=en">English (en)</a></li>
								</ul>
							</li>
							
							<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle">CATEGORÍAS <b class="caret"></b></a>
						        <ul class="dropdown-menu">
							        <li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=3">Pregrado</a></li>
						            <li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=39">Posgrado</a></li>
						            <li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=96">Educación Continuada</a></li>
						            <li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=15">Departamentos</a></li>
								</ul>
							</li>
							
							<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle">CENTROS <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=24">Biblioteca</a></li>
						            <li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=23">Centro de Lenguas</a></li>
						            <li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=67">Otros</a></li>
								</ul>
							</li>
							
							<li class="dropdown"> <a href="#" data-toggle="dropdown" class="dropdown-toggle">INSTITUCIONAL <b class="caret"></b></a>
								<ul class="dropdown-menu">
									<li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=84">Biblioteca</a></li>
									<li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=163">Coordinación TIC</a></li>
									<li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=731">División de Educación Virtual y a Distancia</a></li>
									<li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=1">Éxito Estudiantil</a></li>
									<li class="dropdown-item"><a class="dropdown-item" href="/course/index.php?categoryid=730">Fortalecimiento Curricular</a></li>
								</ul>
							</li>
						
						</div>
						
						<!--/.nav-collapse -->
					</div>
				</div><!-- END of .navbar-inner -->
			</div><!-- END of .navbar -->
		</div>
	
	<!-- END of .container -->
	</div>
		
</header>



<!-- END of header -->