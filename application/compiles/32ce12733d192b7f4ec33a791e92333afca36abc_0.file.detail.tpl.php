<?php /* Smarty version 3.1.27, created on 2015-07-20 05:18:51
         compiled from "application\templates\detail.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:3025055ac689bc95b53_12439599%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '32ce12733d192b7f4ec33a791e92333afca36abc' => 
    array (
      0 => 'application\\templates\\detail.tpl',
      1 => 1436587849,
      2 => 'file',
    ),
    'beb73f380bab0780dfaddd173aa8703fd3a2a746' => 
    array (
      0 => 'application\\templates\\header.tpl',
      1 => 1437039815,
      2 => 'file',
    ),
    '2ac4305e6cc9b79d27754ec623d74bebf37b7e2d' => 
    array (
      0 => 'application\\templates\\content\\content-detail.tpl',
      1 => 1437279555,
      2 => 'file',
    ),
    'cb08bf57340c6f887f507b2684f1914a624e73fa' => 
    array (
      0 => 'application\\templates\\aside.tpl',
      1 => 1436615789,
      2 => 'file',
    ),
    'ca7a60b2fc6e5277113cfe413bb2c90b014e1353' => 
    array (
      0 => 'application\\templates\\footer.tpl',
      1 => 1437361184,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3025055ac689bc95b53_12439599',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55ac689c0e7384_28169267',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55ac689c0e7384_28169267')) {
function content_55ac689c0e7384_28169267 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '3025055ac689bc95b53_12439599';
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
 src="./js/main.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="./js/simpleCart.min.js"> <?php echo '</script'; ?>
>

</head>
<body>
<!--header-->
<div class="header">
    
        <?php /*  Call merged included template "header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2092055ac689bddfcf6_20376110', 'content_55ac689bddc228_22893248');
/*  End of included template "header.tpl" */?>

    

</div>


<!--content-->
<!---->
<div class="product">
    
        <?php /*  Call merged included template "content/content-detail.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("content/content-detail.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1919055ac689bed9b74_71640129', 'content_55ac689bed5951_62038348');
/*  End of included template "content/content-detail.tpl" */?>

    
</div>
<!--//content-->
<div class="footer">
    
        <?php /*  Call merged included template "footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '832255ac689c0a94e0_62282475', 'content_55ac689c0a5752_92626874');
/*  End of included template "footer.tpl" */?>

    
</div>
</body>
</html>
			<?php }
}
?><?php
/*%%SmartyHeaderCode:2092055ac689bddfcf6_20376110%%*/
if ($_valid && !is_callable('content_55ac689bddc228_22893248')) {
function content_55ac689bddc228_22893248 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2092055ac689bddfcf6_20376110';
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
/*/%%SmartyNocache:2092055ac689bddfcf6_20376110%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2083655ac689bf16295_34551376%%*/
if ($_valid && !is_callable('content_55ac689bf12206_52821827')) {
function content_55ac689bf12206_52821827 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2083655ac689bf16295_34551376';
?>
<div class=" rsidebar span_1_of_left">
    <div class="of-left">
        <h3 class="cate">SUB MENU</h3>
    </div>
    <ul class="menu">
        <li class="item1"><a href="#">Men </a>
            <ul class="cute">
                <li class="subitem1"><a href="#">Cute Kittens </a></li>
                <li class="subitem2"><a href="#">Strange Stuff </a></li>
                <li class="subitem3"><a href="#">Automatic Fails </a></li>
            </ul>
        </li>
        <li class="item2"><a href="#">Women </a>
            <ul class="cute">
                <li class="subitem1"><a href="#">Cute Kittens </a></li>
                <li class="subitem2"><a href="#">Strange Stuff </a></li>
                <li class="subitem3"><a href="#">Automatic Fails </a></li>
            </ul>
        </li>
        <li class="item3"><a href="#">Kids</a>
            <ul class="cute">
                <li class="subitem1"><a href="#">Cute Kittens </a></li>
                <li class="subitem2"><a href="#">Strange Stuff </a></li>
                <li class="subitem3"><a href="#">Automatic Fails</a></li>
            </ul>
        </li>
        <li class="item4"><a href="#">Accesories</a>
            <ul class="cute">
                <li class="subitem1"><a href="#">Cute Kittens </a></li>
                <li class="subitem2"><a href="#">Strange Stuff </a></li>
                <li class="subitem3"><a href="#">Automatic Fails</a></li>
            </ul>
        </li>

        <li class="item4"><a href="#">Shoes</a>
            <ul class="cute">
                <li class="subitem1"><a href="#">Cute Kittens </a></li>
                <li class="subitem2"><a href="#">Strange Stuff </a></li>
                <li class="subitem3"><a href="product.html">Automatic Fails </a></li>
            </ul>
        </li>
    </ul>
</div>
<!--initiate accordion-->
<?php echo '<script'; ?>
 type="text/javascript">
    $(function() {
        var menu_ul = $('.menu > li > ul'),
                menu_a  = $('.menu > li > a');
        menu_ul.hide();
        menu_a.click(function(e) {
            e.preventDefault();
            if(!$(this).hasClass('active')) {
                menu_a.removeClass('active');
                menu_ul.filter(':visible').slideUp('normal');
                $(this).addClass('active').next().stop(true,true).slideDown('normal');
            } else {
                $(this).removeClass('active');
                $(this).next().stop(true,true).slideUp('normal');
            }
        });

    });
<?php echo '</script'; ?>
>
<!---->
<div class="product-middle">
    LOGO CONG TY

</div>

<!---->
<div class="product-bottom">
    <div class="of-left-in">
        <h3 class="best">Best Sellers</h3>
    </div>
    <div class="product-go">
        <div class=" fashion-grid">
            <a href="#"><img class="img-responsive " src="images/p1.jpg" alt=""></a>

        </div>
        <div class=" fashion-grid1">
            <h6 class="best2"><a href="#" >Lorem ipsum dolor sit
                    amet consectetuer  </a></h6>

            <span class=" price-in1">40000 VNĐ</span>
        </div>

        <div class="clearfix"> </div>
    </div>
    <div class="product-go">
        <div class=" fashion-grid">
            <a href="#"><img class="img-responsive " src="images/p2.jpg" alt=""></a>

        </div>
        <div class="fashion-grid1">
            <h6 class="best2"><a href="#" >Lorem ipsum dolor sit
                    amet consectetuer </a></h6>

            <span class=" price-in1">40000 VNĐ</span>
        </div>

        <div class="clearfix"> </div>
    </div>

</div>
<div class=" per1">
    <a href="#" ><img class="img-responsive" src="images/pro.jpg" alt="">
        <div class="six1">
            <h4>HÌNH</h4>
            <p>DISCOUNT CÙNG </p>
            <span>HÀNG</span>
        </div></a>
</div>
</div><?php
/*/%%SmartyNocache:2083655ac689bf16295_34551376%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1919055ac689bed9b74_71640129%%*/
if ($_valid && !is_callable('content_55ac689bed5951_62038348')) {
function content_55ac689bed5951_62038348 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1919055ac689bed9b74_71640129';
?>
<div class="container">
    <div class="col-md-3 product-price">
    
        <?php /*  Call merged included template "aside.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2083655ac689bf16295_34551376', 'content_55ac689bf12206_52821827');
/*  End of included template "aside.tpl" */?>

    

    <div class="col-md-9 product-price1">
        <div class="col-md-5 single-top">
            <div class="flexslider">
                <ul class="slides">
                    <li >
                        <img src="images/si.jpg" />
                    </li>
                </ul>
            </div>
            <!-- FlexSlider -->
            <?php echo '<script'; ?>
 defer src="js/jquery.flexslider.js"><?php echo '</script'; ?>
>
            <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

            <?php echo '<script'; ?>
>
                // Can also be used with $(document).ready()
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: "thumbnails"
                    });
                });
            <?php echo '</script'; ?>
>
        </div>
        <div class="col-md-7 single-top-in simpleCart_shelfItem">
            <div class="single-para ">
                <h4>NAME OF PRODUCTS</h4>
              

                <h5 class="item_price">$ 95.00</h5>
                <p>DetailsDetailsDetailsDetailsDetailsDetailsDetailsDetailsDetails </p>
               
                <ul class="tag-men">
                    <li><span>LOẠI:&nbsp; Women</li>
                    <li><span>MÃ SẢN PHẨM: &nbsp; CK09</span></li>
                </ul>
                <a href="shopping_cart.php" class="add-cart item_add" style="background-image: url('images/cart.png');
  background-repeat: no-repeat;
  padding-left: 24px;
  background-position-y: 3px;
  background-position-x: 1px;">ADD TO CART</a>

            </div>
        </div>
        <div class="clearfix"> </div>
        <!---->

        
        <div class="of-left" style="  padding-left: 15px;
  padding-top: 70px;">
            <h3 class="cate">SẢN PHẨM CÙNG LOẠI</h3>
        </div>
        <div class=" bottom-product">
            <div class="col-md-4 bottom-cd simpleCart_shelfItem">

                <div class="product-at ">
                    <a href="#"><img class="img-responsive" src="images/pi3.jpg" alt="">
                        <div class="pro-grid">
                            <span class="buy-in">Buy Now</span>
                        </div>
                    </a>
                </div>
                <p class="tun">It is a long established fact that a reader</p>
                <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
            </div>
            <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                <div class="product-at ">
                    <a href="#"><img class="img-responsive" src="images/pi1.jpg" alt="">
                        <div class="pro-grid">
                            <span class="buy-in">Buy Now</span>
                        </div>
                    </a>
                </div>
                <p class="tun">It is a long established fact that a reader</p>
                <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>					</div>
            <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                <div class="product-at ">
                    <a href="#"><img class="img-responsive" src="images/pi4.jpg" alt="">
                        <div class="pro-grid">
                            <span class="buy-in">Buy Now</span>
                        </div>
                    </a>
                </div>
                <p class="tun">It is a long established fact that a reader</p>
                <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>					</div>
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="clearfix"> </div>
</div><?php
/*/%%SmartyNocache:1919055ac689bed9b74_71640129%%*/
}
}
?><?php
/*%%SmartyHeaderCode:832255ac689c0a94e0_62282475%%*/
if ($_valid && !is_callable('content_55ac689c0a5752_92626874')) {
function content_55ac689c0a5752_92626874 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '832255ac689c0a94e0_62282475';
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
</div>
<?php
/*/%%SmartyNocache:832255ac689c0a94e0_62282475%%*/
}
}
?>