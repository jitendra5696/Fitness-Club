<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Add new trainer here</h4>
          <?php if(!empty(session()->getTempdata('added'))){ ?>
            <div class="alert alert-success text-center"><?= session()->getTempdata('added');?></div>
            <?php  }  ?>
          <form class="forms-sample" method="post" action="<?= site_url('members/add_member');  ?>" enctype="multipart/form-data">
            <div class="container">
              <div class="row">
                <div class="form-group col-md-12">
                  <label>File upload</label>
                  <div class="input-group col-xs-12">
                    <input class="form-control file-upload-info" name="img" type="file" id="formFile">
                    <span class="input-group-append">
                    </span>
                  </div>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputName1">Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="fullname" placeholder="Fullname">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('fullname')){ echo $form_error->getError('fullname'); }  ?></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail3">Email address</label>
                  <input type="text" class="form-control" id="exampleInputEmail3" name="email" placeholder="Email">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('email')){ echo $form_error->getError('email'); }  ?></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputEmail3">Password</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Password">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('password')){ echo $form_error->getError('password'); }  ?></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputCity1">Mobile</label>
                  <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Mobile">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('mobile')){ echo $form_error->getError('mobile'); }  ?></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword4">Age</label>
                  <input type="text" class="form-control" id="exampleInputPassword4" name="age" placeholder="Age">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('age')){ echo $form_error->getError('age'); }  ?></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail3">Gender</label>
                  <select class="form-control" name="gender">
                      <option value="">Select your Gender</option>
                      <option value="Male">Male</option>
                      <option value="Female">Female</option>
                      <option value="Other">Other</option>
                  </select>
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('gender')){ echo $form_error->getError('gender'); }  ?></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail3">Joining Date</label>
                  <input type="date" class="form-control" name="date" value=""/>
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('date')){ echo $form_error->getError('date'); }  ?></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail3">Fees Status</label>
                  <select class="form-control" name="fees">
                      <option value="Pending">Pending</option>
                      <option value="Paid">Paid</option>
                  </select>
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('fees')){ echo $form_error->getError('fees'); }  ?></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword4">Current Weight</label>
                  <input type="text" class="form-control" id="current_weight" name="current_weight" placeholder="Current Weight">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('current_weight')){ echo $form_error->getError('current_weight'); }  ?></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputPassword4">Desired Weight</label>
                  <input type="text" class="form-control" id="desired_weight" name="desired_weight" placeholder="Current Weight">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('desired_weight')){ echo $form_error->getError('desired_weight'); }  ?></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail3">Batch Timing</label>
                  <select class="form-control" name="batch">
                      <option value="">Select your Batch</option>
                      <option value="Morning">Morning</option>
                      <option value="After-noon">After-noon</option>
                      <option value="Evening">Evening</option>
                  </select>
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('batch')){ echo $form_error->getError('batch'); }  ?></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputEmail3">Need Trainer?</label>
                  <select class="form-control" name="trainer">
                      <option value="">Do you need trainer?</option>
                      <option value="Yes">Yes</option>
                      <option value="No">No</option>
                  </select>
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('trainer')){ echo $form_error->getError('trainer'); }  ?></div>
                </div>
                <div class="form-group col-md-6 offset-md-3">
                <button type="submit" class="btn btn-primary me-2">Submit</button>
                <a href="<?= base_url('members/membership');  ?>" class="btn btn-dark cancel">Cancel</a>
              </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
