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
      <link rel="shortcut icon" href="<?= base_url('assets/backend'); ?>/images/favicone-1.png"  sizes="32x32"/>
      <style>
        .error{
          color:red;
        }
      </style>
</head>

<body class="bg-white">
    <!-- Navbar Start -->
    <div class="container-fluid p-0 nav-bar text-center">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="<?= base_url('home/index'); ?>" class="navbar-brand">
              <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Fitness Club</h1>
                <span class="m-0 font-weight-bold text-uppercase text-white">Home/Membership</span>
            </a>
        </nav>
    </div>
    <!-- Navbar End -->
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3">
              <img src="<?= base_url('assets/frontend'); ?>/img/regi-form.jpg"
                class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                alt="Sample photo">
              <div class="card-body p-4 p-md-5">
                <?php if(!empty(session()->getTempdata('added'))){ ?>
                  <div class="alert alert-success text-center text-dark font-weight-bold "><?= session()->getTempdata('added'); ?></div>
                <?php } ?>
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">Registration Form</h3>
                <form id="memberForm" action="" method="post" enctype="multipart/form-data">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 control-group">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" value=""/>
                        </div>
                        <div class="col-md-12 control-group mt-3">
                            <input type="text" class="form-control" name="email" id="email" placeholder="Your Email" value=""/>
                            <span class="text-danger mt-3" id="invalid"></span>
                        </div>
                        <div class="col-md-12 control-group mt-3">
                            <input type="password" class="form-control" name="password" id="password" placeholder="Password"/>
                        </div>
                        <div class="col-md-12 control-group mt-3">
                            <input type="text" class="form-control" name="mobile" placeholder="Contact No." value=""/>
                        </div>
                        <div class="col-md-12 control-group mt-3">
                            <input type="text" class="form-control" name="age" placeholder="Your Age" value=""/>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <input type="date" class="form-control" name="date" value=""/>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <select class="form-control" name="gender">
                              <option value="">Gender*</option>
                              <option value="Male">Male</option>
                              <option value="Female">Female</option>
                              <option value="Other">Other</option>
                            </select>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <input type="text" class="form-control" name="current_weight" placeholder="Current weight (Kg)" value="<?= set_value('current_weight');  ?>"/>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <input type="text" class="form-control" name="desired_weight" placeholder="Desired weight (Kg)" value="<?= set_value('desired_weight');  ?>"/>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <select class="form-control" name="batch">
                              <option value="">Batch Timing</option>
                              <option value="Morning">Morning</option>
                              <option value="After-Noon">After-Noon</option>
                              <option value="Evening">Evening</option>
                            </select>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <select class="form-control" name="trainer">
                              <option value="">Need Personal Trainer?*</option>
                              <option value="yes">Yes</option>
                              <option value="no">No</option>
                            </select>
                        </div>
                        <div class="col-md-6 mt-4 mb-4">
                            <button class="btn btn-outline-primary px-5" type="submit" id="send">Register</button>
                        </div>
                      </div>
                    </div>
                </form>
                <a href="<?php echo base_url('home/login'); ?>"><span class=" mt-5">Already have Account? Try Log-in</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
