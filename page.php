<?php get_header(); ?>
<div class="main-content-p">
    <div class="main-content-s">
        <div class="content side-padded-content">
            <div id="grid-container" class="masonry js-masonry">
                <?php if(have_posts()) : ?>
                    <?php while(have_posts()) : the_post(); ?>
                    <article id="post-<?php the_ID(); ?>" class="ndt-post-box post-<?php the_ID(); ?> post type-post">
                        <h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                        <div class="post_content"><?php the_content(); ?></div>
                    </div>
                <?php endwhile; ?>
                <?php edit_post_link('Modifier cette page', '<p>', '</p>'); ?>
                <h2>Oooopppsss...</h2><p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p><?php include (TEMPLATEPATH . "/searchform.php"); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php get_sidebar(); ?>
</body>
</html>