<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fitness Club</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free Website Template" name="keywords">
    <meta content="Free Website Template" name="description">

    <!-- Favicon -->
    <link href="<?= base_url('assets/frontend'); ?>/img/favicon.ico" rel="icon">

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Flaticon Font -->
    <link href="<?= base_url('assets/frontend'); ?>/lib/flaticon/font/flaticon.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="<?= base_url('assets/frontend'); ?>/css/style.min.css" rel="stylesheet">
      <link rel="shortcut icon" href="<?= base_url('assets/backend'); ?>/images/favicone-1.png"  sizes="64x64"/>
</head>

<body class="bg-white">
  <div id="loader"></div>
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="<?= base_url('home/index'); ?>" class="navbar-brand">
                <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Fitness Club</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                <div class="navbar-nav ml-auto p-4 bg-secondary">
                    <a href="<?= base_url('home/index'); ?>" class="nav-item nav-link active">Home</a>
                    <a href="<?= base_url('home/amenities'); ?>" class="nav-item nav-link">Amenities</a>
                    <a href="<?= base_url('home/membership'); ?>" class="nav-item nav-link">Membership</a>
                    <a href="<?= base_url('home/login'); ?>" class="nav-item nav-link">Log-in</a>
                    <a href="<?= base_url('home/contact'); ?>" class="nav-item nav-link">Contact</a>
                </div>
            </div>
        </nav>
    </div>
    <!-- Navbar End -->
