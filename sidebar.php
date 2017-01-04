<div id="sidebar">
<div class="sidebar-header">
SVRF & Skåne RF
</div>
<?php
include_once(ABSPATH . WPINC . '/feed.php');
$feed = array('http://www.ridsport.se/rss', 'http://www.ridsport.se/Distriktssajter/skane/RSS/');
$rss = fetch_feed($feed);
if (!is_wp_error( $rss ) ) :
        $maxitems = $rss->get_item_quantity(5);
    $rss_items = $rss->get_items(0, $maxitems);
    if ($rss_items):
        echo "<ul>\n";
        foreach ( $rss_items as $item ) : 
            //instead of a bunch of string concatenation or echoes, I prefer the terseness of printf 
            //(http://php.net/manual/en/function.printf.php)
            //printf('<li><a href="%s">%s</a><p>%s</p></li>',$item->get_permalink(),$item->get_title(),$item->get_description() );
          printf('<span class="rss-date">%s</span><br/><li><a href="%s">%s</a></li><br>', $item->get_date(), $item->get_permalink(),$item->get_title() );
        endforeach;
        echo "</ul>\n";
    endif;
endif;
?>

</div>
