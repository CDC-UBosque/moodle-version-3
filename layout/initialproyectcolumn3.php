<body <?php echo $OUTPUT->body_attributes(); ?>>

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
    
    <div id="page-content" class="row-fluid background-grey">
    	<div class="container">
        <div id="region-main-box" class="<?php echo $regionmainbox; ?>">
            <div class="row-fluid">
	            
                <section id="region-main" class="<?php echo $regionmain; ?>">
                    <?php
                    echo $OUTPUT->course_content_header();
                    echo $OUTPUT->main_content();
                    echo $OUTPUT->course_content_footer();
                    ?>
                </section>
                <?php 
	                echo $OUTPUT->blocks('side-pre', $sidepre);
	                echo $OUTPUT->blocks('side-post', $sidepost); 
	              ?>
	              
            </div>
        </div>
        <?php echo $OUTPUT->blocks('side-post', $sidepost); ?>
      </div> 
    </div>
    <?php require('footer.php'); echo $OUTPUT->standard_end_of_body_html() ?>
</div>
</body>