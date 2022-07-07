<div class="main-panel">
         <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Amenities Available</h4>
                  <div class="table-responsive">
                      <table class="table table-hover table-bordered text-center">
                        <thead>
                          <tr>
                            <th>Id</th>
                            <th>Amenitie</th>
                            <th>Image</th>
                            <th>Edit</th>
                            <th>Delete</th>
                          </tr>
                      </thead>
                        <tbody>
                          <?php foreach ($details as $data) { ?>
                          <tr>
                            <td><?= $data['id']; ?></td>
                            <td><?= $data['heading']; ?></td>
                            <td><img src="<?= base_url('assets/backend/images/'.$data['img']); ?>" style="width:100px; height:100px;" alt="image"></td>
                            <td><a href="<?= site_url('amenities/edit/').$data['id']; ?>"><i class='far fa-edit' style='font-size:18px;color:green'></i></a></td>
                            <td><a href="<?= site_url('amenities/delete/').$data['id']; ?>"><i class='fa fa-trash me-3' style='font-size:18px;color:red'></i></a></td>
                          </tr>
                        <?php } ?>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
