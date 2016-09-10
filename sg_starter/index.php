<?php get_header(); ?>
<div id="hentry-header">
    <div class="container">

        <div class="sm-sm-grid12" id="page-title">
            <?php abc_display_page_title(); ?>
        </div>

        <div class="sm-sm-grid12" id="ariane">
            <?php sg_fil_d_ariane(); ?>
        </div>

    </div>
</div>

<div class="container">
    <div class="sm-grid9">
       <?php get_template_part('loop'); ?>
    </div>

    <aside class="sm-grid3 aside" id="home-sidebar">
        <?php dynamic_sidebar('sidebar-5'); ?>
    </aside> <!-- Fin aside -->
</div>

<?php get_footer(); ?>
