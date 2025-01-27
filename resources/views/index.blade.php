@extends('template')

@section('title')
    Natalpro | Eradicating Maternal and Infant Mortality
@endsection

@section('content')
    <section class="section home-5-bg" id="home">
        <div id="particles-js"></div>
        <div class="bg-overlay"></div>
        <div class="home-center">
            <div class="home-desc-center">
                <div class="container">
                    <div class="justify-content-center row">
                        <div class="col-lg-7">
                            <div class="mt-40 text-center home-5-content">
                                <div class="home-icon mb-4"><i class="mdi mdi-pinwheel mdi-spin text-white h1"></i></div>
                                <h1 class="text-white font-weight-normal home-5-title mb-0">Welcome to NatalPro</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="feature-one feature-one__home-two">
        <div class="">
            <div class="row no-gutters">
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="feature-one__single">
                        <div class="feature-one__icon">
                            <i class="fa fa-hospital-o"></i>
                        </div><!-- /.feature-one__icon -->
                        <div class="feature-one__content">
                            <h3 class="feature-one__title"><a href="#">We Eradicate Maternal <br/> and Infant Mortality</a></h3>
                            <!-- /.feature-one__title -->
                        
                        </div><!-- /.feature-one__content -->
                    </div><!-- /.feature-one__single -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="feature-one__single">
                        <div class="feature-one__icon">
                            <i class="fa fa-envelope"></i>
                        </div><!-- /.feature-one__icon -->
                        <div class="feature-one__content">
                            <h3 class="feature-one__title"><a href="#">Access To Automated Vaccination  Reminder</a></h3>
                            
                        </div><!-- /.feature-one__content -->
                    </div><!-- /.feature-one__single -->
                </div><!-- /.col-lg-6 -->
                <div class="col-lg-4 col-md-4 col-sm-12">
                    <div class="feature-one__single">
                        <div class="feature-one__icon">
                            <i class="fa fa-book"></i>
                        </div><!-- /.feature-one__icon -->
                        <div class="feature-one__content">
                            <h3 class="feature-one__title"><a href="#">We Educate Communities <br> on Safe Birth Practices</a></h3>
                            
                        </div><!-- /.feature-one__content -->
                    </div><!-- /.feature-one__single -->
                </div><!-- /.col-lg-6 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.feature-one -->

    <section class="about-two">
        <div class="container">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="about-two__content">
                    <div class="block-title text-left" style="text-align:justify">
                        <h2 class="block-title__title">About Us</h2>
                        <p style="color:#555">Natalpro is a mobile health solution provider in Nigeria. We leverage last miles technologies to provide pregnant women and nursing mothers access to quality health information. We are the service provider that aims to bridge the gap between women and health information. </p>

                        <p style="color:#555">We know what works, and we’ve built a strong foundation for expanding our efforts to provide life-saving health information, training, and care for families in Nigeria. We provide access to qualified healthcare professionals via mobile phone, we remind mothers on their child's next vaccination date and we educate mothers on good health practices. 
                        <br/><br/> 
                        We also train thousands of volunteers as frontline care providers to deliver the often simple solutions that help mothers and children not just survive, but thrive</p>
                    </div><!-- /.block-title -->
                    
                </div><!-- /.about-two__content -->
            </div><!-- /.col-lg-8 -->
        <!--  <div class="col-md-3 col-sm-3 col-xs-12 container">
                <iframe width="400" height="315" src="https://www.youtube.com/embed/QyW2-U7jELs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div> --><!-- /.about-two__image-block -->
            <!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.about-two -->

    <section class="cta-two">
        <div class="container">
            <h2 class="cta-two__title">Wants to request for our vaccination reminder?   <br/>
                <a href="{{ route('vaccination.add') }}" class="thm-btn cta-one__btn"><i class="fa fa-user-plus"></i> Register Now</a>
        </div><!-- /.container -->
    </section><!-- /.cta-two -->

    <section class="feature-one">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="feature-one__box">
                        <h3 class="feature-one__box-title">Our Life Saving Interventions</h3>
                        <p style="text-align: justify;color:#555">
                        Globally, one-third of women deliver their babies without the help of a doctor, nurse, or midwife. For almost 1 million babies every year, their first day of life is also their last. Close to 2 million newborns die within seven days of their birth. 
                        <br/>
                        Most women die simply because they do not have access to basic health information and also due to complications during pregnancy and childbirth, malnutrition, pneumonia, diarrhea, and malaria. 
                        <br/>
                        Natalpro is committed to eradicating these by <i class="fa fa-arrow-circle-right"></i>
                    </div><!-- /.feature-one__box -->
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-8">
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="feature-one__single">
                                <div class="feature-one__icon">
                                    <i class="fa fa-comments-o"></i>
                                </div><!-- /.feature-one__icon -->
                                <div class="feature-one__content">
                                    <h3 class="feature-one__title"><a href="#">Cutting-Edge <br> Technology</a></h3><!-- /.feature-one__title -->
                                    <p class="feature-one__text">We connect mothers to qualified healthcare professionals via chat, SMS and Email based services to provide first aid health information on pregnancy, child's health, immunisation and family planning. </p><!-- /.feature-one__text -->
                                </div><!-- /.feature-one__content -->
                            </div><!-- /.feature-one__single -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="feature-one__single">
                                <div class="feature-one__icon">
                                    <i class="fa fa-book"></i>
                                </div><!-- /.feature-one__icon -->
                                <div class="feature-one__content">
                                    <h3 class="feature-one__title"><a href="#">Education on maternal and infant <br> nutrition needs</a></h3><!-- /.feature-one__title -->
                                    <p class="feature-one__text">We educate mothers about maternal and infant nutrition needs, prenatal and postnatal care, and safe birth practices through our community health outreach.</p><!-- /.feature-one__text -->
                                </div><!-- /.feature-one__content -->
                            </div><!-- /.feature-one__single -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="feature-one__single">
                                <div class="feature-one__icon">
                                    <i class="fa fa-users"></i>
                                </div><!-- /.feature-one__icon -->
                                <div class="feature-one__content">
                                    <h3 class="feature-one__title"><a href="#">Equipping people and empowering leaders </a></h3>
                                    <p class="feature-one__text">We train and empower community health workers and volunteers in the recognition, treatment, and prevention of diseases affecting mothers and children.</p><!-- /.feature-one__text -->
                                </div><!-- /.feature-one__content -->
                            </div><!-- /.feature-one__single -->
                        </div><!-- /.col-lg-6 -->
                        <div class="col-lg-6 col-md-6 col-sm-12">
                            <div class="feature-one__single">
                                <div class="feature-one__icon">
                                    <i class="dentallox-icon-medical"></i>
                                </div><!-- /.feature-one__icon -->
                                <div class="feature-one__content">
                                    <h3 class="feature-one__title"><a href="#">Provisions of amenities</a></h3><!-- /.feature-one__title -->
                                    <p class="feature-one__text">We provide vital resources such as vitamin supplements, medicines, and medical supplies so local health facilities have the tools they need to combat life-threatening conditions.</p>
                                    <br/>
                                </div><!-- /.feature-one__content -->
                            </div><!-- /.feature-one__single -->
                        </div><!-- /.col-lg-6 -->
                    </div><!-- /.row -->
                </div><!-- /.col-lg-8 -->
            </div><!-- /.row -->
        </div><!-- /.container -->
    </section><!-- /.feature-one -->

    <!-- <section class="cta-one cta-one__home-two">
        <div class="container">
            <div class="">
                <div class="col-lg-7">
                    <h3 class="cta-one__title">Willing to render service as a healthcare professional?</h3>
                    <a href="/portal/register" class="thm-btn cta-one__btn"><i class="fa fa-user-plus"></i> Register Now</a>
                </div>
                <iframe width="100%" height="500" src="https://www.youtube.com/embed/QyW2-U7jELs" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </section> -->

    <section class="testimonials-one">
        <div class="container">
            <div class="block-title text-center">
                <h2 class="block-title__title block-title__lite-color">What Our Clients Says</h2><!-- /.block-title__title -->
                <div class="block-title__line block-title__lite-bg"></div><!-- /.block-title__line -->
            </div><!-- /.block-title -->
            <div class="testimonials-one__carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__image">
                            <img src="{{ asset('home/images/resources/taiwo-adebayo.jpg') }}" alt="Taiwo Adebayo"/>
                        </div>
                        <img src="{{ asset('home/images/resources/testi-qoute-1-1.png') }}" class="testimonials-one__qoute" alt="Taiwo Adebayo"/>
                        <h3 class="testimonials-one__title">Taiwo Adebayo</h3>
                        <span class="testimonials-one__designation">Cleaner</span>
                        <p class="testimonials-one__text">Their level of professionalism was very good, I got relevant health tips throughout my natal period.</p>
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__image">
                            <img src="{{ asset('home/images/resources/adeola-akinwale.jpg') }}" alt="Adeola Akinwale"/>
                        </div>
                        <img src="{{ asset('home/images/resources/testi-qoute-1-1.png') }}" class="testimonials-one__qoute" alt="Adeola Akinwale"/>
                        <h3 class="testimonials-one__title">Adeola Akinwale</h3>
                        <span class="testimonials-one__designation">Businesswoman</span>
                        <p class="testimonials-one__text">Wow, such a great team and experience. Highly recommend to anyone looking at this site right now!</p>
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
                <div class="item">
                    <div class="testimonials-one__single">
                        <div class="testimonials-one__image">
                            <img src="{{ asset('home/images/resources/amanda-joy.jpg') }}" alt="Amanda Joy"/>
                        </div><!-- /.testimonials-one__image -->
                        <img src="{{ asset('home/images/resources/testi-qoute-1-1.png') }}" class="testimonials-one__qoute" alt="Amanda Joy"/>
                        <h3 class="testimonials-one__title">Amanda Joy</h3>
                        <span class="testimonials-one__designation">Painter</span>
                        <p class="testimonials-one__text">What a great experience. If you are reading this, you should get in touch with these guys! You won’t regret it.</p>
                    </div><!-- /.testimonials-one__single -->
                </div><!-- /.item -->
            </div><!-- /.testimonials-one__carousel -->
        </div><!-- /.container -->
    </section>

    <div class="brand-one">
        <div class="container">
            <div class="brand-one__carousel owl-theme owl-carousel">
                <div class="item">
                    <img src="{{ asset('home/images/brand/onifam.jpg') }}" class="img-responsive" alt="Onifam"/>
                </div>
                <div class="item">
                    <img src="{{ asset('home/images/brand/namnw.jpg') }}" class="img-responsive" alt="National association of nigerian nurses & midwives"/>
                </div>
            </div><!-- /.brand-one__carousel -->
        </div><!-- /.container -->
    </div><!-- /.brand-one -->
@endsection
