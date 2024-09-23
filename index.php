<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>simple </title>
    <link href="fontawesome-free-6.6.0-web/css/all.min.css" rel="stylesheet" >
    <link rel="stylesheet" href="CSS/container.css">
    <link rel="stylesheet" href="CSS/header.css">
    <link rel="stylesheet" href="CSS/main.css">
    <link rel="stylesheet" href="CSS/footer.css">

</head>
<body>
<div class="container">
    <!-- header div -->
    <div class="page_header">
        <!-- 1.logo / 2.danh_muc/ 3.search_bar / 4.hotline/ 5.tra_cuu_don_hang/ 6.gio_hang/ 7.tai_khoan -->
        <div class="logo">
            <div class="shop_name">
                <span>SIMPLE MOBILE</span>
            </div>
            <div class="shop_content">
                favourite online store
            </div>
        </div>
        <div class="danh_muc_container">
            <div class="danh_muc">
                <i class="fa-solid fa-bars"></i>
                <span>Danh mục</span>
            </div>
            <ul class="danh_muc_list">
                <li class="gap_item"><i class="fa-solid fa-angle-down"></i></li>
                <li class="danh_muc_item">
                    <i class="fa-solid fa-mobile-screen-button"></i>
                    <a href="#">Điện thoại</a>
                </li>
                <li class="danh_muc_item">
                    <i class="fa-regular fa-tablet"></i>
                    <a href="#">Tablet</a>
                </li>
                <li class="danh_muc_item">
                    <i class="fa-solid fa-headphones"></i>
                    <a href="#">Phụ kiện</a>
                </li>
                <li class="danh_muc_item">
                    <i class="fa-solid fa-recycle"></i>
                    <a href="#">Hàng cũ</a>
                </li>
                <li class="danh_muc_item">
                    <i class="fa-regular fa-newspaper"></i>
                    <a href="#">Tin tức</a>
                </li>
            </ul>
        </div>
        <div class="search_bar">
            <button type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
            <input type="text" placeholder="Hôm nay bạn cần tìm gì" autocomplete="off">
        </div>
        <div class="hotline">
            <a href="#">
                <div class="hotline_icon"><i class="fa-solid fa-phone-volume"></i></div>
                <div class="hotline_infor">
                    <span id="hotline_text">gọi mua ngay</span>
                    <span id="hotline_number">0888888889</span>
                </div>
            </a>
        </div>
        <div class="don_hang">
            <a href="#">
                <div class="don_hang_icon"><i class="fa-solid fa-truck"></i></div>
                <div class="don_hang_infor"><span id="don_hang_text">tra cứu đơn hàng</span></div>
            </a>
        </div>
        <div class="gio_hang">
            <a href="#">
                <div class="gio_hang_icon"><i class="fa-solid fa-cart-shopping"></i></div>
                <div class="gio_hang_infor"><span id="gio_hang_text">giỏ hàng</span></div>
            </a>
        </div>
        <div class="tai_khoan">
            <a style="text-decoration: none;" href="pages/login.php">
            <div class="tai_khoan_icon">
                <i class="fa-regular fa-circle-user"></i>
            </div>
            <div class="tai_khoan_text">
                <span>tài khoản</span>
            </div>
            </a>
        </div>
    </div> <!-- Đóng thẻ page_header -->
    <div class="main">
        <!--banner-->
        <div class="banner">
            <div class="big_banner">
                <img src="imgaes/laptop-ai-banner-chung-slide.webp" alt="" width="100%" height="100%">
                <span style="text-align: center ; color:gray;">uy tín tạo nên thương hiệu</span>
            </div>
            <div class="sub_banner">
                <div class="sub_banner1"><img src="imgaes/b2s-2024-right-banner-laptop.webp" alt="" width="100%"> </div>
                <div class="sub_banner2"><img src="imgaes/m55-gia-moi-right-banner-30-8-2024.webp" alt="" width="100%"></div>
                <div class="sub_banner3"><img src="imgaes/right-banner-dat-truoc-iphone-16.webp" alt="" width="100%"></div>
            </div>
        </div> 
        <div class="main_sale_background"> <!-- mo the main sale -->
        <div class="main_sale_product_title">
            <div class="main_img_sale_product"><img src="imgaes/hot-sale-cuoi-tuan-20-03-2024.gif" alt="" width="80%"></div>
        </div>
        <div class="main_sale_product">
            <!--mo the sale product-->
            <div class="sale_product">
                <div class="sale_value"><span>sale:99%</span></div>
                <div class="sale_product_img">
                    <img src="imgaes/product/samsung-galaxy-s24-plus_1.webp" alt="samsung galaxy s24plus" width="100%">
                </div>
                <div class="sale_product_name">
                    <span>Samsung Galaxy S24 Plus</span>
                </div>
                <div class="sale_product_price">
                    <span>24.790.000</span>
                </div>
                <div class="sale_product_buy_b">
                    <input type="button" value="mua ngay">
                </div>
            </div>
            <!--dong the sale product-->
            <!--mo the sale product-->
            <div class="sale_product">
                <div class="sale_value"><span>sale:99%</span></div>
                <div class="sale_product_img">
                    <img src="imgaes/product/samsung-galaxy-s24-plus_1.webp" alt="samsung galaxy s24plus" width="100%">
                </div>
                <div class="sale_product_name">
                    <span>Samsung Galaxy S24 Plus</span>
                </div>
                <div class="sale_product_price">
                    <span>24.790.000</span>
                </div>
                <div class="sale_product_buy_b">
                    <input type="button" value="mua ngay">
                </div>
            </div>
            <!--dong the sale product-->
            <!--mo the sale product-->
            <div class="sale_product">
                <div class="sale_value"><span>sale:99%</span></div>
                <div class="sale_product_img">
                    <img src="imgaes/product/samsung-galaxy-s24-plus_1.webp" alt="samsung galaxy s24plus" width="100%">
                </div>
                <div class="sale_product_name">
                    <span>Samsung Galaxy S24 Plus</span>
                </div>
                <div class="sale_product_price">
                    <span>24.790.000</span>
                </div>
                <div class="sale_product_buy_b">
                    <input type="button" value="mua ngay">
                </div>
            </div>
            <!--dong the sale product-->
            <!--mo the sale product-->
            <div class="sale_product">
                <div class="sale_value"><span>sale:99%</span></div>
                <div class="sale_product_img">
                    <img src="imgaes/product/samsung-galaxy-s24-plus_1.webp" alt="samsung galaxy s24plus" width="100%">
                </div>
                <div class="sale_product_name">
                    <span>Samsung Galaxy S24 Plus</span>
                </div>
                <div class="sale_product_price">
                    <span>24.790.000</span>
                </div>
                <div class="sale_product_buy_b">
                    <input type="button" value="mua ngay">
                </div>
            </div>
            <!--dong the sale product-->
        </div>
        </div> <!-- dong the main sale -->
        <div class="outstandingPhone"> <!-- mo the outstanding phone-->
             <div class="outstandingPhone__head_content">
                <span>Điện thoại nổi bật</span>
             </div>
             <div class="outstandingPhone__phone_container">
                <div class="outstandingPhone__phone_container__phone"> <!-- mo the phone -->
                     <div class="outstandingPhone__phone_container__phone__phone_content"><span>trả góp 0%</span></div>
                     <div class="outstandingPhone__phone_container__phone__phone_image"><img src="imgaes/dt_noiBat/iphone-16-pro-max.webp" alt="" width="100%"></div>
                     <div class="outstandingPhone__phone_container__phone__phone_name"><span>iPhone 16 Pro Max</span></div>
                     <div class="outstandingPhone__phone_container__phone__phone_price"><span>50.000.000</span></div>
                      <!-- dong the phone -->
                </div>
                <div class="outstandingPhone__phone_container__phone"> <!-- mo the phone -->
                     <div class="outstandingPhone__phone_container__phone__phone_content"><span>trả góp 0%</span></div>
                     <div class="outstandingPhone__phone_container__phone__phone_image"><img src="imgaes/dt_noiBat/iphone-16-pro-max.webp" alt="" width="100%"></div>
                     <div class="outstandingPhone__phone_container__phone__phone_name"><span>iPhone 16 Pro Max</span></div>
                     <div class="outstandingPhone__phone_container__phone__phone_price"><span>50.000.000</span></div>
                      <!-- dong the phone -->
                </div>
                <div class="outstandingPhone__phone_container__phone"> <!-- mo the phone -->
                     <div class="outstandingPhone__phone_container__phone__phone_content"><span>trả góp 0%</span></div>
                     <div class="outstandingPhone__phone_container__phone__phone_image"><img src="imgaes/dt_noiBat/iphone-16-pro-max.webp" alt="" width="100%"></div>
                     <div class="outstandingPhone__phone_container__phone__phone_name"><span>iPhone 16 Pro Max</span></div>
                     <div class="outstandingPhone__phone_container__phone__phone_price"><span>50.000.000</span></div>
                      <!-- dong the phone -->
                </div>
                <div class="outstandingPhone__phone_container__phone"> <!-- mo the phone -->
                     <div class="outstandingPhone__phone_container__phone__phone_content"><span>trả góp 0%</span></div>
                     <div class="outstandingPhone__phone_container__phone__phone_image"><img src="imgaes/dt_noiBat/iphone-16-pro-max.webp" alt="" width="100%"></div>
                     <div class="outstandingPhone__phone_container__phone__phone_name"><span>iPhone 16 Pro Max</span></div>
                     <div class="outstandingPhone__phone_container__phone__phone_price"><span>50.000.000</span></div>
                      
                </div><!-- dong the phone -->
             </div>
        </div>
        <!-- dong the outstanding phone-->
        <div class="outstandingTablet"> <!-- mo the outstanding tablet-->
             <div class="outstandingTablet__head_content">
                <span>Máy tính bảng</span>
             </div>
             <div class="outstandingTablet__tablet_container">
                <div class="outstandingTablet__tablet_container__tablet"> <!-- mo the tablet -->
                     <div class="outstandingTablet__tablet_container__tablet__tablet_content"><span>trả góp 0%</span></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_image"><img src="imgaes/tablet_noiBat/ipad-10-9-inch-2022.webp" alt="" width="100%"></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_name"><span>iPad Gen 10 10.9 inch 2022 Wifi 64GB</span></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_price"><span>50.000.000</span></div>
                </div><!-- dong the tablet -->
                <div class="outstandingTablet__tablet_container__tablet"> <!-- mo the tablet -->
                     <div class="outstandingTablet__tablet_container__tablet__tablet_content"><span>trả góp 0%</span></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_image"><img src="imgaes/tablet_noiBat/ipad-10-9-inch-2022.webp" alt="" width="100%"></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_name"><span>iPad Gen 10 10.9 inch 2022 Wifi 64GB</span></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_price"><span>50.000.000</span></div>
                </div><!-- dong the tablet -->
                <div class="outstandingTablet__tablet_container__tablet"> <!-- mo the tablet -->
                     <div class="outstandingTablet__tablet_container__tablet__tablet_content"><span>trả góp 0%</span></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_image"><img src="imgaes/tablet_noiBat/ipad-10-9-inch-2022.webp" alt="" width="100%"></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_name"><span>iPad Gen 10 10.9 inch 2022 Wifi 64GB</span></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_price"><span>50.000.000</span></div>
                </div><!-- dong the tablet -->
                <div class="outstandingTablet__tablet_container__tablet"> <!-- mo the tablet -->
                     <div class="outstandingTablet__tablet_container__tablet__tablet_content"><span>trả góp 0%</span></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_image"><img src="imgaes/tablet_noiBat/ipad-10-9-inch-2022.webp" alt="" width="100%"></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_name"><span>iPad Gen 10 10.9 inch 2022 Wifi 64GB</span></div>
                     <div class="outstandingTablet__tablet_container__tablet__tablet_price"><span>50.000.000</span></div>
                </div><!-- dong the tablet -->
             </div>
        </div> <!--DONG THE TABLET CONTAINER-->
    </div> <!-- Đóng thẻ main --> 
    <div class="footer">
        <div class="footer-logo"><img src="imgaes/logo2.png" height="100%" alt=""></div>
            <div class="text text--name">Cửa hàng điện thoại simple mobile</div>
            <div class="text-container-a">
                <div class="text text--desc">Địa chỉ:</div>
                <div class="text text--infor">Số 41A đường Phú Diễn, phường Phú Diễn, quận Bắc Từ Liêm, thành phố Hà Nội.</div>
            </div>
            <div class="text-container-p">
                <div class="text text--desc">Điện thoại:</div>
                <div class="text text--infor">0888888999</div>
            </div>
            <div class="tex-container-e">
            <div class="text text--desc">Email:</div>
            <div class="text text--infor">simplemobile.bodoi.com</div>
            </div>
    </div>
</div> <!-- Đóng thẻ container --> 
</body>
</html>