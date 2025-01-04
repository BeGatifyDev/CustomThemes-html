<?php get_header(); ?>

<main>
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <article>
            <h1><?php the_title(); ?></h1>
            <div><?php the_post_thumbnail(); ?></div>
            <div><?php the_content(); ?></div>
            <p>Written by: <?php the_author(); ?></p>
        </article>
    <?php endwhile; else : ?>
        <p>No content available.</p>
    <?php endif; ?>
</main>

<?php get_footer(); ?>
