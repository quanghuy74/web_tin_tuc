<form style="padding-left: 10%; padding-right: 10% " method="post" enctype="multipart/form-data">
    <div>
        <h3 class="text-center">Sửa thông tin khách hàng<font color="green"><?php echo $this->session->flashdata('mess');?></font></h3>
    </div>
    <div class="form-group">
        <label for="Ten">Tên khách hàng <font color="red" ><?php echo form_error('Ten')?> </font></label>
        <input type="text" class="form-control" id="Ten" name="Ten" value="<?php echo $khachhang[0]->Ten?>">
    </div>
    <div class="form-group">
        <label for="sdt">Số điện thoại<font color="red"> <?php echo form_error('sdt')?> </font></label>
        <input type="text" class="form-control" id="std" name="sdt" value="<?php echo $khachhang[0]->sdt?>">
    </div>
    <div class="form-group">
        <label for="email">Email<font color="red"> <?php echo form_error('email')?> </font></label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $khachhang[0]->email?>">
    </div>

    <div class="text-md-center" style="padding-top: 10px">
        <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
    </div>
</form>

