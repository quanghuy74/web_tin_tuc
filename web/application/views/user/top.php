<header>
    <div class="header-area" >
        <div id="sticky" class="main-header-area sticky">
            <div class="container-fluid ">
                <div class="header_bottom_border">
                    <div class="row align-items-center">
                        <div class="col-xl-3 col-lg-2">
                            <div class="logo" style="padding-left: 200px">
                                <a href="<?php echo user_url('home')?>">
                                    <font color="red"><i class="fa fa-newspaper-o fa-3x"></i></font>
                                </a>
                            </div>
                        </div>
                        <div class="col-xl-6 col-lg-7">
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="<?php echo user_url('home') ?>">Trang Chủ</a></li>
                                        <li><a href="<?php echo user_url('home/tinhot/')?>">Tin Hots</a></li>
                                        <li><a href="<?php echo user_url('home/tinvideo/')?>">Tin Videos</a></li>

                                        <li><a href="#">Danh Mục <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                <?php foreach ($nhomtin as $value) { ?>
                                                <li><a href="<?php echo user_url('home/Listbaiviet/').$value->IDNhomTin; ?>"><?php echo $value->TenNhomTin ?></a></li>
                                                <?php } ?>
                                            </ul>
                                        </li>
                                        <li><a href="<?php echo user_url('home/about') ?>">about</a></li>
                                        <li><a href="<?php echo user_url('home/phanhoi') ?>">Phản Hồi</a></li>

                                    </ul>
                                </nav>
                            </div>
                        </div>
                        <?php if($this->session->userdata('user')){?>
                            <div class="main-menu  d-none d-lg-block" style="padding-left: 150px">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="#">Xin Chào <?php echo $this->session->userdata('user'); ?> <i class="ti-angle-down"></i></a>
                                            <ul class="submenu">
                                                    <li><a href="<?php echo user_url('home/logout')?>"><i class="fa fa-power-off fa-3x"></i> Logout</a></li>
                                                <?php if($this->session->userdata('isadmin')==1){?>
                                                    <li><a href="<?php echo admin_url('home')?>"><i class="fa fa-meanpath fa-3x"></i> Quản lý</a></li>
                                                <?php }?>
                                            </ul>
                                        </li>
                                    </ul>
                                </nav>
                            </div>
                        <?php }else{?>
                        <div class="col-xl-3 col-lg-3 d-none d-lg-block">
                            <div class="Appointment">
                                <div class="book_btn d-none d-lg-block">
                                    <a href="<?php echo admin_url('login')?>">Sign In</a>
                                </div>
                            </div>
                        </div>
                        <?php }?>

                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</header>
