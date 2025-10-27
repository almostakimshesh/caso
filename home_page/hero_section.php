	<!--Hero Banner Section-->
    <section class="banner-section">
		<div class="patern-layer-one" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/pattern-1.png)"></div>
		<div class="patern-layer-two" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/content-image-1.png)"></div>
		<div class="circle-layer-one"></div>
		<div class="circle-layer-two"></div>
		<div class="brand">brandin<span>g</span></div>
		<!-- Icons -->
		<div class="icons parallax-scene-1">
			<!-- Icon One -->
			<div data-depth="0.20" class="icon-one parallax-layer" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-1.png)"></div>
			<div data-depth="0.20" class="icon-two parallax-layer" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-3.png)"></div>
			<div data-depth="0.20" class="icon-three parallax-layer" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-4.png)"></div>
			<div data-depth="0.20" class="icon-four parallax-layer" style="background-image:url(<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/icon-5.png)"></div>
			<div data-depth="0.20" class="icon-five parallax-layer"></div>
		</div>
		
		<div class="auto-container">
			<div class="row clearfix">
				<!-- Image Column -->
				<div class="image-column col-lg-5 col-md-12 col-sm-12">
					<div class="inner-column">
						<figure class="image titlt" data-tilt data-tilt-max="4">
							<img src="<?php echo get_template_directory_uri(); ?>/assets/images/main-slider/image-1.png" alt="">
						</figure>
					</div>
				</div>
				<!-- Content Column -->
				<div class="content-column col-lg-7 col-md-12 col-sm-12">
					<div class="inner-column">
						<div class="big-text"><?php echo wp_kses_post(get_theme_mod('hero_main_title','coso'))?></div>
						<h1 class="hero-title">
							<?php echo wp_kses_post( get_theme_mod('hero_title', 'Increase Your<br>Brand Recognition<br>Today') ); ?>
						</h1>
						<a href="#" class="theme-btn btn-style-two">
							<span class="txt"><?php echo wp_kses_post( get_theme_mod('hero_button', 'Creative brnading') ); ?></span>
						</a>
					</div>
				</div>
			</div>
			
		</div>
		
		<!-- Journey Box -->
		<div class="journey-box" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/background/pattern-2.png)">
			<h2><?php echo wp_kses_post( get_theme_mod('journey_box_title', 'Start your journey <br> today.') ); ?></h2>
			<div class="text">We help to create brands and products for today and tomorrow</div>
			<a href="#" class="theme-btn go-btn">Go <span class="arrow"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/right-arrow.png" alt="" /></span></a>
		</div>
		
	</section>
	<!--End Banner Section-->