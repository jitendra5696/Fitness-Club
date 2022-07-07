<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Add Aminities</h4>
          <?php if(!empty(session()->getTempdata('added'))){ ?>
            <div class="alert alert-success text-center"><?= session()->getTempdata('added');?></div>
            <?php  }  ?>
          <form class="forms-sample" method="post" action="<?= site_url('Amenities/add_amenities');  ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputName1">Heading</label>
              <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Heading">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('title')){ echo $form_error->getError('title'); }  ?></div>
            </div>
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="img" class="file-upload-default">
              <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <button type="button" class="btn btn-primary file-upload-browse">Upload</button>
                <span class="input-group-append">
                </span>
              </div>
            </div>
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Example textarea</label>
              <textarea class="form-control" id="description" name="description" rows="3" cols="50"></textarea>
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('description')){ echo $form_error->getError('description'); }?></div>
            </div>
            <button type="submit" class="btn btn-primary me-2 mt-4">Add</button>
            <a href="<?= base_url('Amenities/display_amenities');  ?>" class="btn btn-dark mt-4 cancel">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
