<footer class="footer-two">
    <!-- footer-top area start -->
    <div class="footer-top section-padding">
        <div class="footer-dsc">
            <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-6 col-md-3">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Liên hệ</h4>
                            </div>
                            <div class="footer-text">
                                <ul>
                                    <li>
                                        <i class="mdi mdi-map-marker"></i>
                                        <p>18A Đường Số 34</p>
                                        <p>Khu phố 6, P. Linh Đông , Q. Thủ Đức, TP. HCM</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-phone"></i>
                                        <p>(+84) 876775168</p>
                                        <p>(+84) 969912553</p>
                                    </li>
                                    <li>
                                        <i class="mdi mdi-email"></i>
                                        <p>ThaiThien010104@gmail.com</p>
                                        <p>ThaiThienabc1@gmail.com</p>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Tài khoản</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <li><a href="?act=taikhoan&xuli=account"><i class="mdi mdi-menu-right"></i>Tài khoản</a></li>
                                    <li><a href="?act=cart"><i class="mdi mdi-menu-right"></i>Giỏ Hàng</a></li>
                                    <li><a href="?act=taikhoan"><i class="mdi mdi-menu-right"></i>Đăng Nhập</a></li>
                                    <li><a href="?act=checkout"><i class="mdi mdi-menu-right"></i>Thanh Toán</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-6 col-sm-3 col-md-3 wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Danh mục</h4>
                            </div>
                            <div class="footer-menu">
                                <ul>
                                    <?php foreach ($data_danhmuc as $row) { ?>
                                    <li><a href="?act=shop&sp=<?=$row['MaDM']?>"><i class="mdi mdi-menu-right"></i><?=$row['TenDM']?></a></li>
                                    <?php  } ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-3 r-margin-top wide-mobile">
                        <div class="single-text">
                            <div class="footer-title">
                                <h4>Mạng xã hội</h4>
                            </div>
                            <div class="clearfix instagram">
                                <ul>
                                     <li><a href="https://www.facebook.com/share/1ErwZtcHiB/?mibextid=wwXIfr" target="_blank"><img src="public/img/footer/in1.png" alt="Facebook" /></a></li>
                                     <li><a href="https://zalo.me/0876775168" target="_blank"><img src="https://cdn.haitrieu.com/wp-content/uploads/2022/01/Logo-Zalo-Arc.png" alt="Zalo" width="60" height="60" /></a></li>
                                     <li><a href="mailto:Thaithien010104@gmail.com"><img src="public/img/footer/in3.png" alt="Email" /></a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-top area end -->
    <!-- footer-bottom area start -->
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6">
                    <p>&copy; Xây dựng Long Phát. All Rights Reserved.</p>
                </div>
                <div class="col-xs-12 col-sm-6 text-right">
                    <a href="https://www.nganluong.vn/vn/home.html" target="_blank"><img src="public/img/footer/payment.png" alt="" /></a>
                </div>
            </div>
        </div>
    </div>
    <!-- footer-bottom area end -->
</footer>