<body>
    <div class="container-scroller">

<!-- partial:partials/_sidebar.html -->
<nav class="sidebar sidebar-offcanvas" id="sidebar">
  <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
    <a class="sidebar-brand brand-logo" href="index.html"><img src="<?= base_url('assets/backend'); ?>/images/logo.svg" alt="logo" /></a>
    <a class="sidebar-brand brand-logo-mini" href="index.html"><img src="<?= base_url('assets/backend'); ?>/images/logo-mini.svg" alt="logo" /></a>
  </div>
  <ul class="nav">
    <li class="nav-item profile">
      <div class="profile-desc">
        <div class="profile-pic">
          <div class="count-indicator">
            <img class="img-xs rounded-circle " src="<?= base_url('assets/backend/images/'.$user_data['profile_pic']); ?>" alt="">
            <span class="count bg-success"></span>
          </div>
          <div class="profile-name">
            <h5 class="mb-0 font-weight-normal"><?php echo $user_data['fullname']; ?></h5>
            <span><?php echo $user_data['email'];  ?></span>
          </div>
        </div>
    </li>
    <li class="nav-item nav-category">
      <span class="nav-link">Admin Panel</span>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#auth" aria-expanded="false" aria-controls="auth">
        <span class="menu-icon">
          <i class="mdi mdi-calendar"></i>
        </span>
        <span class="menu-title">Manage Admin</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="auth">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link mb-2 mt-2" href="<?= base_url('admin/admin_register'); ?>"><span><i class="mdi mdi-account-plus me-2"></i></span>Add New Admin</a></li>
          <li class="nav-item"> <a class="nav-link mb-2" href="<?= base_url('admin/display'); ?>"><span><i class="mdi mdi-account-multiple me-2"></i></span>Admin Deatils</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#ui-basic" aria-expanded="false" aria-controls="ui-basic">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Trainers</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="ui-basic">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link mb-2 mt-2" href="<?= base_url('trainer/add'); ?>"><span><i class="mdi mdi-account-plus me-2"></i></span>Add New Trainer</a></li>
          <li class="nav-item"> <a class="nav-link mb-2" href="<?= base_url('trainer/show'); ?>"><span><i class="mdi mdi-account-multiple me-2"></i></span>All Trainers</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#schedule" aria-expanded="false" aria-controls="schedule">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Schedule</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="schedule">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link mb-2 mt-2" href="<?= base_url('schedule/add_sch'); ?>"><span><i class="mdi mdi-account-plus me-2"></i></span>Add New Slot</a></li>
          <li class="nav-item"> <a class="nav-link mb-2" href="<?= base_url('schedule/view_sch'); ?>"><span><i class="mdi mdi-account-multiple me-2"></i></span>Update Schedule</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#members" aria-expanded="false" aria-controls="members">
        <span class="menu-icon">
          <i class="mdi mdi-chart-bar"></i>
        </span>
        <span class="menu-title">Membership</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="members">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link mb-2 mt-2" href="<?= base_url('Members/add_member'); ?>"><span><i class="mdi mdi-account-plus me-2"></i></span>Add New Member</a></li>
          <li class="nav-item"> <a class="nav-link mb-2" href="<?= base_url('Members/membership'); ?>"><span><i class="mdi mdi-account-multiple me-2"></i></span>All Members</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#amenities" aria-expanded="false" aria-controls="amenities">
        <span class="menu-icon">
          <i class="mdi mdi-laptop"></i>
        </span>
        <span class="menu-title">Amenities</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="amenities">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link mb-2 mt-2" href="<?= base_url('amenities/add_amenities'); ?>"><span><i class="mdi mdi-account-plus me-2"></i></span>Add Amenities</a></li>
          <li class="nav-item"> <a class="nav-link mb-2" href="<?= base_url('amenities/display_amenities'); ?>"><span><i class="mdi mdi-account-multiple me-2"></i></span>All Amenities</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#blog" aria-expanded="false" aria-controls="blog">
        <span class="menu-icon">
          <i class="mdi mdi-calendar"></i>
        </span>
        <span class="menu-title">Blogs</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="blog">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link mb-2 mt-2" href="<?= base_url('blogs/index'); ?>"><span><i class="mdi mdi-account-plus me-2"></i></span>Add Blog</a></li>
          <li class="nav-item"> <a class="nav-link mb-2" href="<?= base_url('blogs/view_blog'); ?>"><span><i class="mdi mdi-account-multiple me-2"></i></span>View Blogs</a></li>
        </ul>
      </div>
    </li>
    <li class="nav-item menu-items">
      <a class="nav-link" data-bs-toggle="collapse" href="#contact" aria-expanded="false" aria-controls="contact">
        <span class="menu-icon">
          <i class="mdi mdi-calendar"></i>
        </span>
        <span class="menu-title">Contacts</span>
        <i class="menu-arrow"></i>
      </a>
      <div class="collapse" id="contact">
        <ul class="nav flex-column sub-menu">
        <li class="nav-item"><a class="nav-link mb-2 mt-2" href="<?= base_url('Contact/enquiries'); ?>"><span><span class="mdi mdi-eye-outline me-2"></span></span>See Enquiries</a></li>
        </ul>
      </div>
    </li>
  </ul>
</nav>
<!-- partial -->
