<!DOCTYPE html>
<html lang="zxx">


<meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <title>Khae Kebaya</title>

    <!-- :::::::::::::: icon::::::::::::::-->
    <link rel="shortcut icon" href="assets/images/logo/khae.png" type="image/png">

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <link rel="stylesheet" href="assets/css/vendor/vendor.min.css">
    <link rel="stylesheet" href="assets/css/plugins/plugins.min.css">
    <link rel="stylesheet" href="assets/css/style.min.css">

</head>

<body>
    <?php include 'header.php'; ?>

    <!-- ...:::: Start Breadcrumb Section:::... -->
    <div class="breadcrumb-section breadcrumb-bg-color--golden">
        <div class="breadcrumb-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h3 class="breadcrumb-title">Cart</h3>
                        <div class="breadcrumb-nav breadcrumb-nav-color--black breadcrumb-nav-hover-color--golden">
                            <nav aria-label="breadcrumb">
                                <ul>
                                    <li><a href="index.php">Home</a></li>
                                    <li>Shop</li>
                                    <li class="active" aria-current="page">Cart</li>
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> <!-- ...:::: End Breadcrumb Section:::... -->

    <!-- ...:::: Start Cart Section:::... -->
    <div class="cart-section">
        <!-- Start Cart Table -->
        <div class="cart-table-wrapper" data-aos="fade-up" data-aos-delay="0">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <div class="table_desc">
                            <div class="table_page table-responsive">
                                <table>
                                    <!-- Start Cart Table Head -->
                                    <thead>
                                        <tr>
                                            <th class="product_remove">Delete</th>
                                            <th class="product_thumb">Image</th>
                                            <th class="product_name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product_quantity">Quantity</th>
                                            <th class="product_total">Total</th>
                                        </tr>
                                    </thead> <!-- End Cart Table Head -->
                                    <tbody>
                                        <!-- Start Cart Single Item-->
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><img src="assets/images/product/1-Kain Lilit Navy Color.jpg" alt=""></a></td>
                                            <td class="product_name">Kebaya Encim Rose</a></td>
                                            <td class="product-price">Rp.750.000</td>
                                            <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                            <td class="product_total">Rp.750.000</td>
                                        </tr> <!-- End Cart Single Item-->
                                        <!-- Start Cart Single Item-->
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><img src="assets/images/product/2-Classic Kebaya All White Lace.jpg" alt=""></a></td>
                                            <td class="product_name">Classic Kebaya All White Lace</a></td>
                                            <td class="product-price">Rp.1.500.000</td>
                                            <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                            <td class="product_total">Rp.1.500.000</td>
                                        </tr> <!-- End Cart Single Item-->
                                        <!-- Start Cart Single Item-->
                                        <tr>
                                            <td class="product_remove"><a href="#"><i class="fa fa-trash-o"></i></a>
                                            </td>
                                            <td class="product_thumb"><img src="assets/images/product/3-Kebaya Encim Nyonya Kebaya Soft Pink Color.jpg" alt=""></a></td>
                                            <td class="product_name">Kebaya Encim Soft Pink</a></td>
                                            <td class="product-price">Rp.700.000</td>
                                            <td class="product_quantity"><label>Quantity</label> <input min="1" max="100" value="1" type="number"></td>
                                            <td class="product_total">Rp.700.000</td>
                                        </tr> <!-- End Cart Single Item-->
                                    </tbody>
                                </table>
                            </div>
                            <div class="cart_submit">
                                <button class="btn btn-md btn-golden" type="submit">update cart</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Cart Table -->

        <!-- Start Coupon Start -->
        <div class="coupon_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code left" data-aos="fade-up" data-aos-delay="200">
                            <h3>Coupon</h3>
                            <div class="coupon_inner">
                                <p>Enter your coupon code if you have one.</p>
                                <input class="mb-2" placeholder="Coupon code" type="text">
                                <button type="submit" class="btn btn-md btn-golden">Apply coupon</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 col-md-6">
                        <div class="coupon_code right" data-aos="fade-up" data-aos-delay="400">
                            <h3>Cart Totals</h3>
                            <div class="coupon_inner">
                                <div class="cart_subtotal">
                                    <p>Subtotal</p>
                                    <p class="cart_amount">Rp.2.950.000</p>
                                </div>
                                <div class="cart_subtotal ">
                                    <p>Shipping</p>
                                    <p class="cart_amount">Rp.50.000</p>
                                </div>
                                <a href="#">Calculate shipping</a>

                                <div class="cart_subtotal">
                                    <p>Total</p>
                                    <p class="cart_amount">Rp.3.000.000</p>
                                </div>
                                <div class="checkout_btn">
                                    <a href="checkout.php" class="btn btn-md btn-golden">Proceed to Checkout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- End Coupon Start -->
    </div> <!-- ...:::: End Cart Section:::... -->

    <?php include 'footer.php'; ?>

    <!-- material-scrolltop button -->
    <button class="material-scrolltop" type="button"></button>

    <!-- Use the minified version files listed below for better performance and remove the files listed above -->
    <script src="assets/js/vendor/vendor.min.js"></script>
    <script src="assets/js/plugins/plugins.min.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>
</body>


</html>