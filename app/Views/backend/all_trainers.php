    <div class="main-panel">
         <div class="content-wrapper">
            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                  <div class="card-body">
                    <h4 class="card-title text-center">Trainer Details</h4>
                  <div class="table-responsive">
                      <table class="table table-hover table-bordered">
                        <thead>
                          <tr>
                            <th>Trainer Id</th>
                            <th>Trainer Name</th>
                            <th>Trainer Pic</th>
                            <th>Gender</th>
                            <th>Speciality</th>
                            <th>Experience</th>
                            <th>Age</th>
                            <th>Action</th>
                          </tr>
                      </thead>
                        <tbody>
                          <?php foreach ($trainer as $data) { ?>
                          <tr>
                            <td><?= $data['trainer_id']; ?></td>
                            <td><?= $data['fullname']; ?></td>
                            <td><img src="<?= base_url('assets/backend/images/'.$data['img']); ?>" style="width:100px; height:100px;" alt="image"></td>
                            <td><?= $data['gender']; ?></td>
                            <td><?= $data['specialty']; ?></td>
                            <td><?= $data['experience']; ?></td>
                            <td><?= $data['age']; ?></td>
                            <td><a href="<?= site_url('trainer/delete/').$data['trainer_id']; ?>"><i class='fa fa-trash me-3' style='font-size:18px;color:red'></i></a><a href="<?= site_url('trainer/edit/').$data['trainer_id']; ?>"><i class='far fa-edit' style='font-size:18px;color:green'></i></a></td>
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
