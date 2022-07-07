<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Add new Admin</h4>
          <?php if(!empty(session()->getTempdata('added'))){ ?>
            <div class="alert alert-success text-center"><?= session()->getTempdata('added');?></div>
            <?php  }  ?>
          <form class="forms-sample" method="post" action="<?= site_url('admin/admin_register');  ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputName1">Fullname</label>
              <input type="text" class="form-control" id="exampleInputName1" name="fullname" placeholder="Fullname">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('fullname')){ echo $form_error->getError('fullname'); }  ?></div>
            </div>
            <div class="form-group">
              <label>File upload</label>
              <input type="file" name="profile_pic" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <button type="button" class="btn btn-primary file-upload-browse">Upload</button>
                <span class="input-group-append">
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Email address</label>
              <input type="text" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('email')){ echo $form_error->getError('email'); }  ?></div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword4" name="password" placeholder="Password">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('password')){ echo $form_error->getError('password'); }  ?></div>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Role</label>
              <input type="text" class="form-control" id="exampleInputCity1" name="role" placeholder="Role">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('role')){ echo $form_error->getError('role'); }  ?></div>
            <button type="submit" class="btn btn-primary me-2 mt-4">Register</button>
            <a href="<?= base_url('admin/display'); ?>" class="btn btn-dark mt-4 cancel">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
