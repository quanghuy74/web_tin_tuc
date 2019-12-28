<div class="explorer_europe" style="padding-top: 200px">
    <div class="container">
        <div class="explorer_wrap">
            <div class="row text-center border-bottom">
                    <a href=""><h3><?php echo $nt[0]['TenNhomTin'] ?></h3></a>
            </div>
        </div>
        <!--        tin-->
            <div class="tab-content" id="nav-tabContent">
                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row">
                        <?php foreach ($baiviet as $value ) {
                        if($nt[0]['TenNhomTin'] == $value->NhomTin){?>
                                <div class="col-xl-4 col-lg-4 col-md-6" >
                                    <div class="single_explorer">
                                        <div class="thumb">
                                            <img src="<?php echo $value->AnhTrichDan?>" style="height: 300px;width: 400px;" >
                                        </div>
                                        <div class="explorer_bottom d-flex"style="background: white">
                                            <div class="explorer_info">
                                                <h3><a href="<?php echo user_url('home/baiviet/').$value->IDTin?>"><?php echo $value->TieuDe?></a></h3>
                                                <ul>
                                                    <li>
                                                        <?php echo $value->Ngay?>
                                                    </li>
                                                </ul>
                                                <p><?php echo $value->NoiDungTD?></p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php }} ?>
                    </div>
                </div>
            </div>
    </div>
</div>