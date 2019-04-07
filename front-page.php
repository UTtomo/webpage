

<?php
/* Template Name: index */
get_header(); ?>

<?php<  get_sidebar(); ?>
<!-- Main theme -->

<div id="contents">
<section>
  <div class="jumbotron jumbotron-fluid text-contents">
    <div class="container text-center explanation">
      <img class="a_row" src="http://dream-lab.moo.jp/wp-content/uploads/2018/12/logo-2.png"alt="近未来テクノロジー" width="500px">
      <p class="lead text-light">

ここは、世界中の知られざるテクノロジーが集う場所 <br><br><br>

そして、あなたを未来の世界へといざなう夢の研究所です。<br><br><br>


一緒に夢を見つける旅に出かけましょう！！<br><br><br><br>

<a href="<?php echo home_url('/'); ?>/topics/" class="btn btn-outline-light btn-lg">最新記事を見る</a>
</p>
    </div>
  </div>
</section>





<!-- Categories -->
<h3 pt-4>Categories</h3>
<section class="bg-light text-center py-5">
  <div class="card-deck mb-2">
  <div class="card" id="list1">
    <div class="card-body">
      <h5 class="card-title">生物学</h5>
      <p class="card-text">生命の長きにわたる歴史と、多様性の謎を紐解く</p>
      <a href="<?php echo home_url('/'); ?>/topics/" class="btn btn-light btn-lg">　　Go!　　</a>

    </div>
  </div>
  <div class="card" id="list2">
    <div class="card-body">
      <h5 class="card-title">化学</h5>
      <p class="card-text">宇宙に存在するあらゆる物質を分析し、技術の根幹を変える</p>
    <a href="<?php echo home_url('/'); ?>/topics/" class="btn btn-light btn-lg">　　Go!　　</a>
    </div>
  </div>
  <div class="card"id="list3">
    <div class="card-body">
      <h5 class="card-title">地学</h5>
      <p class="card-text">地球上のすべてを科学する</p>
      <a href="<?php echo home_url('/'); ?>/topics/" class="btn btn-light btn-lg">　　Go!　　</a>
    </div>
  </div>
</div>

<div class="card-deck mb-2">
<div class="card"id="list4">
  <div class="card-body">
    <h5 class="card-title">物理学</h5>
    <p class="card-text">すべての減少を支配する”普遍的な法則”を導き出す</p>
  <a href="<?php echo home_url('/'); ?>/topics/" class="btn btn-light btn-lg">　　Go!　　</a>
  </div>
</div>
<div class="card"id="list5">
  <div class="card-body">
    <h5 class="card-title">情報</h5>
    <p class="card-text">現代科学の基盤を担う、知能と計算の本質</p>
    <a href="<?php echo home_url('/'); ?>/topics/" class="btn btn-light btn-lg">　　Go!　　</a>
  </div>
</div>
<div class="card"id="list6">
  <div class="card-body">
    <h5 class="card-title">工学</h5>
    <p class="card-text">森羅万象を意のままに操り、夢を現実にする</p>
  <a href="<?php echo home_url('/'); ?>/topics/" class="btn btn-light btn-lg">　　Go!　　</a>
  </div>
</div>
</div>

<div class="card-deck mb-4">
<div class="card"id="list7">
  <div class="card-body">
    <h5 class="card-title">医療</h5>
    <p class="card-text">”ヒト”という種の、限りないアップデート</p>
  <a href="<?php echo home_url('/'); ?>/topics/" class="btn btn-light btn-lg">　　Go!　　</a>
  </div>
</div>
<div class="card">
</div>
<div class="card">
</div>
</div>
</section>
</div>

<?php get_footer(); ?>
