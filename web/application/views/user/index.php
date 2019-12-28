<!doctype html>
<html lang="en">
<?php $this->load->view('user/head') ?>
<body background="http://alllayedout.com/Backgrounds/Paper_35.jpg">

<?php $this->load->view($temp) ?>
<?php $this->load->view('user/top') ?>
<div style="text-align:right; position:absolute; overflow:hidden; top: 210px; left: 100px;">
    <div id="floating_banner_left_content">
        <a href="#" target="_blank" style="padding-top: 100px"><img src="<?php echo base_url('image/quangcao1.gif');?>" style="width:200px"/></a><br />
    </div>
</div>
<div style="text-align:left; position:absolute; overflow:hidden; top: 210px; right: 100px;">
    <div id="floating_banner_right_content"  >
        <a href="#" target="_blank" style="padding-top: 100px"><img src="<?php echo base_url('image/quangcao2.gif');?>" style="width:200px;"/></a><br />
    </div>
</div>
</body>
</html>