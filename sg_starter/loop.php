<?php if (have_posts()) : while (have_posts()) : the_post(); ?> 



<div <?php post_class(array('row', 'post')); ?> id="post-<?php the_ID(); ?>">

    

    <div class="post-header">

        <h2 class="post-title">

            <a href="<?php the_permalink(); ?>" title="Lire l'article">

                <?php the_title(); ?>

            </a>

        </h2>

    </div>

    

    <div class="post-body">

        <div class="row">

            

            <div class="post-thumbnail">

                <?php the_post_thumbnail('full', array('class' => 'img-responsive')); ?>

            </div> 

            

            <div class="sm-grid4 post-content">

                <?php the_excerpt(); ?>

            </div>

            

        </div>

    </div> 

    

    <div class="row post-footer">

        

        <div class="sm-grid2 post-meta">

            <p><span class="icon ion-calendar"></span> <?php the_time('d M Y'); ?></p>

        </div>

        

        <div class="sm-grid2 post-meta">

            <p><span class="icon ion-person"></span> <?php the_author(); ?></p>

        </div>

        

        <div class="sm-grid2 post-meta">

            <p><span class="icon ion-folder"></span> <?php the_category(', '); ?></p>

        </div>

        

        <div class="sm-grid2 post-meta">

            <p><span class="icon ion-pricetag"></span> <?php the_tags(); ?></p>

        </div>

        

        <a class="next-link" href="<?php the_permalink(); ?>" title="Lire l'article <?php the_title(); ?>">

            <span class="icon ion-arrow-right-c"></span>

        </a>

    

    </div>

    

</div>



<!-- Comments -->

<?php if (!is_home() && comments_open() && !is_category()) { ?>

<div class="row">

    <div class="xs-grid12 post-body comment-body custom-color-2 <?php if(is_page()) { echo 'single-page'; } ?>">

        <?php comments_template('/comments.php'); ?>

    </div>

</div>

<?php } ?>



<?php endwhile; endif; ?>