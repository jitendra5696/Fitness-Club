<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <div class="container">
            <div class="row">
              <div class="col-md-6 offset-md-2">
                  <h4 class="card-title text-center">Site Settings</h4>
              </div>
              <div class="col-md-3 offset-md-1">
                  <a href="<?= base_url('admin/view'); ?>"><i class="mdi mdi-login"></i> View Data</a>
              </div>
            </div>
          </div>
          <?php if(!empty(session()->getTempdata('added'))){ ?>
            <div class="alert alert-success text-center"><?= session()->getTempdata('added');?></div>
            <?php  }  ?>
          <form class="forms-sample" method="post" action="">
            <div class="container">
              <div class="row">
                <div class="form-group col-md-12">
                  <label for="exampleInputName1">Owner Name</label>
                  <input type="text" class="form-control" id="exampleInputName1" name="name" placeholder="Owner Name">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('name')){ echo $form_error->getError('name'); }  ?></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputName1">Site Email</label>
                  <input type="text" class="form-control" id="email" name="email" placeholder="Site Email">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('email')){ echo $form_error->getError('email'); }  ?></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleInputName1">Contact no.</label>
                  <input type="text" class="form-control" id="mobile" name="mobile" placeholder="Contact no.">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('mobile')){ echo $form_error->getError('mobile'); }  ?></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Opening Time</label>
                  <input type="time" class="form-control" id="open_time" name="open_time" placeholder="Opening Time">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('open_time')){ echo $form_error->getError('open_time'); }  ?></div>
                </div>
                <div class="form-group col-md-6">
                  <label for="exampleInputName1">Closing Time</label>
                  <input type="time" class="form-control" id="closing_time" name="closing_time" placeholder="Closing Time">
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('closing_time')){ echo $form_error->getError('closing_time'); }  ?></div>
                </div>
                <div class="form-group col-md-12">
                  <label for="exampleFormControlTextarea1">Address</label>
                  <textarea class="form-control" id="address" name="address" rows="6" cols="50"></textarea>
                  <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('address')){ echo $form_error->getError('address'); }?></div>
                </div>
                <div class="col-md-6 offset-md-5">
                  <button type="submit" class="btn btn-primary me-2 mt-4">Add</button>
                  <a href="<?= base_url('admin/view'); ?>" class="btn btn-dark mt-4 cancel">Cancel</a>
                </div>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
