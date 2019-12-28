
<section class="blog_area single-post-area section-padding" >
    <div class="container" style="background: white">
        <div class="row">
            <div class="col-lg-8 posts-list">
                <div class="single-post">
                    <div class="blog_details">
                        <h2 class="border-bottom"><?php echo $bv[0]->TieuDe; ?></h2>
                        <ul class="blog-info-link mt-3 mb-4 border-bottom">
                            <li><a href="#"><i class="fa fa-user"></i><?php echo $bv[0]->NhomTin; ?></a></li>
                            <li><a href="#"><i class="fa fa-comments"></i><?php echo $bv[0]->LuotXem?> Lượt Xem</a></li>
                        </ul>
                        <div class="excert">
                            <?php echo $bv[0]->NoiDung; ?>
                        </div>
                    </div>
                </div>
                <div class="navigation-top">
                    <div class="d-sm-flex justify-content-between text-center">
                        <p class="like-info"><span class="align-middle"><i class="fa fa-heart"></i></span> Lily and 4
                            people like this</p>
                        <div class="col-sm-4 text-center my-2 my-sm-0">
                            <!-- <p class="comment-count"><span class="align-middle"><i class="fa fa-comment"></i></span> 06 Comments</p> -->
                        </div>
                        <ul class="social-icons">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-dribbble"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="comments-area">
                    <?php foreach ($binhluan as $value){
                        if ($value->IDTin ==$bv[0]->IDTin){?>

                    <div class="comment-list">
                        <div class="single-comment justify-content-between d-flex">
                            <div class="user justify-content-between d-flex">
                                <div class="thumb">
                                    <img src="<?php echo base_url('image/avatar-min.png') ?>" alt="" style=" width: 50px;">
                                </div>
                                <div class="desc">
                                    <p class="comment">
                                        <?php echo $value->NoiDung?>
                                    </p>
                                    <div class="d-flex justify-content-between">
                                        <div class="d-flex align-items-center">
                                            <h5>
                                                <a href="#"><?php echo $value->Username?></a>
                                            </h5>
                                            <p class="date"><?php echo $value->NgayBL?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php }}?>
                </div>
                <div class="comment-form">
                    <h4>Leave a Reply</h4>
                    <form class="form-contact comment_form" action="#" id="commentForm" method="post">
                        <div class="row">
                            <div class="col-12">
                                <div class="form-group">
                              <textarea class="form-control w-100" name="comment" id="comment" cols="30" rows="4"
                                        placeholder="Write Comment"></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="button button-contactForm btn_1 boxed-btn">Send Message</button>
                        </div>
                    </form>
                </div>
            </div>
            <?php $this->load->view('user/right');?>
        </div>
    </div>
</section>
