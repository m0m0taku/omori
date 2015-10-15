<?php
/**
 * Full Content Template
 *
 * Template Name:  Top Page
 *
 * @file           index.php
 * @package        OMORI VN
 * @author         Ngoc Men
 *
 */

get_header(); ?>
	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
			<div class="wrapper-body container">			
				<div class="row">
					<div class="col-xs-8 col-sm-8 col-md-8 col-xs-push-2 col-sm-push-2 col-md-push-2 text-center">
						<p class="text-center t-detail">大森廻漕店ベトナムでは、様々なお客様のニーズにお応えする きめ細やかなフォワーディングサービスをご提供致します。</p>
					</div>
				</div>
				<div class="row service-content">
					<div class="col-xs-6 col-sm-6 col-md-3">
						<div class="col-xs-12 col-sm-12 col-md-12 text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/top-page/omori_top_COL_10.png" alt=""/ class="img-responsive"></div>					
						<a href="<?php echo get_page_link(18);?>"><div class="col-xs-12 col-sm-12 col-md-12 box-border">バイヤーズコンソリ業務</div></a>
						<p>大森廻漕店のバイヤーズコンソリは、お客樣の調達先の貨物を倉庫で集めてコンテナ化し、お客様へ輸送する物流サービスで、効率化を図ります。現在、アパレルメーカー樣などを中心に幅広くお客様をサポートしております。</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<div class="col-xs-12 col-sm-12 col-md-12 text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/top-page/omori_top_WH_03.png" alt=""/ class="img-responsive"></div>			
						<a href="<?php echo get_page_link(38);?>"><div class="col-xs-12 col-sm-12 col-md-12 box-border box-wh">非居住者在庫・保税保管業務</div></a>
						<p>お客様から貨物を受け取り、保税保管、お客様の生産計画に合わせて、ピッキング・通関など一連の業務を支援いたします。また、お客様の海外法人から貨物を受け取り、非居住者貨物として保管し、通関、各所への配送業務等についても支援致します。現地に拠点を持つ大森廻漕店がベトナムでの物流・商習慣に合わせて最適なサービスを提供します。</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<div class="col-xs-12 col-sm-12 col-md-12 text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/top-page/omori_top_PEO_05.png" alt="" class="img-responsive"/></div>					
						<a href="<?php echo get_page_link(36);?>"><div class="col-xs-12 col-sm-12 col-md-12 box-border">調達物流・決済代行業務</div></a>
						<p>お客様の協力会社や部品メーカーから部品・半製品・完成品を引き取り、検収後保管し、お客様の生産計画に合わせて一連の業務を支援致します。決済代行においても、お取引樣ごとの複数の売買契約を１本化することで、外貨や支払い等の煩雑な業務を代行いたします。現地に拠点を持つ大森廻漕店がベトナムでの物流・商習慣に合わせて最適なサービスを提供します。</p>
					</div>
					<div class="col-xs-6 col-sm-6 col-md-3">
						<div class="col-xs-12 col-sm-12 col-md-12 text-center"><img src="<?php echo get_template_directory_uri(); ?>/images/top-page/omori_top_ARR_07.png" alt="" class="img-responsive"/></div>					
						<a href="<?php echo get_page_link(55);?>"><div class="col-xs-12 col-sm-12 col-md-12 box-border box-wh">三国間・クロスボーダー輸送</div></a>
						<p>中国を含めたASEAN内の資材輸送から、日本及び各国への製品輸送を各海外店と連携し、お客様の業務を支援いたします。お客様の生産計画に合わせて、最終納品を意識したトータルパッケージサービスとして提供します。</p>
					</div>					
				</div>	
				<div class="row">
					<div class="col-xs-6 col-sm-6 col-md-6"><h3>What's New</h3></div>
					<div class="col-xs-6 col-sm-6 col-md-6 text-right"><a href="<?php echo get_page_link(40);?>">一覧を見る &gt; &gt;</a></div>
				</div>
			
				<div class="table-responsive">
					<table class="table table-bordered">
						<tr>
							<td class="box-red">2015.9.22</td>
							<td class="box-gray">【ハイフォンから】 スケジュールを更新しました。</td>
						</tr>
						<tr>
							<td class="box-red">2015.9.22</td>
							<td class="box-gray">【ダナンから】 スケジュールを更新しました。</td>
						</tr>							
					</table>
				</div>
			</div>
		
		</div><!-- #content -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
