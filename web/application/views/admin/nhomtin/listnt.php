    <div class="container">
        <div class="col-md-4">
            <h1 class="text-md-center"> Nhóm tin</h1>
            <p><font color="#228b22"><?php echo $this->session->flashdata('mess');?></font></p>
        </div>
        <div class="clearfix"></div>
        <table class="table table-bordered">
            <tbody><tr class="bg-info">
                <td  class="text-md-center" >ID</td>
                <td>Tên nhóm tin</td>
                <td> Edit</td>
                <td>Delete</td>
            </tr>
            <?php foreach ($nhomtin as $value) {?>
                <tr>
                    <td class="text-md-center"><?php echo $value->IDNhomTin?></td>
                    <td><?php echo $value->TenNhomTin ?></td>
                    <td><a href="<?php echo admin_url('nhomtin/suant/').$value->IDNhomTin?>">Edit</a> </td>
                    <td><a href="<?php echo admin_url('nhomtin/xoant/').$value->IDNhomTin ?>">Delete</a></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>

    </div>
