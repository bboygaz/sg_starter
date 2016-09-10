<?php
if ( post_password_required() ) {
    return;
}
?>

<div id="comments" class="comments-area">

    <?php if ( have_comments() ) : ?>
    <h2 class="comments-title">
        <?php
        printf( _nx( 'Un commentaire', '%1$s commentaires', get_comments_number(), 'comments title', 'sgstarter' ),
               number_format_i18n( get_comments_number() ), get_the_title() );
        ?>
    </h2>

    <?php paginate_comments_links(); ?>

    <div class="comment-list">
        <?php
        wp_list_comments( array(
            'style'       => 'div',
            'short_ping'  => true,
            'avatar_size' => 56,
            'max_depth'         => 2,
            'avatar_size' => 0,
        ) );
        ?>
    </div><!-- .comment-list -->

    <?php paginate_comments_links(); ?>

    <?php endif; // have_comments() ?>

    <?php
    // If comments are closed and there are comments, let's leave a little note, shall we?
    if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
    ?>
    <p class="no-comments"><?php _e( 'Comments are closed.', 'sgstarter' ); ?></p>
    <?php endif; ?>

    <?php

    $fields = array(
        'author' =>
        '<div class="comments-form-group">
            <label for="author" class="sm-grid4">' . __( 'Votre prénom', 'sgstarter' ) . '</label> ' . ( $req ? '<span class="required">*</span>' : '' ) .
            '<input class="form-control comment-input sm-grid3" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
        '">
        </div>',

        'email' =>
        '<div class="comment-form-email comments-form-group"><label for="email" class="sm-grid4">' . __( 'Votre adresse e-mail', 'sgstarter' ) . '</label> ' .
        ( $req ? '<span class="required">*</span>' : '' ) .
        '<input class="form-control comment-input sm-grid3" id="email" name="email" type="email" value="' . esc_attr(  $commenter['comment_author_email'] ) .
        '"></div>',
    );

    $args = array(
        'fields' => $fields,
        'comment_field' =>
        '<div class="comments-form-group">
        <textarea class="comment-textarea sm-grid7" id="comment" name="comment" rows="12" aria-required="true">' . '</textarea>
        </div>',
        'class_submit' => 'btn btn-default',
    );

    comment_form($args);
    ?>

</div><!-- .comments-area -->
