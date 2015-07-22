{extends file="detail.tpl"}
{block name="content"}
<div class="container">
    <div class="col-md-3 product-price">
    {block name="aside"}
        {include file="aside.tpl"}
    {/block}

    <div class="col-md-9 product-price1">
        <div class="col-md-5 single-top">
            <div class="flexslider">
                <ul class="slides">
                    <li >
                        <img src="{root}/products/{$sp[0]->Hinh}" />
                    </li>
                </ul>
            </div>
            <!-- FlexSlider -->
            <script defer src="js/jquery.flexslider.js"></script>
            <link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" />

            <script>
                // Can also be used with $(document).ready()
                $(window).load(function() {
                    $('.flexslider').flexslider({
                        animation: "slide",
                        controlNav: "thumbnails"
                    });
                });
            </script>
        </div>
        <div class="col-md-7 single-top-in simpleCart_shelfItem">
            <div class="single-para ">
                <h4>NAME OF PRODUCTS</h4>
              {*  <div class="star-on">
                    <ul class="star-footer">

                    </ul>
                    <div class="review">


                    </div>
                    <div class="clearfix"> </div>
                </div>*}

                <h5 class="item_price">$ 95.00</h5>
                <p>DetailsDetailsDetailsDetailsDetailsDetailsDetailsDetailsDetails </p>
               {* <div class="available">
                    <ul>
                        <li>Color
                            <select>
                                <option>Silver</option>
                                <option>Black</option>
                                <option>Dark Black</option>
                                <option>Red</option>
                            </select></li>
                        <li class="size-in">Size<select>
                                <option>Large</option>
                                <option>Medium</option>
                                <option>small</option>
                                <option>Large</option>
                                <option>small</option>
                            </select></li>
                        <div class="clearfix"> </div>
                    </ul>
                </div>*}
                <ul class="tag-men">
                    <li><span>LOẠI:&nbsp; Women</li>
                    <li><span>MÃ SẢN PHẨM: &nbsp; CK09</span></li>
                </ul>
                <a href="{root}/gio-hang/{$sp[0]->Ma_San_Pham}.html" class="add-cart item_add" style="background-image: url('{root}/images/cart.png');
  background-repeat: no-repeat;
  padding-left: 24px;
  background-position-y: 3px;
  background-position-x: 1px;">ADD TO CART</a>

            </div>
        </div>
        <div class="clearfix"> </div>
        <!---->

        {*
        <div class="cd-tabs">
            <nav>
                <ul class="cd-tabs-navigation">
                    <li><a data-content="fashion"  href="#0">Description </a></li>
                    <li><a data-content="cinema" href="#0" >Addtional Informatioan</a></li>
                    <li><a data-content="television" href="#0" class="selected ">Reviews (1)</a></li>

                </ul>
            </nav>
            <ul class="cd-tabs-content">
                <li data-content="fashion" >
                    <div class="facts">
                        <p > There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text. All the Lorem Ipsum generators on the Internet tend to repeat predefined chunks as necessary, making this the first true generator on the Internet. It uses a dictionary of over 200 Latin words, combined </p>
                        <ul>
                            <li>Research</li>
                            <li>Design and Development</li>
                            <li>Porting and Optimization</li>
                            <li>System integration</li>
                            <li>Verification, Validation and Testing</li>
                            <li>Maintenance and Support</li>
                        </ul>
                    </div>

                </li>
                <li data-content="cinema" >
                    <div class="facts1">

                        <div class="color"><p>Color</p>
                            <span >Blue, Black, Red</span>
                            <div class="clearfix"></div>
                        </div>
                        <div class="color">
                            <p>Size</p>
                            <span >S, M, L, XL</span>
                            <div class="clearfix"></div>
                        </div>

                    </div>

                </li>
                <li data-content="television" class="selected">
                    <div class="comments-top-top">
                        <div class="top-comment-left">
                            <img class="img-responsive" src="images/co.png" alt="">
                        </div>
                        <div class="top-comment-right">
                            <h6><a href="#">Hendri</a> - September 3, 2014</h6>
                            <ul class="star-footer">
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                                <li><a href="#"><i> </i></a></li>
                            </ul>
                            <p>Wow nice!</p>
                        </div>
                        <div class="clearfix"> </div>
                        <a class="add-re" href="#">ADD REVIEW</a>
                    </div>

                </li>
                <div class="clearfix"></div>
            </ul>
        </div>*}
        <div class="of-left" style="  padding-left: 15px;
  padding-top: 70px;">
            <h3 class="cate">SẢN PHẨM CÙNG LOẠI <a href="{root}/san-pham/danh-sach-san-pham/{$sp_cung_loai[0]->Ma_Loai}.html"><span style="float:right;font-size: 15px; background-color: #EF5F21" class="badge">{count($sp_cung_loai)} sản phẩm</span></a></h3>
        </div>
        <div class=" bottom-product">
            {foreach $sp_cung_loai as $sp}
            <div class="col-md-4 bottom-cd simpleCart_shelfItem">
                <div class="product-at ">
                    <a href="{root}/san-pham/chi-tiet/{$sp->Ma_Loai}/{$sp->Ma_San_Pham}.html"><img class="img-responsive" src="{root}/products/{$sp->Hinh}" alt="">
                        <div class="pro-grid">
                            <span class="buy-in">Buy Now</span>
                        </div>
                    </a>
                </div>
                <p class="tun">It is a long established fact that a reader</p>
                <a href="#" class="item_add"><p class="number item_price"><i> </i>$500.00</p></a>
            </div>
            {/foreach}
            <div class="clearfix"> </div>
        </div>
    </div>

    <div class="clearfix"> </div>
</div>
{/block}