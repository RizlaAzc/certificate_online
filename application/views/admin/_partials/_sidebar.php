      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar">
        <ul class="nav">
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/dashboard') ?>">
              <i class="mdi mdi-view-dashboard menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item nav-category">Event</li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/event') ?>">
              <i class="menu-icon mdi mdi-calendar-edit"></i>
              <span class="menu-title">Events</span>
            </a>
          </li>
          <li class="nav-item nav-category">Certificate</li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/generate_certificate') ?>">
              <i class="menu-icon mdi mdi-file-document-edit"></i>
              <span class="menu-title">Certificates</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="<?= base_url('admin/download_certificate') ?>">
              <i class="menu-icon mdi mdi-file-document"></i>
              <span class="menu-title">Generate Certificates</span>
            </a>
          </li>
        </ul>
      </nav>