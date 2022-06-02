<?php
foreach ($postdetail as $key => $value) {
    $post_name = $value['post_name'];
    $post_id = $value['post_id'];
}
?>
<section>
    <div id="body">
        <div class="container">
            <?php
            foreach ($postdetail as $key => $row) {
            ?>

                <!--	List Post	-->
                <div class="row">
                    <div id="main" class="col-lg-4 col-md-4 col-sm-4">
                        <div id="handbook">
                            <div id="handbook-head" class="row">
                                <div id="post-img" class="col-lg-4 col-md-4 col-sm-4">
                                    <h1><?php echo $post_name ?></h1>
                                    <img src="<?php echo BASE_URL ?>/public/images/<?php echo $row['post_img']; ?>">
                                </div>
                                <p>
                                    <?php echo $row['post_details'] ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php }
            ?>
        </div>
    </div>
</section>