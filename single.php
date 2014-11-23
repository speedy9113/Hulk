<?php get_header(); ?>
<?php while (have_posts()) : the_post(); ?>
    <div class="featured-image">
        <?php if ( has_post_thumbnail() ): ?>
            <?php the_post_thumbnail(); ?>
        <?php endif; ?>
        <div class="row">
            <div class="small-12 large-8 columns" role="main">
                <header>
                    <h1 class="entry-title"><?php the_title(); ?></h1>
                    <?php FoundationPress_entry_meta(); ?>
                    <?php the_excerpt(); ?>
                </header>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="small-12 large-8 columns" role="main">
            <?php do_action('foundationPress_before_content'); ?>
            <article <?php post_class() ?> id="post-<?php the_ID(); ?>">
                <?php do_action('foundationPress_post_before_entry_content'); ?>
                <div class="entry-content">
                    <?php the_content(); ?>
                </div>
                <footer>
                    <?php wp_link_pages(array('before' => '<nav id="page-nav"><p>' . __('Pages:', 'FoundationPress'), 'after' => '</p></nav>' )); ?>
                    <p><?php the_tags(); ?></p>
                </footer>
                <div class="commentbox">
                    <?php do_action('foundationPress_post_before_comments'); ?>
                    <?php comments_template(); ?>
                    <?php do_action('foundationPress_post_after_comments'); ?>
                </div>
            </article>
<?php endwhile;?>
        <?php do_action('foundationPress_after_content'); ?>
    </div>
    <?php get_sidebar(); ?>
</div>
<?php get_footer(); ?>
