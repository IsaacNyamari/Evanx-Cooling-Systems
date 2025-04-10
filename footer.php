<!-- Footer Start -->
<div class="container-fluid bg-dark footer mt-5 pt-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <div class="row g-5">
            <div class="col-md-12">
                <h1 class="text-white mb-4">
                    <img class="img-fluid me-3" src="img/icon/icon-02-light.png" alt="">Evanx Cooling System
                </h1>
                <span>
                    At Evanx Cooling System, we specialize in providing advanced cooling and refrigeration solutions for homes, businesses, and institutions. Our commitment to quality, innovation, and responsive service has made us a trusted partner in Kenya and beyond.
                </span>
            </div>
         
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Get In Touch</h5>
                <p><i class="fa fa-map-marker-alt me-3"></i>Nairobi, Kenya</p>
                <p><i class="fa fa-phone-alt me-3"></i>+254 707 856 908</p>
                <p><i class="fa fa-envelope me-3"></i>info@evanxcoolingsystems.co.ke</p>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Our Services</h5>
                <a class="btn btn-link" href="cold-room.php">Cold Room Installation</a>
                <a class="btn btn-link" href="refrigeration.php">Refrigeration Repair</a>
                <a class="btn btn-link" href="maintenance.php">Preventive Maintenance</a>
                <a class="btn btn-link" href="consultation.php">Cooling System Consultation</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="about.php">About Us</a>
                <a class="btn btn-link" href="contact.php">Contact</a>
                <a class="btn btn-link" href="service.php">Services</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <!-- <h5 class="text-light mb-4">Follow Us</h5> -->
                <div class="d-flex">
                    <!-- <a class="btn btn-square rounded-circle me-1" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="#"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-square rounded-circle me-1" href="#"><i class="fab fa-linkedin-in"></i></a> -->
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid copyright">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                    &copy; <a href="./">Evanx Cooling System</a>, All Rights Reserved.
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Footer End -->

<!-- Back to Top -->
<a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-circle back-to-top"><i class="bi bi-arrow-up"></i></a>


<!-- JavaScript Libraries -->
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
<script src="lib/wow/wow.min.js"></script>
<script src="lib/easing/easing.min.js"></script>
<script src="lib/waypoints/waypoints.min.js"></script>
<script src="lib/owlcarousel/owl.carousel.min.js"></script>
<script src="lib/counterup/counterup.min.js"></script>
<script src="lib/parallax/parallax.min.js"></script>

<!-- Template Javascript -->
<script src="js/main.js"></script>
<script>
    document.querySelector("form") ? document.querySelector("form").addEventListener("submit", function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        fetch("sendmail.php", {
                method: "POST",
                body: formData,
            })
            .then(res => res.json())
            .then(data => {
                showToast(data.status === "success" ? "success" : "danger", data.message);
                if (data.status === "success") {
                    this.reset(); // clear form
                }
            })
            .catch(() => {
                showToast("danger", "Something went wrong. Please try again.");
            });
    }) : "";

    function showToast(type, message) {
        const toastHTML = `
    <div class="toast align-items-center text-white bg-${type} border-0 show position-fixed bottom-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="d-flex">
            <div class="toast-body">${message}</div>
            <button type="button" class="btn-close btn-close-white me-2 m-auto" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
    </div>`;
        document.body.insertAdjacentHTML("beforeend", toastHTML);
        setTimeout(() => {
            document.querySelector(".toast:last-child")?.remove();
        }, 5000);
    }
</script>

</body>

</html>