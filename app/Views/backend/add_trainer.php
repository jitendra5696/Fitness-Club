<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Add new trainer here</h4>
          <?php if(!empty(session()->getTempdata('added'))){ ?>
            <div class="alert alert-success text-center"><?= session()->getTempdata('added');?></div>
            <?php  }  ?>
          <p class="card-description"> Basic details of Trainer </p>
          <form class="forms-sample" method="post" id="trainer_details" action="<?= site_url('trainer/add');  ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputName1">Name</label>
              <input type="text" class="form-control" id="exampleInputName1" name="fullname" placeholder="Fullname">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('fullname')){ echo $form_error->getError('fullname'); }  ?></div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Email address</label>
              <input type="text" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('email')){ echo $form_error->getError('email'); }  ?></div>
            </div>
            <div class="form-group">
              <label for="exampleInputEmail3">Gender</label>
              <select class="form-control" name="gender">
                  <option value="">Select your Gender</option>
                  <option value="Male">Male</option>
                  <option value="Female">Female</option>
                  <option value="Other">Other</option>
              </select>
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('gender')){ echo $form_error->getError('gender'); }  ?></div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Specialty</label>
              <input type="text" class="form-control" id="exampleInputPassword4" name="specialty" placeholder="Specialty">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('specialty')){ echo $form_error->getError('specialty'); }  ?></div>
            </div>
            <div class="form-group">
              <label for="exampleInputCity1">Experience</label>
              <input type="text" class="form-control" id="exampleInputCity1" name="experience" placeholder="Experience">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('experience')){ echo $form_error->getError('experience'); }  ?></div>
            </div>
            <div class="form-group">
              <label for="exampleInputPassword4">Age</label>
              <input type="text" class="form-control" id="exampleInputPassword4" name="age" placeholder="Age">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('age')){ echo $form_error->getError('age'); }  ?></div>
            </div>
            <div class="form-group">
              <label>File upload</label>
              <input type="file" name="img" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <button type="button" class="btn btn-primary file-upload-browse">Upload</button>
                <span class="input-group-append">
                </span>
              </div>
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('img')){ echo $form_error->getError('img'); }?></div>
            </div>
            <button type="submit" class="btn btn-primary me-2" id="trainer">Submit</button>
            <a href="<?= base_url('Trainer/show'); ?>" class="btn btn-dark cancel">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
