<?php

/** Template Name: VPS */

?>
<?php get_header() ?>
<div class="main">
    <section class="ptb-120 gradient-bg">
        <div class="container">
            <div class="row align-items-center justify-content-between">
                <div class="col-md-7 col-lg-6">
                    <div class="hero-content-wrap text-white">
                        <h1 class="text-white">Your Own VPS, Fully Managed by Experts</h1>
                        <p class="lead">Web hosting made easy & affordable, hosting services solution for successful personal and business websites.</p>
                        <a href="#" class="btn btn-brand-03 btn-lg">Get Start Now</a>
                    </div>
                </div>
                <div class="col-md-5 col-lg-6">
                    <div class="img-wrap">
                        <img src="<?= get_template_directory_uri() ?>/assets/imgs/hero-vps-hosting.svg" alt="vps image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--hero section end-->

    <!--custom vps hosting plan start-->
    <section id="custom-plan" class="custom-plan gray-light-bg ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Select Perfect VPS Plan</h2>
                        <p class="lead">Uniquely restore open-source products via open-source relationships.
                            Enthusiastically deliver competitive systems and client-centric.</p>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-12 col-lg-10 col-12">
                    <div class="vps-switch-wrap">
                        <div class="row justify-content-around">
                            <div class="col-sm-8">
                                <div class="custom-plan-box bg-white rounded border">
                                    <input id="c-plan" type="text" data-slider-min="1" data-slider-max="12" data-slider-step="1" data-slider-value="6" data-currency="$" data-unit="">
                                </div>
                            </div>
                            <div class="col-sm-4">
                                <a href="#" class="btn btn-brand-03 btn-lg btn-block vpsWHmcsUrl"> Order Now</a>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-4">
                        <div class="col-sm-12 col-lg-8">
                            <div class="vps-pricing-wrap">
                                <ul class="list-inline custom-vps-list text-center">
                                    <li>
                                        <div class="single-vps-item rounded border bg-white text-center d-flex align-items-center">
                                            <span class="ti-shield icon-size-lg color-primary p-3"></span>
                                            <div class="vps-item-info pl-3">
                                                <h6 class="d-block mb-1 text-muted">Core</h6>
                                                <h3 class="mb-0 feature vpsCore"><span>1</span> GB</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-vps-item rounded border bg-white text-center d-flex align-items-center">
                                            <span class="ti-plug icon-size-lg color-primary p-3"></span>
                                            <div class="vps-item-info pl-3">
                                                <h6 class="d-block mb-1 text-muted">Memory</h6>
                                                <h3 class="mb-0 feature vpsMemory"><span>2</span> GB</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-vps-item rounded border bg-white text-center d-flex align-items-center">
                                            <span class="ti-harddrive icon-size-lg color-primary p-3"></span>
                                            <div class="vps-item-info pl-3">
                                                <h6 class="d-block mb-1 text-muted">Storage</h6>
                                                <h3 class="mb-0 feature vpsStorage"><span>10</span> GB</h3>
                                            </div>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="single-vps-item rounded border bg-white text-center d-flex align-items-center">
                                            <span class="ti-dashboard icon-size-lg color-primary p-3"></span>
                                            <div class="vps-item-info pl-3">
                                                <h6 class="d-block mb-1 text-muted">Bandwidth</h6>
                                                <h3 class="mb-0 feature vpsBandwidth"><span>1000</span> TB</h3>
                                            </div>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-sm-12 col-lg-4">
                            <div class="custom-plan-info-box text-center bg-white rounded border">
                                <h3>Price</h3>
                                <div class="vpsPrice h1 mb-0 color-primary">$20</div>
                                <span class="text-muted d-block">per month</span>
                                <small>* 1 Month free if you pay for 1 Year</small>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--custom vps hosting plan end-->

    <!--vps hosting pricing plane start-->
    <section class="vps-pricing-plane ptb-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Choose Your VPS Hosting Plan</h2>
                        <p class="lead">Uniquely restore open-source products via open-source relationships. Enthusiastically deliver competitive systems and client-centric.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <table class="table vps-hosting-pricing-table">
                        <thead class="primary-bg text-white">
                            <tr>
                                <th>VCPU</th>
                                <th>Memory</th>
                                <th>CPU Power</th>
                                <th>Storage</th>
                                <th>Geekbench Score</th>
                                <th>Bandwidth</th>
                                <th colspan="2">Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="vps-pricing-row gray-light-bg">
                                <td data-value="VCPU">1 vCPU</td>
                                <td data-value="Memory">2GB</td>
                                <td data-value="CPU Power"><span>2.4GHz<span class="cpu-core">1 core</span></span></td>
                                <td data-value="Storage">20GB</td>
                                <td data-value="Geekbench Score">
                                    <div class="score-bar-wrap">
                                        <span class="geekbench-score">3513</span>
                                        <div class="progress w-100 score-bar-item">
                                            <div class="progress-bar primary-bg" role="progressbar" style="width: 30%;" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100">30%
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-value="Bandwidth">1000GB</td>
                                <td data-value="Price">
                                    <p class="mb-0">
                                        <span class="rate">$3.95<span>/month</span></span>
                                        <span class="pricing-onsale">On sale - <span class="badge color-3 color-3-bg">Save 30%</span></span>
                                    </p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-xs">Order Now</a>
                                </td>
                            </tr>
                            <tr class="vps-pricing-row gray-light-bg">
                                <td data-value="VCPU">2 vCPU</td>
                                <td data-value="Memory">4GB</td>
                                <td data-value="CPU Power"><span>4.8GHz<span class="cpu-core">2 cores</span></span></td>
                                <td data-value="Storage">40GB</td>
                                <td data-value="Geekbench Score">
                                    <div class="score-bar-wrap">
                                        <span class="geekbench-score">5363</span>
                                        <div class="progress w-100 score-bar-item">
                                            <div class="progress-bar primary-bg" role="progressbar" style="width: 40%;" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100">40%
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-value="Bandwidth">2000GB</td>
                                <td data-value="Price">
                                    <p class="mb-0">
                                        <span class="rate">$8.95<span>/month</span></span>
                                        <span class="pricing-onsale">On sale - <span class="badge color-1 color-1-bg">Save 50%</span></span>
                                    </p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-xs">Order Now</a>
                                </td>
                            </tr>
                            <tr class="vps-pricing-row gray-light-bg">
                                <td data-value="VCPU">3 vCPU</td>
                                <td data-value="Memory">6GB</td>
                                <td data-value="CPU Power"><span>7.2GHz<span class="cpu-core">3 cores</span></span></td>
                                <td data-value="Storage">60GB</td>
                                <td data-value="Geekbench Score">
                                    <div class="score-bar-wrap">
                                        <span class="geekbench-score">7545</span>
                                        <div class="progress w-100 score-bar-item">
                                            <div class="progress-bar primary-bg" role="progressbar" style="width: 60%;" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100">60%
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-value="Bandwidth">3000GB</td>
                                <td data-value="Price">
                                    <p class="mb-0">
                                        <span class="rate">$12.95<span>/month</span></span>
                                        <span class="pricing-onsale">On sale - <span class="badge color-3 color-3-bg">Save 10%</span></span>
                                    </p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-xs">Order Now</a>
                                </td>
                            </tr>
                            <tr class="vps-pricing-row gray-light-bg">
                                <td data-value="VCPU">4 vCPU</td>
                                <td data-value="Memory">8GB</td>
                                <td data-value="CPU Power"><span>9.6GHz<span class="cpu-core">4 cores</span></span></td>
                                <td data-value="Storage">80GB</td>
                                <td data-value="Geekbench Score">
                                    <div class="score-bar-wrap">
                                        <span class="geekbench-score">8953</span>
                                        <div class="progress w-100 score-bar-item">
                                            <div class="progress-bar primary-bg" role="progressbar" style="width: 75%;" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100">75%
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-value="Bandwidth">4000GB</td>
                                <td data-value="Price">
                                    <p class="mb-0"><span class="rate">$15.95<span>/month</span></span><span class="pricing-onsale">On sale - <span class="badge color-3 color-3-bg">Save 30%</span></span></p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-xs">Order Now</a>
                                </td>
                            </tr>
                            <tr class="vps-pricing-row gray-light-bg">
                                <td data-value="VCPU">6 vCPU</td>
                                <td data-value="Memory">12GB</td>
                                <td data-value="CPU Power"><span>14.4GHz<span class="cpu-core">6 cores</span></span></td>
                                <td data-value="Storage">120GB</td>
                                <td data-value="Geekbench Score">
                                    <div class="score-bar-wrap">
                                        <span class="geekbench-score">10789</span>
                                        <div class="progress w-100 score-bar-item">
                                            <div class="progress-bar primary-bg" role="progressbar" style="width: 85%;" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">85%
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-value="Bandwidth">6000GB</td>
                                <td data-value="Price">
                                    <p class="mb-0"><span class="rate">$23.95<span>/month</span></span><span class="pricing-onsale">On sale - <span class="badge color-5 color-5-bg">Save 40%</span></span></p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-xs">Order Now</a>
                                </td>
                            </tr>
                            <tr class="vps-pricing-row gray-light-bg">
                                <td data-value="VCPU">8 vCPU</td>
                                <td data-value="Memory">16GB</td>
                                <td data-value="CPU Power"><span>19.2GHz<span class="cpu-core">8 cores</span></span></td>
                                <td data-value="Storage">160GB</td>
                                <td data-value="Geekbench Score">
                                    <div class="score-bar-wrap">
                                        <span class="geekbench-score">12632</span>
                                        <div class="progress w-100 score-bar-item">
                                            <div class="progress-bar primary-bg" role="progressbar" style="width: 100%;" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">100%
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td data-value="Bandwidth">8000GB</td>
                                <td data-value="Price">
                                    <p class="mb-0"><span class="rate">$29.95<span>/month</span></span><span class="pricing-onsale">On sale - <span class="badge color-3 color-3-bg">Save 10%</span></span></p>
                                </td>
                                <td>
                                    <a href="" class="btn btn-brand-01 btn-xs">Order Now</a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </section>
    <!--vps hosting pricing plane end-->

    <!--feature section start-->
    <section class="feature-section ptb-100 gray-light-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Our VPS Hosting Platform Best Features</h2>
                        <p class="lead">Uniquely restore open-source products via open-source relationships.
                            Enthusiastically deliver competitive systems and client-centric.</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between">
                <div class="col-md-6 col-lg-6">
                    <div class="cta-new-wrap">
                        <div class="feature-feature-list py-3">
                            <span class="ti-harddrives icon-size-md d-block color-primary mb-3"></span>
                            <h5 class="mb-2">SSD Disk Drives</h5>
                            <p>You can never go wrong with our own top-notch dedicated servers loaded Credibly network leading-edge services vis-a-vis world-class niches. Seamlessly visualize end-to-end web-readiness </p>
                        </div>
                        <div class="feature-feature-list py-3">
                            <span class="ti-rss-alt icon-size-md d-block color-primary mb-3"></span>
                            <h5 class="mb-2">100 Mb/s Network</h5>
                            <p>We can guarantee an excellent experience and loading time for your successful Energistically synthesize just in time paradigms after resource-leveling e-business plagiarize cross-unit information</p>
                        </div>
                        <div class="feature-feature-list py-3">
                            <span class="ti-lock icon-size-md d-block color-primary mb-3"></span>
                            <h5 class="mb-2">DDoS Protection</h5>
                            <p>With full root access you will be able to take full control of your server very easy Holisticly repurpose granular models and go forward schemas. Professionally scale magnetic portals before </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="cta-new-wrap">
                        <img src="<?= get_template_directory_uri() ?>/assets/imgs/vps-feature-img-1.png" alt="hosting" class="img-fluid" />
                    </div>
                </div>
            </div>
            <div class="row align-items-center justify-content-between mt-5">
                <div class="col-md-6 col-lg-6">
                    <div class="cta-new-wrap">
                        <img src="<?= get_template_directory_uri() ?>/assets/imgs/vps-feature-img-2.png" alt="hosting" class="img-fluid" />
                    </div>
                </div>
                <div class="col-md-6 col-lg-6">
                    <div class="cta-new-wrap">
                        <div class="feature-feature-list py-3">
                            <span class="ti-world icon-size-md d-block color-primary mb-3"></span>
                            <h5 class="mb-2">Dedicated IP</h5>
                            <p>One of many premium features is a dedicated IP cheapest VPS hosting plan Authoritatively formulate user-centric sources without emerging best practices. Monotonectally morph an expanded </p>
                        </div>
                        <div class="feature-feature-list py-3">
                            <span class="ti-location-pin icon-size-md d-block color-primary mb-3"></span>
                            <h5 class="mb-2">IPv6 Support</h5>
                            <p>Our VPS hosting plan is fully packed with dedicated IPv6 Internet protocol IP Progressively maximize standardized catalysts for change via diverse initiatives. Monotonectally underwhelm</p>
                        </div>
                        <div class="feature-feature-list py-3">
                            <span class="ti-wallet icon-size-md d-block color-primary mb-3"></span>
                            <h5 class="mb-2">Money-back Guarantee</h5>
                            <p>If you’re not 100% satisfied with Hostlar, we’ll refund your payment no risk Interactively administrate wireless results via cooperative mindshare. Completely benchmark process-centric sources and high standards</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--feature section end-->

    <!--call to action new section start-->
    <section class="ptb-100  primary-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="cta-content-wrap text-white text-center">
                        <h2 class="text-white">Available Operating Systems With Maximum Speed</h2>
                        <p class="lead">Objectively innovate high compellingly maintain multidisciplinary process improvements whereas premium performance per node guaranteed.</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-2 col-lg-2 col-md-2 col-6">
                    <div class="single-icon-wrap border rounded bg-white p-4 text-center mt-4">
                        <img src="<?= get_template_directory_uri() ?>/assets/imgs/os-img-1.png" alt="os" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-6">
                    <div class="single-icon-wrap border rounded bg-white p-4 text-center mt-4">
                        <img src="<?= get_template_directory_uri() ?>/assets/imgs/os-img-2.png" alt="os" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-6">
                    <div class="single-icon-wrap border rounded bg-white p-4 text-center mt-4">
                        <img src="<?= get_template_directory_uri() ?>/assets/imgs/os-img-3.png" alt="os" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-6">
                    <div class="single-icon-wrap border rounded bg-white p-4 text-center mt-4">
                        <img src="<?= get_template_directory_uri() ?>/assets/imgs/os-img-4.png" alt="os" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-6">
                    <div class="single-icon-wrap border rounded bg-white p-4 text-center mt-4">
                        <img src="<?= get_template_directory_uri() ?>/assets/imgs/os-img-5.png" alt="os" class="img-fluid">
                    </div>
                </div>
                <div class="col-xl-2 col-lg-2 col-md-2 col-6">
                    <div class="single-icon-wrap border rounded bg-white p-4 text-center mt-4">
                        <img src="<?= get_template_directory_uri() ?>/assets/imgs/os-img-6.png" alt="os" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--call to action new section end-->


    <!--faq section start-->
    <section id="faq" class="ptb-100 ">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-9 col-lg-8">
                    <div class="section-heading text-center mb-5">
                        <h2>Frequently Asked Queries</h2>
                        <p>Efficiently productivate reliable paradigms before ubiquitous models. Continually utilize frictionless expertise whereas tactical relationships. Still have questions? Contact us</p>
                    </div>
                </div>
            </div>
            <div class="row align-items-center">
                <div class="col-md-12 col-lg-12">
                    <div id="accordion" class="accordion faq-wrap">
                        <div class="card mb-3">
                            <a class="card-header " data-toggle="collapse" href="#collapse0" aria-expanded="false">
                                <h6 class="mb-0 d-inline-block">If I have a WordPress site hosted somewhere else, can I move it to Kohost?</h6>
                            </a>
                            <div id="collapse0" class="collapse show" data-parent="#accordion" style="">
                                <div class="card-body white-bg">
                                    <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#x27;t heard of them accusamus labore sustainable VHS. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card my-3">
                            <a class="card-header collapsed" data-toggle="collapse" href="#collapse1" aria-expanded="false">
                                <h6 class="mb-0 d-inline-block">What’s the difference between WordPress Hosting and shared Web Hosting?</h6>
                            </a>
                            <div id="collapse1" class="collapse " data-parent="#accordion" style="">
                                <div class="card-body white-bg">
                                    <p>Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#x27;t heard of them accusamus. Seamlessly optimize empowered testing procedures before revolutionary processes. Progressively facilitate client-centered technologies whereas extensive users. Authoritatively. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card my-3">
                            <a class="card-header collapsed" data-toggle="collapse" href="#collapse2" aria-expanded="false">
                                <h6 class="mb-0 d-inline-block">How do I know what WordPress Hosting plan is best for me?</h6>
                            </a>
                            <div id="collapse2" class="collapse " data-parent="#accordion" style="">
                                <div class="card-body white-bg">
                                    <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven&#x27;t heard of them accusamus labore sustainable VHS. </p>
                                </div>
                            </div>
                        </div>
                        <div class="card mt-3">
                            <a class="card-header collapsed" data-toggle="collapse" href="#collapse3" aria-expanded="false">
                                <h6 class="mb-0 d-inline-block">Is email included with WordPress Hosting?</h6>
                            </a>
                            <div id="collapse3" class="collapse " data-parent="#accordion" style="">
                                <div class="card-body white-bg">
                                    <p>Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table. Professionally embrace customer directed value vis-a-vis high-quality portals. Quickly underwhelm B2C users with maintainable benefits. </p>
                                </div>
                            </div>
                        </div>
                    </div>
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
                        <a href="#" class="btn btn-outline-brand-01 btn-sm"> Write About Us</a>
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