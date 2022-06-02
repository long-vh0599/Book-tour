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
                    <div class="products">
                        <h3>Tour đang được khuyến mãi</h3>
                        <?php
                        $i = 1;
                        foreach ($product_sale as $key => $row) {
                            if ($i == 1) {
                        ?>
                                <div class="product-list">
                                <?php
                            }
                                ?>
                                <div class="product-item card text-center">
                                    <a href="<?php echo BASE_URL ?>/CProduct/ProductDetail/<?php echo $row['prd_id']; ?>"><img src="<?php echo BASE_URL ?>/admin/images/<?php echo $row['prd_image']; ?>"></a>
                                    <h4><a href="<?php echo BASE_URL ?>/CProduct/ProductDetail/<?php echo $row['prd_id']; ?>"><?php echo $row['prd_name']; ?></a></h4>
                                    <p>Giá: <span><?php echo  number_format($row['prd_price'], 0, '', '.'); ?>đ</span></p>
                                    <p>Sale: <span><?php echo  number_format(50, 0, '', '.'); ?>%</span></p>
                                </div>
                                <?php
                                if ($i == 3) {
                                ?>
                                </div>
                        <?php
                                    $i = 1;
                                } else {
                                    $i++;
                                }
                            }
                        ?>
                    </div>
                    <!--	End Sale Product	-->
                    <div class="products">
                        <h3>Điểm đến ưa thích</h3>
                        <?php
                        $i = 1;
                        foreach ($product_farv as $key => $row) {
                            if ($i == 1) {
                        ?>
                                <div class="product-list">
                                <?php
                            }
                                ?>
                                <div class="product-item card text-center">
                                    <a href="<?php echo BASE_URL ?>/CProduct/ProductDetail/<?php echo $row['prd_id']; ?>"><img src="<?php echo BASE_URL ?>/admin/images/<?php echo $row['prd_image']; ?>"></a>
                                    <h4><a href="<?php echo BASE_URL ?>/CProduct/ProductDetail/<?php echo $row['prd_id']; ?>"><?php echo $row['prd_name']; ?></a></h4>
                                    <p>Giá: <span><?php echo  number_format($row['prd_price'], 0, '', '.'); ?>đ</span></p>
                                </div>
                                <?php
                                if ($i == 3) {
                                ?>
                                </div>
                        <?php
                                    $i = 1;
                                } else {
                                    $i++;
                                }
                            }
                        ?>
                    </div>
                    <!--	End Favorite Product	-->
                    
                </div>
            </div>
        </div>
    </div>
    <!--	End Body	-->
</section>
