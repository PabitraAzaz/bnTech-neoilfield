<?= $this->extend('web/include/assemble') ?>
<?= $this->section('content') ?>


<section class="breadcrumb-area d-flex align-items-center" style="background-image:url(<?= base_url('public/assets/') ?>img/bg/bdrc-bg.png);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-xl-12 col-lg-12">
                <div class="breadcrumb-wrap text-left">
                    <div class="breadcrumb-title">
                        <h2>Service</h2>
                        <div class="breadcrumb-wrap">

                            <nav aria-label="breadcrumb">
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="<?= base_url('/') ?>">Home</a></li>
                                    <li class="breadcrumb-item active" aria-current="page">Gallery</li>
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
















<section id="blog" class="blog-area p-relative fix pt-90 pb-90">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="section-title center-align mb-50 text-center wow fadeInDown animated" data-animation="fadeInDown" data-delay=".4s">
                    <h2>
                        Gallery
                    </h2>



                    <div class="row g-4 mt-3">



                        <?php foreach ($gal as $g): ?>

                            <!-- Column 1 -->
                            <div class="col-12 col-sm-6 col-md-4">
                                <a class="gallery-image-pop" href="<?= base_url('uploads/gallery_image/' . $g['gal_image']) ?>"><img src="<?= base_url('uploads/gallery_image/' . $g['gal_image']) ?>" alt="img">
                                </a>
                            </div>


                        <?php endforeach ?>



                        <!-- Add more columns as needed -->
                    </div>










                    <!-- <div class="f-insta mt-3">
                        <ul>
                            <li>
                                <a class="popup-image" href="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4="><img src="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4=" alt="img">
                                </a>
                            </li>

                            <li>
                                <a class="popup-image" href="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4="><img src="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4=" alt="img">
                                </a>
                            </li>
                            <li>
                                <a class="popup-image" href="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4="><img src="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4=" alt="img">
                                </a>
                            </li>
                            <li>
                                <a class="popup-image" href="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4="><img src="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4=" alt="img">
                                </a>
                            </li>
                            <li>
                                <a class="popup-image" href="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4="><img src="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4=" alt="img">
                                </a>
                            </li>
                            <li>
                                <a class="popup-image" href="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4="><img src="https://media.istockphoto.com/id/1323151704/photo/oil-pumps-and-rig-at-sunset-by-the-sea.jpg?s=612x612&w=0&k=20&c=3eaPKjNLcfwJq2lUezIA6Fe6lGMUdytOf2SbkQDGpA4=" alt="img">
                                </a>
                            </li>

                        </ul>
                    </div> -->







                </div>

            </div>
        </div>
        <!-- <div class="row">
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


        </div> -->
    </div>
</section>


</main>
<!-- main-area-end -->
<?= $this->endSection(); ?>