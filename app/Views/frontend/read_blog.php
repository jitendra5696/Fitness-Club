<!-- Page Header Start -->
  <div class="container-fluid page-header-1 mb-5">
      <div class="d-flex flex-column align-items-center justify-content-center pt-0 pt-lg-5" style="min-height: 400px">
          <h4 class="display-4 mb-3 mt-0 mt-lg-5 text-white text-uppercase font-weight-bold">Our Blogs</h4>
          <div class="d-inline-flex">
              <p class="m-0 text-white"><a class="text-white" href="<?= base_url('home/index'); ?>">Home</a></p>
              <p class="m-0 text-white px-2">/</p>
              <p class="m-0 text-white"><a class="text-white" href="">Blogs</a></p>
          </div>
      </div>
  </div>
  <!-- Page Header End -->

<section>
  <div class="container">
    <div class="row">
      <div class="col-md-12 mb-4">
        <h1 class="text-center display-4 font-weight-bold text-uppercase"><?= $blog['title']  ?></h1>
      </div>
      <div class="col-md-6 offset-md-3 mb-5">
        <img src="<?= base_url('assets/backend/images/'.$blog['img']);  ?>" height="auto" width="100%" alt="">
      </div>
      <div class="col-md-10 offset-md-1 mb-3">
        <p class="details"><?= $blog['description'];  ?></p>
        <p class="details"><?= $blog['details'];  ?></p>
      </div>
    </div>
  </div>
</section>
