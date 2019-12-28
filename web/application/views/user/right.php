
<div class="col-lg-4">
    <div class="blog_right_sidebar">
        <aside class="single_sidebar_widget search_widget">
            <form action="#">
                <div class="form-group">
                    <div class="input-group mb-3">
                        <input type="text" class="form-control" placeholder='Search Keyword'
                               onfocus="this.placeholder = ''" onblur="this.placeholder = 'Search Keyword'">
                        <div class="input-group-append">
                            <button class="btn" type="button"><i class="ti-search"></i></button>
                        </div>
                    </div>
                </div>
                <button class="button rounded-0 primary-bg text-white w-100 btn_1 boxed-btn"
                        type="submit">Search</button>
            </form>
        </aside>
        <aside class="single_sidebar_widget post_category_widget">
            <h4 class="widget_title">Category</h4>
            <ul class="list cat-list">
                <?php foreach ($nhomtin as $value) { ?>
                    <li>
                        <a href="<?php echo user_url('home/Listbaiviet/').$value->IDNhomTin; ?>">
                            <p><?php echo $value->TenNhomTin ?></p>
                        </a>
                    </li>
                <?php } ?>
            </ul>
        </aside>
        <aside class="single_sidebar_widget popular_post_widget">
            <h3 class="widget_title">Recent Post</h3>
            <?php foreach ($baiviet as $value) { ?>

                <div class="media post_item">
                    <img src="<?php echo $value->AnhTrichDan?>" style="height: 80px; width: 80px;" alt="post">
                    <div class="media-body">
                        <a href="<?php echo user_url('home/baiviet/').$value->IDTin?> ">
                            <h3><?php echo $value->TieuDe?></h3>
                        </a>
                        <p><?php echo $value->Ngay?></p>
                    </div>
                </div>
            <?php }?>
        </aside>
    </div>
</div>