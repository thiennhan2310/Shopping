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
<script type="text/javascript">
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
</script>
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
</div>