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
    <div class="container-fluid p-0 nav-bar">
        <nav class="navbar navbar-expand-lg bg-none navbar-dark py-3">
            <a href="<?= base_url('home/index'); ?>" class="navbar-brand">
              <h1 class="m-0 display-4 font-weight-bold text-uppercase text-white">Fitness Club</h1>
                <span class="m-0 font-weight-bold text-uppercase text-white">Home/Membership</span>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
        </nav>
    </div>
    <!-- Navbar End -->
    <section class="h-100 h-custom" style="background-color: #8fc4b7;">
      <div class="container py-5 h-100">
        <div class="row d-flex justify-content-center align-items-center h-100">
          <div class="col-lg-8 col-xl-6">
            <div class="card rounded-3">
              <img src="<?= base_url('assets/frontend'); ?>/img/bg.jpg"
                class="w-100" style="border-top-left-radius: .3rem; border-top-right-radius: .3rem;"
                alt="Sample photo">
              <div class="card-body p-4 p-md-5">
                <?php if(!empty(session()->getTempdata('added'))){ ?>
                  <div class="alert alert-success text-center text-dark font-weight-bold "><?= session()->getTempdata('added'); ?></div>
                <?php } ?>
                <h3 class="mb-4 pb-2 pb-md-0 mb-md-5 px-md-2 text-center">Update Details here</h3>
                <form method="post" action="<?= base_url('home/update_member'); ?>" enctype="multipart/form-data">
                    <div class="container">
                      <div class="row">
                        <div class="col-md-12 control-group">
                            <input type="file" class="form-control mb-2" name="file" value="<?= $member['file'];  ?>"/>   <label for="">Previous Image</label>
                            <?php if(!empty($member['file'])){ ?>
                              <img src="<?= base_url('assets/backend/images/'.$member['file']);  ?>" width="50px" height="50px" alt="">
                            <?php } ?>
                        </div>
                        <div class="col-md-12 control-group mt-3">
                            <input type="text" class="form-control" name="name" placeholder="Your Name" value="<?= $member['name'];  ?>"/>
                            <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('name')){ echo $form_error->getError('name'); }  ?></div>
                        </div>
                        <div class="col-md-12 control-group mt-3">
                            <input type="email" class="form-control" name="email" placeholder="Your Email" value="<?= $member['email'];  ?>"/>
                            <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('email')){ echo $form_error->getError('email'); }  ?></div>
                        </div>
                        <div class="col-md-12 control-group mt-3">
                            <input type="text" class="form-control" name="mobile" placeholder="Contact No." value="<?= $member['mobile'];  ?>"/>
                            <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('mobile')){ echo $form_error->getError('mobile'); }  ?></div>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputEmail3">Joining Date</label>
                          <input type="date" class="form-control" id="date" name="date" readonly value="<?= date('Y-m-d', strtotime($member['date']));  ?>"/>
                          <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('date')){ echo $form_error->getError('date'); }  ?></div>
                        </div>
                        <div class="form-group col-md-6">
                          <label for="exampleInputEmail3">Expire Date</label>
                          <input type="date" class="form-control" id="expire_date" name="expire_date" readonly value="<?= date('Y-m-d', strtotime($member['expire_date']));  ?>"/>
                          <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('date')){ echo $form_error->getError('date'); }  ?></div>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <input type="text" class="form-control" name="age" placeholder="Your Age" value="<?= $member['age'];  ?>"/>
                            <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('age')){ echo $form_error->getError('age'); }  ?></div>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <input type="text" class="form-control" name="fees" readonly value="<?= $member['fees'];  ?>"/>
                            <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('age')){ echo $form_error->getError('age'); }  ?></div>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <select class="form-control" name="gender" value="">
                              <option value="">Gender</option>
                              <option value="Male" <?=$member['gender'] == 'Male' ? 'selected' : '' ?>>Male</option>
                              <option value="Female" <?=$member['gender'] == 'Female' ? 'selected' : '' ?>>Female</option>
                              <option value="Other" <?=$member['gender'] == 'Other' ? 'selected' : '' ?>>Other</option>
                            </select>
                            <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('gender')){ echo $form_error->getError('gender'); }  ?></div>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <input type="text" class="form-control" name="current_weight" placeholder="Current weight (Kgs)" value="<?= $member['current_weight'];  ?>"/>
                            <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('current_weight')){ echo $form_error->getError('current_weight'); }  ?></div>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <input type="text" class="form-control" name="desired_weight" placeholder="Desired weight (Kgs)"  value="<?= $member['desired_weight'];  ?>"/>
                            <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('desired_weight')){ echo $form_error->getError('desired_weight'); }  ?></div>
                        </div>
                        <div class="col-md-6 control-group mt-3">
                            <select class="form-control" name="batch">
                              <option value="">Batch Timing</option>
                              <option value="Morning" <?=$member['batch'] == 'Morning' ? 'selected' : '' ?>>Morning</option>
                              <option value="After-Noon" <?=$member['batch'] == 'After-Noon' ? 'selected' : '' ?>>After-Noon</option>
                              <option value="Evening" <?=$member['batch'] == 'Evening' ? 'selected' : '' ?>>Evening</option>
                            </select>
                            <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('batch')){ echo $form_error->getError('batch'); }  ?></div>
                        </div>
                        <div class="col-md-12 control-group mt-3">
                            <select class="form-control" name="trainer" placeholder="Need Personal Trainer?"  value="">
                              <option value="">Need Personal Trainer?</option>
                              <option value="yes" <?=$member['trainer'] == 'yes' ? 'selected' : '' ?>>Yes</option>
                              <option value="no" <?=$member['trainer'] == 'no' ? 'selected' : '' ?>>No</option>
                            </select>
                            <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('trainer')){ echo $form_error->getError('trainer'); }  ?></div>
                        </div>
                        <div class="col-md-6 mt-4 mb-4">
                            <button class="btn btn-outline-primary px-5" type="submit" id="sendMessageButton">Update</button>
                        </div>
                        <div class="col-md-6 mt-4 mb-4">
                            <a href="<?= base_url('home/profile'); ?>" class="btn btn-outline-primary px-5" id="sendMessageButton">Cancel</a>
                        </div>
                      </div>
                    </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
