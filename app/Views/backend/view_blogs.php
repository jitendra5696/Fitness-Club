<div class="main-panel">
     <div class="content-wrapper">
        <div class="col-lg-12 grid-margin stretch-card">
            <div class="card">
              <div class="card-body">
                <h4 class="card-title text-center">Admin Details</h4>
              <div class="table-responsive">
                  <table class="table table-hover table-bordered">
                    <thead class="text-center">
                      <tr>
                        <th>Blog Id</th>
                        <th>Title</th>
                        <th>Edit Blog</th>
                        <th>Delete Blog</th>
                      </tr>
                  </thead>
                    <tbody class="text-center">
                      <?php foreach ($blog as $value) { ?>
                      <tr>
                        <td><?= $value['id']; ?></td>
                        <td><?= $value['title']; ?></td>
                        <td><a href="<?= site_url('blogs/edit_blog/').$value['id']; ?>"><i class='far fa-edit' style='font-size:18px;color:green'></i></a></td>
                        <td><a href="<?= site_url('blogs/delete_blog/').$value['id']; ?>"><i class='fa fa-trash me-3' style='font-size:18px;color:red'></i></a></td>
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
