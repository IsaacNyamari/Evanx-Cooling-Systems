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
                <a class="btn btn-link" href="../cold-room-nstallation">Cold Room Installation</a>
                <a class="btn btn-link" href="../refrigeration-repair">Refrigeration Repair</a>
                <a class="btn btn-link" href="../maintenance-and-repair">Preventive Maintenance</a>
                <a class="btn btn-link" href="consultation">Cooling System Consultation</a>
            </div>
            <div class="col-lg-3 col-md-6">
                <h5 class="text-light mb-4">Quick Links</h5>
                <a class="btn btn-link" href="../about">About Us</a>
                <a class="btn btn-link" href="../contact">Contact</a>
                <a class="btn btn-link" href="../service">Services</a>
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
                    &copy; <a href="../">Evanx Cooling System</a>, All Rights Reserved.
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
<script src="../lib/wow/wow.min.js"></script>
<script src="../lib/easing/easing.min.js"></script>
<script src="../lib/waypoints/waypoints.min.js"></script>
<script src="../lib/owlcarousel/owl.carousel.min.js"></script>
<script src="../lib/counterup/counterup.min.js"></script>
<script src="../lib/parallax/parallax.min.js"></script>

<!-- Template Javascript -->
<script src="../js/main.js"></script>
<script>
    const _0x4b9c = ['quoteModal', 'requestBtn', 'contactForm', 'contactSubmitBtn', 'shown.bs.modal', 'querySelector', '#quoteForm', 'innerHTML', '<i\x20class=\x22fas\x20fa-spinner\x20fa-spin\x22></i>\x20Requesting...\x20', 'submit', 'preventDefault', 'FormData', 'sendQuote.php', 'POST', 'then', 'json', 'status', 'success', 'showToast', 'danger', 'message', 'reset', 'Request', 'getInstance', 'hide', 'catch', 'Something\x20went\x20wrong.\x20Please\x20try\x20again.', 'toast', 'align-items-center', 'text-white', 'bg-', '\x20border-0\x20show\x20position-fixed\x20bottom-0\x20end-0\x20m-3', 'role', 'alert', 'aria-live', 'assertive', 'aria-atomic', 'true', 'd-flex', 'toast-body', '<button\x20type=\x22button\x22\x20class=\x22btn-close\x20btn-close-white\x20me-2\x20m-auto\x22\x20data-bs-dismiss=\x22toast\x22\x20aria-label=\x22Close\x22></button>', 'beforeend', '.toast:last-child', 'remove', 'sendmail.php', 'spinner-border\x20spinner-border-sm\x20me-2', 'status,\x20aria-hidden=\x22true\x22', 'Sending...', 'disabled', 'finally'];
    (function(_0x2c3a3a, _0x4b9c3b) {
        const _0x2e3f9a = function(_0x1c8d8f) {
            while (--_0x1c8d8f) {
                _0x2c3a3a['push'](_0x2c3a3a['shift']());
            }
        };
        _0x2e3f9a(++_0x4b9c3b);
    }(_0x4b9c, 0x1a4));
    const _0x2e3f = function(_0x2c3a3a, _0x4b9c3b) {
        _0x2c3a3a = _0x2c3a3a - 0x0;
        let _0x2e3f9a = _0x4b9c[_0x2c3a3a];
        return _0x2e3f9a;
    };
    const myModal = document[_0x2e3f('0x0')](_0x2e3f('0x1')),
        requestBtn = document[_0x2e3f('0x0')](_0x2e3f('0x2')),
        contactForm = document[_0x2e3f('0x0')](_0x2e3f('0x3')),
        submitBtn = document[_0x2e3f('0x0')](_0x2e3f('0x4'));
    myModal['addEventListener'](_0x2e3f('0x5'), function() {
        const _0x1c8d8f = document[_0x2e3f('0x6')](_0x2e3f('0x7'));
        if (!_0x1c8d8f) return;
        console['log'](_0x1c8d8f), _0x1c8d8f[_0x2e3f('0x8')](_0x2e3f('0x9'), function(_0x5a46e2) {
            _0x5a46e2[_0x2e3f('0xa')]();
            const _0x5a46e3 = new FormData(this);
            requestBtn[_0x2e3f('0xb')] = _0x2e3f('0xc'), fetch(_0x2e3f('0xd'), {
                'method': _0x2e3f('0xe'),
                'body': _0x5a46e3
            })[_0x2e3f('0xf')](_0x5a46e2 => _0x5a46e2[_0x2e3f('0x10')]())[_0x2e3f('0xf')](_0x5a46e2 => {
                showToast(_0x5a46e2[_0x2e3f('0x11')] === _0x2e3f('0x12') ? _0x2e3f('0x12') : _0x2e3f('0x13'), _0x5a46e2[_0x2e3f('0x14')]), _0x5a46e2[_0x2e3f('0x11')] === _0x2e3f('0x12') && this[_0x2e3f('0x15')](), requestBtn[_0x2e3f('0xb')] = _0x2e3f('0x16'), setTimeout(() => {
                    const _0x5a46e2 = bootstrap['Modal'][_0x2e3f('0x17')](myModal) || new bootstrap['Modal'](myModal);
                    _0x5a46e2[_0x2e3f('0x18')]();
                }, 0x1388);
            })[_0x2e3f('0x19')](() => {
                requestBtn[_0x2e3f('0xb')] = _0x2e3f('0x16'), showToast(_0x2e3f('0x13'), _0x2e3f('0x1a'));
            });
        }, {
            'once': !![]
        });
    });

    function showToast(_0x5a46e2, _0x1c8d8f) {
        const _0x5a46e3 = `\x20<div\x20style=\x22z-index:5000\x22\x20class=\x22${_0x2e3f('0x1b')}\x20${_0x2e3f('0x1c')}\x20${_0x2e3f('0x1d')}${_0x5a46e2}\x20${_0x2e3f('0x1e')}\x20${_0x2e3f('0x1f')}=\x22${_0x2e3f('0x20')}\x22\x20${_0x2e3f('0x21')}=\x22${_0x2e3f('0x22')}\x22\x20${_0x2e3f('0x23')}=\x22${_0x2e3f('0x24')}\x22>\x20<div\x20class=\x22${_0x2e3f('0x25')}\x22>\x20<div\x20class=\x22${_0x2e3f('0x26')}\x22>${_0x1c8d8f}</div>\x20${_0x2e3f('0x27')}\x20</div>\x20</div>`;
        document['body'][_0x2e3f('0x28')](_0x2e3f('0x29'), _0x5a46e3), setTimeout(() => {
            document[_0x2e3f('0x6')](_0x2e3f('0x2a'))?.[_0x2e3f('0x2b')]();
        }, 0x1388);
    }
    contactForm ? contactForm[_0x2e3f('0x8')](_0x2e3f('0x9'), function(_0x5a46e2) {
        _0x5a46e2[_0x2e3f('0xa')]();
        const _0x5a46e3 = new FormData(this),
            _0x1c8d8f = submitBtn[_0x2e3f('0xb')];
        submitBtn[_0x2e3f('0xb')] = `<span\x20class=\x22${_0x2e3f('0x2c')}\x22\x20${_0x2e3f('0x2d')}></span>\x20${_0x2e3f('0x2e')}`, submitBtn[_0x2e3f('0x2f')] = !![], fetch(_0x2e3f('0x30'), {
            'method': _0x2e3f('0xe'),
            'body': _0x5a46e3
        })[_0x2e3f('0xf')](_0x5a46e2 => _0x5a46e2[_0x2e3f('0x10')]())[_0x2e3f('0xf')](_0x5a46e2 => {
            showToast(_0x5a46e2[_0x2e3f('0x11')] === _0x2e3f('0x12') ? _0x2e3f('0x12') : _0x2e3f('0x13'), _0x5a46e2[_0x2e3f('0x14')]), _0x5a46e2[_0x2e3f('0x11')] === _0x2e3f('0x12') && this[_0x2e3f('0x15')]();
        })[_0x2e3f('0x19')](() => {
            showToast(_0x2e3f('0x13'), _0x2e3f('0x1a'));
        })[_0x2e3f('0x31')](() => {
            submitBtn[_0x2e3f('0xb')] = _0x1c8d8f, submitBtn[_0x2e3f('0x2f')] = ![];
        });
    }) : '';
</script>



</body>

</html>