<?php
include 'nav.php';
require 'config.php';

$roomTypes = ['VIP', 'Suite', 'Deluxe', 'Standard', 'Single', 'Double'];

if (isset($_POST['submit'])) {
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $email = $_POST['email'];
    $type = $_POST['room-type']; 
    $gender = $_POST['gender'];

    $query = mysqli_query($db, "INSERT INTO `booking` (`fname`,`lname`,`email`,`roomtype`,`gender`) 
                                 VALUES ('$fname','$lname','$email','$type','$gender')");

    if ($query) {
       header("Location:booking.php?success=1");

        exit();
    } else {
        echo '<div class="alert alert-danger text-center mt-4" role="alert">
            Failed to insert data into the database. Please try again. Error: ' . mysqli_error($db) . '
        </div>';
    }
}
?>


<style>
     body {
        padding-top: 80px; 
    }
    .navbar {
        z-index: 1030;
    }
    .card {
        border-radius: 15px;
        overflow: hidden;
    }
    .card-header {
        padding: 1.5rem;
        background: linear-gradient(135deg, #0d6efd, #0b5ed7);
    }
    .form-control, .form-select {
        border-radius: 8px;
        padding: 0.75rem 1rem;
    }
    .btn {
        border-radius: 8px;
        padding: 0.75rem 1.5rem;
    }
    .styled-label {
        font-weight: 600;
        color: #2d3748;
        margin-bottom: 12px;
        display: block;
        font-size: 0.9rem;
    }

    .styled-select {
        width: 100%;
        border: 2px solid #e2e8f0;
        border-radius: 8px;
        padding: 12px 16px;
        font-size: 1rem;
        transition: all 0.3s ease;
        appearance: none;
    }

    .styled-select:focus {
        border-color: #4a90e2;
        box-shadow: 0 0 0 3px rgba(74, 144, 226, 0.15);
        outline: none;
    }

    .styled-select:hover {
        border-color: #cbd5e0;
    }

    .styled-select option {
        padding: 12px;
        font-size: 0.95rem;
    }

    .styled-select option:hover {
        background-color: #4a90e2 !important;
        color: white;
    }

    .styled-select option:checked {
        background-color: #4a90e2;
        color: white;
        font-weight: 500;
    }

 
</style>



<div class="container py-5">
    <div class="card shadow-lg mx-auto" style="max-width: 600px;">
        <div class="card-header bg-primary text-white">
            <h2 class="mb-0">Welcome to Royal Hotel</h2>
        </div>
        <div class="card-body p-4">
            <form action="<?= htmlspecialchars($_SERVER['PHP_SELF']) ?>"  method="POST" class="needs-validation" novalidate>
                <h3 class="mb-4 text-center">Booking Form</h3>
                
                <div class="row g-3">
                    <div class="col-md-6">
                        <label for="first-name" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="first-name" name="fname" required>
                        <div class="invalid-feedback">Please enter your first name</div>
                    </div>
                    
                    <div class="col-md-6">
                        <label for="last-name" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="last-name" name="lname" required>
                        <div class="invalid-feedback">Please enter your last name</div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                        <div class="invalid-feedback">Please enter a valid email</div>
                    </div>

                    
                    <div class="col-md-6">
                        <label for="room-type" class="form-label">Room Type</label>
                        <select class="form-select" id="room-type" name="room-type" required>
                            <option value="" selected disabled>Choose...</option>
                        <?php foreach ($roomTypes as $type): ?>
                            <option value="<?= $type  ?>"><?= $type ?></option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    
                       <div class="col-md-6">
    <label class="form-label styled-label">Gender</label>
    <div class="d-flex gap-4">
        <select name="gender" id='gender' class="form-select styled-select">
            <option selected disabled>Select Your Gender</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>
    </div>
</div>

                    <div class="col-12 d-flex justify-content-between mt-4">
                        <button type="submit" name="submit" class="btn btn-primary px-4">
                            <i class="fas fa-paper-plane me-2"></i>Submit
                        </button>
                        <button type="reset" class="btn btn-outline-secondary">
                            <i class="fas fa-undo me-2"></i>Reset
                        </button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>



<?php
include 'footer.php';
?>

<?php if (isset($_GET['success']) && $_GET['success'] == 1): ?>
<script>
    alert("🎉 Your booking was successful! Thank you for choosing Hotel Royal.");
</script>
<?php endif; ?>

