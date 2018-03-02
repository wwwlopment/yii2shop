<?php

/* @var $this yii\web\View */

$this->title = 'My Yii Application';
?>
<div class="container-fluid">
    <div class="row">
        <div class="col-md-12">
            <!----start-images-slider---->
            <div class="images-slider">
                <div id="fwslider">
                    <div class="slider_container">
                        <div class="slide">
                            <img src="images/img.jpg" alt=""/>
                            <div class="slide_content">
                                <div class="slide_content_wrap">
                                    <p class="description">New Arrivals</p>
                                    <h4 class="title">Bags & Shoes</h4>
                                    <p class="description"><a href="#">Browse collection</a></p>
                                    <div class="slide-btns description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="slide">
                            <img src="images/img.jpg" alt=""/>
                            <div class="slide_content">
                                <div class="slide_content_wrap">
                                    <p class="description">New Arrivals</p>
                                    <h4 class="title">Bags & Shoes</h4>
                                    <p class="description"><a href="#">Browse collection</a></p>
                                    <div class="slide-btns description">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!--/slide -->
                    </div>
                    <div class="timers"></div>
                    <div class="slidePrev"><span> </span></div>
                    <div class="slideNext"><span> </span></div>
                </div>
                <!--/slider -->
            </div>
        </div>
    </div>
</div>
<!----//End-container----->
<div class="container">
    <div class="content">
        <div class="row">
            <div class="col-md-12 text-center">
                <h2>Featured Products</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-md-2">
                <div class="grid">
                    <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a data-toggle="modal" data-target=".bs-example-modal-md" href="#"
                               class="b-link-stripe b-animate-go  thickbox">
                                <img src="images/cont1.jpg"/>
                                <div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img
                                                src="images/link-ico.png" alt=""/></h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="text-center">Big block Lether Bag</p>
                    <h2 class="text-center">$350.00</h2>
                    <p class="text-center"><a href="details.html">Buy</a></p>
                </div>
            </div>

            <!----start-model-box---->
            <a data-toggle="modal" data-target=".bs-example-modal-md" href="#"> </a>
            <div class="modal fade bs-example-modal-md light-box" tabindex="-1" role="dialog"
                 aria-labelledby="mySmallModalLabel" aria-hidden="true">
                <div class="modal-dialog modal-md">
                    <div class="modal-content light-box-info">
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true"><img
                                    src="images/close.png" title="close"/></button>
                        <h3>Place Yours content here</h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas orci et blandit
                            dictum. Interdum et malesuada fames ac ante ipsum primis in faucibus. Interdum et malesuada
                            fames ac ante ipsum primis in faucibus. Quisque posuere diam et est hendrerit, eget sodales
                            lectus tincidunt. Etiam suscipit orci sapien, at molestie lorem imperdiet vitae. Fusce nunc
                            eros, congue non hendrerit sed, lobortis scelerisque magna. Ut in nunc sem. Integer bibendum
                            enim et erat molestie, sed interdum nisl ultricies. In hac habitasse platea dictumst. Nullam
                            sem diam, tincidunt dapibus tellus pulvinar, pulvinar tempus dui. Integer eu faucibus arcu.
                            Duis adipiscing commodo ipsum dapibus elementum.</p>
                    </div>
                </div>
            </div>
            <!----start-model-box---->

            <div class="col-md-2">
                <div class="grid">
                    <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a data-toggle="modal" data-target=".bs-example-modal-md" href="#"
                               class="b-link-stripe b-animate-go  thickbox">
                                <img src="images/cont2.jpg"/>
                                <div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img
                                                src="images/link-ico.png" alt=""/></h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="text-center">Big block Lether Bag</p>
                    <h2 class="text-center">$350.00</h2>
                    <p class="text-center"><a href="details.html">Buy</a></p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="grid">
                    <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a data-toggle="modal" data-target=".bs-example-modal-md" href="#"
                               class="b-link-stripe b-animate-go  thickbox">
                                <img src="images/cont3.jpg"/>
                                <div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img
                                                src="images/link-ico.png" alt=""/></h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="text-center">Big block Lether Bag</p>
                    <h2 class="text-center">$350.00</h2>
                    <p class="text-center"><a href="details.html">Buy</a></p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="grid">
                    <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a data-toggle="modal" data-target=".bs-example-modal-md" href="#"
                               class="b-link-stripe b-animate-go  thickbox">
                                <img src="images/cont4.jpg"/>
                                <div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img
                                                src="images/link-ico.png" alt=""/></h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="text-center">Big block Lether Bag</p>
                    <h2 class="text-center">$350.00</h2>
                    <p class="text-center"><a href="details.html">Buy</a></p>
                </div>
            </div>
            <div class="col-md-2">
                <div class="grid">
                    <div class="portfolio app mix_all" data-cat="app" style="display: inline-block; opacity: 1;">
                        <div class="portfolio-wrapper">
                            <a data-toggle="modal" data-target=".bs-example-modal-md" href="#"
                               class="b-link-stripe b-animate-go  thickbox">
                                <img src="images/cont2.jpg"/>
                                <div class="b-wrapper"><h2 class="b-animate b-from-left    b-delay03 "><img
                                                src="images/link-ico.png" alt=""/></h2>
                                </div>
                            </a>
                        </div>
                    </div>
                    <p class="text-center">Big block Lether Bag</p>
                    <h2 class="text-center">$350.00</h2>
                    <p class="text-center"><a href="details.html">Buy</a></p>
                </div>
                <div class="clearfix"></div>
            </div>
        </div>
        <div class="clearfix"></div>
    </div>
    <div class="top">
        <div class="row">
            <div class="col-md-4">
                <div class="grid">
                    <h2>About Us</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas orci et blandit dictum.
                        Interdum et malesuada fames ac ante ipsum primis in faucibus Quisque posuere diam et est
                        hendrerit, eget sodales lectus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid">
                    <h2>Our Blog</h2>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris egestas orci et blandit dictum.
                        Interdum et malesuada fames ac ante ipsum primis in faucibus Quisque posuere diam et est
                        hendrerit, eget sodales lectus.</p>
                </div>
            </div>
            <div class="col-md-4">
                <div class="grid1 pull-left">
                    <h2>Contact</h2>
                    <address>
                        <p>tryd online service</p>
                        <p>12345 main street</p>
                        <p>Newyork</p>
                        <p><a href="#">info#@mystore.com</a></p>
                        <p>555-58746-5475</p>
                    </address>
                </div>
                <div class="grid2 pull-right">
                    <div class="social-icons-set">
                        <ul>
                            <li><a class="facebook" href="#"> </a></li>
                            <li><a class="twitter" href="#"> </a></li>
                            <li><a class="vimeo" href="#"> </a></li>
                            <div class="clear"></div>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="clearfix"></div>
        </div>
    </div>
</div>