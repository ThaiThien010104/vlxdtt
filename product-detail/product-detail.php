<!-- pages-title-start -->
<?php if ($data != null) { ?>
    <div class="pages-title section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="pages-title-text text-center">
                        <h2><?= $data['TenSP'] ?></h2>
                        <ul class="text-left">
                            <li><a href="?act=home">Trang chủ</a></li>
                            <li><span> // </span><a href="?act=shop">Cửa Hàng</a></li>
                            <li><span> // </span><?= $data['TenSP'] ?></li>
                            
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- pages-title-end -->
    <!-- product-details-section-start -->
    <div class="product-details pages section-padding-top">
        <div class="container">
            <div class="row">
                <div class="single-list-view">
                    <div class="col-xs-12 col-sm-5 col-md-4">
                        <div class="quick-image">
                            <div class="single-quick-image text-center">
                                <div class="list-img">
                                    <div class="product-f tab-content">
                                        <?php if ($data['HinhAnh2'] !=  null) { ?>
                                            <div class="simpleLens-container tab-pane fade in" id="sin-1">
                                                <a class="simpleLens-image" data-lens-image="public/<?= $data['HinhAnh2'] ?>" href="#"><img src="public/<?= $data['HinhAnh2'] ?>" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data['HinhAnh1'] != null) { ?>
                                            <div class="simpleLens-container tab-pane active fade in" id="sin-2">
                                                <a class="simpleLens-image" data-lens-image="public/<?= $data['HinhAnh1'] ?>" href="#"><img src="public/<?= $data['HinhAnh1'] ?>" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                        <?php } ?>
                                        <?php if ($data['HinhAnh3'] != null) { ?>
                                            <div class="simpleLens-container tab-pane fade in" id="sin-3">
                                                <a class="simpleLens-image" data-lens-image="public/<?= $data['HinhAnh3'] ?>" href="#"><img src="public/<?= $data['HinhAnh3'] ?>" alt="" class="simpleLens-big-image"></a>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="quick-thumb">
                                <ul class="product-slider">
                                    <?php if ($data['HinhAnh2'] != null) { ?>
                                        <li class="active"><a data-toggle="tab" href="#sin-1"> <img src="public/<?= $data['HinhAnh2'] ?>" alt="quick view" /> </a></li>
                                    <?php } ?>
                                    <?php if ($data['HinhAnh1'] != null) { ?>
                                        <li><a data-toggle="tab" href="#sin-2"> <img src="public/<?= $data['HinhAnh1'] ?>" alt="small image" /> </a></li>
                                    <?php } ?>
                                    <?php if ($data['HinhAnh3'] != null) { ?>
                                        <li><a data-toggle="tab" href="#sin-3"> <img src="public/<?= $data['HinhAnh3'] ?>" alt="small image" /> </a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-7 col-md-8">
                        <div class="quick-right">
                            <div class="list-text">
                                <h3><?= $data['TenSP'] ?></h3>
                                <div class="ratting floatright">
                                    <p>( 27 Rating )</p>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star"></i>
                                    <i class="mdi mdi-star-half"></i>
                                    <i class="mdi mdi-star-outline"></i>
                                </div>
                                <h5><?=number_format($data['DonGia'])?> VNĐ</h5>
                                <p style="font-size: 20px;"><strong>Mô tả :</strong></p>
                                <?php if ($data['MaDM'] ) { ?>
                                    <p><?= $data['MoTa'] ?></p>
                                <?php }?>
                                <div class="list-btn">
                                    <a href="?act=cart&xuli=add&id=<?=$data['MaSP']?>">Mua Ngay</a>
                                    <?php if ($data['MaDM'] ) { ?>
                                        <a href="?act=cart&xuli=add&id=<?=$data['MaSP']?>">Thêm vào giỏ hàng</a>
                                    
                                    <?php }?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- single-product item end -->
            <!-- reviews area start -->
            <div class="row">
                <div class="col-xs-12">
                    <div class="reviews padding60 margin-top">
                        <ul class="reviews-tab clearfix" id="info">
                            <?php if ($data['MaDM'] ) { ?>
                                <li class="active"><a data-toggle="tab" href="#moreinfo">Đặc điểm</a></li>
                            <?php } ?>
                            <li><a data-toggle="tab" href="#reviews">Đánh giá SP</a></li>
                        </ul>
                        <div class="tab-content">
                            <?php if ($data['MaDM'] ) { ?>
                                <div class="info-reviews moreinfo tab-pane fade in active" id="moreinfo">
                                    <div class="tb">
                                        <h5>Thông tin chi tiết sản phẩm:</h5>
                                        <ul>
                                            <li>
                                                <span>Tên Sản phẩm  :</span>
                                                <div><?= $data['Tensanpham'] ?></div>
                                            </li>
                                            <li>
                                                <span>Tình trạng  :</span>
                                                <div><?= $data['Tinhtrang'] ?></div>
                                            </li>
                                            <li>
                                                <span>Kích thước  :</span>
                                                <div><?= $data['Kichthuoc'] ?></div>
                                            </li>
                                            <li>
                                                <span>Trọng Lượng  :</span>
                                                <div><?= $data['Trongluong'] ?></div>
                                            </li>
                                            <li>
                                                <span>Chất Liệu  :</span>
                                                <div><?= $data['Chatlieu'] ?></div>
                                            </li>
                                            <li>
                                                <span>Số Lượng  :</span>
                                                <div><?= $data['Soluongg'] ?></div>
                                            </li>
                                            <li>
                                                <span>Màu Sắc  :</span>
                                                <div><?= $data['Mausac'] ?></div>
                                            </li>
                                            <li>
                                                <span>Đơn vị tính  :</span>
                                                <div><?= $data['Donvitinh'] ?></div>
                                            </li>
                                            <li>
                                                <span>Nơi sản xuất  :</span>
                                                <div><?= $data['Noisanxuat'] ?></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            <?php } ?>
                            <div class="<?php if ($data['MaDM'] ) {
                                            echo 'info-reviews review-text tab-pane fade in';
                                        } else {
                                            echo 'info-reviews moreinfo tab-pane fade in active';
                                        } ?>" id="reviews">
                                <div class="about-author">
                                    <div class="contact-details">
                                        <div class="row">
                                            <div class="col-sm-4">
                                                <div class="single-contact text-center">
                                                    <i class="mdi mdi-map-marker"></i>
                                                    <p>18A đường số 34</p>
                                                    <p>P. Linh Đông, TP Thủ Đức</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="single-contact text-center">
                                                    <i class="mdi mdi-phone"></i>
                                                    <p>(+84) 876775168</p>
                                                    <p>(+84) 909090909</p>
                                                </div>
                                            </div>
                                            <div class="col-sm-4">
                                                <div class="single-contact text-center">
                                                    <i class="mdi mdi-email"></i>
                                                    <p>thaithien010104@gmail.com</p>
                                                    <p>thaithienabc1@gmail.com</p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <hr />
                                <div class="your-rating log-title">
                                    <h3>Góp ý :</h3>
                                </div>
                                <div class="custom-input">
                                    <form action="" method="post">
                                        <div class="row">
                                            <div class="col-sm-6">
                                                <div class="input-mail">
                                                    <span>Subject</span>
                                                    <input  type="text" name="subject">
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="custom-mess">
                                                <textarea  name="contents" placeholder="Contents"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-xs-12">
                                                <div class="submit-text">
                                                <input   type="submit" name="submit">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- reviews area end -->
        </div>
    </div>
    <!-- product-details section end -->
    <!-- related-products section start -->
    <section class="single-products section-padding">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-title text-center">
                        <h2>Sản phẩm tương tự</h2>
                    </div>
                </div>
            </div>
            <div class="row text-center">
                <?php foreach ($data_lq as $row) { ?>
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-product">
                            <div class="product-f">
                                <a href="?act=detail&id=<?= $row['MaSP'] ?>"><img src="public/<?= $row['HinhAnh1'] ?>" alt="Product Title" class="img-products" /></a>
                                <div class="actions-btn">
                                    <a href="?act=detail&id=<?= $row['MaSP'] ?>"><i class="mdi mdi-cart"></i></a>
                                    <a href="" data-toggle="modal" ><i class="mdi mdi-eye"></i></a>
                                </div>
                            </div>
                            <div class="product-dsc">
                                <p><a href="?act=detail&id=<?= $row['MaSP'] ?>"><?= $row['TenSP'] ?></a></p>
                                <span><?= number_format($row['DonGia']) ?> VNĐ</span>
                            </div>
                        </div>
                    </div>
                <?php } ?>
                <!-- single product end -->
            </div>
        </div>
    </section>
<?php } else {
    require_once("Views/error-404.php");
} ?>
<!-- related-products section end -->
<!-- quick view start -->
<?php
require_once("Views/quickview.php")
?>
<script>
    window.fbAsyncInit = function() {
        FB.init({
            appId: '2652621865018691',
            xfbml: true,
            version: 'v7.0'
        });
        FB.AppEvents.logPageView();
    };

    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id)) {
            return;
        }
        js = d.createElement(s);
        js.id = id;
        js.src = "https://connect.facebook.net/en_US/sdk.js";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
</script>
<!-- quick view end -->