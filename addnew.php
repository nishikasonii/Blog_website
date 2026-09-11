<?php
session_start();
if(!isset($_SESSION['email'])){
  header('location: login.php');
}

$category_name = "";
$status = "";
// $categoryname_error = "";
// $status_error = "";
$success="";
$validation=true;

if(isset($_POST["addnewbtn"]) && ($_SERVER["REQUEST_METHOD"] == "POST")){
  
  // Category Name Validation
  if(empty($_POST['category_name'])){
    $categoryname_error="* Category name required";
    $validation=false;
  }
  else{
    $category_name=$_POST['category_name'];
  }

  // Status validation
  if(empty($_POST['status']) && $_POST['status']!=0){
    $status_error="* Status is required";
    $validation=false;
  }
  else{
    $status=$_POST['status'];
  }

  // All validadtion true
  if($validation){
    require_once 'includes/connection.php';
    $sql = "INSERT INTO categories(name, status) VALUES ('$category_name', $status);";
    // print_r($sql);
    if(mysqli_query($conn, $sql)){
      $success="New category added successfully !!  ";
      header('location: categories.php');
    }
  }
  
} 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Add New</title>
</head>
<body>
  <div class="dashboard-layout">
  
  <!-- Sidebar -->
  <?php 
    $page_name="Add New Category";
    include_once('includes/sidebar.php') 
  ?>

  <!-- Main Content -->
  <main class="main-content">
    <?php include_once('includes/header.php') ?>

    <!-- To add new categories -->
    <div class="container addnewform">
        <div class="row">
          <span class="text-success fs-5 success"><?php echo $success?></span>
            <form action="addnew.php" method="POST">
            <h1 class="heading">Add New Category</h1>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category Name:</label>
                <input type="text" name="category_name" value="<?php echo isset($category_name) ? $category_name : "";?>" class="form-control" id="exampleFormControlInput1">
                <span class="text-danger"><?php echo(isset($categoryname_error)) ? $categoryname_error : "";?></span>
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status:</label>
                <select name="status" class="form-select" aria-label="Default select example">
                    <option value="" selected>Select Status</option>
                    <option value="1" <?php echo ($status == "active") ? "selected" : ""; ?>>Active</option>
                    <option value="0" <?php echo ($status == "0") ? "selected" : ""; ?>>InActive</option>
                </select>
                <span class="text-danger"><?php echo(isset($status_error)) ? $status_error : "";?></span>
            </div>  

            <button type="submit" name="addnewbtn" class="btn btn-primary login">Add new</button>
        </form>
        </div>
        
    </div>
  </main>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>