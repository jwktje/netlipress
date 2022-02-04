<?php get_header(); ?>

<?php if (have_posts()) : ?>
    <?php while (have_posts()) : the_post(); ?>

        <article>
            <?php the_title(); ?>
            <a class="button" href="<?php the_permalink();?>">
                Read more
            </a>
        </article>

    <?php endwhile; ?>
<?php endif; ?>

<?php get_footer(); ?>
