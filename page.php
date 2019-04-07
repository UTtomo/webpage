

<?php
/* Template Name: index */
get_header(); ?>

<?php<  get_sidebar(); ?>
<!-- Main theme -->



<section >
  <div class="jumbotron home-img jumbotron-fluid">
    <div class="container">
      <h1 class="display-4 text-light text-center pt-5"><br>What's your dream?</h1>
      <p class="lead text-light text-center">Imaginea Your Future</p>
    </div>
  </div>
</section>


<!-- Description of 近未来テクノロジー研究所 -->
<section class="bg-light text-center py-5">
<div class="container">
<img class="a_row" src="http://dream-lab.moo.jp/wp-content/uploads/system/logo_header.png"alt="近未来テクノロジー" width="250px">

<h5 class="a_row mb-5 pt-3">とは</h5>
<p>
皆さんは知っていますか?
大昔に、私たち人類とチンパンジーを分けた「運命の日」があったことを。
<br><br>
皆さんは知っていますか?
実は「瞬間移動」の技術が次第に実現していることを。
<br><br>
皆さんは知っていますか?
実は火星に大きな街を作り、移住する計画がすでに始まっていることを。
<br><br>
この世界は、私たちが知らない「面白い科学の話」や「わくわくする研究」であふれています。
近未来テクノロジー研究所は、聞いただけでワクワクする近未来の技術や、科学の歴史などを紹介しています。
<br><br>
きっと、あなたの日常が、もっと不思議で、もっと楽しいものになると思いますよ。
<br><br>
</p>
<a href="<?php echo home_url('/'); ?>/topics/" class="btn btn-primary btn-lg">Find your Dream!</a>
<br><br>
</div>
</section>


<!-- Categories -->
<h3 pt-4>Categories</h3>
<section class="bg-light text-center py-5">
  <div class="card-deck mb-2 home-card">
  <div class="card" id="list1">
    <div class="card-body">
      <h5 class="card-title text-light">生物学</h5>
      <p class="card-text text-light">生命の長きにわたる歴史と、多様性の謎を紐解く</p>
      <a href="<?php echo home_url('/'); ?>/topics/" class="btn btn-light btn-lg">　　Go!　　</a>

    </div>
  </div>
  <div class="card" id="list2">
    <div class="card-body">
      <h5 class="card-title">化学</h5>
      <p class="card-text">宇宙に存在するあらゆる物質を分析し、技術の根幹を変える</p>
    <a href="coming_soon.html" class="btn btn-light btn-lg">　　Go!　　</a>
    </div>
  </div>
  <div class="card "id="list3">
    <div class="card-body">
      <h5 class="card-title">地学</h5>
      <p class="card-text">地球上のすべてを科学する</p>
      <a href="coming_soon.html" class="btn btn-light btn-lg">　　Go!　　</a>
    </div>
  </div>
</div>

<div class="card-deck mb-2">
<div class="card"id="list4">
  <div class="card-body">
    <h5 class="card-title">物理学</h5>
    <p class="card-text">すべての現象を支配する”普遍的な法則”を導き出す</p>
  <a href="coming_soon.html" class="btn btn-light btn-lg">　　Go!　　</a>
  </div>
</div>
<div class="card"id="list5">
  <div class="card-body">
    <h5 class="card-title">情報</h5>
    <p class="card-text">現代科学の基盤を担う、知能と計算の本質</p>
    <a href="coming_soon.html" class="btn btn-light btn-lg">　　Go!　　</a>
  </div>
</div>
<div class="card"id="list6">
  <div class="card-body">
    <h5 class="card-title">工学</h5>
    <p class="card-text">森羅万象を意のままに操り、夢を現実にする</p>
  <a href="http://dream-lab.moo.jp/category/engineering/" class="btn btn-light btn-lg">　　Go!　　</a>
  </div>
</div>
</div>

<div class="card-deck mb-4">
<div class="card"id="list7">
  <div class="card-body">
    <h5 class="card-title">医療</h5>
    <p class="card-text">”ヒト”という種の、限りないアップデート</p>
  <a href="http://dream-lab.moo.jp/engineering/" class="btn btn-light btn-lg">　　Go!　　</a>
  </div>
</div>
<div class="card">
</div>
<div class="card">
</div>
</div>
</section>


<?php get_footer(); ?>
