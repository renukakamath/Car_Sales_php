 
 <!--/footer-->
    <footer id="footer" class="wthree-footerhny">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6 footer-contact pe-lg-5">
                        <div class="footer-logo mb-3">
                            <a class="navbar-brand" href="index.html"><span>Car</span> Transko</a>
                        </div>
                        <p>Lorem ipsum viverra feugiat. Pellen tesque libero ut justo, ultrices in ligula. Semper at
                            tempufddfel. Lorem ipsum dolor sit amet Semper at elit.</p>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Useful Links</h4>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> <a href="#index">Home</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#us">About us</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#serve">Services</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#terms">Terms of service</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#privacy">Privacy policy</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-2 col-md-6 footer-links">
                        <h4>Our Services</h4>
                        <ul>
                            <li><i class="fas fa-angle-right"></i> <a href="#blogs">Blog Posts</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#stats">Stats</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Plans">Plans</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Deals">Deals</a></li>
                            <li><i class="fas fa-angle-right"></i> <a href="#Offers">Offers</a></li>
                        </ul>
                    </div>

                    <div class="col-lg-4 col-md-6 footer-newsletter ps-lg-4">
                        <h4>Join Our Newsletter</h4>
                        <p>Get Updates By Subscribe Our Weekly Newsletter</p>
                        <form action="" class="d-flex" method="post">
                            <input type="email" name="email" placeholder="Enter Your Email" required="">
                            <button type="submit" class="btn btn-primary btn-style">Subscribe</button>

                        </form>
                    </div>

                </div>
            </div>
        </div>

        <div class="container d-md-flex py-4">

            <div class="me-md-auto text-center text-md-start">
                <div class="copyright">
                    <p class="copy-footer-29">© 2021 Car Transko. All rights reserved | Designed by <a href="https://w3layouts.com">W3layouts</a></p>
                </div>

            </div>
            <div class="social-links text-center text-md-end pt-3 pt-md-0">
                <a href="#" class="twitter"><i class="fab fa-twitter"></i></a>
                <a href="#" class="facebook"><i class="fab fa-facebook-f"></i></a>
                <a href="#" class="instagram"><i class="fab fa-instagram"></i></a>
                <a href="#" class="google-plus"><i class="fab fa-google-plus-g"></i></a>
                <a href="#" class="linkedin"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
        <button onclick="topFunction()" id="movetop" title="Go to top" style="display: block;">
            <span class="fa fa-angle-up"></span>
        </button>
        <script>
            // When the user scrolls down 20px from the top of the document, show the button
            window.onscroll = function() {
                scrollFunction()
            };

            function scrollFunction() {
                if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                    document.getElementById("movetop").style.display = "block";
                } else {
                    document.getElementById("movetop").style.display = "none";
                }
            }

            // When the user clicks on the button, scroll to the top of the document
            function topFunction() {
                document.body.scrollTop = 0;
                document.documentElement.scrollTop = 0;
            }

        </script>
        <!-- //move top -->
    </footer><!-- End Footer -->


    <!-- Template JavaScript -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/theme-change.js"></script>
   
    <!-- MENU-JS -->
    <script>
        $(window).on("scroll", function() {
            var scroll = $(window).scrollTop();

            if (scroll >= 80) {
                $("#site-header").addClass("nav-fixed");
            } else {
                $("#site-header").removeClass("nav-fixed");
            }
        });
        //Main navigation Active Class Add Remove
        $(".navbar-toggler").on("click", function() {
            $("header").toggleClass("active");
        });
        $(document).on("ready", function() {
            if ($(window).width() > 991) {
                $("header").removeClass("active");
            }
            $(window).on("resize", function() {
                if ($(window).width() > 991) {
                    $("header").removeClass("active");
                }
            });
        });

    </script>
    <!-- //MENU-JS -->
    <!-- disable body scroll which navbar is in active -->
    <script>
        $(function() {
            $('.navbar-toggler').click(function() {
                $('body').toggleClass('noscroll');
            })
        });

    </script>
    <!-- //disable body scroll which navbar is in active -->
    <!-- //bootstrap -->
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>
