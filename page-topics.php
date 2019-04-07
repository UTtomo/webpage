

<?php
/* Template Name: index */
get_header(); ?>

<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
<script>
  (adsbygoogle = window.adsbygoogle || []).push({
    google_ad_client: "ca-pub-4107369977192515",
    enable_page_level_ads: true
  });
</script>

<!-- Main theme -->
<div class="dark" >
<div class="container text-contents" >
    
<div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
    <?php if(function_exists('bcn_display'))
    {
        bcn_display();
    }?>
</div>

<div class="row" >
    <div class="blog-inner cssgrid col-lg-8 col-xs-12">
        <?php
        global $post;
        $args = array( 'posts_per_page' => 15 );
        $myposts = get_posts( $args );
        foreach( $myposts as $post ) {
         setup_postdata($post);
         ?>

            <div class="blog-card">
            <a href="<?php the_permalink() ?>">
                <div class="cardsa">

                    <div class="imagebox">
                      
                    
                      <a href="<?php the_permalink() ?>">
 
                        <?php if(has_post_thumbnail()): ?>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('large'); ?>
                        </a>
                        <?php else: ?>
                        <a href="<?php the_permalink(); ?>"><img src="/dist/images/noimage.gif" alt="no image"></a>
                        <?php endif; ?>
                     </a>
                     
                   </div>
                    <div class="textbox">
                    <a href="<?php the_permalink(); ?>">
                    <figure>
                     <figcaption>
                     <span style="font-family: 'ＭＳ Ｐ明朝'"><h3 class="theme-title"><?php the_title(); ?></h3></span>
                      <dl>
                             <p><?php the_excerpt(); ?></p>
                      </figcaption>
                    </figure>
                    </a>
                    </div> 
                </div>
        </a>
            </div>
         <?php
          }
         wp_reset_postdata();
         ?>
 
          
        
     </div>

     <div class="col-lg-4 col-xs-12">
     <?php  get_sidebar(); ?>
  </div>
  </div>
 </div>
</div>

<?php the_posts_navigation(); ?>
 



  <!-- topics -->

<?php get_footer(); ?>
