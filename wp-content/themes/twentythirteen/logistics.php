<?php
/**
 * Full Content Template
 *
 * Template Name:  Vietnamese Logistics Page
 *
 * @file           logistics.php
 * @package        OMORI VN
 * @author         Ngoc Men
 *
 */
 
get_header(); ?>

<img src="<?php echo get_template_directory_uri(); ?>/images/main-visual/logistics-bg.png" alt="" width="100%"/>
<div class="container">
	<div class="row">
		<h3 class="name-bg">物流提案</h3>
	</div>
</div>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="wrapper-body container" id="logistics-page">
				<div class="row mrg-btm-40">
					<h3 class="text-center">- ベトナム発ASEAN各国向け輸送 -</h3>
					<a href="<?php echo get_page_link(8);?>"><div class="col-xs-12 col-sm-12 col-md-4 box-gr sz-text-lo">ホーチミン</div></a>
					<a href="<?php echo get_page_link(6);?>"><div class="col-xs-12 col-sm-12 col-md-4 box-gr sz-text-lo">ハイフォン</div></a>
					<a href="<?php echo get_page_link(10);?>"><div class="col-xs-12 col-sm-12 col-md-4 box-gr sz-text-lo">ダナン</div></a>
				</div>
				<div class="row">
					<h3 class="text-center mrg-btm-20">- ベトナム発ASEAN各国向け輸送 -</h3>
					<a href="<?php echo get_page_link(12);?>"><div class="col-xs-12 col-sm-12 col-md-6 box-gr sz-text-lo">ベトナムから日本までの輸送ルートと時間</div></a>
					<a href="<?php echo get_page_link(14);?>"><div class="col-xs-12 col-sm-12 col-md-6 box-gr sz-text-lo">近隣諸国間の陸上輸送</div></a>
				</div>
				
			</div>
		</div><!-- #content -->
	</div><!-- #primary -->

<?php get_footer(); ?>