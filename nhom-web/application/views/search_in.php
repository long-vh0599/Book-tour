<?php
foreach ($productsearch as $key => $value) {
    $product_name = $value['prd_name'];
    $product_start = $value['prd_start'];
//     $product_price1 = $value['prd_price'];
//     $product_price2 = $value['prd_price'];
}
?>
<section>
    <div id="body">
        <div class="container">
            <div class="row">
                <div id="anhNen" class="col-lg-4 col-md-4 col-sm-4">
                    <img class="img-fluid" src="<?php echo BASE_URL ?>/public/images/nen.jpg">
                </div>
            </div>
            <div class="row">
                <?php
                include_once('search/search_box.php'); ?>
            </div>
            <div class="row">
                <div id="main" class="col-lg-4 col-md-4 col-sm-4">
                    <div class="product">
                        <div class="products">
                            <?php
                            foreach ($productsearch as $key => $row) {

                            ?>
                                <div class="products-row">

                                    <div class="col-lg-1 col-md-1 col-sm-1 product-item">
                                        <a href="<?php echo BASE_URL ?>/CProduct/ProductDetail/<?php echo $row['prd_id']; ?>"><img src="<?php echo BASE_URL ?>/admin/images/<?php echo $row['prd_image']; ?>"></a>
                                    </div>
                                    <div class="col-lg-3 col-md-3 col-sm-3 product-item ">
                                        <h3><a href="<?php echo BASE_URL ?>/CProduct/ProductDetail/<?php echo $row['prd_id']; ?>"><?php echo $row['prd_name']; ?></a></h3>
                                        <p>Giá: <span><?php echo  number_format($row['prd_price'], 0, '', '.'); ?>đ</span></p>
                                        <h4>Ngày khởi hành: <?php echo $row['prd_date'] ?></h4>
                                        <h4>Số chỗ: <?php echo $row['prd_slot'] ?></h4>
                                    </div>

                                </div>
                            <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--	End Body	-->
</section>