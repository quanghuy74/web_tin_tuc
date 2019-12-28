<div class="container">
    <h1 class="text-center">Danh sách bài viết
        <p><font color="red"><?php echo $this->session->flashdata('mess');?></font></p>
    </h1>
    <!-- Example row of columns -->
    <div class="row">
        <div class="card-columns">
            <?php foreach ($list as $value): ?>
                <div class="card" style="width: 400px">
                    <img class="card-img-top img-fluid" src="<?php echo $value->AnhTrichDan ?>" style="hight: 300px; width: 400px" >

                    <div class="card-body">
                        <h4 class="card-title "><b><?php echo $value->TieuDe ?></b></h4>
                        <p class="card-subtitle mb-2 text-muted"><?php echo $value->Ngay?></p>
                        <p class="card-text"><?php echo $value->NoiDungTD?></p>
                        <div class="text-center" style="border:2px">
                            <a href="<?php echo admin_url('baiviet/suabv/').$value->IDTin?>" class="btn btn-danger fa fa-pencil"></a>
                            <a href="<?php echo admin_url('baiviet/xoabv/').$value->IDTin?>" class="btn btn-danger fa fa-times"></a>
                        </div>


                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div> <!-- /container -->

