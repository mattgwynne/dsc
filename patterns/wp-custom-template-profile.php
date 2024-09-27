<?php
/**
 * Title: wp-custom-template-profile
 * Slug: dsc-dev/wp-custom-template-profile
 * Categories: hidden
 * Inserter: no
 */
?>
<!-- wp:group {"style":{"position":{"type":"sticky","top":"0px"},"spacing":{"margin":{"top":"10px"},"padding":{"top":"10px"}}},"className":"masthead","layout":{"type":"constrained"}} -->
<div class="wp-block-group masthead" style="margin-top:10px;padding-top:10px"><!-- wp:group {"align":"wide","style":{"position":{"type":""}},"layout":{"type":"constrained"}} -->
<div class="wp-block-group alignwide"><!-- wp:template-part {"slug":"header","area":"header","align":"wide"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group -->

<!-- wp:cover {"url":"<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/circle-pattern.jpg","dimRatio":80,"isUserOverlayColor":true,"minHeight":500,"gradient":"custom-p-to-t","contentPosition":"center center","style":{"spacing":{"padding":{"right":"15px","bottom":"50px","left":"15px","top":"200px"}}},"className":"minusmargin","layout":{"type":"constrained","contentSize":""}} -->
<div class="wp-block-cover minusmargin" style="padding-top:200px;padding-right:15px;padding-bottom:50px;padding-left:15px;min-height:500px"><span aria-hidden="true" class="wp-block-cover__background has-background-dim-80 has-background-dim wp-block-cover__gradient-background has-background-gradient has-custom-p-to-t-gradient-background"></span><img class="wp-block-cover__image-background " alt="" src="<?php echo esc_url( get_stylesheet_directory_uri() ); ?>/assets/images/circle-pattern.jpg" data-object-fit="cover"/><div class="wp-block-cover__inner-container"><!-- wp:group {"align":"wide","style":{"spacing":{"padding":{"top":"25px","right":"25px","bottom":"25px","left":"25px"}}},"layout":{"type":"constrained","justifyContent":"left","contentSize":"1000px"}} -->
<div class="wp-block-group alignwide" style="padding-top:25px;padding-right:25px;padding-bottom:25px;padding-left:25px"><!-- wp:post-title {"level":1} /-->

<!-- wp:group {"layout":{"type":"constrained","justifyContent":"left","contentSize":"800px"}} -->
<div class="wp-block-group"><!-- wp:mfb/meta-field-block {"fieldName":"page_intro","fieldSettings":[],"hideEmpty":true,"fontSize":"medium"} /--></div>
<!-- /wp:group --></div>
<!-- /wp:group --></div></div>
<!-- /wp:cover -->

<!-- wp:group {"tagName":"main","style":{"spacing":{"margin":{"top":"0"},"padding":{"top":"50px","bottom":"var:preset|spacing|60"},"blockGap":"var:preset|spacing|50"}},"className":"site-content is-style-default","layout":{"type":"constrained"}} -->
<main class="wp-block-group site-content is-style-default" style="margin-top:0;padding-top:50px;padding-bottom:var(--wp--preset--spacing--60)"><!-- wp:columns {"align":"wide","style":{"spacing":{"blockGap":{"top":"25px","left":"25px"}}}} -->
<div class="wp-block-columns alignwide"><!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"},"blockGap":"25px"}}} -->
<div class="wp-block-column" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;flex-basis:33.33%"><!-- wp:post-featured-image {"width":"100%","height":"","style":{"border":{"radius":"10px"}}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"66.66%"} -->
<div class="wp-block-column" style="flex-basis:66.66%"><!-- wp:post-content {"layout":{"type":"constrained"}} /--></div>
<!-- /wp:column -->

<!-- wp:column {"width":"33.33%","style":{"spacing":{"padding":{"top":"10px","right":"10px","bottom":"10px","left":"10px"},"blockGap":"25px"}}} -->
<div class="wp-block-column" style="padding-top:10px;padding-right:10px;padding-bottom:10px;padding-left:10px;flex-basis:33.33%"><!-- wp:paragraph -->
<p><a href="https://dsc-devtheme-com.stackstaging.com/about/#team">Back to all team &gt;</a></p>
<!-- /wp:paragraph --></div>
<!-- /wp:column --></div>
<!-- /wp:columns -->

<!-- wp:block {"ref":786} /--></main>
<!-- /wp:group -->

<!-- wp:template-part {"slug":"footer","area":"footer"} /-->