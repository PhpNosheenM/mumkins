<div class="scrollbar-sidebar">
                        <div class="app-sidebar__inner">
                            <ul class="vertical-nav-menu" id="navmenut">
                                <li>
                                    <a href="<?= $this->Url->build(['controller'=>'Users','action' =>'index'])?>" class="">
                                        <i class="metismenu-icon pe-7s-rocket"></i>
                                        Dashboard
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-diamond"></i>
                                        Master
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller'=>'Customers','action' =>'index'])?>">
                                                <i class="metismenu-icon"></i>
                                                Customer
                                            </a>
                                        </li>
                                        <li>
                                            <a href="#">
                                                <i class="metismenu-icon">
                                                </i>Item
                                                <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                            </a>
                                            <ul class="vertical-nav-menu">
											<li>
												<a href="<?= $this->Url->build(['controller'=>'categories','action' =>'index'])?>">
													<i class="metismenu-icon">
													</i>Category
												</a>
											</li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller'=>'categories','action' =>'indexsub'])?>">
                                                <i class="metismenu-icon">
                                                </i>Sub Category
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller'=>'Items','action' =>'add'])?>">
                                                <i class="metismenu-icon">
                                                </i>Add Items
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller'=>'Items','action' =>'uploadImage'])?>">
                                                <i class="metismenu-icon">
                                                </i>Add Item Images
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller'=>'Sizes','action' =>'index'])?>">
                                                <i class="metismenu-icon">
                                                </i>Size
                                            </a>
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller'=>'Colors','action' =>'index'])?>">
                                                <i class="metismenu-icon">
                                                </i>Color
                                            </a>
                                        </li>
                                        
                                        
                                            </ul>
                                            <!-- <li>
                                            <a href="footerContent.html">
                                                <i class="metismenu-icon">
                                                </i>Footer Content
                                            </a>
                                        </li> -->
                                        </li>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller'=>'Items','action' =>'salesRateUpdate'])?>">
                                                <i class="metismenu-icon">
                                                </i>Sales Rate
                                            </a>
                                        </li>
                                        <!-- <li>
                                            <a href="masterPincode.html">
                                                <i class="metismenu-icon">
                                                </i>Pincode
                                            </a>
                                        </li>--> 
                                        
                                        
                                    </ul>
                                </li>
                                 <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Home Screen
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <!--<li>
                                            <a href="customer.html">
                                                <i class="metismenu-icon"></i>
                                                Customer
                                            </a>
                                        </li>-->
                                        <li>
                                           <a href="<?= $this->Url->build(['controller'=>'SliderSections','action' =>'index'])?>">
                                                <i class="metismenu-icon">
                                                </i>Slider Section
                                            </a>
                                        </li>

                                        <li>
                                           <a href="<?= $this->Url->build(['controller'=>'OfferSections','action' =>'index'])?>">
                                                <i class="metismenu-icon">
                                                </i>Offer Section
                                            </a>
                                        </li>

                                        <li>
                                           <a href="<?= $this->Url->build(['controller'=>'CategorySections','action' =>'index'])?>">
                                                <i class="metismenu-icon">
                                                </i>Category Section
                                            </a>
                                        </li>
                                        
                                        <li>
                                           <a href="<?= $this->Url->build(['controller'=>'BoyGirlSections','action' =>'index'])?>">
                                                <i class="metismenu-icon">
                                                </i>Boy & Girl Section
                                            </a>
                                        </li>

                                        <li>
                                           <a href="<?= $this->Url->build(['controller'=>'BannerSections','action' =>'index'])?>">
                                                <i class="metismenu-icon">
                                                </i>Banner Section
                                            </a>
                                        </li>
                                        
                                        <li>
                                           <a href="<?= $this->Url->build(['controller'=>'ProductSections','action' =>'index'])?>">
                                                <i class="metismenu-icon">
                                                </i>Product Section
                                            </a>
                                        </li>

                                        <li>
                                           <a href="<?= $this->Url->build(['controller'=>'NewsletterSections','action' =>'index'])?>">
                                                <i class="metismenu-icon">
                                                </i>Newsletter Section
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-browser"></i>
                                        Footer
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="<?= $this->Url->build(['controller'=>'FooterSections','action' =>'index'])?>">
                                                <i class="metismenu-icon">
                                                </i>Content Section
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    <a href="<?= $this->Url->build(['controller'=>'Orders','action' =>'index'])?>">
                                                <i class="metismenu-icon">
                                                </i>Orders
                                    </a>
                                </li>
                               <!-- <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-car"></i>
                                        Home Screen
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="homeSlider.html">
                                                <i class="metismenu-icon">
                                                </i>Slider Section
                                            </a>
                                        </li>
                                        <li>
                                            <a href="homeOfferImg.html">
                                                <i class="metismenu-icon">
                                                </i>Offer Section
                                            </a>
                                        </li>
                                        <li>
                                            <a href="homeCategory.html">
                                                <i class="metismenu-icon">
                                                </i>Category Section
                                            </a>
                                        </li>
                                        <li>
                                            <a href="homeBoyGirl.html">
                                                <i class="metismenu-icon">
                                                </i>Boy & Girl Section
                                            </a>
                                        </li>
                                        <li>
                                            <a href="homeBanner.html">
                                                <i class="metismenu-icon">
                                                </i>Banner Section
                                            </a>
                                        </li>
                                        <li>
                                            <a href="homeProducts.html">
                                                <i class="metismenu-icon">
                                                </i>Products Section
                                            </a>
                                        </li>
                                        <li>
                                            <a href="homeNewsletter.html">
                                                <i class="metismenu-icon">
                                                </i>Newsletter Section
                                            </a>
                                        </li>
                                    </ul>
                                </li>-->
                                <!-- <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-box2"></i>
                                        Products
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="homeSlider.html">
                                                <i class="metismenu-icon">
                                                </i>Slider
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->
                                <!--
                                <li>
                                    <a href="promoCode.html">
                                        <i class="metismenu-icon pe-7s-news-paper"></i>
                                        Promo Code
                                    </a>
                                </li>
                                <li>
                                    <a href="manageOrder.html">
                                        <i class="metismenu-icon pe-7s-shopbag"></i>
                                        Manage Orders
                                    </a>
                                </li>
                                <li>
                                    <a href="pushNotification.html">
                                        <i class="metismenu-icon pe-7s-bell"></i>
                                        Push Notifications
                                    </a>
                                </li>-->

                                <!--<li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-note2"></i>
                                        Reports
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                       <!--  <li>
                                            <a href="#">
                                                <i class="metismenu-icon"></i>
                                                GST
                                            </a>
                                        </li> --
                                        <li>
                                            <a href="cartReport.html">
                                                <i class="metismenu-icon"></i>
                                                Cart
                                            </a>
                                        </li>
                                        <!--  <li>
                                            <a href="itemReport.html">
                                                <i class="metismenu-icon"></i>
                                                Items
                                            </a>
                                        </li> --
                                        <li>
                                            <a href="stockReport.html">
                                                <i class="metismenu-icon"></i>
                                                Stock
                                            </a>
                                        </li>
                                        <li>
                                            <a href="orderReport.html">
                                                <i class="metismenu-icon"></i>
                                                Orders
                                            </a>
                                        </li>
                                        <li>
                                            <a href="promoCodeReport.html">
                                                <i class="metismenu-icon"></i>
                                                Promo Codes
                                            </a>
                                        </li>
                                        <li>
                                            <a href="thresholdReport.html">
                                                <i class="metismenu-icon"></i>
                                                Threshold
                                            </a>
                                        </li>
                                    </ul>
                                </li>-->

                                <!-- <li>
                                    <a href="#">
                                        <i class="metismenu-icon pe-7s-users"></i>
                                        Access Control
                                        <i class="metismenu-state-icon pe-7s-angle-down caret-left"></i>
                                    </a>
                                    <ul>
                                        <li>
                                            <a href="userRights.html">
                                                <i class="metismenu-icon"></i>
                                                User Rights
                                            </a>
                                        </li>
                                    </ul>
                                </li> -->



                            </ul>
                        </div>
</div>