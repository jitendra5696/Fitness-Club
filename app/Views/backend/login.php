<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>Fitness Club Admin</title>
    <link rel="shortcut icon" href="<?= base_url('assets/backend'); ?>/images/favicone-1.png"  sizes="32x32"/>

    <style>
      body{
        background: url(https://as2.ftcdn.net/v2/jpg/03/26/90/61/1000_F_326906175_HSNqq1goEIPvqDYKmuCOTUltldc5e0nm.jpg);
        background-size: cover;
        background-attachment:fixed;
        margin: 0;
        padding: 0;
        color:white;

      }
      .card{
        margin-top: 100px
      }

    </style>
  </head>
  <body class="text-light">
    <div class="col-md-4 offset-md-4 grid-margin stretch-card">
      <div class="card bg-dark">
        <div class="card-body text center">
          <h4 class="card-title text-center">Log-In</h4>
          <?php if(!empty(session()->getTempdata('fail'))){  ?>
            <div class="alert alert-danger text-center"><?=  session()->getTempdata('fail'); ?></div>
          <?php } ?>
          <form method="post" action="<?php echo site_url('Admin/index'); ?>" enctype="multipart/form-data" class="forms-sample">
            <div class="form-group">
              <label for="exampleInputEmail1" class="mb-1">Email address</label>
              <input type="text" class="form-control" name="email" id="exampleInputEmail1" value="<?= set_value('email');  ?>"  placeholder="Email">
              <div class="text-danger mb-3"><?php if(isset($form_error) && $form_error->hasError('email')){ echo $form_error->getError('email'); } ?></div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1" class="mb-1">Password</label>
              <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="<?= set_value('password');  ?>"  placeholder="Password">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('password')){ echo $form_error->getError('password'); }?></div>
              <button type="submit" class="btn btn-primary me-2 mt-4">Log-In</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

  </body>
</html>
