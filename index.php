<?php get_header(); ?>

<main>
    <header>
        <h1>Welcome to OLUWAFEMI OLUWATOBI BEST BLOG</h1>
        <h2><p>Discover the latest insights and stories</p></h2>
    </header>

    <!-- Portfolio Button -->
    <div class="portfolio-button">
        <a href="http://localhost/mywebsite/?page_id=24" class="button">View My Portfolio</a>
    </div>

    <div class="posts-grid">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
            <div class="post-card">
                <!-- Featured Image -->
                <?php if (has_post_thumbnail()) : ?>
                    <img src="<?php the_post_thumbnail_url('medium'); ?>" alt="<?php the_title(); ?>">
                <?php endif; ?>

                <div class="content">
                    <!-- Post Title -->
                    <h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>

                    <!-- Post Excerpt -->
                    <p><?php echo wp_trim_words(get_the_content(), 20); ?></p>

                    <!-- Read More Button -->
                    <a class="read-more" href="<?php the_permalink(); ?>">Read More</a>
                </div>
            </div>
        <?php endwhile; else : ?>
            <p>No posts found.</p>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?>
