    <?php include('header.php');?>
    <div id="content" class="site-content">
        <div id="tropical-banner" class=" text-center clearfix">
            <img src=" images/banner.jpg" alt="banner"/>
            <div class="container banner-contents clearfix">
                <h2 class="template-title p-name"><strong>Contact</strong></h2>
            </div>
            <div class="breadcrumb-wrapper clearfix">
                <div class="container">
                    <ol class="breadcrumb">
                        <li><a href="index.php" >Home</a></li>
                        <li class="active">Contact</li>
                    </ol>
                </div>
            </div>
            <span class="overlay"></span>
        </div>

        <section class="contact-template clearfix">
            <h6 class="hide">Title</h6>
            <div class="container">
                <div class="row">
                    <div class="col-md-9 col-sm-8">
                        <section class="contact-details animatedParent clearfix">
                            <h3 class="contact-title entry-title animated fadeInLeftShort">get in touch</h3>
                            <div class="row">
                                <div class="col-md-4">
                                    <address class="animated fadeInDownShort">
                                        <h5 class="title"><i class="fa fa-map-marker"></i>address<span></span></h5>
                                        <p>
                                            Old Fort Tourist Resort, <br/>
                                            Nagar Chitral, Pakistan.
                                        </p>
                                    </address>
                                    <div class="email-section animated fadeInUpShort">
                                        <h5 class="title"><i class="fa fa-envelope"></i>Email address<span></span></h5>
                                        <a class="email" href="#">info@oldforttravels.com</a>
                                    </div>
                                    <div class="phone-section animated fadeInDownShort">
                                        <h5 class="title"><i class="fa fa-mobile"></i>Phone Number <span></span></h5>
                                        <span class="number">+92 324 5500015</span>
                                    </div>
                                </div>
                                <div class="col-md-8">
                                    <div class="map-wrap animated fadeInRightShort clearfix">
                                        <div id="location-map"></div>
                                    </div>
                                </div>
                            </div>
                        </section>
                        <section class="contact-from animatedParent clearfix">
                            <h3 class="respond-title animated fadeInDownShort">send us your message</h3>
                            <form id="contact_form" action="contact_form_handler.php" method="post">
                                <fieldset class="animated fadeInLeftShort">
                                    <p class="form-name">
                                        <label for="name">name <span class="required">*</span></label>
                                        <input id="name" name="name" type="text" value="" required="required">
                                    </p>
                                    <p class="form-email">
                                        <label for="email">Email <span class="required">*</span></label>
                                        <input id="email" name="email" data-rule-required="true" data-rule-email="true" data-msg-required="Please enter your email address" data-msg-email="Please enter a valid email address" aria-required="true" required="required" aria-invalid="true">
                                    </p>
                                    <p class="form-url">
                                        <label for="number">Phone Number <span class="required">*</span></label>
                                        <input id="number" name="number" type="text" value="" required="required">
                                    </p>
                                </fieldset>
                                <fieldset class="animated fadeInRightShort">
                                    <p class="form-comment">
                                        <label for="message">Your Message</label>
                                        <textarea id="message" name="message" cols="45" rows="5" ></textarea>
                                    </p>
                                    <p class="form-submit">
                                        <input name="submit" type="submit" id="submit" class="submit" value="Post Message">
                                    </p>
                                    <img src="images/loader3.gif" id="contact-loader" alt="Loading...">
                                </fieldset>
                                <div id="error-container"></div>
                                <div id="response-container"></div>
                            </form>
                        </section>
                    </div>
                    <div class="col-md-3 col-sm-4">
                        <aside class="sidebar">
                            <section class="widget widget-text animatedParent">
                                <h5 class="widget-title animated fadeInDownShort">about us</h5>
                                <p class="animated fadeInUpShort">  Our mission is to provide you with the most comprehensive and complete planning and travel services so that you can have the adventure of a lifetime that is exciting, comfortable, and worry-free. </p>
                                <p>
                                    We look forward to showing you the beautiful Pakistan.
                                </p>
                            </section>
                            <section class="widget contact-widget clearfix animatedParent">
                                <h5 class="widget-title animated fadeInDownShort">Contact us</h5>
                                <address class="animated fadeInUpShort">
                                    <strong> Address:</strong> Old Fort Tourist Resort, Nagar Chitral, Pakistan.
                                </address>
                                <p class="phone-number animated fadeInUpShort"><strong>Phone:</strong> +92 324 5500015</p>
                                <p class="email animated fadeInUpShort"><strong>Email:</strong> info@oldforttravels.com </p>
                                <ul class="social-nav text-center clearfix animated fadeInUpShort">
                                    <li><a href="http://www.facebook.com/oldforttravels" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                    <li><a href="http://www.twitter.com/oldforttravels" target="_blank"><i class="fa fa-twitter"></i></a></li>
                                </ul>
                            </section>
                        </aside>
                    </div>
                </div>
            </div>
        </section>



    </div><!-- .site-content -->

  <?php include('footer.php');?>