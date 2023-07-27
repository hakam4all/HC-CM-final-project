<?php
/**
 * Title: front-page
 * Slug: iff2023/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:template-part {"slug":"header","tagName":"header"} /-->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","textColor":"pale-pink"} -->
<h2 class="wp-block-heading has-text-align-center has-pale-pink-color has-text-color">LATEST NEWS</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":0,"query":{"perPage":10,"pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":true,"taxQuery":null,"parents":[]},"tagName":"main","displayLayout":{"type":"flex","columns":4},"layout":{"type":"default"}} -->
<main class="wp-block-query"><!-- wp:post-template -->
<!-- wp:group -->
<div class="wp-block-group"><!-- wp:post-featured-image {"isLink":true,"height":"250px","style":{"border":{"width":"2px","radius":"10px"}},"borderColor":"luminous-vivid-orange"} /-->

<!-- wp:post-title {"isLink":true} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></main>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"layout":{"type":"default"}} -->
<div class="wp-block-group"><!-- wp:heading {"textAlign":"center","textColor":"pale-pink"} -->
<h2 class="wp-block-heading has-text-align-center has-pale-pink-color has-text-color">TODAY'S FILMS</h2>
<!-- /wp:heading -->

<!-- wp:query {"queryId":8,"query":{"perPage":"4","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"","inherit":false},"displayLayout":{"type":"flex","columns":4}} -->
<div class="wp-block-query"><!-- wp:post-template -->
<!-- wp:post-title {"textAlign":"center","level":3,"isLink":true} /-->

<!-- wp:post-featured-image {"isLink":true,"align":"wide","style":{"border":{"radius":"10px","width":"2px"}},"borderColor":"luminous-vivid-orange"} /-->

<!-- wp:post-excerpt /-->

<!-- wp:post-date /-->
<!-- /wp:post-template --></div>
<!-- /wp:query --></div>
<!-- /wp:group -->

<!-- wp:group {"style":{"spacing":{"margin":{"top":"var:preset|spacing|40","bottom":"var:preset|spacing|40"},"padding":{"top":"var:preset|spacing|60","bottom":"var:preset|spacing|60"}}},"backgroundColor":"luminous-vivid-orange","textColor":"white","layout":{"type":"constrained"}} -->
<div class="wp-block-group has-white-color has-luminous-vivid-orange-background-color has-text-color has-background" style="margin-top:var(--wp--preset--spacing--40);margin-bottom:var(--wp--preset--spacing--40);padding-top:var(--wp--preset--spacing--60);padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:heading {"textAlign":"center","textColor":"white"} -->
<h2 class="wp-block-heading has-text-align-center has-white-color has-text-color">SUBMIT YOUR FILM</h2>
<!-- /wp:heading -->

<!-- wp:heading {"textAlign":"center","level":3} -->
<h3 class="wp-block-heading has-text-align-center">Submission for LFF 2024 are open!</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Please submit your films before July 20,2024.</p>
<!-- /wp:paragraph -->

<!-- wp:buttons {"layout":{"type":"flex","justifyContent":"center"},"style":{"spacing":{"margin":{"bottom":"var:preset|spacing|30"}}}} -->
<div class="wp-block-buttons" style="margin-bottom:var(--wp--preset--spacing--30)"><!-- wp:button {"textAlign":"center","backgroundColor":"white","textColor":"luminous-vivid-orange","className":"is-style-outline"} -->
<div class="wp-block-button is-style-outline"><a class="wp-block-button__link has-luminous-vivid-orange-color has-white-background-color has-text-color has-background has-text-align-center wp-element-button">SUBMIT </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:group -->

<!-- wp:kadence/rowlayout {"uniqueID":"_ef1548-95","columns":3,"colLayout":"equal","kbVersion":2} -->
<!-- wp:kadence/column {"borderWidth":["","","",""],"uniqueID":"_e7f3ff-f6","verticalAlignment":"middle","borderStyle":[{"top":["","",""],"right":["","",""],"bottom":["","",""],"left":["","",""],"unit":"px"}]} -->
<div class="wp-block-kadence-column kadence-column_e7f3ff-f6"><div class="kt-inside-inner-col"><!-- wp:image {"align":"center","id":101,"width":120,"height":90,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image aligncenter size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Camera.png" alt="" class="wp-image-101" width="120" height="90"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"luminous-vivid-orange"} -->
<h3 class="wp-block-heading has-text-align-center has-luminous-vivid-orange-color has-text-color">JOIN/RENEW MEMBER</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Experience the best of FILM Festival and become a member today.</p>
<!-- /wp:paragraph -->

<!-- wp:more -->
<!--more-->
<!-- /wp:more --></div></div>
<!-- /wp:kadence/column -->

<!-- wp:kadence/column {"id":2,"borderWidth":["","","",""],"uniqueID":"_d59055-8a","borderStyle":[{"top":["","",""],"right":["","",""],"bottom":["","",""],"left":["","",""],"unit":"px"}]} -->
<div class="wp-block-kadence-column kadence-column_d59055-8a"><div class="kt-inside-inner-col"><!-- wp:image {"id":104,"width":120,"height":90,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/Donate-1.png" alt="" class="wp-image-104" width="120" height="90"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"luminous-vivid-orange"} -->
<h3 class="wp-block-heading has-text-align-center has-luminous-vivid-orange-color has-text-color">DONATE</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Support art and creativity - Contribute to our festival's growth.</p>
<!-- /wp:paragraph -->

<!-- wp:more -->
<!--more-->
<!-- /wp:more --></div></div>
<!-- /wp:kadence/column -->

<!-- wp:kadence/column {"id":3,"borderWidth":["","","",""],"uniqueID":"_1ed7ea-ff","borderStyle":[{"top":["","",""],"right":["","",""],"bottom":["","",""],"left":["","",""],"unit":"px"}]} -->
<div class="wp-block-kadence-column kadence-column_1ed7ea-ff"><div class="kt-inside-inner-col"><!-- wp:kadence/column {"id":2,"borderWidth":["","","",""],"uniqueID":"_bc3d24-e3","borderStyle":[{"top":["","",""],"right":["","",""],"bottom":["","",""],"left":["","",""],"unit":"px"}]} -->
<div class="wp-block-kadence-column kadence-column_bc3d24-e3"><div class="kt-inside-inner-col"><!-- wp:image {"id":105,"width":120,"height":90,"sizeSlug":"full","linkDestination":"none"} -->
<figure class="wp-block-image size-full is-resized"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/volunteer-1.png" alt="" class="wp-image-105" width="120" height="90"/></figure>
<!-- /wp:image -->

<!-- wp:heading {"textAlign":"center","level":3,"textColor":"luminous-vivid-orange"} -->
<h3 class="wp-block-heading has-text-align-center has-luminous-vivid-orange-color has-text-color">VOLUTEER</h3>
<!-- /wp:heading -->

<!-- wp:paragraph {"align":"center"} -->
<p class="has-text-align-center">Help us create magic - be a festival volunteer today.</p>
<!-- /wp:paragraph -->

<!-- wp:more -->
<!--more-->
<!-- /wp:more --></div></div>
<!-- /wp:kadence/column --></div></div>
<!-- /wp:kadence/column -->
<!-- /wp:kadence/rowlayout -->

<!-- wp:group {"layout":{"type":"flex","orientation":"vertical","justifyContent":"center","verticalAlignment":"center","flexWrap":"wrap"},"fontSize":"small"} -->
<div class="wp-block-group has-small-font-size"><!-- wp:heading -->
<h2 class="wp-block-heading">DONT MISS OUT ON OUR NEWS!</h2>
<!-- /wp:heading -->

<!-- wp:paragraph -->
<p>Join our newsletter to get the latest LEF updates.</p>
<!-- /wp:paragraph -->

<!-- wp:kadence/form {"uniqueID":"_f1f0fa-23","hAlign":"center","fields":[{"label":"Email","showLabel":true,"placeholder":"","default":"","description":"","rows":4,"options":[{"value":"","label":""}],"multiSelect":false,"inline":false,"showLink":false,"min":"","max":"","type":"email","required":true,"width":["100","",""],"auto":"","errorMessage":"","requiredMessage":"","slug":"","ariaLabel":""}],"style":[{"showRequired":false,"size":"standard","deskPadding":["","","",""],"tabletPadding":["","","",""],"mobilePadding":["","","",""],"color":"","requiredColor":"","background":"#ffffff","border":"","backgroundOpacity":1,"borderOpacity":1,"borderRadius":"","borderWidth":["","","",""],"colorActive":"","backgroundActive":"","borderActive":"","backgroundActiveOpacity":1,"borderActiveOpacity":1,"gradient":["#999999",1,0,100,"linear",180,"center center"],"gradientActive":["#777777",1,0,100,"linear",180,"center center"],"backgroundType":"solid","backgroundActiveType":"solid","boxShadow":[false,"#000000",0.200000000000000011102230246251565404236316680908203125,1,1,2,0,false],"boxShadowActive":[false,"#000000",0.40000000000000002220446049250313080847263336181640625,2,2,3,0,false],"fontSize":["","",""],"fontSizeType":"px","lineHeight":["","",""],"lineType":"px","rowGap":"","rowGapType":"px","gutter":"","gutterType":"px","tabletRowGap":"","mobileRowGap":"","tabletGutter":"","mobileGutter":""}],"labelFont":[{"color":"#ffffff","size":["","",""],"sizeType":"px","lineHeight":["","",""],"lineType":"px","letterSpacing":"","textTransform":"","family":"","google":"","style":"","weight":"","variant":"","subset":"","loadGoogle":true,"padding":["","","",""],"margin":["","","",""]}],"submit":[{"label":"SUBSCRIBE!","width":["100","",""],"size":"standard","widthType":"auto","fixedWidth":["","",""],"align":["","",""],"deskPadding":["","","",""],"tabletPadding":["","","",""],"mobilePadding":["","","",""],"color":"#ff6900","background":"#ffffff","border":"#ff6900","backgroundOpacity":1,"borderOpacity":1,"borderRadius":"","borderWidth":["","","",""],"colorHover":"","backgroundHover":"","borderHover":"","backgroundHoverOpacity":1,"borderHoverOpacity":1,"icon":"","iconSide":"right","iconHover":false,"cssClass":"","gradient":["#999999",1,0,100,"linear",180,"center center"],"gradientHover":["#777777",1,0,100,"linear",180,"center center"],"btnStyle":"basic","btnSize":"standard","backgroundType":"solid","backgroundHoverType":"solid","boxShadow":[true,"#ff6900",1,1,1,2,0,false],"boxShadowHover":[false,"#000000",0.40000000000000002220446049250313080847263336181640625,2,2,3,0,false]}]} -->
<div class="wp-block-kadence-form kadence-form-_f1f0fa-23 kb-form-wrap kb-form-align-center"><form class="kb-form" action="" method="post"><div class="kadence-blocks-form-field kb-field-desk-width-100 kb-input-size-standard"><label for="kb_field__f1f0fa-23_0">Email</label><input name="kb_field_0" id="kb_field__f1f0fa-23_0" data-label="Email" type="email" placeholder="" value="" data-type="email" class="kb-field kb-text-style-field kb-email-field kb-field-0" data-required="yes"/></div><input type="hidden" name="_kb_form_id" value="_f1f0fa-23"/><input type="hidden" name="_kb_form_post_id" value=""/><input type="hidden" name="action" value="kb_process_ajax_submit"/><input class="kadence-blocks-field verify" type="text" name="_kb_verify_email" autocomplete="off" aria-hidden="true" placeholder="Email" tabindex="-1"/><div class="kadence-blocks-form-field kb-submit-field kb-field-desk-width-100"><button class="kb-forms-submit button kb-button-size-standard kb-button-width-auto">SUBSCRIBE!</button></div></form></div>
<!-- /wp:kadence/form --></div>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","tagName":"footer"} /-->