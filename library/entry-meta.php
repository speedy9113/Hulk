<?php
if(!function_exists('FoundationPress_entry_meta')) :
    function FoundationPress_entry_meta() {
        echo '<div class="meta">';
        echo '<p class="byline author"><a href="'. get_author_posts_url(get_the_author_meta('ID')) .'" rel="author" class="fn">'. get_the_author() .'</a> / ';
        echo '<time class="updated" datetime="'. get_the_time('c') .'">'. get_the_date(). get_the_time() .'</time></p>';
        echo '</div>';
    }
endif;
?>
