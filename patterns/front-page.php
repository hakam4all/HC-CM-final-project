<?php
/**
 * Title: front-page
 * Slug: iff2023/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header"} /-->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"0","right":"0","bottom":"0","left":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0;padding-top:0;padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|20","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"},"margin":{"top":"0","right":"0","bottom":"0","left":"0"}}},"backgroundColor":"vivid-purple","textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-vivid-purple-background-color has-text-color has-background" style="margin-top:0;margin-right:0;margin-bottom:0;margin-left:0;padding-top:var(--wp--preset--spacing--20);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">WELCOME TO OUR FILM FESTIVAL</h2>
<!-- /wp:heading --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"},"padding":{"top":"var:preset|spacing|60","right":"0","bottom":"0","left":"0"}},"color":{"background":"#161616"}},"layout":{"type":"default"}} -->
<div class="wp-block-group has-background" style="background-color:#161616;margin-top:0;margin-bottom:0;padding-top:var(--wp--preset--spacing--60);padding-right:0;padding-bottom:0;padding-left:0"><!-- wp:query {"queryId":0,"query":{"perPage":"8","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[5]},"parents":[]},"tagName":"main","displayLayout":{"type":"flex","columns":4},"layout":{"type":"constrained","wideSize":"80%"}} -->
<main class="wp-block-query"><!-- wp:post-template {"style":{"color":{"background":"#161616"}}} -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"400px","style":{"border":{"top":{"color":"var:preset|color|vivid-purple","width":"10px"}}}} /-->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group"><!-- wp:image {"id":443,"width":17,"height":29,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/icon_film.png" alt="" class="wp-image-443" width="17" height="29"/></figure>
<!-- /wp:image -->

<!-- wp:post-title {"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /--></div>
<!-- /wp:group -->

<!-- wp:read-more {"textColor":"white"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:kadence/advancedbtn {"uniqueID":"_228c55-d9","inQueryBlock":true} -->
<div class="wp-block-kadence-advancedbtn kb-buttons-wrap kb-btns_228c55-d9"><!-- wp:kadence/singlebtn {"uniqueID":"_c8f89c-cc","text":"<strong>LOAD MORE    ^</strong>","link":"http://localhost/iff2023/wordpress/films/","sizePreset":"large","padding":["","md","","md"],"background":"#9b51e0","backgroundHover":"#f78da7","inQueryBlock":true} /--></div>
<!-- /wp:kadence/advancedbtn --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"backgroundColor":"vivid-purple","layout":{"type":"default"}} -->
<div class="wp-block-group has-vivid-purple-background-color has-background" style="margin-top:0;margin-bottom:0"><!-- wp:heading {"textAlign":"center","style":{"spacing":{"padding":{"top":"var:preset|spacing|50","right":"var:preset|spacing|20","bottom":"var:preset|spacing|20","left":"var:preset|spacing|20"}}},"backgroundColor":"vivid-purple","textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-vivid-purple-background-color has-text-color has-background" style="padding-top:var(--wp--preset--spacing--50);padding-right:var(--wp--preset--spacing--20);padding-bottom:var(--wp--preset--spacing--20);padding-left:var(--wp--preset--spacing--20)">MEET OUR TEAM</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":8,"query":{"perPage":"10","pages":0,"offset":0,"postType":"post","order":"asc","orderBy":"title","author":"","search":"","exclude":[],"sticky":"","inherit":false,"taxQuery":{"category":[7,9,8]}},"displayLayout":{"type":"flex","columns":5},"layout":{"type":"constrained","wideSize":"80%"}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-featured-image {"isLink":true,"height":"250px","scale":"contain","align":"wide"} /-->

<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true,"style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}},"textColor":"white"} /-->

<!-- wp:post-terms {"term":"post_tag","textAlign":"center","style":{"elements":{"link":{"color":{"text":"var:preset|color|white"}}}}} /-->
<!-- /wp:post-template --></div>
<!-- /wp:query -->

<!-- wp:group {"layout":{"type":"flex","flexWrap":"nowrap","justifyContent":"center"}} -->
<div class="wp-block-group"><!-- wp:kadence/advancedbtn {"uniqueID":"_a66f2c-be"} -->
<div class="wp-block-kadence-advancedbtn kb-buttons-wrap kb-btns_a66f2c-be"><!-- wp:kadence/singlebtn {"uniqueID":"_ebf4bf-e9","text":"<strong>LOAD MORE    ^</strong>","link":"http://localhost/iff2023/wordpress/biographies/","sizePreset":"large","padding":["","md","","md"],"background":"#161616","backgroundHover":"#f78da7"} /--></div>
<!-- /wp:kadence/advancedbtn --></div>
<!-- /wp:group -->

<!-- wp:spacer {"height":"60px"} -->
<div style="height:60px" aria-hidden="true" class="wp-block-spacer"></div>
<!-- /wp:spacer --></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"0","bottom":"0"}}},"layout":{"type":"default"}} -->
<div class="wp-block-group" style="margin-top:0;margin-bottom:0"><!-- wp:template-part {"slug":"footer"} /--></div>
<!-- /wp:group -->