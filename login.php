<?php

include 'nav.php';

$errors = ['result'=> ''] ;
if(isset($_POST['login'])){
    $email = htmlspecialchars($_POST['email']);
    $username = htmlspecialchars($_POST['name']);
    $password = htmlspecialchars($_POST['password']);

    if(empty($username)||empty($password) || empty($email)){
        $errors['result'] = "Fill up all the inputs";
    }else{
      $query =  $query = mysqli_query($db, "SELECT * FROM `admin` WHERE `name` = '$username' AND `password` = '$password' AND `email` = '$email' ");
      if($query){ 
        if(mysqli_num_rows($query) == 1){
        while($row = mysqli_fetch_assoc($query)){
            $_SESSION['admin'] = htmlspecialchars($row['id']);
            $_SESSION['name'] = htmlspecialchars($row['name']);
        }
                 header("Location:home.php");
        
               }else{
                header("Location:login.php");
               }
            }
            
            
        }

    }
?>


<div class="container mt-5 py-5">
<div class="row justify-content-center ">
   
<form action="login.php" method="POST" class=" col-lg-8 col-sm p-4 rounded shadow-sm m-1" >  
<?php if(isset($_POST['login'])){ ?> <p class="text-center text-danger"><?php echo $errors['result'];?></p><?php }?>
          <input type="email" name="email" placeholder="You're Email" class="form-control form-control-lg rounded mt-2 " id="" >

        <input type="text" name="name" placeholder="UserName" class=" form-control form-control-lg rounded mt-2" id="" >
        <input type="password" name="password" placeholder="Password" class="form-control form-control-lg rounded mt-2 " id="" >
        <button  class="btn btn-outline-success rounded btn  w-100 mt-3" name="login" >login</button>
    </form>

   </div>
</div>





<?php include 'footer.php';