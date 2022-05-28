<?php

/** Template Name: About us */

?>
<?php get_header() ?>
<div class="main">
    <section class="ptb-120 gradient-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-7 col-lg-8">
                    <div class="hero-content-wrap text-white text-center position-relative">
                        <h1 class="text-white">About Us</h1>
                        <p class="lead">Web hosting made easy & affordable, choose a fine-tuned web hosting services solution for successful personal and business websites.</p>
                    </div>
                </div>
            </div>
			<div class="row align-items-center justify-content-center lisan_contc" style="padding-top: 100px">
                <div class="col-md-4 col-lg-4">
					<div>
						<h4>Why you choose us!!!</h4>
						<p>Best hosting provider</p>
						<p>Award cloud infrastructure</p>
						<p>Awesome control panels</p>
						<p>Reference Domain solutions</p>
						<p>Support Premium 24/7/365</p>
					</div>
                </div>
				<div class="col-md-4 col-lg-4">
					<div>
						<i class="fa-regular fa-circle-check color-accent"></i>
						<h4>3990+ Clients</h4>
						<p>More than 2000+ active customers trust to us daily about 2500 services.</p>
					</div>
                </div>
				<div class="col-md-4 col-lg-4">
					<div>
						<i class="fas fa-phone-alt mr-1 color-accent"></i>
						<h4>7 datacenter 13 server</h4>
						<p>Our 7 Datacenters with more than 13 servers have high availability redundant systems.</p>
					</div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section tab style start-->
    <section id="about" class="about-section position-relative overflow-hidden ptb-100 ">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-12 col-lg-12">
                    <div class="feature-contents section-heading">
                        <h2>Meet Our Management Team</h2>
                        <p>Our Global Awarded TEAM</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
			<?php $our_team = new WP_Query(['post_type' => 'our_teams_cpt', 'posts_per_page' => 6, 'order' => 'ASC']) ?>
			<?php while ($our_team->have_posts()) : $our_team->the_post() ?>
			  <div class="col-md-4 col-lg-4" style="margin-bottom:30px">
				<div class="card" style="width: 18rem;">
				  <?php the_post_thumbnail() ?>
				  <div class="card-body">
					<h5 class="card-title"><?php the_title() ?></h5>
					<p style="margin:0"><?= get_post_meta(get_the_id(), 'member_desig', true) ?></p>
				  </div>
				  <ul class="list-group list-group-flush"><li class="list-group-item"><strong>Skills: </strong><?= get_post_meta(get_the_id(), 'member_skills', true) ?></li></ul>
				  <ul class="list-group list-group-flush"><li class="list-group-item"><strong>Speech: </strong><?= get_post_meta(get_the_id(), 'member_speech', true) ?></li></ul>
				</div>
			  </div>
			<?php endwhile ?>
            </div>
        </div>
    </section>
    <!--feature section tab style end-->

    <!--call to action section start-->
	<section class="ptb-60 primary-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-12 col-lg-6">
                    <div class="cta-content-wrap text-white">
                        <h2 class="text-white">24/7 Expert Hosting Support for our Honorable Customers</h2>
                        <p>Our weekly off day is only Friday</p>
                    </div>
                    <div class="support-action d-inline-flex flex-wrap">
                        <a href="mailto:support@superbangla.com.bd" class="mr-3"><i class="fas fa-comment mr-1 color-accent"></i> <span>support@superbangla.com.bd</span></a>
                        <a href="tel:+8801838751184" class="mb-0"><i class="fas fa-phone-alt mr-1 color-accent"></i> <span>+8801838751184(Whatsapp only)</span></a>
						<a href="tel:+8801974615661" class="mb-0"><i class="fas fa-phone-alt mr-1 color-accent"></i> <span>+8801974615661(Live call)</span></a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-4 d-none d-lg-block">
                    <div class="cta-img-wrap text-center">
                        <img class="cc_image" src="http://superbangla.com.bd/wp-content/uploads/2022/03/000-removebg-preview.png" alt="server room">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

    <!--feature section start-->
    <div class="feature-section ptb-100 ">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7 col-lg-6">
                    <div class="feature-content-wrap">
                        <h2>99% Cloud Hosing High-speed Cutting-edge Platform</h2>
                        <p>Authoritatively transform functionalized information without cross-platform convergence. Quickly reconceptualize cross-unit e-markets without superior products. Appropriately foster timely collaboration and idea-sharing rather than magnetic potentialities. Authoritatively restore high standards in outsourcing whereas vertical meta-services. Compellingly reconceptualize out-of-the-box outsourcing through plug-and-play synergy.</p>
                        <a href="#" class="btn btn-outline-brand-01 mt-3" target="_blank">Learn More</a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-6 d-none d-md-block d-lg-block">
                    <div class="feature-img-wrap text-center">
                        <img src="<?= get_template_directory_uri() ?>/assets/imgs/services.svg" class="img-fluid" alt="server room">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--feature section end-->
	
	    <!--network map section start-->
    <section class="network-map-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Our Data centers Location</h2>
                        <p class="lead">Cloudhub offers a low latency worldwide network, enabling you to deploy your
                            service infrastructure in close proximity to your customer base.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="network-map-wrap">
                        <ul class="custom-map-location">
                            <li style="top: 29%; left: 15.5%;">
                                <span data-toggle="tooltip" data-placement="top" title="Canada"></span>
                            </li>
                            <li style="top: 42%; left: 20%;">
                                <span data-toggle="tooltip" data-placement="top" title="United States"></span>
                            </li>
                            <li style="top: 70%; left: 32%;">
                                <span data-toggle="tooltip" data-placement="top" title="Brazil"></span>
                            </li>
                            <li style="top: 57%; left: 48%;">
                                <span data-toggle="tooltip" data-placement="top" title="Nigeria"></span>
                            </li>
                            <li style="top: 18%; left: 53%;">
                                <span data-toggle="tooltip" data-placement="top" title="Finland"></span>
                            </li>
                            <li style="top: 34%; left: 55%;">
                                <span data-toggle="tooltip" data-placement="top" title="Ukraine"></span>
                            </li>
                            <li style="top: 45%; left: 68%;">
                                <span data-toggle="tooltip" data-placement="top" title="India"></span>
                            </li>
                            <li style="top: 35%; left: 80%;">
                                <span data-toggle="tooltip" data-placement="top" title="China"></span>
                            </li>
                            <li style="top: 77%; left: 85%;">
                                <span data-toggle="tooltip" data-placement="top" title="Australia"></span>
                            </li>
                        </ul>
                        <img src="<?= get_template_directory_uri() ?>/assets/imgs/map-dark.svg" alt="location map">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--network map section end-->

    <!--testimonial and review section start-->
    <section class="review-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-10 col-lg-7">
                    <div class="section-heading text-center">
                        <h2>Our Lovely Client Say About Us</h2>
                        <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="owl-carousel owl-theme client-testimonial-1 dot-bottom-center custom-dot">
                    <?php $clnts = new WP_Query(['post_type' => 'clients', 'posts_per_page' => 3]) ?>
                    <?php while ($clnts->have_posts()) : $clnts->the_post() ?>
                        <div class="item">
                            <div class="border single-review-wrap bg-white p-4 m-3">
                                <div class="review-body">
                                    <h5><?php the_title() ?></h5>
                                    <p><?php the_content() ?></p>
                                </div>
                                <div class="review-author d-flex align-items-center">
                                    <div class="author-avatar">
                                        <?php the_post_thumbnail() ?>
                                        <span>“</span>
                                    </div>
                                    <div class="review-info">
                                        <h6 class="mb-0"><?= get_post_meta(get_the_id(), 'c_nm', true) ?></h6>
                                        <span><?= get_post_meta(get_the_id(), 'c_ttl', true) ?></span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endwhile ?>
                </div>
            </div>
        </div>
    </section>
    <!--testimonial and review section end-->
</div>
<?php get_footer() ?>