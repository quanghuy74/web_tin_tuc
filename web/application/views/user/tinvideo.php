
<section class="blog_area section-padding"  >
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-60 text-center border-bottom">
                    <h3>
                        Tin Video
                    </h3>
                </div>
            </div>
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php foreach ($video as $value) { ?>
                        <article class="blog_item" style="background: whitesmoke">
                            <div class="blog_item_img">
                                <iframe width=720 height="400" src="https://www.youtube.com/embed/-NCgqTPuci4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

                                <a href="#" class="blog_item_date">
                                    <h3><?php echo $value->Ngay?></h3>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo user_url('home/baiviet/').$value->IDVideo?>">
                                    <h2><?php echo $value->TieuDe?></h2>
                                </a>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> <?php echo $value->NhomTin?></a></li>
                                </ul>
                            </div>
                        </article>
                    <?php } ?>

                </div>
            </div>
            <?php $this->load->view('user/right');?>
        </div>
    </div>
</section>
