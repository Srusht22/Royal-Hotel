<?php
include 'nav.php';

if(isset($_POST['submit'])){

    $fname = $_POST['fname'];
    $lname =  $_POST['lname'];
    $link = $_POST['link'];
    $pnum = $_POST['pnum'];
    // tghis is information of Image
    $file = $_FILES['file'];
    $fileName = $file['name'];
    $fileType = $file['type'];
    $fileTmpName = $file['tmp_name'];
    $fileError = $file['error'];
    $fileSize = $file['size'];

    $fileExt = explode('.', $fileName);
    $fileActuallExt = strtolower(end($fileExt));

    $fileAllowed = array('jpg','png','gif','svg','jpeg');

    if(in_array($fileActuallExt, $fileAllowed)){
        if($fileError === 0){
            if($fileSize < 100000000){

           $fileNewName = rand(). "." . $fileActuallExt;
           $fileDestination = "upload/$fileNewName";
           move_uploaded_file($fileTmpName,$fileDestination);

           
    $query = mysqli_query($db, "INSERT INTO `contact` (`F_Name`, `L_Name`, `link`, `photo`,`P_Number` ) values ('$fname','$lname','$link','$fileNewName','$pnum') " );
    if($query){
         header("Location: contact.php?success");
        exit();
    } 
           }else{

                $error['result']= "The Image Size is not Appropriate";
            }
        }else{
            $error['result']= "Please Try Again";
        }

    }else{
        $error['result'] = "The File is not Proper";
    }
}?>

<style>
     body {
        padding-top: 80px; 
    }
    .navbar {
        z-index: 1030;
    }
  
.team-card {
    transition: transform 0.3s, box-shadow 0.3s;
    border: none;
    border-radius: 15px;
    overflow: hidden;
}

.team-card:hover {
    transform: translateY(-10px);
    box-shadow: 0 15px 30px rgba(0,0,0,0.2);
}

.member-photo {
    height: 300px;
    object-fit: cover;
    border-bottom: 3px solid #0d6efd;
}

.contact-info {
    background: rgba(255,255,255,0.1);
    padding: 10px;
    border-radius: 8px;
    margin-top: 15px;
}

.card-body {
    padding: 2rem;
}

.btn-primary {
    background: linear-gradient(135deg, #0d6efd, #0b5ed7);
    border: none;
    padding: 10px 25px;
    border-radius: 8px;
}
</style>


<div class="container py-5">
    <div class="row row-cols-1 row-cols-md-3 row-cols-lg-4 g-4 justify-content-center">
    
      <?php 
            $query = mysqli_query($db,"SELECT * FROM `contact`");
            while ($row = mysqli_fetch_assoc($query)){ ?>
    
    <!-- Team Member 1 -->
        <div class="col">
            <div class="card h-100 shadow-lg team-card">
                <img src="upload/<?php echo $row['photo'] ?> " class="card-img-top member-photo">
                <div class="card-body text-center bg-dark text-white">
                    <h2 class="card-title mb-3"><?php echo $row['F_Name'] ?> <span> <?php echo " "; echo $row['L_Name'] ?></span></h2>
                    <a href="<?php echo $row['link'] ?>" 
                       class="btn btn-primary mb-2"
                       target="_blank">
                        <i class="fab fa-facebook me-2"></i>Facebook
                    </a>
                    <div class="contact-info">
                        <i class="fas fa-phone me-2"></i><?php echo $row['P_Number'] ?> 
                    </div>
                </div>
            </div>
        </div>
        <?php }
        ?>

        <!-- Add other team members following the same structure -->
    </div>
</div>

<!-- Add new teamer -->
 <?php if(isset($_SESSION['admin'])) { ?>


<div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card shadow">
                    <div class="card-header bg-primary text-white">
                        <h3 class="mb-0">Add Team Member</h3>
                    </div>
                    <div class="card-body">
                        <form action="contact.php" method="POST" enctype="multipart/form-data">
                            <!-- Profile Image -->
                            <div class="mb-3">
                                <label for="profileImage" class="form-label">Profile Image</label>
                                <input type="file" class="form-control" id="profileImage" name="file" accept="" required>
                            </div>

                            <!-- First Name -->
                            <div class="mb-3">
                                <label for="firstName" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="firstName" name="fname" required>
                            </div>

                            <!-- Last Name -->
                            <div class="mb-3">
                                <label for="lastName" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastName" name="lname" required>
                            </div>

                            <!-- Facebook Link -->
                            <div class="mb-3">
                                <label for="facebookLink" class="form-label">Facebook Profile URL</label>
                                <input type="url" class="form-control" id="facebookLink" name="link" 
                                       pattern="https?://(www\.)?facebook\.com/.*" 
                                       placeholder="https://facebook.com/username" required>
                            </div>

                            <!-- Phone Number -->
                            <div class="mb-3">
                                <label for="phoneNumber" class="form-label">Phone Number</label>
                                <input type="tel" class="form-control" id="phoneNumber" name="pnum"
                                        
                                       placeholder="Format: XXXX XXX XXXX" required>
                            </div>

                            <!-- Submit Button -->
                            <button type="submit" name="submit" class="btn btn-primary w-100">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php } ?>
<!-- Footer -->
<?php
include 'footer.php';
?>