<?php get_header(); ?>
<div class="main-content-p">
    <div class="main-content-s">
        <div class="content side-padded-content reading-mode-content">
            <?php if(have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
            <div class="post-navigation-unique">
                <div class="post-navigation-previous">
                    <div class="arrow"><i class="fa os-icon-angle-up"></i></div>
                    <div class="caption">Article précédent</div>
                    <div class="navi-link"><?php previous_post_link('%link') ?></div>
                </div>
            </div>
            <article id="post-<?php the_ID(); ?>" class="ndt-page-box post-<?php the_ID(); ?> post type-post">
                <div class="post-body">
                    <div class="single-post-top-features">
                        <!--
                        <div class="single-post-top-share">
                            <i class="fa os-icon-plus share-activator-icon share-activator"></i>
                            <span class="share-activator-label share-activator caption">Share</span>
                            <div class="os_social-head-w"><div class="os_social"><a class="os_social_twitter_share" href="http://twitter.com/share?url=http://nantesdantan.free-h.net/bienvenue-sur-nantes-dantan/&amp;text=Nantes+%26%238211%3B+La+ville+d%26rsquo%3Bapr%C3%A8s+guerre" target="_blank"><img src="http://nantesdantan.free-h.net/wp-content/themes/pluto-osetin-theme/assets/images/socialicons/twitter.png" title="Twitter" class="os_social" alt="Tweet about this on Twitter"></a><a class="os_social_pinterest_share" target="_blank" href="//www.pinterest.com/pin/create/button/?url=http://nantesdantan.free-h.net/bienvenue-sur-nantes-dantan/&amp;media=&amp;description=Nantes+%26%238211%3B+La+ville+d%26rsquo%3Bapr%C3%A8s+guerre"><img src="http://nantesdantan.free-h.net/wp-content/themes/pluto-osetin-theme/assets/images/socialicons/pinterest.png" title="Pinterest" class="os_social" alt="Pin on Pinterest"></a><a class="os_social_linkedin_share" href="http://www.linkedin.com/shareArticle?mini=true&amp;url=http://nantesdantan.free-h.net/bienvenue-sur-nantes-dantan/" target="_blank"><img src="http://nantesdantan.free-h.net/wp-content/themes/pluto-osetin-theme/assets/images/socialicons/linkedin.png" title="Linkedin" class="os_social" alt="Share on LinkedIn"></a><a class="os_social_google_share" href="https://plus.google.com/share?url=http://nantesdantan.free-h.net/bienvenue-sur-nantes-dantan/" target="_blank"><img src="http://nantesdantan.free-h.net/wp-content/themes/pluto-osetin-theme/assets/images/socialicons/google.png" title="Google+" class="os_social" alt="Share on Google+"></a><a class="os_social_email_share" href="mailto:?Subject=Nantes+%26%238211%3B+La+ville+d%26rsquo%3Bapr%C3%A8s+guerre&amp;Body=%20http://nantesdantan.free-h.net/bienvenue-sur-nantes-dantan/"><img src="http://nantesdantan.free-h.net/wp-content/themes/pluto-osetin-theme/assets/images/socialicons/email.png" title="Email" class="os_social" alt="Email this to someone"></a><a class="os_social_facebook_share" href="http://www.facebook.com/sharer.php?u=http://nantesdantan.free-h.net/bienvenue-sur-nantes-dantan/" target="_blank"><img src="http://nantesdantan.free-h.net/wp-content/themes/pluto-osetin-theme/assets/images/socialicons/facebook.png" title="Facebook" class="os_social" alt="Share on Facebook"></a><a class="os_social_vk_share" href="http://vkontakte.ru/share.php?url=http://nantesdantan.free-h.net/bienvenue-sur-nantes-dantan/" target="_blank"><img src="http://nantesdantan.free-h.net/wp-content/themes/pluto-osetin-theme/assets/images/socialicons/vkontakte.png" title="Vkontakte" class="os_social" alt="Share on Vkontakte"></a><a class="os_social_vk_share" href="http://www.odnoklassniki.ru/dk?st.cmd=addShare&amp;st._surl=http://nantesdantan.free-h.net/bienvenue-sur-nantes-dantan/" target="_blank"><img src="http://nantesdantan.free-h.net/wp-content/themes/pluto-osetin-theme/assets/images/socialicons/vkontakte.png" title="Vkontakte" class="os_social" alt="Share on Vkontakte"></a></div></div>
                        </div>
                        -->
                    </div>
                    <h1 class="post-title entry-title">
                        <a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
                    </h1>
                    <div class="post-meta-top entry-meta">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="post-date">Posted on <?php the_time('j F Y') ?></div>
                                <div class="post-author">by <strong><?php the_author() ?></strong></div>
                            </div>
                            <div class="col-md-12">
                                <ul class="post-tags">
                                    <?php the_tags('<li>','</li><li>','</li>'); ?>
                                </ul>
                                <ul class="post-categories">
                                    <li><?php the_category() ?></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="post-media-body">
                        <div class="figure-link-p">
                            <?php if(has_post_thumbnail()){ ?>                        
                            <a href="<?php echo wp_get_attachment_url(get_post_thumbnail_id($post->ID));?>" rel="lightbox" class="figure-link os-lightbox-activator" title="<?php the_title_attribute(); ?>">
                                <figure>
                                    <?php the_post_thumbnail('full'); ?>
                                    <div class="figure-shade"></div>
                                    <i class="figure-icon os-icon-thin-098_zoom_in_magnify_plus"></i>
                                </figure>
                            </a>
                            <?php $related_content_class = 'col-sm-8 col-xs-9';} else {$related_content_class = 'col-xs-12';} ?>
                        </div>
                    </div>
                    <div class="post-content entry-summary">
                        <?php if(is_single()): ?>
                            <?php the_content(); ?>
                            <?php else: ?>
                            <?php the_excerpt(); ?>
                        <?php endif; ?>
                    </div>
                </div>
            </article>
            <div class="post-navigation-unique">
                <div class="post-navigation-next">
                    <div class="navi-link"><?php next_post_link('%link'); ?></div>
                    <div class="caption">Article suivant</div>
                    <div class="arrow"><i class="fa os-icon-angle-down"></i></div>
                </div>
            </div>
            
            <div class="sidebar-under-post"></div>
            
            <div id="comments" class="comments-area"><?php comments_template(); ?></div>
            
            <?php endwhile; ?>
            <div class="navmenu"> 
            <?php else : ?><p>Désolé, aucun article ne correspond à vos critères.</p>
            <?php endif; ?>
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
</body>
</html>