
<section class="blog_area section-padding"  >
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-60 text-center border-bottom">
                    <h3>
                        Tin HOT
                    </h3>
                </div>
            </div>
            <div class="col-lg-8 mb-5 mb-lg-0">
                <div class="blog_left_sidebar">
                    <?php foreach ($baiviet as $value) { ?>
                        <article class="blog_item" style="background: whitesmoke">
                            <div class="blog_item_img">
                                <img class="card-img rounded-0" src="<?php echo $value->AnhTrichDan?>" alt="">
                                <a href="#" class="blog_item_date">
                                    <h3><?php echo $value->Ngay?></h3>
                                </a>
                            </div>

                            <div class="blog_details">
                                <a class="d-inline-block" href="<?php echo user_url('home/baiviet/').$value->IDTin?>">
                                    <h2><?php echo $value->TieuDe?></h2>
                                </a>
                                <p><?php echo $value->NoiDungTD?></p>
                                <ul class="blog-info-link">
                                    <li><a href="#"><i class="fa fa-user"></i> <?php echo $value->NhomTin?></a></li>
                                    <li><a href="#"><i class="fa fa-comments"></i> <?php echo $value->LuotXem?> Lượt xem</a></li>
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
