<?php
/**
 * Title: wp-custom-template-film-template
 * Slug: iff2023/wp-custom-template-film-template
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header-for-films","area":"uncategorized"} /-->

<!-- wp:group {"style":{"color":{"background":"#161616"},"spacing":{"padding":{"top":"0","right":"0","bottom":"var:preset|spacing|60","left":"0"},"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background" style="background-color:#161616;margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:var(--wp--preset--spacing--60);padding-left:0"><!-- wp:group {"style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"vivid-purple","layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group has-vivid-purple-background-color has-background" style="margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)"><!-- wp:heading {"level":3,"textColor":"white"} -->
<h3 class="wp-block-heading has-white-color has-text-color"><strong>WELCOME TO OUR FILM FESTIVAL</strong></h3>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:query {"queryId":13,"query":{"perPage":"12","pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[5]}},"displayLayout":{"type":"flex","columns":4},"layout":{"type":"constrained","wideSize":"80%"}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} -->
<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"border":{"top":{"color":"var:preset|color|vivid-purple","width":"10px"}}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":443,"width":17,"height":29,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icon_film.png" alt="" class="wp-image-443" width="17" height="29"/></figure>
<!-- /wp:image -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:read-more {"content":"","style":{"spacing":{"padding":{"right":"30%","left":"30%"}}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:template-part {"slug":"footer","tagName":"footer"} /--></div>
<!-- /wp:group -->