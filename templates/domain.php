<?php

/** Template Name: Domain */

?>
<?php get_header() ?>
<div class="main">
    <section class="ptb-120 gradient-bg hero-equal-height">
        <div class="container">
            <div class="row align-items-center justify-content-center">
                <div class="col-md-10 col-lg-8 col-xl-7">
					<div class="lisan_offers">
						<img src="http://superbangla.com.bd/wp-content/uploads/2022/03/lisan_offer.png"  width="280" alt="offer hosting"/>
							<table class="table" style="color:#fff">
								<thead>
									<tr>
										<th scope="col">Domain</th>
										<th scope="col">Regular Price</th>
										<th scope="col">Offer Price</th>
										<th scope="col">Duration</th>
									</tr>
								</thead>
							<?php $clnts = new WP_Query(['post_type' => 'post_type_offers', 'posts_per_page' => 8]) ?>
							<?php while ($clnts->have_posts()) : $clnts->the_post() ?>
							  <tbody>
								<tr>
								  <th scope="row"><?php the_title() ?></th>
								  <td><?= get_post_meta(get_the_id(), 'Regular_Price', true) ?>৳</td>
								  <td><?= get_post_meta(get_the_id(), 'Offer_Price', true) ?>৳</td>
								  <td><?= get_post_meta(get_the_id(), 'Offer_Time', true) ?></td>
								</tr>
							  </tbody>
							<?php endwhile ?>
							</table>
						
					</div>
                    <div class="hero-content-wrap text-white position-relative text-center">
                        <h1 class="text-white">Register Your Domain Name</h1>
                        <p class="lead">Web hosting made easy, choose a fine-tuned web hosting services solution for personal and business websites. Get 24/7 Support</p>
                        <div class="domain-transfer-wrap mt-4 text-center">
                            <form action="https://bill.superbangla.com/" class="domain-transfer-form w-75 m-auto">
                                <div class="input-group first_lisan">
                                    <input type="text" name="domain" id="domain" class="form-control" placeholder="Enter your domain name" />
                                    <div class="input-group-append">
                                        <button class="btn search-btn btn-brand-03 btn-hover d-flex align-items-center lisan_btn01" type="submit"><span class="ti-world mr-2"></span>Register</button>
                                    </div>
                                </div>
                            </form>
							<form action="https://bill.superbangla.com/cart.php?a=add&domain=transfer" class="domain-transfer-form w-75 m-auto">
                                <div class="input-group">
                                    <input type="text" name="domain" id="domain" class="form-control" placeholder="Enter your domain name" />
                                    <div class="input-group-append">
                                        <button class="btn search-btn btn-brand-03 btn-hover d-flex align-items-center lisan_btn02" type="submit"><span class="ti-world mr-2"></span> Transfer</button>
                                    </div>
                                </div>
                            </form>
                            <small>We can register any .com, .net, .org, .us, .biz, or .info domain and can support!</small>
                        </div>
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
                        <h2>Regular Domain Prices</h2>
                        <p class="lead">Uniquely promote real-time strategic theme areas whereas global relationships. Collaborative action items and market positioning e-markets.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-around">
                <div class="col-md-12 col-lg-12">
					<table class="table">
					  <thead>
						<tr>
						  <th scope="col">TLD</th>
						  <th scope="col">REGISTER</th>
						  <th scope="col">TRANSFER</th>
						  <th scope="col">RENEW</th>
						</tr>
					  </thead>
					<?php $clnts = new WP_Query(['post_type' => 'post_type_dom_name', 'posts_per_page' => 20]) ?>
					<?php while ($clnts->have_posts()) : $clnts->the_post() ?>
					  <tbody>
						<tr>
						  <th scope="row"><?php the_title() ?></th>
						  <td><?= get_post_meta(get_the_id(), 'REGISTER', true) ?></td>
						  <td><?= get_post_meta(get_the_id(), 'RENEW', true) ?></td>
						  <td><?= get_post_meta(get_the_id(), 'TRANSFER', true) ?></td>
						</tr>
					  </tbody>
					<?php endwhile ?>
					</table>
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
                        <img class="cc_image" src="http://superbangla.com.bd/wp-content/uploads/2022/03/000-removebg-preview.png" class="img-fluid" alt="server room">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action section end-->

    <!--faq section start-->
    <section id="faq" class="ptb-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>DOMAIN INCLUDED FEATURES</h2>
                        <p>Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize frictionless expertise whereas tactical relationships. Still have questions? Contact us</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-3 col-lg-3">
					<div class="fancy-block wow fadeIn fancy-style-2 text-center mb-40" style="visibility: visible; animation-name: fadeIn;"><div class="fancy-feature wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <noscript><img src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-Actives.png" alt=""></noscript><img class=" lazyloaded" src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-Actives.png" data-src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-Actives.png" alt=""></div><div class="fancy-content"><h4>Instant Activate</h4><p>Register a domain in minutes. No waiting around, as soon as you click "register" it’s yours.</p></div></div>
  				</div>
				    <div class="col-md-3 col-lg-3">
					<div class="fancy-block wow fadeIn fancy-style-2 text-center mb-40" style="visibility: visible; animation-name: fadeIn;"><div class="fancy-feature wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <noscript><img src="http://superbangla.com.bd/wp-content/uploads/2022/03/Protect-Your-Identitys.png" alt=""></noscript><img class=" lazyloaded" src="http://superbangla.com.bd/wp-content/uploads/2022/03/Protect-Your-Identitys.png" data-src="http://superbangla.com.bd/wp-content/uploads/2022/03/Protect-Your-Identitys.png" alt=""></div><div class="fancy-content"><h4>Protect Your Identity</h4><p>Get a whois privacy for your domain & keep your personal details private. Get free privacy</p></div></div>
  				</div>
				                <div class="col-md-3 col-lg-3">
					<div class="fancy-block wow fadeIn fancy-style-2 text-center mb-40" style="visibility: visible; animation-name: fadeIn;"><div class="fancy-feature wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <noscript><img src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-Forwarding.png" alt=""></noscript><img class=" lazyloaded" src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-Forwarding.png" data-src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-Forwarding.png" alt=""></div><div class="fancy-content"><h4>Domain Forwarding</h4><p>Forward your current Domain Name and it's sub-domains to another Domain Name</p></div></div>
  				</div>
				                <div class="col-md-3 col-lg-3">
					<div class="fancy-block wow fadeIn fancy-style-2 text-center mb-40" style="visibility: visible; animation-name: fadeIn;"><div class="fancy-feature wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <noscript><img src="http://superbangla.com.bd/wp-content/uploads/2022/03/Free-DNS-Control.png" alt=""></noscript><img class=" lazyloaded" src="http://superbangla.com.bd/wp-content/uploads/2022/03/Free-DNS-Control.png" data-src="http://superbangla.com.bd/wp-content/uploads/2022/03/Free-DNS-Control.png" alt=""></div><div class="fancy-content"><h4>Free DNS Control</h4><p>You can change which service your domain uses for its website and email by managing its DNS records</p></div></div>
  				</div>
            </div>
<!-- 			down row -->
			<div class="row align-items-center">
                <div class="col-md-3 col-lg-3">
					<div class="fancy-block wow fadeIn fancy-style-2 text-center mb-40" style="visibility: visible; animation-name: fadeIn;"><div class="fancy-feature wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <noscript><img src="http://superbangla.com.bd/wp-content/uploads/2022/03/Email-forwarder.png" alt=""></noscript><img class=" lazyloaded" src="http://superbangla.com.bd/wp-content/uploads/2022/03/Email-forwarder.png" data-src="http://superbangla.com.bd/wp-content/uploads/2022/03/Email-forwarder.png" alt=""></div><div class="fancy-content"><h4>Email Forwarding</h4><p>Email forwarding is a great feature that automatically send from one email to another email address.</p></div></div>
  				</div>
				    <div class="col-md-3 col-lg-3">
					<div class="fancy-block wow fadeIn fancy-style-2 text-center mb-40" style="visibility: visible; animation-name: fadeIn;"><div class="fancy-feature wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <noscript><img src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-Move.png" alt=""></noscript><img class=" lazyloaded" src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-Move.png" data-src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-Move.png" alt=""></div><div class="fancy-content"><h4>Domain Push</h4><p>Domains can be easily moved from one account to another, without the need for a support ticket.</p></div></div>
  				</div>
				                <div class="col-md-3 col-lg-3">
					<div class="fancy-block wow fadeIn fancy-style-2 text-center mb-40" style="visibility: visible; animation-name: fadeIn;"><div class="fancy-feature wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <noscript><img src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-tarnsfer.png" alt=""></noscript><img class=" lazyloaded" src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-tarnsfer.png" data-src="http://superbangla.com.bd/wp-content/uploads/2022/03/Domain-tarnsfer.png" alt=""></div><div class="fancy-content"><h4>Transfers Domain</h4><p>You can transfer the domain to another company anytime you want. We don't need to be informed</p></div></div>
  				</div>
				                <div class="col-md-3 col-lg-3">
					<div class="fancy-block wow fadeIn fancy-style-2 text-center mb-40" style="visibility: visible; animation-name: fadeIn;"><div class="fancy-feature wow fadeInUp" style="visibility: visible; animation-name: fadeInUp;"> <noscript><img src="http://superbangla.com.bd/wp-content/uploads/2022/03/Private-Nameservers.png" alt=""></noscript><img class=" lazyloaded" src="http://superbangla.com.bd/wp-content/uploads/2022/03/Private-Nameservers.png" data-src="http://superbangla.com.bd/wp-content/uploads/2022/03/Private-Nameservers.png" alt=""></div><div class="fancy-content"><h4>Private Nameservers</h4><p>You can create a custom name server from our panel anytime you want. Which will help your branding</p></div></div>
  				</div>
            </div>
        </div>
    </section>
    <!--faq section end-->

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