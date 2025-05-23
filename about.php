<?php
include 'nav.php';
?>
<style>
    .card {
        border: none;
        transition: transform 0.3s;
    }
    
    .card:hover {
        transform: translateY(-5px);
    }
    
    .list-staff li {
        padding-left: 1.5rem;
        position: relative;
    }
    
    .list-staff li::before {
        content: "▹";
        position: absolute;
        left: 0;
        color: #0d6efd;
    }
    
    .timeline-item {
        border-left: 3px solid #0d6efd;
        padding-left: 1.5rem;
        position: relative;
    }
    
    .timeline-item::before {
        content: "";
        position: absolute;
        left: -8px;
        top: 0;
        width: 15px;
        height: 15px;
        background: #0d6efd;
        border-radius: 50%;
    }
    
    .contact-info p {
        transition: all 0.3s ease;
        padding: 8px;
        border-radius: 5px;
    }
    
    .contact-info p:hover {
        background-color: #f8f9fa;
        transform: translateX(5px);
    }
</style>

<div class="container py-5 mt-5">
    <!-- History & Services Section -->
    <div class="row g-4 mb-5">
        <!-- History Column -->
        <div class="col-lg-8">
            <div class="card shadow-lg h-100">
                <div class="card-body">
                    <h2 class="display-5 mb-4 text-primary">📜 History</h2>
                    <p class="lead text-muted">
                        Opened in 2010: The Royal Hotel opened its doors on October 1, 2010, at the corner of Fifth Avenue 
                        and Central Park South. Designed by architect Henry J. Hardenbergh, the hotel was built in the 
                        Renaissance style and aimed to cater to New York's wealthiest elite.
                    </p>
                    <div class="timeline mt-4">
                        <div class="timeline-item">
                            <h4 class="text-success">🌟 1920s Jazz Age</h4>
                            <p>The hotel became a symbol of the roaring '20s, hosting famous guests including writers, actors, and world leaders.</p>
                        </div>
                        <div class="timeline-item mt-4">
                            <h4 class="text-success">🎩 Distinguished Guests</h4>
                            <p>Notable guests included the Duke and Duchess of Windsor, Cary Grant, and Elizabeth Taylor.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Services Column -->
        <div class="col-lg-4">
            <div class="card shadow-lg h-100">
                <div class="card-body">
                    <h2 class="display-5 mb-4 text-primary">💎 Services</h2>
                    <ul class="list-unstyled fs-5">
                        <li class="mb-3">🏊‍♂️ Swimming Pool</li>
                        <li class="mb-3">💪 State-of-the-art Gym</li>
                        <li class="mb-3">🎤 Conference Hall</li>
                        <li class="mb-3">🌟 VIP Concierge Service</li>
                    </ul>
                    <div class="row g-2">
                        <div class="col-6">
                            <img src="d.jpg" class="img-fluid rounded-3" alt="Pool">
                        </div>
                        <div class="col-6">
                            <img src="hall.jpg" class="img-fluid rounded-3" alt="Hall">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Information & Staff Section -->
    <div class="row g-4">
        <!-- Information Column -->
        <div class="col-lg-8">
            <div class="card shadow-lg h-100">
                <div class="card-body">
                    <h2 class="display-5 mb-4 text-primary">📍 Information</h2>
                    <div class="contact-info">
                        <p class="fs-5">
                            <i class="fas fa-map-marker-alt text-danger me-2"></i>
                            Slemani - Kurdsat
                        </p>
                        <p class="fs-5">
                            <i class="fas fa-phone text-primary me-2"></i>
                            +964 770 990 1212<br>
                            +964 750 990 1212
                        </p>
                        <p class="fs-5">
                            <i class="fas fa-envelope text-success me-2"></i>
                            Royal54@gmail.info
                        </p>
                        <p class="fs-5">
                            <i class="fas fa-at text-warning me-2"></i>
                            Royal12@hotmail.info
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Staff Column -->
        <div class="col-lg-4">
            <div class="card shadow-lg h-100">
                <div class="card-body">
                    <h2 class="display-5 mb-4 text-primary">👥 Staff</h2>
                    <ol class="list-staff list-unstyled">
                        <li class="mb-3">👔 Team Leader</li>
                        <li class="mb-3">🍽️ Service Team</li>
                        <li class="mb-3">🛡️ Security Personnel</li>
                        <li class="mb-3">🧹 Cleaning Staff</li>
                        <li class="mb-3">💼 Reception Team</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
include 'footer.php';
?>

