<?php include 'nav.php'; ?>

<?php
if(isset($_GET['delete'])){
    $id = htmlspecialchars($_GET['delete']);
    $query = mysqli_query($db, ("DELETE from `booking` WHERE `id` = '$id'"));
    if($query){
        header("Location:showingAppointment.php");
    }
}
?>


<style>
        .a {
            padding-top: 80px;

        }
        .main-card {
            background: white;
            border-radius: 15px;
            box-shadow: 0 0 30px rgba(0,0,0,0.03);
        }
        .table-header {
            background: #f8f9fa;
            border-radius: 12px 12px 0 0;
        }
        .table thead th {
            border-bottom: 2px solid #e9ecef;
            font-weight: 600;
        }
        .status-badge {
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
        }
        .table-hover tbody tr:hover {
            background-color: #f8f9fa;
        }
    </style>

<div class="pt-5 a ">
    <div class="container mt-5 ">
        <div class="main-card p-4">
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h3 class="mb-0">📅 Appointments Management</h3>
                
            </div>

            <div class="table-responsive">
                <table class="table table-hover align-middle">
                    <thead class="table-header">
                        <tr>
                            <th>First Name</th>
                            <th>Last Name</th>
                            <th>Email</th>
                            <th>Room Type</th>
                            <th>Gender</th>
                            
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <!-- Sample Data - Replace with dynamic content from DB -->
                         <?php 
$sql = mysqli_query($db, "SELECT * FROM `booking`");
while($row = mysqli_fetch_assoc($sql)){ ?>
                        <tr>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="avatar me-3">
                                        <i class="fas fa-user-circle fa-2x text-secondary"></i>
                                    </div>
                                    <div>
                                        <div class="fw-medium"><?php echo $row['fname']; ?></div>
                                      
                                    </div>
                                </div>
                            </td>
                            <td><?php echo $row['lname']; ?></td>
                            <td><?php echo $row['email']; ?></td>
                            <td>
                                <span class="badge bg-light text-dark">
                                    <i class="fas fa-bed me-2 text-primary"></i><?php echo $row['roomtype']; ?>
                                </span>
                            </td>
                            <td>
                                <span class="status-badge bg-success bg-opacity-10 text-success"><?php echo $row['gender']; ?></span>
                            </td>
                            <td>
                                
                                <a href="showingAppointment.php?delete=<?php echo $row['id']; ?>" class="btn btn-sm btn-outline-danger">
                                    <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<?php  include 'footer.php'; ?>
