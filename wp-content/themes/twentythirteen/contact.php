<?php
/**
 * Full Content Template
 *
 * Template Name:  Contact us Page
 *
 * @file           contact.php
 * @package        OMORI VN
 * @author         Ngoc Men
 *
 */

get_header(); ?>

<img src="<?php echo get_template_directory_uri(); ?>/images/main-visual/contact-bg.png" alt="" width="100%"/>
<div class="container">
	<div class="row">
		<h3 class="name-bg">お問い合わせ</h3>
	</div>
</div>

	<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">
		<div class="wrapper-body container">
			<div class="row"> 				
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h3>会社情報</h3>
					<p>SIM SHA TSUI OFFICE</br>Room 210, 2/F, New East Ocean Centre,</br>9 Science Museum Road,Tsimshatsui East, Kowloon, Hong Kong
					</p>
					<p>Tel : (852) 2311 7986</br>
					Fax : (852) 2722 1031</p>
					<p>Web: http://www.egomori.com.hk</br>Email*: info@egomori.com.hk</p>
					<p>Business Hours:</br>
						MON - FRI: 09:00 - 18:00</br>
						(lunch hours 13:00 -14:00)</br>
						SAT: 09:00 - 13:00
					</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6">
					<h3 class="font-red">お問い合わせフォーム</h3>
					<form>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="NAME" required />
						</div>
						<div class="form-group">
							<input type="text" class="form-control" placeholder="COMPANY" required />
						</div>
						<div class="form-group">
							<input type="email" class="form-control" placeholder="E-MAIL" required />
						</div>
						<div class="form-group">
							<textarea type="text" class="form-control" placeholder="COMMENT" rows="4"></textarea>
						</div>
						<button class="btn-contact">送信</button>
					</form>
				</div>
				
			</div>
		
		
		</div>

		
		

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>