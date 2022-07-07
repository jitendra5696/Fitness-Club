  <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
            <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Our Features</h4>
            <div class="d-inline-flex">
                <p class="m-0 text-white"><a class="text-white" href="<?= base_url('home/index'); ?>">Home</a></p>
                <p class="m-0 text-white px-2">/</p>
                <p class="m-0 text-white">Amenities</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


<!-- GYM Feature Start -->
  <div class="container feature pt-5">
      <div class="d-flex flex-column text-center mb-5">
          <h4 class="text-primary font-weight-bold">Why Choose Us?</h4>
          <h4 class="display-4 font-weight-bold">Ameneties in Fitness Club</h4>
      </div>
      <div class="row">
          <?php foreach ($data as $value) { ?>
            <div class="col-md-6 mb-5">
                <div class="row align-items-center">
                    <div class="col-sm-5">
                        <img class="img-fluid mb-3 mb-sm-0" src="<?= base_url('assets/backend/images/'.$value['img']); ?>" width="100%" height="auto" alt="Image">
                        <i class="flaticon-barbell"></i>
                    </div>
                    <div class="col-sm-7">
                        <h4 class="font-weight-bold"><?= $value['heading']; ?></h4>
                        <p><?= $value['description']; ?></p>
                    </div>
                </div>
            </div>
        <?php } ?>
      </div>
  </div>
  <!-- GYM Feature End -->
