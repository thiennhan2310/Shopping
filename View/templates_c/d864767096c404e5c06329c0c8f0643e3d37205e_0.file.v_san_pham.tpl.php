<?php /* Smarty version 3.1.27, created on 2015-07-22 07:14:14
         compiled from "View\templates\content\v_san_pham.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:2553655af26a677eb94_18801633%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd864767096c404e5c06329c0c8f0643e3d37205e' => 
    array (
      0 => 'View\\templates\\content\\v_san_pham.tpl',
      1 => 1437541825,
      2 => 'file',
    ),
    '2df0cccd02779d7f215b76700daa6c0d94d9fbce' => 
    array (
      0 => 'View\\templates\\products.tpl',
      1 => 1437535891,
      2 => 'file',
    ),
    'c59c91ead4b3227048ee191d5644a2cd9777b654' => 
    array (
      0 => 'View\\templates\\header.tpl',
      1 => 1437541786,
      2 => 'file',
    ),
    '3ecde62bfdf227f28fc388e21cc60bee304761e3' => 
    array (
      0 => '3ecde62bfdf227f28fc388e21cc60bee304761e3',
      1 => 0,
      2 => 'string',
    ),
    '16206fae0218a240382577b23e4e26b30dea9fce' => 
    array (
      0 => 'View\\templates\\aside.tpl',
      1 => 1437542051,
      2 => 'file',
    ),
    'f0cab46561d830af9bfcd1384462e5b1f4a7f9d6' => 
    array (
      0 => 'View\\templates\\footer.tpl',
      1 => 1437538690,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2553655af26a677eb94_18801633',
  'variables' => 
  array (
    'root' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_55af26a704b9f3_82223295',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_55af26a704b9f3_82223295')) {
function content_55af26a704b9f3_82223295 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '2553655af26a677eb94_18801633';
?>
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
echo $_smarty_tpl->getInlineSubTemplate("header.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '6255af26a68f6ea0_01723939', 'content_55af26a68f38a1_08334438');
/*  End of included template "header.tpl" */?>

    
</div>
<!--content-->
<div class="content">
    <?php
$_smarty_tpl->properties['nocache_hash'] = '2553655af26a677eb94_18801633';
?>

<div class="container">
    <div class="col-md-3 product-price">
       <?php /*  Call merged included template "aside.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("aside.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '2347755af26a6a0b847_90002369', 'content_55af26a6a078b7_70202175');
/*  End of included template "aside.tpl" */?>

    <div class="col-md-9 product1">
        <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['i']->step = 3;$_smarty_tpl->tpl_vars['i']->total = (int) ceil(($_smarty_tpl->tpl_vars['i']->step > 0 ? 8+1 - (0) : 0-(8)+1)/abs($_smarty_tpl->tpl_vars['i']->step));
if ($_smarty_tpl->tpl_vars['i']->total > 0) {
for ($_smarty_tpl->tpl_vars['i']->value = 0, $_smarty_tpl->tpl_vars['i']->iteration = 1;$_smarty_tpl->tpl_vars['i']->iteration <= $_smarty_tpl->tpl_vars['i']->total;$_smarty_tpl->tpl_vars['i']->value += $_smarty_tpl->tpl_vars['i']->step, $_smarty_tpl->tpl_vars['i']->iteration++) {
$_smarty_tpl->tpl_vars['i']->first = $_smarty_tpl->tpl_vars['i']->iteration == 1;$_smarty_tpl->tpl_vars['i']->last = $_smarty_tpl->tpl_vars['i']->iteration == $_smarty_tpl->tpl_vars['i']->total;?>
        <div class=" bottom-product"> 
            <?php $_smarty_tpl->tpl_vars['j'] = new Smarty_Variable;$_smarty_tpl->tpl_vars['j']->step = 1;$_smarty_tpl->tpl_vars['j']->total = (int) min(ceil(($_smarty_tpl->tpl_vars['j']->step > 0 ? 8+1 - ($_smarty_tpl->tpl_vars['i']->value) : $_smarty_tpl->tpl_vars['i']->value-(8)+1)/abs($_smarty_tpl->tpl_vars['j']->step)),3);
if ($_smarty_tpl->tpl_vars['j']->total > 0) {
for ($_smarty_tpl->tpl_vars['j']->value = $_smarty_tpl->tpl_vars['i']->value, $_smarty_tpl->tpl_vars['j']->iteration = 1;$_smarty_tpl->tpl_vars['j']->iteration <= $_smarty_tpl->tpl_vars['j']->total;$_smarty_tpl->tpl_vars['j']->value += $_smarty_tpl->tpl_vars['j']->step, $_smarty_tpl->tpl_vars['j']->iteration++) {
$_smarty_tpl->tpl_vars['j']->first = $_smarty_tpl->tpl_vars['j']->iteration == 1;$_smarty_tpl->tpl_vars['j']->last = $_smarty_tpl->tpl_vars['j']->iteration == $_smarty_tpl->tpl_vars['j']->total;?>
                <?php if ($_smarty_tpl->tpl_vars['ds']->value[$_smarty_tpl->tpl_vars['j']->value]->Hinh != '') {?>
            <div class="col-md-4 bottom-cd simpleCart_shelfItem"> 
                <div class="product-at ">
                    <a href="detail.php"><img class="img-responsive" src="<?php echo root;?>
/products/<?php echo $_smarty_tpl->tpl_vars['ds']->value[$_smarty_tpl->tpl_vars['j']->value]->Hinh;?>
" alt="">
                        <div class="pro-grid">
                            <span class="buy-in">BUY NOW</span>
                        </div>
                    </a>
                </div>
                <p class="tun"><?php echo $_smarty_tpl->tpl_vars['ds']->value[$_smarty_tpl->tpl_vars['j']->value]->Ten_sua;?>
</p>
                <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
            </div>
                <?php }?>
            <?php }} ?>


            <div class="clearfix"> </div>
        </div>
        <?php }} ?>

    </div>
    <div class="clearfix"> </div>
    <nav class="in">
       <ul class="pagination">
        
            <?php echo $_smarty_tpl->tpl_vars['link_trang']->value;?>

        </ul>

    </nav>
</div>

    <!---->

</div>
<div class="footer">
    
        <?php /*  Call merged included template "footer.tpl" */
echo $_smarty_tpl->getInlineSubTemplate("footer.tpl", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, '556355af26a6e88066_12567247', 'content_55af26a6e76a69_41158318');
/*  End of included template "footer.tpl" */?>

    
</div>
</body>
</html>
<?php }
}
?><?php
/*%%SmartyHeaderCode:6255af26a68f6ea0_01723939%%*/
if ($_valid && !is_callable('content_55af26a68f38a1_08334438')) {
function content_55af26a68f38a1_08334438 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '6255af26a68f6ea0_01723939';
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
            <a href="trang-chu.html"><img src="<?php echo root;?>
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
/*/%%SmartyNocache:6255af26a68f6ea0_01723939%%*/
}
}
?><?php
/*%%SmartyHeaderCode:2347755af26a6a0b847_90002369%%*/
if ($_valid && !is_callable('content_55af26a6a078b7_70202175')) {
function content_55af26a6a078b7_70202175 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '2347755af26a6a0b847_90002369';
?>
<div class=" rsidebar span_1_of_left" style="margin-top: 20px">
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
    <img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
/images/logo.png" alt="">
Logo Cong Ty
</div>

<!---->
<div class="product-bottom">
    <div class="of-left-in">
        <h3 class="best">Best Sellers</h3>
    </div>
    <div class="product-go">
        <div class=" fashion-grid">
            <a href="#"><img class="img-responsive " src="<?php echo root;?>
/images/p1.jpg" alt=""></a>

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
            <a href="#"><img class="img-responsive " src="<?php echo root;?>
/images/p2.jpg" alt=""></a>

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
    <a href="#" ><img class="img-responsive" src="<?php echo root;?>
/images/pro.jpg" alt="">
        <div class="six1">
            <h4>HÌNH</h4>
            <p>DISCOUNT CÙNG </p>
            <span>HÀNG</span>
        </div></a>
</div>
</div><?php
/*/%%SmartyNocache:2347755af26a6a0b847_90002369%%*/
}
}
?><?php
/*%%SmartyHeaderCode:556355af26a6e88066_12567247%%*/
if ($_valid && !is_callable('content_55af26a6e76a69_41158318')) {
function content_55af26a6e76a69_41158318 ($_smarty_tpl) {
?>
<?php
$_smarty_tpl->properties['nocache_hash'] = '556355af26a6e88066_12567247';
?>
<div class="container">
    <div class="footer-top-at">

        <div class="col-md-4 amet-sed">

            <ul class="nav-bottom">
                <li class="logo">
                        <a href="trang-chu.html"><img src="<?php echo $_smarty_tpl->tpl_vars['root']->value;?>
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
/*/%%SmartyNocache:556355af26a6e88066_12567247%%*/
}
}
?>