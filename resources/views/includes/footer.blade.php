<!--footer -->
<footer class="py-lg-5 py-3">
    <div class="container-fluid px-lg-5 px-3">
        <div class="row footer-top-w3layouts">
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>About Us</h3>
                </div>
                <div class="footer-text">
                <p>{{$about->description}}</p>
                    <ul class="footer-social text-left mt-lg-4 mt-3">

                        <li class="mx-2">
                            <a href="{{$about->fb_url}}">
                                <span class="fab fa-facebook-f"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="{{$about->twitter_url}}">
                                <span class="fab fa-twitter"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="{{$about->google_url}}">
                                <span class="fab fa-google-plus-g"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="{{$about->link_url}}">
                                <span class="fab fa-linkedin-in"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="{{$about->rss_link}}">
                                <span class="fas fa-rss"></span>
                            </a>
                        </li>
                        <li class="mx-2">
                            <a href="{{$about->other}}">
                                <span class="fab fa-vk"></span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>Get in touch</h3>
                </div>
                <div class="contact-info">
                    <h4>Location :</h4>
                    <p>{{$contact->location}}</p>
                    <div class="phone">
                        <h4>Contact :</h4>
                        <p>Phone :{{$contact->country_code}} {{$contact->phone}}</p>
                        <p>Email :
                            <a href="mailto:{{$contact->email}}">{{$contact->email}}</a>
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>Quick Links</h3>
                </div>
                <ul class="links">
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>
                        <a href="about.html">About</a>
                    </li>
                    <li>
                        <a href="404.html">Error</a>
                    </li>
                    <li>
                        <a href="shop.html">Shop</a>
                    </li>
                    <li>
                        <a href="contact.html">Contact Us</a>
                    </li>
                </ul>
            </div>
            <div class="col-lg-3 footer-grid-w3ls">
                <div class="footer-title">
                    <h3>Sign up for your offers</h3>
                </div>
                <div class="footer-text">
                    <p>{{$contact->rights_company_data}}</p>
                    <form action="#" method="post">
                        <input class="form-control" type="email" name="Email" placeholder="Enter your email..." required="">
                        <button class="btn1">
                            <i class="far fa-envelope" aria-hidden="true"></i>
                        </button>
                        <div class="clearfix"> </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="copyright-w3layouts mt-4">
            <p class="copy-right text-center ">&copy; {{$contact->rights_data}} |
                <a target="_blank" href="{{$contact->company_url}}"> {{$contact->rights_company_name}} </a>
            </p>
        </div>
    </div>
</footer>
<!-- //footer -->

<!--jQuery-->
<script src={{URL::asset("assets/js/jquery-2.2.3.min.js")}}></script>
<!-- newsletter modal -->
<!-- Modal -->
<!-- Modal -->
@if ($offer_box->isActive)
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">

                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body text-center p-5 mx-auto mw-100">
            <h6>{{$offer_box->title}}</h6>
                <h3>{{$offer_box->description}}</h3>
                <div class="login newsletter">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label class="mb-2">{{$offer_box->textbox_label}}</label>
                            <input type="email" class="form-control" id="exampleInputEmail2" aria-describedby="emailHelp" placeholder="" required="">
                        </div>
                        <button type="submit" class="btn btn-primary submit mb-4">{{$offer_box->button_value}}</button>
                    </form>
                    <p class="text-center">
                        <a href={{$offer_box->href_url}}>{{$offer_box->href_tittle}}</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</div>
@endif
<script>
    $(document).ready(function () {
        $("#myModal").modal();
    });
</script>
<!-- // modal -->

<!--search jQuery-->
<script src={{URL::asset("assets/js/modernizr-2.6.2.min.js")}}></script>
<script src={{URL::asset("assets/js/classie-search.js")}}></script>
<script src={{URL::asset("assets/js/demo1-search.js")}}></script>
<!--//search jQuery-->
<!-- cart-js -->
<script src={{URL::asset("assets/js/minicart.js")}}></script>
<script>
    googles.render();

    googles.cart.on('googles_checkout', function (evt) {
        var items, len, i;

        if (this.subtotal() > 0) {
            items = this.items();

            for (i = 0, len = items.length; i < len; i++) {
                console.log(items)
            }
        }
    });
</script>
<!-- //cart-js -->
<script>
    $(document).ready(function () {
        $(".button-log a").click(function () {
            $(".overlay-login").fadeToggle(200);
            $(this).toggleClass('btn-open').toggleClass('btn-close');
        });
    });
    $('.overlay-close1').on('click', function () {
        $(".overlay-login").fadeToggle(200);
        $(".button-log a").toggleClass('btn-open').toggleClass('btn-close');
        open = false;
    });
</script>
<!-- carousel -->
<!-- Count-down -->
<script src={{ URL::asset("assets/js/simplyCountdown.js") }}></script>
<link href={{ URL::asset("assets/css/simplyCountdown.css") }} rel='stylesheet' type='text/css' />
<script>
    var d = new Date();
    simplyCountdown('simply-countdown-custom', {
        year: d.getFullYear(),
        month: d.getMonth() + 2,
        day: 1
    });
</script>
<!--// Count-down -->
<script src={{URL::asset("assets/js/owl.carousel.js")}}></script>
<script>
    $(document).ready(function () {
        $('.owl-carousel').owlCarousel({
            loop: true,
            margin: 10,
            responsiveClass: true,
            responsive: {
                0: {
                    items: 1,
                    nav: true
                },
                600: {
                    items: 2,
                    nav: false
                },
                900: {
                    items: 3,
                    nav: false
                },
                1000: {
                    items: 4,
                    nav: true,
                    loop: false,
                    margin: 20
                }
            }
        })
    })
</script>

<!-- //end-smooth-scrolling -->


<!-- dropdown nav -->
<!--quantity-->
<script>
    $('.value-plus').on('click', function () {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) + 1;
        divUpd.text(newVal);
    });

    $('.value-minus').on('click', function () {
        var divUpd = $(this).parent().find('.value'),
            newVal = parseInt(divUpd.text(), 10) - 1;
        if (newVal >= 1) divUpd.text(newVal);
    });
</script>
<!--quantity-->
<script>
    $(document).ready(function () {
        $(".dropdown").hover(
            function () {
                $('.dropdown-menu', this).stop(true, true).slideDown("fast");
                $(this).toggleClass('open');
            },
            function () {
                $('.dropdown-menu', this).stop(true, true).slideUp("fast");
                $(this).toggleClass('open');
            }
        );
    });
</script>
<!-- //dropdown nav -->
<script src={{URL::asset("assets/js/move-top.js")}}></script>
<script src={{URL::asset("assets/js/easing.js")}}></script>
<script>
    jQuery(document).ready(function($) {
        $(".scroll").click(function(event) {
            event.preventDefault();
            $('html,body').animate({
                scrollTop: $(this.hash).offset().top
            }, 900);
        });
    });
</script>
<script>
    $(document).ready(function() {
        /*
                                var defaults = {
                                      containerID: 'toTop', // fading element id
                                    containerHoverID: 'toTopHover', // fading element hover id
                                    scrollSpeed: 1200,
                                    easingType: 'linear'
                                 };
                                */

        $().UItoTop({
            easingType: 'easeOutQuart'
        });

    });
</script>
<!--// end-smoth-scrolling -->

<!-- easy-responsive-tabs -->
		<script src={{URL::asset("assets/js/easy-responsive-tabs.js")}}></script>
		<script>
			$(document).ready(function () {
				$('#horizontalTab').easyResponsiveTabs({
					type: 'default', //Types: default, vertical, accordion
					width: 'auto', //auto or any width like 600px
					fit: true, // 100% fit in a container
					closed: 'accordion', // Start closed if in accordion view
					activate: function (event) { // Callback function if tab is switched
						var $tab = $(this);
						var $info = $('#tabInfo');
						var $name = $('span', $info);
						$name.text($tab.text());
						$info.show();
					}
				});
				$('#verticalTab').easyResponsiveTabs({
					type: 'vertical',
					width: 'auto',
					fit: true
				});
			});
		</script>
	<!--close-->
	<script>
		$(document).ready(function (c) {
			$('.close1').on('click', function (c) {
				$('.rem1').fadeOut('slow', function (c) {
					$('.rem1').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close2').on('click', function (c) {
				$('.rem2').fadeOut('slow', function (c) {
					$('.rem2').remove();
				});
			});
		});
	</script>
	<script>
		$(document).ready(function (c) {
			$('.close3').on('click', function (c) {
				$('.rem3').fadeOut('slow', function (c) {
					$('.rem3').remove();
				});
			});
		});
	</script>
	<!--//close-->
		<!-- credit-card -->
		<script type="text/javascript" src={{URL::asset("assets/js/creditly.js")}}></script>
		<link rel="stylesheet" href={{URL::asset("assets/css/creditly.css")}} type="text/css" media="all" />

		<script type="text/javascript">
			$(function () {
				var creditly = Creditly.initialize(
					'.creditly-wrapper .expiration-month-and-year',
					'.creditly-wrapper .credit-card-number',
					'.creditly-wrapper .security-code',
					'.creditly-wrapper .card-type');

				$(".creditly-card-form .submit").click(function (e) {
					e.preventDefault();
					var output = creditly.validate();
					if (output) {
						// Your validated credit card output
						console.log(output);
					}
				});
			});
		</script>
		<!-- //credit-card -->


   <!-- FlexSlider -->

        <script src={{URL::asset("assets/js/jquery.flexslider.js")}}></script>
		<script>
			// Can also be used with $(document).ready()
			$(window).load(function () {
				$('.flexslider1').flexslider({
					animation: "slide",
					controlNav: "thumbnails"
				});
			});
		</script>
		<!-- //FlexSlider-->
<script src={{URL::asset("assets/js/bootstrap.js")}}></script>
<!-- js file -->

<!-- price range (top products) -->
<script src={{URL::asset("assets/js/jquery-ui.js")}}></script>
{{-- <script src={{URL::asset("assets/js/star.js")}}></script> --}}
<script>
    //<![CDATA[
    $(window).load(function () {
        $("#slider-range").slider({
            range: true,
            min: 0,
            max: 9000,
            values: [50, 6000],
            slide: function (event, ui) {
                $("#amount").val("₹" + ui.values[0] + " - ₹" + ui.values[1]);
                $("#from").val(ui.values[0]);
                $("#to").val(ui.values[1]);
            }
        });
        $("#amount").val("₹" + $("#slider-range").slider("values", 0) + " - ₹" + $("#slider-range").slider("values", 1));
        $("#from").val( $("#slider-range").slider("values", 0)) ;
        $("#to").val($("#slider-range").slider("values", 1)) ;

    }); //]]>
</script>

<!-- //price range (top products) -->
</body>

</html>
