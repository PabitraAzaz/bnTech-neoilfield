<?= $this->extend('web/include/assemble') ?>
<?= $this->section('content') ?>



<!-- search-popup -->
<div class="modal fade bs-example-modal-lg search-bg popup1" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content search-popup">
            <div class="text-center">
                <a href="#" class="close2" data-dismiss="modal" aria-label="Close">× close</a>
            </div>
            <div class="row search-outer">
                <div class="col-md-11"><input type="text" placeholder="Search for products..." /></div>
                <div class="col-md-1 text-right"><a href="#"><i class="fa fa-search" aria-hidden="true"></i></a></div>
            </div>
        </div>
    </div>
</div>
<!-- /search-popup -->
<!-- breadcrumb-area -->
<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?= base_url('public/assets/') ?>img/bg/bdrc-bg.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2>Services Deatils</h2>
                        <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page"><?= $serviceD['title'] ?></li>
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
<!-- service-details-area -->
<div class="about-area5 about-p p-relative">
    <div class="container pt-120 pb-90">
        <div class="row">
            <!-- #right side -->
            <div class="col-sm-12 col-md-12 col-lg-4 order-1">
                <aside class="sidebar services-sidebar">

                    <!-- Category Widget -->
                    <div class="sidebar-widget categories">
                        <div class="widget-content">
                            <!-- Services Category -->
                            <ul class="services-categories">
                                <?php foreach ($allS as $allS): ?>
                                    <li> <a href="<?= base_url('services/' . $allS['id']) ?>"><?= esc($allS['title']) ?></a> </li>
                                <?php endforeach ?>


                                <!-- <li class="active"><a href="single-service.html">Fuel &amp; Gas Management</a></li>
                                <li><a href="single-service.html">Eco &amp; Bio Power</a></li>
                                <li><a href="single-service.html">Mechanical Engineering</a></li>
                                <li><a href="single-service.html">Petroleum Refinery</a></li>
                                <li><a href="single-service.html">Power &amp; Energy Sector</a></li> -->
                            </ul>
                        </div>
                    </div>
                    <!--Service Contact-->
                    <div class="service-detail-contact wow fadeup-animation" data-wow-delay="1.1s">
                        <h3 class="h3-title">If You Need Any Help Contact With Us</h3>
                        <a href="javascript:void(0);" title="Call now">+91 705 2101 786</a>
                    </div>
                    <!--Brochures Box-->
                    <!-- <div class="brochures-box">
                        <div class="inner">
                            <h4>Download Brochures</h4>
                            <div class="text">Pleasure and praising pain was born and I will give you a complete account.</div>
                            <a class="theme-btn btn-style-one" href="#"><span class="btn-title"><i class="fa fa-file-pdf"></i> Info Company</span></a>
                            <a class="theme-btn btn-style-one" href="#"><span class="btn-title"><i class="fa fa-file-pdf"></i> Brochure Newest</span></a>
                        </div>
                    </div> -->


                </aside>
            </div>
            <!-- #right side end -->


            <div class="col-lg-8 col-md-12 col-sm-12 order-2">
                <div class="service-detail">


                    <div class="content-box">
                        <h2> We give the best Services </h2>
                        <p><?= esc($serviceD['description']) ?></p>

                        <!-- Two Column -->
                        <div class="two-column">
                            <div class="row">
                                <div class="image-column col-xl-12 col-lg-12 col-md-12">
                                    <figure class="image"><img src="<?= base_url('uploads/service_image/') . $serviceD['service_image'] ?>" alt=""></figure>
                                </div>
                            </div>
                        </div>

                        <h3>Why Choose This Service</h3>

                        <p><?= esc($serviceD['why_choose']) ?></p>
                        <!--Product Info Tabs-->


                        <p><?= esc($serviceD['other_info']) ?></p>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- service-details-area-end -->

    </main>


    <!-- main-area-end -->
    <?= $this->endSection(); ?>