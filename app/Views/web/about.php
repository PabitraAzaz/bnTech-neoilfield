<?= $this->extend('web/include/assemble') ?>
<?= $this->section('content') ?>





<!-- breadcrumb-area -->
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?= base_url('public/assets/') ?>img/bg/bdrc-bg.png)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2>About Us</h2>
                        <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">About Us</li>
                                </ol>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->
<!-- about-area -->
<section class="about-area about-p pt-120 pb-120 p-relative fix">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="s-about-img p-relative  wow fadeInLeft animated" data-animation="fadeInLeft" data-delay=".4s">
                    <img src="<?= base_url('public/assets/') ?>img/features/about_img.png" alt="img">
                    <div class="about-text second-about">
                        <span>50 <sub>+</sub></span>
                        <p>Years of Experience</p>
                    </div>
                </div>

            </div>

            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="about-content s-about-content pl-30 wow fadeInRight  animated" data-animation="fadeInRight" data-delay=".4s">
                    <div class="about-title second-title pb-25">
                        <h2>Our Industrial Solution</h2>
                    </div>
                    <p>With over 50 years of combined experience, we bring unmatched expertise in providing end-to-end industrial solutions across various sectors. From equipment maintenance to industrial supply, we ensure quality, efficiency, and reliability in every project.</p>
                    <p>Our solutions are crafted to meet the dynamic demands of modern industries, backed by a skilled workforce, modern technology, and a commitment to excellence.</p>
                    <div class="slider-btn mt-20">
                        <a href="#" class="btn ss-btn smoth-scroll">Read More</a>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- about-area-end -->
<!-- skill-area -->
<section id="skill" class="skill-area p-relative fix" style="background: #00173c;">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-6 col-md-12 col-sm-12">
                <div class="skills-content s-about-content">
                    <div class="skills-title pb-20">
                        <h2>See Our Best Skills</h2>
                    </div>
                    <p>At the heart of our operations lies unmatched skill and precision. With years of hands-on experience and a dedication to industrial excellence, our team delivers results that speak volumes. Whether it's on the production floor or during critical maintenance, our skills ensure efficiency, quality, and reliability.</p>
                    <div class="skills-content s-about-content mt-20">
                        <div class="skills">
                            <div class="skill mb-30">
                                <div class="skill-name">Qulity Production</div>
                                <div class="skill-bar">
                                    <div class="skill-per" id="80"></div>
                                </div>
                            </div>
                            <div class="skill mb-30">
                                <div class="skill-name">Maintenance Services</div>
                                <div class="skill-bar">
                                    <div class="skill-per" id="90"></div>
                                </div>
                            </div>
                            <div class="skill mb-30">
                                <div class="skill-name">Product Managment</div>
                                <div class="skill-bar">
                                    <div class="skill-per" id="70"></div>
                                </div>
                            </div>

                        </div>



                    </div>
                </div>
            </div>
            <div class="col-lg-6 col-md-12 col-sm-12 pr-30">
                <div class="skills-img">
                    <img src="<?= base_url('public/assets/') ?>img/bg/skills-img.png" alt="img" class="img">
                </div>
            </div>

        </div>
    </div>
</section>
<!-- skill-area-end -->

<!-- counter-area -->
<div class="counter-area pt-120 pb-120">
    <div class="container">
        <div class="row justify-content-center align-items-center">
            <div class="col-lg-4">
                <div class="row counter-bg p-relative">
                    <div class="col-lg-12">
                        <div class="single-counter wow fadeInUp animated mb-30" data-animation="fadeInDown animated" data-delay=".2s">
                            <div class="icon">
                                <img src="<?= base_url('public/assets/') ?>img/icon/cn-iocn01.png" alt="img">
                            </div>

                            <div class="counter p-relative">
                                <span class="count">894</span>
                                <p>Saticfied Clients</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-counter wow fadeInUp animated mb-30" data-animation="fadeInDown animated" data-delay=".2s">
                            <div class="icon">
                                <img src="<?= base_url('public/assets/') ?>img/icon/cn-iocn02.png" alt="img">
                            </div>
                            <div class="counter p-relative">
                                <span class="count">785</span>
                                <p>Cups of Coffee</p>
                            </div>


                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-counter wow fadeInUp animated mb-30" data-animation="fadeInDown animated" data-delay=".2s">
                            <div class="icon">
                                <img src="<?= base_url('public/assets/') ?>img/icon/cn-iocn03.png" alt="img">
                            </div>

                            <div class="counter p-relative">
                                <span class="count">697</span>
                                <p>Projects Completed</p>
                            </div>

                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="single-counter wow fadeInUp animated mb-30" data-animation="fadeInDown animated" data-delay=".2s">
                            <div class="icon">
                                <img src="<?= base_url('public/assets/') ?>img/icon/cn-iocn04.png" alt="img">
                            </div>

                            <div class="counter p-relative">
                                <span class="count">948</span>
                                <p>Employees Worked</p>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
            <div class="col-lg-8">
                <div class="contact-bg02">
                    <div class="section-title center-align">
                        <h2>
                            Make Appointment
                        </h2>
                    </div>
                    <form action="https://htmldemo.zcubethemes.com/indobi/mail.php" method="post" class="contact-form mt-30">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-name mb-20">
                                    <input type="text" id="firstn" name="firstn" placeholder="First Name" required>
                                </div>
                            </div>

                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input type="text" id="email" name="email" placeholder="Eamil" required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input type="text" id="phone" name="phone" placeholder="Phone No." required>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-field p-relative c-subject mb-20">
                                    <input type="text" id="subject" name="subject" placeholder="Subject">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-field p-relative c-message mb-30">
                                    <textarea name="message" id="message" cols="30" rows="10" placeholder="Write comments"></textarea>
                                </div>
                                <div class="slider-btn">
                                    <button class="btn ss-btn" data-animation="fadeInRight" data-delay=".8s"><span>Submit Now</span></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
<!-- counter-area-end -->
<!-- team-area -->
<section class="team-area2 fix p-relative pt-105 pb-80" style="background: #00173c;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 p-relative">
                <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                    <h2>
                        Our Expert Team
                    </h2>

                </div>
            </div>

        </div>
        <div class="row team-active">
            <div class="col-xl-4">
                <div class="single-team mb-40">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="<?= base_url('public/assets/') ?>img/team/team01.png" alt="img">

                        </div>
                    </div>
                    <div class="team-info">
                        <h4><a href="team-single.html">Bableo Dablo</a></h4>
                        <p>Worker</p>
                        <div class="team-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-team mb-40">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="<?= base_url('public/assets/') ?>img/team/team02.png" alt="img">
                        </div>
                    </div>
                    <div class="team-info">
                        <h4><a href="team-single.html">Dawon Crisen</a></h4>
                        <p>Worker</p>
                        <div class="team-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-team mb-40">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="<?= base_url('public/assets/') ?>img/team/team03.png" alt="img">
                        </div>

                    </div>
                    <div class="team-info">
                        <h4><a href="team-single.html">David Suarez</a></h4>
                        <p>Worker</p>
                        <div class="team-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-team mb-40">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="<?= base_url('public/assets/') ?>img/team/team04.png" alt="img">
                        </div>

                    </div>
                    <div class="team-info">
                        <h4><a href="team-single.html">Gerard Peano</a></h4>
                        <p>Worker</p>
                        <div class="team-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-team mb-40">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="<?= base_url('public/assets/') ?>img/team/team01.png" alt="img">
                        </div>

                    </div>
                    <div class="team-info">
                        <h4><a href="team-single.html">Ostin Green</a></h4>
                        <p>Worker</p>
                        <div class="team-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-4">
                <div class="single-team mb-40">
                    <div class="team-thumb">
                        <div class="brd">
                            <img src="<?= base_url('public/assets/') ?>img/team/team02.png" alt="img">
                        </div>

                    </div>
                    <div class="team-info">
                        <h4><a href="team-single.html">Norman Colins</a></h4>
                        <p>Worker</p>
                        <div class="team-social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li> <a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</section>
<!-- team-area-end -->
<!-- testimonial-area -->
<section class="testimonial-area pt-120 pb-120" style="background-image: url(<?= base_url('public/assets/') ?>img/bg/testimonal-bg.png);background-color: #fff;background-position: center center;background-repeat: no-repeat;">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="section-title center-align mb-50 text-center">
                    <h2>
                        What Our Client Say’s
                    </h2>

                </div>

            </div>

            <div class="col-lg-12">
                <div class="testimonial-active2">
                    <div class="single-testimonial">
                        <div class="testi-author">
                            <img src="<?= base_url('public/assets/') ?>img/testimonial/testi_avatar.png" alt="img">
                        </div>
                        <div class="testi-author">
                            <div class="ta-info">
                                <h6>Nina Farell</h6>
                                <span>Client Of Company</span>
                            </div>
                        </div>
                        <p>“We’ve worked with this team on multiple marine supply projects. Their commitment to timely delivery and product quality is unmatched. Truly a reliable partner in the industrial space.”</p>
                    </div>
                    <div class="single-testimonial">
                        <div class="testi-author">
                            <img src="<?= base_url('public/assets/') ?>img/testimonial/testi_avatar.png" alt="img">
                        </div>
                        <div class="testi-author">
                            <div class="ta-info">
                                <h6>Arjun Mehta</h6>
                                <span>Operations Head, PetroMach India</span>
                            </div>
                        </div>
                        <p>“Very professional and responsive. From sourcing to after-sales support, their team made the entire process seamless. Highly recommended for oil & gas equipment and tools.”</p>
                    </div>

                    <div class="single-testimonial">
                        <div class="testi-author">
                            <img src="<?= base_url('public/assets/') ?>img/testimonial/testi_avatar.png" alt="img">
                        </div>
                        <div class="testi-author">
                            <div class="ta-info">
                                <h6>Sana Iqbal</h6>
                                <span>Project Manager, Ganga Infrastructure Pvt. Ltd.</span>
                            </div>
                        </div>
                        <p>“Excellent experience! We sourced critical safety gear and electrical items for our power plant expansion. The team was supportive, efficient, and met all deadlines.”</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- testimonial-area-end -->
<!-- blog-area -->
<section id="blog" class="blog-area p-relative fix pt-90 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                    <h2>
                        Latest Blog & News
                    </h2>

                </div>

            </div>
        </div>
        <div class="row">
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 hover-zoomin mb-30 wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="blog-thumb2">
                        <a href="blog-details.html"><img src="<?= base_url('public/assets/') ?>img/blog/inner_b1.jpg" alt="img"></a>
                    </div>
                    <div class="blog-content2">
                        <div class="date-home">
                            <i class="fal fa-calendar-alt"></i> 24th March 2021
                        </div>
                        <h4><a href="blog-details.html">Cras accumsan nulla nec lacus ultricies placerat.</a></h4>
                        <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                        <div class="blog-btn"><a href="blog-details.html">Read More</a></div>

                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="blog-thumb2">
                        <a href="blog-details.html"><img src="<?= base_url('public/assets/') ?>img/blog/inner_b2.jpg" alt="img"></a>
                    </div>
                    <div class="blog-content2">
                        <div class="date-home">
                            <i class="fal fa-calendar-alt"></i> 24th March 2021
                        </div>
                        <h4><a href="blog-details.html">Dras accumsan nulla nec lacus ultricies placerat.</a></h4>
                        <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                        <div class="blog-btn"><a href="blog-details.html">Read More</a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="single-post2 mb-30 hover-zoomin wow fadeInUp animated" data-animation="fadeInUp" data-delay=".4s">
                    <div class="blog-thumb2">
                        <a href="blog-details.html"><img src="<?= base_url('public/assets/') ?>img/blog/inner_b3.jpg" alt="img"></a>
                    </div>
                    <div class="blog-content2">
                        <div class="date-home">
                            <i class="fal fa-calendar-alt"></i> 24th March 2021
                        </div>
                        <h4><a href="blog-details.html">Seas accumsan nulla nec lacus ultricies placerat.</a></h4>
                        <p>Curabitur sagittis libero tincidunt tempor finibus. Mauris at dignissim ligula, nec tristique orci.</p>
                        <div class="blog-btn"><a href="blog-details.html">Read More</a></div>
                    </div>
                </div>
            </div>


        </div>
    </div>
</section>
<!-- blog-area-end -->

</main>


</main>
<!-- main-area-end -->
<?= $this->endSection(); ?>