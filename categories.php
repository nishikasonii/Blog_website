<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
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
    include_once('includes/header.php') 

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
            <tr>
                <td>1.</td>
                <td>Lifestyle & Personal Blogs</td>
                <td><span class="badge rounded-pill text-bg-success px-3 py-2">Active</span></td>
                <td>
                    <button type="button" class="btn btn-success px-3 py-1">Edit</button>
                    <button type="button" class="btn btn-danger px-2 py-1">Delete</button>
                </td>
            </tr>

            <tr>
                <td>2.</td>
                <td>Food & Recipe Blogs</td>
                <td><span class="badge rounded-pill text-bg-success px-3 py-2">Active</span></td>
                <td>
                    <button type="button" class="btn btn-success px-3 py-1">Edit</button>
                    <button type="button" class="btn btn-danger px-2 py-1">Delete</button>
                </td>
            </tr>

            <tr>
                <td>3.</td>
                <td>Business & Finance</td>
                <td><span class="badge rounded-pill text-bg-danger px-2 py-2">In Active</span></td>
                <td>
                    <button type="button" class="btn btn-success px-3 py-1">Edit</button>
                    <button type="button" class="btn btn-danger px-2 py-1">Delete</button>
                </td>
            </tr>

            <tr>
                <td>4.</td>
                <td>Technology & Science</td>
                <td><span class="badge rounded-pill text-bg-danger px-2 py-2">In Active</span></td>
                <td>
                    <button type="button" class="btn btn-success px-3 py-1">Edit</button>
                    <button type="button" class="btn btn-danger px-2 py-1">Delete</button>
                </td>
            </tr>
        </tbody>
    </table>
  </main>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>