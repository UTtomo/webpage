<?php
/* Template Name: index */
get_header(); ?>

<div class="container text-contents  ">
<div class="row">

<div class="col-lg-8 col-xs-12">
<main class="main">
  <section class="archive">
    
    
    <ul>
    <?php if (have_posts()): while (have_posts()) : the_post(); ?>
      <li>
        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
        <h3 class="blog-title"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
      </li>
    <?php endwhile;endif; ?>
    </ul>
    <nav class="pagination-area">
    <?php
    the_posts_pagination( array (
      'prev_text' => 'PREV',
      'next_text' => 'NEXT',
      'mid_size'  => 2
    ) );
    ?>
    </nav>
  </section>
</main>
</div>

<div class="col-lg-4 col-xs-12">
     <?php  get_sidebar(); ?>
</div>

</div>
</div>

<?php get_footer(); ?>