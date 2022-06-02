<section>
    <!--	Body	-->
    <div id="body">
        <div class="container">
            <div class="row">
                <div id="anhNen" class="col-lg-4 col-md-4 col-sm-4">
                    <img class="img-fluid" src="<?php echo BASE_URL ?>/public/images/nen.jpg">
                </div>
            </div>
            <div class="row">
                <div id="main" class="col-lg-4 col-md-4 col-sm-4">
                    <div class="handbook">
                        <h3>Những điều bạn cần biết khi đi du lịch</h3>
                    </div>
                    <?php
                    foreach ($posts as $key => $row) {

                    ?>
                        <div class="handbook-row">

                            <div class="col-lg-1 col-md-1 col-sm-1 handbook-item">
                                <a href="<?php echo BASE_URL ?>/CPost/HandBookDetail/<?php echo $row['post_id'] ?>"><img src="<?php echo BASE_URL ?>/public/images/<?php echo $row['post_img']; ?>"></a>
                            </div>
                            <div class="col-lg-3 col-md-3 col-sm-3 handbook-item ">
                                <h3><a href="<?php echo BASE_URL ?>/CPost/HandBookDetail/<?php echo $row['post_id'] ?>"><?php echo $row['post_name']; ?></a></h3>
                                <h4><?php echo $row['post_details']; ?></h4>
                            </div>
                        </div>
                    <?php
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <!--	End Body	-->
</section>