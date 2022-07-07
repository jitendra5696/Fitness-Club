<div class="main-panel">
     <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center">View Site data</h4>
                <?php if(!empty(session()->getTempdata('update'))) { ?>
                  <div class="alert alert-success" role="alert"><?= session()->getTempdata('updated'); ?></div>
                <?php } ?>
              <div class="table-responsive">
                  <table class="table table-hover table-bordered">
                    <thead class="text-center">
                      <tr>
                        <th>Id</th>
                        <th>Owner Name</th>
                        <th>Site Email</th>
                        <th>Contact No.</th>
                        <th>Opening Time</th>
                        <th>Closing Time</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                    <tbody class="text-center">
                      <?php foreach ($details as $value) { ?>
                      <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['name']; ?></td>
                        <td><?= $value['email']; ?></td>
                        <td><?= $value['mobile']; ?></td>
                        <td><?= $value['open_time']; ?></td>
                        <td><?= $value['closing_time']; ?></td>
                        <td><a href="<?= base_url('admin/edit_data/'.$value['id']); ?>"><i class='far fa-edit me-5' style='font-size:18px;color:green'></i></a><a href="<?= base_url('admin/delete_data/'.$value['id']); ?>"><i class='fa fa-trash me-3' style='font-size:18px;color:red'></i></a></td>
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
