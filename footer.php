<?php
include 'nav.php';
?>
<style>
.social-icons a {
    width: 35px;
    height: 35px;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    border-radius: 50%;
    transition: all 0.3s;
}

.social-icons a:hover {
    background-color: #ffc107;
    color: #000 !important;
}

.list-unstyled li a {
    transition: all 0.3s;
}

.list-unstyled li a:hover {
    color: #ffc107 !important;
    padding-left: 5px;
}
</style>

<footer class="bg-dark text-white pt-5">
    <div class="container">
        <div class="row text-start text-md-left">
            <!-- About Section -->
            <div class="col-md-4 col-12 mb-4">
                <h4 class="text-warning mb-3">Hotel Royal</h4>
                <p class="text-muted">Experience luxury redefined at our 5-star hotel offering world-class amenities and exceptional service.</p>
                <div class="social-icons mt-3">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>

            <!-- Quick Links -->
            <div class="col-md-4 col-6 mb-4">
                <h5 class="text-warning mb-3">Quick Links</h5>
                <ul class="list-unstyled">
                    <li><a href="about.php" class="text-white text-decoration-none">About Us</a></li>
                    <li class="my-2"><a href="room.php" class="text-white text-decoration-none">Rooms & Suites</a></li>
                    <li><a href="contact.php" class="text-white text-decoration-none">Contact</a></li>
                    <li class="my-2"><a href="#" class="text-white text-decoration-none">Privacy Policy</a></li>
                    <li><a href="#" class="text-white text-decoration-none">Terms of Service</a></li>
                </ul>
            </div>

            <!-- Contact Info -->
            <div class="col-md-4 col-6 mb-4">
                <h5 class="text-warning mb-3">Contact Us</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <i class="fas fa-map-marker-alt me-2"></i> Slemani - ChwarChra
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-phone me-2"></i> +964 7XX XXX XX XX
                    </li>
                    <li class="mb-2">
                        <i class="fas fa-envelope me-2"></i> info@hotelroyal.com
                    </li>
                </ul>
            </div>
        </div>

        <!-- Copyright -->
        <div class="border-top pt-4 mt-3">
            <div class="row">
                <div class="col-12 text-center">
                    <p class="text-muted mb-0">&copy; 2025 Hotel Royal. All rights reserved.</p>
                </div>
            </div>
        </div>
    </div>
</footer>
