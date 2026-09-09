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
  <?php include_once('includes/sidebar.php') ?>

  <!-- Main Content -->
  <main class="main-content">
    <header class="top-bar">
      <h1 class="page-title">Add New Category</h1>
      <div class="header-actions">
        <button class="btn-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M18 8A6 6 0 006 8c0 7-3 9-3 9h18s-3-2-3-9"/>
            <path d="M13.73 21a2 2 0 01-3.46 0"/>
          </svg>
        </button>
        <div class="header-avatar">
          <button type="button" class="btn btn-primary">Log Out</button>
        </div>
      </div>
    </header>

    <!-- To add new categories -->
    <div class="container addnewform">
        <div class="row">
            <form action="" method="POST">
            <h1 class="heading">Add New Category</h1>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Category Name:</label>
                <input type="text" class="form-control" id="exampleFormControlInput1">
            </div>

            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Status:</label>
                <select class="form-select" aria-label="Default select example">
                    <option selected>Select Status</option>
                    <option value="active">Active</option>
                    <option value="in active">InActive</option>
                </select>
            </div>  

            <button type="button" class="btn btn-primary login">Add new</button>
        </form>
        </div>
        
    </div>
  </main>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>