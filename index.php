<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.8";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

<?php get_header(); ?>
<div id="main">
    
    
<?php if ( is_front_page() ) : ?>
    
    <div id="content">
        <h1>Senaste nyheter</h1>
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <div class="news">
            <a href="<?php the_permalink(); ?>">    
                <?php
                    if ( has_post_thumbnail() ) {
                        the_post_thumbnail();
                    }
                ?>
                <p class="news-content">
                    <span class="news-time">
                        <?php the_time('F jS, Y') ?> av <?php the_author() ?>
                    </span>
                    <br>
                    <?php the_title(); ?>
                    <br>
                </p>
            </a>
        </div>
        <br>
    <?php endwhile; else: ?>
    <p><?php _e('Sorry, no posts matched your criteria.'); ?></p><?php endif; ?>
    <br/><br/>
    
    <iframe src="https://calendar.google.com/calendar/embed?showTitle=0&amp;showDate=0&amp;showPrint=0&amp;showTabs=0&amp;showCalendars=0&amp;showTz=0&amp;mode=WEEK&amp;height=600&amp;wkst=2&amp;hl=sv&amp;src=lukaslarson%40gmail.com&amp;ctz=Europe%2FStockholm" style="border-width:0" width="450" height="600" frameborder="0" scrolling="no"></iframe>
    
    </div>
    <?php get_middlebar(); ?>
    <?php get_sidebar(); ?>
    
<?php else : ?>

    <div id="content-single">
    <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
        <h1>
        <?php
        if ( has_post_thumbnail() ) {
            the_post_thumbnail();
        }
        the_title(); 
        ?>
        </h1>
        <?php the_content(); ?>
        <span class="rss-date"><?php the_time('F jS, Y') ?></span>
        
        <?php endwhile; else: ?>
        <p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
    <?php endif; ?>
    </div>
<?php endif; ?>
    
        
    
    </div>
<div id="delimiter">
</div>
<?php get_footer(); ?>
