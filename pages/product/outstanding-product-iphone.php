<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>product</title>
    <link rel="stylesheet" href="../../CSS/CSS-phone-product/phone-product.css">
    <link rel="stylesheet" href="../../fontawesome-free-6.6.0-web/css/all.min.css">
    <link rel="stylesheet" href="../../CSS/container-index.css">
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
    <div class="nav-selection">
        <a href="../../index.php">trang chủ</a>
        <span> > sản phẩm</span>
    </div>
    <!-- thẻ main-product -->
         <div class="top-content-s-p">
            <div class="ct-name-img">
                <div class="text p-name"><span>iPhone 16 Pro Max</span></div>
                <div class="phone-sale-image"><img src="../../imgaes/dt_noiBat/iphone-16-pro-max.webp" alt="" width="100%"></div>
            </div>
            <div class="ct-selec-price-add">
                <div class="select"> <div class="select-title">Lựa chọn phiên bản</div> <div class="select-type"><span id="type-1">256GB</span> <span id="type-2">512GB</span></div>
                </div>
                    <div class="center-content-s-p">
                    <span>50.000.000</span>
            </div>
            <div class="botton-content-s-p">
                <button class="btr btr--buynow">mua ngay</button>
                <button class="btr btr--addtocart">giỏ hàng</button>
            </div>
            </div>
         </div>
     <!--HÔNG SỐ KỸ THUẬT-->
     <div class="container-infor-s-p">
            <div class="sp-tt"><div class="text text--sp-title">THÔNG SỐ KỸ THUẬT</div></div>
            <div class="sp-ct">
                <div><div class="text text--sp-atb">Kích thước màn hình</div><div class="text text--sp-info">10.9 inches</div></div>
                 <div><div class="text text--sp-atb">Công nghệ màn hình</div><div class="text text--sp-info">IPS LCD</div></div>
                 <div><div class="text text--sp-atb">Camera sau</div><div class="text text--sp-info">Camera góc rộng: 12MP, ƒ/1.8</div></div>
                 <div><div class="text text--sp-atb">Camera trước</div><div class="text text--sp-info">Camera góc siêu rộng: 12MP, 122°, ƒ/2.4</div></div>
                 <div><div class="text text--sp-atb">Chipset</div><div class="text text--sp-info">Apple A14 Bionic 6 nhân</div></div>
                 <div><div class="text text--sp-atb">Dung lượng RAM</div><div class="text text--sp-info">4 GB</div></div>
                 <div><div class="text text--sp-atb">Bộ nhớ trong</div><div class="text text--sp-info">64 GB</div></div>
                 <div><div class="text text--sp-atb">Độ phân giải màn hình</div><div class="text text--sp-info">1640 x 2360 pixels</div></div>
                 
            </div>
     </div>
     <!--HÔNG SỐ KỸ THUẬT-->
   </div>
</body>
</html>