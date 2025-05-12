<div class="main-slider-one main-slider-two slider-area">
    <div id="wrapper">
        <div class="slider-wrapper">
            <div id="mainSlider" class="nivoSlider">
                <?php $i=2; foreach ($data_banner as  $value) {  ?>
                <img src="public/<?=$value['HinhAnh']?>" alt="main slider" title="#htmlcaption"/>
                <?php } ?>
            </div>
            <div id="htmlcaption" class="nivo-html-caption slider-caption">
                <div class="container">
                    <div class="slider-left slider-right">
                        <div class="slide-text animated zoomInUp">
                            <h3>VLXD Thái Thiện 2025</h3>
                            <hr>
                            <h1>Vật Liệu Xây Dựng</h1>
                        </div>
                        <div class="animated slider-btn fadeInUpBig">
                            <a class="shop-btn" href="index.php?act=shop">Mua ngay giá ưu đãi</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>							
    </div>
</div>