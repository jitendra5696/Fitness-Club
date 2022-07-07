<div class="main-panel">
     <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center">Visitors Enquiries</h4>
                <?php if(!empty(session()->getTempdata('sent'))){ ?>
                  <div class="alert alert-success text-center"><?= session()->getTempdata('sent');?></div>
                  <?php  }  ?>
              <div class="table-responsive">
                  <table class="table table-hover table-bordered">
                    <thead class="text-center">
                      <tr>
                        <th>User Id</th>
                        <th>Fullname</th>
                        <th>Email</th>
                        <th>Subject</th>
                        <th>Replay</th>
                        <th>Delete</th>
                      </tr>
                  </thead>
                    <tbody class="text-center">
                      <?php foreach ($contact as $value) { ?>
                      <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['fullname']; ?></td>
                        <td><?= $value['email']; ?></td>
                        <td><?= $value['subject']; ?></td>
                        <td><a href="<?= site_url('contact/replay/').$value['id']; ?>"><i class="fa-solid fa-reply-all" style='font-size:18px;color:green'></i></a></td>
                        <td><a href="<?= site_url('contact/delete/').$value['id']; ?>"><i class='fa fa-trash me-3' style='font-size:18px;color:red'></i></a></td>
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
