<div class="popular_catagory_area">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-60 text-center">
                    <h3><font color="red">Danh Mục</font></h3>
                    <h2>
                        Được Nhiều Người Xem
                    </h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-3 col-md-4 col-lg-3">
                <div class="single_catagory">
                    <div class="thumb">
                        <img src="<?php echo public_url('img/thoisu.jpg')?>" style="hight 300px; width: 350px;" alt="">
                    </div>
                    <div class="hover_overlay">
                        <div class="hover_inner">
                            <a href="<?php echo user_url('home/Listbaiviet/').'1'; ?>"> <span>Thời Sự</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-lg-3">
                <div class="single_catagory">
                    <div class="thumb">
                        <img src="<?php echo public_url()?>img/kinhdoanh.jpg" style="hight 300px; width: 290px;" alt="">
                    </div>
                    <div class="hover_overlay">
                        <div class="hover_inner">
                            <a href="<?php echo user_url('home/Listbaiviet/').'2'; ?>"> <span>Kinh Doanh</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-lg-3">
                <div class="single_catagory">
                    <div class="thumb">
                        <img src="<?php echo public_url('img/thethao.jpg')?>" style="hight 300px; width: 350px;" alt="">
                    </div>
                    <div class="hover_overlay">
                        <div class="hover_inner">
                            <a href="<?php echo user_url('home/Listbaiviet/').'4'; ?>"> <span>Thể Thao</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-lg-3">
                <div class="single_catagory">
                    <div class="thumb">
                        <img src="<?php echo public_url('img/phapluat.jpg')?>" style="hight 300px; width: 350px;" alt="">
                    </div>
                    <div class="hover_overlay">
                        <div class="hover_inner">
                            <a href="<?php echo user_url('home/Listbaiviet/').'5'; ?>"> <span>Pháp Luật</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-lg-3">
                <div class="single_catagory">
                    <div class="thumb">
                        <img src="<?php echo public_url('img/khoahoccongnghe.png')?>" style="hight 300px; width: 320px;" alt="">
                    </div>
                    <div class="hover_overlay">
                        <div class="hover_inner">
                            <a href="<?php echo user_url('home/Listbaiviet/').'10'; ?>"> <span>Khoa Học & Công Nghệ</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-lg-3">
                <div class="single_catagory">
                    <div class="thumb">
                        <img src="<?php echo public_url('img/dulich.jpg')?>" style="hight 300px; width: 300px;" alt="">
                    </div>
                    <div class="hover_overlay">
                        <div class="hover_inner">
                            <a href="<?php echo user_url('home/Listbaiviet/').'9'; ?>"> <span>Du Lịch</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-lg-3">
                <div class="single_catagory">
                    <div class="thumb">
                        <img src="<?php echo public_url('img/giaoduc.jpg')?>" style="hight 300px; width: 300px;" alt="">
                    </div>
                    <div class="hover_overlay">
                        <div class="hover_inner">
                            <a href="<?php echo user_url('home/Listbaiviet/').'6'; ?>"> <span>Giáo Dục</span></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-xl-3 col-md-4 col-lg-3">
                <div class="single_catagory">
                    <div class="thumb">
                        <img src="<?php echo public_url('img/giaitri.png')?>" style="hight 300px; width: 300px;" alt="">
                    </div>
                    <div class="hover_overlay">
                        <div class="hover_inner">
                            <a href="<?php echo user_url('home/Listbaiviet/').'3'; ?>"> <span>Giải Trí</span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!--explore -->
<div class="explorer_europe" style="padding-top: 150px">
    <div class="container">
        <?php foreach ($nhomtin as $value) { ?>
            <!--        nhomtin-->
            <div class="explorer_wrap">
                <div class="row align-items-center">
                    <div class="col-xl-6 col-md-4" >
                        <a href=""><h3><?php echo $value->TenNhomTin ?></h3></a>
                    </div>
                </div>
            </div>
            <!--        tin-->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <?php for ($i =0; $i<sizeof($baiviet)%7; $i++) {
                            if($baiviet[$i]->NhomTin == $value->TenNhomTin){?>
                            <div class="col-xl-4 col-lg-4 col-md-6">
                                <div class="single_explorer">
                                    <div class="thumb">
                                        <img src="<?php echo $baiviet[$i]->AnhTrichDan?>" style="height: 300px;width: 400px;" >
                                    </div>
                                    <div class="explorer_bottom d-flex" style="background: whitesmoke">
                                        <div class="explorer_info">
                                            <h3><a href="<?php echo user_url('home/baiviet/').$baiviet[$i]->IDTin?>"><?php echo $baiviet[$i]->TieuDe?></a></h3>
                                            <ul>
                                                <li>
                                                    <?php echo $baiviet[$i]->Ngay?>
                                                </li>
                                            </ul>
                                            <p><?php echo $baiviet[$i]->NoiDungTD?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php }} ?>
                    </div>
                </div>
            </div>


        <?php } ?>

    </div>
</div>
</div>

</div>
</div>
<!--tes-->
<div class="testimonial_area  ">
    <div class="container">
        <div class="row">
            <div class="col-xl-12">
                <div class="section_title mb-60 text-center">
                    <p>Bài Viết</p>
                    <h3>
                        Nổi bật nhất
                    </h3>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-xl-12">
                <div class="testmonial_active owl-carousel">
                    <?php foreach ($baiviet as $value) { ?>
                    <div class="single_carousel">
                        <div class="single_testmonial text-center">
                            <div class="quote">
                                <img src="" alt="">
                            </div>
                            <h3><?php echo $value->TieuDe?></h3>
                            <p style=" padding-left: 50px; padding-right: 50px"><?php echo $value->NoiDungTD?> </p>

                            <div class="testmonial_author">
                                <h3><?php echo $value->NhomTin?></h3>
                                <span><?php echo $value->LuotXem?></span>
                            </div>
                        </div>
                    </div>
                    <?php }?>
                </div>
            </div>
        </div>
    </div>
</div>
