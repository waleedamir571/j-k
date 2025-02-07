<section class="footer-section">
        <div class="container">
            <figure class="footer-sideshape mb-0">
                <img src="assets/images/footer-sideshape.png" alt="" class="img-fluid">
            </figure>
            <div class="middle-portion">
                <div class="row">
                    <div class="col-lg-4 col-md-5 col-sm-6 col-12">
                        <a href="#">
                            <figure class="footer-logo">
                                <img src="assets/images/home/footer-logo.png" class="img-fluid" alt="">
                            </figure>
                        </a>

                    </div>
                    <div class="col-lg-2 col-md-3 col-sm-12 col-12 d-md-block d-none">
                        <div class="links">
                            <h4 class="heading text-white">Useful Links</h4>
                            <ul class="list-unstyled mb-0">
                                <li><i class="fa-solid fa-angle-right"></i><a href="index.php"
                                        class=" text-size-16 text text-decoration-none">Home</a></li>
                                <li><i class="fa-solid fa-angle-right"></i><a href="about.php"
                                        class=" text-size-16 text text-decoration-none">About</a></li>
                                <li><i class="fa-solid fa-angle-right"></i><a href="services.php"
                                        class=" text-size-16 text text-decoration-none">Services</a></li>
                                <li><i class="fa-solid fa-angle-right"></i><a href="#"
                                        class=" text-size-16 text text-decoration-none">Projects</a></li>
                                <li><i class="fa-solid fa-angle-right"></i><a href="contact-us.php"
                                        class=" text-size-16 text text-decoration-none">Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-2 col-sm-12 col-12 d-lg-block d-none">
                        <div class="links list-pd">
                            <h4 class="heading text-white">Our Services</h4>
                            <ul class="list-unstyled mb-0">
                                <li><i class="fa-solid fa-angle-right"></i><a href="#"
                                        class=" text-size-16 text text-decoration-none">Robotic Automation</a></li>
                                <li><i class="fa-solid fa-angle-right"></i><a href="#"
                                        class=" text-size-16 text text-decoration-none">Testimonial</a></li>
                                <li><i class="fa-solid fa-angle-right"></i><a href="#"
                                        class=" text-size-16 text text-decoration-none">Predective Analysis</a></li>
                                <li><i class="fa-solid fa-angle-right"></i><a href="#"
                                        class=" text-size-16 text text-decoration-none">Our Team</a></li>
                                <li><i class="fa-solid fa-angle-right"></i><a href="#"
                                        class=" text-size-16 text text-decoration-none">Faq</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12 d-sm-block">
                        <div class="icon">
                            <h4 class="heading text-white">Contact us</h4>
                            <ul class="list-unstyled mb-0">
                                <li class="text">
                                    <i class="fa fa-phone fa-icon footer-location"></i>
                                    <a href="tel:+4733378901"
                                        class="mb-0 text text-decoration-none text-size-16">713.290.1212</a>
                                </li>
                                <li class="text">
                                    <i class="fa fa-envelope fa-icon footer-location"></i>
                                    <a href="mailto:info@repay.com"
                                        class="mb-0 text text-decoration-none text-size-16">Info@Artelligence.com</a>
                                </li>
                                <li class="text">
                                    <i class="fa-solid fa-location-dot footer-location footer-location3"></i>
                                    <p class="text-size-16">LLC 3434 Lang Rd.Houston TX 77092</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div id="fixed-form-container">
                <!-- <div class="image">
                    <figure class="footer-image mb-0">
                        <img src="assets/images/footer-image.png" alt="" class="img-fluid">
                    </figure>
                </div> -->
                <div class="body">
                    <form id="contactpage1" method="POST" action="">
                        <div class="form-group">
                            <input type="text" class="form-control" placeholder="Your Name:" name="name">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" placeholder="Your Email:" name="emailid">
                        </div>
                        <div class="form-group">
                            <input type="tel" class="form-control" placeholder="Phone:" name="phone">
                        </div>
                        <div class="form-group">
                            <textarea class="form_style" placeholder="Message" rows="3" name="msg"></textarea>
                        </div>
                        <button type="submit" class="submit_now text-decoration-none">Submit Now</button>
                    </form>
                </div>
            </div>
            <div class="copyright">
                <div class="row">
                    <div class="col-12">
                        <p class="mb-0 text-white">Copyright © 2024-25 , JFK Media Agency All Rights Reserved..</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest compiled JavaScript -->
    <script src="assets/js/jquery-3.6.0.min.js"> </script>
    <script src="assets/js/bootstrap.min.js"> </script>
    <script src="assets/js/video_link.js"></script>
    <script src="assets/js/video.js"></script>
    <script src="assets/js/counter.js"></script>
    <script src="assets/js/custom.js"></script>
    <script src="assets/js/animation_links.js"></script>
    <script src="assets/js/animation.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    
</body>
</html>

<script>
document.addEventListener("DOMContentLoaded", function () {
    let banner = document.querySelector(".banner_outer");

    if (!banner) return; // Agar element na mile to kuch na kare

    let path = window.location.pathname;
    let newBg = "";

    // Set background image based on page
    if (path.includes("services.php")) {
        newBg = "assets/images/services/services.png";
    } else if (path.includes("about.php")) {
        newBg = "assets/images/services/aboutbg.png";
    } else if (path.includes("index.php")) {
        newBg = "assets/images/home/head.png";
    }
    else if (path.includes("contact-us.php")) {
        newBg = "assets/images/services/contact.png";
    }
    else if (path.includes("publishing.php")) {
        newBg = "assets/images/services/contact.png";
    }
    else if (path.includes("careers.php")) {
        newBg = "assets/images/services/contact.png";
    }

    if (newBg) {
        // Remove old background CSS completely
        banner.style.removeProperty("background");

        // Forcefully apply new background image
        banner.style.backgroundImage = `url('${newBg}')`;
        banner.style.backgroundPosition = "center";
        banner.style.backgroundRepeat = "no-repeat";
        banner.style.backgroundSize = "cover";

        console.log("New Background Applied:", newBg);
    }
});


</script>

<script>
    $(document).ready(function () {
        $(".image-box").hover(
            function () {
                $(this).siblings().css("width", "50%");
            },
            function () {
                $(".image-box").css("width", "100%");
            }
        );
    });


</script>


<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    slidesPerView: 3,
    spaceBetween: 20,
    centeredSlides: true, // Center the active slide
    loop: true, // Make the slider loop
    pagination: {
        el: ".swiper-pagination",
        clickable: true,
    },
    breakpoints: {
        768: {
            slidesPerView: 3, // Show 3 slides on tablet and up
        },
        320: {
            slidesPerView: 1, // Show 1 slide on mobile
        },
    },
});

</script>

<script>
document.addEventListener("DOMContentLoaded", function () {
    // Get the current page URL
    let currentLocation = window.location.pathname.split("/").pop();

    // Get all nav links
    let navLinks = document.querySelectorAll(".navbar-nav .nav-item .nav-link");

    navLinks.forEach(link => {
        let linkPath = link.getAttribute("href");

        // If the link matches the current page, add 'active' class
        if (linkPath === currentLocation) {
            link.classList.add("active");
        }
    });
});



</script>

