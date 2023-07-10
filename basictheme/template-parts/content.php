<!-- Content 1 -->
<section class="content">
        <div class="container">
          <?php while (have_posts()) : the_post(); ?>
            <div class="row">            
                <div class="col-sm-6">                    
                    <!-- <img class="img-responsive img-circle center-block" src="" alt=""> -->
                    <?php the_post_thumbnail('thumbnail', array(
                        'class' => 'img-responsive img-circle center-block'
                    )); ?>
                    

                </div>
                <div class="col-sm-6">
                	<h2 class="section-header"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
                	<p class="lead text-muted">
                    <?php if(is_single()) :  ?>
                        <?php the_content(); ?>
                        <?php else : ?>
                    <?php
                    $readmore = '<p><a href="'.get_permalink().'"> Read more....</a> </p>';
                     echo wp_trim_words(get_the_content(), 50, $readmore); 
                     ?></p>
                     <?php endif; ?>
                	<br><br><br>
                </div>                
               </div>
             <?php endwhile ; ?>
        </div>
    </section>