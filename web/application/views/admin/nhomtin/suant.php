<div class="container">
    <div class="col-md-4 add-dm">
        <h1 class="text-md-center"> Sửa nhóm tin</h1>
        <font color="#228b22"><p><?php echo $this->session->flashdata('mess'); ?></p></font>
    </div>
    <div class="clearfix"></div>
    <form action="" method="post">
        <div class="form">
            <table class="table">
                <tbody>
                <tr>
                    <td><p>Tiêu đề nhóm tin  <font color="red" ><?php echo form_error('nhomtin')?> </font></p></td>
                    <td><input name="nhomtin" class="form-control" type="text" value="<?php echo $row[0]['TenNhomTin'] ?>"></td>
                </tr>
                </tbody>
            </table>
        </div>
        <div class="text-md-center">
            <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
        </div>
    </form>
</div>
