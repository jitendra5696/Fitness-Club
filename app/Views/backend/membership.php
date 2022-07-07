<div class="main-panel">
     <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center">Regular Gym Members</h4>
                <?php if(!empty(session()->getTempdata('update'))) { ?>
                  <div class="alert alert-success" role="alert"><?= session()->getTempdata('updated'); ?></div>
                <?php } ?>
              <div class="table-responsive">
                  <table class="table table-hover table-bordered">
                    <thead class="text-center">
                      <tr>
                        <th>Id</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Joining Date</th>
                        <th>Membership Expires</th>
                        <th>Batch</th>
                        <th>Membership Fees</th>
                        <th>Action</th>
                      </tr>
                  </thead>
                    <tbody class="text-center">
                      <?php foreach ($memebrs as $value) { ?>
                      <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['name']; ?></td>
                        <td><?= $value['email']; ?></td>
                        <td><?= date("j M Y", (strtotime($value['date']))); ?></td>
                        <td><?= date("j M Y", (strtotime($value['expire_date']))); ?></td>
                        <td><?= $value['batch']; ?></td>
                        <td><?= $value['fees']; ?></td>
                        <td><a href="<?= base_url('members/edit_member/'.$value['id']); ?>"><i class='far fa-edit me-5' style='font-size:18px;color:green'></i></a><button data-id="'.<?= base_url('members/delete/'.$value['id']); ?>.'"><i class='fa fa-trash me-3' style='font-size:18px;color:red'></i></button></td>
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
