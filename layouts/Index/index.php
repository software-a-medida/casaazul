<?php

defined('_EXEC') or die;

$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.carousel.min.css']);
$this->dependencies->add(['css', '{$path.plugins}owlcarousel/assets/owl.theme.default.min.css']);
$this->dependencies->add(['js', '{$path.plugins}owlcarousel/owl.carousel.min.js']);
$this->dependencies->add(['css', '{$path.plugins}fancybox/source/jquery.fancybox.css']);
$this->dependencies->add(['js', '{$path.plugins}fancybox/source/jquery.fancybox.pack.js']);
$this->dependencies->add(['js', '{$path.js}Index/index.js?v=1.1']);

?>

<main>
    <section id="contactanos" class="pos-relative" style="height:100vh;">
        <figure style="height:100%;">
            <img data-desktop src="{$path.images}cover_desktop.jpg" alt="Background" class="img-cover">
            <img data-mobile-block src="{$path.images}cover_mobile.jpg" alt="Background" class="img-cover">
        </figure>
        <div class="pos-absolute d-flex align-items-center p-40" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(0,0,0,0.1);">
            <div class="container">
                <h1 class="m-b-20 text-center text-light" style="font-size:50px;">{$lang.keep_your_properties}</h1>
                <div class="d-flex align-items-center justify-content-center">
                    <div style="width:100%;max-width:600px;height:200px;">
                        <div class="ui-sortable-handle">
                            <script charset="utf-8" type="text/javascript" src="//js.hsforms.net/forms/shell.js"></script>
                            <script>
                                  hbspt.forms.create({
                                	portalId: "7235449",
                                	formId: "b66993fe-3f8b-4cb6-b039-90ef8cea3407"
                                });
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="nosotros" class="p-40" style="background-color:#b2b2af;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <h4 class="text-center text-md-left" style="font-family:'Karla-Bold';font-size:40px;color:#f4f4ea;">{$lang.satisfied_customers}</h4>
                </div>
                <div class="col-md-2 m-b-20 m-b-md-0">
                    <h5 class="text-center" style="color:#f4f4ea;"><span class="text-uppercase">{$lang.last_year_bookings_1}</span> <br data-desktop><br data-desktop> {$lang.last_year_bookings_2}</h5>
                </div>
                <div class="col-6 col-md-2" style="border-right:1px solid #f4f4ea;">
                    <h4 class="m-b-10 text-center" style="font-size:40px;color:#f4f4ea;">96.2%</h4>
                    <h6 class="text-center text-uppercase" style="color:#f4f4ea;">{$lang.stars_and_reviews}</h6>
                </div>
                <div class="col-6 col-md-2">
                    <h4 class="m-b-10 text-center" style="font-size:40px;color:#f4f4ea;">95.7%</h4>
                    <h6 class="text-center text-uppercase" style="color:#f4f4ea;">{$lang.same_day_cleaning}</h6>
                </div>
            </div>
        </div>
    </section>
    <section id="max-bookings" style="background-color:#f4f4ea;">
        <div class="row no-gutters">
            <div class="col-md-8 pos-relative">
                <figure style="height:80vh;">
                    <img src="{$path.images}your_blue_house.jpg" alt="Blue house" class="img-cover">
                </figure>
                <div class="pos-absolute p-40" style="width:400px;top:calc(50% - 150px);right:-200px;background-color:#f4f4ea;">
                    <h2 class="m-b-20 text-dark" style="font-family:'Karla-Bold';">{$lang.max_your_bookings}</h2>
                    <p class="m-b-20 text-dark">{$lang.max_your_bookings_text}</p>
                    <a href="<?php echo Configuration::$vars['rrss']['airbnb']['url']; ?>" target="_blank" class="btn" style="background-color:#012b7b;">{$lang.book}</a>
                </div>
            </div>
        </div>
    </section>
    <section id="transparenci-availability" class="p-40" style="background-color:#e2e2dc;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6">
                    <h4 class="m-b-5 text-center text-dark" style="font-size:40px;">80% <span class="d-block">{$lang.of_ocupation_index}</span></h4>
                    <p class="text-center text-uppercase text-dark">{$lang.thanks_our_price_syste}</p>
                </div>
                <div class="col-md-3 m-b-20 m-b-md-0" style="border-right:1px solid #000;">
                    <h4 class="m-b-5 text-center text-dark" style="font-size:40px;">100%</h4>
                    <h6 class="m-b-10 text-center text-uppercase text-dark">{$lang.of_transparency}</h6>
                    <p class="text-center text-dark">{$lang.month_reports}</p>
                </div>
                <div class="col-md-3 m-b-20 m-b-md-0">
                    <h4 class="m-b-5 text-center text-dark" style="font-size:40px;">24/7</h4>
                    <h6 class="m-b-10 text-center text-uppercase text-dark">{$lang.availability}</h6>
                    <p class="text-center text-dark">{$lang.with_a_time_response}</p>
                </div>
            </div>
        </div>
    </section>
    <section id="numbers-speak" class="pos-relative" style="height:80vh;">
        <figure style="height:100%;">
            <img src="{$path.images}tulum.jpg" alt="Background" class="img-cover">
        </figure>
        <div class="pos-absolute d-flex align-items-center p-40" style="top:0px;right:0px;bottom:0px;left:0px;background-color:rgba(0,0,0,0.1);">
            <div class="container">
                <h2 class="text-center text-light" style="font-size:60px;">{$lang.let_the_numbers_speak_for_themselves}</h2>
            </div>
        </div>
    </section>
    <section id="porque-elegirnos" class="p-40" style="background-color:#e2e2dc;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <h4 class="text-center text-md-left text-dark" style="font-family:'Karla-Bold';font-size:40px;">{$lang.why_choosing_us}</h4>
                </div>
                <div class="col-md-3 m-b-20 m-b-md-0" style="border-right:1px solid #000;">
                    <h4 class="m-b-5 text-center text-dark" style="font-size:40px;">{$lang.full_service}</h4>
                    <h6 class="m-b-10 text-center text-uppercase text-dark">{$lang.constant_mantenience}</h6>
                    <p class="text-center text-dark">{$lang.we_ensure_integrity}</p>
                </div>
                <div class="col-md-3">
                    <h4 class="m-b-5 text-center text-dark" style="font-size:40px;">+300</h4>
                    <h6 class="m-b-10 text-center text-uppercase text-dark">{$lang.registered_brokers}</h6>
                    <p class="text-center text-dark">{$lang.excellent_comercial_relationship}</p>
                </div>
            </div>
        </div>
    </section>
    <section id="gallery" class="p-40" style="background-color:#f4f4ea;">
        <div class="container">
            <div class="pos-relative">
                <div class="owl-carousel owl-theme">
                    <figure class="item d-flex align-items-center justify-content-center" style="height:600px;">
                        <img src="{$path.images}gallery_1.jpg" style="width:auto;height:100%;">
                    </figure>
                    <figure class="item d-flex align-items-center justify-content-center" style="height:600px;">
                        <img src="{$path.images}gallery_2.jpg" style="width:auto;height:100%;">
                    </figure>
                    <figure class="item d-flex align-items-center justify-content-center" style="height:600px;">
                        <img src="{$path.images}gallery_3.jpg" style="width:auto;height:100%;">
                    </figure>
                    <figure class="item d-flex align-items-center justify-content-center" style="height:600px;">
                        <img src="{$path.images}gallery_4.jpg" style="width:auto;height:100%;">
                    </figure>
                    <figure class="item d-flex align-items-center justify-content-center" style="height:600px;">
                        <img src="{$path.images}gallery_5.jpg" style="width:auto;height:100%;">
                    </figure>
                    <figure class="item d-flex align-items-center justify-content-center" style="height:600px;">
                        <img src="{$path.images}gallery_6.jpg" style="width:auto;height:100%;">
                    </figure>
                    <figure class="item d-flex align-items-center justify-content-center" style="height:600px;">
                        <img src="{$path.images}gallery_7.jpg" style="width:auto;height:100%;">
                    </figure>
                    <figure class="item d-flex align-items-center justify-content-center" style="height:600px;">
                        <img src="{$path.images}gallery_8.jpg" style="width:auto;height:100%;">
                    </figure>
                </div>
                <a data-action="prev_gallery" class="pos-absolute text-dark" style="top:calc(50% - 20px);left:-40px;font-size:40px;"><i class="fas fa-chevron-left"></i></a>
                <a data-action="next_gallery" class="pos-absolute text-dark" style="top:calc(50% - 20px);right:-40px;font-size:40px;"><i class="fas fa-chevron-right"></i></a>
            </div>
        </div>
    </section>
    <section class="p-40" style="background-color:#e2e2dc;">
        <div class="container">
            <div class="row d-flex align-items-start">
                <div class="col-md-6 m-b-20 m-b-md-0">
                    <figure class="m-b-10 text-center text-md-left">
                        <img src="{$path.images}logotype_blue.png" alt="Logotype" class="img-fluid" style="max-height:40px;">
                    </figure>
                    <h2 class=" text-center text-md-left text-uppercase" style="font-family:'Karla-Bold';color:#012b7b;">{$lang.and_the_market}</h2>
                </div>
                <div class="col-md-2 m-b-20 m-b-md-0">
                    <h4 class="m-b-5 text-center text-dark" style="font-size:40px;">{$lang.rater}</h4>
                    <h6 class="m-b-10 text-center text-uppercase text-dark">{$lang.per_night}</h6>
                    <p class="text-center text-dark">{$lang.night_prom_cdmx}</p>
                </div>
                <div class="col-md-2 m-b-20 m-b-md-0">
                    <h4 class="m-b-5 text-center text-dark" style="font-size:40px;">89.5%</h4>
                    <h6 class="m-b-10 text-center text-uppercase text-dark">{$lang.ocupation_index}</h6>
                    <p class="text-center text-dark">{$lang.ocupation_prom_cdmx}</p>
                </div>
                <div class="col-md-2">
                    <h4 class="m-b-5 text-center text-dark" style="font-size:40px;">{$lang.higher} %</h4>
                    <h6 class="m-b-10 text-center text-uppercase text-dark">{$lang.mont_prom_cdmx}</h6>
                    <p class="text-center text-dark">{$lang.per_month}</p>
                </div>
            </div>
        </div>
    </section>
    <section class="p-t-40 p-r-40 p-l-40" style="background-color:#f4f4ea;">
        <div class="container">
            <div class="row d-flex align-items-center">
                <div data-desktop class="col-3"></div>
                <div class="col-md-3 m-b-40 m-b-md-0">
                    <figure class="text-center">
                        <img src="{$path.images}airbnb.png" alt="Logotype" class="img-fluid" style="max-height:80px;">
                    </figure>
                </div>
                <div class="col-md-3">
                    <h4 class="m-b-5 text-center text-dark" style="font-size:40px;">SuperHost</h4>
                    <p class="text-center text-dark">{$lang.we_certificated_like_superhost}</p>
                </div>
                <div data-desktop class="col-3"></div>
            </div>
        </div>
    </section>
    <section id="contactanos" class="p-t-40 p-r-40 p-l-40" style="background-color:#f4f4ea;">
        <div class="container d-flex align-items-center justify-content-center flex-column">
            <a href="mailto:<?php echo Configuration::$vars['contact']['email']; ?>" class="text-dark">{$lang.email}: <?php echo Configuration::$vars['contact']['email']; ?></a>
            <a href="tel:<?php echo Configuration::$vars['contact']['phone']; ?>" class="m-b-40 m-b-md-20 text-dark">{$lang.phone}: <?php echo Configuration::$vars['contact']['phone']; ?></a>
            <a href="#contactanos" class="btn btn-b-none text-uppercase text-light" style="width:100%;max-width:400px;border-radius:0px;background-color:#012b7b;">{$lang.contact_us}</a>
        </div>
    </section>
</main>
