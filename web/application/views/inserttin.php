<!DOCTYPE html>
<html>
<?php include "header.php"; ?>
<body style="padding-top: 100px; ">
    <h3 class="text-center display-3">Thêm tin mới</h3>
    <form style="padding-left: 10%; padding-right: 10% " method="post" enctype="multipart/form-data" action="<?=  base_url() ?>index.php/First_controller/addTin/">
        <div class="form-group">
            <label for="tieude">Tiêu đề</label>
            <input type="text" class="form-control" id="tieude" name="tieude">
        </div>
        <div class="form-group">
            <label for="anhtrichdan">Ảnh trích dẫn</label>
            <input type="file" class="form-control-file" id="anhtrichdan" name="anhtrichdan">
        </div>
        <div class="form-group">
            <label for="noidungtd">Trích dẫn</label>
            <input type="text" class="form-control" id="noidungtd" name="noidungtd">
        </div>
        <div>
            <label for="nhomtin">Nhóm tin</label>
            <select class="form-control form-control-lg" name="nhomtin">
                <?php foreach ($result as $value): ?>
                    <option><?= $value['TenNhomTin']?></option>
                <?php endforeach ?>

            </select>
        </div>
        <div style="padding-top: 30px">
            <label for="noidung">Nội dung</label>
            <textarea name="noidung"></textarea>
            <script>
                CKEDITOR.replace('noidung');
            </script>
        </div>
        <div style="padding-left: 600px; padding-top: 10px">
            <button type="submit" class="btn btn-outline-secondary ">Submit</button>
        </div>
    </form>
</body>
</html>
