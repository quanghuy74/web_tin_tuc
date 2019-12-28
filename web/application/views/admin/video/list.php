<div class="container">
    <h1 class="text-center">Danh sách video
        <font color="#228b22"><p><?php echo $this->session->flashdata('mess');?></p></font>
    </h1>
    <!-- Example row of columns -->
    <div class="row">
        <div class="card-columns">
            <?php foreach ($video as $value): ?>
                <div class="card" style="width: 400px">
                    <iframe width=400 height="" src="https://www.youtube.com/embed/-NCgqTPuci4" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                    <div class="card-body">
                        <h4 class="card-title "><b><?php echo $value->TieuDe ?></b></h4>
                        <p class="card-subtitle mb-2 text-muted"><?php echo $value->Ngay?></p>
                        <div class="text-center" style="border:2px">
                            <a href="<?php echo admin_url('video/edit/').$value->IDVideo?>" class="btn btn-danger fa fa-pencil"></a>
                            <a href="<?php echo admin_url('video/delete/').$value->IDVideo?>" class="btn btn-danger fa fa-times"></a>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
        </div>
    </div>
</div> <!-- /container -->

