<header class="header-one header-two">
    <div class="header-top-two">
        <div class="container text-center">
            <div class="row">
                <div class="col-sm-12">
                    <div class="middel-top">
                        <div class="left floatleft">
                            <p><i class="mdi mdi-clock"></i> T2 - T7 : 07:00-20:00</p>
                        </div>
                    </div>
                    <div class="middel-top clearfix">
                        <ul class="clearfix right floatright">
                            <li>
                                <a><i class="mdi mdi-account"></i></a>
                                <ul>
                                    <?php  if(isset($_SESSION['login'])){ ?>
                                    <li><b>Chào <?=$_SESSION['login']['Ho']?> <?=$_SESSION['login']['Ten']?></b></li>
                                    <li><a href="?act=taikhoan&xuli=account">Tài khoản</a></li>
                                    <li><a href="?act=taikhoan&xuli=dangxuat">Đăng xuất</a></li>
                                    <?php
                                        if(isset($_SESSION['isLogin_Admin']) || isset($_SESSION['isLogin_Nhanvien'])){ ?>
                                        <li><a href="admin/?mod=login">Trang quản lý</a></li>
                                  <?php }}else{ ?>
                                    <li><b>Khách hàng</b></li>
                                    <li><a href="?act=taikhoan">Đăng nhập</a></li>
                                    <?php } ?>
                                </ul>
                            </li>
                        </ul>
                        <div class="right floatright widthfull">
                            <form action="?act=shop" method="post">
                                <button type="submit"><i class="mdi mdi-magnify"></i></button>
                                <input type="text" placeholder="Tìm kiếm..." name="keyword"/>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-2">
                <div class="logo">
                    <a href="?act=home"><img src="https://scontent.fhan14-3.fna.fbcdn.net/v/t39.30808-6/277791147_351936836950800_3383251568452654771_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=efb6e6&_nc_eui2=AeGpzmGwkFD_tszTGKht2foepFa7A2vdyYakVrsDa93JhovgS9bAWrAmye6utx7hBxlNWDjiYQ1dul0O4jjLrn5r&_nc_ohc=A0wSBI029MEAX9s1vUA&_nc_ht=scontent.fhan14-3.fna&oh=00_AfDO6sNEUOg6dIPJxn_XghKqsW5AmO6Kd-OeoN4jMwgRLg&oe=658B0D55" alt="Sellshop" /></a>
                </div>
            </div>
            <div class="col-sm-8">
                <div class="header-middel">
                    <div class="mainmenu">
                        <nav>
                            <ul>
                                <li><a href="?act=home">Trang chủ</a></li>
                                <li><a href="?act=shop" class="shop-link">Cửa Hàng</a>
                                    <ul class="magamenu">
                                        <li class="banner" style="background: linear-gradient(45deg, #ff9a9e, #fad0c4)"></li>
                                        <?php $i = 1; foreach ($data_chitietDM as $row) { ?>
                                            <li class="category-item" style="transition: all 0.3s ease">
                                                <a href="?act=shop&sp=<?=$i?>" class="category-heading" style="color: #333; font-weight: 600">
                                                    <h5 style="margin: 0; padding: 12px 0"><?= $data_danhmuc[$i-1]['TenDM'] ?></h5>
                                                    <i class="mdi mdi-chevron-right" style="color: #666"></i>
                                                </a>
                                                <ul class="subcategory-list" style="background: rgba(255,255,255,0.95); box-shadow: 0 2px 5px rgba(0,0,0,0.1)">
                                                    <?php foreach ($row as $value) { ?>
                                                    <li class="subcategory-item" style="transition: all 0.2s ease">
                                                        <a href="?act=shop&sp=<?=$value['MaDM']?>&loai=<?=$value['TenLSP']?>" 
                                                           class="subcategory-link" 
                                                           style="padding: 10px 15px; color: #555; display: flex; align-items: center">
                                                            <i class="mdi mdi-tag-outline" style="color: #ff6b6b; margin-right: 8px"></i>
                                                            <span style="font-size: 14px"><?=$value['TenLSP']?></span>
                                                        </a>
                                                    </li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                        <?php $i++; } ?>
                                        <li class="banner" style="background: linear-gradient(45deg, #fad0c4, #ff9a9e)"></li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="?act=checkout">Thanh Toán</a>
                                </li>
                                <li><a href="?act=about">Giới thiệu</a></li>
                                <li><a href="?act=contact">Liên hệ</a></li>
                            </ul>
                        </nav>
                    </div>
                    <!-- mobile menu start -->
                    <div class="mobile-menu-area">
                        <div class="mobile-menu">
                            <nav id="dropdown">
                                <ul>
                                    <li><a href="?act=home">Trang chủ</a>
                                    </li>
                                    <li><a href="?act=shop">Cửa hàng</a>
                                        <ul>
                                        <?php $i = 1; foreach ($data_chitietDM as $row) { ?>
                                            <li class="menu-item">
                                                <a href="?act=shop&sp=<?=$i?>" class="menu-heading">
                                                    <h5><?= $data_danhmuc[$i-1]['TenDM'] ?></h5>
                                                    <i class="mdi mdi-chevron-right"></i>
                                                </a>
                                                <ul class="submenu">
                                                    <?php foreach ($row as $value) { ?>
                                                    <li class="submenu-item">
                                                        <a href="?act=shop&sp=<?=$value['MaDM']?>&loai=<?=$value['TenLSP']?>" class="submenu-link">
                                                            <i class="mdi mdi-tag-outline"></i>
                                                            <?=$value['TenLSP']?>
                                                        </a>
                                                    </li>
                                                    <?php }?>
                                                </ul>
                                            </li>
                                        <?php $i++; } ?>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="?act=checkout">Thanh Toán</a>
                                    </li>
                                    <li><a href="?act=about">Giới thiệu</a></li>
                                    <li><a href="?act=contac">Liên hệ</a></li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-2">
                <div class="cart-itmes">
                    <a class="cart-itme-a" href="?act=cart">
                        <?php 
                            $soluong = 0;
                            $thanhtien = 0;
                            if(isset($_SESSION['sanpham'])){
                            foreach ($_SESSION['sanpham'] as $value) {
                                $soluong +=1;
                                $thanhtien +=$value['ThanhTien'];
                            }}
                        ?>
                        <i class="mdi mdi-cart"></i>
                        <?=$soluong?> SP : <strong><?=number_format($thanhtien)?> VNĐ</strong>
                    </a>
                    <div class="cartdrop">
                        <?php if(isset($_SESSION['sanpham'])){
                            foreach ($_SESSION['sanpham'] as $value) { ?>
                        <div class="sin-itme clearfix">
                        <a href="?act=cart&xuli=deleteall&id=<?= $value['MaSP'] ?>"><i class="mdi mdi-close" title="Remove this product"></i></a>
                            <a class="cart-img" href="?act=cart"><img src="public/<?=$value['HinhAnh1']?>" alt="" /></a>
                            <div class="menu-cart-text">
                                <a href="?act=detail&id=<?=$value['MaSP']?>">
                                    <h5><?=$value['TenSP']?></h5>
                                </a>
                                <b>Số lượng: <?=$value['SoLuong']?></b>
                                <strong><?=number_format($value['ThanhTien'])?> VNĐ</strong>
                            </div>
                        </div>
                            <?php }} ?>
                        <div class="total">
                            <span>Tổng <strong>= <?=number_format($thanhtien)?> VNĐ</strong></span>
                        </div>
                        <a class="goto" href="index.php?act=cart">Đến giỏ hàng</a>
                        <a class="out-menu" href="index.php?act=checkout">Thanh toán</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>