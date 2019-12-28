<?php include 'header.php' ?>

<div class="container" style="padding-top: 100px;">

    <div class="centered flex-shrink-0" style="padding-right: 300px; border: 10px">

            <?php foreach ($result as $value): ?>
                <h1 class="mt-5"><?= $value['TieuDe']?></h1>
                <p><?= $value['Ngay']?></p>
                <p><?= $value['NoiDung']?></p>
            <?php endforeach ?>

    </div>
</div>
