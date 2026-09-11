<?php
session_start();
if(!isset($_SESSION['email'])){
    header('location: login.php');
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Categories</title>
</head>

<body>
    <div class="dashboard-layout">

        <!-- Sidebar -->
        <?php 
            $page_name = "Categories";
            include_once('includes/sidebar.php');
        ?>


        <!-- Main Content -->
        <main class="main-content">
            <?php 
            $page_name="Categories";
            include_once('includes/header.php');

            require_once('includes/connection.php');
            $sql="SELECT * FROM categories";
            $result = mysqli_query($conn, $sql);
            ?>

            <!-- Add new button -->
            <a href="addnew.php" class="btn btn-primary addnew">+ Add New</a>

            <!-- Categories Table -->
            <table class="table table-hover">
                <thead class="text-center table-primary">
                    <tr>
                        <th scope="col">Id</th>
                        <th scope="col">Name</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>

                <tbody class="text-center table-info">

                <?php
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        $class=$row['status']==1 ? "success" : "danger";
                ?>
                <tr>
                    <th scope="row">
                        <?php echo $row['id']; ?>
                    </th>

                    <td>
                        <?php echo $row['name']; ?>
                    </td>

                    <td>
                        <span class="badge rounded-pill text-bg-<?php echo $class; ?> px-3 py-2">
                            <?php echo $row['status'] == 1 ? "Active" : "InActive"; ?>
                        </span>
                    </td>

                    <td>
                        <a href="update.php ? id=<?php echo $row['id'];?>" class="btn btn-success px-3 py-1">Edit</a>
                        <a href="delete.php ? id=<?php echo $row['id'];?>" class="btn btn-danger px-2 py-1">Delete</a>
                    </td>
                </tr>

                <?php
                    }

                } else {
                ?>
                <tr>
                    <td colspan="4" align="center">
                        No records found
                    </td>
                </tr>

                <?php
                }
                ?>

                </tbody>
            </table>
        </main>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>