
<?php
/* Template Name: index */
get_header(); ?>


<!-- Main theme -->



<div class="container text-contents ">

        <div class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
        <?php if(function_exists('bcn_display'))
        {
                bcn_display();
        }?>
        </div>
<div class="row">
  <div class="col-lg-8 col-xs-12">
        <div class="post">
                <?php if (have_posts()) : while (have_posts()) : the_post();?>

                <!-- //タイトルとパーマリンクを表示 -->
                <h1 class="theme-title"><?php the_title(); ?></h1>
                <!-- //日時を表示 -->
                <small class="info"><?php the_time('Y年n月j日'); ?></small>
                <!-- //カテゴリをカンマ区切りで表示 -->
                <p class="postmetadata info"><?php the_category(', '); ?></p>



                <!-- //投稿本文を表示 -->
                <div class="entry text-dark"><?php the_content(); ?></div>

                
                <?php endwhile; else: ?>
                <p>記事が見つかりませんでした。</p>
                <?php endif; ?>
                
                <?php
                $args = array(
                        'before' => '<div class="next-page-link">',
                        'after' => '</div>',
                        'next_or_number'   => 'next',
                        'nextpagelink'     => __( '次のページを読む >>' ),
                        'previouspagelink' => __( '' ),
                );
                wp_link_pages($args); ?>
 
                <?php
                $args = array(
                        'before' => '<div class="page-link">',
                        'after' => '</div>',
                        'link_before' => '<span>',
                        'link_after' => '</span>',
                );
                wp_link_pages($args); ?>
               <!--Ads3-->



                <div class="row">                

                <div class="col-sm-6 col-xs-10">
                        <?php
                        $previous_post = get_previous_post();
                        if (!empty( $previous_post )):
                        $prev_thum = get_the_post_thumbnail($previous_post->ID, array(80,80) );
                        ?>
                        <a href="<?php echo get_permalink( $previous_post->ID );?>">
                        <div class="previous"><b>前の記事</b><br>
                                <div class="blog-card-thumbnail">
                                        <?php if($prev_thum){ echo $prev_thum; } ?>
                                </div>
                                <div class="post-info">
                                        <a href="<?php echo get_permalink( $previous_post->ID );?>"><?php echo $previous_post->post_title; ?></a>
                                </div>
                        </div>
                        </a>
                        <?php endif; ?>
                </div>

                <div class="col-sm-6 col-xs-10">
                        <?php
                        $next_post = get_next_post();
                        if (!empty( $next_post )):
                        $next_thum = get_the_post_thumbnail($next_post->ID, array(80,80) );
                        ?>
                        <a href="<?php echo get_permalink( $next_post->ID );?>">
                        <div class="next"><b>次の記事</b><br>
                                <div class="blog-card-thumbnail">
                                        <?php if($next_thum){ echo $next_thum; } ?>
                                </div>
                                <div class="post-info">
                                        <a href="<?php echo get_permalink( $next_post->ID );?>"><?php echo $next_post->post_title; ?></a>
                                </div>
                        </div>
                        </a>
                        <?php endif; ?>
                </div>
                <br>
                <div>　</div>
                


                
        </div>

  </div>
</div>
<br><br>

  <div class="col-lg-4 col-xs-12">
        <?php  get_sidebar(); ?>
  </div>

</div>
</div>
<?php get_footer(); ?>

