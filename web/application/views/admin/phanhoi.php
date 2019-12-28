<div class="container">
    <div class="col-md-4">
        <h1 class="text-md-center"> User </h1>
        <p><font color="#228b22"><?php echo $this->session->flashdata('mess');?></font></p>
    </div>
    <div class="clearfix"></div>
    <table class="table table-bordered">
        <tbody><tr class="bg-info">
            <td  class="text-md-center" >ID</td>
            <td>user name</td>
            <td>Tiêu đề</td>
            <td>Nội dung</td>
            <td>Ngày phản hồi</td>
            <td>Delete</td>
        </tr>
        <?php foreach ($phanhoi as $value) {?>
            <tr>
                <td  type="text" ><?php echo $value->ID?></td>

                <td class="text-md-center"><?php echo $value->username?></td>
                <td  type="text" ><?php echo $value->tieude?></td>
                <td  type="text" ><?php echo $value->NoiDung?></td>
                <td><?php echo $value->Ngay ?></td>
                <td><a href="<?php echo admin_url('home/delete/').$value->ID ?>">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
