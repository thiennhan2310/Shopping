<?php /* Smarty version 3.1.27, created on 2015-07-12 12:00:55
         compiled from "application\templates\login.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2710255a23ad7c283b1_48054646%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdeba9b86c168b87831500f694f937c64ae3a52e' => 
    array (
      0 => 'application\\templates\\login.tpl',
      1 => 1436695245,
      2 => 'file',
    ),
    'beb73f380bab0780dfaddd173aa8703fd3a2a746' => 
    array (
      0 => 'application\\templates\\header.tpl',
      1 => 1436693333,
      2 => 'file',
    ),
    'ca7a60b2fc6e5277113cfe413bb2c90b014e1353' => 
    array (
      0 => 'application\\templates\\footer.tpl',
      1 => 1436694047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2710255a23ad7c283b1_48054646',
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55a23ad7ea4ec3_07676172',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55a23ad7ea4ec3_07676172')) {
function content_55a23ad7ea4ec3_07676172 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2710255a23ad7c283b1_48054646';
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
echo $_smarty_tpl->getInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '372455a23ad7d65e29_77531540', 'content_55a23ad7d607e9_99693954');
/*  End of included template "header.tpl" */?>

    

</div>


<!--content-->
<div class="container">
    <div class="account">
        <h1>ĐĂNG NHẬP</h1>
        <div class="account-pass">
            <div class="col-md-8 account-top">
                <form>

                    <div>
                        <span>Email</span>
                        <input type="text">
                    </div>
                    <div>
                        <span >Password</span>
                        <input type="password">
                    </div>
                    <input type="submit" value="Login">
                </form>
            </div>
            <div class="col-md-4 left-account ">
                <a href="register.html" class="create">Create an account</a>
                <a href="single.html"><img class="img-responsive " src="images/s1.jpg" alt=""></a>
                <div class="five">
                    <h2>10% </h2><span>discount</span>
                </div>

                <div class="clearfix"> </div>
            </div>
            <div class="clearfix"> </div>
        </div>
    </div>

</div>

<!--//content-->
<div class="footer">
    
        <?php /*  Call merged included template "footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1789855a23ad7e62472_49503129', 'content_55a23ad7e5e041_61593881');
/*  End of included template "footer.tpl" */?>

    
</div>
</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:372455a23ad7d65e29_77531540%%*/
if ($_valid && !is_callable('content_55a23ad7d607e9_99693954')) {
function content_55a23ad7d607e9_99693954 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '372455a23ad7d65e29_77531540';
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
            <a href="index.html"><img src="images/logo.png" alt=""></a>
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
/*/%%SmartyNocache:372455a23ad7d65e29_77531540%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1789855a23ad7e62472_49503129%%*/
if ($_valid && !is_callable('content_55a23ad7e5e041_61593881')) {
function content_55a23ad7e5e041_61593881 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1789855a23ad7e62472_49503129';
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
/*/%%SmartyNocache:1789855a23ad7e62472_49503129%%*/
}
}
?>