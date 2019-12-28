<form style="padding-left: 10%; padding-right: 10% " method="post" enctype="multipart/form-data">
    <div>
        <h3 class="text-center">Thêm Quảng Cáo<font color="green"><?php echo $this->session->flashdata('mess');?></font></h3>
    </div>
    <div class="form-group">
        <label for="NgayBatDau">Ngày bắt đầu<font color="red" ><?php echo form_error('NgayBatDau')?> </font></label>
        <input type="text" class="form-control" id="NgayBatDau" name="NgayBatDau" value="<?php echo $quangcao[0]->NgayBatDau?>">
    </div>
    <div class="form-group">
        <label for="NgayKetThuc">Ngày kết thúc<font color="red" ><?php echo form_error('NgayKetThuc')?> </font></label>
        <input type="text" class="form-control" id="NgayKetThuc" name="NgayKetThuc" value="<?php echo $quangcao[0]->NgayKetThuc?>">
    </div>
    <div class="form-group">
        <label for="sotien/click">Số tiền trên 1 lần click<font color="red" ><?php echo form_error('sotien/click')?> </font></label>
        <input type="text" class="form-control" id="sotien/click" name="sotien/click" value="<?php echo $quangcao[0]->sotientrenclick?>">
    </div>
    <div class="form-group">
        <label for="link">Link quảng cáo <font color="red" ><?php echo form_error('link')?> </font></label>
        <input type="text" class="form-control" id="link" name="link" value="<?php echo $quangcao[0]->link?>" >
    </div>
    <label for="khachhang">Quảng cáo của khách hàng:<font color="red" ><?php echo form_error('IDKH')?> </font></label>
    <div>
        <select class="form-control form-control-lg" name="IDKH">
            <option value="">lựa chọn khách hàng</option>
            <?php foreach ($khachhang as $value){
                if($quangcao[0]->IDKH == $value->ID){?>
                    <option selected='selected' value="<?php echo $value->ID?>"><?php echo $value->Ten ?></option>
                <?php } else {?>
                    <option value="<?php echo $value->ID?>"><?php echo $value->Ten ?></option>
                <?php }} ?>

        </select>
    </div>
    <div class="text-md-center" style="padding-top: 80px">
        <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
    </div>
</form>


