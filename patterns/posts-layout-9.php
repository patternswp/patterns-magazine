<?php
/**
 * Title: Posts Layout 9
 * Slug: patterns-magazine/posts-layout-9
 * Categories: posts, query
 * Block Types: core/query
 * Description: A layout featuring post title, excerpt, author, and date—commonly used in the WordPress Query Loop block to display posts in a repeated, structured format.
 *
 * @package    Patterns_Magazine
 * @subpackage Patterns_Magazine/patterns
 * @since      1.0.0
 */

?>
<!-- wp:query {"queryId":23,"query":{"perPage":"5","pages":0,"offset":0,"postType":"post","order":"desc","orderBy":"date","author":"","search":"","exclude":[],"sticky":"exclude","inherit":false},"metadata":{}} -->
<div class="wp-block-query"><!-- wp:post-template {"style":{"spacing":{"blockGap":"var:preset|spacing|20"}},"layout":{"type":"default","columnCount":3}} -->
<!-- wp:group {"style":{"spacing":{"blockGap":"var:preset|spacing|20","padding":{"top":"var:preset|spacing|20"}},"border":{"top":{"color":"var:preset|color|tertiary","style":"dashed","width":"1px"}}},"layout":{"type":"flex","flexWrap":"nowrap"}} -->
<div class="wp-block-group" style="border-top-color:var(--wp--preset--color--tertiary);border-top-style:dashed;border-top-width:1px;padding-top:var(--wp--preset--spacing--20)"><!-- wp:post-featured-image {"aspectRatio":"1","width":"60px","height":"60px","style":{"border":{"radius":"100px","width":"3px"}},"borderColor":"primary"} /-->

<!-- wp:post-title {"level":4,"isLink":true,"fontSize":"medium"} /--></div>
<!-- /wp:group -->
<!-- /wp:post-template --></div>
<!-- /wp:query -->
