<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Towngate</title>
    
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
    
</head>
<body>

     
    <nav class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <a class="navbar-brand" href="<?php echo site_url();?>">COPPERWORKS</a>
              
             
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
        </div>
        <!-- /.container-fluid -->
            <section class="header">
  
        <div class="bars-parent">
                     <div class="bars barone pull-right" aria-hidden="true"></div>
                     <div class=" bars bartwo pull-right" aria-hidden="true"></div>
                     <div class="bars barthree pull-right" aria-hidden="true"></div>
                     <div class="bars barfour pull-right" aria-hidden="true"></div>
        </div>
          <div id="menuControl">
            <span id='bars' class="menu-icon pull-right" >MENU</span>
            
          </div>  
              
               <div class="calendar pull-right">
                   <a class="view <?php  if(is_page('book-a-viewing')){ echo 'active-two';}?>" href="<?php echo site_url(); ?>/book-a-viewing">BOOK A VIEWING</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/book.svg">
                    
               </div>
                <div class="brochure pull-right">
                   <a class="download <?php  if(is_page('download-a-brochure')){ echo 'active-two';}?>" href="<?php echo site_url(); ?>/download-a-brochure">DOWNLOAD A BROCHURE</a>
                    <img src="<?php echo get_template_directory_uri(); ?>/images/download.svg">
                    
               </div>
               
    <div class="menu pull-right">
    </div>
    <div class="menu-list pull-right">
        <ul>
             <li ><a class="view-mobile <?php  if(is_page('book-a-viewing')){ echo 'active-two';}?>" href="<?php echo site_url(); ?>/book-a-viewing">BOOK A VIEWING</a></li>
            <li><a class="download-mobile <?php  if(is_page('download-a-brochure')){ echo 'active-two';}?>" href="<?php echo site_url(); ?>/download-a-brochure">DOWNLOAD A BROCHURE</a></li>
            <li ><a class="<?php  if(is_home()){ echo 'active';}else { echo '';} ?>"
             href="<?php echo site_url();?>">HOME</a></li>
            <li><a class="<?php  if(is_page('location')){ echo 'active';}else { echo '';} ?>"
            href="<?php echo site_url(); ?>/location">LOCATION</a></li>
            <li><a class="<?php  if(is_page('site-overview')){ echo 'active';}else { echo '';} ?>"
            href="<?php echo site_url(); ?>/site-overview">SITE OVERVIEW</a></li>
            <li><a class="<?php  if(is_page('site-plan')){ echo 'active';}else { echo '';} ?>"
            href="<?php echo site_url();?>/site-plan">SITE PLAN</a></li>
            <li><a class="<?php  if(is_page('gallery')){ echo 'active';}else { echo '';} ?>"
            href="<?php echo site_url();?>/gallery">GALLERY</a></li>
            <li><a class="<?php  if(is_page('leeds-demographics')){ echo 'active';}else { echo '';} ?>"
            href="<?php echo site_url();?>/leeds-demographics">LEEDS DEMOGRAPHICS</a></li>
             <li><a class="<?php  if(is_page('the-history')){ echo 'active';}else { echo '';} ?>"
             class="<?php  if(is_page('site-overview')){ echo 'active';}else { echo '';} ?>"
             href="<?php echo site_url(); ?>/the-history">THE HISTORY</a></li>
        </ul>
    </div>
    </section>
    </nav>

 