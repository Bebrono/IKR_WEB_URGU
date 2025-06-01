<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <div class="posts-grid">
        <?php while (have_posts()) : the_post(); ?>
            <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                <?php if (has_post_thumbnail()) : ?>
                    <div class="post-thumbnail">
                        <?php the_post_thumbnail('large'); ?>
                    </div>
                <?php endif; ?>

                <header class="entry-header">
                    <?php the_title('<h2 class="entry-title"><a href="' . esc_url(get_permalink()) . '">', '</a></h2>'); ?>
                    
                    <div class="entry-meta">
                        <span class="posted-on">
                            <?php echo get_the_date(); ?>
                        </span>
                    </div>
                </header>

                <div class="entry-content">
                    <?php the_excerpt(); ?>
                </div>

                <footer class="entry-footer">
                    <a href="<?php the_permalink(); ?>" class="read-more">Читать далее</a>
                </footer>
            </article>
        <?php endwhile; ?>
    </div>

    <?php the_posts_pagination(); ?>

<?php else : ?>
    <p><?php _e('Записей не найдено.', 'ikr-theme'); ?></p>
<?php endif; ?>

<?php get_footer(); ?> 