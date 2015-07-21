<?php /* Smarty version 3.1.27, created on 2015-07-19 06:19:20
         compiled from "application\templates\shopping_cart.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1812055ab2548189be5_49892290%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca0bd2ad9a32aa40e42722d8ed944bc0565bb364' => 
    array (
      0 => 'application\\templates\\shopping_cart.tpl',
      1 => 1436599576,
      2 => 'file',
    ),
    'beb73f380bab0780dfaddd173aa8703fd3a2a746' => 
    array (
      0 => 'application\\templates\\header.tpl',
      1 => 1437039815,
      2 => 'file',
    ),
    '7ee5ded718e3198487d4fe885bc4ebf69a0abaea' => 
    array (
      0 => 'application\\templates\\content\\conten-cart.tpl',
      1 => 1436694767,
      2 => 'file',
    ),
    'ca7a60b2fc6e5277113cfe413bb2c90b014e1353' => 
    array (
      0 => 'application\\templates\\footer.tpl',
      1 => 1436694047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1812055ab2548189be5_49892290',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ab25485a8f84_56524309',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ab25485a8f84_56524309')) {
function content_55ab25485a8f84_56524309 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1812055ab2548189be5_49892290';
?>
<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
    <title>New Store A Ecommerce Category Flat Bootstarp Resposive Website Template | Home :: w3layouts</title>
    <link href="./css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="./js/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="./css/style.css" rel="stylesheet" type="text/css" media="all" />
    <!--//theme-style-->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="keywords" content="New Store Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template,
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
    <?php echo '<script'; ?>
 type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } <?php echo '</script'; ?>
>
    <!--fonts-->
    <link href='http://fonts.googleapis.com/css?family=Lato:100,300,400,700,900' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900' rel='stylesheet' type='text/css'><!--//fonts-->
    <!-- start menu -->
    <link href="./css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <?php echo '<script'; ?>
 type="text/javascript" src="./js/memenu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>$(document).ready(function(){$(".memenu").memenu();});<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/simpleCart.min.js"> <?php echo '</script'; ?>
>
</head>
<body>
<!--header-->
<div class="header">
    
        <?php /*  Call merged included template "header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2829455ab2548318831_60471265', 'content_55ab25483142a0_96204085');
/*  End of included template "header.tpl" */?>

    

</div>


<div class="container">
    
        <?php /*  Call merged included template "content/conten-cart.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("content/conten-cart.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '190855ab254841ce45_60631450', 'content_55ab2548412877_07893952');
/*  End of included template "content/conten-cart.tpl" */?>

    
</div>


<!--//content-->
<div class="footer">
    
        <?php /*  Call merged included template "footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2792255ab254857eb64_03322425', 'content_55ab2548579528_80956502');
/*  End of included template "footer.tpl" */?>

    
</div>
</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:2829455ab2548318831_60471265%%*/
if ($_valid && !is_callable('content_55ab25483142a0_96204085')) {
function content_55ab25483142a0_96204085 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2829455ab2548318831_60471265';
?>
<div class="header-top">
    <div class="container">
        <div class="search">
            <form>
                  <input type="text" value="Search " onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Search';}">
                <input type="submit" value="Go">
            </form>
        </div>
        <div class="header-left">
            <ul>
                <li ><a href="login.html"  >Login</a></li>
                <li><a  href="register.html"  >Register</a></li>

            </ul>
            <div class="cart box_1">
                <a href="checkout.html">
                    <h3> <div class="total">
                        <span class="simpleCart_total"></span> (<span id="simpleCart_quantity" class="simpleCart_quantity"></span> items)</div>
                        <img src="images/cart.png" alt=""/></h3>
                </a>
                <p><a href="javascript:;" class="simpleCart_empty">Empty Cart</a></p>

            </div>
            <div class="clearfix"> </div>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="container">
    <div class="head-top">
        <div class="logo">
            <a href="index.php"><img src="images/logo.png" alt=""></a>
        </div>
        <div class=" h_menu4">
            <ul class="memenu skyblue">
                <li><a class="color1" href="#">THỜI TRANG</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <ul>
                                        <li><a href="products.html">Accessories</a></li>
                                        <li><a href="products.html">Bags</a></li>
                                        <li><a href="products.html">Caps & Hats</a></li>
                                        <li><a href="products.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="products.html">Jackets & Coats</a></li>
                                        <li><a href="products.html">Jeans</a></li>
                                        <li><a href="products.html">Jewellery</a></li>
                                        <li><a href="products.html">Jumpers & Cardigans</a></li>
                                        <li><a href="products.html">Leather Jackets</a></li>
                                        <li><a href="products.html">Long Sleeve T-Shirts</a></li>
                                        <li><a href="products.html">Loungewear</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <ul>
                                        <li><a href="products.html">Shirts</a></li>
                                        <li><a href="products.html">Shoes, Boots & Trainers</a></li>
                                        <li><a href="products.html">Shorts</a></li>
                                        <li><a href="products.html">Suits & Blazers</a></li>
                                        <li><a href="products.html">Sunglasses</a></li>
                                        <li><a href="products.html">Sweatpants</a></li>
                                        <li><a href="products.html">Swimwear</a></li>
                                        <li><a href="products.html">Trousers & Chinos</a></li>
                                        <li><a href="products.html">T-Shirts</a></li>
                                        <li><a href="products.html">Underwear & Socks</a></li>
                                        <li><a href="products.html">Vests</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Popular Brands</h4>
                                    <ul>
                                        <li><a href="products.html">Levis</a></li>
                                        <li><a href="products.html">Persol</a></li>
                                        <li><a href="products.html">Nike</a></li>
                                        <li><a href="products.html">Edwin</a></li>
                                        <li><a href="products.html">New Balance</a></li>
                                        <li><a href="products.html">Jack & Jones</a></li>
                                        <li><a href="products.html">Paul Smith</a></li>
                                        <li><a href="products.html">Ray-Ban</a></li>
                                        <li><a href="products.html">Wood Wood</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a class="color1" href="#">MỸ PHẪM</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <ul>
                                        <li><a href="products.html">Accessories</a></li>
                                        <li><a href="products.html">Bags</a></li>
                                        <li><a href="products.html">Caps & Hats</a></li>
                                        <li><a href="products.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="products.html">Jackets & Coats</a></li>
                                        <li><a href="products.html">Jeans</a></li>
                                        <li><a href="products.html">Jewellery</a></li>
                                        <li><a href="products.html">Jumpers & Cardigans</a></li>
                                        <li><a href="products.html">Leather Jackets</a></li>
                                        <li><a href="products.html">Long Sleeve T-Shirts</a></li>
                                        <li><a href="products.html">Loungewear</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <ul>
                                        <li><a href="products.html">Shirts</a></li>
                                        <li><a href="products.html">Shoes, Boots & Trainers</a></li>
                                        <li><a href="products.html">Shorts</a></li>
                                        <li><a href="products.html">Suits & Blazers</a></li>
                                        <li><a href="products.html">Sunglasses</a></li>
                                        <li><a href="products.html">Sweatpants</a></li>
                                        <li><a href="products.html">Swimwear</a></li>
                                        <li><a href="products.html">Trousers & Chinos</a></li>
                                        <li><a href="products.html">T-Shirts</a></li>
                                        <li><a href="products.html">Underwear & Socks</a></li>
                                        <li><a href="products.html">Vests</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Popular Brands</h4>
                                    <ul>
                                        <li><a href="products.html">Levis</a></li>
                                        <li><a href="products.html">Persol</a></li>
                                        <li><a href="products.html">Nike</a></li>
                                        <li><a href="products.html">Edwin</a></li>
                                        <li><a href="products.html">New Balance</a></li>
                                        <li><a href="products.html">Jack & Jones</a></li>
                                        <li><a href="products.html">Paul Smith</a></li>
                                        <li><a href="products.html">Ray-Ban</a></li>
                                        <li><a href="products.html">Wood Wood</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="grid"><a class="color2" href="#">BABY</a>
                    <div class="mepanel">
                        <div class="row">
                            <div class="col1">
                                <div class="h_nav">
                                    <ul>
                                        <li><a href="products.html">Accessories</a></li>
                                        <li><a href="products.html">Bags</a></li>
                                        <li><a href="products.html">Caps & Hats</a></li>
                                        <li><a href="products.html">Hoodies & Sweatshirts</a></li>
                                        <li><a href="products.html">Jackets & Coats</a></li>
                                        <li><a href="products.html">Jeans</a></li>
                                        <li><a href="products.html">Jewellery</a></li>
                                        <li><a href="products.html">Jumpers & Cardigans</a></li>
                                        <li><a href="products.html">Leather Jackets</a></li>
                                        <li><a href="products.html">Long Sleeve T-Shirts</a></li>
                                        <li><a href="products.html">Loungewear</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <ul>
                                        <li><a href="products.html">Shirts</a></li>
                                        <li><a href="products.html">Shoes, Boots & Trainers</a></li>
                                        <li><a href="products.html">Shorts</a></li>
                                        <li><a href="products.html">Suits & Blazers</a></li>
                                        <li><a href="products.html">Sunglasses</a></li>
                                        <li><a href="products.html">Sweatpants</a></li>
                                        <li><a href="products.html">Swimwear</a></li>
                                        <li><a href="products.html">Trousers & Chinos</a></li>
                                        <li><a href="products.html">T-Shirts</a></li>
                                        <li><a href="products.html">Underwear & Socks</a></li>
                                        <li><a href="products.html">Vests</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col1">
                                <div class="h_nav">
                                    <h4>Popular Brands</h4>
                                    <ul>
                                        <li><a href="products.html">Levis</a></li>
                                        <li><a href="products.html">Persol</a></li>
                                        <li><a href="products.html">Nike</a></li>
                                        <li><a href="products.html">Edwin</a></li>
                                        <li><a href="products.html">New Balance</a></li>
                                        <li><a href="products.html">Jack & Jones</a></li>
                                        <li><a href="products.html">Paul Smith</a></li>
                                        <li><a href="products.html">Ray-Ban</a></li>
                                        <li><a href="products.html">Wood Wood</a></li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <li><a class="color4" href="blog.html">SỨC KHỎE</a></li>
                <li><a class="color6" href="contact.html">HÀNG MỚI</a></li>
                <li><a class="color6" href="contact.html">BÁN CHẠY</a></li>
                <li><a class="color6" href="contact.html">SALE</a></li>
            </ul>
        </div>

        <div class="clearfix"> </div>
    </div>
</div>
<?php
/*/%%SmartyNocache:2829455ab2548318831_60471265%%*/
}
}
?><?php
/*%%SmartyHeaderCode:190855ab254841ce45_60631450%%*/
if ($_valid && !is_callable('content_55ab2548412877_07893952')) {
function content_55ab2548412877_07893952 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '190855ab254841ce45_60631450';
?>
<div class="check">
    <h1>GIỎ HÀNG</h1>
    <div class="col-md-9 cart-items">

        <?php echo '<script'; ?>
>$(document).ready(function(c) {
                $('.close1').on('click', function(c){
                    $('.cart-header').fadeOut('slow', function(c){
                        $('.cart-header').remove();
                    });
                });
            });
        <?php echo '</script'; ?>
>
        <div class="cart-header">
            <div class="close1"> </div>
            <div class="cart-sec simpleCart_shelfItem">
                <div class="cart-item cyc">
                    <img src="images/pic1.jpg" class="img-responsive" alt=""/>
                </div>
                <div class="cart-item-info">
                    <h3><a href="#">TÊN SẢN PHẨM</a><span>MÃ SẢN PHẨM</span></h3>
                    <ul class="qty">
                        <li><p>SIZE: </p></li>
                        <li><p>SỐ LƯỢNG: 1</p></li>
                    </ul>

                 
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
        <?php echo '<script'; ?>
>$(document).ready(function(c) {
                $('.close2').on('click', function(c){
                    $('.cart-header2').fadeOut('slow', function(c){
                        $('.cart-header2').remove();
                    });
                });
            });
        <?php echo '</script'; ?>
>
        <div class="cart-header2">
            <div class="close2"> </div>
            <div class="cart-sec simpleCart_shelfItem">
                <div class="cart-item cyc">
                    <img src="images/pic2.jpg" class="img-responsive" alt=""/>
                </div>
                <div class="cart-item-info">
                    <h3><a href="#">Mountain Hopper(XS R034)</a><span>Model No: 3578</span></h3>
                    <ul class="qty">
                        <li><p>Size : 5</p></li>
                        <li><p>Qty : 1</p></li>
                    </ul>
                    <div class="delivery">
                        <p>Service Charges : Rs.100.00</p>
                        <span>Delivered in 2-3 bussiness days</span>
                        <div class="clearfix"></div>
                    </div>
                </div>
                <div class="clearfix"></div>

            </div>
        </div>
    </div>
    <div class="col-md-3 cart-total">
        <a class="continue" href="#">TIẾP TỤC MUA THÊM</a>
        <div class="price-details">
            <h3>CHI TIẾT HÓA ĐƠN</h3>
            <span>TOTAL</span>
            <span class="total1">6200.00</span>
            <span>Discount</span>
            <span class="total1">---</span>
            <span>Delivery Charges</span>
            <span class="total1">150.00</span>
            <div class="clearfix"></div>
        </div>
        <ul class="total_price">
            <li class="last_price"> <h4>TOTAL</h4></li>
            <li class="last_price"><span>6350.00</span></li>
            <div class="clearfix"> </div>
        </ul>


        <div class="clearfix"></div>
        <a class="order" href="#">XÁC NHẬN GIỎ HÀNG</a>
        
    </div>

    <div class="clearfix"> </div>
</div><?php
/*/%%SmartyNocache:190855ab254841ce45_60631450%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2792255ab254857eb64_03322425%%*/
if ($_valid && !is_callable('content_55ab2548579528_80956502')) {
function content_55ab2548579528_80956502 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2792255ab254857eb64_03322425';
?>
<div class="container">
    <div class="footer-top-at">

        <div class="col-md-4 amet-sed">

            <ul class="nav-bottom">
                <li class="logo">
                        <a href="index.php"><img src="images/logo.png" alt=""></a>
                    </li>
                <div class="clearfix"> </div>
                <li><a href="#">Thanh Toán</a></li>
                
            </ul>
        </div>
        <div class="col-md-4 amet-sed ">
            <h4>THÔNG TIN LIÊN LẠC</h4>

            <p>
               MR.abcSAD</p>
            <p>ĐỊA CHĨ</p>
            <p>SĐT  +12 34 995 0792</p>
            <ul class="social">
                <li><a href="#"><i> </i></a></li>
               

            </ul>
        </div>
        <div class="col-md-4 amet-sed">
            <h4>DỊCH VỤ</h4>
            <p>1</p>
            <p>1</p>
            <p>1</p>
            <p>1</p>
        </div>
        <div class="clearfix"> </div>
    </div>
</div>
<div class="footer-class">
    <p >© 2015 TÊN SHOP | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>
</div><?php
/*/%%SmartyNocache:2792255ab254857eb64_03322425%%*/
}
}
?>