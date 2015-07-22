<?php /* Smarty version 3.1.27, created on 2015-07-22 16:39:20
         compiled from "View\templates\content\v_gio_hang.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:1908255afab1851cef7_22222654%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '65b22739e5fcc28539dc89ef5b873d8546421382' => 
    array (
      0 => 'View\\templates\\content\\v_gio_hang.tpl',
      1 => 1437575940,
      2 => 'file',
    ),
    '5439381fe06fdf52293c68dec649b0b79ac24189' => 
    array (
      0 => 'View\\templates\\cart.tpl',
      1 => 1437557442,
      2 => 'file',
    ),
    'c59c91ead4b3227048ee191d5644a2cd9777b654' => 
    array (
      0 => 'View\\templates\\header.tpl',
      1 => 1437551518,
      2 => 'file',
    ),
    'e5c9f1fa7c15516739adb4b47dc06f4680f39075' => 
    array (
      0 => 'e5c9f1fa7c15516739adb4b47dc06f4680f39075',
      1 => 0,
      2 => 'string',
    ),
    'f0cab46561d830af9bfcd1384462e5b1f4a7f9d6' => 
    array (
      0 => 'View\\templates\\footer.tpl',
      1 => 1437551531,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1908255afab1851cef7_22222654',
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55afab18ae80b9_67798150',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55afab18ae80b9_67798150')) {
function content_55afab18ae80b9_67798150 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '1908255afab1851cef7_22222654';
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
    <link href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/Public/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/Public/js/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Custom Theme files -->
    <!--theme-style-->
    <link href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/Public/css/style.css" rel="stylesheet" type="text/css" media="all" />
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
    <link href="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/Public/css/memenu.css" rel="stylesheet" type="text/css" media="all" />
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/Public//js/memenu.js"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
>$(document).ready(function(){$(".memenu").memenu();});<?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/Public/js/simpleCart.min.js"> <?php echo '</script'; ?>
>
</head>
<body>
<!--header-->
<div class="header">
    
        <?php /*  Call merged included template "header.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1154455afab186cba00_96291139', 'content_55afab186c83c0_42059212');
/*  End of included template "header.tpl" */?>

    

</div>


<div class="container">
    <?php
$_smarty_tpl->properties['nocache_hash'] = '1908255afab1851cef7_22222654';
?>

<style>

</style>
<div class="check"><form action="<?php echo root;?>
/index.php?site=gio-hang" method="post">
    <h1>GIỎ HÀNG <button type="submit" style="background-color: #EF5F21;margin-left: 57%;font-family: 'Lato', sans-serif;font-size: 1em;"
                         class="btn btn-warning">Cập nhật</button></h1>
    <div class="col-md-9 cart-items">
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable(1, null, 0);?>
        <?php
$_from = $_smarty_tpl->tpl_vars['gio_hang']->value;
if (!is_array($_from) && !is_object($_from)) {
settype($_from, 'array');
}
$_smarty_tpl->tpl_vars['sp'] = new Smarty_Variable;
$_smarty_tpl->tpl_vars['sp']->_loop = false;
foreach ($_from as $_smarty_tpl->tpl_vars['sp']->value) {
$_smarty_tpl->tpl_vars['sp']->_loop = true;
$foreach_sp_Sav = $_smarty_tpl->tpl_vars['sp'];
?>

        <?php echo '<script'; ?>
>$(document).ready(function(c) {
                $('#close<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
').on('click', function(c){
                    $('#cart<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
').fadeOut('slow', function(c){
                        $('#cart<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
').remove();
                    });
                });
            });
        <?php echo '</script'; ?>
>
        <div class="cart-header" id="cart<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
">
            <div class="close1" id="close<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"> </div>
            <div class="cart-sec simpleCart_shelfItem">
                <div class="cart-item cyc">
                    <img src="<?php echo root;?>
/products/<?php echo $_smarty_tpl->tpl_vars['sp']->value->Hinh;?>
" class="img-responsive" alt=""/>
                </div>
                <div class="cart-item-info">
                    <h3><a href="#"><?php echo $_smarty_tpl->tpl_vars['sp']->value->Ten_San_Pham;?>
</a><span>Mã Sản Phẩm: <?php echo $_smarty_tpl->tpl_vars['sp']->value->Ma_San_Pham;?>
</span></h3>


                    <ul class="qty">
                        <li><p>Số lượng : <input type="number" style="width: 50px" value="1" min="1" name="so_luong<?php echo $_smarty_tpl->tpl_vars['i']->value;?>
"/></p></li>
                        <input type="hidden" name="ma_sp" value="<?php echo $_smarty_tpl->tpl_vars['sp']->value->Ma_San_Pham;?>
"/>
                        <li><p>Đơn Giá:<?php echo number_format($_smarty_tpl->tpl_vars['sp']->value->Gia);?>
  VNĐ</p></li>
                    </ul>
                    </form>
                    
                </div>
                <div class="clearfix"></div>

            </div>
        </div>

          <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
        <?php
$_smarty_tpl->tpl_vars['sp'] = $foreach_sp_Sav;
}
?>
    </div>
    <div class="col-md-3 cart-total">
        <a class="continue" href="#">TIẾP TỤC MUA THÊM</a>
        <div class="price-details">
            <h3>CHI TIẾT HÓA ĐƠN</h3>
            <span>Tiền Hàng</span>
            <span class="total1">0</span>
            <span>Discount</span>
            <span class="total1">---</span>
            <span>Phí Ship</span>
            <span class="total1">30.000 </span>
            <div class="clearfix"></div>
        </div>
        <ul class="total_price">
            <li class="last_price"> <h4>Tổng Cộng</h4></li>
            <li class="last_price"><span>0</span> VNĐ</li>
            <div class="clearfix"> </div>
        </ul>


        <div class="clearfix"></div>
        <a class="order" href="<?php echo root;?>
/don-hang/xac-nhan.html">XÁC NHẬN GIỎ HÀNG</a>
        
    </div>

    <div class="clearfix"> </div>
</div>

</div>


<!--//content-->
<div class="footer">
    
        <?php /*  Call merged included template "footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '1071155afab18a8bdb0_69399721', 'content_55afab18a87694_73215628');
/*  End of included template "footer.tpl" */?>

    
</div>
</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:1154455afab186cba00_96291139%%*/
if ($_valid && !is_callable('content_55afab186c83c0_42059212')) {
function content_55afab186c83c0_42059212 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1154455afab186cba00_96291139';
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
                        <img src="<?php echo root;?>
/images/cart.png" alt=""/></h3>
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
            <a href="<?php echo root;?>
/trang-chu.html"><img src="<?php echo root;?>
/images/logo.png" alt=""></a>
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
/*/%%SmartyNocache:1154455afab186cba00_96291139%%*/
}
}
?><?php
/*%%SmartyHeaderCode:1071155afab18a8bdb0_69399721%%*/
if ($_valid && !is_callable('content_55afab18a87694_73215628')) {
function content_55afab18a87694_73215628 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '1071155afab18a8bdb0_69399721';
?>
<div class="container">
    <div class="footer-top-at">

        <div class="col-md-4 amet-sed">

            <ul class="nav-bottom">
                <li class="logo">
                        <a href="<?php echo root;?>
/trang-chu.html"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/images/logo.png" alt=""></a>
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
/*/%%SmartyNocache:1071155afab18a8bdb0_69399721%%*/
}
}
?>