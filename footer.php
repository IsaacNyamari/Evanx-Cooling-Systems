<style>
    .custom-modal-width {
        max-width: 75% !important;
        /* 75% of viewport width */
    }
</style>
<!-- Modal Body -->
<!-- if you want to close by clicking outside the modal, delete the last endpoint:data-bs-backdrop and data-bs-keyboard -->
<div class="container">
    <div class="row">
        <div class="col-sm-8">
            <div
                class="modal fade rounded-2"
                id="quoteModal"
                tabindex="-1"
                data-bs-backdrop="static"
                data-bs-keyboard="false"

                role="dialog"
                aria-labelledby="modalTitleId"
                aria-hidden="true">
                <div class="modal-dialog modal-dialog-scrollable modal-dialog-centered modal-lg custom-modal-width" role="document">

                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitleId">
                                Request A Service Quotation.
                            </h5>
                            <button
                                type="button"
                                class="btn-close"
                                data-bs-dismiss="modal"
                                aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="#" id="quoteForm">
                                <div class="row g-3">
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" autocomplete="off" id="name" name="name" placeholder="Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control" autocomplete="off" id="email" name="email" placeholder="Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control" autocomplete="off" id="mobile" name="mobile" placeholder="Mobile">
                                            <label for="mobile">Your Mobile</label>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="form-floating">
                                            <select class="form-control" autocomplete="off" id="service" name="service">
                                                <option value="">-- Select Service--</option>
                                                <option value="cooling">Cooling Service</option>
                                                <option value="heating">Heating Service</option>
                                                <option value="maintenance">Maintenance Service</option>
                                                <option value="installation">Installation Service</option>
                                            </select>
                                            <label for="service">Service Type</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control" autocomplete="off" name="message" placeholder="Leave a message here" id="message" style="height: 200px" rows="20"></textarea>
                                            <label for="message">Message</label>
                                        </div>
                                    </div>

                                    <div class="col-12">
                                        <button id="requestBtn" class="btn btn-primary py-3 px-5" type="submit"> Request</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-bs-dismiss="modal">
                                Close
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                <a class="btn btn-link" data-bs-toggle="modal"
                    data-bs-target="#quoteModal">Get Quote</a>
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
    const myModal = document.getElementById('quoteModal');
    const requestBtn = document.getElementById('requestBtn');
    const contactForm = document.getElementById("contactForm");
    const submitBtn = document.getElementById("contactSubmitBtn");
    myModal.addEventListener('shown.bs.modal', function() {
        const form = document.querySelector("#quoteForm");
        if (!form) return;
        console.log(form);

        form.addEventListener("submit", function(e) {
            e.preventDefault();
            const formData = new FormData(this);
            requestBtn.innerHTML = `
            <i class="fas fa-spinner fa-spin"></i> Requesting...
            `
            fetch("sendQuote.php", {
                    method: "POST",
                    body: formData,
                })
                .then(res => res.json())
                .then(data => {
                    showToast(data.status === "success" ? "success" : "danger", data.message);
                    if (data.status === "success") {
                        this.reset();
                    }
                    requestBtn.innerHTML = `Request`
                    setTimeout(() => {
                        const bsModal = bootstrap.Modal.getInstance(myModal) || new bootstrap.Modal(myModal);
                        bsModal.hide();
                    }, 5000);
                })
                .catch(() => {
                    requestBtn.innerHTML = `Request`
                    showToast("danger", "Something went wrong. Please try again.");
                });
        }, {
            once: true
        }); // Attach only once per modal show
    });

    function showToast(type, message) {
        const toastHTML = `
      <div style="z-index:5000" class="toast align-items-center text-white bg-${type} border-0 show position-fixed bottom-0 end-0 m-3" role="alert" aria-live="assertive" aria-atomic="true">
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


    contactForm ? contactForm.addEventListener("submit", function(e) {
        e.preventDefault();

        const formData = new FormData(this);

        // Show spinner on button
        const originalHTML = submitBtn.innerHTML;
        submitBtn.innerHTML = `<span class="spinner-border spinner-border-sm me-2" role="status" aria-hidden="true"></span> Sending...`;
        submitBtn.disabled = true;

        fetch(this.action, {
                method: "POST",
                body: formData
            })
            .then(res => res.json()) // Make sure your PHP returns JSON!
            .then(data => {
                showToast(data.status === "success" ? "success" : "danger", data.message);

                if (data.status === "success") {
                    this.reset();
                }
            })
            .catch(() => {
                showToast("danger", "Something went wrong. Please try again.");
            })
            .finally(() => {
                submitBtn.innerHTML = originalHTML;
                submitBtn.disabled = false;
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