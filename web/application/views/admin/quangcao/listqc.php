<div class="container">
    <div class="col-md-4">
        <h1 class="text-md-center"> User </h1>
        <p><font color="#228b22"><?php echo $this->session->flashdata('mess');?></font></p>
    </div>
    <div class="clearfix"></div>
    <table class="table table-bordered">
        <tbody><tr class="bg-info">
            <td class="text-md-center" >ID</td>
            <td>Ngày bắt đầu</td>
            <td>Ngày kết thúc</td>
            <td> link</td>
            <td>số click</td>
            <td>số tiền/click</td>
            <td>edit</td>
            <td>delete</td>


        </tr>
        <?php foreach ($quangcao as $value) {?>
            <tr>
                <td class="text-md-center"><?php echo $value->IDQC?></td>
                <td class="text-md-center"><?php echo $value->NgayBatDau?></td>
                <td class="text-md-center"><?php echo $value->NgayKetThuc?></td>
                <td class="text-md-center"><?php echo $value->link?></td>
                <td class="text-md-center"><?php echo $value->SoClick?></td>
                <td class="text-md-center"><?php echo $value->sotientrenclick?></td>
                <td><a href="<?php echo admin_url('quangcao/edit/').$value->IDQC?>">Edit</a> </td>
                <td><a href="<?php echo admin_url('quangcao/delete/').$value->IDQC ?>">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>
</div>
