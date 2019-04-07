

<?php
/* Template Name: index */
get_header(); ?>

<?php<  get_sidebar(); ?>
<!-- Main theme -->
<div class="container text-center text-contents">
近未来テクノロジーに関して、ご質問、フィードバック、ご要望がある方は下記のお問い合わせフォームをご利用ください！

メッセージ待ってます！！
<br><br>
<?php echo do_shortcode( '[contact-form-7 id="231" title="コンタクトフォーム 1"]' ); ?>
</div>
<?php get_footer(); ?>