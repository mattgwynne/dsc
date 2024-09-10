<?php
/**
 * Title: front-page
 * Slug: dsc/front-page
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group"><!-- wp:template-part {"slug":"header","area":"header","align":"full"} /--></div>
<!-- /wp:group -->

<!-- wp:cover {"useFeaturedImage":true,"dimRatio":90,"overlayColor":"primary-100","isUserOverlayColor":true,"minHeight":500,"contentPosition":"center center","isDark":false,"style":{"spacing":{"padding":{"bottom":"100px","top":"150px"},"margin":{"top":"-100px"}}},"layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-cover is-light" style="margin-top:-100px;padding-top:150px;padding-bottom:100px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-primary-100-background-color has-background-dim-90 has-background-dim"></span><div class="wp-block-cover__inner-container"><!-- wp:columns {"verticalAlignment":null,"align":"wide","style":{"spacing":{"margin":{"top":"25px"},"blockGap":{"left":"var:preset|spacing|60"}}}} -->
<div class="wp-block-columns alignwide" style="margin-top:25px"><!-- wp:column {"verticalAlignment":"center","width":"60%","style":{"spacing":{"padding":{"top":"50px"}}}} -->
<div class="wp-block-column is-vertically-aligned-center" style="padding-top:50px;flex-basis:60%"><!-- wp:mfb/meta-field-block {"fieldType":"acf","fieldName":"page_title","tagName":"h1"} /-->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:mfb/meta-field-block {"fieldName":"page_intro","hideEmpty":true,"style":{"spacing":{"margin":{"top":"var:preset|spacing|20"}}},"fontSize":"medium"} /--></div>
<!-- /wp:group -->

<!-- wp:buttons -->
<div class="wp-block-buttons"><!-- wp:button {"className":"is-style-arrow-button"} -->
<div class="wp-block-button is-style-arrow-button"><a class="wp-block-button__link wp-element-button" href="https://dsctheme-com.stackstaging.com/contact/">Book an appointment </a></div>
<!-- /wp:button --></div>
<!-- /wp:buttons --></div>
<!-- /wp:column -->

<!-- wp:column {"verticalAlignment":"bottom","width":"40%","style":{"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}}}} -->
<div class="wp-block-column is-vertically-aligned-bottom" style="padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px;flex-basis:40%"><!-- wp:image {"aspectRatio":"3/4","scale":"cover","sizeSlug":"full","linkDestination":"none","className":"is-style-rounded hide-mobile","style":{"shadow":"6px 6px 9px rgba(0, 0, 0, 0.2)"}} -->
<figure class="wp-block-image size-full is-style-rounded hide-mobile"><img src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/lafayett-zapata-montero-XBFk6NFB_yg-unsplash.jpg" alt="" class="" style="box-shadow:6px 6px 9px rgba(0, 0, 0, 0.2);aspect-ratio:3/4;object-fit:cover"/></figure>
<!-- /wp:image --></div>
<!-- /wp:column --></div>
<!-- /wp:columns --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","className":"site-content is-style-default","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"0","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"backgroundColor":"theme-1"} -->
<main class="wp-block-group site-content is-style-default has-theme-1-background-color has-background" style="margin-top:0;padding-top:0;padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:post-content {"layout":{"type":"constrained"}} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->