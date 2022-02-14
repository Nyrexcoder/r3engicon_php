<?php
$page= 'about';
include "header.php";

?>
            <!-- Page Header Start -->
            <div class="page-header">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>About Us</h2>
                        </div>
                        <div class="col-12">
                            <a href="index.php">Home</a>
                            <a href="">About Us</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Page Header End -->


            <!-- About Start -->
            <div class="about wow fadeInUp" data-wow-delay="0.1s">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-5 col-md-6">
                            <div class="about-img">
                                <img src="img/about_ccexpress.jpeg" alt="Image">
                            </div>
                        </div>
                        <div class="col-lg-7 col-md-6">
                            <div class="section-header text-left">
                                <p>Welcome to R3 Star Engicon Pvt. Ltd.</p>
                                <h2>The objects to be pursued by the company on its incorporation</h2>
                            </div>
                            <div class="about-text">
                                <p>
                                To carry on the business of contractors, sub-contractors, quasi contractors whether for government or for semi government bodies or corporation or company or society or body corporate or firms or individuals or schools or clubs or other bodies or private works and to undertake contracts and sub contracts relating to construction, modification, repairing, alteration, construction, removal, redecoration, redesigning, enlarging, improving, engineering and designing of civil work, building for whatever use,roads, approach roads, streets, circles, squares, parks, gardens, statues, parking places,<span id="dots">...</span><span id="more" style="display:none;"> bridges, dams, water courses and reservoirs, tunnels, earth works, sewers, tanks, drains, sewage, light houses, towers, transmission towers, wires, cables, maintain generators, machinery, electrical equipment and cables, wires, lines, accumulators, lamps, fitting tubes, pipe lines, underground cables, railway tracks, railway sidings, run ways ship yards, stock yards, culverts, channels, construction and maintenance of any installation or transmission of energy whether on turnkey basis or on labour contracts or otherwise.</span>
                                </p>
                                <p>
                                    <!-- Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus nec pretium mi. Curabitur facilisis ornare velit non vulputate. Aliquam metus tortor, auctor id gravida condimentum, viverra quis sem. Curabitur non nisl nec nisi scelerisque maximus. Aenean consectetur convallis porttitor. Aliquam interdum at lacus non blandit. -->
                                </p>
                                <a class="btn" onclick="myFunction()" id="myBtn">Read more</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- About End -->

<?php

include "footer.php";

?>

<script>
    function myFunction() {
    var dots = document.getElementById("dots");
    var moreText = document.getElementById("more");
    var btnText = document.getElementById("myBtn");

     if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more";
    moreText.style.display = "none";
    } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less";
    moreText.style.display = "inline";
  }
}
</script>

