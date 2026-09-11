<?php
require_once 'includes/connection.php';

session_start();
if(!isset($_SESSION['email'])){
  header('location: login.php');
}


if(isset($_GET['id'])){
    $id=$_GET['id'];
    $sql="SELECT * FROM categories WHERE id=$id";
    $result=mysqli_query($conn, $sql);
    if(mysqli_num_rows($result)==1){
        while($row=mysqli_fetch_assoc($result)){
            $id=$row['id'];
            $name=$row['name'];
            $status=$row['status'];
        }
    }
    else{
        echo "No result found";
    }
}


// Delete validation
$validation=true;
if(isset($_POST["deletebtn"]) && ($_SERVER["REQUEST_METHOD"] == "POST")){

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

    $id=$_POST['id'];
    if($validation){
        $sql = "DELETE FROM categories WHERE id=$id";
        if(mysqli_query($conn, $sql)){
            header('location: categories.php');
        }
        else{
            "Error: Deleting";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Delete Category</title>
</head>

<body>
    <div class="dashboard-layout">
        <!-- Sidebar -->
        <?php 
        $page_name="Delete Category";
        // include_once('includes/sidebar.php') 
        ?>

        <!-- Main Content -->
        <main class="main-content">
            <!-- <?php include_once('includes/header.php') ?> -->

            <!-- To delete categories -->
            <div class="container addnewform">
                <div class="row">
                    <form action="delete.php" method="POST">
                        <h1 class="heading">Delete</h1>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Category Name:</label>
                            <input type="text" name="category_name" value="<?php echo isset($name) ? $name : "";?>"
                                class="form-control" id="exampleFormControlInput1">
                            <span class="text-danger"><?php echo(isset($categoryname_error)) ? $categoryname_error : "";?></span>
                        </div>

                        <div class="mb-3">
                            <label for="exampleFormControlInput1" class="form-label">Status:</label>
                            <select name="status" class="form-select" aria-label="Default select example">
                                <option value="" selected>Select Status</option>
                                <option value="1" <?php echo $status==1 ? "selected" : ""; ?>>Active</option>
                                <option value="0" <?php echo $status==0 ? "selected" : ""; ?>>InActive</option>
                            </select>
                            <span class="text-danger"><?php echo(isset($status_error)) ? $status_error : "";?></span>
                        </div>

                        <input type="hidden" name="id" value=<?php echo isset($_GET['id']) ? $_GET['id'] : "" ;?>>
                        <button type="submit" name="deletebtn" class="btn btn-primary mt-3">Delete</button>
                        <a href="categories.php" class="btn btn-primary mt-3 px-3">Back</a>
                    </form>
                </div>
            </div>
        </main>

    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js"integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>

</html>