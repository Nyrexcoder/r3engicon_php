            <!-- Footer Start -->
            <div class="footer wow fadeIn" data-wow-delay="0.3s">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-contact">
                                <h2>Office Contact</h2>
                                <p><i class="fa fa-map-marker-alt"></i>Address - 1197/3, Ground Floor, Surbhi Vihar Colony Harishchandra Nagar, Near Mithapur Bus Stand Dhelwan Patna BR 800020 IN.</p>
                                <!-- <p><i class="fa fa-phone-alt"></i>+012 345 67890</p> -->
                                <p><i class="fa fa-envelope"></i><a style="color:white;" href="mailto:r3starengicon@gmail.com">r3starengicon@gmail.com</a></p>
                                <!-- <div class="footer-social">
                                    <a href=""><i class="fab fa-twitter"></i></a>
                                    <a href=""><i class="fab fa-facebook-f"></i></a>
                                    <a href=""><i class="fab fa-youtube"></i></a>
                                    <a href=""><i class="fab fa-instagram"></i></a>
                                    <a href=""><i class="fab fa-linkedin-in"></i></a>
                                </div> -->
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Services Areas</h2>
                                <a href="building.php">Building Construction</a>
                                <a href="power.php">Power</a>
                                <a href="infrastructure.php">Infrastructure</a>
                                <a href="industrial.php">Industrial</a>
                                <a href="roads.php">Roads</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="footer-link">
                                <h2>Useful Pages</h2>
                                <a href="about.php">About Us</a>
                                <a href="bod.php">Board of Directors</a>
                                <a href="comp.php">Compliances</a>
                                <a href="portfolio.php">Projects</a>
                                <a href="contact.php">Contact Us</a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-3">
                            <div class="newsletter">
                                <h2>Newsletter</h2>
                                <p>
                                    Join for us please subscribe our newsletter.
                                </p>
                                <div class="form">
                                    <input class="form-control" id="newsletter" placeholder="Email here">
                                    <button class="btn">Submit</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="container footer-menu">
                    <div class="f-menu">
                        <a href="">Terms of use</a>
                        <a href="">Privacy policy</a>
                        
                    </div>
                    <!-- <h2>Disclaimer</h2><p>Welcome to R3 Star Engicon pvt. ltd. website. The contents of this website are for general informational purposes only.</p> -->
                </div>
                <div class="container copyright">
                    <div class="row">
                        <div class="col-md-6">
                            <p>&copy; <a href="index.php">R3 Star Engicon</a>, All Right Reserved.</p>
                        </div>
                        <div class="col-md-6">
                            <p>Developed By <a href="#">nyrexDeveloper</a></p>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Footer End -->

            <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
        </div>

        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
        <script src="lib/easing/easing.min.js"></script>
        <script src="lib/wow/wow.min.js"></script>
        <script src="lib/owlcarousel/owl.carousel.min.js"></script>
        <script src="lib/isotope/isotope.pkgd.min.js"></script>
        <script src="lib/lightbox/js/lightbox.min.js"></script>
        <script src="lib/waypoints/waypoints.min.js"></script>
        <script src="lib/counterup/counterup.min.js"></script>
        <script src="lib/slick/slick.min.js"></script>

        <!-- Template Javascript -->
        <script src="js/main.js"></script>

        <!-- <script>
            $(document).ready(function(){
                $(".btn").click(function(e){
                    event.preventDefault();
                    var newsletter = $("#newsletter").val();
                    if(newsletter == ""){
                        alert("please fill email first");
                    }else{
                       var pattern = /^[\w-\.]+@([\w-]+\.)+[\w-]{2,4}$/g
                        if(pattern.test(newsletter)){
                            $.ajax({
                                url : "newsletter.php",
                                type : "post",
                                data : {newsletter :newsletter},
                                success : function(data){
                                   if(data == 3){
                                       alert("newsletter sumbit");
                                   }else{
                                       alert("faild");
                                   }
                                }
                            })
                        }else{
                            alert("bad");
                        }
                    }
                })
            })
        </script> -->



    </body>
</html>
