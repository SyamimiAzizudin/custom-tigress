
		</div><!-- .tg-container -->
	</div><!-- #content -->

	<footer id="colophon" class="footer-layout site-footer" role="contentinfo">

        <div id="top-footer">
            <div class="tg-container">
                <div class="tg-column-wrapper">
                    <div class="tg-column-3 footer-block">
                        <section id="sow-google-map-3" class="widget widget_sow-google-map">
                            <div class="so-widget-sow-google-map so-widget-sow-google-map-base">
                                <div
                                     style="height:480px; width: 100%;"
                                     id="map-canvas">
                                    <script>
                                        var map;
                                        function initMap() {
                                            var location = {lat: 3.119978999999999, lng: 101.67772300000001};
                                            map = new google.maps.Map(document.getElementById('map-canvas'), {
                                                zoom: 16,
                                                center: location
                                            });

                                            var marker = new google.maps.Marker({
                                                position: location,
                                                map: map,
                                                title: "Iconix Consulting Sdn Bhd (969824-U)",
                                                animation: google.maps.Animation.BOUNCE,
                                                draggable: false

                                            });
                                        }
                                    </script>
                                    <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBxY1gV-gl1zIBviFQEgA9Rx13WXqp8HlM&callback=initMap" type="text/javascript"></script>
                                </div>
                        </div>
                        </section>
                    </div>
                    <div class="tg-column-3 footer-block">
                        <section id="text-7" class="widget widget_text">
                            <h3 class="widget-title">Contact Us</h3>
                            <div class="textwidget">
                                <p>Iconix Consulting Sdn Bhd (969824-U)</p>
                                <p>No. A-3-2, Northpoint Offices,<br />
                                    Mid Valley City,<br />
                                    No. 1, Medan Syed Putra Utara,<br />
                                    59200 Kuala Lumpur, Malaysia.<br />
                                    t : +603-2714 3568<br />
                                    f : +603-8073 2688<br />
                                    e : enquiry@iconixconsulting.com</p>
                            </div>
                        </section>
                    </div>
                    <div class="tg-column-3 footer-block">
                        <section id="sow-contact-form-3" class="widget widget_sow-contact-form">
                            <div class="so-widget-sow-contact-form so-widget-sow-contact-form-default-b106b7827691">
                                <form action="http://localhost/tigress/#contact-form-e7d7" method="POST" class="sow-contact-form" id="contact-form-e7d7">
                                    <div class="sow-form-field sow-form-field-name">
                                        <label class="sow-form-field-label-above" for="sow-contact-form-field-your-name-593902eb64fa7">
                                            <strong>Your Name</strong></label>
                                        <span class="sow-field-container">
												<input type="text" name="your-name-593902eb64fa7" id="sow-contact-form-field-your-name-593902eb64fa7" value="" class="sow-text-field"/>
											</span>
                                    </div>
                                    <div class="sow-form-field sow-form-field-email">
                                        <label class="sow-form-field-label-above" for="sow-contact-form-field-your-email-593902eb64fa7">
                                            <strong>Your Email</strong></label>
                                        <span class="sow-field-container">
												<input type="email" name="your-email-593902eb64fa7" id="" value="" class="sow-text-field"/>
											</span>
                                    </div>
                                    <div class="sow-form-field sow-form-field-subject">
                                        <label class="sow-form-field-label-above" for="sow-contact-form-field-subject-593902eb64fa7">
                                            <strong>Subject</strong></label>
                                        <span class="sow-field-container">
												<input type="text" name="subject-593902eb64fa7" id="sow-contact-form-field-subject-593902eb64fa7" value="" class="sow-text-field"/>
											</span>
                                    </div>
                                    <div class="sow-form-field sow-form-field-textarea">
                                        <label class="sow-form-field-label-above" for="sow-contact-form-field-message-593902eb64fa7">
                                            <strong>Message</strong></label>
                                        <span class="sow-field-container">
												<textarea name="message-593902eb64fa7" id="sow-contact-form-field-message-593902eb64fa7" rows="10"></textarea>
											</span>
                                    </div>
                                    <input type="hidden" name="instance_hash" value="e7d7ee0816bba1a4c5d0c51d5b5276e8" />

                                    <div class="sow-submit-wrapper ">
                                        <input type="submit" value="Contact Us"
                                               class="sow-submit">
                                    </div>
                                </form>
                            </div>
                        </section>
                    </div>
                </div>
            </div>
        </div>

        <div id="bottom-footer">
            <div class="tg-container">
                <div class="copyright">
					<span class="copyright-text">
						Copyright &copy;  2017      <a href="index.html">TiGrESS</a>
					</span>
                </div><!-- .copyright -->
            </div>
        </div>

	</footer><!-- #colophon -->

	<?php if ( get_theme_mod( 'flash_disable_back_to_top', '' ) != 1 ) : ?>
	<a href="#masthead" id="scroll-up"><i class="fa fa-chevron-up"></i></a>
	<?php endif; ?>
</div><!-- #page -->

        <link href="wp-content/plugins/logo-carousel-slider/css/owl.carousel.css" rel="stylesheet" type="text/css" media="all" />
        <link href="wp-content/plugins/logo-carousel-slider/css/owl.theme.css" rel="stylesheet" type="text/css" media="all" />
        <link href="wp-content/plugins/logo-carousel-slider/css/owl.transitions.css" rel="stylesheet" type="text/css" media="all" />
        <link href="wp-content/plugins/logo-carousel-slider/css/lcs-styles.css"  rel="stylesheet" type="text/css" media="all" />
        <link href="wp-content/plugins/so-widgets-bundle/widgets/google-map/css/style.css" rel="stylesheet" type="text/css" media="all" />

        <script type="text/javascript" src="wp-content/plugins/instagram-feed/js/sb-instagram.js"></script>
        <script type="text/javascript" src="wp-content/plugins/so-widgets-bundle/js/lib/imagesloaded.pkgd.js"></script>
        <script type="text/javascript" src="wp-content/plugins/so-widgets-bundle/widgets/image-grid/js/image-grid.min.js"></script>
        <script type="text/javascript" src="wp-content/themes/flash/js/jquery.sticky.min.js"></script>
        <script type="text/javascript" src="wp-content/themes/flash/js/jquery.nav.min.js"></script>
        <script type="text/javascript" src="wp-content/themes/flash/js/flash.min.js"></script>
        <script type="text/javascript" src="wp-content/themes/flash/js/skip-link-focus-fix.js"></script>
        <script type="text/javascript" src="wp-content/themes/flash/js/swiper.jquery.min.jS"></script>
        <script type="text/javascript" src="wp-content/themes/flash/js/isotope.pkgd.min.jS"></script>
        <script type="text/javascript" src="wp-includes/js/wp-embed.min.js"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var panelsStyles = {"fullContainer":"body"};
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-content/plugins/siteorigin-panels/js/styling-25.min.js"></script>
        <script type="text/javascript" src="wp-content/plugins/logo-carousel-slider/js/owl.carousel.min.js"></script>
        <script type="text/javascript">
            /* <![CDATA[ */
            var soWidgetsGoogleMap = {"geocode":{"noResults":"There were no results for the place you entered. Please try another."}};
            /* ]]> */
        </script>
        <script type="text/javascript" src="wp-content/plugins/so-widgets-bundle/widgets/google-map/js/js-map.min.js"></script>
        <script type="text/javascript" src="wp-content/plugins/so-widgets-bundle/widgets/google-map/js/js-map.js"></script>
        <script type="text/javascript" >document.body.className = document.body.className.replace("siteorigin-panels-before-js","");</script>

        <?php wp_footer(); ?>

    </body>
</html>
