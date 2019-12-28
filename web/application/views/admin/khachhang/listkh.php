<div class="container">
    <div class="col-md-4">
        <h1 class="text-md-center"> Khách hàng </h1>
        <p><font color="red"><?php echo $this->session->flashdata('mess');?></font></p>
    </div>
    <div class="clearfix"></div>
    <table class="table table-bordered">
        <tbody><tr class="bg-info">
            <td  class="text-md-center" >ID</td>
            <td>Tên khách hàng</td>
            <td>Email</td>
            <td>STD</td>
            <td> Edit</td>
            <td>Delete</td>
        </tr>
        <?php foreach ($khachhang as $value) {?>
            <tr>
                <td><?php echo $value->ID ?></td>
                <td class="text-md-center"><?php echo $value->Ten?></td>
                <td><?php echo $value->email ?></td>
                <td><?php echo $value->sdt ?></td>
                <td><a href="<?php echo admin_url('khachhang/edit/').$value->ID?>">Edit</a> </td>
                <td><a href="<?php echo admin_url('khachhang/delete/').$value->ID ?>">Delete</a></td>
            </tr>
        <?php } ?>
        </tbody>
    </table>

</div>
