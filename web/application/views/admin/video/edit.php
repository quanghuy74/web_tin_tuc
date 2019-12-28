<form style="padding-left: 10%; padding-right: 10% " method="post" enctype="multipart/form-data">
    <div>
        <h1 class="text-center">Sửa Video<font color="green"><?php echo $this->session->flashdata('mess');?></font></h1>
    </div>
    <div class="form-group">
        <label for="TieuDe">Tiêu Đề <font color="red" ><?php echo form_error('TieuDe')?> </font></label>
        <input type="text" class="form-control" id="username" name="TieuDe" value="<?php echo $video[0]->TieuDe?>">
    </div>
    <div class="form-group">
        <label for="Link">Link Video<font color="red"> <?php echo form_error('Link')?> </font></label>
        <input type="text" class="form-control" id="password" name="Link" value="<?php echo $video[0]->Link?>">
    </div>
    <div>
        <label for="nhomtin"><font color="red" ></font><?php echo form_error('nhomtin')?> </font></label>
        <select class="form-control form-control-lg" name="nhomtin">
            <option value="">lựa chọn nhóm tin</option>
            <?php foreach ($nhomtin as $value){
                if($video[0]->NhomTin == $value->TenNhomTin){?>
                    <option selected='selected' value="<?php echo $value->TenNhomTin?>"><?php echo $value->TenNhomTin ?></option>
                <?php } else {?>
                    <option value="<?php echo $value->TenNhomTin?>"><?php echo $value->TenNhomTin ?></option>
                <?php }} ?>
        </select>
    </div>
    <div class="text-md-center" style="padding-top: 50px">
        <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
    </div>
</form>

