<?php
foreach ($productdetail as $key => $value) {
    $product_name = $value['prd_name'];
    $product_id = $value['prd_id'];
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
                <div id="main" class="col-lg-4 col-md-4 col-sm-4">
                    <?php
                    foreach ($productdetail as $key => $row) {
                    ?>
                        <form action="<?php echo BASE_URL ?>/CCart/AddCart" method="POST">
                            <input type="hidden" value="<?php echo $row['prd_id'] ?>" name="prd_id">
                            <input type="hidden" value="<?php echo $row['prd_name'] ?>" name="prd_name">
                            <input type="hidden" value="<?php echo $row['prd_image'] ?>" name="prd_image">
                            <input type="hidden" value="<?php echo $row['prd_price'] ?>" name="prd_price">
                            <input type="hidden" value="1" name="prd_quantity">
                            <!--	List Product	-->
                            <div id="product">
                                <div id="product-head" class="row">
                                    <div id="product-img" class="col-lg-2 col-md-2 col-sm-4">
                                        <img src="<?php echo BASE_URL ?>/admin/images/<?php echo $row['prd_image']; ?>">
                                    </div>
                                    <div id="product-details" class="col-lg-2 col-md-2 col-sm-4">
                                        <h1><?php echo $row['prd_name']; ?></h1>
                                        <ul>
                                            <li><span>Khởi hành:</span> <?php echo $row['prd_date']; ?></li>
                                            <li><span>Thời gian:</span> <?php echo $row['prd_time']; ?> Ngày</li>
                                            <li><span>Nơi khởi hành:</span> <?php echo $row['prd_start']; ?></li>
                                            <li id="price">Chi Phí</li>
                                            <li id="price-number"><?php echo  number_format($row['prd_price'], 0, '', '.'); ?>đ</li>
                                            <li><span>Số chỗ Max:</span> <?php echo $row['prd_slot']; ?></li>
                                        </ul>
                                        <div id="add-cart">
                                            <input type="submit" name="addcart" value="Book Now">
                                        </div>
                                    </div>
                                </div>
                                <div id="product-body" class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-4">
                                        <h3>Đánh giá về chuyến đi <?php echo $row['prd_name']; ?></h3>
                                        <p><?php echo $row['prd_details']; ?></p>
                                    </div>
                                </div>
                            </div>
                            <!--	End Product	-->

                        </form>
                    <?php
                    }
                    ?>
                </div>
            </div>