<div class="main-panel">
     <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center">Admin Details</h4>
              <div class="table-responsive">
                  <table class="table table-hover table-bordered">
                    <thead>
                      <tr>
                        <th>User Id</th>
                        <th>Profile Picture</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Role</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                    <tbody>
                      <?php foreach ($admin_details as $value) { ?>
                      <tr>
                        <td><?= $value['user_id']; ?></td>
                        <td><img src="<?= base_url('assets/backend/images/'.$value['profile_pic']); ?>" style="width:100px; height:100px;" alt=""></td>
                        <td><?= $value['fullname']; ?></td>
                        <td><?= $value['email']; ?></td>
                        <td><?= $value['role']; ?></td>
                        <td><a href="<?= site_url('admin/delete/').$value['user_id']; ?>"><i class='fa fa-trash me-3' style='font-size:18px;color:red'></i></a><a href="<?= site_url('admin/edit/').$value['user_id']; ?>"><i class='far fa-edit' style='font-size:18px;color:green'></i></a></td>
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
