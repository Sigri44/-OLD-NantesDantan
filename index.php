<?php get_header(); ?>
<div class="main-content-p">
    <div class="main-content-s">
        <div class="content side-padded-content">
            <div id="grid-container" class="masonry js-masonry">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div class="grid-item">
                    <article id="post-<?php the_ID(); ?>" class="ndt-post-box post-<?php the_ID(); ?> post type-post">
                        <div class="post-body">
                            <div class="post-top-share">
                                <!-- SHARE -->
                            </div>
                            <div class="post-content-body">
                                <h4 class="post-title entry-title">
                                    <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                                </h4>
                                <div class="post-meta-top entry-meta">
                                    <div class="row">
                                        <ul class="post-tags">
                                            <?php the_tags('<li>','</li><li>','</li>'); ?>
                                        </ul>
                                        <?php the_category() ?>
                                    </div>
                                </div>
                                    <?php if(has_post_thumbnail()){ ?>
                                        <div class="figure-link-p">
                                            <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>" rel="lightbox" class="figure-link" title="<?php the_title_attribute(); ?>">
                                                <figure>
                                                    <?php the_post_thumbnail('full'); ?>
                                                </figure>
                                            </a>
                                        </div>
                                        <?php $related_content_class = 'col-sm-8 col-xs-9';} else {$related_content_class = 'col-xs-12';} ?>
                                <div class="post-content entry-summary">
                                    <?php if(is_single()): ?>
                                        <?php the_content(); ?>
                                        <?php else: ?>
                                        <?php the_excerpt(); ?>
                                    <?php endif; ?>
                                </div>
                            </div>
                        </div>
                        <div class="post-meta entry-meta">
                            <div class="meta-date">
                                <i class="fa os-icon-clock-o"></i>
                                <time class="entry-date updated" datetime="<?php echo get_the_date( 'c' ); ?>"><?php echo get_the_date('M j'); ?></time>
                            </div>
                            <div class="meta-author">
                                by <strong class="author vcard"><a href="<?php echo esc_url( get_author_posts_url( get_the_author_meta( 'ID' ) )) ; ?>" class="url fn n" rel="author"><?php the_author(); ?></a></strong>
                            </div>
                        </div>
                    </article>
                </div>
            <?php endwhile; ?>
            <nav class="navigation" id="page-nav"><?php posts_nav_link(' - ','page suivante','page pr&eacute;c&eacute;dente'); ?></nav>
            <?php else : ?><h2>Oooopppsss...</h2> <p>Désolé, mais vous cherchez quelque chose qui ne se trouve pas ici .</p><?php include (TEMPLATEPATH . "/searchform.php"); ?>
            <?php endif; ?>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
<?php get_sidebar(); ?>
<a href="#" class="os-back-to-top"></a>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/infinitescroll.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/masonry.pkgd.min.js"></script>
<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/imagesloaded.min.js"></script>
<script async type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/ndt.js"></script>
<script async src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!--
<script type="text/javascript" src="<?php /*bloginfo('template_directory');*/ ?>/js/back-to-top.js"></script>
-->
</body>
</html>