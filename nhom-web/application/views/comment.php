        <!--	Comment	-->
        <div id="comment" class="row">
            <div class="col-lg-4 col-md-4 col-sm-4">
                <h3>Bình luận sản phẩm</h3>
                <form method="post" >
                    <div class="">
                        <label>Tên:</label>
                        <input name="comm_name" required type="text" class="form-control">
                    </div>
                    <div class="">
                        <label>Email:</label>
                        <input name="comm_mail" required type="email" class="form-control">
                    </div>
                    <div class="">
                        <label>Nội dung:</label>
                        <textarea name="comm_detail" required rows="8" class="form-control"></textarea>
                    </div>
                    <button type="submit" name="sbm" class="btn-primary">
                        <p>Gửi</p>
                    </button>
                </form>
            </div>
        </div>
        <!--	End Comment	-->

        <!--	Comments List	-->
        <div id="comments-list" class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <?php
                foreach ($comment as $key => $row) {
                ?>
                    <div class="comment-item">
                        <ul>
                            <li><b><?php echo $row['comm_name']; ?></b></li>
                            <li><p><?php echo $row['comm_date']; ?></p></li>
                            <li>
                                <p><?php echo $row['comm_details']; ?></p>
                            </li>
                        </ul>
                    </div>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
</div>

<!--	End Comments List	-->
</section>