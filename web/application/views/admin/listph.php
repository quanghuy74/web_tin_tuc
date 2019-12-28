<div class="container">
    <div class="col-md-4">
        <h1 class="text-md-center"> User </h1>
        <p><font color="#228b22"><?php echo $this->session->flashdata('mess');?></font></p>
    </div>
    <div class="clearfix"></div>
    <table class="table table-bordered">
        <tbody><tr class="bg-info">
            <td  class="text-md-center" >ID</td>
            <td>password</td>
            <td>is admin</td>
            <td> Edit</td>
            <td>Delete</td>
        </tr>
        <?php foreach ($user as $value) {?>
            <tr>
                <td class="text-md-center"><?php echo $value->username?></td>
                <td  type="password" >***********</td>
                <td><?php echo $value->isadmin ?></td>
                <td><a href="<?php echo admin_url('user/suauser/').$value->username?>">Edit</a> </td>
                <td><a href="<?php echo admin_url('user/xoauser/').$value->username ?>">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
