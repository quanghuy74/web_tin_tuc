<form style="padding-left: 10%; padding-right: 10% " method="post" enctype="multipart/form-data">
    <div>
        <h3 class="text-center">Sửa User<font color="green"><?php echo $this->session->flashdata('mess');?></font></h3>
    </div>
    <div class="form-group">
        <label for="username">Tên user <font color="red" ><?php echo form_error('username')?> </font></label>
        <input type="text" class="form-control" id="username" name="username"  value="<?php echo $user[0]['username']?>">
    </div>
    <div class="form-group">
        <label for="password">password<font color="red"> <?php echo form_error('password')?> </font></label>
        <input type="text" class="form-control" id="password" name="password" value="<?php echo $user[0]['password']?>">
    </div>
    <div>
        <label for="isadmin">is admin<font color="red" ></font><?php echo form_error('isadmin')?> </font></label>
        <select class="form-control form-control-lg" name="isadmin">
            <option selected=selected value="<?php echo $user[0]['isadmin']?>">lựa chọn loai user</option>
            <option value="1">admin</option>
            <option value="0">user</option>
        </select>
    </div>
    <div class="text-md-center" style="padding-top: 10px">
        <input type="submit" name="ok" value="saves" class="btn btn-primary btn-block">
    </div>
</form>