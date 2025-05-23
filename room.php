<?php
    include 'nav.php';
    require 'config.php';
    require 'delete.php';

?>





<?php
$roomTypes = ['VIP', 'Suite', 'Deluxe', 'Standard', 'Single', 'Double'];


if(isset($_POST['submit'])){
$range = $_POST['ranges'];
$name = $_POST['name'];
$floor = $_POST['floor'];
$price = $_POST['price'];
$type = $_POST['room_type'];


$query = mysqli_query($db, "INSERT INTO `room` (`ranges`,`name`,`floor`,`price`,`roomtype`) VALUES ('$range','$name','$floor','$price','$type')");
if($query){
    header("Location:room.php?success");
    exit();
}else{
    echo '<div class="alert alert-danger text-center mt-4" role="alert">
            Failed to insert data into the database. Please try again. Error: ' . mysqli_error($db) . '
          </div>';
}
}
?>

            <?php
if(isset($_POST['changes'])){
    $id = $_POST['id'];
$range = $_POST['range'];
$name = $_POST['name'];
$floor = $_POST['floor'];
$type = $_POST['roomtype'];
$price = $_POST['price'];

$query = mysqli_query($db, "UPDATE `room` SET `ranges` = '$range', `name` ='$name', `floor` = '$floor', `roomtype` = '$type', `price` = '$price' WHERE `id` = '$id'");


if ($query) {
    header("Location:room.php?success");
    exit();
}}


?>


<style>
    body {
        padding-top: 80px;
    }
    
@media (max-width: 768px) {
    .mobile-table-row {
        display: flex;
        flex-direction: column;
        border: 1px solid #dee2e6;
        margin-bottom: 1rem;
        border-radius: 8px;
        padding: 1rem;
    }

    .mobile-table-row td {
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0.5rem 0;
        border: none;
    }

    .mobile-table-row td::before {
        content: attr(data-label);
        font-weight: 600;
        margin-right: 1rem;
        color: #6c757d;
        min-width: 100px;
    }

  
    .color-swatch {
        order: 2;
    }

    .mobile-table-row td[data-label="Actions"] div {
        width: 100%;
        justify-content: center;
    }
}

    .color-swatch {
        width: 20px;
        height: 20px;
        border-radius: 50%;
        display: inline-block;
        border: 1px solid #dee2e6;
    }
    .table-hover tbody tr:hover {
        background-color: #f8f9fa;
    }
</style>
<div class="container py-5">
        <!-- Add New Room Section -->
          <?php if(isset($_SESSION['admin'])) { ?>

        <div class="container py-5">
            <div class="card-body">
                <h2 class="mb-4">Add New Room</h2>
                <div class="row g-3">

                <form method="POST" action="room.php">
                    <div class="row g-3">
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="Room Range"name="ranges">
                    </div>
                    <div class="col-md-3">
                        <input type="text" class="form-control" placeholder="Room Name"name="name">
                    </div>
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="Floor" name="floor">
                    </div>
                    <div class="col-md-2">
    <select class="form-select" name="room_type" required>
                <option value="" disabled selected>Room Type</option>
                <?php foreach ($roomTypes as $type): ?>
                    <option value="<?= $type ?>"><?= $type ?></option>
                <?php endforeach; ?>
            </select>
</div>
                   
                    <div class="col-md-2">
                        <input type="text" class="form-control" placeholder="Price" name="price">
                    </div>
                    <div class="col-md-2">
                        <button class="btn btn-secondary" name="submit" >Add Room</button>
                    </div>
                    </form>
                    </div>
                </div>
            </div>
        </div>

        <?php } ?>

      <div class="table-responsive shadow-lg rounded-3 mt-4 pt-4">
    <table class="table table-striped table-hover align-middle">
        <thead class="table-dark  d-md-table-header-group">
            <tr>
                <th>Room Range</th>
                <th>Room Name</th>
                <th>Floor</th>
                <th>Type</th>
                
                <th>Price</th>
                <?php if(isset($_SESSION['admin'])) { ?>
                <th>Actions</th>
                 <?php }?>
            </tr>
        </thead>
        <tbody>




<?php

            $sql = mysqli_query($db,"SELECT * FROM `room` ");
            while ($row = mysqli_fetch_assoc($sql)){ ?>


<!-- Modal -->
<div class="modal fade" id="post<?php echo $row['id']; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modifying</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form action="room.php" method="POST">
                <input type="text" name= "id" value="<?php echo $row['id']; ?>" hidden>
                <input type="text" name="range" class="form-control form-control-lg mt-2" placeholder="Room Range" value="<?php echo $row['ranges']; ?>">
                <input type="text" name="name" class="form-control form-control-lg mt-2" placeholder="Room Name" value="<?php echo $row['name']; ?>">
                <input type="text" name="floor" class="form-control form-control-lg mt-2" placeholder="Floor" value="<?php echo $row['floor']; ?>">
                   <select class="form-select mt-2 form-control form-control-lg" name="roomtype" required>
                <option value="" disabled selected>Room Type</option>
                <?php foreach ($roomTypes as $type): ?>
                    <option value="<?= $type ?>"><?= $type ?></option>
                <?php endforeach; ?>
            </select>

                <input type="text" name="price" class="form-control form-control-lg mt-2" placeholder="Price" value="<?php echo $row['price']; ?>">
                 <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-warning" name="changes">Save changes</button>
      </div>
      </form>
      </div>
     
    </div>
  </div>
</div>
<!-- End of the Modal -->

            <!-- Room 1 -->
            <tr class="mobile-table-row">
                <td data-label="Room Range"><?php echo $row['ranges']; ?></td>
                <td data-label="Room Name"><?php echo $row['name']; ?></td>
                <td data-label="Floor"><?php echo $row['floor']; ?></td>
                <td data-label="Type">
                    <span class="badge bg-success"><?php echo $row['roomtype']; ?></span>
                </td>
                

                <td data-label="Price"><?php echo $row['price']; ?></td>
                <?php if(isset($_SESSION['admin'])) { ?>
                <td data-label="Actions">
                    <div class="d-flex gap-2">
                        <button class="btn btn-sm btn-outline-secondary">
                           <span data-bs-toggle="modal" data-bs-target="#post<?php echo $row['id']; ?>"> Edit </span>
                        </button>
                        <a href="room.php?delete=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger">
                            Delete
                        </a>
                    </div>
                </td>
                <?php } ?>
            </tr>
<?php } ?>
         
        </tbody>
    </table>
</div>
  </div>
    </div>



    <!-- modal -->




<?php include 'footer.php'; ?>