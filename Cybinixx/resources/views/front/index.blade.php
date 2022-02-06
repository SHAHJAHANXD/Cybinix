@extends('front.layout')
@section('title')
    Cybinix
@endsection
@section('content')

<section class="services_area pt-115" id="about">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">About</h5>
                    <h4 class="main_title">Work Process</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-sm-7">
                <div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="0.5s">
                    <div class="services_icon">
                        <i class="lni lni-write"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                        <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#">Research</a></h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-7">
                <div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="services_icon">
                        <i class="lni lni-bulb"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                        <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#">Prototype</a></h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-7">
                <div class="single_services text-center mt-30 wow fadeInUp" data-wow-duration="1s" data-wow-delay="1.5s">
                    <div class="services_icon">
                        <i class="lni lni-checkmark-circle"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                        <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#">Build</a></h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="why" class="about_area pt-115 ">
    <div class="about_image d-flex align-items-end justify-content-end">
        <div class="image">
            <img class="wow fadeInLeftBig" data-wow-duration="1s" data-wow-delay="0.5s" src="{{asset('cybinix')}}/assets/svg/about.svg" alt="about">
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="about_content wow fadeIn" data-wow-duration="1s" data-wow-delay="1s">
                    <div class="section_title pb-35">
                        <h5 class="sub_title">Why Choose Us</h5>
                        <h4 class="main_title">Your Goal is Our Achievement</h4>
                    </div>
                    <p>Nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat sed diam voluptua. At vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergren, no sea takimata sanctus. </p>
                    <ul class="about_list">
                        <li class="d-flex">
                            <div class="about_check">
                                <i class="lni lni-checkmark-circle"></i>
                            </div>
                            <div class="about_list_content">
                                <p>Vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="about_check">
                                <i class="lni lni-checkmark-circle"></i>
                            </div>
                            <div class="about_list_content">
                                <p>At vero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                            </div>
                        </li>
                        <li class="d-flex">
                            <div class="about_check">
                                <i class="lni lni-checkmark-circle"></i>
                            </div>
                            <div class="about_list_content">
                                <p>Dvero eos et accusam et justo duo dolores et rebum. Stet clita kasd gubergrenv</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="services" class="services_area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">What We Do</h5>
                    <h4 class="main_title">Our Services</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="services_icon">
                        <i class="lni lni-layout"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                        <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#">Web Design</a></h3>
                        <p>Our world class web development team creates highly dynamic and fully responsive websites capable of outdoing your competition.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                    <div class="services_icon">
                        <i class="lni lni-bullhorn"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                        <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#">Digital Marketing</a></h3>
                        <p>Our digital marketing team has a bag full of tricks to showcase your business to your target audience, turning leads into prospects effortlessly.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s">
                    <div class="services_icon">
                        <i class="lni lni-mobile"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                        <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#">Mobile Apps</a></h3>
                        <p>Our professional iOS and Android development teams specialize in producing comprehensive apps catering to your specific business needs.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.5s">
                    <div class="services_icon">
                        <i class="lni lni-seo"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                        <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#">SEO Consultancy</a></h3>
                        <p>Our SEO experts deliver you the best SEO services, seamlessly integrating the two to perfection.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1s">
                    <div class="services_icon">
                        <i class="lni lni-layers"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                        <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#">Graphic Design</a></h3>
                        <p>Our design experts deliver you the best amalgam of user experience and user interface design, seamlessly integrating the two to perfection. </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="single_services text-center mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="1.5s">
                    <div class="services_icon">
                        <i class="lni lni-briefcase"></i>
                        <svg xmlns="http://www.w3.org/2000/svg" width="94" height="92" viewBox="0 0 94 92">
                        <path class="services_shape" id="Polygon_12" data-name="Polygon 12" d="M42.212,2.315a11,11,0,0,1,9.576,0l28.138,13.6a11,11,0,0,1,5.938,7.465L92.83,54.018A11,11,0,0,1,90.717,63.3L71.22,87.842A11,11,0,0,1,62.607,92H31.393a11,11,0,0,1-8.613-4.158L3.283,63.3A11,11,0,0,1,1.17,54.018L8.136,23.383a11,11,0,0,1,5.938-7.465Z" />
                        </svg>
                    </div>
                    <div class="services_content">
                        <h3 class="services_title"><a href="#">Business Consultancy</a></h3>
                        <p>Lorem ipsum dolor sit amet, consetetur sadi aliquyam erat, sed diam voluptua. At vero eos accusam et justo duo dolores </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="work" class="work_area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">Works</h5>
                    <h4 class="main_title">Some of Our Recent Works</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid  wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
        <div class="row work_active">
            <div class="col-lg-3">
                <div class="single_work">
                    <div class="work_image">
                        <img src="{{asset('cybinix')}}/assets/images/work-1.jpg" alt="work">
                    </div>
                    <div class="work_content">
                        <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                        <h4 class="work_title"><a href="#">Marketing</a></h4>
                        <p>NoCodeAPI</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single_work">
                    <div class="work_image">
                        <img src="{{asset('cybinix')}}/assets/images/work-2.jpg" alt="work">
                    </div>
                    <div class="work_content">
                        <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                        <h4 class="work_title"><a href="#">Creative Design</a></h4>
                        <p>UIdeck</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single_work">
                    <div class="work_image">
                        <img src="{{asset('cybinix')}}/assets/images/work-3.jpg" alt="work">
                    </div>
                    <div class="work_content">
                        <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                        <h4 class="work_title"><a href="#">Web Design</a></h4>
                        <p>GrayGrids</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single_work">
                    <div class="work_image">
                        <img src="{{asset('cybinix')}}/assets/images/work-4.jpg" alt="work">
                    </div>
                    <div class="work_content">
                        <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                        <h4 class="work_title"><a href="#">Business Analysis</a></h4>
                        <p>Ayro UI</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single_work">
                    <div class="work_image">
                        <img src="{{asset('cybinix')}}/assets/images/work-5.jpg" alt="work">
                    </div>
                    <div class="work_content">
                        <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                        <h4 class="work_title"><a href="#">SMM</a></h4>
                        <p>LineIcons</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single_work">
                    <div class="work_image">
                        <img src="{{asset('cybinix')}}/assets/images/work-2.jpg" alt="work">
                    </div>
                    <div class="work_content">
                        <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                        <h4 class="work_title"><a href="#">SEO</a></h4>
                        <p>PageBulb</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3">
                <div class="single_work">
                    <div class="work_image">
                        <img src="{{asset('cybinix')}}/assets/images/work-4.jpg" alt="work">
                    </div>
                    <div class="work_content">
                        <a href="#" class="arrow"><i class="lni lni-chevron-right"></i></a>
                        <h4 class="work_title"><a href="#">Mobile App</a></h4>
                        <p>Rocket Internet LTD</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="pricing" class="pricing_area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">Pricing Plans</h5>
                    <h4 class="main_title">Choose Your Plan</h4>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="pricing_menu mt-30 pb-30">
                    <ul class="nav justify-content-center" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="active" id="monthly-tab" data-toggle="tab" href="#monthly" role="tab" aria-controls="monthly" aria-selected="true">Monthly</a>
                        </li>
                        <li class="nav-item">
                            <a id="yearly-tab" data-toggle="tab" href="#yearly" role="tab" aria-controls="yearly" aria-selected="false">Yearly</a>
                        </li>
                    </ul>
                </div>
                <div class="pricing_content_area">
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="monthly" role="tabpanel" aria-labelledby="monthly-tab">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.5s">
                                        <div class="pricing_title">
                                            <h4 class="title">Basic</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                            <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f" />
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price">$19.00</span>
                                            <p>Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos accusam et justo duo dolores </p>
                                            <a href="#" class="main-btn">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30 active wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1s">
                                        <div class="pricing_title">
                                            <h4 class="title">Standard</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                            <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f" />
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price">$39.00</span>
                                            <p>Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos accusam et justo duo dolores </p>
                                            <a href="#" class="main-btn">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="1.5s">
                                        <div class="pricing_title">
                                            <h4 class="title">Premium</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                            <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f" />
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price">$99.00</span>
                                            <p>Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos accusam et justo duo dolores </p>
                                            <a href="#" class="main-btn">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="yearly" role="tabpanel" aria-labelledby="yearly-tab">
                            <div class="row justify-content-center">
                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30">
                                        <div class="pricing_title">
                                            <h4 class="title">Basic</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                            <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f" />
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price">$99.00</span>
                                            <p>Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos accusam et justo duo dolores </p>
                                            <a href="#" class="main-btn">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30 active">
                                        <div class="pricing_title">
                                            <h4 class="title">Standard</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                            <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f" />
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price">$199.00</span>
                                            <p>Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos accusam et justo duo dolores </p>
                                            <a href="#" class="main-btn">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-7 col-sm-9">
                                    <div class="single_pricing text-center mt-30">
                                        <div class="pricing_title">
                                            <h4 class="title">Premium</h4>
                                            <svg xmlns="http://www.w3.org/2000/svg" width="112" height="110" viewBox="0 0 112 110">
                                            <path class="services_shape" id="Polygon_15" data-name="Polygon 15" d="M51.2,2.329a11,11,0,0,1,9.6,0L96.15,19.478a11,11,0,0,1,5.927,7.466l8.76,38.665a11,11,0,0,1-2.1,9.258l-24.508,30.96A11,11,0,0,1,75.6,110H36.4a11,11,0,0,1-8.625-4.173L3.266,74.867a11,11,0,0,1-2.1-9.258l8.76-38.665a11,11,0,0,1,5.927-7.466Z" fill="#f94f4f" />
                                            </svg>
                                        </div>
                                        <div class="pricing_content">
                                            <span class="pricing_price">$499.00</span>
                                            <p>Lorem ipsum dolor sit am consetetur sadi aliquyam erat sed diam voluptua vero eos accusam et justo duo dolores </p>
                                            <a href="#" class="main-btn">Choose Plan</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="team" class="team_area pt-115 pb-120">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">Team</h5>
                    <h4 class="main_title">Meet Our Team Members</h4>
                </div>
            </div>
        </div>
        <div class="row team_active wow fadeInLeft" data-wow-duration="0.5s" data-wow-delay="0.5s">
            <div class="col-lg-4">
                <div class="single_team">
                    <div class="team_image">
                        <img src="https://preview.uideck.com/items/plain/assets/images/team-1.jpg" alt="team">
                    </div>
                    <div class="team_content">
                        <h4 class="team_name"><a href="#">Chris Dave</a></h4>
                        <p>Founder and CEO</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single_team">
                    <div class="team_image">
                        <img src="https://preview.uideck.com/items/plain/assets/images/team-3.jpg" alt="team">
                    </div>
                    <div class="team_content">
                        <h4 class="team_name"><a href="#">Sarah Doe</a></h4>
                        <p>UI Designer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single_team">
                    <div class="team_image">
                        <img src="https://preview.uideck.com/items/plain/assets/images/team-5.jpg" alt="team">
                    </div>
                    <div class="team_content">
                        <h4 class="team_name"><a href="#">Rob Hope</a></h4>
                        <p>Dr. Software Engineer</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="single_team">
                    <div class="team_image">
                        <img src="https://preview.uideck.com/items/plain/assets/images/team-2.jpg" alt="team">
                    </div>
                    <div class="team_content">
                        <h4 class="team_name"><a href="#">Micheal Jordan</a></h4>
                        <p>Business Development Manager</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="blog" class="blog_area pt-115">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="section_title text-center pb-25">
                    <h5 class="sub_title">Blog</h5>
                    <h4 class="main_title">From The Blog</h4>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-4 col-md-7">
                <div class="single_blog mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.3s">
                    <div class="blog_image">
                        <img src="https://preview.uideck.com/items/plain/assets/images/blog-1.jpg" alt="blog">
                    </div>
                    <div class="blog_content">
                        <ul class="blog_meta d-flex justify-content-between">
                            <li>By: <a href="#">Musharof Chowdury</a></li>
                            <li>15 June 2024</li>
                        </ul>
                        <h3 class="blog_title"><a href="#">How to track your business revenue</a></h3>
                        <a href="#" class="more">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-7">
                <div class="single_blog mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.6s">
                    <div class="blog_image">
                        <img src="https://preview.uideck.com/items/plain/assets/images/blog-2.jpg" alt="blog">
                    </div>
                    <div class="blog_content">
                        <ul class="blog_meta d-flex justify-content-between">
                            <li>By: <a href="#">Musharof Chowdury</a></li>
                            <li>15 June 2024</li>
                        </ul>
                        <h3 class="blog_title"><a href="#">Improving products depending on feedback</a></h3>
                        <a href="#" class="more">Read More</a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-7">
                <div class="single_blog mt-30 wow fadeIn" data-wow-duration="0.5s" data-wow-delay="0.9s">
                    <div class="blog_image">
                        <img src="https://preview.uideck.com/items/plain/assets/images/blog-3.jpg" alt="blog">
                    </div>
                    <div class="blog_content">
                        <ul class="blog_meta d-flex justify-content-between">
                            <li>By: <a href="#">Musharof Chowdury</a></li>
                            <li>15 June 2024</li>
                        </ul>
                        <h3 class="blog_title"><a href="#">How to diversify your audience</a></h3>
                        <a href="#" class="more">Read More</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section id="contact" class="contact_area pt-70 pb-120">
    <div class="contact_image d-flex align-items-center justify-content-end">
        <div class="image">
            <img class="wow fadeInLeftBig" data-wow-duration="2s" data-wow-delay="0.4s" src="{{asset('cybinix')}}/assets/svg/contact.svg" alt="about">
        </div>
    </div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-lg-6">
                <div class="contact_wrapper mt-45 wow fadeInUp" data-wow-duration="0.5s" data-wow-delay="0.9s">
                    <div class="section_title pb-15">
                        <h5 class="sub_title">Contact</h5>
                        <h4 class="main_title">Get In Touch</h4>
                        <p>Lorem ipsum dolor sitrg amet, consetetur sadipscing elitr sed diam nonumy eirmod tempor invidunt ut labore et dolore magna.</p>
                    </div>
                    <div class="contact_form">
                        <form id="contact-form" action="https://preview.uideck.com/items/plain/assets/contact.php">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input name="name" type="text" placeholder="Name">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="single_form">
                                        <input name="email" type="email" placeholder="Email">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <textarea name="message" placeholder="Message"></textarea>
                                    </div>
                                </div>
                                <p class="form-message"></p>
                                <div class="col-md-12">
                                    <div class="single_form">
                                        <button class="main-btn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
