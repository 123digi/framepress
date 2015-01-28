﻿<?php 
/**
 * The main template file.
 *
 * @package FramePress
 * @since FramePress 1.0
 */
get_header(); ?>

<!-- everything after the body tag goes here -->
<div class="container">
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-md-8">
        <?php framepress_breadcrumb(); ?>
    
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <!-- display post content -->
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
            <?php endwhile; else : ?>
            <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
        <?php endif; ?>
        <!-- display pagination -->
        <?php framepress_numeric_posts_nav(); ?>
    </div>
</div>

﻿<?php get_footer(); ?>