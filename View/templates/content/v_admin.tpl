{extends file="admin.tpl"}
{block name="content"}
<div class="container">
    <div class="col-md-3 product-price">
        <div class=" rsidebar span_1_of_left">
            <div class="of-left">
                <h3 class="cate">Mục Lục</h3>
            </div>
            <ul class="menu">
                <li class="item1"><a href="#" id="index">Trang Chủ </a>

                </li>
                <li class="item2"><a href="#" id="products">Sản Phẩm </a>
                    <ul class="cute">
                        <li class="subitem1"><a href="#" id="add_products">Thêm Sản Phẩm </a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!--initiate accordion-->
        <script type="text/javascript">
            $(function () {
                var menu_ul = $('.menu > li > ul'),
                        menu_a = $('.menu > li > a');
                menu_ul.hide();
                menu_a.click(function (e) {
                    e.preventDefault();
                    if (!$(this).hasClass('active')) {
                        menu_a.removeClass('active');
                        menu_ul.filter(':visible').slideUp('normal');
                        $(this).addClass('active').next().stop(true, true).slideDown('normal');
                    } else {
                        $(this).removeClass('active');
                        $(this).next().stop(true, true).slideUp('normal');
                    }
                });

            });
        </script>
        <!---->
        <div class="product-middle">

            {*<div class="fit-top">
                <h6 class="shop-top">Lorem Ipsum</h6>
                <a href="single.html" class="shop-now">SHOP NOW</a>
                <div class="clearfix"> </div>
            </div>*}
        </div>
        <div class="sellers">


        </div>
        <!---->
        <div class="product-bottom">
        </div>

    </div>
    <div class="col-md-9 product1" style="font-size: 1.1em">
        {*ajax load admin control*}
        <script>
            $('document').ready(function () {
                $('div .product1').load('./admin/index_admin.php');
                $('#index').click(function () {
                    $('div .product1').load('./admin/index_admin.php');
                });
                $('#add_products').click(function () {
                    $('div .product1').load('./admin/add_products.php');
                });
                $('#products').click(function () {
                    $('div .product1').load('./admin/list_products.php');
                });
            });
        </script>
        {*End of Ajax*}


    </div>
    <div class="clearfix"></div>

</div>
{/block}