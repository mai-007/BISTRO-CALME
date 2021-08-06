<?php if ( have_posts() ) : ?>
<aside class="archive">
    <h2 class="archive_title">最新記事</h2>
    <ul class="archive_list">
        <?php while ( have_posts() ) : the_post(); ?>
            <li>
                <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
            </li>
        <?php endwhile; ?>
    </ul>
</aside>
<?php endif; ?>
