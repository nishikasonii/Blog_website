<aside class="sidebar">
    
    <div class="sidebar-brand">
      <div class="brand-text">
        <span class="brand-name ">Blogify</span>
      </div>
    </div>

    <nav class="sidebar-nav">
      <span class="nav-section">Main Menu</span>
      
      <!-- dashboard -->
      <a href="dashboard.php" class="nav-item <?php echo $page_name=="Dashboard"? "active" : "" ?>">
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
      <a href="categories.php" class="nav-item <?php echo $page_name=="Categories"? "active" : "" ?>">
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