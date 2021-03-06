<?php /* Template Name: Archive Page */ ?>
﻿<?php get_header(); ?>

<!-- everything after the body tag goes here -->
<div class="container">
    <div class="col-md-4">
        <?php get_sidebar(); ?>
    </div>
    <div class="col-md-8">
        <?php framepress_breadcrumb(); ?>

        <?php the_post(); ?>
        <h1 class="entry-title"><?php the_title(); ?></h1>

        <?php get_search_form(); ?>

        <h2>Archives by Month:</h2>
        <ul>
            <?php wp_get_archives('type=monthly'); ?>
        </ul>

        <h2>Archives by Subject:</h2>
        <ul>
            <?php wp_list_categories(); ?>
        </ul>
    </div>
</div>

﻿<?php get_footer(); ?>