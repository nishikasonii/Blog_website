<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Navbar</title>
</head>
<body>
    <div class="dashboard-layout">
  
  <!-- Sidebar -->
  <aside class="sidebar">
    
    <div class="sidebar-brand">
      <div class="brand-text">
        <span class="brand-name ">Blogify</span>
      </div>
    </div>

    <nav class="sidebar-nav">
      <span class="nav-section">Main Menu</span>
      
      <!-- dashboard -->
      <a href="dashboard.php" class="nav-item active">
        <span class="nav-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
            <polyline points="9 22 9 12 15 12 15 22"/>
          </svg>
        </span>
        <span class="nav-label">Dashboard</span>
        <!-- <span class="nav-badge hot">4</span> -->
      </a>
      
      <!-- categories -->
      <a href="categories.php" class="nav-item">
        <span class="nav-icon">
          <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
            <path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/>
            <polyline points="9 22 9 12 15 12 15 22"/>
          </svg>
        </span>
        <span class="nav-label">Categories</span>
        <!-- <span class="nav-badge hot">4</span> -->
      </a>
  </aside>

  <!-- Main Content -->
  <main class="main-content">
    <header class="top-bar">
      <h1 class="page-title">Dashboard</h1>
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

    <div class="content-grid">
      <div class="stat-card">
        <div class="stat-label">Total Users</div>
        <div class="stat-value">10</div>
      </div>

      <div class="stat-card">
        <div class="stat-label">Total Categories</div>
        <div class="stat-value">10</div>
      </div>

      <div class="stat-card">
        <div class="stat-label">Total Posts</div>
        <div class="stat-value">25</div>
      </div>
      
    </div>
  </main>

</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/js/bootstrap.bundle.min.js" integrity="sha384-FKyoEForCGlyvwx9Hj09JcYn3nv7wiPVlz7YYwJrWVcXK/BmnVDxM+D2scQbITxI" crossorigin="anonymous"></script>
</body>
</html>