<!doctype html>
<?php include 'permssion.php'?>
<html lang="en">
<head>
    <?php $this->load->view('admin/head') ?>
</head>

<div id="top">
    <?php $this->load->view('admin/top') ?>
</div>

<body style="padding-top: 60px">
<div class="container-fluid">
    <div class="row">
            <div class="col-md-2" style="display: flex;" >
                <?php $this->load->view('admin/left') ?>
            </div>
            <main role="main" class="col-md-10 ml-sm-auto px-4" style="padding-left: 100px; padding-top: 100px;padding-right: 300px;">
                <div class="col-md-10">
                    <?php $this->load->view($temp) ?>
                </div>
            </main>
    </div>
</div>
</body>
</html>