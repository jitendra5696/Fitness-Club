<div class="main-panel">
  <div class="content-wrapper">
    <div class="col-12 grid-margin stretch-card">
      <div class="card">
        <div class="card-body">
          <h4 class="card-title text-center">Update Aminities</h4>
          <?php if(!empty(session()->getTempdata('added'))){ ?>
            <div class="alert alert-success text-center"><?= session()->getTempdata('added');?></div>
            <?php  }  ?>
          <form class="forms-sample" method="post" action="<?= site_url('Amenities/update');  ?>" enctype="multipart/form-data">
            <div class="form-group">
              <label for="exampleInputName1">Heading</label>
              <input type="text" class="form-control" id="exampleInputName1" name="title" placeholder="Heading" value="<?= $details['heading'];?>">
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('title')){ echo $form_error->getError('title'); }?></div>
            </div>
            <input type="hidden" class="form-control" name="id" value="<?= $details['id'];?>">
            <div class="form-group">
              <label>Image</label>
              <input type="file" name="img" class="form-control" value="<?= $details['img'];?>">
            </div>
            <span class="me-3">Previous Image</span><img src="<?= base_url('assets/backend/images/'.$details['img']) ;?>" height="100px" width="100px" alt="">
            <div class="form-group">
              <label for="exampleFormControlTextarea1">Description</label>
              <textarea class="form-control" id="description" name="description" rows="3" cols="50"><?= $details['description'];?></textarea>
              <div class="text-danger"><?php if(isset($form_error) && $form_error->hasError('description')){ echo $form_error->getError('description'); }?></div>
            </div>
            <button type="submit" class="btn btn-primary me-2 mt-4">Update</button>
            <a href="<?= base_url('amenities/display_amenities'); ?>" class="btn btn-dark mt-4 cancel">Cancel</a>
          </form>
        </div>
      </div>
    </div>
  </div>
</div>
