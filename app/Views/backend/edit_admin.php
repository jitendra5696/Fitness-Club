<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Update Admin details</h4>
          <?php if(!empty(session()->getFlashdata('added'))){ ?>
            <div class="alert alert-success text-center"><?= session()->getFlashdata('added');?></div>
            <?php  }  ?>
          <form class="forms-sample" method="post" action="<?= site_url('admin/update'); ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputName1">Fullname</label>
              <input type="text" class="form-control" id="exampleInputName1" value="<?= $admin['fullname']; ?>" name="fullname" placeholder="Fullname">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('fullname')){ echo $form_error->getError('fullname'); }  ?></div>
              <input type="hidden" class="form-control" name="user_id" value="<?= $admin['user_id']; ?>">
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Email address</label>
              <input type="text" class="form-control" id="exampleInputEmail3" value="<?= $admin['email'] ;?>" name="email" placeholder="Email">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('email')){ echo $form_error->getError('email'); }  ?></div>
            </div>
            <div class="form-group">
              <label>File upload</label>
              <div class="input-group col-xs-12">
                <input type="file" name="profile_pic" class="form-control" id="uploadfile" value="<?= $admin['profile_pic']; ?>" placeholder="Upload photo">
              </div>
              <span class="text-secondary">Previous Image</span><img src="<?= base_url('assets/backend/images/'.$admin['profile_pic']); ?>" width="100px" height="100px" alt="">
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Role</label>
              <input type="text" class="form-control" id="exampleInputCity1" value="<?php echo $admin['role']; ?>" name="role" placeholder="Role">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('role')){ echo $form_error->getError('role'); }  ?></div>
            <button type="submit" class="btn btn-primary me-2 mt-4">Update</button>
            <a href="<?= base_url('admin/display'); ?>" class="btn btn-dark mt-4 cancel">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
