<html lang="en">
<?php include 'header.php'?>
<body>
<main role="main">

    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1 class="display-3">Hello, world!</h1>
            <p>This is a template for a simple marketing or informational website. It includes a large callout called a
                jumbotron and three supporting pieces of content. Use it as a starting point to create something more
                unique.</p>
            <p><a class="btn btn-primary btn-lg" href="#" role="button">Learn more »</a></p>
        </div>
    </div>

    <div class="container">
        <!-- Example row of columns -->
        <div class="row">

            <div class="card-columns">
                <?php foreach ($result as $value): ?>
                <div class="card"  method="post" enctype="multipart/form-data" action="<?=  base_url() ?>index.php/First_controller/getTin/">
                    <img class="card-img-top img-fluid" src="<?= $value['AnhTrichDan']?>" alt="">
                    <div class="card-block">
                        <h4 class="card-title"><?= $value['TieuDe']?></h4>
                        <p class="card-text"><?= $value['NoiDungTD']?></p>
                        <a href="<?=  base_url() ?>index.php/First_controller/getTin/<?= $value['IDTin']?>" class="btn">Go somewhere</a>
                    </div>
                </div>
                <?php endforeach ?>

            </div>

        </div>

        <hr>

    </div> <!-- /container -->

</main>

<footer class="container">
    <p>ma nguon mo</p>
</footer>

<div id="eJOY__extension_root" style="all: unset;"></div>
</body>
</html>