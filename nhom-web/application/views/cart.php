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
                    <!--	Cart	-->
                    <div id="my-cart">
                        <div class="row">
                            <div class="cart-nav-item col-lg-2 col-md-2 col-sm-4">Thông tin sản phẩm</div>
                            <div class="cart-nav-item col-lg-1 col-md-1 col-sm-4">Tùy chọn</div>
                            <div class="cart-nav-item col-lg-1 col-md-1 col-sm-4">Giá</div>
                        </div>
                        <form action='./CCart/' method="post">
                            <?php
                            if (isset($_SESSION['cart'])) {
                                $total = 0;
                                foreach ($_SESSION['cart'] as $key => $row) {
                                    $subtotal = $row['prd_price'];
                                    $total += $subtotal;
                            ?>
                                    <div class="cart-item row">
                                        <div class="cart-thumb col-lg-2 col-md-2 col-sm-4">
                                            <img src="<?php echo BASE_URL ?>/admin/images/<?php echo $row['prd_image']; ?>">
                                            <h4><?php echo $row['prd_name']; ?></h4>
                                        </div>

                                        <div class="cart-quantity col-lg-1 col-md-1 col-sm-4">
                                            <input type="number" id="quantity" class="form-control form-blue quantity" name="quantity[<?php echo $row['prd_id']; ?>]" value="1" min="1" max="<?php echo $row['prd_slot']; ?>">
                                        </div>
                                        <div class="cart-price col-lg-1 col-md-1 col-sm-4">
                                            <b><?php echo   number_format($subtotal, 0, '', '.'); ?>đ</b><a href="<?php echo BASE_URL ?>/CCart/DelCart/<?php echo $row['prd_id']?>">Xóa</a>
                                        </div>
                                    </div>
                                <?php
                                }
                                ?>
                        </form>
                        <div class="row">
                            <div class="cart-thumb col-lg-2 col-md-2 col-sm-4">
                                <button id="update-cart" class="btn btn-success" type="submit" name="sbm">Cập nhật</button>
                            </div>
                            <div class="cart-total col-lg-1 col-md-1 col-sm-4"><b>Tổng cộng:</b></div>
                            <div class="cart-price col-lg-1 col-md-1 col-sm-4">
                                <b><?php echo   number_format($total, 0, '', '.'); ?>đ</b></div>
                        </div>
                    <?php
                            } else {
                    ?>
                        <div class="alert alert-danger" style="margin-top:15px;">Hiện bạn chưa đặt tour nào !</div>
                    <?php
                            }
                    ?>

                    </div>
                    <!--	End Cart	-->


                    <!--	Customer Info	-->
                    <div id="customer">
                        <form name="FormBook" id="frm" method="POST" action="<?php echo BASE_URL ?>/CCart/Book">
                            <div class="row">

                                <div id="customer-name" class="col-lg-4 col-md-4 col-sm-4">
                                    <input placeholder="Họ và tên (bắt buộc)" type="text" name="name" class="form-control" required>
                                </div>
                                <div id="customer-phone" class="col-lg-4 col-md-4 col-sm-4">
                                    <input placeholder="Số điện thoại (bắt buộc)" type="number" name="phone" class="form-control" required>
                                </div>
                                <div id="customer-mail" class="col-lg-4 col-md-4 col-sm-4">
                                    <input placeholder="Email (bắt buộc)" type="email" name="email" class="form-control" required>
                                </div>
                                <div id="customer-add" class="col-lg-4 col-md-4 col-sm-4">
                                    <input placeholder="Địa chỉ nhà riêng hoặc cơ quan (bắt buộc)" type="text" name="addr" class="form-control" required>
                                </div>

                            </div>
                            <div class="row">
                                <div class="by-now col-lg-4 col-md-4 col-sm-4">
                                    <input type="submit" name="book" value="Gửi đơn hàng">
                                </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

