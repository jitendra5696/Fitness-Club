<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Update trainer Details here</h4>
          <p class="card-description"> Basic details of Trainer </p>
          <form class="forms-sample" method="post" action="<?= site_url('Trainer/update'); ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputName1">Name</label>
              <input type="text" class="form-control" id="exampleInputName1" name="fullname" value="<?= $details['fullname']; ?>" placeholder="Fullname">
            </div>
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('fullname')){ echo $form_error->getError('fullname'); }  ?>
              </div>
              <div class="form-group">
                <label>File upload</label>
                <input type="file" name="img" class="form-control" value="<?= $details['img']; ?>">
                <span class="text-light">Previous Image</span><img src="<?= base_url('assets/backend/images/'.$details['img']);  ?>" width="100px" height="100px" alt="">
              </div>
              <input type="hidden" class="form-control" name="trainer_id" value="<?php echo $details['trainer_id']; ?>">
            <div class="form-group">
              <label for="exampleInputEmail3">Email address</label>
              <input type="text" class="form-control" id="exampleInputEmail3" name="email" value="<?php echo $details['email']; ?>" placeholder="Email"></div>
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('email')){ echo $form_error->getError('email'); }  ?></div>
            <div class="form-group">
              <label for="exampleInputEmail3">Gender</label>
              <select class="form-control" name="gender">
                  <option value="">Gender</option>
                  <option value="male" <?= $details['gender'] == 'male' ? 'selected' : '' ?>>Male</option>
                  <option value="female" <?= $details['gender'] == 'female' ? 'selected' : '' ?>>Female</option>
                  <option value="other" <?= $details['gender'] == 'other' ? 'selected' : '' ?>>Other</option>
              </select>
            </div>
            <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('gender')){ echo $form_error->getError('gender'); }  ?></div>
            <div class="form-group">
              <label for="exampleInputPassword4">Specialty</label>
              <input type="text" class="form-control" id="exampleInputPassword4" name="specialty" value="<?= $details['specialty']; ?>" placeholder="Specialty"></div>
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('specialty')){ echo $form_error->getError('specialty'); }  ?></div>
            <div class="form-group">
              <label for="exampleInputCity1">Experience</label>
              <input type="text" class="form-control" id="exampleInputCity1" name="experience" value="<?php echo $details['experience']; ?>" placeholder="Experience"></div>
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('experience')){ echo $form_error->getError('experience'); }  ?></div>
            <div class="form-group">
              <label for="exampleInputPassword4">Age</label>
              <input type="text" class="form-control" id="exampleInputPassword4" name="age" value="<?php echo $details['age']; ?>" placeholder="Age"><div class="form-group">
                <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('age')){ echo $form_error->getError('age'); }  ?></div>
            <button type="submit" class="btn btn-primary me-2 mt-3" id="trainer">Update</button>
            <a href="<?= site_url('Trainer/show'); ?>" class="btn btn-dark mt-3">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
