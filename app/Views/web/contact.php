<?= $this->extend('web/include/assemble') ?>
<?= $this->section('content') ?>

<!-- breadcrumb-area -->
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?= base_url('public/assets/') ?>img/bg/bdrc-bg.png)">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2>Contact Us</h2>
                        <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Contact Us</li>
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
<!-- contact-area -->
<section id="contact" class="contact-area after-none contact-bg pt-120 pb-120 p-relative fix">
    <div class="container">

        <div class="row justify-content-center align-items-center">

            <div class="col-lg-4 order-1">

                <div class="contact-info">
                    <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="f-cta-icon">
                            <i class="far fa-map"></i>
                        </div>
                        <h5>Office Address</h5>
                        <p>380 St Kilda Road, Melbourne <br>
                            VIC 3004, Australia</p>
                    </div>
                    <div class="single-cta pb-30 mb-30 wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="f-cta-icon">
                            <i class="far fa-clock"></i>
                        </div>
                        <h5>Working Hours</h5>
                        <p>Monday to Friday 09:00 to 18:30 <br>
                            Saturday 15:30</p>
                    </div>
                    <div class="single-cta wow fadeInUp animated" data-animation="fadeInDown animated" data-delay=".2s">
                        <div class="f-cta-icon">
                            <i class="far fa-envelope-open"></i>
                        </div>
                        <h5>Message Us</h5>
                        <p> <a href="#">support@example.com</a><br><a href="#">info@example.com</a></p>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 order-2">
                <div class="contact-bg02">
                    <div class="section-title center-align">
                        <h2>
                            Make Appointment
                        </h2>
                    </div>











                    <?php $session = session() ?>
                    <?php if ($session->getFlashdata('msg') !== null) : ?>
                        <div class="alert alert-<?= $session->getFlashdata('msg')['type'] ?> alert-dismissible fade show d-flex justify-content-between" role="alert">
                            <div>
                                <?= $session->getFlashdata('msg')['msg'] ?>
                            </div>
                            <div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($session->get('invalid_creds') !== null) : ?>
                        <div class="alert alert-<?= $session->get('invalid_creds')['type'] ?> alert-dismissible fade show d-flex justify-content-between" role="alert">
                            <div>
                                <?php foreach (array_keys($session->get('invalid_creds')['errors']) as $item) : ?>
                                    <?= $session->get('invalid_creds')['errors'][$item] ?><br>
                                <?php endforeach; ?>
                            </div>
                            <div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php if ($session->getFlashdata('error_msg') !== null) : ?>
                        <div class="alert alert-<?= $session->getFlashdata('error_msg')['type'] ?> alert-dismissible fade show d-flex justify-content-between" role="alert">
                            <div>
                                <?= $session->getFlashdata('error_msg')['msg'] ?>
                            </div>
                            <div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        </div>
                    <?php endif; ?>










                    <form action="<?= base_url('contact-us') ?>" method="post" class="contact-form mt-30">
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

</section>
<!-- contact-area-end -->
<!-- map-area-end -->
<div class="map fix" style="background: #f5f5f5;">
    <div class="container-flud">

        <div class="row">
            <div class="col-lg-12">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d212867.83634504632!2d-112.24455686962897!3d33.52582710700138!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x872b743829374b03%3A0xabaac255b1e43fbe!2sPlexus%20Worldwide!5e0!3m2!1sen!2sin!4v1618567685329!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
            </div>
        </div>
    </div>
</div>
<!-- map-area-end -->

</main>


</main>
<!-- main-area-end -->
<?= $this->endSection(); ?>