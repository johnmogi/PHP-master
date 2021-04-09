https://code.tutsplus.com/courses/learn-php-for-wordpress/lessons/why-wordpress-uses-php


post class <?php post_class(); ?>
post id - <? php the_ID(); ?>
post title - <? php the_title(); ?>

wp rest api uses JS - v2.wp-api.org

## coding standards / naming conventions:
function: 
function themename_conventional_naming_method_wordpress(){
}

hyphen: use when declaring class or a file name - 
'before_title' => '<div class="some-hyphen-name"></div>'
front-page.php

0. indentation and spaces / line breaks:

register_sidebar( array(

    'name' => __( 'Some Specific Location', 'johnTheme' ),
    'id' => 'some_specific_location',
    'description' => '( 'a way to send description to user ', 'johnTheme' ),

));

0. single line // line breaks: 

    if ( get_post_type ( $post -> ID) == 'johnthm_foo' && count == 0 ) {
        include( locate_template( 'template-parts/loop-frontpage.php' ));
    }

    if ( get_post_type ( $post -> ID) == 'johnthm_foo' && count == 0 ) {

        include( locate_template( 'template-parts/loop-frontpage.php' ));
        $count++ 

    }

0. proper use of php tag:

<?php
    //a block of php code:
    // in wp allways use full php instead of just open tag
?>

<?php if( have_posts()) while ( have_posts() ) : the_post();  ?>

0. more about coding standards:
https://developer.wordpress.org/coding-standards/wordpress-coding-standards/php/
https://developer.wordpress.org/coding-standards/inline-documentation-standards/php/