<form style="padding-left: 10%; padding-right: 10% " method="post" enctype="multipart/form-data">
    <div>
        <h3 class="text-center">Thêm bài viết <font color="green"><?php echo $this->session->flashdata('mess');?></font></h3>
    </div>
    <div class="form-group">
        <label for="tieude">Tiêu đề <font color="red" ></font><?php echo form_error('tieude')?> </font></label>
        <input type="text" class="form-control" id="tieude" name="tieude" >
    </div>
    <div class="form-group">
        <label for="anhtrichdan">Ảnh trích dẫn <font color="red" ></font><?php echo form_error('anhtrichdan')?> </font></label>
        <input type="file" class="form-control-file" id="anhtrichdan" name="anhtrichdan">
    </div>
    <div class="form-group">
        <label for="noidungtd">Trích dẫn<font color="red"> <?php echo form_error('noidungtd')?> </font></label>
        <input type="text" class="form-control" id="noidungtd" name="noidungtd">
    </div>
    <div>
        <label for="nhomtin"><font color="red" ></font><?php echo form_error('nhomtin')?> </font></label>
        <select class="form-control form-control-lg" name="nhomtin">
            <option value="">lựa chọn nhóm tin</option>
            <?php foreach ($nhomtin as $value){ ?>
                <option value="<?php echo $value->TenNhomTin?>"><?php echo $value->TenNhomTin ?></option>
            <?php } ?>

        </select>
    </div>
    <div style="padding-top: 30px">
        <label for="noidung">Nội dung<font color="red"> <?php echo form_error('noidung')?> </font></label>
        <textarea name="noidung"></textarea>
        <script>
            CKEDITOR.replace('noidung');
        </script>
    </div>
    <div class="text-md-center" style="padding-top: 10px">
        <button type="submit" class="btn btn-outline-secondary ">Save</button>
    </div>
</form>