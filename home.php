<?php
include 'nav.php';
?>
<!-- Add this CSS -->
<style>
    .content-section {
        margin-top: 100px; /* Adjust based on your navbar height */
        position: relative;
        z-index: 1;
    }
    .image-card {
        transition: all 0.3s ease;
        overflow: hidden;
        border-radius: 15px;
    }
    .image-link {
        position: relative;
        display: block;
    }
    .image-caption {
        position: absolute;
        bottom: 20px;
        left: 50%;
        transform: translateX(-50%);
        color: white;
        text-align: center;
        opacity: 0;
        transition: all 0.3s ease;
    }
    .image-link:hover .image-caption {
        opacity: 1;
        bottom: 30px;
    }
    .image-card img {
        transition: all 0.3s ease;
        width: 100%;
        height: 400px;
        object-fit: cover;
    }
    .image-card:hover img {
        transform: scale(1.05);
    }


/* For js  */
       .welcome-overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.96);
            display: flex;
            justify-content: center;
            align-items: center;
            z-index: 9999;
            animation: gentleFadeIn 0.6s ease-out;
        }

        .welcome-card {
            background: linear-gradient(145deg, #1a1a1a, #2d2d2d);
            border-radius: 24px;
            padding: 3rem;
            max-width: 600px;
            text-align: center;
            box-shadow: 0 12px 40px rgba(255, 223, 0, 0.1);
            border: 1px solid rgba(255, 215, 0, 0.3);
            transform: scale(0.9);
            animation: cardReveal 0.8s cubic-bezier(0.23, 1, 0.32, 1) forwards;
        }

        .welcome-icon {
            font-size: 4.5rem;
            margin-bottom: 1.5rem;
            animation: float 3s ease-in-out infinite;
        }

        .welcome-title {
            font-family: 'Playfair Display', serif;
            font-size: 2.8rem;
            color: #ffd700;
            margin-bottom: 1.5rem;
            letter-spacing: 1px;
            text-shadow: 0 2px 4px rgba(255, 215, 0, 0.2);
        }

        .welcome-message {
            font-size: 1.2rem;
            line-height: 1.8;
            color: #e0e0e0;
            margin-bottom: 2.5rem;
            font-weight: 300;
        }

        .welcome-button {
            background: #ffd700;
            color: #1a1a1a;
            border: none;
            padding: 14px 45px;
            border-radius: 30px;
            font-weight: 600;
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .welcome-button:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(255, 215, 0, 0.3);
        }

        @keyframes gentleFadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        @keyframes cardReveal {
            to { transform: scale(1); }
        }

        @keyframes float {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-15px); }
        }
</style>

<!-- HTML Structure -->
<section class="content-section mb-4">
    <div class="container">
        <div class="row g-4">
            <!-- About Card -->
            <div class="col-md-4">
                <div class="image-card shadow-lg">
                    <a href="about.php" class="image-link">
                        <img src="f.jpg" class="img-fluid" alt="About">
                        <div class="image-caption">
                            <h2 class="fw-bold mb-2">About Us</h2>
                            <p class="mb-0">Discover Our Story</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Rooms Card -->
            <div class="col-md-4">
                <div class="image-card shadow-lg">
                    <a href="room.php" class="image-link">
                        <img src="x.jpg" class="img-fluid" alt="Rooms">
                        <div class="image-caption">
                            <h2 class="fw-bold mb-2">Rooms</h2>
                            <p class="mb-0">Explore Luxury</p>
                        </div>
                    </a>
                </div>
            </div>

            <!-- Contact Card -->
            <div class="col-md-4">
                <div class="image-card shadow-lg">
                    <a href="contact.php" class="image-link">
                        <img src="y.jpg" class="img-fluid" alt="Contact">
                        <div class="image-caption">
                            <h2 class="fw-bold mb-2">Contact</h2>
                            <p class="mb-0">Get in Touch</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Other content -->

<!-- <script>
  window.onload = function() {
    alert("Welcome to Hotel Royal! We’re glad to have you here.");
  };
</script> -->


   
   <div class="welcome-overlay">
    <div class="welcome-card">
        <div class="welcome-icon">🌟🏩</div>
        <h1 class="welcome-title">Welcome, Dear Guest</h1>
        <p class="welcome-message">
            We are delighted to welcome you to Hotel Royal.<br>
            Your comfort and satisfaction are our top priorities.<br>
            Relax, unwind, and enjoy the finest hospitality we have to offer.<br>
            Every moment of your stay is special to us.<br>
            Thank you for choosing Hotel Royal — where luxury meets warmth.
        </p>
        <button class="welcome-button" onclick="this.closest('.welcome-overlay').remove()">
            Begin Your Stay →
        </button>
    </div>
</div>

<?php include 'footer.php'; ?>