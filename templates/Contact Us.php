<?php

/** Template Name: Contact Us */

?>
<?php get_header() ?>
<div class="main">
    <section class="ptb-120 gradient-bg hero-equal-height">
        <div class="container" style="padding: 100px 0">
            <div class="row align-items-center justify-content-center" style="margin-bottom:80px">
                <div class="col-md-10 col-lg-8 col-xl-7">
                    <div class="hero-content-wrap text-white position-relative text-center">
                        <h1 class="text-white">Contact Us</h1>
                        <p class="lead">Don't worry! We have support premium 24/7/365. We are looking forward waiting for your contact.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-center lisan_contc">
                <div class="col-md-4 col-lg-4">
					<div class="ls_icons"><i class="fa-solid fa-headset color-accent"></i></div>
					<div>
						<h4>Live Chat</h4>
						<p>We Provide 24/7 Live Chat support.</p>
						<p class="lisan_vis">.</p>
					</div>
                </div>
				<div class="col-md-4 col-lg-4">
					<div class="ls_icons"><i class="fa-regular fa-circle-check color-accent"></i></div>
					<div>
						<h4>Send Ticket</h4>
						<p>Please Open Ticket Here.</p>
						<p class="lisan_vis">.</p>
					</div>
                </div>
				<div class="col-md-4 col-lg-4">
					<div class="ls_icons"><i class="fas fa-phone-alt mr-1 color-accent"></i></div>
					<div>
						<h4>Phone Now</h4>
						<p>Call Us +8801974-615661(Live)</p>
						<p>Call Us +8801838-751184(Whatsapp)</p>
					</div>
                </div>
            </div>
			<div class="row align-items-center justify-content-center lisan_contc" style="margin-top:30px">
                <div class="col-md-4 col-lg-4">
					<div class="ls_icons"><i class="fa-solid fa-graduation-cap color-accent"></i></div>
					<div>
						<h4>Knowledgebase</h4>
						<p>Click here for Knowledgebase.</p>
						<p class="lisan_vis">.</p>
					</div>
                </div>
				<div class="col-md-4 col-lg-4">
					<div class="ls_icons"><i class="fa-solid fa-mug-hot color-accent"></i></div>
					<div>
						<h4>Client Area</h4>
						<p>Click here for Login</p>
						<p class="lisan_vis">.</p>
					</div>
                </div>
				<div class="col-md-4 col-lg-4">
					<div class="ls_icons"><i class="fa-regular fa-circle-question color-accent"></i></div>
					<div>
						<h4>FAQ</h4>
						<p>click here for faq</p>
						<p class="lisan_vis">.</p>
					</div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--feature section start-->
    <section class="feature-tab-section ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Please get in Touch with Us</h2>
                        <p class="lead">Please fill up this form and submit. We'll reply within 1 hour to 24 hours. Advance thanks...</p>
						<?php echo do_shortcode("[wpforms id=\"324\" title=\"false\"]") ?>
                    </div>
					<div class="lisan_office">
						<div>
							<h5>Corporate office: </h5>
							<p>Floor: 4B, House: 3, Road: 1/B(Opposite of Mackot Plaza), Sector: 9, Uttara Model Town, Dhaka-1230, Bangladesh</p>
						</div>
						<div>
							<h5>Services office: </h5>
							<p>West Bazar, Fenchuganj-3116, Sylhet, Bangladesh</p>
						</div>
						<div>
							<h5>USA office: </h5>
							<p>21923 NE Sumner St, STE 893282 Portland, OR,97220, USA</p>
						</div>
					</div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->

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

    <!--testimonial and review section start-->
    <section class="review-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-lg-4">
                    <div class="section-heading">
                        <h2>Trusted By Clients And Industry Experts</h2>
                        <p>Uniquely repurpose strategic core competencies with progressive content. Assertively transition ethical imperatives and collaborative manufactured products. </p>
                        <a href="https://www.facebook.com/superbangla/reviews" class="btn btn-outline-brand-01 btn-sm"> Write About Us</a>
                    </div>
                </div>
                <div class="col-md-6 col-lg-8">
                    <div class="owl-carousel owl-theme client-testimonial-2 dot-bottom-center custom-dot">
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
        </div>
    </section>
    <!--testimonial and review section end-->

</div>
<?php get_footer() ?>