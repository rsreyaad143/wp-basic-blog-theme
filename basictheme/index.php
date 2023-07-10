<?php get_header(); ?>

	<!-- Header -->
    <header style="background-image: url('<?php header_image(); ?>');">
        <div class="header-content" >
            <div class="header-content-inner">
                <!-- <h1>Dramatically Engage</h1> -->
                <h1><?php bloginfo('name'); ?></h1>
                <!-- <p>Objectively innovate empowered manufactured products whereas parallel platforms.</p> -->
                <p><?php bloginfo('description'); ?></p>
                <a href="#" class="btn btn-primary btn-lg">Engage Now</a>
            </div>
        </div>
    </header>

    <?php get_template_part('template-parts/content'); ?>

	
    
	<?php get_footer(); ?>